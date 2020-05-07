<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * CharacterSearch represents the model behind the search form about `common\models\Character`.
 */
class CharacterSearch extends Character
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'killed', 'created_at', 'logged_at'], 'integer'],
            [['name', 'password_hash', 'clan'], 'safe'],
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
        $query = Character::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'killed' => $this->killed,
            'created_at' => $this->created_at,
            'logged_at' => $this->logged_at,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'clan', $this->clan])
            ->andFilterWhere(['like', 'password_hash', $this->password_hash]);

        return $dataProvider;
    }
}
