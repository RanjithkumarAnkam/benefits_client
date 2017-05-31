<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_sir_rights_master".
 *
 * @property string $right_id
 * @property string $description
 * @property integer $user_type
 * @property string $category
 *
 * @property AdminUserRights[] $adminUserRights
 */
class RightsMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_sir_rights_master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description', 'user_type', 'category'], 'required'],
            [['user_type', 'category'], 'integer'],
            [['description'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'right_id' => 'Right ID',
            'description' => 'Description',
            'user_type' => 'User Type',
            'category' => 'Category',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdminUserRights()
    {
        return $this->hasMany(AdminUserRights::className(), ['right_id' => 'right_id']);
    }
}
