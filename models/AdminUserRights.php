<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_sir_admin_user_rights".
 *
 * @property string $user_right_id
 * @property string $admin_id
 * @property string $right_id
 * @property string $created_by
 * @property string $created_date
 * @property string $modified_by
 * @property string $modified_date
 *
 * @property AdminUsers $admin
 * @property RightsMaster $right
 */
class AdminUserRights extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_sir_admin_user_rights';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['admin_id', 'right_id', 'created_by', 'created_date'], 'required'],
            [['admin_id', 'right_id', 'created_by', 'modified_by'], 'integer'],
            [['created_date', 'modified_date'], 'safe'],
            [['admin_id'], 'exist', 'skipOnError' => true, 'targetClass' => AdminUsers::className(), 'targetAttribute' => ['admin_id' => 'admin_id']],
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
            'admin_id' => 'Admin ID',
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
    public function getAdmin()
    {
        return $this->hasOne(AdminUsers::className(), ['admin_id' => 'admin_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRight()
    {
        return $this->hasOne(RightsMaster::className(), ['right_id' => 'right_id']);
    }
}
