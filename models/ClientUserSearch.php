<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ClientUser;

/**
 * ClientUserSearch represents the model behind the search form about `app\models\ClientUser`.
 */
class ClientUserSearch extends ClientUser
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['client_user_id', 'user_id', 'client_id', 'is_billing', 'is_primary', 'is_active', 'created_by', 'modified_by'], 'integer'],
            [['first_name', 'last_name', 'title', 'phone', 'extension', 'mobile', 'profile_pic', 'created_date', 'modified_date'], 'safe'],
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
        $query = ClientUser::find();

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
            'client_user_id' => $this->client_user_id,
            'user_id' => $this->user_id,
            'client_id' => $this->client_id,
            'is_billing' => $this->is_billing,
            'is_primary' => $this->is_primary,
            'is_active' => $this->is_active,
            'created_by' => $this->created_by,
            'created_date' => $this->created_date,
            'modified_by' => $this->modified_by,
            'modified_date' => $this->modified_date,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'extension', $this->extension])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'profile_pic', $this->profile_pic]);

        return $dataProvider;
    }
}
