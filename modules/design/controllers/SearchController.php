<?php

namespace app\modules\design\controllers;

use yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\User;
use app\models\SirFirmUsers;
use app\models\SirFirmUsersSearch;
use app\components\AccessRuleComponent;
use yii\filters\VerbFilter;

class SearchController extends BaseController { 
		public function behaviors() {
		return [ 
				'access' => [ 
						'class' => AccessControl::className(),
						'ruleConfig' => [
							'class' => AccessRuleComponent::className ()
						],
						'only' => [ 
								'index','firmsearch' 
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
		//\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Search';
 
  if(Yii::$app->user->identity->usertype == 1){
			
 	$a = array(
        array('firstname' => '#update_admin','lastname' => '#update_admin','usertype' => 'Admin','company' => '','dashboard'=>'admin','plans'=>'admin','email' => 'Last@sky.com','lastlogin' => '1/2/2017, 09:17 AM'),
		   array('firstname' => '#update_admin','lastname' => '#update_admin','usertype' => 'Admin','company' => '','dashboard'=>'admin','plans'=>'admin','email' => 'Last@sky.com','lastlogin' => '1/2/2017, 09:17 AM'),
		    array('firstname' => '#update_firm','lastname' => '#update_firm','usertype' => 'Firm','company' => 'firms','dashboard'=>'firms','plans'=>'firms','email' => 'Last@sky.com','lastlogin' => '1/2/2017, 09:17 AM'),
			  array('firstname' => '#update_client','lastname' => '#update_client','usertype' => 'Client','company' => 'company','dashboard'=>'clients','plans'=>'clients','email' => 'Last@sky.com','lastlogin' => '1/2/2017, 09:17 AM'),
			    array('firstname' => '#update_firm','lastname' => '#update_firm','usertype' => 'Firm','company' => 'firms','dashboard'=>'firms','plans'=>'firms','email' => 'Last@sky.com','lastlogin' => '1/2/2017, 09:17 AM'),);

  }else if(Yii::$app->user->identity->usertype == 2){
	  
	  $a = array(
      
		    array('firstname' => '#update_firm','lastname' => '#update_firm','usertype' => 'Firm','company' => 'firms','dashboard'=>'firms','plans'=>'firms','email' => 'Last@sky.com','lastlogin' => '1/2/2017, 09:17 AM'),
             array('firstname' => '#update_client','lastname' => '#update_client','usertype' => 'Client','company' => 'company','dashboard'=>'clients','plans'=>'clients','email' => 'Last@sky.com','lastlogin' => '1/2/2017, 09:17 AM'),
			  array('firstname' => '#update_client','lastname' => '#update_client','usertype' => 'Client','company' => 'company','dashboard'=>'clients','plans'=>'clients','email' => 'Last@sky.com','lastlogin' => '1/2/2017, 09:17 AM'),);

  }	else{
	  
	  	  $a = array(
		     array('firstname' => '#update_client','lastname' => '#update_client','usertype' => 'Client','company' => 'company','dashboard'=>'clients','email' => 'Last@sky.com','lastlogin' => '1/2/2017, 09:17 AM'),
			   array('firstname' => '#update_client','lastname' => '#update_client','usertype' => 'Client','company' => 'company','dashboard'=>'clients','email' => 'Last@sky.com','lastlogin' => '1/2/2017, 09:17 AM'),
			     array('firstname' => '#update_client','lastname' => '#update_client','usertype' => 'Client','company' => 'company','dashboard'=>'clients','email' => 'Last@sky.com','lastlogin' => '1/2/2017, 09:17 AM'),);

	  
  }
  
  $data = json_encode($a);
  
			$model = new SirFirmUsers();
			$searchModel = new SirFirmUsersSearch();
			$dataProvider = $searchModel->search( \Yii::$app->request->queryParams);
			
		return $this->render ( 'index' ,['data'=>$data,'searchModel' => $searchModel,
					'dataProvider' => $dataProvider]);
	}
	
	public function actionFirmSearch() {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Search';
		return $this->render ( 'firm-search' );
	}
}
