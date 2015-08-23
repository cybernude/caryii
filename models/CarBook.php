<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "car_book".
 *
 * @property integer $car_book_id
 * @property string $request_date
 * @property integer $car_id
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
 *
 * @property Users $booking0
 * @property Car $car
 * @property GoType $go
 * @property Drivers $driver
 * @property Users $approve0
 * @property Shift $shift
 * @property Syn $syn
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
            [['car_id', 'staff', 'approve_id', 'driver_id', 'booking_id', 'go_id', 'shift_id', 'syn_id'], 'integer'],
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
            'subject' => 'หัวข้อ',
            'description' => 'รายละเอียด',
            'startdatetime' => 'เดินทางวันที่',
            'enddatetime' => 'ถึงวันที่',
            'staff' => 'Staff',
            'approve_id' => 'อนุมัติโดย',
            'approve' => 'ผลอนุมัติ',
            'approve_date' => 'วันที่อนุมัติ',
            'driver_id' => 'พนักงานขับรถ',
            'realstartdatetime' => 'ออกเดินทางจริง',
            'realenddatetime' => 'กลับถึงสำนักงานจริง',
            'milestart' => 'เลขไมค์เมื่อรถออก',
            'mileend' => 'เลขไมค์เมื่อรถหยุด',
            'booking_id' => 'ผู้บันทึกการเดินทาง',
            'go_id' => 'ประเภทการเดินทาง',
            'booking' => 'ผลการบันทึก',
            'cancel' => 'ยกเลิก',
            'shift_id' => 'ประเภทเวร',
            'syn_id' => 'ประเภทกะ',
        ];
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
}
