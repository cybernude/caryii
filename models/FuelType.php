<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fuel_type".
 *
 * @property integer $fuel_type_id
 * @property string $fuel_type_name
 */
class FuelType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fuel_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fuel_type_name'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fuel_type_id' => 'Fuel Type ID',
            'fuel_type_name' => 'Fuel Type Name',
        ];
    }
}
