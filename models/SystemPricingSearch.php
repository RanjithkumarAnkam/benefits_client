<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SystemPricing;
use yii\data\ArrayDataProvider;

/**
 * SystemPricingSearch represents the model behind the search form about `app\models\SystemPricing`.
 */
class SystemPricingSearch extends SystemPricing
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pricing_id', 'client_number', 'module_id', 'package_type', 'status', 'created_by', 'modified_by'], 'integer'],
            [['amount'], 'number'],
            [['created_date', 'modified_date'], 'safe'],
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
        $query = SystemPricing::find();

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
            'pricing_id' => $this->pricing_id,
            'client_number' => $this->client_number,
            'module_id' => $this->module_id,
            'package_type' => $this->package_type,
            'amount' => $this->amount,
            'status' => $this->status,
            'created_date' => $this->created_date,
            'created_by' => $this->created_by,
            'modified_date' => $this->modified_date,
            'modified_by' => $this->modified_by,
        ]);

        return $dataProvider;
    }
    
    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ArrayDataProvider
     */
    public function searcharray($params)
    {
    	$connection = \Yii::$app->db;
    	$sql = "SELECT
				`client_number`,`module_id`,SUM(case when `package_type` ='24' then `amount` else 0 end) basic,
				SUM(case when `package_type` ='25' then `amount` else 0 end) full_service,
				SUM(case when `package_type` ='26' then `amount` else 0 end) bulk
				from tbl_sir_system_pricing ";
    	
    	$sql .= " WHERE module_id=".$this->module_id."";
    	$sql .= " group by `client_number`";
    	$data = $connection->createCommand($sql)->queryAll();
    	
    	$provider = new ArrayDataProvider([
    			'allModels' => $data,
    			
    			'sort' => [
    			'attributes' => ['client_number', 'basic','full_service','bulk'],
    			],
    			]);
    	
    	return $provider;
    }
}
