<?php

namespace common\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Skills;

/**
 * SkillsSearch represents the model behind the search form of `common\models\Skills`.
 */
class SkillsSearch extends Skills
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['email', 'phone', 'telegram', 'github', 'address', 'skill1_title', 'skill2_title', 'skill3_title', 'skill4_title'], 'safe'],
            [['skill1', 'skill2', 'skill3', 'skill4'], 'number'],
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
        $query = Skills::find();

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
            'skill1' => $this->skill1,
            'skill2' => $this->skill2,
            'skill3' => $this->skill3,
            'skill4' => $this->skill4,
        ]);

        $query->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'telegram', $this->telegram])
            ->andFilterWhere(['like', 'github', $this->github])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'skill1_title', $this->skill1_title])
            ->andFilterWhere(['like', 'skill2_title', $this->skill2_title])
            ->andFilterWhere(['like', 'skill3_title', $this->skill3_title])
            ->andFilterWhere(['like', 'skill4_title', $this->skill4_title]);

        return $dataProvider;
    }
}
