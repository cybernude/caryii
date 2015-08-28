<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Carbook;

/**
 * CarbookSearch represents the model behind the search form about `app\models\Carbook`.
 */
class CarbookSearch extends Carbook
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['car_book_id', 'car_id', 'car_type_id', 'staff', 'approve_id', 'driver_id', 'booking_id', 'go_id', 'shift_id', 'syn_id', 'user_id'], 'integer'],
            [['request_date', 'subject', 'description', 'startdatetime', 'enddatetime', 'approve', 'approve_date', 'realstartdatetime', 'realenddatetime', 'milestart', 'mileend', 'booking', 'cancel'], 'safe'],
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
        $query = Carbook::find();

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
            'car_book_id' => $this->car_book_id,
            'request_date' => $this->request_date,
            'car_id' => $this->car_id,
            'car_type_id' => $this->car_type_id,
            'startdatetime' => $this->startdatetime,
            'enddatetime' => $this->enddatetime,
            'staff' => $this->staff,
            'approve_id' => $this->approve_id,
            'approve_date' => $this->approve_date,
            'driver_id' => $this->driver_id,
            'realstartdatetime' => $this->realstartdatetime,
            'realenddatetime' => $this->realenddatetime,
            'booking_id' => $this->booking_id,
            'go_id' => $this->go_id,
            'shift_id' => $this->shift_id,
            'syn_id' => $this->syn_id,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'subject', $this->subject])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'approve', $this->approve])
            ->andFilterWhere(['like', 'milestart', $this->milestart])
            ->andFilterWhere(['like', 'mileend', $this->mileend])
            ->andFilterWhere(['like', 'booking', $this->booking])
            ->andFilterWhere(['like', 'cancel', $this->cancel]);

        return $dataProvider;
    }
}
