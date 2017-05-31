<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_sir_firm_user_rights".
 *
 * @property integer $user_right_id
 * @property integer $firm_user_id
 * @property string $right_id
 * @property integer $created_by
 * @property string $created_date
 * @property integer $modified_by
 * @property string $modified_date
 *
 * @property FirmUsers $firmUser
 * @property RightsMaster $right
 */
class FirmUserRights extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_sir_firm_user_rights';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firm_user_id', 'right_id', 'created_by', 'created_date'], 'required'],
            [['firm_user_id', 'right_id', 'created_by', 'modified_by'], 'integer'],
            [['created_date', 'modified_date'], 'safe'],
            [['firm_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => FirmUsers::className(), 'targetAttribute' => ['firm_user_id' => 'firm_user_id']],
            [['right_id'], 'exist', 'skipOnError' => true, 'targetClass' => RightsMaster::className(), 'targetAttribute' => ['right_id' => 'right_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_right_id' => 'User Right ID',
            'firm_user_id' => 'Firm User ID',
            'right_id' => 'Right ID',
            'created_by' => 'Created By',
            'created_date' => 'Created Date',
            'modified_by' => 'Modified By',
            'modified_date' => 'Modified Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFirmUser()
    {
        return $this->hasOne(FirmUsers::className(), ['firm_user_id' => 'firm_user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRight()
    {
        return $this->hasOne(RightsMaster::className(), ['right_id' => 'right_id']);
    }
}
