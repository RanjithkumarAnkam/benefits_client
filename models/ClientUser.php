<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_sir_client_user".
 *
 * @property integer $client_user_id
 * @property string $user_id
 * @property integer $client_id
 * @property string $first_name
 * @property string $last_name
 * @property string $title
 * @property string $phone
 * @property string $extension
 * @property string $mobile
 * @property string $profile_pic
 * @property integer $is_billing
 * @property integer $is_primary
 * @property integer $is_active
 * @property integer $created_by
 * @property string $created_date
 * @property integer $modified_by
 * @property string $modified_date
 *
 * @property Users $user
 * @property Client $client
 */
class ClientUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_sir_client_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'client_id', 'first_name', 'last_name', 'created_by', 'created_date'], 'required'],
            [['user_id', 'client_id', 'is_billing', 'is_primary', 'is_active', 'created_by', 'modified_by'], 'integer'],
            [['created_date', 'modified_date'], 'safe'],
            [['first_name', 'last_name', 'title'], 'string', 'max' => 50],
			['first_name', 'match', 'pattern' => '/^[a-zA-Z- ]+$/', 'message' => 'First name can only contain alphabets.'],
            ['last_name', 'match', 'pattern' => '/^[a-zA-Z- ]+$/', 'message' => 'Last name can only contain alphabets.'],
            ['extension', 'match', 'pattern' => '/^[0-9]+$/', 'message' => 'Extension can only contain numbers.'],
            [['profile_pic'], 'image', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, PNG, JPEG, JPG, TIF, GIF, BMP', 'maxSize' => 1024*1024 , 'maxWidth' => 400, 'maxHeight' => 400],
            [['phone', 'mobile'], 'string', 'max' => 20],
            [['extension'], 'string', 'max' => 10],
            [['profile_pic'], 'string', 'max' => 100],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'user_id']],
            [['client_id'], 'exist', 'skipOnError' => true, 'targetClass' => Clients::className(), 'targetAttribute' => ['client_id' => 'client_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'client_user_id' => 'Client User ID',
            'user_id' => 'User ID',
            'client_id' => 'Client ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'title' => 'Title',
            'phone' => 'Phone',
            'extension' => 'Extension',
            'mobile' => 'Mobile',
            'profile_pic' => 'Profile Pic',
            'is_billing' => 'Is Billing',
            'is_primary' => 'Is Primary',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClient()
    {
        return $this->hasOne(Clients::className(), ['client_id' => 'client_id']);
    }
}
