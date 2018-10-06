<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "volunteer".
 *
 * @property int $id
 * @property string $name
 * @property string $location
 * @property string $mobile_number
 * @property string $experties
 */
class Volunteer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'volunteer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 200],
            [['location'], 'string', 'max' => 500],
            [['mobile_number'], 'string', 'max' => 10],
            [['experties'], 'string', 'max' => 2000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('frontend', 'ID'),
            'name' => Yii::t('frontend', 'Name'),
            'location' => Yii::t('frontend', 'Location'),
            'mobile_number' => Yii::t('frontend', 'Mobile Number'),
            'experties' => Yii::t('frontend', 'Experties'),
        ];
    }
}
