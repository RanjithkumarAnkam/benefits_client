<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *          
 */
class LoginForm extends Model {
	public $username;
	public $password;
	public $rememberMe = true;
	private $_user = false;
	
	/**
	 *
	 * @return array the validation rules.
	 */
	public function rules() {
		return [ 
				// username and password are both required
				[ 
						[ 
								'username',
								'password' 
						],
						'required' 
				],
				// rememberMe must be a boolean value
				[ 
						'rememberMe',
						'boolean' 
				],
				// password is validated by validatePassword()
				[ 
						'password',
						'validatePassword' 
				] 
		];
	}
	
	/**
	 * Validates the password.
	 * This method serves as the inline validation for password.
	 *
	 * @param string $attribute
	 *        	the attribute currently being validated
	 * @param array $params
	 *        	the additional name-value pairs given in the rule
	 */
	public function validatePassword($attribute, $params) {
		if (! $this->hasErrors ()) {
			$user = $this->getUser ();
			//print_r($user); die();
			if (! $user ) {
				$this->addError ( $attribute, 'Incorrect username or password.' );
			}else {
				if($user->is_verified == 0)
				{
					$this->addError ( $attribute, 'Email Id is not verified, Please verify mail.' );
				
				}elseif($user->is_active == 0) {
					
					$this->addError ( $attribute, 'Account Inactive, Please contact administrator.' );
				}
				elseif(! $user->validatePassword ( $this->password )) {
				
					$this->addError ( $attribute, 'Incorrect password.' );
						
			}	
				
			}
		}
	}
	
	/**
	 * Logs in a user using the provided username and password.
	 *
	 * @return bool whether the user is logged in successfully
	 */
	public function login() {
		if ($this->validate ()) {
			
			/*
			 * $session = \Yii::$app->session; $session ['logged_username'] = $this->getUser ()->attributes ['username']; $session ['logged_usertype'] = $this->getUser ()->attributes ['usertype']; $session ['logged_id'] = $this->getUser ()->attributes ['user_id']; $session->set ( 'logged_status', true ); /*if ($session ['logged_usertype'] == 1) { $permissions = \Yii::$app->Permission->getloggeduserpermission ( $session ['logged_id'] ); $session ['logged_permissions'] = $permissions; } return true;
			 */
			
			// setting the sessions
			return Yii::$app->user->login ( $this->getUser (), $this->rememberMe ? 3600 * 24 * 3 : 0 ); // persistent login for 3 days
		}
	//	print_r($this->validate ()); die();
		return false;
	}
	
	/**
	 * Finds user by [[username]]
	 *
	 * @return User null
	 */
	public function getUser() {
		if ($this->_user === false) {
			//$this->_user = User::findByUsername ( $this->username );
			$user='';
			
			$user_details=User::find()->where(['username'=>$this->username])->orderBy(['usertype'=>SORT_ASC])->One();
			
			if(!empty($user_details)){
			
			if($user_details->usertype==1){
				$user=self::checkforadmin($this->username, $this->password);
				
			}elseif($user_details->usertype==2){
				$user=self::checkforfirm($this->username, $this->password);
				
			}elseif($user_details->usertype==3){
				$user=self::checkforclient($this->username, $this->password);
			}
			}
			
			$this->_user=$user;
			//$this->_user = User::find()->where(['username'=>$this->username])->orderBy(['usertype'=>SORT_ASC])->One();
		}
		
		return $this->_user;
	}
	
	private function checkforadmin($username,$password){
		$user = User::find()->where(['username'=>$this->username,'usertype'=>1])->One();
		$adminuser = AdminUsers::findOne(['user_id'=>$user->user_id,'is_active'=>1]);
		
		if($adminuser){
			return $user;
		}
		
		return '';
	}
	
	private function checkforfirm($username,$password){
		$user = User::find()->where(['username'=>$this->username,'usertype'=>2])->One();
		$firmuser = FirmUsers::findOne(['user_id'=>$user->user_id,'is_active'=>1]);
		
		if($firmuser){
			$firm=Firms::findOne(['firm_id'=>$firmuser->firm_id,'is_active'=>1]);
			if($firm){
			return $user;
			}
		}
		
		return '';
	}
	
	private function checkforclient($username,$password){
		$user = User::find()->where(['username'=>$this->username,'usertype'=>3])->One();
		
		$clientuser=ClientUser::findOne(['user_id'=>$user->user_id,'is_active'=>1]);
		
		if($clientuser){
			$client = Clients::findOne(['client_id'=>$clientuser->client_id,'is_active'=>1]);
		
			if($client){
				$firm=Firms::findOne(['firm_id'=>$client->firm_id,'is_active'=>1]);
			if($firm){
				return $user;
			}
		}
		}
		
		return '';
	}
}
