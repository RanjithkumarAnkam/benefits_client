<?php

namespace app\controllers;

use yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\User;
use app\components\AccessRuleComponent;
use yii\filters\VerbFilter;
use app\models\SystemPricing;
use app\models\SystemPricingSearch;
use yii\helpers\ArrayHelper;
use phpDocumentor\Reflection\Types\Null_;
use app\components\EncryptDecryptComponent;
use app\models\Clients;
use app\models\CompanySubscription;
use app\models\FirmUsers;
use app\models\ClientUser;
use app\models\SubscriptionPayments;
use app\models\SubscriptionPaymentsSearch;
use yii\web\Response;
use app\models\FirmModules;

class MasterdataController extends BaseController {
	public function behaviors() {
		return [ 
				'access' => [ 
						'class' => AccessControl::className (),
						'ruleConfig' => [ 
								'class' => AccessRuleComponent::className () 
						],
						'only' => [ 
								'systembilling',
								'systempricing',
								'firmpricing',
								'addsystempricing',
								'updatesystempricing'
						],
						'rules' => [[ 
										'actions' => [ 
												'systembilling' 
										],
										'allow' => true,
										'roles' => [ 
												User::SuperAdmin,User::SystemBilling 
										] 
								],
								[ 
										'actions' => [ 
												'systempricing',
												'addsystempricing',
												'updatesystempricing'												
										],
										'allow' => true,
										'roles' => [ 
												User::SuperAdmin,User::SystemPricing 
										] 
								],
								[ 
										'actions' => [ 
												'firmpricing' 
										],
										'allow' => true,
										'roles' => [
												User::SuperAdmin,User::FirmAdministratorAccess,User::IsBilling,User::FirmPricing 
										]
								],
								
								[ 
										'allow' => true,
										'actions' => [ 
												'lookupoptions',
												'addplans',
												'manage-plans'
																								
										],
										'roles' => [ 
												User::SuperAdmin 
										] 
								],
								
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
		\Yii::$app->view->title = \Yii::$app->params ['page_title'] . ' | Search';
		return $this->render ( 'index' );
	}
	public function actionSystembilling() {
		\Yii::$app->view->title = \Yii::$app->params ['page_title'] . ' | System Billing';
		return $this->render ( 'billing' );
	}
	public function actionSystempricing() {
		\Yii::$app->view->title = \Yii::$app->params ['page_title'] . ' | System Pricing';
		$model_pricing = new SystemPricing ();
		$model_search_pricing = new SystemPricingSearch();
		$model_search_pricing->module_id = 1;
		
		/**
		 * ***Check if module id is posted******
		 */
		if (! empty ( \Yii::$app->request->post ( 'SystemPricingSearch' )['module_id'] )) {
			$model_search_pricing->module_id = \Yii::$app->request->post ( 'SystemPricingSearch' )['module_id'];
		}
		
		$dataProvider = $model_search_pricing->searcharray(Yii::$app->request->queryParams);
		
		
		
		return $this->render ( 'pricing', [ 
				'model_pricing' => $model_pricing,
				'model_search_pricing'=>$model_search_pricing,
				'dataProvider'=>$dataProvider 
		] );
	}
	
	
	
	
	public function actionAddsystempricing() {
		if (! empty ( \Yii::$app->request->post ( 'SystemPricing' ) )) {
			$model_pricing = new SystemPricing ();
			$arrerrors = array ();
			$pricing_details = '';
			$transaction = \Yii::$app->db->beginTransaction ();
			try {
				/****Check for already exists record******/
				$client_number = 1;
				$module_id  = \Yii::$app->request->post ( 'SystemPricing' )['module_id'];
				$pricing_details = SystemPricing::find()->where(['status'=>1,'module_id'=>$module_id])->groupBy('client_number')->count();
				$new_client_number = $pricing_details + $client_number;	
				
				$newInsertArray=  array();
				$newInsertArray['24'] = \Yii::$app->request->post ( 'SystemPricing' )['basic'];
				$newInsertArray['25'] = \Yii::$app->request->post ( 'SystemPricing' )['full_service'];
				$newInsertArray['26'] = \Yii::$app->request->post ( 'SystemPricing' )['bulk'];
				
				$i=0;
				foreach($newInsertArray as $key=>$value){
				
				$model_pricing->module_id = $module_id;
				$model_pricing->package_type = $key;
				$model_pricing->amount = str_replace(',', '', $value);
				$model_pricing->created_by = Yii::$app->user->identity->user_id;
				$model_pricing->status = 1;
				$model_pricing->client_number = $new_client_number;
				$model_pricing->created_date = date ( 'Y-m-d h:i:s' );
				$model_pricing->isNewRecord = true;
				$model_pricing->pricing_id = Null;
				
				if ($model_pricing->save ()) {
					
					$i++;
					
				} else {
					
					$arrerrors = $model_pricing->getFirstErrors ();
					$errorstring = '';
					/**
					 * *****Converting error into string*******
					 */
					foreach ( $arrerrors as $key => $value ) {
						$errorstring .= $value . '<br>';
					}
					
					throw new \Exception ( $errorstring );
				}
				
				}
				
				
				if($i == 3)
				{
					\Yii::$app->session->setFlash ( 'success', 'Pricing added successfully.' );
					$transaction->commit ();
					return $this->redirect ( array ( // redirecting to login page
							'/masterdata/systempricing'
					) );
					
				}
				
				
				
			} catch ( \Exception $e ) {
				
				$transaction->rollBack ();
				$msg = $e->getMessage ();
				\Yii::$app->session->setFlash ( 'error', $msg );
				return $this->redirect ( array ( // redirecting to login page
						'/masterdata/systempricing' 
				) );
			}
		}
	}
	
	

	public function actionUpdatesystempricing() {
		if (! empty ( \Yii::$app->request->post ( 'SystemPricing' ) )) {
			$arrerrors = array ();
			$pricing_details = '';
			$transaction = \Yii::$app->db->beginTransaction ();
			try {
				/****Check for already exists record******/
				$client_number = \Yii::$app->request->post ( 'SystemPricing' )['client_number'] ;
				$module_id = \Yii::$app->request->post ( 'SystemPricing' )['module_id'] ;
				$basic = \Yii::$app->request->post ( 'SystemPricing' )['basic'] ;
				$full_service = \Yii::$app->request->post ( 'SystemPricing' )['full_service'] ;
				$bulk = \Yii::$app->request->post ( 'SystemPricing' )['bulk'] ;
				
				$model_pricing = SystemPricing::find()->where(['client_number'=>$client_number,'module_id'=>$module_id])->asArray()->All();
				
				$i=0;
				foreach ($model_pricing as $pricing_detail){
					
				$pricing_details = SystemPricing::find()->where(['pricing_id'=>$pricing_detail['pricing_id']])->One();
				
				$pricing_details->modified_by = Yii::$app->user->identity->user_id;
				$pricing_details->modified_date = date ( 'Y-m-d h:i:s' );
				
				if($pricing_details['package_type'] == 24)
				{
					
					$pricing_details->amount = str_replace(',', '', $basic);
						
				}elseif ($pricing_details['package_type'] == 25){
						
					$pricing_details->amount = str_replace(',', '', $full_service);
						
				}elseif ($pricing_details['package_type'] == 26)
				{
					$pricing_details->amount = str_replace(',', '', $bulk);
						
				}
				
				if ($pricing_details->save ()) {
					
					$i++;
				} else {
					
						
					$arrerrors = $pricing_details->getFirstErrors ();
					$errorstring = '';
					/**
					 * *****Converting error into string*******
					 */
					foreach ( $arrerrors as $key => $value ) {
						$errorstring .= $value . '<br>';
					}
						
					throw new \Exception ( $errorstring );
				}
				
			}
			
		
			if($i == 3)
			{
				\Yii::$app->session->setFlash ( 'success', 'Pricing updated successfully.' );
				$transaction->commit ();
				return $this->redirect ( array ( // redirecting to login page
						'/masterdata/systempricing'
				) );
					
			}
			
			} catch ( \Exception $e ) {
	
				$transaction->rollBack ();
				$msg = $e->getMessage ();
				\Yii::$app->session->setFlash ( 'error', $msg );
				return $this->redirect ( array ( // redirecting to login page
						'/masterdata/systempricing'
				) );
			}
		}
	}
	
	
	public function actionPricing()
	{
		$result = array();
		if (! empty ( \Yii::$app->request->post ('client_number') )) {
			
		$client_number = \Yii::$app->request->post ('client_number') ;
		$module_id = \Yii::$app->request->post ('module_id') ;
		
		$model_pricing = SystemPricing::find()->where(['client_number'=>$client_number,'module_id'=>$module_id])->asArray()->All();
		if(!empty($model_pricing)){
			
			
			$newInsertArray=  array();
			foreach ($model_pricing as $pricing)
			{
				if($pricing['package_type'] == 24)
				{
					$newInsertArray['basic'] = Yii::$app->formatter->asCurrency($pricing['amount'],'');
					
				}elseif ($pricing['package_type'] == 25){
					
					$newInsertArray['full_service'] = Yii::$app->formatter->asCurrency($pricing['amount'],'');
					
				}elseif ($pricing['package_type'] == 26)
				{
					$newInsertArray['bulk'] = Yii::$app->formatter->asCurrency($pricing['amount'],'');
					
				}
			}
			
			$newInsertArray['module_id'] = $module_id;
			$newInsertArray['client_number'] = $client_number;
			
			$result['success'] =  $newInsertArray;
		}else {
			$result['fail'] = 'No pricing found';
		}		
		
		}else {
			$result['fail'] = 'No data posted';
		}
		
		return json_encode($result);
	}
	
	public function actionFirmpricing() {
		$where_clause = '';
		$firm_id = '';
		$client_id = '';
		$module = '';
		$user_type = Yii::$app->user->identity->usertype;
		$logged_id = Yii::$app->user->identity->user_id;
		$firm_clients = [ ];
		$modules = array();
		$connection = \yii::$app->db;
		
		\Yii::$app->view->title = \Yii::$app->params ['page_title'] . ' | Firm Pricing';
		
		
		
		
		if (! empty ( \Yii::$app->request->Get ( 'firm' ) ) && ! empty ( \Yii::$app->request->Get ( 'module' ) )) {
			$firm_id = EncryptDecryptComponent::decryptUser ( \Yii::$app->request->Get ( 'firm' ) );
		}
		
		//check if usertype is firm user
		if ($user_type == 2 ) {
			$firm_details = FirmUsers::findOne ( [ 
					'user_id' => $logged_id 
			] );
			$firm_id = $firm_details->firm_id;
		}
		
		//check if usertype is client user
		if ($user_type == 3 ) {
			$client_details = ClientUser::findOne ( [ 
					'user_id' => $logged_id 
			] );
			$client_id = $client_details->client_id;
			$firm_id =  $client_details->client->firm_id;
		}
		
		
		
		if ($firm_id && ! empty ( \Yii::$app->request->Get ( 'module' ) )) {
			
			$module = EncryptDecryptComponent::decryptUser ( \Yii::$app->request->Get ( 'module' ) );
			
			$sql = "SELECT cs.subscription_id,c.client_id,c.client_name,c.created_date,cs.amount,c.bill_to,lo.option_value as module,lop.option_value as packagetype 
				FROM tbl_sir_firms f LEFT JOIN tbl_sir_clients c ON f.firm_id=c.firm_id 
				INNER JOIN tbl_sir_company_subscription cs ON c.client_id=cs.client_id 
				LEFT JOIN tbl_sir_lookup_options lo ON lo.option_id=cs.module_id 
				LEFT JOIN tbl_sir_lookup_options lop ON lop.option_id=cs.package_type 
				LEFT JOIN tbl_sir_firm_modules fm ON fm.firm_id=f.firm_id WHERE f.firm_id=$firm_id AND cs.is_active = 1";
			
			if ($module) {
				$sql .= " AND fm.module_id=$module ";
			}
			
			if (!empty($client_id)) {
				
			$sql .= " AND  cs.client_id = $client_id";
			
			}
			
			$sql .= " GROUP BY c.client_id ";
			$model = $connection->createCommand ( $sql );
			$firm_clients = $model->queryAll ();
		}
		
		$firms_sql = "SELECT f.firm_id,f.firm_name FROM tbl_sir_firms f";
		
		if ($user_type == 2 && ! empty ( \Yii::$app->request->Get ( 'module' ) )) {
			
			$firms_sql .= " WHERE f.firm_id=$firm_id";
			
		}
		$firms_model = $connection->createCommand ( $firms_sql );
		$firm_list = $firms_model->queryAll ();
		
		
		//get modules details for the firm user login
		if (($user_type == 1 || $user_type == 2) && ! empty ( $firm_id )) {
		$module_sql = "SELECT tslo.option_id,tslo.option_value 
		FROM tbl_sir_firm_modules tsfm 
		LEFT JOIN tbl_sir_lookup_options  tslo
		ON tsfm.module_id = tslo.option_id
		WHERE tsfm.firm_id=$firm_id AND tsfm.is_active = 1";
		$module_model = $connection->createCommand ( $module_sql );
		$modules = $module_model->queryAll ();
		}
		
		
		//get modules details for the client user login
		if ($user_type == 3 && ! empty ( $firm_id ) && ! empty ( $client_id )) {
			
		$module_sql = "SELECT tslo.option_id,tslo.option_value 
		FROM tbl_sir_company_subscription tscs 
		LEFT JOIN tbl_sir_lookup_options  tslo
		ON tscs.module_id = tslo.option_id
		WHERE tscs.client_id=$client_id AND tscs.is_active = 1";
		$module_model = $connection->createCommand ( $module_sql );
		$modules = $module_model->queryAll ();
			
			
		}

		
		$packages_sql = "SELECT option_id,option_value FROM tbl_sir_lookup_options WHERE option_type=5 AND option_status=1";
		$packages_model = $connection->createCommand ( $packages_sql );
		$packages = $packages_model->queryAll ();
		
		
		
		
		return $this->render ( 'firmpricing', [ 
				'resultData' => $firm_clients,
				'firm_list' => $firm_list,
				'modules' => $modules,
				'packages' => $packages,
				'firm_id' => $firm_id
		] );
	}
	
	/**
	 * ****action for getting payment history************
	 */
	public function actionPaymenthistory($subscription_id) {
		$model = new SubscriptionPayments ();
		$searchModel = new SubscriptionPaymentsSearch ();
		
		$decrypt_subscription_id = EncryptDecryptComponent::decryptUser ( $subscription_id );
		
		$searchModel->subscription_id = $decrypt_subscription_id;
		// data provider for firm users grid
		$dataProvider = $searchModel->search ( \Yii::$app->request->queryParams );
		
		if (Yii::$app->request->isAjax) {
			return $this->renderAjax ( '_payment-history', [ 
					'encrypt_subscription_id' => $subscription_id,
					'searchModel' => $searchModel,
					'dataProvider' => $dataProvider,
					'model' => $model 
			] );
		} else {
			return $this->render ( '_payment-history', [ 
					'encrypt_subscription_id' => $subscription_id,
					'searchModel' => $searchModel,
					'dataProvider' => $dataProvider,
					'model' => $model 
			] );
		}
	}
	
	/**
	 * ***action to show payment history details model
	 * $subscription_id,$payment_id is iin encrypted form
	 * ******
	 */
	public function actionPaymenthistorydetails($subscription_id, $payment_id) {
		
		// decrypting id
		$decrypt_subscription_id = EncryptDecryptComponent::decryptUser ( $subscription_id );
		
		$model = new SubscriptionPayments ();
		
		// if not empty payment_id it shows that request is for update
		if (! empty ( $payment_id )) {
			$decrypt_payment_id = EncryptDecryptComponent::decryptUser ( $payment_id );
			$model = SubscriptionPayments::find ()->where ( [ 
					'payment_id' => $decrypt_payment_id 
			] )->One ();
		}
		
		if (Yii::$app->request->isAjax) {
			return $this->renderAjax ( '_add-payment-history', [ 
					'encrypt_subscription_id' => $subscription_id,
					'encrypt_payment_id' => $payment_id,
					'model' => $model 
			] );
		} else {
			return $this->render ( '_add-payment-history', [ 
					'encrypt_subscription_id' => $subscription_id,
					'encrypt_payment_id' => $payment_id,
					'model' => $model 
			] );
		}
	}
	/**
	 * ******Action to add update payment history****************
	 */
	public function actionSavepaymenthistory() {
		
		$posted_data = \Yii::$app->request->post();
		if(!empty($posted_data['SupportVariable']['subscription_id']))
		{
			$model = new SubscriptionPayments ();
			$subscription_id = $posted_data['SupportVariable']['subscription_id'];
			$payment_id = $posted_data['SupportVariable']['payment_id'];
			
			$transaction = \Yii::$app->db->beginTransaction();
			
			try {
				
				
				//decrypting ids
				$decrypt_subscription_id = EncryptDecryptComponent::decryptUser ( $subscription_id );
					
				if (! empty ( $payment_id ))
				{
				
					$decrypt_payment_id = EncryptDecryptComponent::decryptUser ( $payment_id );
					$model = SubscriptionPayments::find ()->where ( [
							'payment_id' => $decrypt_payment_id
							] )->One ();
					
					if(empty($model))
					{
						throw new \Exception('No payment history found to update.');
					}
				
				}
				
				$model->attributes = \Yii::$app->request->post('SubscriptionPayments');
				if($model->isNewRecord)
				{
					$model->subscription_id = $decrypt_subscription_id;
					$model->created_date = date('Y-m-d H:i:s');
					$model->created_by = \Yii::$app->user->identity->user_id;
					
				}else 
				{
					$model->modified_date = date('Y-m-d H:i:s');
					$model->modified_by = \Yii::$app->user->identity->user_id;
				}
				
				if($model->save())
				{
					$transaction->commit();
					// set flash message to user
					$success = 'success';
					Yii::$app->response->format = trim ( Response::FORMAT_JSON );
					return $success;
					
				}else 
				{
					$error = \yii\widgets\ActiveForm::validate ( $model );
					Yii::$app->response->format = trim ( Response::FORMAT_JSON );
					return $error;
						
				}
				
				
				
			} catch (\Exception $e) {
				
				$msg = $e->getMessage ();
				$transaction->rollback ();
				
				Yii::$app->response->format = trim ( Response::FORMAT_JSON );
				return $msg;
				
				
				
			}
		}else 
		{
			$error = 'error-no-subscription-id';
			Yii::$app->response->format = trim ( Response::FORMAT_JSON );
			return $error;
		}
		
		
		
	}
	public function actionLookupoptions() {
		\Yii::$app->view->title = \Yii::$app->params ['page_title'] . ' | Lookup Options';
		return $this->render ( 'lookup' );
	}
	public function actionAddplans() {
		\Yii::$app->view->title = \Yii::$app->params ['page_title'] . ' | Add Plans';
		return $this->render ( 'plans' );
	}
	public function actionManageplans() {
		\Yii::$app->view->title = \Yii::$app->params ['page_title'] . ' | Manage Plans';
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
								'plandetails' => '/medical-plandetails/medicalpartiallyselfinsured',
								'inputclaims' => '../medical/partiallyinsuredmonthlyclaim' 
						),
						array (
								'ID' => '2',
								'type' => 'Prior',
								'shorttitle' => '2014',
								'startdate' => '1',
								'enddate' => '1',
								'funding' => 'Fully Insured',
								'plandetails' => '/medical-plandetails/medicalfullyinsured',
								'inputclaims' => '../medical/fullyinsuredmonthlyclaim' 
						),
						array (
								'ID' => '3',
								'type' => 'Prior',
								'shorttitle' => '2014',
								'startdate' => '1',
								'enddate' => '1',
								'funding' => 'Level Funded',
								'plandetails' => '/medical-plandetails/medicallevelfunded',
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
								'plandetails' => '/dental-plandetails/dentalpartiallyselfinsured',
								'inputclaims' => '../dental/partiallyinsuredmonthlyclaim' 
						),
						array (
								'ID' => '2',
								'type' => 'Prior',
								'shorttitle' => '2014',
								'startdate' => '1',
								'enddate' => '1',
								'funding' => 'Fully Insured',
								'plandetails' => '/dental-plandetails/dentalfullyinsured',
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
								'plandetails' => '/vision-plandetails/visionselfinsured',
								'inputclaims' => '../vision/partiallyinsuredmonthlyclaim' 
						),
						array (
								'ID' => '2',
								'type' => 'Prior',
								'shorttitle' => '2014',
								'startdate' => '1',
								'enddate' => '1',
								'funding' => 'Fully Insured',
								'plandetails' => '/vision-plandetails/visionfullyinsured',
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
	
	public function actionParticularclientupdate(){
		if (! empty ( \Yii::$app->request->post ('client_id') )) {
			
			$client_details=[];
			$client_id=EncryptDecryptComponent::decryptUser(\Yii::$app->request->post ('client_id'));
			
			$client=Clients::findOne(['client_id'=>$client_id]);
			
			$client_subs=CompanySubscription::findOne(['client_id'=>$client_id]);
			
			$client_details['bill_to']=$client->bill_to;
			$client_details['amount']=$client_subs->amount;
			$client_details['package_type']=$client_subs->package_type;
			
			echo json_encode($client_details);
			//return $client_details;
			//print_r(\Yii::$app->request->post (  ));die();
		}
	}
	
	public function actionUpdateclientpackage(){
		if (! empty ( \Yii::$app->request->post ('client_id') )) {
			
			$client_details=[];
			$client_id=EncryptDecryptComponent::decryptUser(\Yii::$app->request->post ('client_id'));
			
			$client=Clients::find()->where(['client_id'=>$client_id])->One();
			$client_subs=CompanySubscription::find()->where(['client_id'=>$client_id])->One();
			$transaction = \Yii::$app->db->beginTransaction ();
			try {
				
				$client->add_firm_id =  'true';
				$client->add_state =  'true';
				$client->add_primary_consultant =  'true';
				$client->add_primary_account_manager =  'true';
				$client->add_primary_service_rep =  'true';
				$client->add_employer_size_category = 'true';
				$client->add_industry_code =  'true';
				$client->zip = (string) $client->zip;
				$client->bill_to=\Yii::$app->request->post ('billto');
				$client_subs->amount=\Yii::$app->request->post ('amount');
				$client_subs->package_type=\Yii::$app->request->post ('package');
				
				if($client->save() && $client_subs->save()){
					$transaction->commit ();
					$data['success']=true;
					$data['message']='Successfully updated';
				}else{
					print_r($client->geterrors()); die();
				}
				
			} catch ( \Exception $e ) {
				
				$transaction->rollBack ();
				$msg = $e->getMessage ();
				$data['message']=$msg;
			}
			
			
			
			echo json_encode($data);
			//return $client_details;
			//print_r(\Yii::$app->request->post (  ));die();
		}
	}
	
	final function actionFetchclientmodules(){
		if (! empty ( \Yii::$app->request->post ('client_id') )) {
			
			$module_details=[];
			$client_id=EncryptDecryptComponent::decryptUser(\Yii::$app->request->post ('client_id'));
			
			
			$client_subs=FirmModules::find()->select('module_id,tbl_sir_lookup_options.option_value')->joinWith('module')->where(['firm_id'=>$client_id])->andwhere(['is_active'=>1])->groupBy('module_id')->asArray()->All();
			
			foreach($client_subs as $client_sub){
				$client_details=[];
				$client_details['id'] = EncryptDecryptComponent::encrytedUser($client_sub['module_id']);
				$client_details['module'] = $client_sub['option_value'];
				array_push($module_details,$client_details);
			}
			echo json_encode($module_details);
			//print_r($client_subs);
			
		}
	}
	
}
