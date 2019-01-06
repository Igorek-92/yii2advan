<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property string $id_country
 * @property string $name
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_country' => 'id Страны',
            'name' => 'Страна',
        ];
    }

    public function getCity()
    {
        return $this->hasMany(City::className(), ['id_city' => 'id_country']);
    }
}
