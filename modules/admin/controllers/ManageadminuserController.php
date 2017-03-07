<?php

namespace app\modules\admin\controllers;


use yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\User;
use app\components\AccessRuleComponent;
use yii\filters\VerbFilter;

class ManageadminuserController extends \yii\web\Controller
{
	
		public function behaviors() {
		return [ 
				'access' => [ 
						'class' => AccessControl::className(),
						'ruleConfig' => [
							'class' => AccessRuleComponent::className ()
						],
						'only' => [ 
								'index'
						],
						'rules' => [ 
								[ 
										'allow' => true,
										'actions' => [ 
												'index'
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

}
