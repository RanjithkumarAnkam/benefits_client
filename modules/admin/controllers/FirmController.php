<?php

namespace app\modules\admin\controllers;

use yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\User;
use app\components\AccessRuleComponent;
use yii\filters\VerbFilter;

class FirmController extends \yii\web\Controller
{
	
	public function behaviors() {
		return [ 
				'access' => [ 
						'class' => AccessControl::className(),
						'ruleConfig' => [
							'class' => AccessRuleComponent::className ()
						],
						'only' => [ 
								'add-firm','update-firm','manage-firm','firm-user','updatefirm-user','manage-firm-user'
						],
						'rules' => [ 
								[ 
										'allow' => true,
										'actions' => [ 
												'add-firm','update-firm','manage-firm','firm-user','updatefirm-user','manage-firm-user'
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
	
	
	public $layout = 'main';
    public function actionAddFirm()
    {
    	
        return $this->render('add-firm');
    }
    
    public function actionUpdateFirm()
    {
    	 
    	return $this->render('update-firm');
    }
    
    public function actionManageFirm()
    {
    
    	return $this->render('manage-firm');
    }
    
    public function actionFirmUser()
    {
    	 
    	return $this->render('firm-user');
    }
    public function actionUpdatefirmUser()
    {
    
    	return $this->render('firm-user');
    }
    public function actionManageFirmUser()
    {
    
    	return $this->render('manage-firm-user');
    }

}
