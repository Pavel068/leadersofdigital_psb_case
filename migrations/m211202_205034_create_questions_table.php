<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%quizzes_questions}}`.
 */
class m211202_205034_create_questions_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%questions}}', [
            'id' => $this->primaryKey(),
            'quiz_id' => $this->integer()->notNull(),
            'question_text' => $this->text()->notNull(),
            'created_at' => "TIMESTAMP NOT NULL default CURRENT_TIMESTAMP",
            'updated_at' => "TIMESTAMP NOT NULL default CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP",
        ], 'CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci ENGINE=InnoDB');

        $this->createIndex('questions_quiz_id', 'questions', 'quiz_id');

        $this->addForeignKey(
            'fk_questions_quiz_id',
            'questions',
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
        $this->dropTable('{{%questions}}');
    }
}
