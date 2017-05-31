<?php

namespace app\controllers;

use yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\User;
use app\components\AccessRuleComponent;
use yii\filters\VerbFilter;

class ReportsController extends BaseController
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
	
	public function actionPlanYearClaimsOnlyReport() {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | List';
 
		return $this->render ( 'plan-year-claims-only-report');
	}
	
	public function actionPlanYearTotalReport() {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | List';
 
		return $this->render ( 'plan-year-total-report');
	}
	
	public function actionBudgetReport() {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | List';
 
		return $this->render ( 'budget-report');
	}
	
	public function actionRemainderYearProjectReport() {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | List';
 
		return $this->render ( 'remainder-year-project-report');
	} 
	public function actionYearOverYearReport() {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | List';
 
		return $this->render ( 'year-over-year-report');
	} 
	public function actionRenewalProjReport() {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | List';
 
		return $this->render ( 'renewal-proj-report');
	} 
	
	public function actionStopLossAnalyzerReport() {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | List';
 
		return $this->render ( 'stop-loss-analyzer-report');
	} 
	public function actionSpecReport() {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | List';
	
		return $this->render ( 'spec-report');
	}
}
