<?php

namespace app\controllers;

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
use app\models\Firms;
use app\models\States;
use yii\db\Expression;
use app\models\FirmUsers;
use app\models\FirmUsersSearch;
use app\models\FirmLocations;
use app\models\FirmModules;
use app\models\LookupOptions;
use app\components\EncryptDecryptComponent;
use app\models\AdminUsers;
use app\models\UploadForm;
use app\models\AdminUserRights;
use app\models\RightsMaster;
use yii\web\UploadedFile;
use yii\web\Response;
use app\models\FirmUserRights;
use yii\helpers\ArrayHelper;
use app\models\FirmUserLocations;
use app\models\Clients;
use app\models\ClientUser;
use app\models\ClientUserSearch;
use app\models\SystemPricing;
use app\models\CompanySubscription;

class UserController extends BaseController {
	public function behaviors() {
		return [ 
				'access' => [ 
						'class' => AccessControl::className (),
						'ruleConfig' => [ 
								'class' => AccessRuleComponent::className () 
						],
						'only' => [ 
								'add-user',
								'update-user',
								'adminuser',
								'firmuser',
								'clientuser',
								'updatefirmuser',
								'updateclientuser',
								'updateadminuser',
								'updatefirmdetails',
								'changefirmstatus',
								'changeuserstatus',
								'deactivateadmin',
								'changeclientuserstatus',
								'saveclientuser',
								'addfirmuser',
								'addclientuser'
								
						],
						'rules' =>  [ 
								[ 
										'actions' => [ 
												'adminuser',
												'updateadminuser',
												'deactivateadmin'
										],
										'allow' => true,
										'roles' => [ 
												User::AdminUser,User::SuperAdmin 
										] 
								],['actions' => [
										'updatefirmuser',
										'savefirmuser',
										'changeuserstatus',
										'addfirmuser'
									],
										'allow' => true,
										'roles' => [
												User::FirmUser,User::FirmAdministratorAccess,User::SuperAdmin 
										]
										
								],['actions' => [
										'updatefirmdetails',
										'firmuser',
										'changefirmstatus',
										
									],
										'allow' => true,
										'roles' => [
												User::EditFirm,User::FirmAdministratorAccess,User::SuperAdmin 
										]
								],
								
								['actions' => [
										'saveclientuser',
										'updateclientuser',
										'changeclientuserstatus',
										'addclientuser'
								],
										'allow' => true,
										'roles' => [
												User::ClientUser,User::FirmAdministratorAccess,User::SuperAdmin 
										]
								]
								,['actions' => [
										'updateclientdetails',
										'clientuser',
										
									],
										'allow' => true,
										'roles' => [
												User::EditClient,User::FirmAdministratorAccess,User::SuperAdmin 
										]
								],
								
								['actions' => [
										'add-user',
										'update-user'
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
						'actions' => [ ] 
				] 
		];
	}
	public $layout = 'main-layout';
	public function actionAdminuser() {
		\Yii::$app->view->title = \Yii::$app->params ['page_title'] . ' | Add User';
		
		$currentuserrights=[];
		$model_admin_users = new AdminUsers ();
		$model_users = new User ();
		$picmodel = new UploadForm ();
		$adminrights = new AdminUserRights ();
		$logged_id=Yii::$app->user->identity->user_id;
		
		$rightslist = RightsMaster::find ()->where ( [ 
				'user_type' => 1 
		] )->all ();
		
		$admin_id=AdminUsers::findOne(['user_id'=>$logged_id]);
		
		$sql="SELECT rm.right_id FROM tbl_sir_admin_user_rights aur Left Join tbl_sir_rights_master rm on aur.right_id=rm.right_id WHERE rm.user_type=1 and aur.admin_id=$admin_id->admin_id";
		$connection = \yii::$app->db;
		$model = $connection->createCommand($sql);
		//	print_r($model); die();
		$userrights= $model->queryAll();
		
		foreach ($userrights as $userright){
			array_push($currentuserrights, $userright['right_id']);
		}
		
		if (! empty ( \Yii::$app->request->post () )) {
			
			$transaction = \Yii::$app->db->beginTransaction ();
			try {
				
				$model_users->username = \Yii::$app->request->post ( 'User' )['username'];
				$model_admin_users->attributes = \Yii::$app->request->post ( 'AdminUsers' );
				
				$model_users->usertype = 1;
				$model_users->is_verified = 0;
				$model_users->is_active = 0;
				$model_users->created_by = Yii::$app->user->identity->user_id;
				$model_users->created_date = date ( 'Y-m-d h:i:s' );
				
				if ($model_users->save ()) {
					
					$user_id = $model_users->user_id;
					
					$model_admin_users->user_id = $user_id;
					$model_admin_users->created_by = Yii::$app->user->identity->user_id;
					$model_admin_users->created_date = date ( 'Y-m-d h:i:s' );
					
					/* image upload */
					if (Yii::$app->request->isPost) {
						$picmodel->file = UploadedFile::getInstance ( $model_admin_users, 'profile_pic' );
						
						if (! empty ( $picmodel->file ) && $picmodel->validate ()) {
							$pic_name = time () . '_' . $user_id . '.' . $picmodel->file->extension;
							
							// is_dir - tells whether the filename is a directory
							if (! is_dir ( 'images/admin_user' )) {
								// mkdir - tells that need to create a directory
								mkdir ( 'images/admin_user' );
							}
							
							$picmodel->file->saveAs ( 'images/admin_user/' . $pic_name );
							
							$model_admin_users->profile_pic = $pic_name;
						}
					}
					
					if ($model_admin_users->save ()) {
						
						$admin_id = $model_admin_users->admin_id;
						$permissions = \Yii::$app->request->post ( 'AdminUserRights' );
						$rights_count = 0;
						$total_permissions_count = count ( $permissions );
						
						if (! empty ( $permissions )) {
							foreach ( $permissions as $permission => $value ) {
								
								$adminrights->admin_id = $admin_id;
								$adminrights->right_id = $value;
								$adminrights->created_by = Yii::$app->user->identity->user_id;
								$adminrights->created_date = date ( 'Y-m-d h:i:s' );
								$adminrights->isNewRecord = true;
								$adminrights->user_right_id = NULL;
								
								if ($adminrights->save ()) {
									
									$rights_count ++;
								} else {
									
									throw new \Exception ( 'Unable to save permissions for admin user.' );
								}
							}
						} else {
							throw new \Exception ( 'Atleast one permission is required for user creation.' );
						}
						
						// check if all permissions is saved
						if ($total_permissions_count == $rights_count) {
							
							$transaction->commit ();
							$to = $model_users->username;
							$from = 'sky@analytics.com';
							$name = $model_admin_users->first_name . ' ' . $model_admin_users->last_name;
							// creating link
							$link = \Yii::$app->urlManager->createAbsoluteUrl ( '/verify-mail' ) . '?authkey=' . $model_users->authkey . '&email=' . $model_users->username;
							$company_email = 'sky@analytics.com';
							$company_phone = '89998989898';
							$company_logo = \Yii::$app->urlManager->createAbsoluteUrl ( '/images/logo/benefits.png' );
							
							// send re-verifcation mail
							$mail_result = \Yii::$app->customMail->verifymail ( $to, $from, $name, $link, $company_email, $company_phone, $company_logo );
							\Yii::$app->session->setFlash ( 'success', 'Admin added succesfully, a verification mail has been sent please verify it.' );
							
							return $this->redirect ( [ 
									'/search?key='.$model_admin_users->first_name 
							] );
						}
					}
				}
			} catch ( \Exception $e ) {
				$transaction->rollBack ();
				$msg = $e->getMessage ();
				\Yii::$app->session->setFlash ( 'error', $msg );
			}
		}
		
		return $this->render ( 'adminuser', [ 
				'model_admin_users' => $model_admin_users,
				'model_users' => $model_users,
				'adminrights' => $adminrights,
				'rightslist' => $rightslist,
				'currentuserrights'=>$currentuserrights
		] );
	}
	
	// for modal pop up for admin
	public function actionUpdateadminuser($adminId) {
		$model = new AdminUsers ();
		$modelUser = new User ();
		// $encrypt_component = new EncryptDecryptComponent ();
		$firm_rights = new AdminUserRights ();
		$encrypt_admin_user_id = '';
		$adminuserRights = array ();
		$logged_id=Yii::$app->user->identity->user_id;
		$admin_id=AdminUsers::findOne(['user_id'=>$logged_id]);
		
		$rightslist = RightsMaster::find ()->where ( [ 
				'user_type' => 1 
		] )->all ();
		
		$sql="SELECT rm.right_id FROM tbl_sir_admin_user_rights aur Left Join tbl_sir_rights_master rm on aur.right_id=rm.right_id WHERE rm.user_type=1 and aur.admin_id=$admin_id->admin_id";
		$connection = \yii::$app->db;
		$model = $connection->createCommand($sql);
		//	print_r($model); die();
		$userrights= $model->queryAll();
		$currentuserrights=[];
		foreach ($userrights as $userright){
			array_push($currentuserrights, $userright['right_id']);
		}
		
		
		if (! empty ( $adminId )) {
			$encrypt_admin_user_id = $adminId;
			$admin_user_id = EncryptDecryptComponent::decryptUser ( $adminId );
			$model = AdminUsers::find ()->where ( [ 
					'admin_id' => $admin_user_id 
			] )->One ();
			$modelUser = User::find ()->where ( [ 
					'user_id' => $model->user_id 
			] )->One ();
			$adminuserRights = ArrayHelper::getColumn ( AdminUserRights::find ()->select ( 'right_id' )->where ( [ 
					'admin_id' => $admin_user_id 
			] )->asArray ()->All (), 'right_id' );
			;
		}
		
		if (Yii::$app->request->isAjax) {
			return $this->renderAjax ( '_updateadminuser', [ 
					'model' => $model,
					'modelUser' => $modelUser,
					'encrypt_admin_user_id' => $encrypt_admin_user_id,
					'rightslist' => $rightslist,
					'adminuserRights' => $adminuserRights,
					'currentuserrights'=>$currentuserrights
			] );
		} else {
			return $this->render ( '_updateadminuser', [ 
					'model' => $model,
					'modelUser' => $modelUser,
					'encrypt_admin_user_id' => $encrypt_admin_user_id,
					'rightslist' => $rightslist,
					'adminuserRights' => $adminuserRights,
					'currentuserrights'=>$currentuserrights
			] );
		}
	}
	
	// for update admin user
	
	// admin save
	public function actionSaveupdateadminuser() {
		$model_admin_users = new AdminUsers ();
		$model_users = new User ();
		$picmodel = new UploadForm ();
		$adminrights = new AdminUserRights ();
		$email_changed = false;
		$rightslist = RightsMaster::find ()->where ( [ 
				'user_type' => 1 
		] )->all ();
		if (! empty ( $_POST ['AdminUsers'] )) {
			
			// getting the firm user id
			$admin_user_id = EncryptDecryptComponent::decryptUser ( $_POST ['SupportVariable'] ['admin_user_id'] );
			
			// getting firm user details
			$model = AdminUsers::find ()->joinWith ( 'user' )->where ( [ 
					'admin_id' => $admin_user_id 
			] )->One ();
			
			$model_users = User::find ()->where ( [ 
					'user_id' => $model->user_id 
			] )->One ();
			$email_id = $model_users->username;
			/* begining the db transaction */
			$transaction = \Yii::$app->db->beginTransaction ();
			
			try {
				$model->attributes = $_POST ['AdminUsers'];
				$model_users->attributes = $_POST ['User'];
				/**
				 * ******Check if old email_id is different to new one***********
				 */
				if ($model_users->username != $email_id) {
					$model_users->is_verified = 0;
					$model_users->modified_by = \Yii::$app->user->identity->user_id;
					$model_users->modified_date = date ( 'Y-m-d H:i:s' );
					$email_changed = true;
				}
				
				if ($model_users->save ()) {
					
					// now saving data in firm users table
					$model->modified_by = \Yii::$app->user->identity->user_id;
					$model->modified_date = date ( 'Y-m-d H:i:s' );
					
					$picmodel->file = UploadedFile::getInstance ( $model, 'profile_pic' );
					
					if (! empty ( $picmodel->file ) && $picmodel->validate ()) {
						$pic_name = time () . '_' . $model_users->user_id . '.' . $picmodel->file->extension;
						
						// is_dir - tells whether the filename is a directory
						if (! is_dir ( 'images/admin_user' )) {
							// mkdir - tells that need to create a directory
							mkdir ( 'images/admin_user' );
						}
						
						$picmodel->file->saveAs ( 'images/admin_user/' . $pic_name );
						
						$model->profile_pic = $pic_name;
					}
					if ($model->save ()) {
						
						$admin_user_id = $model->admin_id;
						
						$permissions = \Yii::$app->request->post ( 'AdminUserRights' );
						$rights_count = 0;
						$total_permissions_count = count ( $permissions );
						
						AdminUserRights::deleteAll ( 'admin_id = :admin_id', [ 
								':admin_id' => $admin_user_id 
						] );
						
						if (! empty ( $permissions )) {
							
							foreach ( $permissions as $permission => $value ) {
								
								$adminrights->admin_id = $admin_user_id;
								$adminrights->right_id = $value;
								$adminrights->created_by = Yii::$app->user->identity->user_id;
								$adminrights->created_date = date ( 'Y-m-d h:i:s' );
								$adminrights->isNewRecord = true;
								$adminrights->user_right_id = NULL;
								
								if ($adminrights->save ()) {
									
									$rights_count ++;
								} else {
									
									throw new \Exception ( 'Unable to save permissions for user.' );
								}
							}
						}
						else {
							throw new \Exception ( 'Atleast one permission is required.' );
						}
						// check for email change
						if ($email_changed) {
							
							$to = $model_users->username;
							$from = 'sky@analytics.com';
							$name = $model->first_name . ' ' . $model->last_name;
							// creating link
							$link = \Yii::$app->urlManager->createAbsoluteUrl ( '/verify-mail' ) . '?authkey=' . $model_users->authkey . '&email=' . $model_users->username;
							$company_email = 'sky@analytics.com';
							$company_phone = '89998989898';
							$company_logo = \Yii::$app->urlManager->createAbsoluteUrl ( '/images/logo/benefits.png' );
							
							// send re-verifcation mail
							$mail_result = \Yii::$app->customMail->verifymail ( $to, $from, $name, $link, $company_email, $company_phone, $company_logo );
							$success = 'Profile updated successfully, a verification mail has been sent please verify it.';
						}
						
						// check if all permissions is saved
						if ($total_permissions_count == $rights_count) {
							// form inputs are valid, do something here
							$transaction->commit ();
							
							$success = 'success';
							Yii::$app->response->format = trim ( Response::FORMAT_JSON );
							return $success;
						}
					} else {
						$error = \yii\widgets\ActiveForm::validate ( $model );
						Yii::$app->response->format = trim ( Response::FORMAT_JSON );
						return $error;
					}
				} else {
					$error = \yii\widgets\ActiveForm::validate ( $model_users );
					Yii::$app->response->format = trim ( Response::FORMAT_JSON );
					return $error;
				}
			} catch ( \Exception $e ) {
				$msg = $e->getMessage ();
				Yii::$app->response->format = trim ( Response::FORMAT_JSON );
				return $msg;
			}
		}
	}
	
	// end update of admin
	
	// active / deactivate admin user
	public function actionDeactivateadmin() {
		if (isset ( $_POST ['admin_user_id'] ) && isset ( $_POST ['status'] )) {
			
			// $encrypt_component = new EncryptDecryptComponent ();
			
			// decrypting the firm id
			$admin_user_id = EncryptDecryptComponent::decryptUser ( $_POST ['admin_user_id'] );
			/* begining the db transaction */
			$transaction = \Yii::$app->db->beginTransaction ();
			try {
				if ($_POST ['status'] == 'A1') {
					
					$adminusers = AdminUsers::find ()->where ( [ 
							'admin_id' => $admin_user_id 
					] )->One ();
					$users = User::find ()->where ( [ 
							'user_id' => $adminusers->user_id 
					] )->One ();
					
					$adminusers->is_active = 1;
					$adminusers->extension = ( string ) $adminusers->extension;
					$adminusers->modified_date = date ( 'Y-m-d H:i:s' );
					if ($adminusers->save ()) {
						$users->is_active = 1;
						
						if ($users->save ()) {
							$transaction->commit ();
							return TRUE;
						} else {
							
							return FALSE;
						}
					} else {
						
						return FALSE;
					}
				} 

				else if ($_POST ['status'] == 'D2') {
					
					$adminusers = AdminUsers::findOne ( $admin_user_id );
					$users = User::find ()->where ( [ 
							'user_id' => $adminusers->user_id 
					] )->One ();
					
					$adminusers->is_active = 0;
					$adminusers->extension = ( string ) $adminusers->extension;
					$adminusers->modified_date = date ( 'Y-m-d H:i:s' );
					
					if ($adminusers->save ()) {
						$users->is_active = 0;
						
						if ($users->save ()) {
							$transaction->commit ();
							return TRUE;
						} else {
							
							return FALSE;
						}
					} else {
						
						return FALSE;
					}
				}
			} catch ( \Exception $e ) {
				$msg = $e->getMessage ();
				return FALSE;
			}
		}
	}
	
	// end admin user acticvation
	
	// action for add firm and firm users
	public function actionFirmuser() {
		
		// title of page
		\Yii::$app->view->title = \Yii::$app->params ['page_title'] . ' | Firm';
		
		// list of US states a sarray
		$stateList = States::find ()->all ();
		$states = ArrayHelper::map ( $stateList, function ($model, $defaultValue) {
			return EncryptDecryptComponent::encrytedUser ( $model ['state_id'] );
		}, function ($model, $defaultValue) {
			return $model ['state_name'];
		} );
		
		// declaring variables
		$firm_id = '';
		$location_name = '';
		$locations_names = '';
		$encrypt_firm_id = '';
		$active_modules_arr = array ();
		$firm_locations = array ();
		$newly_added_locations = array ();
		// $encrypt_component = new EncryptDecryptComponent ();
		
		// declaring new model
		$searchModel = new FirmUsersSearch ();
		$firmlocationsModel = new FirmLocations ();
		
		// getting available modules from lookup options
		$modules = LookupOptions::find ()->where ( [ 
				'option_type' => 2 
		] )->andWhere ( [ 
				'option_status' => 1 
		] )->All ();
		
		// getting variables from url
		$get_id = \Yii::$app->request->get ();
		
		// if we have firm_id in the url (i.e..., update firm)
		if (! empty ( $get_id )) {
			
			$encrypt_firm_id = $get_id ['id'];
			// decrypting the firm id
			$firm_id = EncryptDecryptComponent::decryptUser ( $encrypt_firm_id );
			
			$searchModel->firm_id = $firm_id;
			// data provider for firm users grid
			$dataProvider = $searchModel->search ( \Yii::$app->request->queryParams );
			
			// getting firm details based on firm_id from url
			$model = Firms::findOne ( $firm_id );
			
			// getting locations for this firm
			$firm_locations = FirmLocations::find ()->where ( [ 
					'firm_id' => $firm_id 
			] )->All ();
			
			// assigning all location names to one variable with comma seperated
			foreach ( $firm_locations as $firm_location ) {
				$locations_names .= $firm_location->location_name . ',';
			}
			
			// removing last comma
			$location_name = rtrim ( $locations_names, ',' );
			
			// getting available modules for this firm
			$active_modules = FirmModules::find ()->select ( 'module_id' )->where ( [ 
					'firm_id' => $firm_id 
			] )->andWhere ( [ 
					'is_active' => 1 
			] )->All ();
			
			foreach ( $active_modules as $active_module ) {
				$active_modules_arr [] = $active_module->module_id;
			}
		} 		// no firm_id in the url (i.e..., Add firm)
		else {
			
			// declaring new model
			$model = new Firms ();
			
			$searchModel->firm_id = 0;
			// data provider for firm users grid
			$dataProvider = $searchModel->search ( \Yii::$app->request->queryParams );
		}
		
		// if posting data (in add firm or update firm)
		if ($model->load ( Yii::$app->request->post () )) {
			
			/* begining the db transaction */
			$transaction = \Yii::$app->db->beginTransaction ();
			try {
				// saving firm logo
				if (isset ( $_FILES ['Firms'] ) && $_FILES ['Firms'] != '' && $_FILES ['Firms'] ['error'] ['firm_logo'] == 0) {
					
					// replacing space with underscore
					$file_name = str_replace ( ' ', '_', $_FILES ['Firms'] ['name'] ['firm_logo'] );
					
					// assigning timestamp to logo name
					$rnd = time ();
					$file_name_primary = "logo_{$rnd}_{$file_name}";
					
					$document = $_FILES ['Firms'];
					$info = pathinfo ( $_FILES ['Firms'] ['name'] ['firm_logo'] );
					$ext = $info ['extension'];
					
					// creating folder for images
					if (! is_dir ( getcwd () . '/images/firm-logos' )) {
						
						$old = umask ( 0 );
						mkdir ( getcwd () . '/images/firm-logos', 0777, true );
						umask ( $old );
					}
					
					// save uploaded image inthe specific folder
					move_uploaded_file ( $_FILES ['Firms'] ["tmp_name"] ['firm_logo'], getcwd () . '/images/firm-logos/' . $file_name_primary );
					$model->firm_logo = $file_name_primary;
				}
				
				$model->created_by = \Yii::$app->user->identity->user_id;
				$model->created_date = date ( 'Y-m-d H:i:s' );
				$model->modified_by = \Yii::$app->user->identity->user_id;
				$model->modified_date = date ( 'Y-m-d H:i:s' );
				if (! empty ( $_POST ['firm_locations'] )) {
					$model->firm_locations = true;
				}
				// save data in the table
				if ($model->save ()) {
					
					// Saving frim locations if exists
					if (! empty ( $_POST ['firm_locations'] )) {
						
						$locations_arr = $_POST ['firm_locations'];
						$existing_location_ids = array ();
						// getting already existing location IDs
						foreach ( $firm_locations as $location_ids ) {
							$existing_location_ids [] = $location_ids->location_id;
						}
						
						// checking new location ids are present in old location array or not
						foreach ( $locations_arr as $ind_location ) {
							//
							if (! (in_array ( $ind_location, $existing_location_ids ))) {
								if (gettype ( $ind_location ) != 'integer') {
									$newly_added_locations [] = $ind_location;
								}
							}
						}
						
						// now checking old locations ids present in newly added locations
						foreach ( $existing_location_ids as $existing_location_id ) {
							//
							if (! (in_array ( $existing_location_id, $locations_arr ))) {
								// now checking this deleted location is already assigned to any firm user
								$existing_firm_user_location = FirmUserLocations::find ()->where ( [ 
										'location_id' => $existing_location_id 
								] )->One ();
								// if already location exists
								if (! empty ( $existing_firm_user_location )) {
									// get the location name based on location id
									$existing_location_name = FirmLocations::find ()->where ( [ 
											'location_id' => $existing_location_id 
									] )->One ();
									throw new \Exception ( "Location '" . $existing_location_name->location_name . "' is already assigned to some users" );
								} else { // deleting those locations from the firm location table
									$remove_existing_location = FirmLocations::find ()->where ( [ 
											'location_id' => $existing_location_id 
									] )->One ();
									$remove_existing_location->delete ();
								}
							}
						}
						
						// now adding extra added locations in the db
						foreach ( $newly_added_locations as $location ) {
							$firmlocationsModel->firm_id = $model->firm_id;
							$firmlocationsModel->location_name = $location;
							$firmlocationsModel->created_by = \Yii::$app->user->identity->user_id;
							$firmlocationsModel->created_date = date ( 'Y-m-d H:i:s' );
							$firmlocationsModel->isNewRecord = True;
							$firmlocationsModel->location_id = NULL;
							$firmlocationsModel->save ();
						}
					}
					
					if (! empty ( $_POST ['activate_module'] )) {
						$result = $this->updatefirmmodules ( $model->firm_id, $_POST ['activate_module'] );
					} else {
						throw new \Exception ( 'Please select module' );
					}
					
					if ($result) {
						/* commiting the values to the db */
						$transaction->commit ();
					}
					// set flash message to user
					if (! empty ( $get_id )) {
						\Yii::$app->session->setFlash ( 'success', 'Firm details updated succesfully' );
					} else {
						\Yii::$app->session->setFlash ( 'success', 'Firm added succesfully' );
					}
					
					// encrypting the ids in url
					$encrypted_firm_id = EncryptDecryptComponent::encrytedUser ( $model->firm_id );
					// redirecting after succesful adding or updating firm details
					return $this->redirect ( [ 
							'firmuser',
							'id' => $encrypted_firm_id,
							'tab' => 2 
					] );
				}
			} catch ( \Exception $e ) {
				
				$msg = $e->getMessage ();
				\Yii::$app->session->setFlash ( 'error', $msg );
				
				$transaction->rollback ();
			}
		} // when no post data happened (first time opening page)
		
		return $this->render ( 'firmuser', [ 
				'firm_id' => $encrypt_firm_id,
				'searchModel' => $searchModel,
				'dataProvider' => $dataProvider,
				'states' => $states,
				'model' => $model,
				'location_name' => $location_name,
				'modules' => $modules,
				'active_modules_arr' => $active_modules_arr,
				'firm_locations' => $firm_locations,
				'encrypt_firm_id' => $encrypt_firm_id 
		] );
	}
	
	// function for update firm modules
	private function Updatefirmmodules($firm_id, $modules) {
		
		// declaring models
		$model_modules = new FirmModules ();
		$total_module_count = count ( $modules );
		// update all models
		FirmModules::updateAll ( [ 
				'is_active' => 0 
		], 'firm_id = ' . $firm_id );
		
		$count = 0;
		// saving all modules as individual records in table
		foreach ( $modules as $key => $value ) {
			$model_modules->firm_id = $firm_id;
			$model_modules->module_id = $key;
			$model_modules->is_active = 1;
			$model_modules->created_by = \Yii::$app->user->identity->id;
			$model_modules->created_date = date ( 'Y-m-d H:i:s' );
			$model_modules->isNewRecord = True;
			$model_modules->firm_module_id = NULL;
			
			if ($model_modules->save ()) {
				$count ++;
			}
		}
		if ($total_module_count == $count) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
	
	// action for create firm user (calling with ajax function)
	public function actionSavefirmuser() {
		$model = new FirmUsers ();
		$model_users = new User ();
		// $encrypt_component = new EncryptDecryptComponent ();
		$picmodel = new UploadForm ();
		$firm_rights = new FirmUserRights ();
		$firmlocationsModel = new FirmUserLocations ();
		$result = array ();
		
		if (isset ( $_POST ['FirmUsers'] )) {
			
			// decrypting the firm id
			$firm_id = EncryptDecryptComponent::decryptUser ( $_POST ['SupportVariable'] ['firm_id'] );
			
			/* begining the db transaction */
			$transaction = \Yii::$app->db->beginTransaction ();
			try {
				
				// first saving in users table
				$model_users->username = $_POST ['User'] ['username'];
				$model->attributes = $_POST ['FirmUsers'];
				
				$model_users->usertype = 2; // 2 for firm user
				$model_users->created_by = \Yii::$app->user->identity->user_id;
				$model_users->created_date = date ( 'Y-m-d H:i:s' );
				$model_users->modified_by = \Yii::$app->user->identity->user_id;
				$model_users->modified_date = date ( 'Y-m-d H:i:s' );
				
				if ($model_users->save ()) {
					
					// now saving data in firm users table
					$model->user_id = $model_users->user_id;
					$model->firm_id = $firm_id;
					$model->created_by = \Yii::$app->user->identity->user_id;
					$model->created_date = date ( 'Y-m-d H:i:s' );
					$model->modified_by = \Yii::$app->user->identity->user_id;
					$model->modified_date = date ( 'Y-m-d H:i:s' );
					
					$picmodel->file = UploadedFile::getInstance ( $model, 'profile_pic' );
					
					if (! empty ( $picmodel->file ) && $picmodel->validate ()) {
						
						$pic_name = time () . '_' . $model_users->user_id . '.' . $picmodel->file->extension;
						
						// is_dir - tells whether the filename is a directory
						if (! is_dir ( 'images/firm_user' )) {
							// mkdir - tells that need to create a directory
							mkdir ( 'images/firm_user' );
						}
						
						$picmodel->file->saveAs ( 'images/firm_user/' . $pic_name );
						
						$model->profile_pic = $pic_name;
					}
					
					if($model->is_primary == 1){
						//check if any user has is primary 
						$get_user_primary = FirmUsers::find ()->where ( [ 'firm_id' => $firm_id,'is_primary' =>1] )->One ();
						
						if(!empty($get_user_primary)){
						$get_user_primary->is_primary = 0;
						$get_user_primary->save();
						}
					}
					
					
					if($model->is_billing == 1){
						//check if any user has is  billing
						$get_user_billing = FirmUsers::find ()->where ( [ 'firm_id' => $firm_id,'is_billing' =>1] )->One ();
						
						if(!empty($get_user_billing)){
						$get_user_billing->is_billing = 0;
						$get_user_billing->save();
						}
					}
					
					if ($model->save ()) {
						
						$firm_user_id = $model->firm_user_id;
						
						// Saving frim locations if exists
						if (! empty ( $_POST ['firm_user_locations'] )) {
							
							// Deleting old one if exists
							FirmUserLocations::deleteAll ( 'firm_user_id = :firm_user_id', [ 
									':firm_user_id' => $model->firm_user_id 
							] );
							
							$locations_arr = $_POST ['firm_user_locations'];
							
							// Adding new locations
							foreach ( $locations_arr as $key => $value ) {
								$firmlocationsModel->firm_user_id = $firm_user_id;
								$firmlocationsModel->location_id = $value;
								$firmlocationsModel->created_by = \Yii::$app->user->identity->user_id;
								$firmlocationsModel->created_date = date ( 'Y-m-d H:i:s' );
								$firmlocationsModel->isNewRecord = True;
								$firmlocationsModel->firm_user_loc_id = NULL;
								$firmlocationsModel->save ();
							}
						}
						
						$permissions = \Yii::$app->request->post ( 'FirmUserRights' );
						$rights_count = 0;
						$total_permissions_count = count ( $permissions );
						
						if (! empty ( $permissions )) {
							foreach ( $permissions as $permission => $value ) {
								
								$firm_rights->firm_user_id = $firm_user_id;
								$firm_rights->right_id = $value;
								$firm_rights->created_by = Yii::$app->user->identity->user_id;
								$firm_rights->created_date = date ( 'Y-m-d h:i:s' );
								$firm_rights->isNewRecord = true;
								$firm_rights->user_right_id = NULL;
								
								if ($firm_rights->save ()) {
									
									$rights_count ++;
								} else {
									
									throw new \Exception ( 'Unable to save permissions for admin user.' );
								}
							}
						}
						
						// check if all permissions is saved
						if ($total_permissions_count == $rights_count) {
							// Sending mail
							$to = $model_users->username;
							$from = 'sky@analytics.com';
							$name = $model->first_name . ' ' . $model->last_name;
							// creating link
							$link = \Yii::$app->urlManager->createAbsoluteUrl ( '/verify-mail' ) . '?authkey=' . $model_users->authkey . '&email=' . $model_users->username;
							$company_email = 'sky@analytics.com';
							$company_phone = '89998989898';
							$company_logo = \Yii::$app->urlManager->createAbsoluteUrl ( '/images/logo/benefits.png' );
							
							// send re-verifcation mail
							$mail_result = \Yii::$app->customMail->verifymail ( $to, $from, $name, $link, $company_email, $company_phone, $company_logo );
							
							// form inputs are valid, do something here
							$transaction->commit ();
							$success = 'success';
							Yii::$app->response->format = trim ( Response::FORMAT_JSON );
							return $success;
						} else {
							$error = 'error';
							Yii::$app->response->format = trim ( Response::FORMAT_JSON );
							return $error;
						}
					} else {
						$error = \yii\widgets\ActiveForm::validate ( $model );
						Yii::$app->response->format = trim ( Response::FORMAT_JSON );
						return $error;
					}
				} else {
					$error = \yii\widgets\ActiveForm::validate ( $model_users );
					Yii::$app->response->format = trim ( Response::FORMAT_JSON );
					return $error;
				}
			} catch ( \Exception $e ) {
				$msg = $e->getMessage ();
				Yii::$app->response->format = trim ( Response::FORMAT_JSON );
				return $msg;
			}
		}
	}
	
	/**
	 * function to change the status of firm user *
	 */
	public function actionChangeuserstatus() {
		if (isset ( $_POST ['firm_user_id'] ) && isset ( $_POST ['status'] )) {
			
			// $encrypt_component = new EncryptDecryptComponent ();
			
			// decrypting the firm id
			$firm_user_id = EncryptDecryptComponent::decryptUser ( $_POST ['firm_user_id'] );
			/* begining the db transaction */
			$transaction = \Yii::$app->db->beginTransaction ();
			try {
				if ($_POST ['status'] == 'A1') {
					
					$firmusers = FirmUsers::findOne ( $firm_user_id );
					$users = User::find ()->where ( [ 
							'user_id' => $firmusers->user_id 
					] )->One ();
					
					$firmusers->is_active = 1;
					$firmusers->modified_date = date ( 'Y-m-d H:i:s' );
					
					if ($firmusers->save ()) {
						$users->is_active = 1;
						
						if ($users->save ()) {
							$transaction->commit ();
							return TRUE;
						} else {
							
							return FALSE;
						}
					} else {
						
						return FALSE;
					}
				} 

				else if ($_POST ['status'] == 'D2') {
					
					$firmusers = FirmUsers::findOne ( $firm_user_id );
					$users = User::find ()->where ( [ 
							'user_id' => $firmusers->user_id 
					] )->One ();
					$firmusers->is_active = 0;
					$firmusers->modified_date = date ( 'Y-m-d H:i:s' );
					
					if ($firmusers->save ()) {
						$users->is_active = 0;
						
						if ($users->save ()) {
							$transaction->commit ();
							return TRUE;
						} else {
							
							return FALSE;
						}
					} else {
						
						return FALSE;
					}
				}
			} catch ( \Exception $e ) {
				$msg = $e->getMessage ();
				return FALSE;
			}
		}
	}
	
	/**
	 * function to change the status of firm user *
	 */
	public function actionChangeclientuserstatus() {
		if (isset ( $_POST ['client_user_id'] ) && isset ( $_POST ['status'] )) {
			
			// $encrypt_component = new EncryptDecryptComponent ();
			
			// decrypting the firm id
			$client_user_id = EncryptDecryptComponent::decryptUser ( $_POST ['client_user_id'] );
			/* begining the db transaction */
			$transaction = \Yii::$app->db->beginTransaction ();
			try {
				if ($_POST ['status'] == 'A1') {
					
					$clientusers = Clientuser::findOne ( $client_user_id );
					$users = User::find ()->where ( [ 
							'user_id' => $clientusers->user_id 
					] )->One ();
					
					$clientusers->is_active = 1;
					$clientusers->modified_date = date ( 'Y-m-d H:i:s' );
					
					if ($clientusers->save ()) {
						$users->is_active = 1;
						
						if ($users->save ()) {
							
							$transaction->commit ();
							
							return TRUE;
						} else {
							
							return FALSE;
						}
					} else {
						return FALSE;
					}
				} 

				else if ($_POST ['status'] == 'D2') {
					
					$clientusers = Clientuser::findOne ( $client_user_id );
					$users = User::find ()->where ( [ 
							'user_id' => $clientusers->user_id 
					] )->One ();
					
					$clientusers->is_active = 0;
					$clientusers->modified_date = date ( 'Y-m-d H:i:s' );
					
					if ($clientusers->save ()) {
						$users->is_active = 0;
						
						if ($users->save ()) {
							
							$transaction->commit ();
							
							return TRUE;
						} else {
							
							return FALSE;
						}
					} else {
						print_r ( $clientusers->errors );
						die ();
						return FALSE;
					}
				}
			} catch ( \Exception $e ) {
				$msg = $e->getMessage ();
				return FALSE;
			}
		}
	}
	
	/**
	 * function to change the status of firm *
	 */
	public function actionChangefirmstatus() {
		if (isset ( $_POST ['firm_id'] ) && isset ( $_POST ['status'] )) {
			
			// $encrypt_component = new EncryptDecryptComponent ();
			
			// decrypting the firm id
			$firm_id = EncryptDecryptComponent::decryptUser ( $_POST ['firm_id'] );
			/* begining the db transaction */
			$transaction = \Yii::$app->db->beginTransaction ();
			try {
				
				if ($_POST ['status'] == 'A1') {
					// print_r('A1');die();
					$firms = Firms::find ()->where ( [ 
							'firm_id' => $firm_id 
					] )->One ();
					$firms->is_active = 1;
					$firms->modified_date = date ( 'Y-m-d H:i:s' );
					$firms->firm_locations = true;
					$firms->zip = (string)$firms->zip;
					
					if ($firms->save ()) {
						$transaction->commit ();
						return TRUE;
					} else {
						return FALSE;
					}
				} 

				else if ($_POST ['status'] == 'D2') {
					
					$firms = Firms::find ()->where ( [ 
							'firm_id' => $firm_id 
					] )->One ();
					$firms->is_active = 0;
					$firms->modified_date = date ( 'Y-m-d H:i:s' );
					$firms->firm_locations = true;
					$firms->zip = (string)$firms->zip;
					// print_r($firms);die();
					if ($firms->save ()) {
						$transaction->commit ();
						return TRUE;
					} else {
						
						return FALSE;
					}
				}
			} catch ( \Exception $e ) {
				
				
				$msg = $e->getMessage ();
				return FALSE;
			}
		}
	}
	
	/**
	 * * function to get the firm user details based on the firm user id **
	 */
	public function actionGetfirmdetails() {
		if (isset ( $_GET ['firm_user_id'] )) {
			
			// $encrypt_component = new EncryptDecryptComponent ();
			
			// decrypting the firm id
			$firm_user_id = EncryptDecryptComponent::decryptUser ( $_GET ['firm_user_id'] );
			
			$firmusers = FirmUsers::find ()->joinWith ( 'user' )->where ( [ 
					'firm_user_id' => $firm_user_id 
			] )->asArray ()->All ();
			
			print_r ( json_encode ( $firmusers ) );
		}
	}
	
	/**
	 * * function to update the firm user details (calling with ajax function)**
	 */
	public function actionUpdatefirmuser() {
		$model = new FirmUsers ();
		$model_users = new User ();
		// $encrypt_component = new EncryptDecryptComponent ();
		$picmodel = new UploadForm ();
		$firm_rights = new FirmUserRights ();
		$firmlocationsModel = new FirmUserLocations ();
		$result = array ();
		
		$email_changed = false;
		
		if (isset ( $_POST ['FirmUsers'] )) {
			
			// decrypting the firm id
			$firm_id = EncryptDecryptComponent::decryptUser ( $_POST ['SupportVariable'] ['firm_id'] );
			
			// getting the firm user id
			$firm_user_id = EncryptDecryptComponent::decryptUser ( $_POST ['SupportVariable'] ['firm_user_id'] );
			
			// getting firm user details
			$model = FirmUsers::find ()->joinWith ( 'user' )->where ( [ 
					'firm_user_id' => $firm_user_id 
			] )->One ();
			
			$model_users = User::find ()->where ( [ 
					'user_id' => $model->user_id 
			] )->One ();
			$email_id = $model_users->username;
			/* begining the db transaction */
			$transaction = \Yii::$app->db->beginTransaction ();
			try {
				$model->attributes = $_POST ['FirmUsers'];
				$model_users->attributes = $_POST ['User'];
				/**
				 * ******Check if old email_id is different to new one***********
				 */
				if ($model_users->username != $email_id) {
					$model_users->is_verified = 0;
					$model_users->modified_by = \Yii::$app->user->identity->user_id;
					$model_users->modified_date = date ( 'Y-m-d H:i:s' );
					$email_changed = true;
				}
				
				if ($model_users->save ()) {
					
					// now saving data in firm users table
					$model->modified_by = \Yii::$app->user->identity->user_id;
					$model->modified_date = date ( 'Y-m-d H:i:s' );
					
					$picmodel->file = UploadedFile::getInstance ( $model, 'profile_pic' );
					
					if (! empty ( $picmodel->file ) && $picmodel->validate ()) {
						
						$pic_name = time () . '_' . $model_users->user_id . '.' . $picmodel->file->extension;
						
						// is_dir - tells whether the filename is a directory
						if (! is_dir ( 'images/firm_user' )) {
							// mkdir - tells that need to create a directory
							mkdir ( 'images/firm_user' );
						}
						
						$picmodel->file->saveAs ( 'images/firm_user/' . $pic_name );
						
						$model->profile_pic = $pic_name;
					}
					
					if($model->is_primary == 1){
						//check if any user has is primary 
						$get_user_primary = FirmUsers::find ()->where ( [ 'firm_id' => $firm_id,'is_primary' =>1] )->One ();
						
						if(!empty($get_user_primary)){
						$get_user_primary->is_primary = 0;
						$get_user_primary->save();
						}
					}
					
					
					if($model->is_billing == 1){
						//check if any user has is  billing
						$get_user_billing = FirmUsers::find ()->where ( [ 'firm_id' => $firm_id,'is_billing' =>1] )->One ();
						
						if(!empty($get_user_billing)){
						$get_user_billing->is_billing = 0;
						$get_user_billing->save();
						}
					}
					
					
					if ($model->save ()) {
						
						$firm_user_id = $model->firm_user_id;
						
						// Saving frim locations if exists
						if (! empty ( $_POST ['firm_user_locations'] )) {
							
							// Deleting old one if exists
							FirmUserLocations::deleteAll ( 'firm_user_id = :firm_user_id', [ 
									':firm_user_id' => $model->firm_user_id 
							] );
							
							$locations_arr = $_POST ['firm_user_locations'];
							
							// Adding new locations
							foreach ( $locations_arr as $key => $value ) {
								$firmlocationsModel->firm_user_id = $firm_user_id;
								$firmlocationsModel->location_id = $value;
								$firmlocationsModel->created_by = \Yii::$app->user->identity->user_id;
								$firmlocationsModel->created_date = date ( 'Y-m-d H:i:s' );
								$firmlocationsModel->isNewRecord = True;
								$firmlocationsModel->firm_user_loc_id = NULL;
								$firmlocationsModel->save ();
							}
						}
						
						$permissions = \Yii::$app->request->post ( 'FirmUserRights' );
						$rights_count = 0;
						$total_permissions_count = count ( $permissions );
						
						FirmUserRights::deleteAll ( 'firm_user_id = :firm_user_id', [ 
								':firm_user_id' => $firm_user_id 
						] );
						
						if (! empty ( $permissions )) {
							
							foreach ( $permissions as $permission => $value ) {
								
								$firm_rights->firm_user_id = $firm_user_id;
								$firm_rights->right_id = $value;
								$firm_rights->created_by = Yii::$app->user->identity->user_id;
								$firm_rights->created_date = date ( 'Y-m-d h:i:s' );
								$firm_rights->isNewRecord = true;
								$firm_rights->user_right_id = NULL;
								
								if ($firm_rights->save ()) {
									
									$rights_count ++;
								} else {
									
									throw new \Exception ( 'Unable to save permissions for admin user.' );
								}
							}
						}
						
						// check if all permissions is saved
						if ($total_permissions_count == $rights_count) {
							// form inputs are valid, do something here
							$transaction->commit ();
							
							if ($email_changed) {
								
								$to = $model_users->username;
								$from = 'sky@analytics.com';
								$name = $model->first_name . ' ' . $model->last_name;
								// creating link
								$link = \Yii::$app->urlManager->createAbsoluteUrl ( '/verify-mail' ) . '?authkey=' . $model_users->authkey . '&email=' . $model_users->username;
								$company_email = 'sky@analytics.com';
								$company_phone = '89998989898';
								$company_logo = \Yii::$app->urlManager->createAbsoluteUrl ( '/images/logo/benefits.png' );
								
								// send re-verifcation mail
								$mail_result = \Yii::$app->customMail->verifymail ( $to, $from, $name, $link, $company_email, $company_phone, $company_logo );
								$success = 'Profile updated successfully, a verification mail has been sent please verify it.';
							}
							
							$success = 'success';
							Yii::$app->response->format = trim ( Response::FORMAT_JSON );
							return $success;
						}
					} else {
						$error = \yii\widgets\ActiveForm::validate ( $model );
						Yii::$app->response->format = trim ( Response::FORMAT_JSON );
						return $error;
					}
				} else {
					$error = \yii\widgets\ActiveForm::validate ( $model_users );
					Yii::$app->response->format = trim ( Response::FORMAT_JSON );
					return $error;
				}
			} catch ( \Exception $e ) {
				$msg = $e->getMessage ();
				Yii::$app->response->format = trim ( Response::FORMAT_JSON );
				return $msg;
			}
		}
	}
	public function actionClientuser() {
		\Yii::$app->view->title = \Yii::$app->params ['page_title'] . ' | Client';
		$client_id = '';
		$encrypt_client_id = '';
		$active_modules = '';
		$client_active_modules = '';
		$encrypt_firm_id = '';
		
		$model_client_users = new ClientUser ();
		$searchModel = new ClientUserSearch ();
		$model_company_subscription = new CompanySubscription ();
		
		/**
		 * ******************
		 */
		/**
		 * ******************
		 */
		$firmusersList = array ();
		$modules = array ();
		$client_count = '';
		$active_modules_arr = array ();
		$firmList = array ();
		// if admin logged in
		if (Yii::$app->user->identity->usertype == 1) {
			$firms = Firms::find ()->where ( [ 
					'is_active' => 1 
			] )->all ();
		} 		// if firm user logged in
		else if (Yii::$app->user->identity->usertype == 2) {
			// get the firm of this firm user
			$firm_user_firm_id = FirmUsers::find ()->where ( [ 
					'user_id' => Yii::$app->user->identity->user_id 
			] )->One ();
			// now getting the related firm
			$firms = Firms::find ()->where ( [ 
					'firm_id' => $firm_user_firm_id->firm_id 
			] )->andWhere ( [ 
					'is_active' => 1 
			] )->all ();
			
			$encrypt_firm_id= EncryptDecryptComponent::encrytedUser (  $firm_user_firm_id->firm_id );
		}
		if (! empty ( $firms )) {
			$firmList = ArrayHelper::map ( $firms, function ($model, $defaultValue) {
				return EncryptDecryptComponent::encrytedUser ( $model ['firm_id'] );
			}, function ($model, $defaultValue) {
				return $model ['firm_name'];
			} );
		}
		
		$states = States::find ()->all ();
		$stateList = ArrayHelper::map ( $states, function ($model, $defaultValue) {
			return EncryptDecryptComponent::encrytedUser ( $model ['state_id'] );
		}, function ($model, $defaultValue) {
			return $model ['state_name'];
		} );
		
		$industry = LookupOptions::find ()->where ( [ 
				'option_type' => 3 
		] )->andWhere ( [ 
				'option_status' => 1 
		] )->all ();
		$industryList = ArrayHelper::map ( $industry, function ($model, $defaultValue) {
			return EncryptDecryptComponent::encrytedUser ( $model ['option_id'] );
		}, function ($model, $defaultValue) {
			return $model ['option_value'];
		} );
		
		$employersize = LookupOptions::find ()->where ( [ 
				'option_type' => 4 
		] )->andWhere ( [ 
				'option_status' => 1 
		] )->all ();
		$employersizeList = ArrayHelper::map ( $employersize, function ($model, $defaultValue) {
			return EncryptDecryptComponent::encrytedUser ( $model ['option_id'] );
		}, function ($model, $defaultValue) {
			return $model ['option_value'];
		} );
		
		$available_packages = LookupOptions::find ()->where ( [ 
				'option_type' => 5 
		] )->andWhere ( [ 
				'option_status' => 1 
		] )->all ();
		
		// getting variables from url
		$get_id = \Yii::$app->request->get ();
		
		// if we have client_id in the url (i.e..., update client)
		if (! empty ( $get_id )) {
			$encrypt_client_id = $get_id ['id'];
			// decrypting the firm id
			$client_id = EncryptDecryptComponent::decryptUser ( $encrypt_client_id );
			// getting firm details based on firm_id from url
			$model = Clients::findOne ( $client_id );
			
			$searchModel->client_id = $client_id;
			// data provider for firm users grid
			$dataProvider = $searchModel->search ( \Yii::$app->request->queryParams );
			
			// encrypting all the decrypted data
			$model->add_firm_id = EncryptDecryptComponent::encrytedUser ( $model->firm_id );
			$model->add_state = EncryptDecryptComponent::encrytedUser ( $model->state );
			$model->add_primary_consultant = EncryptDecryptComponent::encrytedUser ( $model->primary_consultant );
			$model->add_primary_account_manager = EncryptDecryptComponent::encrytedUser ( $model->primary_account_manager );
			$model->add_primary_service_rep = EncryptDecryptComponent::encrytedUser ( $model->primary_service_rep );
			$model->add_employer_size_category = EncryptDecryptComponent::encrytedUser ( $model->employer_size_category );
			$model->add_industry_code = EncryptDecryptComponent::encrytedUser ( $model->industry_code );
			
			$firmusers = FirmUsers::find ()->where ( [ 
					'firm_id' => $model->firm_id 
			] )->andWhere ( [ 
					'is_active' => 1 
			] )->asArray ()->All ();
			
			$firmusersList = ArrayHelper::map ( $firmusers, function ($model, $defaultValue) {
				return EncryptDecryptComponent::encrytedUser ( $model ['firm_user_id'] );
			}, function ($model, $defaultValue) {
				return $model ['first_name'] . ' ' . $model ['last_name'];
			} );
			
			// ///////// now grtting list of modules available for this client
			$modules = FirmModules::find ()->joinwith ( 'module' )->select ( 'option_id,firm_id,module_id,option_value' )->where ( [ 
					'firm_id' => $model->firm_id 
			] )->andWhere ( [ 
					'is_active' => 1 
			] )->asArray ()->All ();
			
			// ///// now getting number of clients that the selected firm has
			$client_count = Clients::find ()->where ( [ 
					'firm_id' => $model->firm_id 
			] )->Count ();
			
			// getting available modules for this client
			$model_company_subscription = $client_active_modules = CompanySubscription::find ()->where ( [ 
					'client_id' => $client_id 
			] )->andWhere ( [ 
					'is_active' => 1 
			] )->One ();
			
			// foreach ( $client_active_modules as $client_active_module ) {
			// $active_modules_arr [] = $client_active_module->module_id;
			$active_modules = $client_active_modules->module_id;
			// }
		} else { // don't have client id in url (i.e.., add client)
			$model = new Clients ();
			$searchModel->client_id = 0;
			$dataProvider = $searchModel->search ( \Yii::$app->request->queryParams );
		}
		
		/* begining the db transaction */
		$transaction = \Yii::$app->db->beginTransaction ();
		try {
			
			// if posting data (in add firm or update firm)
			if ($model->load ( Yii::$app->request->post () )) {
				
				// decrypting all the encrypted posted data
				$decrypted_firm_id = EncryptDecryptComponent::decryptUser ( $model->add_firm_id );
				$decrypted_state = EncryptDecryptComponent::decryptUser ( $model->add_state );
				$decrypted_primary_consultant = EncryptDecryptComponent::decryptUser ( $model->add_primary_consultant );
				$decrypted_primary_account_manager = EncryptDecryptComponent::decryptUser ( $model->add_primary_account_manager );
				$decrypted_primary_service_rep = EncryptDecryptComponent::decryptUser ( $model->add_primary_service_rep );
				$decrypted_employer_size_category = EncryptDecryptComponent::decryptUser ( $model->add_employer_size_category );
				$decrypted_industry_code = EncryptDecryptComponent::decryptUser ( $model->add_industry_code );
				
				// saving firm logo
				if (isset ( $_FILES ['Clients'] ) && $_FILES ['Clients'] != '' && $_FILES ['Clients'] ['error'] ['company_logo'] == 0) {
					
					// replacing space with underscore
					$file_name = str_replace ( ' ', '_', $_FILES ['Clients'] ['name'] ['company_logo'] );
					
					// assigning timestamp to logo name
					$rnd = time ();
					$file_name_primary = "logo_{$rnd}_{$file_name}";
					
					$document = $_FILES ['Clients'];
					$info = pathinfo ( $_FILES ['Clients'] ['name'] ['company_logo'] );
					$ext = $info ['extension'];
					
					// creating folder for images
					if (! is_dir ( getcwd () . '/images/client-logos' )) {
						
						$old = umask ( 0 );
						mkdir ( getcwd () . '/images/client-logos', 0777, true );
						umask ( $old );
					}
					
					// save uploaded image inthe specific folder
					move_uploaded_file ( $_FILES ['Clients'] ["tmp_name"] ['company_logo'], getcwd () . '/images/client-logos/' . $file_name_primary );
					$model->company_logo = $file_name_primary;
				}
				
				// assigning posted values to model
				$model->firm_id = $decrypted_firm_id;
				$model->state = $decrypted_state;
				$model->primary_consultant = $decrypted_primary_consultant;
				$model->primary_account_manager = $decrypted_primary_account_manager;
				$model->primary_service_rep = $decrypted_primary_service_rep;
				$model->employer_size_category = $decrypted_employer_size_category;
				$model->industry_code = $decrypted_industry_code;
				$model->created_by = \Yii::$app->user->identity->user_id;
				$model->created_date = date ( 'Y-m-d H:i:s' );
				$model->modified_by = \Yii::$app->user->identity->user_id;
				$model->modified_date = date ( 'Y-m-d H:i:s' );
				
				// saving model values
				if ($model->save ()) {
					
					$client_id = $model->client_id;
					
					// save in packages table
					if (! empty ( Yii::$app->request->post ( 'activate_module' ) ) && ! empty ( Yii::$app->request->post ( 'client_activate_module' ) )) {
						
						$module_id = Yii::$app->request->post ( 'activate_module' );
						$package_id = Yii::$app->request->post ( 'client_activate_module' );
						
						$pricing_details = SystemPricing::find ()->where ( [ 
								'module_id' => $module_id,
								'package_type' => $package_id 
						] )->One ();
						
						// chekc if subscription is for new client
						if ($model_company_subscription->isNewRecord) {
							
							$model_company_subscription->client_id = $client_id;
							$model_company_subscription->module_id = $module_id;
							$model_company_subscription->package_type = $package_id;
							$model_company_subscription->amount = $pricing_details->amount;
							$model_company_subscription->is_active = 1;
							$model_company_subscription->created_date = date ( 'Y-m-d H:i:s' );
							$model_company_subscription->created_by = \Yii::$app->user->identity->user_id;
						} else {
							// for old client
							// check if there is any change in subscription
							if ($client_active_modules->module_id != $module_id || $client_active_modules->package_type != $package_id) {
								// Inactive last subscription and add new subscription
								$client_active_modules->is_active = 0;
								$client_active_modules->modified_date = date ( 'Y-m-d H:i:s' );
								$client_active_modules->modified_by = \Yii::$app->user->identity->user_id;
								$client_active_modules->save ();
								
								// create new subscription
								$model_company_subscription = new CompanySubscription ();
								$model_company_subscription->client_id = $client_id;
								$model_company_subscription->module_id = $module_id;
								$model_company_subscription->package_type = $package_id;
								$model_company_subscription->amount = $pricing_details->amount;
								$model_company_subscription->is_active = 1;
								$model_company_subscription->created_date = date ( 'Y-m-d H:i:s' );
								$model_company_subscription->created_by = \Yii::$app->user->identity->user_id;
							}
						}
						
						if ($model_company_subscription->save ()) {
							
							$transaction->commit ();
							// set flash message to user
							if (! empty ( $get_id )) {
								// update client
								\Yii::$app->session->setFlash ( 'success', 'Client details updated succesfully' );
							} else {
								// add client
								\Yii::$app->session->setFlash ( 'success', 'Client added succesfully' );
							}
							
							// encrypting the ids in url
							$encrypted_client_id = EncryptDecryptComponent::encrytedUser ( $model->client_id );
							// redirecting after succesful adding or updating firm details
							return $this->redirect ( [ 
									'clientuser',
									'id' => $encrypted_client_id,
									'tab' => 2 
							] );
						} else {
								$arrerrors = $model_company_subscription->getFirstErrors();
							   $errorstring = '';
							   /*******Converting error into string********/
							   foreach ($arrerrors as $key=>$value)
							   {
								$errorstring .= $value.'<br>';
							   }
							   
							   throw new \Exception($errorstring);
						}
					} else {
						
						
						
						throw new \Exception ( 'Please select client subscription.' );
					}
				}else
				{
					$arrerrors = $model->getFirstErrors();
				   $errorstring = '';
				   /*******Converting error into string********/
				   foreach ($arrerrors as $key=>$value)
				   {
					$errorstring .= $value.'<br>';
				   }
				   
				   throw new \Exception($errorstring);
				}
			}
		} catch ( \Exception $e ) {
			$msg = $e->getMessage ();
			$transaction->rollBack ();
			
			

			// encrypting all the decrypted data
			$model->add_firm_id = EncryptDecryptComponent::encrytedUser ( $model->firm_id );
			$model->add_state = EncryptDecryptComponent::encrytedUser ( $model->state );
			$model->add_primary_consultant = EncryptDecryptComponent::encrytedUser ( $model->primary_consultant );
			$model->add_primary_account_manager = EncryptDecryptComponent::encrytedUser ( $model->primary_account_manager );
			$model->add_primary_service_rep = EncryptDecryptComponent::encrytedUser ( $model->primary_service_rep );
			$model->add_employer_size_category = EncryptDecryptComponent::encrytedUser ( $model->employer_size_category );
			$model->add_industry_code = EncryptDecryptComponent::encrytedUser ( $model->industry_code );
			
			$firmusers = FirmUsers::find ()->where ( [ 
					'firm_id' => $model->firm_id 
			] )->andWhere ( [ 
					'is_active' => 1 
			] )->asArray ()->All ();
			
			$firmusersList = ArrayHelper::map ( $firmusers, function ($model, $defaultValue) {
				return EncryptDecryptComponent::encrytedUser ( $model ['firm_user_id'] );
			}, function ($model, $defaultValue) {
				return $model ['first_name'] . ' ' . $model ['last_name'];
			} );
			
			// ///////// now grtting list of modules available for this client
			$modules = FirmModules::find ()->joinwith ( 'module' )->select ( 'option_id,firm_id,module_id,option_value' )->where ( [ 
					'firm_id' => $model->firm_id 
			] )->andWhere ( [ 
					'is_active' => 1 
			] )->asArray ()->All ();
			
			// ///// now getting number of clients that the selected firm has
			$client_count = Clients::find ()->where ( [ 
					'firm_id' => $model->firm_id 
			] )->Count ();
			
			$model = new Clients ();
			\Yii::$app->session->setFlash ( 'error', $msg );
		}
		
		return $this->render ( 'clientuser', [ 
				'client_id' => $client_id,
				'searchModel' => $searchModel,
				'dataProvider' => $dataProvider,
				'firmList' => $firmList,
				'stateList' => $stateList,
				'model' => $model,
				'industryList' => $industryList,
				'employersizeList' => $employersizeList,
				'firmusersList' => $firmusersList,
				'model_client_users' => $model_client_users,
				'encrypt_client_id' => $encrypt_client_id,
				'available_packages' => $available_packages,
				'modules' => $modules,
				'client_count' => $client_count,
				'active_modules_arr' => $active_modules_arr,
				'client_count' => $client_count,
				'active_modules' => $active_modules,
				'client_active_modules' => $client_active_modules,
				'encrypt_firm_id'=>$encrypt_firm_id
		] );
	}
	
	/**
	 * function to get the firm details (users list, packeges, modules...) based on selected firm ID *
	 */
	public function actionGetselectedfirmdetails() {
		if (isset ( $_POST ['firm_id'] )) {
			$firmuserList = array ();
			$result = array ();
			// decrypting the firm id
			$firm_id = EncryptDecryptComponent::decryptUser ( $_POST ['firm_id'] );
			
			// getting firm users based on firm ID
			$firmusers = FirmUsers::find ()->where ( [ 
					'firm_id' => $firm_id 
			] )->andWhere ( [ 
					'is_active' => 1 
			] )->asArray ()->All ();
			$i = 0;
			
			// arranging in the required format
			foreach ( $firmusers as $firmuser ) {
				$firmuserList [$i] ['firm_user_id'] = EncryptDecryptComponent::encrytedUser ( $firmuser ['firm_user_id'] );
				$firmuserList [$i] ['firm_user_fullname'] = $firmuser ['first_name'] . ' ' . $firmuser ['last_name'];
				$i ++;
			}
			
			// ///////// now grtting list of modules available for this firm
			$modules = FirmModules::find ()->joinwith ( 'module' )->select ( 'firm_id,module_id,option_value' )->where ( [ 
					'firm_id' => $firm_id 
			] )->andWhere ( [ 
					'is_active' => 1 
			] )->asArray ()->All ();
			
			// ///// now getting number of clients that the selected firm has
			$client_count = Clients::find ()->where ( [ 
					'firm_id' => $firm_id 
			] )->asArray ()->Count ();
			
			$result ['firm_users'] = $firmuserList;
			$result ['firm_modules'] = $modules;
			$result ['client_count'] = $client_count + 1;
			
			print_r ( json_encode ( $result ) );
		}
	}
	public function actionAddfirmuser($firmId, $firmUserId) {
		$model = new FirmUsers ();
		$modelUser = new User ();
		// $encrypt_component = new EncryptDecryptComponent ();
		$firm_rights = new FirmUserRights ();
		$location_name = '';
		$locations_names = '';
		$firm_locations = '';
		$encrypt_firm_user_id = '';
		$get_user_primary = '';
		$get_user_billing = '';
		$firm_user_id= '';
		$firmuserRights = array ();
		$firmuserLocations = array ();
		$currentuserrights = array ();
		
		$logged_id=Yii::$app->user->identity->user_id;
		$rightslist = RightsMaster::find ()->where ( [ 
				'user_type' => 2 
		] )->all ();
		
		
		if(Yii::$app->user->identity->usertype==2){
			
		
		$firm_id=FirmUsers::findOne(['user_id'=>$logged_id]);
		
		$sql="SELECT rm.right_id FROM tbl_sir_firm_user_rights fur Left Join tbl_sir_rights_master rm on fur.right_id=rm.right_id WHERE rm.user_type=2 and fur.firm_user_id=$firm_id->firm_user_id";
		$connection = \yii::$app->db;
		$sqlmodel = $connection->createCommand($sql);
		//	print_r($model); die();
		$userrights= $sqlmodel->queryAll();
		
		foreach ($userrights as $userright){
			array_push($currentuserrights, $userright['right_id']);
		}
		}
		
		//print_r($currentuserrights); die();
		// decrypting the firm id
		$firm_id = EncryptDecryptComponent::decryptUser ( $firmId );
		
		if (! empty ( $firmUserId )) {
			$encrypt_firm_user_id = $firmUserId;
			$firm_user_id = EncryptDecryptComponent::decryptUser ( $firmUserId );
			$model = FirmUsers::find ()->where ( [ 
					'firm_user_id' => $firm_user_id 
			] )->One ();
			$modelUser = User::find ()->where ( [ 
					'user_id' => $model->user_id 
			] )->One ();
			$firmuserRights = ArrayHelper::getColumn ( FirmUserRights::find ()->select ( 'right_id' )->where ( [ 
					'firm_user_id' => $firm_user_id 
			] )->asArray ()->All (), 'right_id' );
			;
			$firmuserLocations = ArrayHelper::getColumn ( FirmUserLocations::find ()->select ( 'location_id' )->where ( [ 
					'firm_user_id' => $firm_user_id 
			] )->asArray ()->All (), 'location_id' );
			;
		}
		
		// getting locations for this firm
		$firm_locations = FirmLocations::find ()->where ( [ 
				'firm_id' => $firm_id 
		] )->All ();
		if (! empty ( $firm_locations )) {
			// assigning all location names to one variable with comma seperated
			foreach ( $firm_locations as $firm_location ) {
				$locations_names .= $firm_location->location_name . ',';
			}
			
			// removing last comma
			$location_name = rtrim ( $locations_names, ',' );
		}
		
		if(!empty($firm_user_id)){
		//check if any user has is primary 
		$get_user_primary = FirmUsers::find ()->where ( [ 'firm_id' => $firm_id,'is_primary' =>1] )->andWhere('firm_user_id <> '.$firm_user_id)->One ();
		//check if any user has is  billing
		$get_user_billing = FirmUsers::find ()->where ( [ 'firm_id' => $firm_id,'is_billing' =>1] )->andWhere('firm_user_id <> '.$firm_user_id)->One ();
		
		}else
		{
		//check if any user has is primary 
		$get_user_primary = FirmUsers::find ()->where ( [ 'firm_id' => $firm_id,'is_primary' =>1] )->One ();
		//check if any user has is  billing
		$get_user_billing = FirmUsers::find ()->where ( [ 'firm_id' => $firm_id,'is_billing' =>1] )->One ();
		
		}
		
		
		if (Yii::$app->request->isAjax) {
			return $this->renderAjax ( '_addfirmuser', [ 
					'model' => $model,
					'modelUser' => $modelUser,
					'encrypt_firm_id' => $firmId,
					'firm_locations' => $firm_locations,
					'location_name' => $location_name,
					'encrypt_firm_user_id' => $encrypt_firm_user_id,
					'rightslist' => $rightslist,
					'firmuserRights' => $firmuserRights,
					'firmuserLocations' => $firmuserLocations,
					'get_user_primary'=>$get_user_primary,
					'get_user_billing'=>$get_user_billing,
					'currentuserrights'=>$currentuserrights
			] );
		} else {
			return $this->render ( '_addfirmuser', [ 
					'model' => $model,
					'modelUser' => $modelUser,
					'encrypt_firm_id' => $firmId,
					'firm_locations' => $firm_locations,
					'location_name' => $location_name,
					'encrypt_firm_user_id' => $encrypt_firm_user_id,
					'rightslist' => $rightslist,
					'firmuserRights' => $firmuserRights,
					'firmuserLocations' => $firmuserLocations,
					'get_user_primary'=>$get_user_primary,
					'get_user_billing'=>$get_user_billing,
					'currentuserrights'=>$currentuserrights
			] );
		}
	}
	
	/**
	 * ******Send Password Mail*******
	 */
	public function actionSendpasswordmail() {
		$arrresult = array ();
		if (isset ( $_POST ['user_id'] )) {
			$modeluser = new User ();
			
			// decrypting the firm id
			$user_id = EncryptDecryptComponent::decryptUser ( $_POST ['user_id'] );
			try {
				// find by username
				$user_details = $modeluser->findIdentity ( $user_id );
				
				if (! empty ( $user_details )) {
					
					// Setting password reset token
					$user_details->generatePasswordResetToken ();
					
					if ($user_details->save ()) {
						
						$password_reset_token = $user_details->password_reset_token;
						
						$to = $user_details->username;
						$from = 'sky@analytics.com';
						$name = $to;
						// creating link
						$link = \Yii::$app->urlManager->createAbsoluteUrl ( '/forgot-password' ) . '?token=' . $password_reset_token . '&email=' . $user_details->username;
						$company_email = 'sky@analytics.com';
						$company_phone = '89998989898';
						$company_logo = \Yii::$app->urlManager->createAbsoluteUrl ( '/images/logo/benefits.png' );
						
						// send forgot password mail
						$mail_result = \Yii::$app->customMail->forgotpasswordmail ( $to, $from, $name, $link, $company_email, $company_phone, $company_logo );
						
						if (! empty ( $mail_result )) {
							$arrresult ['success'] = 'Password reset link sent to ' . $user_details->username;
						} else {
							throw new \Exception ( 'Some error occurred while sending mail' );
						}
					}
				} else {
					throw new \Exception ( 'No user found' );
				}
			} catch ( \Exception $e ) {
				$msg = $e->getMessage ();
				$arrresult ['error'] = $msg;
			}
		} else {
			$arrresult ['error'] = 'No userId posted';
		}
		
		return json_encode ( $arrresult );
	}
	public function actionAddclientuser($clientId, $clientUserId) {
		$model = new ClientUser ();
		$modelUser = new User ();
		$encrypt_component = new EncryptDecryptComponent ();
		$encrypt_client_user_id = '';
		// decrypting the client id
		$client_id = $encrypt_component->decryptUser ( $clientId );
		
		if (! empty ( $clientUserId )) {
			$encrypt_client_user_id = $clientUserId;
			$client_user_id = $encrypt_component->decryptUser ( $clientUserId );
			$model = ClientUser::find ()->where ( [ 
					'client_user_id' => $client_user_id 
			] )->One ();
			$modelUser = User::find ()->where ( [ 
					'user_id' => $model->user_id 
			] )->One ();
		}
		
		
		if(!empty($client_user_id)){
		//check if any user has is primary 
		$get_user_primary = ClientUser::find ()->where ( [ 'client_id' => $client_id,'is_primary' =>1] )->andWhere('client_user_id <> '.$client_user_id)->One ();
		//check if any user has is  billing
		$get_user_billing = ClientUser::find ()->where ( [ 'client_id' => $client_id,'is_billing' =>1] )->andWhere('client_user_id <> '.$client_user_id)->One ();
		
		}else
		{
		//check if any user has is primary 
		$get_user_primary = ClientUser::find ()->where ( [ 'client_id' => $client_id,'is_primary' =>1] )->One ();
		//check if any user has is  billing
		$get_user_billing = ClientUser::find ()->where ( [ 'client_id' => $client_id,'is_billing' =>1] )->One ();
		
		}
	
		
		if (Yii::$app->request->isAjax) {
			return $this->renderAjax ( '_addclientuser', [ 
					'model' => $model,
					'modelUser' => $modelUser,
					'encrypt_client_id' => $clientId,
					'encrypt_client_user_id' => $encrypt_client_user_id,
					'get_user_primary'=>$get_user_primary,
					'get_user_billing'=>$get_user_billing
			] );
		} else {
			return $this->render ( '_addclientuser', [ 
					'model' => $model,
					'modelUser' => $modelUser,
					'encrypt_client_id' => $clientId,
					'encrypt_client_user_id' => $encrypt_client_user_id,
					'get_user_primary'=>$get_user_primary,
					'get_user_billing'=>$get_user_billing
			] );
		}
	}
	
	// action for create client user (calling with ajax function)
	public function actionSaveclientuser() {
		$model = new ClientUser ();
		$model_users = new User ();
		// $encrypt_component = new EncryptDecryptComponent ();
		$picmodel = new UploadForm ();
		$result = array ();
		
		if (isset ( $_POST ['ClientUser'] )) {
			
			// decrypting the client id
			$client_id = EncryptDecryptComponent::decryptUser ( $_POST ['SupportVariable'] ['client_id'] );
			
			/* begining the db transaction */
			$transaction = \Yii::$app->db->beginTransaction ();
			try {
				
				// first saving in users table
				$model_users->username = $_POST ['User'] ['username'];
				$model->attributes = $_POST ['ClientUser'];
				
				$model_users->usertype = 3; // 2 for client user
				$model_users->created_by = \Yii::$app->user->identity->user_id;
				$model_users->created_date = date ( 'Y-m-d H:i:s' );
				$model_users->modified_by = \Yii::$app->user->identity->user_id;
				$model_users->modified_date = date ( 'Y-m-d H:i:s' );
				
				if ($model_users->save ()) {
					
					// now saving data in firm users table
					$model->user_id = $model_users->user_id;
					$model->client_id = $client_id;
					$model->created_by = \Yii::$app->user->identity->user_id;
					$model->created_date = date ( 'Y-m-d H:i:s' );
					$model->modified_by = \Yii::$app->user->identity->user_id;
					$model->modified_date = date ( 'Y-m-d H:i:s' );
					
					$picmodel->file = UploadedFile::getInstance ( $model, 'profile_pic' );
					
					if (! empty ( $picmodel->file ) && $picmodel->validate ()) {
						
						$pic_name = time () . '_' . $model_users->user_id . '.' . $picmodel->file->extension;
						
						// is_dir - tells whether the filename is a directory
						if (! is_dir ( 'images/client_user' )) {
							// mkdir - tells that need to create a directory
							mkdir ( 'images/client_user' );
						}
						
						$picmodel->file->saveAs ( 'images/client_user/' . $pic_name );
						
						$model->profile_pic = $pic_name;
					}
					
					if($model->is_primary == 1){
						//check if any user has is primary 
						$get_user_primary = ClientUser::find ()->where ( [ 'client_id' => $client_id,'is_primary' =>1] )->One ();
						
						if(!empty($get_user_primary)){
						$get_user_primary->is_primary = 0;
						$get_user_primary->save();
						}
					}
					
					
					if($model->is_billing == 1){
						//check if any user has is  billing
						$get_user_billing = ClientUser::find ()->where ( [ 'client_id' => $client_id,'is_billing' =>1] )->One ();
						
						if(!empty($get_user_billing)){
						$get_user_billing->is_billing = 0;
						$get_user_billing->save();
						}
					}
					
					if ($model->save ()) {
						
						// Sending mail
						$to = $model_users->username;
						$from = 'sky@analytics.com';
						$name = $model->first_name . ' ' . $model->last_name;
						// creating link
						$link = \Yii::$app->urlManager->createAbsoluteUrl ( '/verify-mail' ) . '?authkey=' . $model_users->authkey . '&email=' . $model_users->username;
						$company_email = 'sky@analytics.com';
						$company_phone = '89998989898';
						$company_logo = \Yii::$app->urlManager->createAbsoluteUrl ( '/images/logo/benefits.png' );
						
						// send re-verifcation mail
						$mail_result = \Yii::$app->customMail->verifymail ( $to, $from, $name, $link, $company_email, $company_phone, $company_logo );
						
						// form inputs are valid, do something here
						$transaction->commit ();
						$success = 'add-success';
						Yii::$app->response->format = trim ( Response::FORMAT_JSON );
						return $success;
					} else {
						$error = \yii\widgets\ActiveForm::validate ( $model );
						Yii::$app->response->format = trim ( Response::FORMAT_JSON );
						return $error;
					}
				} else {
					$error = \yii\widgets\ActiveForm::validate ( $model_users );
					Yii::$app->response->format = trim ( Response::FORMAT_JSON );
					return $error;
				}
			} catch ( \Exception $e ) {
				$msg = $e->getMessage ();
				Yii::$app->response->format = trim ( Response::FORMAT_JSON );
				return $msg;
			}
		}
	}
	
	// action for create client user (calling with ajax function)
	public function actionUpdateclientuser() {
		$model = new ClientUser ();
		$model_users = new User ();
		// $encrypt_component = new EncryptDecryptComponent ();
		$picmodel = new UploadForm ();
		$result = array ();
		$email_changed = false;
		if (isset ( $_POST ['ClientUser'] )) {
			
			// decrypting the client id
			$client_id = EncryptDecryptComponent::decryptUser ( $_POST ['SupportVariable'] ['client_id'] );
			
			// getting the client user id
			$client_user_id = EncryptDecryptComponent::decryptUser ( $_POST ['SupportVariable'] ['client_user_id'] );
			
			// getting firm user details
			$model = ClientUser::find ()->joinWith ( 'user' )->where ( [ 
					'client_user_id' => $client_user_id 
			] )->One ();
			
			$model_users = User::find ()->where ( [ 
					'user_id' => $model->user_id 
			] )->One ();
			
			$email_id = $model_users->username;
			
			/* begining the db transaction */
			$transaction = \Yii::$app->db->beginTransaction ();
			try {
				
				$model->attributes = $_POST ['ClientUser'];
				$model_users->attributes = $_POST ['User'];
				/**
				 * ******Check if old email_id is different to new one***********
				 */
				if ($model_users->username != $email_id) {
					$model_users->is_verified = 0;
					$model_users->modified_by = \Yii::$app->user->identity->user_id;
					$model_users->modified_date = date ( 'Y-m-d H:i:s' );
					$email_changed = true;
				}
				
				if ($model_users->save ()) {
					
					// now saving data in firm users table
					$model->user_id = $model_users->user_id;
					$model->client_id = $client_id;
					$model->created_by = \Yii::$app->user->identity->user_id;
					$model->created_date = date ( 'Y-m-d H:i:s' );
					$model->modified_by = \Yii::$app->user->identity->user_id;
					$model->modified_date = date ( 'Y-m-d H:i:s' );
					
					$picmodel->file = UploadedFile::getInstance ( $model, 'profile_pic' );
					
					if (! empty ( $picmodel->file ) && $picmodel->validate ()) {
						
						$pic_name = time () . '_' . $model_users->user_id . '.' . $picmodel->file->extension;
						
						// is_dir - tells whether the filename is a directory
						if (! is_dir ( 'images/client_user' )) {
							// mkdir - tells that need to create a directory
							mkdir ( 'images/client_user' );
						}
						
						$picmodel->file->saveAs ( 'images/client_user/' . $pic_name );
						
						$model->profile_pic = $pic_name;
					}
					
					
					if($model->is_primary == 1){
						//check if any user has is primary 
						$get_user_primary = ClientUser::find ()->where ( [ 'client_id' => $client_id,'is_primary' =>1] )->One ();
						
						if(!empty($get_user_primary)){
						$get_user_primary->is_primary = 0;
						$get_user_primary->save();
						}
					}
					
					
					if($model->is_billing == 1){
						//check if any user has is  billing
						$get_user_billing = ClientUser::find ()->where ( [ 'client_id' => $client_id,'is_billing' =>1] )->One ();
						
						if(!empty($get_user_billing)){
						$get_user_billing->is_billing = 0;
						$get_user_billing->save();
						}
					}
					
					
					if ($model->save ()) {
						
						if ($email_changed) {
							
							$to = $model_users->username;
							$from = 'sky@analytics.com';
							$name = $model->first_name . ' ' . $model->last_name;
							// creating link
							$link = \Yii::$app->urlManager->createAbsoluteUrl ( '/verify-mail' ) . '?authkey=' . $model_users->authkey . '&email=' . $model_users->username;
							$company_email = 'sky@analytics.com';
							$company_phone = '89998989898';
							$company_logo = \Yii::$app->urlManager->createAbsoluteUrl ( '/images/logo/benefits.png' );
							
							// send re-verifcation mail
							$mail_result = \Yii::$app->customMail->verifymail ( $to, $from, $name, $link, $company_email, $company_phone, $company_logo );
							
							$success = 'Profile updated successfully, a verification mail has been sent please verify it.';
						}
						// form inputs are valid, do something here
						$transaction->commit ();
						$success = 'update-success';
						Yii::$app->response->format = trim ( Response::FORMAT_JSON );
						return $success;
					} else {
						$error = \yii\widgets\ActiveForm::validate ( $model );
						Yii::$app->response->format = trim ( Response::FORMAT_JSON );
						return $error;
					}
				} else {
					$error = \yii\widgets\ActiveForm::validate ( $model_users );
					Yii::$app->response->format = trim ( Response::FORMAT_JSON );
					return $error;
				}
			} catch ( \Exception $e ) {
				$msg = $e->getMessage ();
				Yii::$app->response->format = trim ( Response::FORMAT_JSON );
				return $msg;
			}
		}
	}
	
	/**
	 * *********** action to get the package details based on selected module and client number ***********
	 */
	public function actionGetselectedmodulepackagedetails() {
		if (isset ( $_POST ['package_type'] ) && isset ( $_POST ['module'] ) && isset ( $_POST ['clientnum'] )) {
			$package_type = $_POST ['package_type'];
			$module = $_POST ['module'];
			$clientnum = $_POST ['clientnum'];
			
			$package_amount = SystemPricing::find ()->where ( [ 
					'client_number' => $clientnum 
			] )->andWhere ( [ 
					'module_id' => $module 
			] )->andWhere ( [ 
					'package_type' => $package_type 
			] )->andWhere ( [ 
					'status' => 1 
			] )->asArray ()->All ();
			
			print_r ( json_encode ( $package_amount ) );
		}
	}
	
	
	
	public function actionFirmdetails($id) {
		
		// declaring variables
		$firm_id = '';
		$location_name = '';
		$locations_names = '';
		$encrypt_firm_id = '';
		$active_modules_arr = array ();
		$firm_locations = array ();
		$newly_added_locations = array ();
		
		// declaring new model
		$searchModel = new FirmUsersSearch ();
		$firmlocationsModel = new FirmLocations ();
		
		// getting available modules from lookup options
		$modules = LookupOptions::find ()->where ( [ 
				'option_type' => 2 
		] )->andWhere ( [ 
				'option_status' => 1 
		] )->All ();
		
		// list of US states a sarray
		$stateList = States::find ()->all ();
		$states = ArrayHelper::map ( $stateList, function ($model, $defaultValue) {
			return EncryptDecryptComponent::encrytedUser ( $model ['state_id'] );
		}, function ($model, $defaultValue) {
			return $model ['state_name'];
		} );
		
		$encrypt_firm_id = $id;
		// decrypting the firm id
		$firm_id = EncryptDecryptComponent::decryptUser ( $encrypt_firm_id );
		
		$searchModel->firm_id = $firm_id;
		// data provider for firm users grid
		$dataProvider = $searchModel->search ( \Yii::$app->request->queryParams );
		
		// getting firm details based on firm_id from url
		$model = Firms::findOne ( $firm_id );
		
		// getting locations for this firm
		$firm_locations = FirmLocations::find ()->where ( [ 
				'firm_id' => $firm_id 
		] )->All ();
		
		// assigning all location names to one variable with comma seperated
		foreach ( $firm_locations as $firm_location ) {
			$locations_names .= $firm_location->location_name . ',';
		}
		
		// removing last comma
		$location_name = rtrim ( $locations_names, ',' );
		
		// getting available modules for this firm
		$active_modules = FirmModules::find ()->select ( 'module_id' )->where ( [ 
				'firm_id' => $firm_id 
		] )->andWhere ( [ 
				'is_active' => 1 
		] )->All ();
		
		foreach ( $active_modules as $active_module ) {
			$active_modules_arr [] = $active_module->module_id;
		}
		
		if (Yii::$app->request->isAjax) {
			return $this->renderAjax ( '_firmdetails', [ 
					'firm_id' => $encrypt_firm_id,
					'searchModel' => $searchModel,
					'dataProvider' => $dataProvider,
					'states' => $states,
					'model' => $model,
					'location_name' => $location_name,
					'modules' => $modules,
					'active_modules_arr' => $active_modules_arr,
					'firm_locations' => $firm_locations,
					'encrypt_firm_id' => $encrypt_firm_id 
			] );
		} else {
			return $this->render ( '_firmdetails', [ 
					'firm_id' => $encrypt_firm_id,
					'searchModel' => $searchModel,
					'dataProvider' => $dataProvider,
					'states' => $states,
					'model' => $model,
					'location_name' => $location_name,
					'modules' => $modules,
					'active_modules_arr' => $active_modules_arr,
					'firm_locations' => $firm_locations,
					'encrypt_firm_id' => $encrypt_firm_id 
			] );
		}
	}
	
	/**
	 * *************Update firm details****************
	 */
	public function actionUpdatefirmdetails() {
		if (! empty ( Yii::$app->request->post ( 'encrypt_firm_id' ) )) {
			
			$id = Yii::$app->request->post ( 'encrypt_firm_id' );
			// declaring variables
			$firm_id = '';
			$location_name = '';
			$locations_names = '';
			$encrypt_firm_id = '';
			$active_modules_arr = array ();
			$firm_locations = array ();
			$newly_added_locations = array ();
			
			// declaring new model
			$searchModel = new FirmUsersSearch ();
			$firmlocationsModel = new FirmLocations ();
			
			// getting available modules from lookup options
			$modules = LookupOptions::find ()->where ( [ 
					'option_type' => 2 
			] )->andWhere ( [ 
					'option_status' => 1 
			] )->All ();
			
			// list of US states a sarray
			$stateList = States::find ()->all ();
			$states = ArrayHelper::map ( $stateList, function ($model, $defaultValue) {
				return EncryptDecryptComponent::encrytedUser ( $model ['state_id'] );
			}, function ($model, $defaultValue) {
				return $model ['state_name'];
			} );
			
			$encrypt_firm_id = $id;
			// decrypting the firm id
			$firm_id = EncryptDecryptComponent::decryptUser ( $encrypt_firm_id );
			
			// getting firm details based on firm_id from url
			$model = Firms::findOne ( $firm_id );
			
			if (! empty ( $model )) {
				
				$searchModel->firm_id = $firm_id;
				// data provider for firm users grid
				$dataProvider = $searchModel->search ( \Yii::$app->request->queryParams );
				
				// getting locations for this firm
				$firm_locations = FirmLocations::find ()->where ( [ 
						'firm_id' => $firm_id 
				] )->All ();
				
				// assigning all location names to one variable with comma seperated
				foreach ( $firm_locations as $firm_location ) {
					$locations_names .= $firm_location->location_name . ',';
				}
				
				// removing last comma
				$location_name = rtrim ( $locations_names, ',' );
				
				// getting available modules for this firm
				$active_modules = FirmModules::find ()->select ( 'module_id' )->where ( [ 
						'firm_id' => $firm_id 
				] )->andWhere ( [ 
						'is_active' => 1 
				] )->All ();
				
				foreach ( $active_modules as $active_module ) {
					$active_modules_arr [] = $active_module->module_id;
				}
				
				// if posting data (in add firm or update firm)
				if ($model->load ( Yii::$app->request->post () )) {
					
					/* begining the db transaction */
					$transaction = \Yii::$app->db->beginTransaction ();
					try {
						// saving firm logo
						if (isset ( $_FILES ['Firms'] ) && $_FILES ['Firms'] != '' && $_FILES ['Firms'] ['error'] ['firm_logo'] == 0) {
							
							// replacing space with underscore
							$file_name = str_replace ( ' ', '_', $_FILES ['Firms'] ['name'] ['firm_logo'] );
							
							// assigning timestamp to logo name
							$rnd = time ();
							$file_name_primary = "logo_{$rnd}_{$file_name}";
							
							$document = $_FILES ['Firms'];
							$info = pathinfo ( $_FILES ['Firms'] ['name'] ['firm_logo'] );
							$ext = $info ['extension'];
							
							// creating folder for images
							if (! is_dir ( getcwd () . '/images/firm-logos' )) {
								
								$old = umask ( 0 );
								mkdir ( getcwd () . '/images/firm-logos', 0777, true );
								umask ( $old );
							}
							
							// save uploaded image inthe specific folder
							move_uploaded_file ( $_FILES ['Firms'] ["tmp_name"] ['firm_logo'], getcwd () . '/images/firm-logos/' . $file_name_primary );
							$model->firm_logo = $file_name_primary;
						}
						
						$model->created_by = \Yii::$app->user->identity->user_id;
						$model->created_date = date ( 'Y-m-d H:i:s' );
						$model->modified_by = \Yii::$app->user->identity->user_id;
						$model->modified_date = date ( 'Y-m-d H:i:s' );
						if (! empty ( $_POST ['firm_locations'] )) {
							$model->firm_locations = true;
						}
						// save data in the table
						if ($model->save ()) {
							
							// Saving frim locations if exists
							if (! empty ( $_POST ['firm_locations'] )) {
								
								$locations_arr = $_POST ['firm_locations'];
								$existing_location_ids = array ();
								// getting already existing location IDs
								foreach ( $firm_locations as $location_ids ) {
									$existing_location_ids [] = $location_ids->location_id;
								}
								
								// checking new location ids are present in old location array or not
								foreach ( $locations_arr as $ind_location ) {
									//
									if (! (in_array ( $ind_location, $existing_location_ids ))) {
										if (gettype ( $ind_location ) != 'integer') {
											$newly_added_locations [] = $ind_location;
										}
									}
								}
								
								// now checking old locations ids present in newly added locations
								foreach ( $existing_location_ids as $existing_location_id ) {
									//
									if (! (in_array ( $existing_location_id, $locations_arr ))) {
										// now checking this deleted location is already assigned to any firm user
										$existing_firm_user_location = FirmUserLocations::find ()->where ( [ 
												'location_id' => $existing_location_id 
										] )->One ();
										// if already location exists
										if (! empty ( $existing_firm_user_location )) {
											// get the location name based on location id
											$existing_location_name = FirmLocations::find ()->where ( [ 
													'location_id' => $existing_location_id 
											] )->One ();
											throw new \Exception ( "Location '" . $existing_location_name->location_name . "' is already assigned to some users" );
										} else { // deleting those locations from the firm location table
											$remove_existing_location = FirmLocations::find ()->where ( [ 
													'location_id' => $existing_location_id 
											] )->One ();
											$remove_existing_location->delete ();
										}
									}
								}
								
								// now adding extra added locations in the db
								foreach ( $newly_added_locations as $location ) {
									$firmlocationsModel->firm_id = $model->firm_id;
									$firmlocationsModel->location_name = $location;
									$firmlocationsModel->created_by = \Yii::$app->user->identity->user_id;
									$firmlocationsModel->created_date = date ( 'Y-m-d H:i:s' );
									$firmlocationsModel->isNewRecord = True;
									$firmlocationsModel->location_id = NULL;
									$firmlocationsModel->save ();
								}
							}
							
							if (! empty ( $_POST ['activate_module'] )) {
								$result = $this->updatefirmmodules ( $model->firm_id, $_POST ['activate_module'] );
							} else {
								throw new \Exception ( 'Please select module' );
							}
							
							/* commiting the values to the db */
							$transaction->commit ();
							// set flash message to user
							$success = 'success';
							Yii::$app->response->format = trim ( Response::FORMAT_JSON );
							return $success;
						} else {
							$error = \yii\widgets\ActiveForm::validate ( $model );
							Yii::$app->response->format = trim ( Response::FORMAT_JSON );
							return $error;
						}
					} catch ( \Exception $e ) {
						
						$msg = $e->getMessage ();
						$transaction->rollback ();
						
						Yii::$app->response->format = trim ( Response::FORMAT_JSON );
						return $msg;
					}
				} 				// when no post data happened (first time opening page)
				else {
					$error = 'error-no-posted';
					Yii::$app->response->format = trim ( Response::FORMAT_JSON );
					return $error;
				}
			} else {
				$error = 'error-no-firm';
				Yii::$app->response->format = trim ( Response::FORMAT_JSON );
				return $error;
			}
		} else {
			$error = 'error-no-firm-id';
			Yii::$app->response->format = trim ( Response::FORMAT_JSON );
			return $error;
		}
	}
	
	/**
	 * ******Function to get client details**********
	 */
	public function actionClientdetails($id) {
		$client_id = '';
		$encrypt_client_id = '';
		$active_modules = '';
		$client_active_modules = '';
		
		$model_client_users = new ClientUser ();
		$searchModel = new ClientUserSearch ();
		$model_company_subscription = new CompanySubscription ();
		
		/**
		 * ******************
		 */
		/**
		 * ******************
		 */
		$firmusersList = array ();
		$modules = array ();
		$client_count = '';
		$active_modules_arr = array ();
		$firmList = array ();
		// if admin logged in
		if (Yii::$app->user->identity->usertype == 1) {
			$firms = Firms::find ()->where ( [ 
					'is_active' => 1 
			] )->all ();
		} 		// if firm user logged in
		else if (Yii::$app->user->identity->usertype == 2) {
			// get the firm of this firm user
			$firm_user_firm_id = FirmUsers::find ()->where ( [ 
					'user_id' => Yii::$app->user->identity->user_id 
			] )->One ();
			// now getting the related firm
			$firms = Firms::find ()->where ( [ 
					'firm_id' => $firm_user_firm_id->firm_id 
			] )->andWhere ( [ 
					'is_active' => 1 
			] )->all ();
		}
		if (! empty ( $firms )) {
			$firmList = ArrayHelper::map ( $firms, function ($model, $defaultValue) {
				return EncryptDecryptComponent::encrytedUser ( $model ['firm_id'] );
			}, function ($model, $defaultValue) {
				return $model ['firm_name'];
			} );
		}
		
		$states = States::find ()->all ();
		$stateList = ArrayHelper::map ( $states, function ($model, $defaultValue) {
			return EncryptDecryptComponent::encrytedUser ( $model ['state_id'] );
		}, function ($model, $defaultValue) {
			return $model ['state_name'];
		} );
		
		$industry = LookupOptions::find ()->where ( [ 
				'option_type' => 3 
		] )->andWhere ( [ 
				'option_status' => 1 
		] )->all ();
		$industryList = ArrayHelper::map ( $industry, function ($model, $defaultValue) {
			return EncryptDecryptComponent::encrytedUser ( $model ['option_id'] );
		}, function ($model, $defaultValue) {
			return $model ['option_value'];
		} );
		
		$employersize = LookupOptions::find ()->where ( [ 
				'option_type' => 4 
		] )->andWhere ( [ 
				'option_status' => 1 
		] )->all ();
		$employersizeList = ArrayHelper::map ( $employersize, function ($model, $defaultValue) {
			return EncryptDecryptComponent::encrytedUser ( $model ['option_id'] );
		}, function ($model, $defaultValue) {
			return $model ['option_value'];
		} );
		
		$available_packages = LookupOptions::find ()->where ( [ 
				'option_type' => 5 
		] )->andWhere ( [ 
				'option_status' => 1 
		] )->all ();
		
		$encrypt_client_id = $id;
		// decrypting the firm id
		$client_id = EncryptDecryptComponent::decryptUser ( $encrypt_client_id );
		// getting firm details based on firm_id from url
		$model = Clients::findOne ( $client_id );
		
		$searchModel->client_id = $client_id;
		// data provider for firm users grid
		$dataProvider = $searchModel->search ( \Yii::$app->request->queryParams );
		
		// encrypting all the decrypted data
		$model->add_firm_id = EncryptDecryptComponent::encrytedUser ( $model->firm_id );
		$model->add_state = EncryptDecryptComponent::encrytedUser ( $model->state );
		$model->add_primary_consultant = EncryptDecryptComponent::encrytedUser ( $model->primary_consultant );
		$model->add_primary_account_manager = EncryptDecryptComponent::encrytedUser ( $model->primary_account_manager );
		$model->add_primary_service_rep = EncryptDecryptComponent::encrytedUser ( $model->primary_service_rep );
		$model->add_employer_size_category = EncryptDecryptComponent::encrytedUser ( $model->employer_size_category );
		$model->add_industry_code = EncryptDecryptComponent::encrytedUser ( $model->industry_code );
		
		$firmusers = FirmUsers::find ()->where ( [ 
				'firm_id' => $model->firm_id 
		] )->andWhere ( [ 
				'is_active' => 1 
		] )->asArray ()->All ();
		
		$firmusersList = ArrayHelper::map ( $firmusers, function ($model, $defaultValue) {
			return EncryptDecryptComponent::encrytedUser ( $model ['firm_user_id'] );
		}, function ($model, $defaultValue) {
			return $model ['first_name'] . ' ' . $model ['last_name'];
		} );
		
		// ///////// now grtting list of modules available for this client
		$modules = FirmModules::find ()->joinwith ( 'module' )->select ( 'option_id,firm_id,module_id,option_value' )->where ( [ 
				'firm_id' => $model->firm_id 
		] )->andWhere ( [ 
				'is_active' => 1 
		] )->asArray ()->All ();
		
		// ///// now getting number of clients that the selected firm has
		$client_count = Clients::find ()->where ( [ 
				'firm_id' => $model->firm_id 
		] )->Count ();
		
		// getting available modules for this client
		$model_company_subscription = $client_active_modules = CompanySubscription::find ()->where ( [ 
				'client_id' => $client_id 
		] )->andWhere ( [ 
				'is_active' => 1 
		] )->One ();
		
		// foreach ( $client_active_modules as $client_active_module ) {
		// $active_modules_arr [] = $client_active_module->module_id;
		$active_modules = $client_active_modules->module_id;
		// }
		
		if (Yii::$app->request->isAjax) {
			return $this->renderAjax ( '_clientdetails', [ 
					'client_id' => $client_id,
					'searchModel' => $searchModel,
					'dataProvider' => $dataProvider,
					'firmList' => $firmList,
					'stateList' => $stateList,
					'model' => $model,
					'industryList' => $industryList,
					'employersizeList' => $employersizeList,
					'firmusersList' => $firmusersList,
					'model_client_users' => $model_client_users,
					'encrypt_client_id' => $encrypt_client_id,
					'available_packages' => $available_packages,
					'modules' => $modules,
					'client_count' => $client_count,
					'active_modules_arr' => $active_modules_arr,
					'client_count' => $client_count,
					'active_modules' => $active_modules,
					'client_active_modules' => $client_active_modules 
			] );
		} else {
			return $this->render ( '_clientdetails', [ 
					'client_id' => $client_id,
					'searchModel' => $searchModel,
					'dataProvider' => $dataProvider,
					'firmList' => $firmList,
					'stateList' => $stateList,
					'model' => $model,
					'industryList' => $industryList,
					'employersizeList' => $employersizeList,
					'firmusersList' => $firmusersList,
					'model_client_users' => $model_client_users,
					'encrypt_client_id' => $encrypt_client_id,
					'available_packages' => $available_packages,
					'modules' => $modules,
					'client_count' => $client_count,
					'active_modules_arr' => $active_modules_arr,
					'client_count' => $client_count,
					'active_modules' => $active_modules,
					'client_active_modules' => $client_active_modules 
			] );
		}
	}
	
	/**
	 * *************Update client details****************
	 */
	public function actionUpdateclientdetails() {
		if (! empty ( Yii::$app->request->post ( 'encrypt_client_id' ) )) {
			
			$id = Yii::$app->request->post ( 'encrypt_client_id' );
			$client_id = '';
			$encrypt_client_id = '';
			$active_modules = '';
			$client_active_modules = '';
			
			$model_client_users = new ClientUser ();
			$searchModel = new ClientUserSearch ();
			$model_company_subscription = new CompanySubscription ();
			
			/**
			 * ******************
			 */
			/**
			 * ******************
			 */
			$firmusersList = array ();
			$modules = array ();
			$client_count = '';
			$active_modules_arr = array ();
			$firmList = array ();
			// if admin logged in
			if (Yii::$app->user->identity->usertype == 1) {
				$firms = Firms::find ()->where ( [ 
						'is_active' => 1 
				] )->all ();
			} 			// if firm user logged in
			else if (Yii::$app->user->identity->usertype == 2) {
				// get the firm of this firm user
				$firm_user_firm_id = FirmUsers::find ()->where ( [ 
						'user_id' => Yii::$app->user->identity->user_id 
				] )->One ();
				// now getting the related firm
				$firms = Firms::find ()->where ( [ 
						'firm_id' => $firm_user_firm_id->firm_id 
				] )->andWhere ( [ 
						'is_active' => 1 
				] )->all ();
			}
			if (! empty ( $firms )) {
				$firmList = ArrayHelper::map ( $firms, function ($model, $defaultValue) {
					return EncryptDecryptComponent::encrytedUser ( $model ['firm_id'] );
				}, function ($model, $defaultValue) {
					return $model ['firm_name'];
				} );
			}
			
			$states = States::find ()->all ();
			$stateList = ArrayHelper::map ( $states, function ($model, $defaultValue) {
				return EncryptDecryptComponent::encrytedUser ( $model ['state_id'] );
			}, function ($model, $defaultValue) {
				return $model ['state_name'];
			} );
			
			$industry = LookupOptions::find ()->where ( [ 
					'option_type' => 3 
			] )->andWhere ( [ 
					'option_status' => 1 
			] )->all ();
			$industryList = ArrayHelper::map ( $industry, function ($model, $defaultValue) {
				return EncryptDecryptComponent::encrytedUser ( $model ['option_id'] );
			}, function ($model, $defaultValue) {
				return $model ['option_value'];
			} );
			
			$employersize = LookupOptions::find ()->where ( [ 
					'option_type' => 4 
			] )->andWhere ( [ 
					'option_status' => 1 
			] )->all ();
			$employersizeList = ArrayHelper::map ( $employersize, function ($model, $defaultValue) {
				return EncryptDecryptComponent::encrytedUser ( $model ['option_id'] );
			}, function ($model, $defaultValue) {
				return $model ['option_value'];
			} );
			
			$available_packages = LookupOptions::find ()->where ( [ 
					'option_type' => 5 
			] )->andWhere ( [ 
					'option_status' => 1 
			] )->all ();
			
			$encrypt_client_id = $id;
			// decrypting the firm id
			$client_id = EncryptDecryptComponent::decryptUser ( $encrypt_client_id );
			// getting firm details based on firm_id from url
			$model = Clients::findOne ( $client_id );
			
			if (! empty ( $model )) {
				
				$searchModel->client_id = $client_id;
				// data provider for firm users grid
				$dataProvider = $searchModel->search ( \Yii::$app->request->queryParams );
				
				// encrypting all the decrypted data
				$model->add_firm_id = EncryptDecryptComponent::encrytedUser ( $model->firm_id );
				$model->add_state = EncryptDecryptComponent::encrytedUser ( $model->state );
				$model->add_primary_consultant = EncryptDecryptComponent::encrytedUser ( $model->primary_consultant );
				$model->add_primary_account_manager = EncryptDecryptComponent::encrytedUser ( $model->primary_account_manager );
				$model->add_primary_service_rep = EncryptDecryptComponent::encrytedUser ( $model->primary_service_rep );
				$model->add_employer_size_category = EncryptDecryptComponent::encrytedUser ( $model->employer_size_category );
				$model->add_industry_code = EncryptDecryptComponent::encrytedUser ( $model->industry_code );
				
				$firmusers = FirmUsers::find ()->where ( [ 
						'firm_id' => $model->firm_id 
				] )->andWhere ( [ 
						'is_active' => 1 
				] )->asArray ()->All ();
				
				$firmusersList = ArrayHelper::map ( $firmusers, function ($model, $defaultValue) {
					return EncryptDecryptComponent::encrytedUser ( $model ['firm_user_id'] );
				}, function ($model, $defaultValue) {
					return $model ['first_name'] . ' ' . $model ['last_name'];
				} );
				
				// ///////// now grtting list of modules available for this client
				$modules = FirmModules::find ()->joinwith ( 'module' )->select ( 'option_id,firm_id,module_id,option_value' )->where ( [ 
						'firm_id' => $model->firm_id 
				] )->andWhere ( [ 
						'is_active' => 1 
				] )->asArray ()->All ();
				
				// ///// now getting number of clients that the selected firm has
				$client_count = Clients::find ()->where ( [ 
						'firm_id' => $model->firm_id 
				] )->Count ();
				
				// getting available modules for this client
				$model_company_subscription = $client_active_modules = CompanySubscription::find ()->where ( [ 
						'client_id' => $client_id 
				] )->andWhere ( [ 
						'is_active' => 1 
				] )->One ();
				
				// foreach ( $client_active_modules as $client_active_module ) {
				// $active_modules_arr [] = $client_active_module->module_id;
				$active_modules = $client_active_modules->module_id;
				// }
				/* begining the db transaction */
				$transaction = \Yii::$app->db->beginTransaction ();
				try {
					
					// if posting data (in add firm or update firm)
					if ($model->load ( Yii::$app->request->post () )) {
						
						// decrypting all the encrypted posted data
						$decrypted_firm_id = EncryptDecryptComponent::decryptUser ( $model->add_firm_id );
						$decrypted_state = EncryptDecryptComponent::decryptUser ( $model->add_state );
						$decrypted_primary_consultant = EncryptDecryptComponent::decryptUser ( $model->add_primary_consultant );
						$decrypted_primary_account_manager = EncryptDecryptComponent::decryptUser ( $model->add_primary_account_manager );
						$decrypted_primary_service_rep = EncryptDecryptComponent::decryptUser ( $model->add_primary_service_rep );
						$decrypted_employer_size_category = EncryptDecryptComponent::decryptUser ( $model->add_employer_size_category );
						$decrypted_industry_code = EncryptDecryptComponent::decryptUser ( $model->add_industry_code );
						
						// saving firm logo
						if (isset ( $_FILES ['Clients'] ) && $_FILES ['Clients'] != '' && $_FILES ['Clients'] ['error'] ['company_logo'] == 0) {
							
							// replacing space with underscore
							$file_name = str_replace ( ' ', '_', $_FILES ['Clients'] ['name'] ['company_logo'] );
							
							// assigning timestamp to logo name
							$rnd = time ();
							$file_name_primary = "logo_{$rnd}_{$file_name}";
							
							$document = $_FILES ['Clients'];
							$info = pathinfo ( $_FILES ['Clients'] ['name'] ['company_logo'] );
							$ext = $info ['extension'];
							
							// creating folder for images
							if (! is_dir ( getcwd () . '/images/client-logos' )) {
								
								$old = umask ( 0 );
								mkdir ( getcwd () . '/images/client-logos', 0777, true );
								umask ( $old );
							}
							
							// save uploaded image inthe specific folder
							move_uploaded_file ( $_FILES ['Clients'] ["tmp_name"] ['company_logo'], getcwd () . '/images/client-logos/' . $file_name_primary );
							$model->company_logo = $file_name_primary;
						}
						
						// assigning posted values to model
						$model->firm_id = $decrypted_firm_id;
						$model->state = $decrypted_state;
						$model->primary_consultant = $decrypted_primary_consultant;
						$model->primary_account_manager = $decrypted_primary_account_manager;
						$model->primary_service_rep = $decrypted_primary_service_rep;
						$model->employer_size_category = $decrypted_employer_size_category;
						$model->industry_code = $decrypted_industry_code;
						$model->created_by = \Yii::$app->user->identity->user_id;
						$model->created_date = date ( 'Y-m-d H:i:s' );
						$model->modified_by = \Yii::$app->user->identity->user_id;
						$model->modified_date = date ( 'Y-m-d H:i:s' );
						
						// saving model values
						if ($model->save ()) {
							
							$client_id = $model->client_id;
							
							// save in packages table
							if (! empty ( Yii::$app->request->post ( 'activate_module' ) )) {
								
								$module_id = Yii::$app->request->post ( 'activate_module' );
								$package_id = Yii::$app->request->post ( 'client_activate_module' );
								
								$pricing_details = SystemPricing::find ()->where ( [ 
										'module_id' => $module_id,
										'package_type' => $package_id 
								] )->One ();
								
								// chekc if subscription is for new client
								if ($model_company_subscription->isNewRecord) {
									
									$model_company_subscription->client_id = $client_id;
									$model_company_subscription->module_id = $module_id;
									$model_company_subscription->package_type = $package_id;
									$model_company_subscription->amount = $pricing_details->amount;
									$model_company_subscription->is_active = 1;
									$model_company_subscription->created_date = date ( 'Y-m-d H:i:s' );
									$model_company_subscription->created_by = \Yii::$app->user->identity->user_id;
								} else {
									// for old client
									// check if there is any change in subscription
									if ($client_active_modules->module_id != $module_id || $client_active_modules->package_type != $package_id) {
										// Inactive last subscription and add new subscription
										$client_active_modules->is_active = 0;
										$client_active_modules->modified_date = date ( 'Y-m-d H:i:s' );
										$client_active_modules->modified_by = \Yii::$app->user->identity->user_id;
										$client_active_modules->save ();
										
										// create new subscription
										$model_company_subscription = new CompanySubscription ();
										$model_company_subscription->client_id = $client_id;
										$model_company_subscription->module_id = $module_id;
										$model_company_subscription->package_type = $package_id;
										$model_company_subscription->amount = $pricing_details->amount;
										$model_company_subscription->is_active = 1;
										$model_company_subscription->created_date = date ( 'Y-m-d H:i:s' );
										$model_company_subscription->created_by = \Yii::$app->user->identity->user_id;
									}
								}
								
								if ($model_company_subscription->save ()) {
									
									$transaction->commit ();
									
									// set flash message to user
									$success = 'success';
									Yii::$app->response->format = trim ( Response::FORMAT_JSON );
									return $success;
								} else {
									$error = \yii\widgets\ActiveForm::validate ( $model_company_subscription );
									Yii::$app->response->format = trim ( Response::FORMAT_JSON );
									return $error;
								}
							} else {
								throw new \Exception ( 'Please select client subscription.' );
							}
						} else {
							$error = \yii\widgets\ActiveForm::validate ( $model );
							Yii::$app->response->format = trim ( Response::FORMAT_JSON );
							return $error;
						}
					}
				} catch ( \Exception $e ) {
					$msg = $e->getMessage ();
					$transaction->rollBack ();
					
					Yii::$app->response->format = trim ( Response::FORMAT_JSON );
					return $msg;
				}
			} else {
				$error = 'error-no-client';
				Yii::$app->response->format = trim ( Response::FORMAT_JSON );
				return $error;
			}
		} else {
			$error = 'error-no-client-id';
			Yii::$app->response->format = trim ( Response::FORMAT_JSON );
			return $error;
		}
	}
	
	
	
	
}
