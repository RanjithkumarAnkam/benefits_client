<?php

namespace app\controllers;

use yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\User;
use app\models\SirFirmUsers;
use app\models\SirFirmUsersSearch;
use app\components\AccessRuleComponent;
use yii\filters\VerbFilter;
use app\models\Firms;
use app\models\FirmUsers;
use app\models\ClientUser;
use yii\data\Pagination;
use yii\data\ArrayDataProvider;

class SearchController extends BaseController { 
		public function behaviors() {
		return [ 
				'access' => [ 
						'class' => AccessControl::className(),
						'ruleConfig' => [
							'class' => AccessRuleComponent::className ()
						],
						'only' => [ 
								'index','firmsearch' 
						],
						'rules' => [ 
								[ 
										'allow' => true,
										'actions' => [ 
												'index'
										],
										'roles' => [ 
												User::ADMIN ,User::FIRM,User::CLIENT
										] 
								],
							
								
						]
						 
				],
				'verbs' => [ 
						'class' => VerbFilter::className (),
						'actions' => [
								/*'logout' => [
								 'post'
		]*/
		] 
				] 
		];
	}
	
		/* rendering layout */
	public $layout = 'main-layout';
	
	/* action for Search Results */
	public function actionIndex() {
		
		$user_type=Yii::$app->user->identity->usertype;
		
		$select =" u.usertype,u.user_id,u.username,";
		
		$sql='';
		$logged_id=Yii::$app->user->identity->user_id;
		$is_number_search=false;
		$key='';
		if(!empty(\Yii::$app->request->Get('key'))){
			$key=\Yii::$app->request->Get('key'); 
			if($key=='all'){
				$key='';
			}elseif($key=='num'){
				$key ='';
				$is_number_search=true;
			}else {
				$key .='%';
			}
		}
		
		if(!empty(\Yii::$app->request->Get('search'))){
			$key=\Yii::$app->request->Get('search').'%';
		}
	
		
		$sql_admin='';
		$sql_firm ='';
		$sql_client='';
		$where_clause='';
		$sql_select_admin='';
		$sql_select_firm='';
		$sql_select_client='';
		$key_where_clause='';
		$number_where_clause='';
		
		if($user_type==1){
			$sql_select_admin="CONCAT(au.first_name,' ',au.last_name) AS admin_user,au.phone as admin_contact,au.profile_pic as admin_pic,au.admin_id";
			$sql_admin=" LEFT JOIN tbl_sir_admin_users au ON u.user_id=au.user_id ";
			
			if($key){
				$key_where_clause.=" LCASE(au.first_name) LIKE :key ";
			}
		}
		
		if($user_type==1 || $user_type==2){
			$sql_select_firm="f.firm_id,fu.firm_user_id,f.firm_name,CONCAT(fu.first_name,' ',fu.last_name) AS firm_user,fu.phone as firm_contact,fu.profile_pic as firm_pic,f.firm_logo as firm_logo";
			$sql_firm=" LEFT JOIN tbl_sir_firm_users fu ON u.user_id=fu.user_id LEFT JOIN tbl_sir_firms f ON f.firm_id=fu.firm_id ";
			
			if($user_type==2){
				$firm_id=FirmUsers::findOne(['user_id'=>$logged_id]);
				
				$where_clause=" (f.firm_id=$firm_id->firm_id or c.client_id in (SELECT ts.client_id from tbl_sir_clients ts WHERE ts.firm_id=$firm_id->firm_id))";
			}
			
			if($key){
				if ($key_where_clause){
				$key_where_clause.="OR ";
				}
				$key_where_clause.=" LCASE(fu.first_name) LIKE :key OR LCASE(f.firm_name) LIKE :key ";
			}elseif ($is_number_search){
				$number_where_clause.=" f.firm_name regexp '^[0-9]+' ";
			}
		}
		
		if($user_type==1 || $user_type==2 || $user_type==3){
			$sql_select_client="c.client_name,c.client_id,cu.client_user_id,CONCAT(cu.first_name,' ',cu.last_name) AS client_user,cu.phone as client_contact,cu.profile_pic as client_pic,c.company_logo as company_logo";
			$sql_client=" LEFT JOIN tbl_sir_client_user cu ON u.user_id=cu.user_id LEFT JOIN tbl_sir_clients c ON c.client_id = cu.client_id ";
			
			if($user_type==3){
				$client_id=ClientUser::findOne(['user_id'=>$logged_id]);
				
				$where_clause=' (c.client_id='.$client_id->client_id.')';
			}
			
			if($key){
				if ($key_where_clause){
					$key_where_clause.=" OR ";
				}
				$key_where_clause.=" LCASE(cu.first_name) LIKE :key OR LCASE(c.client_name) LIKE :key";
			}elseif ($is_number_search){
				if ($number_where_clause){
					$number_where_clause.=" OR ";
				}
				$number_where_clause.=" c.client_name regexp '^[0-9]+' ";
			}
		}
		
		$final_select='';
		
		$final_select .=$sql_select_admin;
		
		if($final_select){
			$final_select .=','.$sql_select_firm;
		}else{
			$final_select .=$sql_select_firm;
		}
		
		if($final_select){
			$final_select .=','.$sql_select_client;
		}else{
			$final_select .=$sql_select_client;
		}
		
		$final_where="WHERE ";
		
		if($where_clause){
			$final_where .=$where_clause;
			
			if($key_where_clause){
				$final_where .= " AND ( ".$key_where_clause." )";
			}elseif ($number_where_clause){
				$final_where .=" AND ( ".$number_where_clause." )";
			}
			
		}else{
			if($key_where_clause){
			$final_where .= $key_where_clause;
			}elseif ($number_where_clause){
				$final_where .=$number_where_clause;
			}else{
				$final_where='';
			}
		}
		
		
		
		$final_sql="SELECT u.usertype,u.user_id,u.username,".$final_select." FROM tbl_sir_users u ".$sql_admin.$sql_firm.$sql_client." ".$final_where." ORDER BY u.created_date DESC";
		
		
		$count_sql=" SELECT COUNT(*) AS total, name FROM ( SELECT LCASE(substring(first_name,1,1)) as name FROM (";
		
		if($user_type==1){
		$count_sql .="SELECT au.first_name FROM tbl_sir_users u".$sql_admin.$sql_firm.$sql_client." WHERE au.first_name IS NOT NULL";
		
		}
		
		if($user_type==1 || $user_type==2){
			
			if($user_type==1){
			$count_sql .=" UNION ALL ";
			}
			$count_sql .="SELECT fu.first_name FROM tbl_sir_users u".$sql_admin.$sql_firm.$sql_client." WHERE fu.first_name IS NOT NULL";
			if($user_type==2){
				$count_sql .=" AND ".$where_clause;
			}
			
			$count_sql .=" UNION ALL ";
			$count_sql .="SELECT f.firm_name FROM tbl_sir_users u".$sql_admin.$sql_firm.$sql_client." WHERE f.firm_name IS NOT NULL";
			if($user_type==2){
				$count_sql .=" AND ".$where_clause;
			}
		}
		
		
		if($user_type==1 || $user_type==2 || $user_type==3){
			if($user_type==1 || $user_type==2){
				$count_sql .=" UNION ALL ";
			}
			$count_sql .="SELECT cu.first_name FROM tbl_sir_users u".$sql_admin.$sql_firm.$sql_client." WHERE cu.first_name IS NOT NULL";
			if($user_type==2 || $user_type==3){
				$count_sql .=" AND ".$where_clause;
			}
			
			$count_sql .=" UNION ALL ";
			$count_sql .="SELECT c.client_name FROM tbl_sir_users u".$sql_admin.$sql_firm.$sql_client." WHERE c.client_name IS NOT NULL";
			if($user_type==2 || $user_type==3){
				$count_sql .=" AND ".$where_clause;
			}
		}
		
		$count_sql .=") x ) t GROUP BY name";
		
		//echo $final_sql; die();
		
		$total_count_sql="SELECT count(u.user_id) FROM tbl_sir_users u ".$sql_admin.$sql_firm.$sql_client." ";
		if($user_type==2 || $user_type==3){
			$total_count_sql.='WHERE '.$where_clause;
		}
	
		$connection = \yii::$app->db;
		$model = $connection->createCommand($final_sql);
		
		
		if($key){
		$model->bindValue(':key', $key);
		}
		
		$users = $model->queryAll();
		
		//for pagination
		$pages = new Pagination(['totalCount' => count($users)]);
		$users_provider = new ArrayDataProvider([
				'allModels' => $users,
				]);
		
		
		$users= $users_provider->getModels();
		
		$model = $connection->createCommand($count_sql);
		$counts = $model->queryAll();
		
		$model = $connection->createCommand($total_count_sql);
		$total= $model->queryScalar();
		
		$count_arr=[];
		
		foreach ($counts as $count){

			$name=$count['name'];
			$count_arr[$name]=$count['total'];
		}
		$count_arr['total']=$total;

				
			return $this->render ( 'index' ,['users'=>$users,'counts'=>$count_arr,'pages'=>$pages,'users_provider'=>$users_provider]);
	}
	
 
}
