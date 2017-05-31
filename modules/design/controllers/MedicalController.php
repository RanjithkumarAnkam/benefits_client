<?php

namespace app\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\User;
use app\models\ContactForm;
use app\components\AccessRuleComponent;

class MedicalController extends BaseController
{
	public function behaviors() {
		return [
		'access' => [
		'class' => AccessControl::className (),
		'ruleConfig' => [
		'class' => AccessRuleComponent::className ()
		],
		'only' => [
		'levelfundedmonthlyclaim','fullyinsuredmonthlyclaim','partiallyinsuredmonthlyclaim'
				],
				'rules' => [
				[
				'allow' => true,
				'actions' => [
	
				],
				'roles' => [
				User::ADMIN,
				User::FIRM
				]
				]
				]
					
				]
				,
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
    public function actionFullyinsuredmonthlyclaim()
    {    	
        return $this->render('fully-insured-monthly-claim');
    }
	
	public function actionLevelfundedmonthlyclaim()
    {    	
        return $this->render('level-funded-monthly-claim');
    }
	
	public function actionPartiallyinsuredmonthlyclaim()
    {    	
        return $this->render('partially-insured-monthly-claim');
    }
    
   
}
