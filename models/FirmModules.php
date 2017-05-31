<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_sir_firm_modules".
 *
 * @property integer $firm_module_id
 * @property integer $firm_id
 * @property integer $module_id
 * @property integer $is_active
 * @property integer $created_by
 * @property string $created_date
 * @property integer $modified_by
 * @property integer $modified_date
 */
class FirmModules extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_sir_firm_modules';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firm_id', 'module_id', 'is_active', 'created_by', 'created_date'], 'required'],
            [['firm_id', 'module_id', 'is_active', 'created_by', 'modified_by', 'modified_date'], 'integer'],
            [['created_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'firm_module_id' => 'Firm Module ID',
            'firm_id' => 'Firm ID',
            'module_id' => 'Module ID',
            'is_active' => 'Is Active',
            'created_by' => 'Created By',
            'created_date' => 'Created Date',
            'modified_by' => 'Modified By',
            'modified_date' => 'Modified Date',
        ];
    }
	
	 
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFirm()
    {
    	return $this->hasOne(Firms::className(), ['firm_id' => 'firm_id']);
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModule()
    {
    	return $this->hasOne(LookupOptions::className(), ['option_id' => 'module_id']);
    }
}
