<?php

namespace app\controllers;

use yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\User;
use app\components\AccessRuleComponent;
use yii\filters\VerbFilter;
use app\models\ProfileForm;
use app\models\AdminUsers;
use app\models\UploadForm;
use yii\web\UploadedFile;
use app\models\FirmUsers;
use app\models\ClientUser;
use app\models\RightsMaster;

class ProfileController extends BaseController {
	public $layout = 'main-layout';
	public function behaviors() {
		return [ 
				'access' => [ 
						'class' => AccessControl::className (),
						'ruleConfig' => [ 
								'class' => AccessRuleComponent::className () 
						],
						'only' => [ 
								'index' 
						],
						'rules' => [ 
								[ 
										'actions' => [ 
												'index' 
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
	public function actionIndex() {
		
		/**
		 * **Declaring models***
		 */
		$profileModel = new ProfileForm ();
		$userModel = new User ();
		$picmodel = new UploadForm ();
		
		/**
		 * ****Declaring variables*****
		 */
		$userdetailModel = '';
		$email_id = '';
		$rightslist = '';
		$currentuserrights= array();
		$email_changed = false;
		$user_id = \Yii::$app->user->identity->user_id;
		$usertype = \Yii::$app->user->identity->usertype;
		
		/**
		 * ****Get logged user data*****
		 */
		$user_parent = $userModel->findIdentity ( $user_id );
		$email_id = $user_parent->username;
		
		switch ($usertype) {
			/**
			 * ****if admin*******
			 */
			case '1' :
				$userdetailModel = AdminUsers::find ()->where ( [ 
						'user_id' => $user_id 
				] )->One ();
				$profile_pic = $userdetailModel->profile_pic;
				
				$rightslist = RightsMaster::find ()->where ( [
						'user_type' => 1
						] )->all ();
				
				$sql="SELECT rm.right_id FROM tbl_sir_admin_user_rights aur Left Join tbl_sir_rights_master rm on aur.right_id=rm.right_id WHERE rm.user_type=1 and aur.admin_id=$userdetailModel->admin_id";
				$connection = \yii::$app->db;
				$model = $connection->createCommand($sql);
				//	print_r($model); die();
				$userrights= $model->queryAll();
				
				foreach ($userrights as $userright){
					array_push($currentuserrights, $userright['right_id']);
				}
				
				break;
			/**
			 * ****if firm*******
			 */
			case '2' :
				$userdetailModel = FirmUsers::find ()->where ( [ 
						'user_id' => $user_id 
				] )->One ();
				$profile_pic = $userdetailModel->profile_pic;
				
				$rightslist = RightsMaster::find ()->where ( [
						'user_type' => 2
						] )->all ();
				
				$sql="SELECT rm.right_id FROM tbl_sir_firm_user_rights aur Left Join tbl_sir_rights_master rm on aur.right_id=rm.right_id WHERE rm.user_type=1 and aur.firm_user_id=$userdetailModel->firm_user_id";
				$connection = \yii::$app->db;
				$model = $connection->createCommand($sql);
				//	print_r($model); die();
				$userrights= $model->queryAll();
				
				foreach ($userrights as $userright){
					array_push($currentuserrights, $userright['right_id']);
				}
				
				
				
				break;
			/**
			 * ****if client*******
			 */
			case '3' :
				$userdetailModel = ClientUser::find ()->where ( [ 
						'user_id' => $user_id 
				] )->One ();
				$profile_pic = $userdetailModel->profile_pic;
				break;
		}
		
		if ($userdetailModel->load ( Yii::$app->request->post () ) && $userdetailModel->validate () ) {
			
			
			$transaction = \Yii::$app->db->beginTransaction ();
			try {
				
				/**
				 * ******Check if old email_id is different to new one***********
				 */
				if ($user_parent->username != $email_id) {
					$user_parent->is_verified = 0;
					$user_parent->modified_by = \Yii::$app->user->identity->user_id;
					
					$email_changed = true;
				}
				
				/**
				 * **Saving user model******
				 */
				if ($user_parent->save ()) {
					
					/**
					 * ******Saving pic************
					 */
					$picmodel->file = UploadedFile::getInstance ( $userdetailModel, 'profile_pic' );
					
					
					
					if (! empty ( $picmodel->file ) && $picmodel->validate ()) {
						
						$pic_name = time () . '_' . $user_id . '.' . $picmodel->file->extension;
						
						if($usertype == 1){
						// is_dir - tells whether the filename is a directory
						if (! is_dir ( 'images/admin_user' )) {
							// mkdir - tells that need to create a directory
							mkdir ( 'images/admin_user' );
						}
						
							$picmodel->file->saveAs ( 'images/admin_user/' . $pic_name );
						
						}
						else if($usertype == 2){
						// is_dir - tells whether the filename is a directory
						if (! is_dir ( 'images/firm_user' )) {
							// mkdir - tells that need to create a directory
							mkdir ( 'images/firm_user' );
						}
						
							$picmodel->file->saveAs ( 'images/firm_user/' . $pic_name );
						}
						else if($usertype == 3){
						// is_dir - tells whether the filename is a directory
						if (! is_dir ( 'images/client_user' )) {
							// mkdir - tells that need to create a directory
							mkdir ( 'images/client_user' );
						}
						
							$picmodel->file->saveAs ( 'images/client_user/' . $pic_name );
						
						}
						
						$userdetailModel->profile_pic = $pic_name;
					}else 
					{
						$userdetailModel->profile_pic = $profile_pic;
					}
					
					/**
					 * **Saving user details model******
					 */
					if ($userdetailModel->save ()) {
						
						$transaction->commit ();
						/*if ($email_changed) {
							
							$to = $user_parent->username;
							$from = 'sky@analytics.com';
							$name = $userdetailModel->first_name.' '.$userdetailModel->last_name;
							// creating link
							$link = \Yii::$app->urlManager->createAbsoluteUrl ( '/verify-mail' ) . '?authkey=' . $user_parent->authkey . '&email=' . $user_parent->username;
							$company_email = 'sky@analytics.com';
							$company_phone = '89998989898';
							$company_logo = \Yii::$app->urlManager->createAbsoluteUrl ( '/images/logo/benefits.png' );
							
							// send re-verifcation mail
							$mail_result = \Yii::$app->customMail->verifymail ( $to, $from, $name, $link, $company_email, $company_phone, $company_logo );
							\Yii::$app->session->setFlash ( 'success', 'Profile updated successfully, a verification mail has been sent please verify it.' );
							
							
							return $this->redirect ( array ( // redirecting to login page
									'/site/logout' 
							) );
						} else {*/
							
							\Yii::$app->session->setFlash ( 'success', 'Profile updated successfully.' );
						//}
						
						if($usertype == 1){
							return $this->redirect ( array ( // redirecting to dashboard
										\Yii::$app->params ['admin_url'] 
								) );
						}
						else if($usertype == 2){
							
							return $this->redirect ( array ( // redirecting to dashboard
										\Yii::$app->params ['firm_url'] 
								) );
						}
						else if($usertype == 3){
							
							return $this->redirect ( array ( // redirecting to dashboard
										\Yii::$app->params ['client_url'] 
								) );
						}
					}
				}
			} catch ( \Exception $e ) {
				
				$transaction->rollBack ();
				$msg = $e->getMessage ();
				\Yii::$app->session->setFlash ( 'error', $msg );
			}
		}
		
		return $this->render ( 'index', [ 
				'user_parent' => $user_parent,
				'userdetailModel' => $userdetailModel,
				'usertype'=>$usertype,
				'rightslist'=>$rightslist,
				'currentuserrights'=>$currentuserrights
		] );
	}
}
?>

