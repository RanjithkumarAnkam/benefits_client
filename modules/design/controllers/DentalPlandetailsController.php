<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\User;
use app\components\AccessRuleComponent;

class DentalPlandetailsController extends BaseController
{
	public function behaviors() {
		return [
		'access' => [
		'class' => AccessControl::className (),
		'ruleConfig' => [
		'class' => AccessRuleComponent::className ()
		],
		'only' => [
		'dentalpartiallyselfinsured','dentalfullyinsured'
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
   
	public function actionDentalpartiallyselfinsured()
    {
    	return $this->render('dentalpartiallyselfinsured');
    }
    public function actionDentalfullyinsured()
    {
    	return $this->render('dentalfullyinsured');
    }
	
}
