<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "xabarlar".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $theme
 * @property string $message
 * @property int $created_at
 * @property int $status
 */
class Xabarlar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'xabarlar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'theme', 'message', 'created_at', 'status'], 'required'],
            [['message'], 'string'],
            [['name', 'email', 'theme'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'theme' => Yii::t('app', 'Theme'),
            'message' => Yii::t('app', 'Message'),
            'created_at' => Yii::t('app', 'Created At'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
