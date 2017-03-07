<?php

namespace app\modules\admin\controllers;

use yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\User;
use app\components\AccessRuleComponent;
use yii\filters\VerbFilter;

class ClientusersController extends \yii\web\Controller
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
