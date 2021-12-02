<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%answers}}`.
 */
class m211202_210033_create_answers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%answers}}', [
            'id' => $this->primaryKey(),
            'text' => $this->text()->notNull(),
            'question_id' => $this->integer()->notNull(),
            'is_right' => $this->boolean()->defaultValue(false),
            'created_at' => "TIMESTAMP NOT NULL default CURRENT_TIMESTAMP",
            'updated_at' => "TIMESTAMP NOT NULL default CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP",
        ], 'CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci ENGINE=InnoDB');

        $this->createIndex('answers_question_id', 'answers', 'question_id');

        $this->addForeignKey(
            'fk_answers_question_id',
            'answers',
            'question_id',
            'questions',
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
        $this->dropTable('{{%answers}}');
    }
}
