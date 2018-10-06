<?php

namespace frontend\models;

use Yii;
use \common\models\User;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;

/**
 * This is the model class for table "projects".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $goal
 * @property int $user
 * @property string $location
 * @property int $raised
 * @property string $dead_line
 * @property string $image
 */
class Projects extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public $imageFile;

    public static function tableName() {
        return 'projects';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['goal', 'user', 'raised', 'created_at', 'updated_at', 'created_by', 'updated_by','likes'], 'integer'],
            [['dead_line'], 'safe'],
            [['title'], 'string', 'max' => 500],
            [['description'], 'string', 'max' => 5000],
            [['location'], 'string', 'max' => 45],
            [['image'], 'string', 'max' => 2000],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'goal' => 'Goal',
            'user' => 'User',
            'location' => 'Location',
            'raised' => 'Raised',
            'dead_line' => 'Dead Line',
            'image' => 'Image',
        ];
    }

    public function upload() {
        if ($this->validate()) {
            $this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }

    public function getUser() {

        return User::find()->where(['id' => $this->user])->one();
    }
    
     public function getDoners() {

        return Donations::find()->where(['user' => $this->user])->one();
    }

    public function behaviors() {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    \yii\db\ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    \yii\db\ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
            ],
            'blameable' => [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'created_by',
                'updatedByAttribute' => 'updated_by',
            ],
        ];
    }

}
