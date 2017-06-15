<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_sir_email_types".
 *
 * @property integer $email_type_id
 * @property string $email_value
 * @property string $email_description
 *
 * @property EmailTemplates[] $emailTemplates
 */
class EmailTypes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_sir_email_types';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email_value', 'email_description'], 'required'],
            [['email_description'], 'string'],
            [['email_value'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'email_type_id' => 'Email Type ID',
            'email_value' => 'Email Value',
            'email_description' => 'Email Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmailTemplates()
    {
        return $this->hasMany(EmailTemplates::className(), ['email_type_id' => 'email_type_id']);
    }
}
