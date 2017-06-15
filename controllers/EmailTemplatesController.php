<?php

namespace app\controllers;

use yii;
use yii\filters\AccessControl;
use app\components\AccessRuleComponent;
use yii\web\Controller;
use app\models\User;
use yii\filters\VerbFilter;
use app\models\EmailTemplates;
use app\models\EmailTypes;
use yii\helpers\ArrayHelper;
use yii\web\Response;
use app\components\EncryptDecryptComponent;

class EmailTemplatesController extends BaseController {
	
	/**
	 * ******Behaviors are the init function for this conttroller , here it is allowing action for only ADMIN**************
	 */
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
												User::ADMIN 
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
	
	/**
	 * ******Function you can Add/update as well as render Email templates************
	 */
	public function actionIndex() {
		$modelEmailTemplates = new EmailTemplates ();
		$modelEmailTypes = new EmailTypes ();
		
		// check if template exists for particular type
		if (! empty ( \Yii::$app->request->get ( 'email_type' ) )) {
			
			// getting encrypted user type
			$encrypt_type = \Yii::$app->request->get ( 'email_type' );
			
			// decrypting user type
			$type = EncryptDecryptComponent::decryptUser ( $encrypt_type );
			$email_templates = EmailTemplates::find ()->where ( [ 
					'email_type_id' => $type 
			] )->One ();
			
			// check if email templates not empty
			if (! empty ( $email_templates )) {
				
				// if not empty assigning to prarent template model
				$modelEmailTemplates = $email_templates;
			}
			$modelEmailTypes->email_type_id = $encrypt_type;
		}
		
		/**
		 * *Get all email types***
		 */
		$model_email_types = EmailTypes::find ()->all ();
		
		//Recrusive function to convert ids to encrypted form
		if (! empty ( $model_email_types )) {
			$all_email_types = ArrayHelper::map ( $model_email_types, function ($model, $defaultValue) {
				return EncryptDecryptComponent::encrytedUser ( $model ['email_type_id'] );
			}, function ($model, $defaultValue) {
				return $model ['email_value'];
			} );
		}
		
		//Loading model with posted values
		if ($modelEmailTemplates->load ( \Yii::$app->request->post () )) {
			
			if (! empty ( $email_templates )) {
			}
			
			//Start Transaction
			$transaction = \Yii::$app->db->beginTransaction ();
			try {
				$modelEmailTemplates->email_type_id = EncryptDecryptComponent::decryptUser ( $modelEmailTypes->email_type_id );
				
				if (! $modelEmailTemplates->isNewRecord) {
					$modelEmailTemplates->modified_by = \Yii::$app->user->identity->user_id;
					$modelEmailTemplates->modified_date = date ( 'Y-m-d H:i:s' );
				} else {
					$modelEmailTemplates->created_by = \Yii::$app->user->identity->user_id;
					$modelEmailTemplates->created_date = date ( 'Y-m-d H:i:s' );
				}
				
				if ($modelEmailTemplates->save ()) {
					//Commiting Transaction
					$transaction->commit ();
					\Yii::$app->session->setFlash ( 'success', 'Email Templates updated succesfully' );
				} else {
					$arrerrors = $modelEmailTemplates->getFirstErrors ();
					$errorstring = '';
					/**
					 * *****Converting error into string*******
					 */
					foreach ( $arrerrors as $key => $value ) {
						$errorstring .= $value . '<br>';
					}
					
					throw new \Exception ( $errorstring );
				}
			} catch ( \Exception $e ) {
				
				$msg = $e->getMessage ();
				$transaction->rollBack ();
				\Yii::$app->session->setFlash ( 'error', $msg );
			}
		}
		
		return $this->render ( 'index', [ 
				'modelEmailTemplates' => $modelEmailTemplates,
				'modelEmailTypes' => $modelEmailTypes,
				'all_email_types' => $all_email_types 
		] );
	}
}