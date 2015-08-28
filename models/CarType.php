<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "car_type".
 *
 * @property integer $car_type_id
 * @property string $car_type_name
 * @property string $car_type_color
 *
 * @property Car[] $cars
 * @property CarBook[] $carBooks
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
            [['car_type_name', 'car_type_color'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'car_type_id' => 'Car Type ID',
            'car_type_name' => 'Car Type Name',
            'car_type_color' => 'Car Type Color',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCars()
    {
        return $this->hasMany(Car::className(), ['car_type_id' => 'car_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarBooks()
    {
        return $this->hasMany(CarBook::className(), ['car_type_id' => 'car_type_id']);
    }
}
