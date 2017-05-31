<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_sir_firm_locations".
 *
 * @property string $location_id
 * @property string $firm_id
 * @property string $location_name
 * @property string $created_by
 * @property string $created_date
 * @property string $modified_by
 * @property string $modified_date
 */
class FirmLocations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_sir_firm_locations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firm_id', 'location_name', 'created_by', 'created_date'], 'required'],
            [['firm_id', 'created_by', 'modified_by'], 'integer'],
            [['created_date', 'modified_date'], 'safe'],
            [['location_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'location_id' => 'Location ID',
            'firm_id' => 'Firm ID',
            'location_name' => 'Location Name',
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
}
