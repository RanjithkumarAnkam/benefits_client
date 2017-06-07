<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_sir_clients".
 *
 * @property integer $client_id
 * @property string $firm_id
 * @property string $client_name
 * @property string $address_1
 * @property string $address_2
 * @property string $city
 * @property integer $state
 * @property integer $zip
 * @property string $phone
 * @property string $website
 * @property integer $primary_consultant
 * @property integer $primary_account_manager
 * @property integer $primary_service_rep
 * @property integer $employer_size_category
 * @property integer $industry_code
 * @property string $bill_to
 * @property string $company_logo
 * @property string $logo_use_type
 * @property integer $is_active
 * @property integer $created_by
 * @property string $created_date
 * @property integer $modified_by
 * @property string $modified_date
 *
 * @property Firms $firm
 */
class Clients extends \yii\db\ActiveRecord
{
	public $add_firm_id;
	public $add_state;
	public $add_primary_consultant;
	public $add_primary_account_manager;
	public $add_primary_service_rep;
	public $add_employer_size_category;
	public $add_industry_code;
	
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_sir_clients';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firm_id', 'client_name', 'address_1', 'city', 'state', 'zip', 'phone', 'primary_consultant', 'primary_account_manager', 'primary_service_rep', 'employer_size_category', 'industry_code', 'bill_to', 'logo_use_type', 'created_by', 'created_date', 'add_firm_id','add_state','add_primary_consultant','add_primary_account_manager','add_primary_service_rep','add_employer_size_category','add_industry_code','billing_address'], 'required'],
            [['firm_id', 'state', 'zip', 'primary_consultant', 'primary_account_manager', 'primary_service_rep', 'employer_size_category', 'industry_code', 'is_active', 'created_by', 'modified_by'], 'integer'],
            [['bill_to', 'logo_use_type', 'add_firm_id','add_state','add_primary_consultant','add_primary_account_manager','add_primary_service_rep','add_employer_size_category','add_industry_code'], 'string'],
            [['created_date', 'modified_date'], 'safe'],
            [[ 'city', 'website', 'company_logo'], 'string', 'max' => 100],
			[['client_name'], 'string', 'max' => 50],
			['client_name', 'match', 'pattern' => "/^[a-zA-Z0-9&,#. ]+$/", 'message' => 'Client name can only contain  alpha, number, space, dot , comma, hash, ampersand .'],
			['client_name', 'unique', 'targetAttribute' => ['client_name', 'firm_id'], 'message' => 'Client name already exists for this firm'],
			['address_1', 'match', 'pattern' => "/^[a-zA-Z0-9&,#. ]+$/", 'message' => 'Address 1 can only contain alpha, number, space, dot , comma, hash, ampersand .'],
			['address_2', 'match', 'pattern' => "/^[a-zA-Z0-9&,#. ]+$/", 'message' => 'Address 2 can only contain alpha, number, space, dot , comma, hash, ampersand .'],
			['billing_address', 'match', 'pattern' => "/^[a-zA-Z0-9&,#. ]+$/", 'message' => 'Billing Address can only contain alpha, number, space, dot , comma, hash, ampersand .'],
			['city', 'match', 'pattern' => '/^[a-zA-Z ]+$/', 'message' => 'City name can only contain alphabets.'],
			
            [['address_1', 'address_2','billing_address'], 'string', 'max' => 200],
            [['phone'], 'string', 'min' => 14, 'max' => 20, 'tooShort' => 'Phone should contain at least 10 characters.', 'tooLong' => 'Phone should contain at most 10 characters.'],
            [['firm_id'], 'exist', 'skipOnError' => true, 'targetClass' => Firms::className(), 'targetAttribute' => ['firm_id' => 'firm_id']],
			[['website'], 'url'],
			[['website'], 'url'],
			[['zip'], 'string', 'min' => 5],
		];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'client_id' => 'Client ID',
            'firm_id' => 'Firm ID',
            'client_name' => 'Client Name',
            'address_1' => 'Address 1',
            'address_2' => 'Address 2',
			'billing_address' => 'Billing Address',
            'city' => 'City',
            'state' => 'State',
            'zip' => 'Zip Code',
            'phone' => 'Phone',
            'website' => 'Website',
            'primary_consultant' => 'Primary Consultant',
            'primary_account_manager' => 'Primary Account Manager',
            'primary_service_rep' => 'Primary Service Rep',
            'employer_size_category' => 'Employer Size Category',
            'industry_code' => 'Industry Code',
            'bill_to' => 'Bill To',
            'company_logo' => 'Company Logo',
            'logo_use_type' => 'Logo Use Type',
            'is_active' => 'Is Active',
            'created_by' => 'Created By',
            'created_date' => 'Created Date',
            'modified_by' => 'Modified By',
            'modified_date' => 'Modified Date',
            'add_firm_id' => 'Firm Id',
            'add_state' => 'State',
            'add_primary_consultant' => 'Primary Consultant',
            'add_primary_account_manager' => 'Primary Account Manager',
            'add_primary_service_rep' => 'Primary Service Rep',
            'add_employer_size_category' => 'Employer Size Category',
            'add_industry_code' => 'Industry Code'
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
