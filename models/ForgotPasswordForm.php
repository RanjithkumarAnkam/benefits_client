<?php 
    namespace app\models;
    
    use Yii;
    use yii\base\Model;
    use yii\filters\AccessControl;
	use yii\web\Controller;
	use yii\helpers\Url;
	use yii\helpers\ArrayHelper;
	use yii\base\ErrorException;
	 
    class ForgotPasswordForm extends Model{
    	
        public $username;
        public $captcha;
       
       
        public function rules(){
            return [
                [['username'],'required', 'message' => 'Username / Email Id cannot be blank.'],
                ['username','email'],
				[['captcha'],'required'],
                [['captcha'], 'captcha']
  ,
                ['username','findEmail'],
            ];
        }
		
        public function findEmail($attribute, $params){
			 $user = User::find()->where([
                'username'=>$this->username
            ])->one();
			
			
			if (empty($user)) {
				$this->addError($attribute,'Username / Email Id does not exists');
			} 
			
            
        }
        
        public function attributeLabels(){
            return [
                'username'=>'Username',
				'captcha'=>'Captcha'
              ];
        }
    }
	?>