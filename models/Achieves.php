<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "achieves".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $url
 * @property string $created_at
 * @property string $updated_at
 *
 * @property UsersAchieves[] $usersAchieves
 */
class Achieves extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'achieves';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'url'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'description', 'url'], 'string', 'max' => 255],
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
            'url' => 'URL',
            'created_at' => 'Создано',
            'updated_at' => 'Обновлено',
        ];
    }

    /**
     * Gets query for [[UsersAchieves]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsersAchieves()
    {
        return $this->hasMany(UsersAchieves::className(), ['achieve_id' => 'id']);
    }
}
