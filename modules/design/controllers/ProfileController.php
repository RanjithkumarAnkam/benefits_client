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

class ProfileController extends BaseController { 

	public $layout = 'main-layout';
	public function actionIndex() {
		
		
		return $this->render ( 'index');
	}


}
?>

