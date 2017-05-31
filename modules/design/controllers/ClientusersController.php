<?php

namespace app\controllers;

use yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\User;
use app\components\AccessRuleComponent;
use yii\filters\VerbFilter;

class ClientusersController extends Controller
{
	
	public function behaviors() {
		return [ 
				'access' => [ 
						'class' => AccessControl::className(),
						'ruleConfig' => [
							'class' => AccessRuleComponent::className ()
						],
						'only' => [ 
								'addclientuser','editclientuser','clientusersearchresults'
						],
						'rules' => [ 
								[ 
										'allow' => true,
										'actions' => [ 
												'addclientuser','editclientuser','clientusersearchresults'
										],
										'roles' => [ 
												User::ADMIN ,User::FIRM
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
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionAddclientuser()
    {
    	return $this->render('addform');
    }
    
    public function actionEditclientuser()
    {
    	return $this->render('editform');
    }

    public function actionClientusersearchresults()
    {
    	return $this->render('searchresults');
    }
}
