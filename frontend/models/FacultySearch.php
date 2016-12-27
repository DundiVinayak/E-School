<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Faculty;

/**
 * FacultySearch represents the model behind the search form about `frontend\models\Faculty`.
 */
class FacultySearch extends Faculty
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'joined_at', 'experience', 'user_id'], 'integer'],
            [['name', 'email'], 'safe'],
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
        $query = Faculty::find()
        ->where(['user_id'=>Yii::$app->user->id]);
        // ->asArray()
        // ->all();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'joined_at' => $this->joined_at,
            'experience' => $this->experience,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
