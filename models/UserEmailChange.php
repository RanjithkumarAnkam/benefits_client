<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_sir_user_email_change".
 *
 * @property integer $change_id
 * @property integer $user_id
 * @property string $previous_email
 * @property string $new_email
 * @property integer $updated_by
 * @property string $updated_date
 */
class UserEmailChange extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_sir_user_email_change';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'previous_email', 'new_email', 'updated_by'], 'required'],
            [['user_id', 'updated_by'], 'integer'],
            [['updated_date'], 'safe'],
            [['previous_email', 'new_email'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'change_id' => 'Change ID',
            'user_id' => 'User ID',
            'previous_email' => 'Previous Email',
            'new_email' => 'New Email',
            'updated_by' => 'Updated By',
            'updated_date' => 'Updated Date',
        ];
    }
}
