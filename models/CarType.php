<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "car_type".
 *
 * @property integer $car_type_id
 * @property string $car_type_name
 */
class CarType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'car_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['car_type_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'car_type_id' => 'รหัส',
            'car_type_name' => 'ประเภท',
        ];
    }
}
