<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Syn;

/**
 * SynSearch represents the model behind the search form about `app\models\Syn`.
 */
class SynSearch extends Syn
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['syn_id'], 'integer'],
            [['syn_name'], 'safe'],
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
        $query = Syn::find();

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
            'syn_id' => $this->syn_id,
        ]);

        $query->andFilterWhere(['like', 'syn_name', $this->syn_name]);

        return $dataProvider;
    }
}
