<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\IdentityInterface;

/**
 * ProfileForm is the model behind the profile screen.
 *
 * @property User|null $user This property is read-only.
 *
 */
class ProfileForm extends Model
{
    public $first_name;
    public $last_name;
    public $email_id;
    public $phone;
    public $extension;
    public $mobile;
    public $profile_pic;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
        
            [['first_name', 'last_name', 'phone'], 'required'],
            ['first_name', 'match', 'pattern' => '/^[a-zA-Z0-9,. ]+$/', 'message' => 'First name can only contain alphabets, comma, dot and numbers.'],
            ['last_name', 'match', 'pattern' => '/^[a-zA-Z0-9,. ]+$/', 'message' => 'Last name can only contain alphabets, comma, dot and numbers.'],
            ['extension', 'match', 'pattern' => '/^[0-9]+$/', 'message' => 'Extension can only contain numbers.'],
            [['first_name', 'last_name'], 'string', 'max' => 50],
            [['profile_pic'], 'image', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, PNG, JPEG, JPG, TIF, GIF, BMP', 'maxSize' => 1024*1024 , 'maxWidth' => 128, 'maxHeight' => 128],
            [['extension'], 'string', 'max' => 5],
            [['phone', 'mobile'], 'string', 'max' => 20],
            
          
        ];
    }

   
}
