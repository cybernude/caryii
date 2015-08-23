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
}
