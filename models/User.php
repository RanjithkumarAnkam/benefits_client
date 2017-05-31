<?php

namespace app\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;


/**
 * This is the model class for table "tbl_sir_users".
 *
 * @property integer $user_id
 * @property string $username
 * @property string $password
 * @property string $authkey
 * @property string $password_reset_token
 * @property string $accessToken
 * @property integer $usertype
 * @property integer $is_verified
 * @property integer $is_active
 * @property string $last_login
 * @property string $created_date
 * @property integer $created_by
 * @property string $modified_date
 * @property integer $modified_by
 */

class User extends ActiveRecord implements IdentityInterface {
	
	const STATUS_NO = 0;
	const STATUS_YES = 1;
	const ADMIN = 1;
	const FIRM = 2;
	const CLIENT = 3;
	
	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return '{{%users}}';
	}
	
	/**
	 * @inheritdoc
	 */
	/*public function behaviors() {
		return [ 
				TimestampBehavior::className () 
		];
	}*/
	
	/**
	 * @inheritdoc
	 */
	public function rules() {
        return [
            [['username', 'usertype', 'created_date', 'created_by'], 'required'],
        	[['is_active', 'is_verified', 'usertype', 'created_by', 'modified_by'], 'integer'],
            [['username', 'authkey','accessToken'], 'string', 'max' => 50],
            [['password_reset_token'], 'string', 'max' => 255],
            [['username'], 'email'],
			[['username'], 'required', 'message' => 'Username / Email Id cannot be blank.'],
            ['username', 'unique', 'targetAttribute' => ['username', 'usertype'], 'message' => 'Username already taken for this Usertype'],
            [['password_reset_token'], 'unique'],
            [['last_login', 'created_date', 'modified_date'], 'safe'],
            [['is_active'], 'default', 'value' => self::STATUS_NO],
            [['is_verified'], 'default', 'value' => self::STATUS_NO],
            [['is_active', 'is_verified'], 'in', 'range' => [self::STATUS_YES, self::STATUS_NO]],
        ];
    }
	
	/**
	 * @inheritdoc
	 */
	public function attributeLabels() {
        return [
            'user_id' => 'User ID',
            'username' => 'Username',
            'password' => 'Password',
            'authkey' => 'Authkey',
            'password_reset_token' => 'Password Reset Token',
            'accessToken' => 'Access Token',
            'usertype' => 'Usertype',
            'is_verified' => 'Is Verified',
            'is_active' => 'Is Active',
            'last_login' => 'Last Login',
            'created_date' => 'Created Date',
            'created_by' => 'Created By',
            'modified_date' => 'Modified Date',
            'modified_by' => 'Modified By',
        ];
    }
	
	
	
    public function getUsertype() {
		return $this->usertype;
	}
	/**
	 * @inheritdoc
	 */
	public static function findIdentity($id) {
		return static::findOne ( [ 
				'user_id' => $id 
		] );
	}
	
	/**
	 * @inheritdoc
	 */
	public static function findIdentityByAccessToken($token, $type = null) {
		return static::findOne(['accessToken' => $token]);
	}
	
	/**
	 * Finds user by username
	 *
	 * @param string $username        	
	 * @return static null
	 */
	public static function findByUsername($username) {
		return static::findOne ( [ 
				'username' => $username 
		] );
	}
	
	/**
	 * Finds user by email
	 *
	 * @param string $email        	
	 * @return static null
	 */
	public static function findByEmail($email) {
		return static::findOne ( [ 
				'email' => $email 
		] );
	}
	
	/**
	 * Finds user by password reset token
	 *
	 * @param string $token
	 *        	password reset token
	 * @return static null
	 */
	public static function findByPasswordResetToken($token) {
		if (! static::isPasswordResetTokenValid ( $token )) {
			return null;
		}
		
		return static::findOne ( [ 
				'password_reset_token' => $token,
				'is_active' => self::STATUS_YES 
		] );
	}
	
	/**
	 * Finds user by auth key
	 *
	 * @param string $token
	 *        	auth key token
	 * @return static null
	 */
	public static function findByAuthKey($token) {
		
		return static::findOne ( [
				'authkey' => $token,
				] );
	}
	/**
	 * Finds out if password reset token is valid
	 *
	 * @param string $token
	 *        	password reset token
	 * @return bool
	 */
	public static function isPasswordResetTokenValid($token) {
		if (empty ( $token )) {
			return false;
		}
		$timestamp = ( int ) substr ( $token, strrpos ( $token, '_' ) + 1 );
		
		$expire = Yii::$app->params ['passwordResetTokenExpire'];
		return $timestamp + $expire >= time ();
	}
	
	/**
	 * @inheritdoc
	 */
	public function getId() {
		return $this->getPrimaryKey ();
	}
	
	/**
	 * @inheritdoc
	 */
	public function getAuthKey() {
		return $this->authkey;
	}
	
	/**
	 * @inheritdoc
	 */
	public function validateAuthKey($authKey) {
		return $this->getAuthKey () === $authKey;
	}
	
	/**
	 * Validates password
	 *
	 * @param string $password
	 *        	password to validate
	 * @return bool if password provided is valid for current user
	 */
	public function validatePassword($password) {
		return Yii::$app->security->validatePassword ( $password, $this->password );
	}
	
	/**
	 * Generates password hash from password and sets it to the model
	 *
	 * @param string $password        	
	 */
	public function setPassword($password) {
		$this->password = Yii::$app->security->generatePasswordHash ( $password );
	}
	
	/**
	 * Generates "remember me" authentication key
	 */
	public function generateAuthKey() {
		$this->authkey = Yii::$app->security->generateRandomString () . '_' . time ();
	}
	
	/**
	 * Generates new password reset token
	 */
	public function generatePasswordResetToken() {
		$this->password_reset_token = Yii::$app->security->generateRandomString () . '_' . time ();
	}
	
	/**
	 * Removes password reset token
	 */
	public function removePasswordResetToken() {
		$this->password_reset_token = null;
	}
	
	
	public function beforeSave($insert)
	{
		if (parent::beforeSave($insert)) {
			if ($this->isNewRecord) {
				$this->authkey = \Yii::$app->security->generateRandomString() . '_' . time ();
			}
			return true;
		}
		return false;
	}
}
