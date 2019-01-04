<?php

namespace kouosl\siparis\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
//use kouosl\siparis\models;

/**
 * SiparisSearch represents the model behind the search form of `backend\models\Siparis`.
 */
class SiparisSearch extends Siparis
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['UrunID', 'UserID', 'UrunFiyat', 'SiparisID'], 'integer'],
            [['UrunAdi'], 'safe'],
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
    public function search($params, $userId)
    {
        $query = Siparis::find();

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
            'UrunID' => $this->UrunID,
            'UserID' => $userId,
            'UrunFiyat' => $this->UrunFiyat,
            'SiparisID' => $this->SiparisID,
        ]);

        $query->andFilterWhere(['like', 'UrunAdi', $this->UrunAdi]);

        return $dataProvider;
    }
}
