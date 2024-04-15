<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "skills".
 *
 * @property int $id
 * @property string $email
 * @property string $phone
 * @property string $telegram
 * @property string $github
 * @property string $address
 * @property string $skill1_title
 * @property float $skill1
 * @property string $skill2_title
 * @property float $skill2
 * @property string $skill3_title
 * @property float $skill3
 * @property string $skill4_title
 * @property float $skill4
 */
class Skills extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skills';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'phone', 'telegram', 'github', 'address', 'skill1_title', 'skill1', 'skill2_title', 'skill2', 'skill3_title', 'skill3', 'skill4_title', 'skill4'], 'required'],
            [['skill1', 'skill2', 'skill3', 'skill4'], 'number'],
            [['email', 'phone', 'telegram', 'github', 'address', 'skill1_title', 'skill2_title', 'skill3_title', 'skill4_title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'email' => Yii::t('app', 'Email'),
            'phone' => Yii::t('app', 'Phone'),
            'telegram' => Yii::t('app', 'Telegram'),
            'github' => Yii::t('app', 'Github'),
            'address' => Yii::t('app', 'Address'),
            'skill1_title' => Yii::t('app', 'Skill1 Title'),
            'skill1' => Yii::t('app', 'Skill1'),
            'skill2_title' => Yii::t('app', 'Skill2 Title'),
            'skill2' => Yii::t('app', 'Skill2'),
            'skill3_title' => Yii::t('app', 'Skill3 Title'),
            'skill3' => Yii::t('app', 'Skill3'),
            'skill4_title' => Yii::t('app', 'Skill4 Title'),
            'skill4' => Yii::t('app', 'Skill4'),
        ];
    }
}
