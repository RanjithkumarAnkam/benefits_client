<?php

namespace app\controllers;

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
						'only' => [ 
								'admin',
								'firms',
								'clients',
								
						],
						'rules' => [ 
								[ 
										'allow' => true,
										'actions' => [ 
												'admin' ,'firms','clients',
										],
										'roles' => [ 
												User::ADMIN 
										] 
								],
								[
								'allow' => true,
								'actions' => [
								'firms','clients'
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
	
	/* rendering layout */
	public $layout = 'main-layout';
	
	/* action for Admin Dashboard */
	public function actionAdmin() {
		//print_r(\Yii::$app->session['permissions']); die();
	\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Dashboard';     //page title
		return $this->render ( 'index' );                                          //rendering to view
	}
	/* action for Firm Dashboard */
	public function actionFirms() {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Dashboard'; //page title
		return $this->render ( 'firm-dashboard' );                                   //rendering to view
	}
	
	/* action for Client Dashboard */
	public function actionClients() {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Dashboard'; //page title
		return $this->render ( 'clientdashboard' );                                   //rendering to view
	}
	
}
