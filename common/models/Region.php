<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "region".
 *
 * @property string $id_region
 * @property string $id_country
 * @property string $name
 */
class Region extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'region';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_country'], 'required'],
            [['id_country'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_region' => 'Id Region',
            'id_country' => 'Страна',
            'name' => 'Город',
        ];
    }

    public function getCountry()
    {
        return $this->hasOne(Country::className(), ['id_country' => 'id_country']);
    }
}
