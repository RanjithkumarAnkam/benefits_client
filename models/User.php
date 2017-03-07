<?php

namespace app\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "{{%users}}".
 *
 * @property integer $id
 * @property string $email
 * @property string $firstname
 * @property string $lastname
 * @property string $mobile
 * @property string $authkey
 * @property string $password
 * @property string $password_reset_token
 * @property string $usertype
 * @property integer $is_active
 * @property integer $is_verified
 * @property integer $is_blocked
 * @property string $remarks
 * @property string $confirmation_token
 * @property integer $password_requested_at
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $last_logged_at
 *
 * @property ClientsDetails[] $clientsDetails
 *
 */
class User extends ActiveRecord implements IdentityInterface {
	public $_fullname;
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
	public function behaviors() {
		return [ 
				TimestampBehavior::className () 
		];
	}
	
	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [ 
				[ 
						[ 
								'email',
								'firstname',
								'lastname',
								'authkey',
								'password',
								'usertype' 
						],
						'required' 
				],
				[ 
						[ 
								'usertype' 
						],
						'string' 
				],
				[ 
						[ 
								'is_active',
								'is_verified',
								'is_blocked',
								'password_requested_at',
								'created_at',
								'updated_at',
								'last_logged_at' 
						],
						'integer' 
				],
				[ 
						[ 
								'email' 
						],
						'string',
						'max' => 100 
				],
				[ 
						[ 
								'firstname',
								'lastname',
								'mobile' 
						],
						'string',
						'max' => 20 
				],
				[ 
						[ 
								'authkey' 
						],
						'string',
						'max' => 32 
				],
				[ 
						[ 
								'password',
								'password_reset_token',
								'remarks' 
						],
						'string',
						'max' => 255 
				],
				[ 
						[ 
								'confirmation_token' 
						],
						'string',
						'max' => 250 
				],
				[ 
						[ 
								'email' 
						],
						'unique' 
				],
				[ 
						[ 
								'password_reset_token' 
						],
						'unique' 
				],
				
				[ 
						[ 
								'is_active' 
						],
						'default',
						'value' => self::STATUS_YES 
				],
				[ 
						[ 
								'is_verified',
								'is_blocked' 
						],
						'default',
						'value' => self::STATUS_NO 
				],
				[ 
						[ 
								'is_active',
								'is_verified',
								'is_blocked' 
						],
						'in',
						'range' => [ 
								self::STATUS_YES,
								self::STATUS_NO 
						] 
				] 
		];
	}
	
	/**
	 * @inheritdoc
	 */
	public function attributeLabels() {
		return [ 
				'id' => 'ID',
				'email' => 'Email',
				'firstname' => 'Firstname',
				'lastname' => 'Lastname',
				'mobile' => 'Mobile',
				'authkey' => 'Auth Key',
				'password' => 'Password',
				'password_reset_token' => 'Password Reset Token',
				'usertype' => 'Usertype',
				'is_active' => 'Is Active',
				'is_verified' => 'Is Verified',
				'is_blocked' => 'Is Blocked',
				'remarks' => 'Remarks',
				'confirmation_token' => 'Confirmation Token',
				'password_requested_at' => 'Password Requested At',
				'created_at' => 'Created At',
				'updated_at' => 'Updated At',
				'last_logged_at' => 'Last Logged At' 
		];
	}
	
	/**
	 *
	 * @return \yii\db\ActiveQuery
	 */
	/*
	 * public function getProfile() { return $this->hasOne(Profiles::className(), ['user_id' => 'id']); }
	 */
	
	// Other code goes here...
	/*
	 * public function getFullname() { $profile = Profiles::find()->where(['user_id'=>$this->id])->one(); if ($profile !==null) return $profile->firstname.' '.$profile->lastname; return false; }
	 */
	
	/**
	 * @inheritdoc
	 */
   /* public function getFullname()
    {
    	return $this->firstname.' '.$this->lastname;
    }
    	*/
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
		throw new NotSupportedException ( '"findIdentityByAccessToken" is not implemented.' );
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
		$expire = Yii::$app->params ['user.passwordResetTokenExpire'];
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
		$this->authkey = Yii::$app->security->generateRandomString ();
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
}
