<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Car;

/**
 * CarSearch represents the model behind the search form about `app\models\Car`.
 */
class CarSearch extends Car
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['car_id', 'car_type_id', 'car_brand_id', 'driver_id'], 'integer'],
            [['car_register', 'description', 'startdatetime', 'car_model', 'number_engine', 'number_tank', 'start_mile', 'max_fuel', 'usage_mile', 'repair_price', 'event_color'], 'safe'],
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
        $query = Car::find();

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
            'car_id' => $this->car_id,
            'car_type_id' => $this->car_type_id,
            'startdatetime' => $this->startdatetime,
            'car_brand_id' => $this->car_brand_id,
            'driver_id' => $this->driver_id,
        ]);

        $query->andFilterWhere(['like', 'car_register', $this->car_register])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'car_model', $this->car_model])
            ->andFilterWhere(['like', 'number_engine', $this->number_engine])
            ->andFilterWhere(['like', 'number_tank', $this->number_tank])
            ->andFilterWhere(['like', 'start_mile', $this->start_mile])
            ->andFilterWhere(['like', 'max_fuel', $this->max_fuel])
            ->andFilterWhere(['like', 'usage_mile', $this->usage_mile])
            ->andFilterWhere(['like', 'repair_price', $this->repair_price])
            ->andFilterWhere(['like', 'event_color', $this->event_color]);

        return $dataProvider;
    }
}
