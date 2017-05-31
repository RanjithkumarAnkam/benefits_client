<?php

namespace app\controllers;

use yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\User;
use app\components\AccessRuleComponent;
use yii\filters\VerbFilter;

class CompanyController extends BaseController {
		public function behaviors() {
		return [ 
				'access' => [ 
						'class' => AccessControl::className(),
						'ruleConfig' => [
							'class' => AccessRuleComponent::className ()
						],
						'only' => [ 
								'index','addcompany','editcompany','manage-companies','manage-company-users','add-company-user','update-company-user'
						],
						'rules' => [ 
								[ 
										'allow' => true,
										'actions' => [ 
												'index','addcompany','editcompany','manage-companies','manage-company-users','add-company-user','update-company-user'
										],
										'roles' => [ 
												User::ADMIN ,User::FIRM
										] 
								],
								[
								'allow' => true,
								'actions' => [
									'editcompany','manage-company-users','add-company-user','update-company-user'
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
	public function actionIndex() {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Manage Clients';
		return $this->render ( 'index' );
	}
	public function actionAddcompany() {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Add Clients';
		return $this->render ( 'addform' );
	}
	public function actionEditcompany() {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Update Clients';
		 $get_plan_type = \Yii::$app->request->get ();
		 $company_id = $get_plan_type['company_id'];
		 if(empty($company_id)){
			 $company_id = 1;
		 }
		return $this->render ( 'editform',['company_id'=>$company_id] );
	}
	public function actionManageCompanies() {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Manage Clients';
		return $this->render ( 'manage-companies' );
	}
	public function actionManageCompanyUsers() {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Manage Client Users';
		return $this->render ( 'manage-company-users' );
	}
	public function actionAddCompanyUser() {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Add Client Users';
		return $this->render ( 'add-form-user' );
	}
	public function actionUpdateCompanyUser() {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Update Client Users';
		
		 $get_plan_type = \Yii::$app->request->get ();
		 $company_user_id = $get_plan_type['company_user_id'];
		 if(empty($company_user_id)){
			 $company_user_id = 1;
		 }
		return $this->render ( 'edit-form-user' ,['company_user_id'=>$company_user_id]);
	}
}
