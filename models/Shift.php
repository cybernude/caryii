<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shift".
 *
 * @property integer $shift_id
 * @property string $shift_name
 *
 * @property CarBook[] $carBooks
 */
class Shift extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shift';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['shift_name'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'shift_id' => 'Shift ID',
            'shift_name' => 'Shift Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarBooks()
    {
        return $this->hasMany(CarBook::className(), ['shift_id' => 'shift_id']);
    }
}
