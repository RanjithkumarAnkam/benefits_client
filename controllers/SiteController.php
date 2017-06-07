<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\ForgotPasswordForm;
use app\models\User;
use yii\db\Expression;
use app\models\SetPasswordForm;
use app\models\PasswordForm;
use app\models\AdminUsers;
use app\models\FirmUsers;
use app\models\ClientUser;
use app\models\Firms;
use app\models\Clients;
use app\components\SessionCheckComponent;
use app\models\UserIdentityCookie;

class SiteController extends Controller {
	/**
	 * @inheritdoc
	 */
	public function behaviors() {
		return [ 
				'access' => [ 
						'class' => AccessControl::className (),
						'only' => [ 
								'logout' 
						],
						'rules' => [ 
								[ 
										'actions' => [ 
												'logout' 
										],
										'allow' => true,
										'roles' => [ 
												'@' 
										] 
								] 
						] 
				],
				'verbs' => [ 
						'class' => VerbFilter::className (),
						'actions' => [ 
								/*'logout' => [ 
										'post' 
								]*/ 
						] 
				] 
		];
	}
	
	/**
	 * @inheritdoc
	 */
	public function actions() {
		return [ 
				'error' => [ 
						'class' => 'yii\web\ErrorAction' 
				],
				'captcha' => [ 
						'class' => 'yii\captcha\CaptchaAction',
						'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null 
				] 
		];
	}
	
	/**
	 * Displays homepage.
	 *
	 * @return string
	 */
	public function actionIndex() {
		// return $this->render ( 'index' );
		return $this->redirect ( array ( // redirecting to admin page
				'/site/login' 
		) );
	}
	
	/**
	 * Login action.
	 *
	 * @return string
	 */
	public function actionLogin() {
		$this->layout = 'login-main';
		
		// check if user identity is already set or not
		if (! Yii::$app->user->isGuest) {
			// getting login url based on loogedin usertype
			$result = SessionCheckComponent::RedirectionandSessioncreation();
			$login_url = $result['login_url'];
			return $this->redirect ( array ( // redirecting to dashboard page
					$login_url 
			) );
		}
		
		$model = new LoginForm ();
		$modelforgotpassword = new ForgotPasswordForm ();
		$modeluser = new User ();
		
		if ($model->load ( Yii::$app->request->post () ) && $model->login ()) {			
			$user_id = Yii::$app->user->identity->user_id;
			
			// getting login url based on loggedin usertype
			$result = SessionCheckComponent::RedirectionandSessioncreation();
			$login_url = $result['login_url'];
			
			return $this->redirect ( array ( // redirecting to admin page
					$login_url 
			) );
		}
		
		if ($modelforgotpassword->load ( Yii::$app->request->post () ) && $modelforgotpassword->validate ()) {
			
			$arrresult = array ();
			try {
				// find by username
				$user_details = $modeluser->findByUsername ( $modelforgotpassword->username );
				
				if (! empty ( $user_details )) {
					
					// Setting password reset token
					$user_details->generatePasswordResetToken ();
					
					if ($user_details->save ()) {
						
						$password_reset_token = $user_details->password_reset_token;
						
						$to = $modelforgotpassword->username;
						$from = 'sky@analytics.com';
						$name = $to;
						// creating link
						$link = \Yii::$app->urlManager->createAbsoluteUrl ( '/forgot-password' ) . '?token=' . $password_reset_token . '&email=' . $modelforgotpassword->username;
						$company_email = 'sky@analytics.com';
						$company_phone = '89998989898';
						$company_logo = \Yii::$app->urlManager->createAbsoluteUrl ( '/images/logo/benefits.png' );
						
						// send forgot password mail
						$mail_result = \Yii::$app->customMail->forgotpasswordmail ( $to, $from, $name, $link, $company_email, $company_phone, $company_logo );
						
						if (! empty ( $mail_result )) {
							\Yii::$app->session->setFlash ( 'success', 'Password reset link sent to your mail id' );
						} else {
							\Yii::$app->session->setFlash ( 'error', 'Some error occurred while sending mail' );
						}
					}
				}
			} catch ( \Exception $e ) {
				$msg = $e->getMessage ();
				\Yii::$app->session->setFlash ( 'error', $msg );
			}
		}
		
		return $this->render ( 'login', [ 
				'model' => $model,
				'modelforgotpassword' => $modelforgotpassword 
		] );
	}
	
	/**
	 * Forgot password link
	 */
	public function actionForgotPassword($token) {
		if (! empty ( $token )) {
			$this->layout = 'login-main';
			// variables
			$user_details = '';
			$is_expired = false;
			
			$model = new User ();
			$model_password_form = new SetPasswordForm ();
			// find by reset token
			$user_details = $model->findByPasswordResetToken ( $token );
			
			if (! empty ( $user_details )) {
				if ($model_password_form->load ( Yii::$app->request->post () ) && $model_password_form->validate ()) {
					try {
						
						$user_details->setPassword ( $model_password_form->confirmpassword );
						$user_details->removePasswordResetToken ();
						
						if ($user_details->save ()) {
							
							//deleting old cookie in db
							UserIdentityCookie::deleteAll('user_id = :user_id', [':user_id' => $user_details->user_id]);
						
							\Yii::$app->session->setFlash ( 'success', 'Password updated successfully' );
							return $this->redirect ( array ( // redirecting to login page
									'/site/login' 
							) );
						}
					} catch ( \Exception $e ) {
						
						$msg = $e->getMessage ();
						\Yii::$app->session->setFlash ( 'error', $msg );
					}
				}
				
				return $this->render ( 'forgot-password', [ 
						'model' => $model,
						'model_password_form' => $model_password_form 
				] );
			} else {
				\Yii::$app->session->setFlash ( 'error', 'Password reset link has expired.' );
				return $this->redirect ( array ( // redirecting to login page
						'/site/login' 
				) );
			}
		}
	}
	
