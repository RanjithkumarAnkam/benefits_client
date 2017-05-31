<?php

namespace app\modules\design\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

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
		//return $this->render ( 'index' );
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
		/*
		 * if (! Yii::$app->user->isGuest) { return $this->goHome (); }
		 */
		$model = new LoginForm ();
		
		if ($model->load ( Yii::$app->request->post () ) && $model->login ()) {	
		
				switch (Yii::$app->user->identity->usertype) {
				case 1:
					$login_url = '/design'.\Yii::$app->params['admin_url'];
					break;
				case 2:
					$login_url = '/design/'.\Yii::$app->params['firm_url'];
					break;
				case 3:
					$login_url = '/design/'.\Yii::$app->params['client_url'];
					break;
			}
			return $this->redirect ( array ( // redirecting to admin page
					$login_url
			) );
		
		}
		return $this->render ( 'login', [ 
				'model' => $model 
		] );
	}
	
	public function actionLogintest() {
		$this->layout = 'login-main';
		/*
		 * if (! Yii::$app->user->isGuest) { return $this->goHome (); }
		 */
		$model = new LoginForm ();
		
		if ($model->load ( Yii::$app->request->post () ) && $model->login ()) {	
		
				switch (Yii::$app->user->identity->usertype) {
				case 1:
					$login_url = \Yii::$app->params['admin_url'];
					break;
				case 2:
					$login_url = \Yii::$app->params['firm_url'];
					break;
				case 3:
					$login_url = \Yii::$app->params['client_url'];
					break;
			}
			return $this->redirect ( array ( // redirecting to admin page
					$login_url
			) );
		
		/*	$session = \Yii::$app->session;
			$useremail = $model->getUser ()->attributes ['username'];
			$usertype = $model->getUser ()->attributes ['usertype'];
			$logged_id = $model->getUser ()->attributes ['user_id'];
			$session->set ( 'logged_status', true );
			/*
			 * if ($session ['logged_usertype'] == 1) { $permissions = \Yii::$app->Permission->getloggeduserpermission ( $session ['logged_id'] ); $session ['logged_permissions'] = $permissions; }
			 */
			
		/*	if ($usertype == 1) {
				$session ['is_admin'] = 'admin'; // checking for admin
				$session ['admin_user_id'] = $logged_id; // storing the values in session
				$session ['admin_email'] = $useremail;
			//	$session ['user_type'] = $useremail;
				// $session ['admin_permissions'] = $permissions;
				
				return $this->redirect ( array ( // redirecting to admin page
						'/dashboard/admin' 
				) );
			}else if($usertype == 2){
				$session ['is_firm'] = 'firm'; // checking for admin
				$session ['firm_user_id'] = $logged_id; // storing the values in session
				$session ['firm_email'] = $useremail;
				return $this->redirect ( array ( // redirecting to admin page
						'/dashboard/firms'
				) );
			}else if($usertype == 3){
				$session ['is_client'] = 'client'; // checking for admin
				$session ['client_user_id'] = $logged_id; // storing the values in session
				$session ['client_email'] = $useremail;
				return $this->redirect ( array ( // redirecting to admin page
						'/dashboard/client'
				) );
			}*/
		}
		return $this->render ( 'login-test', [ 
				'model' => $model 
		] );
	}
	
	/**
	 * Logout action.
	 *
	 * @return string
	 */
	public function actionLogout() {
		//Yii::$app->user->logout ();
		//\Yii::$app->SessionCheck->Adminlogout ();
		
		//return $this->goHome ();
		return $this->redirect ( array ( // redirecting to login page
				'/design/site/login'
		) );
	}
	
	/**
	 * Displays contact page.
	 *
	 * @return string
	 */
	public function actionContact() {
		$model = new ContactForm ();
		if ($model->load ( Yii::$app->request->post () ) && $model->contact ( Yii::$app->params ['adminEmail'] )) {
			Yii::$app->session->setFlash ( 'contactFormSubmitted' );
			
			return $this->refresh ();
		}
		return $this->render ( 'contact', [ 
				'model' => $model 
		] );
	}
	
	/**
	 * Displays about page.
	 *
	 * @return string
	 */
	public function actionAbout() {
		return $this->render ( 'about' );
	}
	public function actionRegister() {
		if (! Yii::$app->user->isGuest) {
			return $this->goHome ();
		}
		
		$model = new LoginForm ();
		if ($model->load ( Yii::$app->request->post () ) && $model->login ()) {
			return $this->goBack ();
		}
		return $this->render ( 'register', [ 
				'model' => $model 
		] );
	}
}
