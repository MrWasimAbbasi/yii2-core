<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "license_statistics".
 *
 * @property int $id
 * @property string $license_no
 * @property string $name
 * @property string $father_name
 * @property string $cnic
 * @property string|null $address
 * @property string|null $licence_category
 * @property string $issue_date
 * @property string $expiry_date
 * @property string|null $other_information
 */
class LicenseStatistics extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'license_statistics';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['license_no', 'name', 'father_name', 'cnic', 'issue_date', 'expiry_date'], 'required'],
            [['issue_date', 'expiry_date'], 'safe'],
            [['other_information'], 'string'],
            [['license_no', 'name', 'father_name', 'cnic', 'address', 'licence_category'], 'string', 'max' => 255],
            [['license_no'], 'unique'],
            [['cnic'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'license_no' => Yii::t('app', 'License No'),
            'name' => Yii::t('app', 'Name'),
            'father_name' => Yii::t('app', 'Father Name'),
            'cnic' => Yii::t('app', 'Cnic'),
            'address' => Yii::t('app', 'Address'),
            'licence_category' => Yii::t('app', 'Licence Category'),
            'issue_date' => Yii::t('app', 'Issue Date'),
            'expiry_date' => Yii::t('app', 'Expiry Date'),
            'other_information' => Yii::t('app', 'Other Information'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return LicenseStatisticsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LicenseStatisticsQuery(get_called_class());
    }
}
