<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%quizzes}}`.
 */
class m211202_204639_create_quizzes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%quizzes}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull()->unique(),
            'points' => $this->integer()->null(),
            'is_active' => $this->boolean()->defaultValue(1),
            'created_at' => "TIMESTAMP NOT NULL default CURRENT_TIMESTAMP",
            'updated_at' => "TIMESTAMP NOT NULL default CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP",
        ], 'CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci ENGINE=InnoDB');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%quizzes}}');
    }
}
