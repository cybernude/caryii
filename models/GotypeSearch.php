<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GoType;

/**
 * GotypeSearch represents the model behind the search form about `app\models\GoType`.
 */
class GotypeSearch extends GoType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['go_id'], 'integer'],
            [['go_name'], 'safe'],
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
        $query = GoType::find();

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
            'go_id' => $this->go_id,
        ]);

        $query->andFilterWhere(['like', 'go_name', $this->go_name]);

        return $dataProvider;
    }
}
