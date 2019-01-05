<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "_countries".
 *
 * @property int $country_id
 * @property string $title_ru
 * @property string $title_ua
 * @property string $title_en
 */
class Countries extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '_countries';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country_id'], 'required'],
            [['country_id'], 'integer'],
            [['title_ru', 'title_ua', 'title_en'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'country_id' => 'Country ID',
            'title_ru' => 'Title Ru',
            'title_ua' => 'Title Ua',
            'title_en' => 'Title En',
        ];
    }


    public function getRegions()
    {
        return $this->hasMany(Regions::className(), ['region_id' => 'country_id']);
    }


}
