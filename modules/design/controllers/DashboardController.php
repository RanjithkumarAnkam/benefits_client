<?php

namespace app\modules\design\controllers;

use yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\User;
use app\components\AccessRuleComponent;
use yii\filters\VerbFilter;

class DashboardController extends BaseController {
	
	/**
	 * @inheritdoc
	 */
	public function behaviors() {
		return [ 
				'access' => [ 
						'class' => AccessControl::className(),
						'ruleConfig' => [
							'class' => AccessRuleComponent::className ()
						],
						
						'rules' => [ 
								[ 
										'allow' => true,
										'actions' => [ 
												'admin' ,'firms','clients','admintest','test','testone','testtwo'
										],
										'roles' => [ 
												User::ADMIN 
										] 
								],
								[
								'allow' => true,
								'actions' => [
								'firms','clients','test'
										],
										'roles' => [
										User::FIRM
										]
										],
										[
										'allow' => true,
										'actions' => [
										'clients'
												],
												'roles' => [
												User::CLIENT
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
	public $layout = 'main-layout';
	public function actionAdmin() {
	\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Dashboard';
		return $this->render ( 'index' );
	}
	
	public function actionAdmintest() {
	\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Dashboard';
		return $this->render ( 'index-test' );
	}
	
	public function actionFirms() {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Dashboard';
		return $this->render ( 'firm-dashboard' );
	}
	public function actionClients() {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Dashboard';
		return $this->render ( 'clientdashboard' );
	}
	public function actionTest() {
		\Yii::$app->view->title = 'Benefits Client | Test';
		return $this->render ( 'test' );
	}
	public function actionTestone() {
		\Yii::$app->view->title = 'Benefits Client | Test';
		return $this->render ( 'test-test' );
	}
	
	public function actionTesttwo() {
		\Yii::$app->view->title = 'Benefits Client | Test';
		return $this->render ( 'test-two' );
	}
}
