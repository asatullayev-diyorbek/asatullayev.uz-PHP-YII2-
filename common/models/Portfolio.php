<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "portfolio".
 *
 * @property int $id
 * @property string $title
 * @property string $img
 * @property string $link
 * @property int $date
 */
class Portfolio extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'portfolio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'img', 'link', 'date'], 'required'],
            [['date'], 'date', 'format' => 'yyyy-MM'],
            [['title', 'img', 'link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'img' => Yii::t('app', 'Rasm'),
            'link' => Yii::t('app', 'Link'),
            'date' => Yii::t('app', 'Sana (yil va oy)'),
        ];
    }
}
