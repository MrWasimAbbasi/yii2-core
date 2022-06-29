<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\LicenseStatistics;

/**
 * LicenseStatisticsFilter represents the model behind the search form of `app\models\LicenseStatistics`.
 */
class LicenseStatisticsFilter extends LicenseStatistics
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['license_no', 'name', 'father_name', 'cnic', 'address', 'licence_category', 'issue_date', 'expiry_date', 'other_information'], 'safe'],
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
        $query = LicenseStatistics::find();

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
        ]);

        $query->andFilterWhere(['like', 'license_no', $this->license_no])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'father_name', $this->father_name])
            ->andFilterWhere(['like', 'cnic', $this->cnic])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'licence_category', $this->licence_category])
            ->andFilterWhere(['like', 'issue_date', $this->issue_date])
            ->andFilterWhere(['like', 'expiry_date', $this->expiry_date])
            ->andFilterWhere(['like', 'other_information', $this->other_information]);

        return $dataProvider;
    }
}
