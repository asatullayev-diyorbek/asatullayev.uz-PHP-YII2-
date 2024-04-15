<?php

namespace common\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Info;

/**
 * InfoSearch represents the model behind the search form of `common\models\Info`.
 */
class InfoSearch extends Info
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'age', 'status'], 'integer'],
            [['first_name', 'last_name', 'job', 'img', 'language','content'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Info::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'age' => $this->age,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'job', $this->job])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'age', $this->age])
            ->andFilterWhere(['like', 'language', $this->language])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'cv_link', $this->gender])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
