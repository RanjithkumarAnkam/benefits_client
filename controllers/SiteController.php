<?php

namespace app\controllers;

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
			$session = \Yii::$app->session;
			$useremail = $model->getUser ()->attributes ['username'];
			$usertype = $model->getUser ()->attributes ['usertype'];
			$logged_id = $model->getUser ()->attributes ['user_id'];
			$session->set ( 'logged_status', true );
			/*
			 * if ($session ['logged_usertype'] == 1) { $permissions = \Yii::$app->Permission->getloggeduserpermission ( $session ['logged_id'] ); $session ['logged_permissions'] = $permissions; }
			 */
			
			if ($usertype == 1) {
				$session ['is_admin'] = 'admin'; // checking for admin
				$session ['admin_user_id'] = $logged_id; // storing the values in session
				$session ['admin_email'] = $useremail;
				// $session ['admin_permissions'] = $permissions;
				
				return $this->redirect ( array ( // redirecting to admin page
						'/admin/dashboard' 
				) );
			}
		}
		return $this->render ( 'login', [ 
				'model' => $model 
		] );
	}
	
	/**
	 * Logout action.
	 *
	 * @return string
	 */
	public function actionLogout() {
		Yii::$app->user->logout ();
		\Yii::$app->SessionCheck->Adminlogout ();
		
		//return $this->goHome ();
		return $this->redirect ( array ( // redirecting to login page
				'/site/login'
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
