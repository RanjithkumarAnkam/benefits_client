<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_sir_system_pricing".
 *
 * @property integer $pricing_id
 * @property integer $client_number
 * @property string $module_id
 * @property integer $package_type
 * @property double $amount
 * @property integer $status
 * @property string $created_date
 * @property integer $created_by
 * @property string $modified_date
 * @property integer $modified_by
 *
 * @property LookupOptions $module
 */
class SystemPricing extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_sir_system_pricing';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['client_number', 'module_id', 'package_type', 'amount', 'created_date', 'created_by'], 'required'],
            [['client_number', 'module_id', 'package_type', 'status', 'created_by', 'modified_by'], 'integer'],
            [['amount'], 'number'],
            [['created_date', 'modified_date'], 'safe'],
            [['module_id'], 'exist', 'skipOnError' => true, 'targetClass' => LookupOptions::className(), 'targetAttribute' => ['module_id' => 'option_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pricing_id' => 'Pricing ID',
            'client_number' => 'Client Number',
            'module_id' => 'Module ID',
            'package_type' => 'Package Type',
            'amount' => 'Amount',
            'status' => 'Status',
            'created_date' => 'Created Date',
            'created_by' => 'Created By',
            'modified_date' => 'Modified Date',
            'modified_by' => 'Modified By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModule()
    {
        return $this->hasOne(LookupOptions::className(), ['option_id' => 'module_id']);
    }
}
