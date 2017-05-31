<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_sir_firms".
 *
 * @property string $firm_id
 * @property string $firm_name
 * @property string $address_1
 * @property string $address_2
 * @property string $city
 * @property string $state
 * @property integer $zip
 * @property string $website
 * @property string $phone
 * @property string $firm_logo
 * @property integer $is_active
 * @property string $created_by
 * @property string $created_date
 * @property string $modified_by
 * @property string $modified_date
 *
 * @property FirmLocations[] $firmLocations
 * @property FirmLocations[] $firmLocations0
 */
class Firms extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_sir_firms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firm_name', 'address_1', 'city', 'state', 'zip', 'phone', 'created_by', 'created_date'], 'required'],
            [['state', 'zip', 'is_active', 'created_by', 'modified_by'], 'integer'],
            [['created_date', 'modified_date'], 'safe'],
            [['firm_name'], 'string', 'max' => 50],
			['firm_name', 'match', 'pattern' => "/^[a-zA-Z0-9&.'()\-\ ]+$/", 'message' => 'Firm name can only can only contain alphanumeric, dot, Ampersand, hyphen ,brackets.'],
            ['address_1', 'match', 'pattern' => '/^[a-zA-Z0-9\-\/\ ]+$/', 'message' => 'Address 1 can only contain alphanumeric, hyphen, slash.'],
			['address_2', 'match', 'pattern' => '/^[a-zA-Z0-9\-\/\ ]+$/', 'message' => 'Address 2 can only contain alphanumeric, hyphen, slash.'],
			['city', 'match', 'pattern' => '/^[a-zA-Z- ]+$/', 'message' => 'City name can only contain alphabets.'],
			//[['zip'], 'integer', 'max' => 5],
			[['website'], 'url'],
			[['address_1', 'address_2', 'city', 'website', 'firm_logo'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'firm_id' => 'Firm ID',
            'firm_name' => 'Firm Name',
            'address_1' => 'Address 1',
            'address_2' => 'Address 2',
            'city' => 'City',
            'state' => 'State',
            'zip' => 'Zip',
            'website' => 'Website',
            'phone' => 'Phone',
            'firm_logo' => 'Firm Logo',
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
    public function getFirmLocations()
    {
        return $this->hasMany(FirmLocations::className(), ['firm_id' => 'firm_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFirmLocations0()
    {
        return $this->hasMany(FirmLocations::className(), ['firm_id' => 'firm_id']);
    }
}
