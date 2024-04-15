<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "info".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $job
 * @property string $img
 * @property int $age
 * @property string $language
 * @property string $email
 * @property string $phone
 * @property string $telegram
 * @property string $github
 * @property string $address
 * @property int $status
 */
class Info extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'job', 'img', 'age', 'language', 'gender', 'cv_link','content', 'status'], 'required'],
            [['age', 'status', 'gender'], 'integer'],
            [['first_name', 'last_name', 'job', 'language'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'first_name' => Yii::t('app', 'Familiya'),
            'last_name' => Yii::t('app', 'Ism'),
            'job' => Yii::t('app', 'Kasbingiz'),
            'img' => Yii::t('app', 'Rasm'),
            'age' => Yii::t('app', 'Yosh'),
            'language' => Yii::t('app', 'Tillar'),
            'gender' => Yii::t('app', 'Gender'),
            'cv_link' => Yii::t('app', 'CV Link'),
            'content' => Yii::t('app', 'Content'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
