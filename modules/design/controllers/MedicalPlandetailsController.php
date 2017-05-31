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

class MedicalPlandetailsController extends BaseController
{
	public function behaviors() {
		return [
		'access' => [
		'class' => AccessControl::className (),
		'ruleConfig' => [
		'class' => AccessRuleComponent::className ()
		],
		'only' => [
		'medicalpartiallyselfinsured','medicalfullyinsured','medicallevelfunded'
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
    public function actionMedicalpartiallyselfinsured()
    {
    	return $this->render('partiallyselfinsured');
    }
	
	 public function actionMedicalfullyinsured()
    {
    	return $this->render('fullyinsured');
    }
	
	 public function actionMedicallevelfunded()
    {
    	return $this->render('levelfunded');
    }
    

}
