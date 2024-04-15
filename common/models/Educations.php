<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "educations".
 *
 * @property int $id
 * @property int $start_year
 * @property int $end_year
 * @property string $title
 * @property string $content
 */
class Educations extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'educations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['start_year', 'end_year', 'title', 'content'], 'required'],
            [['start_year', 'end_year'], 'integer'],
            [['title', 'content'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'start_year' => Yii::t('app', 'Start Year'),
            'end_year' => Yii::t('app', 'End Year'),
            'title' => Yii::t('app', 'Title'),
            'content' => Yii::t('app', 'Content'),
        ];
    }
}
