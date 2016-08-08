<?php

namespace common\models\Search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Goods;

/**
 * GoodsSearch represents the model behind the search form about `common\models\Goods`.
 */
class GoodsSearch extends Goods
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_goods', 'prise', 'bye', 'sale', 'client', 'visible', 'hot', 'created_at', 'updated_at'], 'integer'],
            [['town', 'location', 'categories', 'tovar', 'general_image', 'properties', 'discription', 'delivery', 'phone', 'contacts'], 'safe'],
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
        $query = Goods::find();

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
            'id_goods' => $this->id_goods,
            'prise' => $this->prise,
            'bye' => $this->bye,
            'sale' => $this->sale,
            'client' => $this->client,
            'visible' => $this->visible,
            'hot' => $this->hot,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'town', $this->town])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'categories', $this->categories])
            ->andFilterWhere(['like', 'tovar', $this->tovar])
            ->andFilterWhere(['like', 'general_image', $this->general_image])
            ->andFilterWhere(['like', 'properties', $this->properties])
            ->andFilterWhere(['like', 'discription', $this->discription])
            ->andFilterWhere(['like', 'delivery', $this->delivery])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'contacts', $this->contacts]);

        return $dataProvider;
    }
}
