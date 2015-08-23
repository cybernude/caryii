<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Carpriority;

/**
 * CarprioritySearch represents the model behind the search form about `app\models\Carpriority`.
 */
class CarprioritySearch extends Carpriority
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['car_priority_id'], 'integer'],
            [['car_priority_name', 'car_priority_admin', 'car_priority_approve'], 'safe'],
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
        $query = Carpriority::find();

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
            'car_priority_id' => $this->car_priority_id,
        ]);

        $query->andFilterWhere(['like', 'car_priority_name', $this->car_priority_name])
            ->andFilterWhere(['like', 'car_priority_admin', $this->car_priority_admin])
            ->andFilterWhere(['like', 'car_priority_approve', $this->car_priority_approve]);

        return $dataProvider;
    }
}
