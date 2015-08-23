<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "drivers".
 *
 * @property integer $driver_id
 * @property string $driver_name
 * @property string $driver_call_name
 * @property string $driver_telephone
 * @property string $driver_email
 */
class Drivers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'drivers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['driver_name'], 'string', 'max' => 250],
            [['driver_call_name', 'driver_telephone'], 'string', 'max' => 50],
            [['driver_email'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'driver_id' => 'Driver ID',
            'driver_name' => 'พนักงานขับ',
            'driver_call_name' => 'Driver Call Name',
            'driver_telephone' => 'Driver Telephone',
            'driver_email' => 'Driver Email',
        ];
    }
}
