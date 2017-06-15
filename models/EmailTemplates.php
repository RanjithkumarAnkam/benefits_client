<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_sir_email_templates".
 *
 * @property integer $template_id
 * @property integer $email_type_id
 * @property string $subject
 * @property string $body
 * @property integer $created_by
 * @property string $created_date
 * @property integer $modified_by
 * @property string $modified_date
 *
 * @property EmailTypes $emailType
 */
class EmailTemplates extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_sir_email_templates';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email_type_id', 'subject', 'body', 'created_by', 'created_date'], 'required'],
            [['email_type_id', 'created_by', 'modified_by'], 'integer'],
            [['body'], 'string'],
            [['created_date', 'modified_date'], 'safe'],
            [['subject'], 'string', 'max' => 200],
            [['email_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => EmailTypes::className(), 'targetAttribute' => ['email_type_id' => 'email_type_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'template_id' => 'Template ID',
            'email_type_id' => 'Email Type',
            'subject' => 'Subject',
            'body' => 'Body',
            'created_by' => 'Created By',
            'created_date' => 'Created Date',
            'modified_by' => 'Modified By',
            'modified_date' => 'Modified Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmailType()
    {
        return $this->hasOne(EmailTypes::className(), ['email_type_id' => 'email_type_id']);
    }
}
