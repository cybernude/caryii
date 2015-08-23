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
            'car_id' => 'รหัสลงทะเบียน',
            'car_type_id' => 'ประเภท',
            'car_register' => 'ทะเบียน',
            'description' => 'ลักษณะการใช้งาน',
            'startdatetime' => 'วันที่เริ่มใช้',
            'car_brand_id' => 'ยี่ห้อ',
            'car_model' => 'รุ่น',
            'number_engine' => 'เลขเครื่องยนต์',
            'number_tank' => 'เลขตัวถัง',
            'start_mile' => 'เข็มไมค์เริ่มต้น',
            'max_fuel' => 'ความจุน้ำมันสูงสุด',
            'usage_mile' => 'เลขไมค์สะสม',
            'repair_price' => 'มูลค่าการซ่อมบำรุง',
            'driver_id' => 'ผู้ดูแล',
            'event_color' => 'สีแสดงผล',
        ];
    }
}
