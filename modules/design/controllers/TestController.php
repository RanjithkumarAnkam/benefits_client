<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\helpers\Json;

class TestController extends Controller {


	public function actionIndex() {
		//$this->layout = "login-main";
		return $this->render ( 'index' );
		
	}
	
	public function actionTest() {
		//$this->layout = "login-main";
		return $this->render ( 'test' );
		
	}
	
	public function actionAwss() {
		
		$data = ['one', 'two', 'three'];
Yii::$app->get('s3bucket')->put('path/to/s3object.ext', Json::encode($data));

die('ok');
		
		return $this->render ( 'index' );
		
	}
}
