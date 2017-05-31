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

class VisionPlandetailsController extends BaseController
{
	public function behaviors() {
		return [
		'access' => [
		'class' => AccessControl::className (),
		'ruleConfig' => [
		'class' => AccessRuleComponent::className ()
		],
		'only' => [
		'visionselfinsured','visionfullyinsured'
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
   
	public function actionVisionselfinsured()
    {
    	return $this->render('visionselfinsured');
    }
    public function actionVisionfullyinsured()
    {
    	return $this->render('visionfullyinsured');
    }
}
