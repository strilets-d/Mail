<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ReverseDelivery;

/**
 * ReverseDeliverySearch represents the model behind the search form of `app\models\ReverseDelivery`.
 */
class ReverseDeliverySearch extends ReverseDelivery
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_reverse_del'], 'integer'],
            [['type_reverse_del'], 'safe'],
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
        $query = ReverseDelivery::find();

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
            'id_reverse_del' => $this->id_reverse_del,
        ]);

        $query->andFilterWhere(['like', 'type_reverse_del', $this->type_reverse_del]);

        return $dataProvider;
    }
}
