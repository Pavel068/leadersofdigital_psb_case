<?php

namespace app\models;

use Yii;

/**
 * @property int $id
 * @property string $name
 * @property string|null $role
 * @property string $department
 * @property string $email
 * @property string|null $password
 * @property string|null $access_token
 * @property int|null $points
 * @property int|null $level
 * @property int|null $experience
 * @property string $created_at
 * @property string $updated_at
 *
 * @property UsersAchieves[] $usersAchieves
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
            [['name', 'department', 'email'], 'required'],
            [['role'], 'string'],
            [['points', 'level', 'experience'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'department', 'email', 'password', 'access_token'], 'string', 'max' => 255],
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
            'department' => 'Подразделение',
            'email' => 'E-Mail',
            'password' => 'Пароль',
            'access_token' => 'Access Token',
            'points' => 'Очки',
            'level' => 'Уровень',
            'experience' => 'Опыт',
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

    /**
     * Gets query for [[UsersAchieves]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsersAchieves()
    {
        return $this->hasMany(UsersAchieves::className(), ['user_id' => 'id']);
    }
}
