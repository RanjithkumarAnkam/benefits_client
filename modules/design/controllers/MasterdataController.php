<?php

namespace app\modules\design\controllers;


use yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\User;
use app\components\AccessRuleComponent;
use yii\filters\VerbFilter;

class MasterdataController extends BaseController
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
												'systembilling','systempricing','firmpricing','lookupoptions','addplans','manage-plans'
										],
										'roles' => [ 
												User::ADMIN 
										] 
								],
								[
								'allow' => true,
								'actions' => [
								'addplans','manage-plans'
										],
										'roles' => [
										User::FIRM
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
	
	
	
	public $layout = 'main-layout';
    public function actionIndex()
    {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Search';
        return $this->render('index');
    }
    
    public function actionSystembilling()
    {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | System Billing';
    	return $this->render('billing');
    }
    
    public function actionSystempricing()
    {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | System Pricing';
    	return $this->render('pricing');
    }
    
    public function actionFirmpricing()
    {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Firm Pricing';
    	return $this->render('firmpricing');
    }
	 public function actionLookupoptions()
    {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Lookup Options';
    	return $this->render('lookup');
    }
    public function actionAddplans()
    {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Add Plans';
    	return $this->render('plans');
    }
	
	  public function actionManageplans()
    {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Manage Plans';
		$get_plan_type = \Yii::$app->request->get ();
		$manageplans = '';
		
		if(!empty($get_plan_type)){
			
			if($get_plan_type['id'] == 1){
				
					$a = array(
        array('ID' => '1','type' => 'Prior','shorttitle' => '2014','startdate' => '1','enddate' => '1','funding'=>'Partially Self Insured','plandetails' => '/medical-plandetails/medicalpartiallyselfinsured','inputclaims' => '../medical/partiallyinsuredmonthlyclaim'),
		  array('ID' => '2','type' => 'Prior','shorttitle' => '2014','startdate' => '1','enddate' => '1','funding'=> 'Fully Insured','plandetails' => '/medical-plandetails/medicalfullyinsured','inputclaims' => '../medical/fullyinsuredmonthlyclaim'),
		    array('ID' => '3','type' => 'Prior','shorttitle' => '2014','startdate' => '1','enddate' => '1','funding'=> 'Level Funded','plandetails' => '/medical-plandetails/medicallevelfunded','inputclaims' => '../medical/levelfundedmonthlyclaim'),);

			
			}else if($get_plan_type['id'] == 2){
				
					$a = array(
        array('ID' => '1','type' => 'Prior','shorttitle' => '2014','startdate' => '1','enddate' => '1','funding'=>'Partially Self Insured','plandetails' => '/dental-plandetails/dentalpartiallyselfinsured','inputclaims' => '../dental/partiallyinsuredmonthlyclaim'),
		  array('ID' => '2','type' => 'Prior','shorttitle' => '2014','startdate' => '1','enddate' => '1','funding'=> 'Fully Insured','plandetails' => '/dental-plandetails/dentalfullyinsured','inputclaims' => '../dental/levelfundedmonthlyclaim'),
		  );

			
			}else{
				
					$a = array(
        array('ID' => '1','type' => 'Prior','shorttitle' => '2014','startdate' => '1','enddate' => '1','funding'=>'Partially Self Insured','plandetails' => '/vision-plandetails/visionselfinsured','inputclaims' => '../vision/partiallyinsuredmonthlyclaim'),
		  array('ID' => '2','type' => 'Prior','shorttitle' => '2014','startdate' => '1','enddate' => '1','funding'=> 'Fully Insured','plandetails' => '/vision-plandetails/visionfullyinsured','inputclaims' => '../vision/fullyinsuredmonthlyclaim'),
		   );

			
			}
		$manageplans = json_encode($a);
			
		}	
			

    	return $this->render('manage-plans',['data'=>$manageplans,'get_plan_type'=>$get_plan_type]);
    }
	
}
