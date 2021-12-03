<?php

use yii\db\Migration;

/**
 * Class m211203_115622_seed_data
 */
class m211203_115622_seed_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('users', [
            'name' => 'Самый Главный',
            'email' => 'admin@admin.admin',
            'password' => Yii::$app->security->generatePasswordHash('123456'),
            'role' => 'admin',
            'department' => 'tech'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211203_115622_seed_data cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211203_115622_seed_data cannot be reverted.\n";

        return false;
    }
    */
}
