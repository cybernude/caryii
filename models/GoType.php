<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "go_type".
 *
 * @property integer $go_id
 * @property string $go_name
 */
class GoType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'go_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['go_name'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'go_id' => 'Go ID',
            'go_name' => 'Go Name',
        ];
    }
}
