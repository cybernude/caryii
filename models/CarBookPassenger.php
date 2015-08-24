<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "car_book_passenger".
 *
 * @property integer $car_book_passenger_id
 * @property integer $car_book_id
 * @property integer $passenger_id
 *
 * @property Users $passenger
 * @property CarBook $carBook
 */
class CarBookPassenger extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'car_book_passenger';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['car_book_id', 'passenger_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'car_book_passenger_id' => 'Car Book Passenger ID',
            'car_book_id' => 'Car Book ID',
            'passenger_id' => 'Passenger ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPassenger()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'passenger_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarBook()
    {
        return $this->hasOne(CarBook::className(), ['car_book_id' => 'car_book_id']);
    }
}
