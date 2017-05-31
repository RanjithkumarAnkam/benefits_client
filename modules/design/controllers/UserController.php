<?php

namespace app\modules\design\controllers;

use yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\User;
use app\models\SirFirmUsers;
use app\models\SirFirmUsersSearch;
use app\models\SirClientUsers;
use app\models\SirClientUsersSearch;
use app\components\AccessRuleComponent;
use yii\filters\VerbFilter;

class UserController extends BaseController
{
	
	public function behaviors() {
		return [ 
				'access' => [ 
						'class' => AccessControl::className(),
						'ruleConfig' => [
							'class' => AccessRuleComponent::className ()
						],
						'only' => [ 
								'add-user','update-user'
						],
						'rules' => [ 
								[ 
										'actions' => [ 
												'add-user','update-user','firmuser','clientuser','updatefirmuser','updateclientuser'
										],
										'allow' => true,
										'roles' => [ 
												'@' 
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
    public function actionAddUser()
    {
		//\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Add User';
    	 $usertype = '';
		 
        return $this->render('add-user',['usertype'=>$usertype]);
    }
	
	public function actionUpdateUser()
    {
		//\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Update User';
		$get_plan_type = \Yii::$app->request->get ();
		
		 $admin_user_id = '';
		 $firm_user_id = '';
		 $client_user_id = '';
		 $usertype = '';
		 
		 if(!empty($get_plan_type['admin_user_id'])){
			 $admin_user_id = $get_plan_type['admin_user_id'];
			 $usertype = 1;
		 }else if(!empty($get_plan_type['firm_user_id'])){
			 $firm_user_id = $get_plan_type['firm_user_id'];
			 $usertype = 2;
		 }else if(!empty($get_plan_type['client_user_id'])){
			 $client_user_id = $get_plan_type['client_user_id'];
			 $usertype = 3;
		 }
        return $this->render('update-user'
		,['admin_user_id'=>$admin_user_id,
		'firm_user_id'=>$firm_user_id,
		'client_user_id'=>$client_user_id,
		'usertype'=>$usertype]);
    }
   /* 
    public function actionUpdateFirm()
    {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Update Firm';
    	 $get_plan_type = \Yii::$app->request->get ();
		 $firm_id = $get_plan_type['firm_id'];
		 if(empty($firm_id)){
			 $firm_id = 1;
		 }
    	return $this->render('update-firm',['firm_id'=>$firm_id]);
    }
    
    public function actionManageFirm()
    {
		\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Manage Firms';
    
    	return $this->render('manage-firm');
    }
    
    public function actionFirmUser()
    {
    	 \Yii::$app->view->title = \Yii::$app->params['page_title'].' | Add Firm Users';
		 
    	return $this->render('firm-user');
    }
    public function actionUpdatefirmUser()
    {
    \Yii::$app->view->title = \Yii::$app->params['page_title'].' | Update Firm Users';
	
	 $get_plan_type = \Yii::$app->request->get ();
		 $firm_user_id = $get_plan_type['firm_user_id'];
		 if(empty($firm_user_id)){
			 $firm_user_id = 1;
		 }
		 
    	return $this->render('updatefirm-user',['firm_user_id'=>$firm_user_id]);
    }
    public function actionManageFirmUser()
    {
    \Yii::$app->view->title = \Yii::$app->params['page_title'].' | Manage Firms';
    	return $this->render('manage-firm-user');
    }
    public function actionFirmpricing()
    {
    \Yii::$app->view->title = \Yii::$app->params['page_title'].' | Manage Firms';
    	return $this->render('firmpricing');
    }

*/
		public function actionFirmuser(){
			//\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Firm';
			$firm_id='';
			$get_id = \Yii::$app->request->get ();
			if(!empty($get_id)){
			$firm_id = $get_id['id'];
			}
			
			
			$model = new SirFirmUsers();
			$searchModel = new SirFirmUsersSearch();
			$dataProvider = $searchModel->search( \Yii::$app->request->queryParams);
			
				return $this->render('firmuser1',['firm_id'=>$firm_id,'searchModel' => $searchModel,
					'dataProvider' => $dataProvider,]);
		}
		public function actionUpdatefirmuser(){
				$firm_user_id='';
			$get_id = \Yii::$app->request->get ();
			if(!empty($get_id)){
			$firm_user_id = $get_id['firm_user_id'];
			}
				return $this->render('update-firm-user',['firm_user_id'=>$firm_user_id]);
		}
		public function actionClientuser(){
			
				\Yii::$app->view->title = \Yii::$app->params['page_title'].' | Client';
			$client_id='';
			$get_id = \Yii::$app->request->get ();
			
			if(!empty($get_id)){
				$client_id = $get_id['id'];
			
			}
			$model = new SirClientUsers();
			$searchModel = new SirClientUsersSearch();
			$dataProvider = $searchModel->search( \Yii::$app->request->queryParams);
			
			
			return $this->render('updateclientuser',['client_id'=>$client_id,'searchModel' => $searchModel,
					'dataProvider' => $dataProvider]);
		}
			public function actionUpdateclientuser(){
				$client_user_id='';
			$get_id = \Yii::$app->request->get ();
			if(!empty($get_id)){
			$client_user_id = $get_id['client_user_id'];
			}
				return $this->render('update-client-user',['client_user_id'=>$client_user_id]);
		}

}
