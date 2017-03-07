<?php

namespace app\modules\admin\controllers;


use yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\User;
use app\components\AccessRuleComponent;
use yii\filters\VerbFilter;

class MasterdataController extends \yii\web\Controller
{
	
		public function behaviors() {
		return [ 
				'access' => [ 
						'class' => AccessControl::className(),
						'ruleConfig' => [
							'class' => AccessRuleComponent::className ()
						],
						'only' => [ 
								'systembilling','systempricing','firmpricing'
						],
						'rules' => [ 
								[ 
										'allow' => true,
										'actions' => [ 
												'systembilling','systempricing','firmpricing'
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
    
    public function actionSystembilling()
    {
    	return $this->render('billing');
    }
    
    public function actionSystempricing()
    {
    	return $this->render('pricing');
    }
    
    public function actionFirmpricing()
    {
    	return $this->render('firmpricing');
    }

}
