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
 *
 * @property Car $car
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
            [['car_id', 'staff', 'approve_id', 'driver_id', 'booking_id', 'go_id'], 'integer'],
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
            'car_book_id' => 'Car Book ID',
            'request_date' => 'Request Date',
            'car_id' => 'Car ID',
            'subject' => 'Subject',
            'description' => 'Description',
            'startdatetime' => 'Startdatetime',
            'enddatetime' => 'Enddatetime',
            'staff' => 'Staff',
            'approve_id' => 'Approve ID',
            'approve' => 'Approve',
            'approve_date' => 'Approve Date',
            'driver_id' => 'Driver ID',
            'realstartdatetime' => 'Realstartdatetime',
            'realenddatetime' => 'Realenddatetime',
            'milestart' => 'Milestart',
            'mileend' => 'Mileend',
            'booking_id' => 'Booking ID',
            'go_id' => 'Go ID',
            'booking' => 'Booking',
            'cancel' => 'Cancel',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCar()
    {
        return $this->hasOne(Car::className(), ['car_id' => 'car_id']);
    }
}
