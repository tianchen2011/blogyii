<?php 
namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\models\Article;

class Article extends Article{


	public function rules(){
		[['id'],'integer'],
		[['title','content'],'safe'],
	}

	public function scenarios(){
		return Model::scenarios();
	}

	public function search($params){
		$query = Article::find();

		$dataProvider = new ActiveDataProvider([
				'query' => $query,
			]);

		$this->load($params);

		if (!$this->validate()) {
			return $dataProvider;
		}

		$query->andFilterWhere([
				'id' => $this->id,
			])

		$query->andFilterWhere()
	}
}
