<?php

namespace app\modules\admin\controllers;

use yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\User;
use app\components\AccessRuleComponent;
use yii\filters\VerbFilter;

class ClientsController extends \yii\web\Controller
{
	
	public function behaviors() {
		return [ 
				'access' => [ 
						'class' => AccessControl::className(),
						'ruleConfig' => [
							'class' => AccessRuleComponent::className ()
						],
						'only' => [ 
								'addclient' ,'editclient' ,'addclientuser','editclientuser','clientsearchresult','clientusersearchresult'
						],
						'rules' => [ 
								[ 
										'allow' => true,
										'actions' => [ 
												'addclient','editclient','addclientuser','clientsearchresult','clientusersearchresult'
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
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionAddclient()
    {
    	return $this->render('addform');
    }
    
    public function actionEditclient()
    {
    	return $this->render('editform');
    }
    
    public function actionClientsearchresults()
    {
    	return $this->render('searchresults');
    }

    public function actionAddclientuser()
    {
    	return $this->render('addform-user');
    }
    
    public function actionEditclientuser()
    {
    	return $this->render('editform-user');
    }
    
    public function actionClientusersearchresults()
    {
    	return $this->render('searchresults-user');
    }
}
