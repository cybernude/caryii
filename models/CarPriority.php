<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "car_priority".
 *
 * @property integer $car_priority_id
 * @property string $car_priority_name
 * @property string $car_priority_admin
 * @property string $car_priority_approve
 */
class CarPriority extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'car_priority';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['car_priority_admin', 'car_priority_approve'], 'string'],
            [['car_priority_name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'car_priority_id' => 'Car Priority ID',
            'car_priority_name' => 'Car Priority Name',
            'car_priority_admin' => 'Car Priority Admin',
            'car_priority_approve' => 'Car Priority Approve',
        ];
    }
}
