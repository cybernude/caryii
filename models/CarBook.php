<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "car_book".
 *
 * @property integer $car_book_id
 * @property string $request_date
 * @property integer $car_id
 * @property integer $car_type_id
 * @property string $subject
 * @property string $description
 * @property string $startdatetime
 * @property string $enddatetime
 * @property integer $staff
 * @property integer $approve_id
 * @property string $approve
 * @property string $approve_date
 * @property integer $driver_id
 * @property string $realstartdatetime
 * @property string $realenddatetime
 * @property string $milestart
 * @property string $mileend
 * @property integer $booking_id
 * @property integer $go_id
 * @property string $booking
 * @property string $cancel
 * @property integer $shift_id
 * @property integer $syn_id
 * @property integer $user_id
 *
 * @property Car $car
 * @property GoType $go
 * @property Drivers $driver
 * @property Users $approve0
 * @property Shift $shift
 * @property Syn $syn
 * @property Users $booking0
 * @property CarType $carType
 * @property Users $user
 * @property CarBookPassenger[] $carBookPassengers
 */
class CarBook extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'car_book';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['request_date', 'startdatetime', 'enddatetime', 'approve_date', 'realstartdatetime', 'realenddatetime'], 'safe'],
            [['car_id', 'car_type_id', 'staff', 'approve_id', 'driver_id', 'booking_id', 'go_id', 'shift_id', 'syn_id', 'user_id'], 'integer'],
            [['description'], 'string'],
            [['subject'], 'string', 'max' => 255],
            [['approve', 'booking', 'cancel'], 'string', 'max' => 1],
            [['milestart', 'mileend'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'car_book_id' => 'เลขคำขอ',
            'request_date' => 'วันที่ขอ',
            'car_id' => 'รถยนต์',
            'car_type_id' => 'ประเภทรถ',
            'subject' => 'เรื่อง',
            'description' => 'รายละเอียด',
            'startdatetime' => 'วันที่ไป',
            'enddatetime' => 'วันที่กลับ',
            'staff' => 'Staff',
            'approve_id' => 'อนุมัติโดย',
            'approve' => 'Approve',
            'approve_date' => 'Approve Date',
            'driver_id' => 'พนักงานขับรถ',
            'realstartdatetime' => 'เดินทางจริง',
            'realenddatetime' => 'กลับจริง',
            'milestart' => 'เลขไมค์เริ่มต้น',
            'mileend' => 'เลขไมค์สิ้นสุด',
            'booking_id' => 'Booking ID',
            'go_id' => 'Go ID',
            'booking' => 'Booking',
            'cancel' => 'Cancel',
            'shift_id' => 'Shift ID',
            'syn_id' => 'Syn ID',
            'user_id' => 'ผู้ร่วมเดินทาง',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCar()
    {
        return $this->hasOne(Car::className(), ['car_id' => 'car_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGo()
    {
        return $this->hasOne(GoType::className(), ['go_id' => 'go_id']);
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
    public function getApprove0()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'approve_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShift()
    {
        return $this->hasOne(Shift::className(), ['shift_id' => 'shift_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSyn()
    {
        return $this->hasOne(Syn::className(), ['syn_id' => 'syn_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooking0()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'booking_id']);
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
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarBookPassengers()
    {
        return $this->hasMany(CarBookPassenger::className(), ['car_book_id' => 'car_book_id']);
    }
}
