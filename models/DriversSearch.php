<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Drivers;

/**
 * DriversSearch represents the model behind the search form about `app\models\Drivers`.
 */
class DriversSearch extends Drivers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['driver_id'], 'integer'],
            [['driver_name', 'driver_call_name', 'driver_telephone', 'driver_email'], 'safe'],
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
        $query = Drivers::find();

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
            'driver_id' => $this->driver_id,
        ]);

        $query->andFilterWhere(['like', 'driver_name', $this->driver_name])
            ->andFilterWhere(['like', 'driver_call_name', $this->driver_call_name])
            ->andFilterWhere(['like', 'driver_telephone', $this->driver_telephone])
            ->andFilterWhere(['like', 'driver_email', $this->driver_email]);

        return $dataProvider;
    }
}
