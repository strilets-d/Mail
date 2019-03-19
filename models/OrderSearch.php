<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Orders;

/**
 * OrderSearch represents the model behind the search form of `app\models\Orders`.
 */
class OrderSearch extends Orders
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_order', 'num_premise', 'id_department', 'weight_premise', 'length_premise', 'width_premise', 'height_premise', 'id_type', 'id_dep_rec', 'price_premise', 'price_delivery', 'type_payer', 'reverse_delivery', 'packaging', 'courier', 'status', 'id_user'], 'integer'],
            [['phone_user', 'pib_sender', 'pib_recipient', 'address_delivery', 'date_order'], 'safe'],
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
        $query = Orders::find();

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
            'id_order' => $this->id_order,
            'num_premise' => $this->num_premise,
            'id_department' => $this->id_department,
            'weight_premise' => $this->weight_premise,
            'length_premise' => $this->length_premise,
            'width_premise' => $this->width_premise,
            'height_premise' => $this->height_premise,
            'id_type' => $this->id_type,
            'id_dep_rec' => $this->id_dep_rec,
            'price_premise' => $this->price_premise,
            'price_delivery' => $this->price_delivery,
            'type_payer' => $this->type_payer,
            'reverse_delivery' => $this->reverse_delivery,
            'packaging' => $this->packaging,
            'courier' => $this->courier,
            'status' => $this->status,
            'id_user' => $this->id_user,
        ]);

        $query->andFilterWhere(['like', 'phone_user', $this->phone_user])
            ->andFilterWhere(['like', 'pib_sender', $this->pib_sender])
            ->andFilterWhere(['like', 'pib_recipient', $this->pib_recipient])
            ->andFilterWhere(['like', 'address_delivery', $this->address_delivery])
            ->andFilterWhere(['like', 'date_order', $this->date_order]);

        return $dataProvider;
    }
}
