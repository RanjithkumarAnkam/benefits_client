<?php

namespace app\components;

use Yii;
use yii\base\Component;
use app\controllers\SiteController;
use app\models\AdminUsers;
use app\models\FirmUsers;
use app\models\Firms;
use app\models\Clients;
use app\models\ClientUser;

/*
 * SessionCheckComponent is used for checking session variables is login or logout
 */
class SessionCheckComponent extends Component {	
	
	// function to get the session based images & names
	public static function RedirectionandSessioncreation() {
		$login_url = '';
		$result = array ();
		$user_id = Yii::$app->user->identity->user_id;
		
		switch (Yii::$app->user->identity->usertype) {
			case 1 :
				$result ['login_url'] = \Yii::$app->params ['admin_url'];
				
				$userdetailModel = AdminUsers::find ()->where ( [ 
						'user_id' => $user_id 
				] )->One ();
				
				$profile_pic = $userdetailModel->profile_pic;
				if (! empty ( $profile_pic )) {
					$result ['profile_pic'] = '/images/admin_user/' . $profile_pic;
				} else {
					$result ['profile_pic'] = '/images/defaultuserimg.png';
				}
				// $full_name = $userdetailModel->first_name.' '.$userdetailModel->last_name;
				$full_name = $userdetailModel->first_name;
				$result ['logged_user_fullname'] = $full_name;
				$result ['profile_logo'] = '/images/logo/benefits.png';
				break;
			case 2 :
				$result ['login_url'] = \Yii::$app->params ['firm_url'];
				
				$userdetailModel = FirmUsers::find ()->where ( [ 
						'user_id' => $user_id 
				] )->One ();
				$profile_pic = $userdetailModel->profile_pic;
				if (! empty ( $profile_pic )) {
					$result ['profile_pic'] = '/images/firm_user/' . $profile_pic;
				} else {
					$result ['profile_pic'] = '/images/defaultuserimg.png';
				}
				// $full_name = $userdetailModel->first_name.' '.$userdetailModel->last_name;
				$full_name = $userdetailModel->first_name;
				$result ['logged_user_fullname'] = $full_name;
				// getting firm logo
				$firm_details = Firms::find ()->select ( 'firm_logo' )->where ( [ 
						'firm_id' => $userdetailModel->firm_id 
				] )->One ();
				if (! empty ( $firm_details->firm_logo )) {
					$result ['profile_logo'] = '/images/firm-logos/' . $firm_details->firm_logo;
				} else {
					$result ['profile_logo'] = '/images/logo/benefits.png';
				}
				break;
			case 3 :
				$result ['login_url'] = \Yii::$app->params ['client_url'];
				
				$userdetailModel = ClientUser::find ()->where ( [ 
						'user_id' => $user_id 
				] )->One ();
				if (! empty ( $profile_pic )) {
					$result ['profile_pic'] = '/images/client_user/' . $profile_pic;
				} else {
					$result ['profile_pic'] = '/images/defaultuserimg.png';
				}
				// $full_name = $userdetailModel->first_name.' '.$userdetailModel->last_name;
				$full_name = $userdetailModel->first_name;
				$result ['logged_user_fullname'] = $full_name;
				// getting client logo
				$client_details = Clients::find ()->select ( 'company_logo' )->where ( [ 
						'client_id' => $userdetailModel->client_id 
				] )->One ();
				if (! empty ( $client_details->company_logo )) {
					$result ['profile_logo'] = '/images/client-logos/' . $firm_details->company_logo;
				} else {
					$result ['profile_logo'] = '/images/logo/benefits.png';
				}
				break;
		}
		
		return $result;
	}
	
	//Function is used for checking if admin or admin staff user is logged
	public function isLogged() {
		if (Yii::$app->session ['logged_status'] == true && Yii::$app->session ['is_admin'] == 'admin') {
			
			return true;
		} else {
			return false;
		}
	}
	
	//Function is used for checking if client or client company user is logged
	public function isclientLogged() {
		if (Yii::$app->session ['logged_status'] == true && (Yii::$app->session ['is_client'] == 'client' || Yii::$app->session ['is_client'] == 'companyuser' )) {
				
			return true;
		} else {
			return false;
		}
	}
	
	//Function is used for destroying all admin sessions 
	public function Adminlogout() {
		$session = \Yii::$app->session;
		unset ( $session ['is_admin'] );
		unset ( $session ['admin_user_id'] );
		unset ( $session ['admin_email'] );
		//unset ( $session ['admin_permissions'] );
		
		if(!empty($session['shadow_login_id'])) //logout client if shadow login
		{
		unset ( $session ['is_client'] );
		unset ( $session ['client_ids'] );
		unset ( $session ['company_ids'] );
		unset ( $session ['client_user_id'] );
		unset ( $session ['client_email'] );
		unset ( $session ['client_permissions'] );
		unset ( $session ['shadow_login_id'] );
		}
	}
	
	
	//Function is used for destroying all client sessions 
	public function Clientlogout() {
		$session = \Yii::$app->session;
		unset ( $session ['is_client'] );
		unset ( $session ['client_ids'] );
		unset ( $session ['company_ids'] );
		unset ( $session ['client_user_id'] );
		unset ( $session ['client_email'] );
		unset ( $session ['client_permissions'] );
		unset ( $session ['shadow_login_id'] );
		
	
	
	
	}
}