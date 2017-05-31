<?php

namespace app\controllers;

use yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\User;
use app\components\AccessRuleComponent;
use yii\filters\VerbFilter;

class ClientsController extends BaseController{
	public function behaviors() {
		return [ 
				'access' => [ 
						'class' => AccessControl::className (),
						'ruleConfig' => [ 
								'class' => AccessRuleComponent::className () 
						],
						'only' => [ 
								'addclient',
								'editclient',
								'addclientuser',
								'editclientuser',
								'clientsearchresult',
								'clientusersearchresult',
								'manage-clients' 
						],
						'rules' => [ 
								[ 
										'allow' => true,
										'actions' => [ 
												'addclient',
												'editclient',
												'addclientuser',
												'clientsearchresult',
												'clientusersearchresult',
												'editclientuser' ,
												'manage-clients' 
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
	public function actionIndex() {
		\Yii::$app->view->title = 'Benefits Client | Manage Clients';
		return $this->render ( 'index' );
	}
	public function actionAddclient() {
		\Yii::$app->view->title = 'Benefits Client | Add Clients';
		return $this->render ( 'addform' );
	}
	public function actionEditclient() {
		\Yii::$app->view->title = 'Benefits Client | Edit Clients';
		return $this->render ( 'editform' );
	}
	public function actionClientsearchresults() {
		\Yii::$app->view->title = 'Benefits Client | Manage Clients';
		return $this->render ( 'searchresults' );
	}
	public function actionAddclientuser() {
		\Yii::$app->view->title = 'Benefits Client | Manage Clients';
		return $this->render ( 'addform-user' );
	}
	public function actionEditclientuser() {
		\Yii::$app->view->title = 'Benefits Client | Manage Clients';
		return $this->render ( 'editform-user' );
	}
	public function actionClientusersearchresults() {
		\Yii::$app->view->title = 'Benefits Client | Manage Clients';
		return $this->render ( 'searchresults-user' );
	}
	public function actionManageClients() {
		\Yii::$app->view->title = 'Benefits Client | Manage Clients';
		return $this->render ( 'manage-clients' );
	}
	public function actionManageplans() {
		\Yii::$app->view->title = 'Benefits Client | Manage Clients';
		$get_plan_type = \Yii::$app->request->get ();
		$manageplans = '';
		
		if (! empty ( $get_plan_type )) {
			
			if ($get_plan_type ['id'] == 1) {
				
				$a = array (
						array (
								'ID' => '1',
								'type' => 'Prior',
								'shorttitle' => '2014',
								'startdate' => '1',
								'enddate' => '1',
								'funding' => 'Partially Self Insured',
								'plandetails' => '../medical-plandetails/medicalpartiallyselfinsured',
								'inputclaims' => '../medical/partiallyinsuredmonthlyclaim' 
						),
						array (
								'ID' => '2',
								'type' => 'Prior',
								'shorttitle' => '2014',
								'startdate' => '1',
								'enddate' => '1',
								'funding' => 'Fully Insured',
								'plandetails' => '../medical-plandetails/medicalfullyinsured',
								'inputclaims' => '../medical/fullyinsuredmonthlyclaim' 
						),
						array (
								'ID' => '3',
								'type' => 'Prior',
								'shorttitle' => '2014',
								'startdate' => '1',
								'enddate' => '1',
								'funding' => 'Level Funded',
								'plandetails' => '../medical-plandetails/medicallevelfunded',
								'inputclaims' => '../medical/levelfundedmonthlyclaim' 
						) 
				);
			} else if ($get_plan_type ['id'] == 2) {
				
				$a = array (
						array (
								'ID' => '1',
								'type' => 'Prior',
								'shorttitle' => '2014',
								'startdate' => '1',
								'enddate' => '1',
								'funding' => 'Partially Self Insured',
								'plandetails' => '../dental-plandetails/dentalpartiallyselfinsured',
								'inputclaims' => '../dental/partiallyinsuredmonthlyclaim' 
						),
						array (
								'ID' => '2',
								'type' => 'Prior',
								'shorttitle' => '2014',
								'startdate' => '1',
								'enddate' => '1',
								'funding' => 'Fully Insured',
								'plandetails' => '../dental-plandetails/dentalfullyinsured',
								'inputclaims' => '../dental/levelfundedmonthlyclaim' 
						) 
				);
			} else {
				
				$a = array (
						array (
								'ID' => '1',
								'type' => 'Prior',
								'shorttitle' => '2014',
								'startdate' => '1',
								'enddate' => '1',
								'funding' => 'Partially Self Insured',
								'plandetails' => '../vision-plandetails/visionselfinsured',
								'inputclaims' => '../vision/partiallyinsuredmonthlyclaim' 
						),
						array (
								'ID' => '2',
								'type' => 'Prior',
								'shorttitle' => '2014',
								'startdate' => '1',
								'enddate' => '1',
								'funding' => 'Fully Insured',
								'plandetails' => '../vision-plandetails/visionfullyinsured',
								'inputclaims' => '../vision/fullyinsuredmonthlyclaim' 
						) 
				);
			}
			$manageplans = json_encode ( $a );
		}
		
		return $this->render ( 'manage-plans', [ 
				'data' => $manageplans,
				'get_plan_type' => $get_plan_type 
		] );
	}
}
