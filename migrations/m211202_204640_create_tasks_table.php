<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tasks}}`.
 */
class m211202_204640_create_tasks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tasks}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'description' => $this->text()->null(),
            'content_url' => $this->string(255)->null(),
            'quiz_id' => $this->integer()->notNull(),
            'created_at' => "TIMESTAMP NOT NULL default CURRENT_TIMESTAMP",
            'updated_at' => "TIMESTAMP NOT NULL default CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP",
        ], 'CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci ENGINE=InnoDB');

        $this->createIndex('tasks_quiz_id', 'tasks', 'quiz_id');

        $this->addForeignKey(
            'fk_tasks_quiz_id',
            'tasks',
            'quiz_id',
            'quizzes',
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
        $this->dropTable('{{%tasks}}');
    }
}
