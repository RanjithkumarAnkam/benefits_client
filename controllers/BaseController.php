<?php

namespace app\controllers;

use yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\User;
use app\components\AccessRuleComponent;
use yii\filters\VerbFilter;
use app\models\AdminUserRights;
use app\models\AdminUsers;
use app\models\FirmUsers;
use app\models\ClientUser;
use app\models\Clients;
use app\models\Firms;

class BaseController extends Controller {
	
	/**
	 * @inheritdoc
	 */

	public function init() {
		
		
		
		
		
		if(!empty(\Yii::$app->user->identity->usertype)){
		
		switch (\Yii::$app->user->identity->usertype){
			case 1:
			    Yii::$app->params['search_url'] = '/search';
				Yii::$app->params['profile_url'] = '/manageadminuser/add?admin_user_id=1';
				Yii::$app->params['dashboard_url'] = '/dashboard/admin';
				Yii::$app->params['admin_cancel_url'] = '/search';
				Yii::$app->params['firm_cancel_url'] = '/search';
				Yii::$app->params['client_cancel_url'] = '/search';
				Yii::$app->params['firm_user_cancel_url'] = '/search';
				Yii::$app->params['client_user_cancel_url'] = '/search';
				Yii::$app->params['save_changes'] = '/search';
				break; 
			case 2:
			
			    Yii::$app->params['search_url'] = '/search';
				Yii::$app->params['profile_url'] = '/user/updatefirmuser?firm_user_id=1';
				Yii::$app->params['dashboard_url'] = '/dashboard/firms';
				Yii::$app->params['firm_cancel_url'] = '/search/firm-search';
				Yii::$app->params['client_cancel_url'] = '/search/firm-search';
				Yii::$app->params['firm_user_cancel_url'] = '/search/firm-search';
				Yii::$app->params['client_user_cancel_url'] = '/search/firm-search';
				 Yii::$app->params['save_changes'] = '/search/firm-search';
				break;
			case 3:
			    Yii::$app->params['search_url'] = '/search';
				Yii::$app->params['profile_url'] = '/user/updateclientuser?client_user_id=1';
				Yii::$app->params['dashboard_url'] = '/dashboard/clients';
				Yii::$app->params['client_user_cancel_url'] = '/company/manage-company-users';
				Yii::$app->params['client_cancel_url'] = '/company/manage-company-users';
				Yii::$app->params['save_changes'] = '/company/manage-company-users';
				break;
		}
	}else
	{
		
		return $this->redirect ( array ( // redirecting to login page
							'/site/login'
					) );
	}
	
		$session = \Yii::$app->session;
		if(empty($session['logged_user_fullname'])){
			
			$currentuserrights=array('ADMIN','FIRM','CLIENT');
			$userrights=array();
			$logged_user_id = Yii::$app->user->identity->user_id;
			$user_type = Yii::$app->user->identity->usertype;
			
			
			switch ($user_type){
				case 1:
					
					$userdetailModel=AdminUsers::findOne(['user_id'=>$logged_user_id]);
					//$admin_users=AdminUserRights::findAll(['admin_id'=>$admin_id->admin_id]);
					$sql="SELECT rm.right_id FROM tbl_sir_admin_user_rights aur Left Join tbl_sir_rights_master rm on aur.right_id=rm.right_id WHERE rm.user_type=1 and aur.admin_id=$userdetailModel->admin_id";
					$connection = \yii::$app->db;
					$model = $connection->createCommand($sql);
					$userrights= $model->queryAll();
					
					$profile_pic = $userdetailModel->profile_pic;
					if (! empty ( $profile_pic )) {
						$session ['profile_pic'] = '/images/admin_user/' . $profile_pic;
					} else {
						$session ['profile_pic'] = '/images/defaultuserimg.png';
					}
					// $full_name = $userdetailModel->first_name.' '.$userdetailModel->last_name;
					$full_name = $userdetailModel->first_name;
					$session ['logged_user_fullname'] = $full_name;
					$session ['profile_logo'] = '/images/logo/benefits.png';
					
					
					break;
					
				case 2:
					$userdetailModel=FirmUsers::findOne(['user_id'=>$logged_user_id]);
					
					$sql="SELECT rm.right_id FROM tbl_sir_firm_user_rights fur Left Join tbl_sir_rights_master rm on fur.right_id=rm.right_id WHERE rm.user_type=2 and fur.firm_user_id=$userdetailModel->firm_user_id";
					$connection = \yii::$app->db;
					$sqlmodel = $connection->createCommand($sql);
					$userrights= $sqlmodel->queryAll();
					
					$profile_pic = $userdetailModel->profile_pic;
					if (! empty ( $profile_pic )) {
						$session ['profile_pic'] = '/images/firm_user/' . $profile_pic;
					} else {
						$session ['profile_pic'] = '/images/defaultuserimg.png';
					}
					// $full_name = $userdetailModel->first_name.' '.$userdetailModel->last_name;
					$full_name = $userdetailModel->first_name;
					$session ['logged_user_fullname'] = $full_name;
					// getting firm logo
					$firm_details = Firms::find ()->select ( 'firm_logo' )->where ( [
							'firm_id' => $userdetailModel->firm_id
					] )->One ();
					if (! empty ( $firm_details->firm_logo )) {
						$session ['profile_logo'] = '/images/firm-logos/' . $firm_details->firm_logo;
					} else {
						$session ['profile_logo'] = '/images/logo/benefits.png';
					}
					
					break;
					
				case 3 :
					$login_url = \Yii::$app->params ['client_url'];
					
					$userdetailModel = ClientUser::find ()->where ( [
							'user_id' => $logged_user_id
					] )->One ();
					if (! empty ( $profile_pic )) {
						$session ['profile_pic'] = '/images/client_user/' . $profile_pic;
					} else {
						$session ['profile_pic'] = '/images/defaultuserimg.png';
					}
					// $full_name = $userdetailModel->first_name.' '.$userdetailModel->last_name;
					$full_name = $userdetailModel->first_name;
					$session ['logged_user_fullname'] = $full_name;
					// getting client logo
					$client_details = Clients::find ()->select ( 'company_logo' )->where ( [
							'client_id' => $userdetailModel->client_id
					] )->One ();
					if (! empty ( $client_details->company_logo )) {
						$session ['profile_logo'] = '/images/client-logos/' . $firm_details->company_logo;
					} else {
						$session ['profile_logo'] = '/images/logo/benefits.png';
					}
					break;
					
					
			}
			
			foreach ($userrights as $userright){
				array_push($currentuserrights, $userright['right_id']);
			}
			if(!empty($userdetailModel->is_billing) && $userdetailModel->is_billing == 1)
			{
				array_push($currentuserrights, 101);
			}
			
			
			$session['permissions']=$currentuserrights;
			
			
		}
		
		
			
	
	
	}
	
	function specialaccess($id){
		
		$user_type=Yii::$app->user->identity->user_id;
		
		if($user_type==1){
			$details=AdminUserRights::findOne(['right_id'=>$id]);
			if(!empty($details)){
				return true;
			}
			return false;
		}
	}
}
