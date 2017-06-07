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
	public $firm_locations;
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
            [['firm_name', 'address_1', 'city', 'state', 'zip', 'phone', 'created_by', 'created_date', 'firm_locations', 'billing_address'], 'required'],
            [['state', 'zip', 'is_active', 'created_by', 'modified_by'], 'integer'],
            [['created_date', 'modified_date'], 'safe'],
            [['firm_name'], 'string', 'max' => 50],
			[['firm_name'], 'unique'],
			['firm_name', 'match', 'pattern' => "/^[a-zA-Z0-9&,#.\-\ ]+$/", 'message' => 'Firm name can only contain  alpha, number, space, dot , comma, hash, ampersand, hyphen .'],
            ['address_1', 'match', 'pattern' => "/^[a-zA-Z0-9&,#. ]+$/", 'message' => 'Address 1 can only contain alpha, number, space, dot , comma, hash, ampersand .'],
			['address_2', 'match', 'pattern' => "/^[a-zA-Z0-9&,#. ]+$/", 'message' => 'Address 2 can only contain alpha, number, space, dot , comma, hash, ampersand .'],
			['billing_address', 'match', 'pattern' => "/^[a-zA-Z0-9&,#. ]+$/", 'message' => 'Billing Address can only contain alpha, number, space, dot , comma, hash, ampersand .'],
			['city', 'match', 'pattern' => '/^[a-zA-Z ]+$/', 'message' => 'City name can only contain alphabets.'],
			[['zip'], 'string', 'min' => 5],
			[['website'], 'url'],
			[['address_1', 'address_2', 'billing_address'], 'string', 'max' => 200],
			[['city', 'website', 'firm_logo'], 'string', 'max' => 100],
            [['phone'], 'string', 'min' => 14, 'max' => 20, 'tooShort' => 'Phone should contain at least 10 digits.', 'tooLong' => 'Phone should contain at most 10 characters.'],
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
            'zip' => 'Zip Code',
            'website' => 'Website',
            'phone' => 'Phone',
            'firm_logo' => 'Firm Logo',
            'is_active' => 'Is Active',
            'created_by' => 'Created By',
            'created_date' => 'Created Date',
            'modified_by' => 'Modified By',
            'modified_date' => 'Modified Date',
			'firm_locations' => 'Firm Locations'
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
