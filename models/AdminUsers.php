<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_sir_admin_users".
 *
 * @property string $admin_id
 * @property string $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $phone
 * @property integer $extension
 * @property string $mobile
 * @property string $profile_pic
 * @property integer $is_active
 * @property string $created_by
 * @property string $created_date
 * @property string $modified_by
 * @property string $modified_date
 *
 * @property AdminUserRights[] $adminUserRights
 * @property Users $user
 */
class AdminUsers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	
    public static function tableName()
    {
        return 'tbl_sir_admin_users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'first_name', 'last_name', 'created_by', 'created_date','phone'], 'required'],
            [['user_id', 'is_active', 'created_by', 'modified_by'], 'integer'],
            [['created_date', 'modified_date'], 'safe'],
            ['first_name', 'match', 'pattern' => '/^[a-zA-Z,.\-\ ]+$/', 'message' => 'First name can only contain alphabets, comma, dot and hash.'],
            ['last_name', 'match', 'pattern' => '/^[a-zA-Z,.\-\ ]+$/', 'message' => 'Last name can only contain alphabets, comma, dot and hash.'],
            ['extension', 'match', 'pattern' => '/^[0-9]+$/', 'message' => 'Extension can only contain numbers.'],
            [['first_name', 'last_name'], 'string', 'max' => 50],
            [['profile_pic'], 'image', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, PNG, JPEG, JPG, TIF, GIF, BMP', 'maxSize' => 1024*1024 , 'maxWidth' => 400, 'maxHeight' => 400],
            [['extension'], 'string', 'min'=>3, 'max' => 6],
            [['phone', 'mobile'], 'string', 'min'=>14,'max' => 14,'tooShort'=>'Should contain 10 digits'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'user_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'admin_id' => 'Admin ID',
            'user_id' => 'User ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'phone' => 'Phone',
            'extension' => 'Extension',
            'mobile' => 'Mobile',
            'profile_pic' => 'Profile Pic',
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
    public function getAdminUserRights()
    {
        return $this->hasMany(AdminUserRights::className(), ['admin_id' => 'admin_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['user_id' => 'user_id']);
    }
}
