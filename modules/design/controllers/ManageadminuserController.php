<?php

namespace app\modules\design\controllers;


use yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\User;
use app\components\AccessRuleComponent;
use yii\filters\VerbFilter;

class ManageadminuserController extends BaseController
{
	
		public function behaviors() {
		return [ 
				'access' => [ 
						'class' => AccessControl::className(),
						'ruleConfig' => [
							'class' => AccessRuleComponent::className ()
						],
						'only' => [ 
								'index','add','update','manage-users'
						],
						'rules' => [ 
								[ 
										'allow' => true,
										'actions' => [ 
												'index','add','update','manage-users'
										],
										'roles' => [ 
												User::ADMIN 
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
    public function actionAdd()
    {
		
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Add User';
        return $this->render('add');
    }
	
	public function actionUpdate()
    {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Update User';
		
		 $get_plan_type = \Yii::$app->request->get ();
		 $admin_user_id = $get_plan_type['admin_user_id'];
		 if(empty($admin_user_id)){
			 $admin_user_id = 1;
		 }
		 
        return $this->render('update',['admin_user_id'=>$admin_user_id]);
    }
	
	public function actionManageUsers()
    {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Manage Users';
        return $this->render('manage-users');
    }

}
