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

class FirmPlanController extends BaseController
{
	
	public function behaviors() {
		return [ 
				'access' => [ 
						'class' => AccessControl::className(),
						'ruleConfig' => [
							'class' => AccessRuleComponent::className ()
						],
						
						'rules' => [ 
								[ 
										'allow' => true,
										'actions' => [ 
												'client-plan-years','client-medical-self-insured','client-medical-fully-insured','client-medical-level-funded','client-dental-self-insured','client-dental-fully-insured','client-vision-self-insured','client-vision-fully-insured'
										],
										'roles' => [ 
												User::ADMIN , User::FIRM
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
    public function actionClientPlanYears()
    {
    	\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Plan Years';
		$get_plan_type = \Yii::$app->request->get ();
		$manageplans = '';
		
		
		/*****************/
		
		
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
			
		
		
		
		/**********************/
			
		
			/*	
					$a = array(
        array('ID' => '1','plans'=>'1','type' => '1','yeartype' => 'Medical & Rx Plan','shorttitle' => '2014 Plan Year','startdate' => 'Jan-13','enddate' => 'Dec-13','funding'=>'1','inputclaims' => '/firm-plan/client-medical-self-insured'),
		  array('ID' => '2','plans'=>'1','type' => '1','yeartype' => 'Medical & Rx Plan','shorttitle' => '2014 Plan Year','startdate' => 'Jan-13','enddate' => 'Dec-13','funding'=> '2','inputclaims' => '/firm-plan/client-medical-fully-insured'),
		    array('ID' => '3','plans'=>'1','type' => '1','yeartype' => 'Medical & Rx Plan','shorttitle' => '2014 Plan Year','startdate' => 'Jan-13','enddate' => 'Dec-13','funding'=> '3','inputclaims' => '/firm-plan/client-medical-level-funded'),
		array('ID' => '1','plans'=>'2','type' => '1','yeartype' => 'Dental Plan','shorttitle' => '2014 Plan Year','startdate' => 'Jan-13','enddate' => 'Dec-13','funding'=>'1','inputclaims' => '../firm-plan/client-dental-self-insured'),
		  array('ID' => '2','plans'=>'2','type' => '1','yeartype' => 'Dental Plan','shorttitle' => '2014 Plan Year','startdate' => 'Jan-13','enddate' => 'Dec-13','funding'=> '2','inputclaims' => '../firm-plan/client-dental-fully-insured'),
		 array('ID' => '1','plans'=>'3','type' => '1','yeartype' => 'Vision Plan','shorttitle' => '2014 Plan Year','startdate' => 'Jan-13','enddate' => 'Dec-13','funding'=>'1','inputclaims' => '../firm-plan/client-vision-self-insured'),
		  array('ID' => '2','plans'=>'3','type' => '1','yeartype' => 'Vision Plan','shorttitle' => '2014 Plan Year','startdate' => 'Jan-13','enddate' => 'Dec-13','funding'=> '2','inputclaims' => '../firm-plan/client-vision-fully-insured'),);
		
			
			*/

			if(empty($get_plan_type)){
			$get_plan_type['id'] = 1;
		}
		
			
			if($get_plan_type['id'] == 1){
				
					$a = array(
       array('ID' => '1','plans'=>'Group Medical','type' => '1','yeartype' => 'Medical & Rx Plan','shorttitle' => '2014 Plan Year','startdate' => 'Jan-13','enddate' => 'Dec-13','funding'=>'1','inputclaims' => '/firm-plan/client-medical-self-insured'),
		  array('ID' => '2','plans'=>'Group Medical','type' => '1','yeartype' => 'Medical & Rx Plan','shorttitle' => '2014 Plan Year','startdate' => 'Jan-13','enddate' => 'Dec-13','funding'=> '2','inputclaims' => '/firm-plan/client-medical-fully-insured'),
		    array('ID' => '3','plans'=>'Group Medical','type' => '1','yeartype' => 'Medical & Rx Plan','shorttitle' => '2014 Plan Year','startdate' => 'Jan-13','enddate' => 'Dec-13','funding'=> '3','inputclaims' => '/firm-plan/client-medical-level-funded'),);

			
			}else if($get_plan_type['id'] == 2){
				
					$a = array(
        array('ID' => '1','plans'=>'Group Dental','type' => '1','yeartype' => 'Dental Plan','shorttitle' => '2014 Plan Year','startdate' => 'Jan-13','enddate' => 'Dec-13','funding'=>'1','inputclaims' => '../firm-plan/client-dental-self-insured'),
		  array('ID' => '2','plans'=>'Group Dental','type' => '1','yeartype' => 'Dental Plan','shorttitle' => '2014 Plan Year','startdate' => 'Jan-13','enddate' => 'Dec-13','funding'=> '2','inputclaims' => '../firm-plan/client-dental-fully-insured'),
		  );

			
			}else{
				
					$a = array(
        array('ID' => '1','plans'=>'Group Vision','type' => '1','yeartype' => 'Vision Plan','shorttitle' => '2014 Plan Year','startdate' => 'Jan-13','enddate' => 'Dec-13','funding'=>'1','inputclaims' => '../firm-plan/client-vision-self-insured'),
		  array('ID' => '2','plans'=>'Group Vision','type' => '1','yeartype' => 'Vision Plan','shorttitle' => '2014 Plan Year','startdate' => 'Jan-13','enddate' => 'Dec-13','funding'=> '2','inputclaims' => '../firm-plan/client-vision-fully-insured'),
		   );

			
			}
			
		$manageplans = json_encode($a);
			
					
			

    //	return $this->render('client-plan-years',['data'=>$manageplans,'get_plan_type'=>$get_plan_type]);
	
	return $this->render('client-plan-years',['data'=>$data,'get_plan_type'=>$get_plan_type,'searchModel' => $searchModel,
					'dataProvider' => $dataProvider]);
					
    
    }
    
    public function actionClientMedicalSelfInsured()
    {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Medical Self Insured';
		
		$get_plan_type = \Yii::$app->request->get ();
		$manageplans = '';
		
		if(empty($get_plan_type)){
			$get_plan_type['id'] = 1;
		}
		
		return $this->render('client-medical-self-insured',['get_plan_type'=>$get_plan_type]);
	}
	
	 public function actionClientMedicalFullyInsured()
    {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Medical Fully Insured';
		
		$get_plan_type = \Yii::$app->request->get ();
		$manageplans = '';
		
		if(empty($get_plan_type)){
			$get_plan_type['id'] = 1;
		}
		
		return $this->render('client-medical-fully-insured',['get_plan_type'=>$get_plan_type]);
	}
	
	 public function actionClientMedicalLevelFunded()
    {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Medical Level Funded';
		
		$get_plan_type = \Yii::$app->request->get ();
		$manageplans = '';
		
		if(empty($get_plan_type)){
			$get_plan_type['id'] = 1;
		}
		
		return $this->render('client-medical-level-funded',['get_plan_type'=>$get_plan_type]);
	}



	   
    public function actionClientDentalSelfInsured()
    {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Dental Self Insured';
		$get_plan_type = \Yii::$app->request->get ();
		$manageplans = '';
		
		if(empty($get_plan_type)){
			$get_plan_type['id'] = 1;
		}
		
		return $this->render('client-dental-self-insured',['get_plan_type'=>$get_plan_type]);
	}
	
	public function actionClientDentalFullyInsured()
    {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Dental Fully Insured';
		$get_plan_type = \Yii::$app->request->get ();
		$manageplans = '';
		
		if(empty($get_plan_type)){
			$get_plan_type['id'] = 1;
		}
		
		return $this->render('client-dental-fully-insured',['get_plan_type'=>$get_plan_type]);
	}
	
	 public function actionClientVisionSelfInsured()
    {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Vision Self Insured';
		$get_plan_type = \Yii::$app->request->get ();
		$manageplans = '';
		
		if(empty($get_plan_type)){
			$get_plan_type['id'] = 1;
		}
		
		return $this->render('client-vision-self-insured',['get_plan_type'=>$get_plan_type]);
	}
	
	public function actionClientVisionFullyInsured()
    {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Vision Fully Insured';
		$get_plan_type = \Yii::$app->request->get ();
		$manageplans = '';
		
		if(empty($get_plan_type)){
			$get_plan_type['id'] = 1;
		}
		
		return $this->render('client-vision-fully-insured',['get_plan_type'=>$get_plan_type]);
	}



}
