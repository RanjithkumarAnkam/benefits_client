<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FirmUsers;

/**
 * FirmUsersSearch represents the model behind the search form about `app\models\FirmUsers`.
 */
class FirmUsersSearch extends FirmUsers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firm_user_id', 'user_id', 'firm_id', 'is_primary', 'is_billing', 'is_active', 'created_by', 'modified_by'], 'integer'],
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
        $query = FirmUsers::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
			'sort'=> ['defaultOrder' => ['firm_user_id'=>SORT_DESC]],
			
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'firm_user_id' => $this->firm_user_id,
            'user_id' => $this->user_id,
            'firm_id' => $this->firm_id,
            'is_primary' => $this->is_primary,
            'is_billing' => $this->is_billing,
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
