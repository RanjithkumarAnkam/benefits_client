<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_sir_user_identity_cookie".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $duration
 * @property integer $first_login
 * @property integer $last_login
 * @property string $cookie_key
 * @property string $user_key
 * @property string $last_ip
 * @property string $last_agent
 */
class UserIdentityCookie extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_sir_user_identity_cookie';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'duration', 'first_login', 'last_login', 'cookie_key', 'user_key', 'last_agent'], 'required'],
            [['user_id', 'duration', 'first_login', 'last_login'], 'integer'],
            [['cookie_key', 'user_key'], 'string', 'max' => 64],
            [['last_ip'], 'string', 'max' => 40],
            [['last_agent'], 'string', 'max' => 1024],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'duration' => 'Duration',
            'first_login' => 'First Login',
            'last_login' => 'Last Login',
            'cookie_key' => 'Cookie Key',
            'user_key' => 'User Key',
            'last_ip' => 'Last Ip',
            'last_agent' => 'Last Agent',
        ];
    }
}
