<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Firms;

/**
 * FirmsSearch represents the model behind the search form about `app\models\Firms`.
 */
class FirmsSearch extends Firms
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firm_id', 'state', 'zip', 'extension', 'is_active', 'created_by', 'modified_by'], 'integer'],
            [['firm_name', 'address_1', 'address_2', 'city', 'website', 'phone', 'mobile', 'firm_logo', 'created_date', 'modified_date'], 'safe'],
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
        $query = Firms::find();

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
            'firm_id' => $this->firm_id,
            'state' => $this->state,
            'zip' => $this->zip,
            'extension' => $this->extension,
            'is_active' => $this->is_active,
            'created_by' => $this->created_by,
            'created_date' => $this->created_date,
            'modified_by' => $this->modified_by,
            'modified_date' => $this->modified_date,
        ]);

        $query->andFilterWhere(['like', 'firm_name', $this->firm_name])
            ->andFilterWhere(['like', 'address_1', $this->address_1])
            ->andFilterWhere(['like', 'address_2', $this->address_2])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'firm_logo', $this->firm_logo]);

        return $dataProvider;
    }
}
