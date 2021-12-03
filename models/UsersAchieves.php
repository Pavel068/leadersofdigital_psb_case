<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users_achieves".
 *
 * @property int $id
 * @property int $user_id
 * @property int $achieve_id
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Achieves $achieve
 * @property Users $user
 */
class UsersAchieves extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users_achieves';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'achieve_id'], 'required'],
            [['user_id', 'achieve_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['achieve_id'], 'exist', 'skipOnError' => true, 'targetClass' => Achieves::className(), 'targetAttribute' => ['achieve_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'achieve_id' => 'Achieve ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Achieve]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAchieve()
    {
        return $this->hasOne(Achieves::className(), ['id' => 'achieve_id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['id' => 'user_id']);
    }
}
