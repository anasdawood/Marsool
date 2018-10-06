<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "needy".
 *
 * @property int $id
 * @property string $name
 * @property string $location
 * @property string $mobile_number
 * @property string $wishes
 */
class Needy extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'needy';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'location'], 'string', 'max' => 500],
            [['mobile_number'], 'string', 'max' => 10],
            [['wishes'], 'string', 'max' => 2000],
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
            'wishes' => Yii::t('frontend', 'Wishes'),
        ];
    }
}
