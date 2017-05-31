<?php

namespace app\controllers;

use yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\User;
use app\components\AccessRuleComponent;
use yii\filters\VerbFilter;

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
	
	
	}
}
