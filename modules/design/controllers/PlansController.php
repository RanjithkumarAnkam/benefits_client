<?php

namespace app\modules\design\controllers;

use yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\User;
use app\components\AccessRuleComponent;
use yii\filters\VerbFilter;

class PlansController extends BaseController
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
												User::ADMIN ,User::FIRM,User::CLIENT
										] 
								],
							
								
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
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | List';
 
		return $this->render ( 'index');
	}
	
	public function actionTest() {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | List';
 
		return $this->render ( 'test');
	}
	
	public function actionTestplan() {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | List';
 
		return $this->render ( 'testplan');
	}
	
}
