<?php

namespace app\controllers;

use yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\User;
use app\components\AccessRuleComponent;
use yii\filters\VerbFilter;

class FirmsController extends BaseController
{
	
	public function behaviors() {
		return [ 
				'access' => [ 
						'class' => AccessControl::className(),
						'ruleConfig' => [
							'class' => AccessRuleComponent::className ()
						],
						'only' => [ 
								'add-firm','update-firm','manage-firm','firm-user','updatefirm-user','manage-firm-user','firmpricing'
						],
						'rules' => [ 
								[ 
										'allow' => true,
										'actions' => [ 
												'add-firm','update-firm','manage-firm','firm-user','updatefirm-user','manage-firm-user','firmpricing'
										],
										'roles' => [ 
												User::ADMIN 
										] 
								],
								[
								'allow' => true,
								'actions' => [
								'update-firm','firm-user','updatefirm-user','manage-firm-user','firmpricing',
										],
										'roles' => [
										User::FIRM
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
    public function actionAddFirm()
    {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Add Firm';
    	
        return $this->render('add-firm');
    }
    
    public function actionUpdateFirm()
    {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Update Firm';
    	 $get_plan_type = \Yii::$app->request->get ();
		 $firm_id = $get_plan_type['firm_id'];
		 if(empty($firm_id)){
			 $firm_id = 1;
		 }
    	return $this->render('update-firm',['firm_id'=>$firm_id]);
    }
    
    public function actionManageFirm()
    {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Manage Firms';
    
    	return $this->render('manage-firm');
    }
    
    public function actionFirmUser()
    {
    	 \Yii::$app->view->title = \Yii::$app->params['page_title'].' | Add Firm Users';
		 
    	return $this->render('firm-user');
    }
    public function actionUpdatefirmUser()
    {
    \Yii::$app->view->title = \Yii::$app->params['page_title'].' | Update Firm Users';
	
	 $get_plan_type = \Yii::$app->request->get ();
		 $firm_user_id = $get_plan_type['firm_user_id'];
		 if(empty($firm_user_id)){
			 $firm_user_id = 1;
		 }
		 
    	return $this->render('updatefirm-user',['firm_user_id'=>$firm_user_id]);
    }
    public function actionManageFirmUser()
    {
    \Yii::$app->view->title = \Yii::$app->params['page_title'].' | Manage Firms';
    	return $this->render('manage-firm-user');
    }
    public function actionFirmpricing()
    {
    \Yii::$app->view->title = \Yii::$app->params['page_title'].' | Manage Firms';
    	return $this->render('firmpricing');
    }



}