	/**
	 * Verify link
	 */
	public function actionVerifyMail($authkey) {
		if (! empty ( $authkey )) {
			$this->layout = 'login-main';
			// variables
			$user_details = '';
			
			$model = new User ();
			$model_password_form = new SetPasswordForm ();
			// find by reset token
			$user_details = $model->findByAuthKey ( $authkey );
			
			if (! empty ( $user_details ) && $user_details->is_verified == 0) {
				
				$user_details->is_verified = 1;
				/**
				 * ***Check if password is already set or not********
				 */
				 $transaction = \Yii::$app->db->beginTransaction (); // begin the transaction
				try {
								
				if ($user_details->password == '') {
					
					\Yii::$app->session->setFlash ( 'success', 'Email verification pending, please set password to complete verification.' );
					
					if ($model_password_form->load ( Yii::$app->request->post () ) && $model_password_form->validate ()) {
							
							$user_details->setPassword ( $model_password_form->confirmpassword );
							$user_details->is_active = 1;
							
							if ($user_details->save ()) {
								
								$user_id = $user_details->user_id;
								
								switch ($user_details->usertype) {
									/**
									 * ****if admin*******
									 */
									case '1' :
										$userdetailModel = AdminUsers::find ()->where ( [ 
												'user_id' => $user_id 
										] )->One ();
										$userdetailModel->extension = ( string ) $userdetailModel->extension;
										break;
									/**
									 * ****if firm*******
									 */
									case '2' :
										$userdetailModel = FirmUsers::find ()->where ( [ 
												'user_id' => $user_id 
										] )->One ();
										break;
									/**
									 * ****if client*******
									 */
									case '3' :
										$userdetailModel = ClientUser::find ()->where ( [ 
												'user_id' => $user_id 
										] )->One ();
										break;
								}
								
								$userdetailModel->is_active = 1;
								
								if ($userdetailModel->save ()) {
									$transaction->commit ();
									\Yii::$app->session->setFlash ( 'success', 'Email verified and password updated successfully.' );
									return $this->redirect ( array ( // redirecting to login page
											'/site/login' 
									) );
								}
							}
						
					}
					
					return $this->render ( 'forgot-password', [ 
							'model' => $model,
							'model_password_form' => $model_password_form 
					] );
				} else {
					
					if ($user_details->save ()) {
						$transaction->commit ();
						\Yii::$app->session->setFlash ( 'success', 'Email verified successfully.' );
						return $this->redirect ( array ( // redirecting to login page
								'/site/login' 
						) );
					}
				}
				
				} catch ( \Exception $e ) {
							$transaction->rollback (); // if exception occurs transaction rollbacks
							$msg = $e->getMessage ();
							\Yii::$app->session->setFlash ( 'error', $msg );
						}
				
			} else {
				
				
				\Yii::$app->session->setFlash ( 'error', 'Verification link has expired.' );
				return $this->redirect ( array ( // redirecting to login page
						'/site/login' 
				) );
			}
		}
	}
	public function actionChangePassword() {
		$get_details = \Yii::$app->request->get (); // getting the details
		$model_password = new PasswordForm (); // initialising model
		$model_users = new User ();
		$output = array (); // initialising array
		
		$session = \Yii::$app->session; // initialising session
		$logged_user_id = Yii::$app->user->identity->user_id; // getting session variables
		if (! empty ( $get_details ['oldpass'] ) && ! empty ( $get_details ['newpass'] ) && ! empty ( $get_details ['repeatnewpass'] )) {
			$oldpass = $get_details ['oldpass'];
			$newpass = $get_details ['newpass'];
			$repeatnewpass = $get_details ['repeatnewpass'];
			
			$model_password->oldpass = $oldpass;
			$model_password->newpass = $newpass;
			$model_password->repeatnewpass = $repeatnewpass;
			
			$transaction = \Yii::$app->db->beginTransaction (); // begin the transaction
			try {
				if ($model_password->validate ()) { // validating the model
					$user_details = $model_users->findIdentity ( $logged_user_id ); // finding for the user
					$user_details->setPassword ( $newpass );
					
					if ($user_details->save ()) { // saving the model
					
					
						//deleting old cookie in db
						UserIdentityCookie::deleteAll('user_id = :user_id', [':user_id' => $logged_user_id]);
						
						$transaction->commit (); // commiting the transaction
						$output ['success'] = 'success';
					}
				} else {
					$output ['fail'] = $model_password->errors; // sending response to ajax in array
				}
			} catch ( Exception $e ) { // catch the exceptions
				
				$msg = $e->getMessage ();
				$output ['fail'] = $msg;
				
				$transaction->rollback (); // if exception occurs transaction rollbacks
			}
			return json_encode ( $output ); // returning the object to ajax
		}
	}
	/**
	 * Logout action.
	 *
	 * @return string
	 */
	public function actionLogout() {
		Yii::$app->user->logout ();
		\Yii::$app->SessionCheck->Adminlogout ();
		
		// return $this->goHome ();
		return $this->redirect ( array ( // redirecting to login page
				'/site/login' 
		) );
	}
}
