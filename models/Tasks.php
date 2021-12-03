<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tasks".
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string|null $content_url
 * @property int $quiz_id
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Quizzes $quiz
 * @property UsersTasks[] $usersTasks
 */
class Tasks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tasks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'quiz_id'], 'required'],
            [['description'], 'string'],
            [['quiz_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'content_url'], 'string', 'max' => 255],
            [['quiz_id'], 'exist', 'skipOnError' => true, 'targetClass' => Quizzes::className(), 'targetAttribute' => ['quiz_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'description' => 'Описание',
            'content_url' => 'Ссылка на контент',
            'quiz_id' => 'Викторина',
            'created_at' => 'Создано',
            'updated_at' => 'Обновлено',
        ];
    }

    /**
     * Gets query for [[Quiz]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getQuiz()
    {
        return $this->hasOne(Quizzes::className(), ['id' => 'quiz_id']);
    }

    /**
     * Gets query for [[UsersTasks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsersTasks()
    {
        return $this->hasMany(UsersTasks::className(), ['task_id' => 'id']);
    }
}
