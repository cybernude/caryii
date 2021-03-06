<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cartype;

/**
 * CartypeSearch represents the model behind the search form about `app\models\Cartype`.
 */
class CartypeSearch extends Cartype
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['car_type_id'], 'integer'],
            [['car_type_name', 'car_type_color'], 'safe'],
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
        $query = Cartype::find();

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
            'car_type_id' => $this->car_type_id,
        ]);

        $query->andFilterWhere(['like', 'car_type_name', $this->car_type_name])
            ->andFilterWhere(['like', 'car_type_color', $this->car_type_color]);

        return $dataProvider;
    }
}
