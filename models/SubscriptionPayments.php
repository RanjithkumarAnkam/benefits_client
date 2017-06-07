<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_sir_subscription_payments".
 *
 * @property integer $payment_id
 * @property integer $subscription_id
 * @property string $invoice_no
 * @property string $invoice_date
 * @property string $payment_due_date
 * @property string $payment_date
 * @property double $amount
 * @property string $notes
 * @property string $created_date
 * @property integer $created_by
 * @property string $modified_date
 * @property integer $modified_by
 *
 * @property CompanySubscription $subscription
 */
class SubscriptionPayments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_sir_subscription_payments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subscription_id', 'invoice_no', 'invoice_date', 'payment_due_date', 'payment_date', 'created_date', 'created_by'], 'required'],
            [['subscription_id', 'created_by', 'modified_by'], 'integer'],
            [['invoice_date', 'payment_due_date', 'payment_date', 'created_date', 'modified_date'], 'safe'],
            [['amount'], 'string'],
            [['notes'], 'string'],
            [['invoice_no'], 'string', 'max' => 20],
            [['subscription_id'], 'exist', 'skipOnError' => true, 'targetClass' => CompanySubscription::className(), 'targetAttribute' => ['subscription_id' => 'subscription_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'payment_id' => 'Payment ID',
            'subscription_id' => 'Subscription ID',
            'invoice_no' => 'Invoice No',
            'invoice_date' => 'Invoice Date',
            'payment_due_date' => 'Payment Due Date',
            'payment_date' => 'Payment Date',
            'amount' => 'Amount',
            'notes' => 'Notes',
            'created_date' => 'Created Date',
            'created_by' => 'Created By',
            'modified_date' => 'Modified Date',
            'modified_by' => 'Modified By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubscription()
    {
        return $this->hasOne(CompanySubscription::className(), ['subscription_id' => 'subscription_id']);
    }
    
    public function getBillingcontactclient()
    {
    	
    	$name = '';
    	$connection = \yii::$app->db;
    	$sql = ' SELECT tscr.first_name,tscr.last_name 
    			 FROM tbl_sir_company_subscription tscs 
    			 LEFT JOIN tbl_sir_clients tsc
    			 ON tscs.client_id = tsc.client_id
				 LEFT JOIN tbl_sir_client_user tscr
    			 ON tsc.client_id = tscr.client_id
    			 WHERE tsc.bill_to = "client" AND tscr.is_billing = 1
    			';
    	
    	$model = $connection->createCommand ( $sql );
    	$client_user = $model->queryOne ();
    	
    	if(!empty($client_user))
    	{
    		$name = $client_user['first_name'].' '.$client_user['last_name'];
    	}
    	
    	return $name;
    }
    
    
    
    public function getBillingcontactfirm()
    {
    	 
    	$name = '';
    	$connection = \yii::$app->db;
    	$sql = ' SELECT tscr.first_name,tscr.last_name
    			 FROM tbl_sir_company_subscription tscs
    			 LEFT JOIN tbl_sir_clients tsc
    			 ON tscs.client_id = tsc.client_id
				 LEFT JOIN tbl_sir_firm_users tscr
    			 ON tsc.firm_id = tscr.firm_id
    			 WHERE tsc.bill_to = "firm" AND tscr.is_billing = 1
    			';
    	 
    	$model = $connection->createCommand ( $sql );
    	$firm_user = $model->queryOne ();
    	 
    	if(!empty($firm_user))
    	{
    		$name = $firm_user['first_name'].' '.$firm_user['last_name'];
    	}
    	 
    	return $name;
    }
}
