<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_sir_firm_users".
 *
 * @property integer $firm_user_id
 * @property integer $user_id
 * @property integer $firm_id
 * @property string $first_name
 * @property string $last_name
 * @property string $title
 * @property string $phone
 * @property string $extension
 * @property string $cellular
 * @property string $profile_pic
 * @property integer $is_primary
 * @property integer $is_billing
 * @property integer $is_active
 * @property integer $created_by
 * @property string $created_date
 * @property integer $modified_by
 * @property string $modified_date
 */
class FirmUsers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_sir_firm_users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'firm_id', 'first_name', 'last_name', 'created_by', 'created_date','phone'], 'required'],
            [['user_id', 'firm_id', 'is_primary', 'is_billing', 'is_active', 'created_by', 'modified_by'], 'integer'],
            [['created_date', 'modified_date'], 'safe'],
            [['first_name', 'last_name', 'title'], 'string', 'max' => 50],
            ['first_name', 'match', 'pattern' => '/^[a-zA-Z,.\-\ ]+$/', 'message' => 'First name can only contain alphabets, comma, dot and hash.'],
            ['last_name', 'match', 'pattern' => '/^[a-zA-Z,.\-\ ]+$/', 'message' => 'First name can only contain alphabets, comma, dot and hash.'],
            ['extension', 'match', 'pattern' => '/^[0-9]+$/', 'message' => 'Extension can only contain numbers.'],
            [['profile_pic'], 'image', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, PNG, JPEG, JPG, TIF, GIF, BMP', 'maxSize' => 1024*1024 , 'maxWidth' => 400, 'maxHeight' => 400],
            [['extension'], 'string','min'=>3, 'max' => 6],
            [['phone', 'mobile'], 'string', 'min' => 14, 'max' => 20, 'tooShort' => 'should contain at least 10 digits.', 'tooLong' => 'should contain at most 10 characters.'],
            [['profile_pic'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'firm_user_id' => 'Firm User ID',
            'user_id' => 'User ID',
            'firm_id' => 'Firm ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'title' => 'Title',
            'phone' => 'Phone',
            'extension' => 'Extension',
            'mobile' => 'Mobile',
            'profile_pic' => 'Profile Pic',
            'is_primary' => 'Is Primary',
            'is_billing' => 'Is Billing',
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
    public function getUser()
    {
    	return $this->hasOne(User::className(), ['user_id' => 'user_id']);
    }
}
