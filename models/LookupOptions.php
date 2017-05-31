<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_sir_lookup_options".
 *
 * @property string $option_id
 * @property integer $option_type
 * @property string $option_value
 * @property integer $option_status
 * @property string $created_by
 * @property string $created_date
 * @property string $modified_by
 * @property string $modified_date
 *
 * @property SystemPricing[] $systemPricings
 */
class LookupOptions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_sir_lookup_options';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['option_type', 'option_value', 'option_status', 'created_by'], 'required'],
            [['option_type', 'option_status', 'created_by', 'modified_by'], 'integer'],
            [['created_date', 'modified_date'], 'safe'],
            [['option_value'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'option_id' => 'Option ID',
            'option_type' => 'Option Type',
            'option_value' => 'Option Value',
            'option_status' => 'Option Status',
            'created_by' => 'Created By',
            'created_date' => 'Created Date',
            'modified_by' => 'Modified By',
            'modified_date' => 'Modified Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSystemPricings()
    {
        return $this->hasMany(SystemPricing::className(), ['module_id' => 'option_id']);
    }
}
