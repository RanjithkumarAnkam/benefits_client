<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sir_firm_users".
 *
 * @property integer $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property string $mobile
 * @property integer $is_billling
 * @property integer $is_primary
 * @property integer $status
 * @property string $jobtitle
 */
class SirFirmUsers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sir_firm_users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['is_billing', 'is_primary', 'status'], 'integer'],
            [['first_name', 'last_name', 'jobtitle'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 100],
            [['phone', 'mobile'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'mobile' => 'Mobile',
            'is_billing' => 'Is Billing',
            'is_primary' => 'Is Primary',
            'status' => 'Status',
            'jobtitle' => 'Jobtitle',
        ];
    }
}
