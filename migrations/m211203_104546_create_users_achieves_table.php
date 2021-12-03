<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users_achieves}}`.
 */
class m211203_104546_create_users_achieves_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users_achieves}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'achieve_id' => $this->integer()->notNull(),
            'created_at' => "TIMESTAMP NOT NULL default CURRENT_TIMESTAMP",
            'updated_at' => "TIMESTAMP NOT NULL default CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP",
        ], 'CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci ENGINE=InnoDB');

        $this->createIndex('users_achieves_user_id', 'users_achieves', 'user_id');
        $this->createIndex('users_achieves_achieve_id', 'users_achieves', 'achieve_id');

        $this->addForeignKey(
            'fk_users_achieves_user_id',
            'users_achieves',
            'user_id',
            'users',
            'id',
            'CASCADE',
            'CASCADE'
        );
        $this->addForeignKey(
            'fk_users_achieves_achieve_id',
            'users_achieves',
            'achieve_id',
            'achieves',
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
        $this->dropTable('{{%users_achieves}}');
    }
}
