<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $name
 * @property string|null $role
 * @property string $email
 * @property string|null $password
 * @property string|null $access_token
 * @property int|null $points
 * @property int|null $level
 * @property string $created_at
 * @property string $updated_at
 *
 * @property UsersTasks[] $usersTasks
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            [['role'], 'string'],
            [['points', 'level'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'email', 'password', 'access_token'], 'string', 'max' => 255],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'role' => 'Роль',
            'email' => 'E-Mail',
            'password' => 'Пароль',
            'access_token' => 'Access Token',
            'points' => 'Очки',
            'level' => 'Уровень',
            'created_at' => 'Создано',
            'updated_at' => 'Обновлено',
        ];
    }

    /**
     * Gets query for [[UsersTasks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsersTasks()
    {
        return $this->hasMany(UsersTasks::className(), ['user_id' => 'id']);
    }
}
