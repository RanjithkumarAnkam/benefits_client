<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SubscriptionPayments;

/**
 * SubscriptionPaymentsSearch represents the model behind the search form about `app\models\SubscriptionPayments`.
 */
class SubscriptionPaymentsSearch extends SubscriptionPayments
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['payment_id', 'subscription_id', 'payment_date', 'created_by', 'modified_by'], 'integer'],
            [['invoice_no', 'invoice_date', 'payment_due_date', 'notes', 'created_date', 'modified_date'], 'safe'],
            [['amount'], 'number'],
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
        $query = SubscriptionPayments::find();

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
            'payment_id' => $this->payment_id,
            'subscription_id' => $this->subscription_id,
            'invoice_date' => $this->invoice_date,
            'payment_due_date' => $this->payment_due_date,
            'payment_date' => $this->payment_date,
            'amount' => $this->amount,
            'created_date' => $this->created_date,
            'created_by' => $this->created_by,
            'modified_date' => $this->modified_date,
            'modified_by' => $this->modified_by,
        ]);

        $query->andFilterWhere(['like', 'invoice_no', $this->invoice_no])
            ->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }
}
