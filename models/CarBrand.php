<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "car_brand".
 *
 * @property integer $car_brand_id
 * @property string $brand_name
 */
class CarBrand extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'car_brand';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['brand_name'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'car_brand_id' => 'Car Brand ID',
            'brand_name' => 'Brand Name',
        ];
    }
}
