<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BookSell;

/**
 * BookSellSearch represents the model behind the search form of `app\models\BookSell`.
 */
class BookSellSearch extends BookSell
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['ket', 'book_id'], 'safe'],
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
        $query = BookSell::find();

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

        $query ->joinWith('book');
        
        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            
        ]);

        $query  ->andFilterWhere(['like', 'ket', $this->ket])
                ->andFilterWhere(['like', 'book.title', $this->book_id]);

        return $dataProvider;
    }
}
