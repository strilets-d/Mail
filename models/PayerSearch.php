<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TypePayer;

/**
 * PayerSearch represents the model behind the search form of `app\models\TypePayer`.
 */
class PayerSearch extends TypePayer
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_payer'], 'integer'],
            [['name_payer'], 'safe'],
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
        $query = TypePayer::find();

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
            'id_payer' => $this->id_payer,
        ]);

        $query->andFilterWhere(['like', 'name_payer', $this->name_payer]);

        return $dataProvider;
    }
}
