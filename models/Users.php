<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $user_id
 * @property string $loginname
 * @property string $password
 * @property string $name
 * @property string $telephone
 * @property integer $car_priority_id
 * @property string $email
 *
 * @property CarBook[] $carBooks
 * @property CarBook[] $carBooks0
 * @property CarBook[] $carBooks1
 * @property CarBookPassenger[] $carBookPassengers
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['car_priority_id'], 'integer'],
            [['loginname', 'password', 'name', 'telephone'], 'string', 'max' => 250],
            [['email'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'loginname' => 'Loginname',
            'password' => 'Password',
            'name' => 'Name',
            'telephone' => 'Telephone',
            'car_priority_id' => 'Car Priority ID',
            'email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarBooks()
    {
        return $this->hasMany(CarBook::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarBooks0()
    {
        return $this->hasMany(CarBook::className(), ['approve_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarBooks1()
    {
        return $this->hasMany(CarBook::className(), ['booking_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarBookPassengers()
    {
        return $this->hasMany(CarBookPassenger::className(), ['passenger_id' => 'user_id']);
    }
}
