<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FuelType;

/**
 * FueltypeSearch represents the model behind the search form about `app\models\FuelType`.
 */
class FueltypeSearch extends FuelType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fuel_type_id'], 'integer'],
            [['fuel_type_name'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = FuelType::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'fuel_type_id' => $this->fuel_type_id,
        ]);

        $query->andFilterWhere(['like', 'fuel_type_name', $this->fuel_type_name]);

        return $dataProvider;
    }
}
