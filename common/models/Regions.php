<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "_regions".
 *
 * @property int $region_id
 * @property int $country_id
 * @property string $title_ru
 * @property string $title_ua
 * @property string $title_en
 */
class Regions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '_regions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['region_id', 'country_id'], 'required'],
            [['region_id', 'country_id'], 'integer'],
            [['title_ru', 'title_ua', 'title_en'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'region_id' => 'Region ID',
            'country_id' => 'Country ID',
            'title_ru' => 'Title Ru',
            'title_ua' => 'Title Ua',
            'title_en' => 'Title En',
        ];
    }

    public function getCountries()
    {
        return $this->hasOne(Countries::className(), ['region_id' => 'country_id']);
    }
}
