<?php

namespace app\modules\design\controllers;

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
			    Yii::$app->params['search_url'] = '/design/search';
				Yii::$app->params['profile_url'] = '/design/manageadminuser/add?admin_user_id=1';
				Yii::$app->params['dashboard_url'] = '/design/dashboard/admin';
				Yii::$app->params['admin_cancel_url'] = '/design/search';
				Yii::$app->params['firm_cancel_url'] = '/design/search';
				Yii::$app->params['client_cancel_url'] = '/design/search';
				Yii::$app->params['firm_user_cancel_url'] = '/design/search';
				Yii::$app->params['client_user_cancel_url'] = '/design/search';
				Yii::$app->params['save_changes'] = '/design/search';
				break; 
			case 2:
			
			    Yii::$app->params['search_url'] = '/design/search';
				Yii::$app->params['profile_url'] = '/design/user/updatefirmuser?firm_user_id=1';
				Yii::$app->params['dashboard_url'] = '/design/dashboard/firms';
				Yii::$app->params['firm_cancel_url'] = '/design/search/firm-search';
				Yii::$app->params['client_cancel_url'] = '/design/search/firm-search';
				Yii::$app->params['firm_user_cancel_url'] = '/design/search/firm-search';
				Yii::$app->params['client_user_cancel_url'] = '/design/search/firm-search';
				 Yii::$app->params['save_changes'] = '/design/search/firm-search';
				break;
			case 3:
			    Yii::$app->params['search_url'] = '/design/search';
				Yii::$app->params['profile_url'] = '/design/user/updateclientuser?client_user_id=1';
				Yii::$app->params['dashboard_url'] = '/design/dashboard/clients';
				Yii::$app->params['client_user_cancel_url'] = '/design/company/manage-company-users';
				Yii::$app->params['client_cancel_url'] = '/design/company/manage-company-users';
				Yii::$app->params['save_changes'] = '/design/company/manage-company-users';
				break;
		}
	}else
	{
		throw new \yii\web\HttpException(404, 'Page not found.');
	}	
	
	
	}
}
