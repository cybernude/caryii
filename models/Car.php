<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "car".
 *
 * @property integer $car_id
 * @property integer $car_type_id
 * @property string $car_register
 * @property string $description
 * @property string $startdatetime
 * @property integer $car_brand_id
 * @property string $car_model
 * @property string $number_engine
 * @property string $number_tank
 * @property string $start_mile
 * @property string $max_fuel
 * @property string $usage_mile
 * @property string $repair_price
 * @property integer $driver_id
 * @property string $event_color
 *
 * @property Drivers $driver
 * @property CarType $carType
 * @property CarBrand $carBrand
 */
class Car extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'car';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['car_type_id', 'car_brand_id', 'driver_id'], 'integer'],
            [['startdatetime'], 'safe'],
            [['car_register', 'description', 'event_color'], 'string', 'max' => 255],
            [['car_model', 'number_engine', 'number_tank', 'start_mile', 'max_fuel', 'usage_mile', 'repair_price'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'car_id' => 'Car ID',
            'car_type_id' => 'Car Type ID',
            'car_register' => 'Car Register',
            'description' => 'Description',
            'startdatetime' => 'Startdatetime',
            'car_brand_id' => 'Car Brand ID',
            'car_model' => 'Car Model',
            'number_engine' => 'Number Engine',
            'number_tank' => 'Number Tank',
            'start_mile' => 'Start Mile',
            'max_fuel' => 'Max Fuel',
            'usage_mile' => 'Usage Mile',
            'repair_price' => 'Repair Price',
            'driver_id' => 'Driver ID',
            'event_color' => 'Event Color',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDriver()
    {
        return $this->hasOne(Drivers::className(), ['driver_id' => 'driver_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarType()
    {
        return $this->hasOne(CarType::className(), ['car_type_id' => 'car_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarBrand()
    {
        return $this->hasOne(CarBrand::className(), ['car_brand_id' => 'car_brand_id']);
    }
}
