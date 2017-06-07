<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_sir_company_subscription".
 *
 * @property int $subscription_id
 * @property int $client_id
 * @property string $module_id
 * @property string $package_type
 * @property double $amount
 * @property int $is_active
 * @property string $created_date
 * @property int $created_by
 * @property string $modified_date
 * @property int $modified_by
 */
class CompanySubscription extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_sir_company_subscription';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['client_id', 'module_id', 'package_type', 'created_date', 'created_by'], 'required'],
            [['client_id', 'module_id', 'package_type', 'is_active', 'created_by', 'modified_by'], 'integer'],
            [['amount'], 'number'],
            [['created_date', 'modified_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'subscription_id' => 'Subscription ID',
            'client_id' => 'Client ID',
            'module_id' => 'Module ID',
            'package_type' => 'Package Type',
            'amount' => 'Amount',
            'is_active' => 'Is Active',
            'created_date' => 'Created Date',
            'created_by' => 'Created By',
            'modified_date' => 'Modified Date',
            'modified_by' => 'Modified By',
        ];
    }
	
	 /**
     * @return \yii\db\ActiveQuery
     */
    public function getClient()
    {
    	return $this->hasOne(Clients::className(), ['client_id' => 'client_id']);
    }
	
	
	 /**
     * @return \yii\db\ActiveQuery
     */
    public function getModule()
    {
    	return $this->hasOne(LookupOptions::className(), ['option_id' => 'module_id']);
    }
}
