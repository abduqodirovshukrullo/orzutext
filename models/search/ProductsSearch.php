<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Products;

/**
 * ProductsSearch represents the model behind the search form of `app\models\Products`.
 */
class ProductsSearch extends Products
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'parent_id', 'category_id', 'brand_id', 'status', 'order'], 'integer'],
            [['image', 'big_image', 'title_uz', 'title_en', 'title_ru', 'content_uz', 'content_en', 'content_ru'], 'safe'],
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
        $query = Products::find();

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
            'id' => $this->id,
            'parent_id' => $this->parent_id,
            'category_id' => $this->category_id,
            'brand_id' => $this->brand_id,
            'status' => $this->status,
            'order' => $this->order,
        ]);

        $query->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'big_image', $this->big_image])
            ->andFilterWhere(['like', 'title_uz', $this->title_uz])
            ->andFilterWhere(['like', 'title_en', $this->title_en])
            ->andFilterWhere(['like', 'title_ru', $this->title_ru])
            ->andFilterWhere(['like', 'content_uz', $this->content_uz])
            ->andFilterWhere(['like', 'content_en', $this->content_en])
            ->andFilterWhere(['like', 'content_ru', $this->content_ru]);

        return $dataProvider;
    }
}
