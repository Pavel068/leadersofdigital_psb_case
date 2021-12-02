<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m211202_155432_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'role' => "ENUM('admin', 'novice', 'worker', 'manager', 'coach')",
            'email' => $this->string(255)->notNull()->unique(),
            'password' => $this->string(255)->null(),
            'access_token' => $this->string(255)->null(),
            'points' => $this->integer()->defaultValue(0),
            'level' => $this->smallInteger()->defaultValue(0),
            'created_at' => "TIMESTAMP NOT NULL default CURRENT_TIMESTAMP",
            'updated_at' => "TIMESTAMP NOT NULL default CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP",
        ], 'CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci ENGINE=InnoDB');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%users}}');
    }
}
