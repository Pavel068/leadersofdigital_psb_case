<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users_tasks}}`.
 */
class m211202_210749_create_users_tasks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users_tasks}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'task_id' => $this->integer()->notNull(),
            'is_complete' => $this->boolean()->defaultValue(false),
            'deadline' => $this->date(),
            'created_at' => "TIMESTAMP NOT NULL default CURRENT_TIMESTAMP",
            'updated_at' => "TIMESTAMP NOT NULL default CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP",
        ], 'CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci ENGINE=InnoDB');

        $this->createIndex('users_tasks_user_id', 'users_tasks', 'user_id');
        $this->createIndex('users_tasks_task_id', 'users_tasks', 'task_id');

        $this->addForeignKey(
            'fk_users_tasks_user_id',
            'users_tasks',
            'user_id',
            'users',
            'id',
            'CASCADE',
            'CASCADE'
        );
        $this->addForeignKey(
            'fk_users_tasks_task_id',
            'users_tasks',
            'task_id',
            'tasks',
            'id',
            'CASCADE',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%users_tasks}}');
    }
}
