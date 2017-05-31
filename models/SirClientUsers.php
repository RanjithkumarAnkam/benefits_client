<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sir_client_users".
 *
 * @property integer $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property string $mobile
 * @property integer $is_primary
 * @property integer $is_billing
 * @property integer $status
 * @property string $jobtitle
 */
class SirClientUsers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sir_client_users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['is_primary', 'is_billing', 'status'], 'integer'],
            [['first_name', 'last_name', 'phone', 'mobile', 'jobtitle'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 100],
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
            'is_primary' => 'Is Primary',
            'is_billing' => 'Is Billing',
            'status' => 'Status',
            'jobtitle' => 'Jobtitle',
        ];
    }
}
