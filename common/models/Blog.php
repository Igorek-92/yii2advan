<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property string $url
 * @property int $status_id
 * @property int $sort
 * @property string $add_date
 * @property string $image
 * @property string $keyid
 * @property int|string author
 */
class Blog extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'url', 'image', 'keyid'], 'required'],
            [['text'], 'string'],
            [['sort'], 'integer'],
            [['status_id'], 'safe'],
            [['add_date'], 'safe'],
            [['author'], 'safe'],
            [['title', 'url'], 'string', 'max' => 150],
            [['image', 'keyid'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'Text',
            'url' => 'Url',
            'status_id' => 'Status ID',
            'sort' => 'Sort',
            'add_date' => 'Add Date',
            'image' => 'Image',
            'keyid' => 'Keyid',
            'author' => 'author',
        ];
    }

    private $_status_id;

    public function getStatus_idArray()
    {
        return $this->_status_id;
    }

    public function setStatus_idArray($value)
    {
        return $this->_status_id = (array)$value;
    }


}
