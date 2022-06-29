<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[LicenseStatistics]].
 *
 * @see LicenseStatistics
 */
class LicenseStatisticsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return LicenseStatistics[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return LicenseStatistics|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
