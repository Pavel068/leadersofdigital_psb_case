<?php

use yii\db\Migration;

/**
 * Class m211203_103605_alter_tasks_table
 */
class m211203_103605_alter_tasks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('tasks', 'department', $this->string(255)->notNull()->after('id'));
        $this->addColumn('tasks', 'type', $this->string(255)->notNull()->after('department'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211203_103605_alter_tasks_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211203_103605_alter_tasks_table cannot be reverted.\n";

        return false;
    }
    */
}
