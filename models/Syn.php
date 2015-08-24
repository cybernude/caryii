<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "syn".
 *
 * @property integer $syn_id
 * @property string $syn_name
 *
 * @property CarBook[] $carBooks
 */
class Syn extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'syn';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['syn_name'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'syn_id' => 'Syn ID',
            'syn_name' => 'Syn Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarBooks()
    {
        return $this->hasMany(CarBook::className(), ['syn_id' => 'syn_id']);
    }
}
