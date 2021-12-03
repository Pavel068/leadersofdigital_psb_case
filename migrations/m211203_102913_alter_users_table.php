<?php

use yii\db\Migration;

/**
 * Class m211203_102913_alter_users_table
 */
class m211203_102913_alter_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('users', 'department', $this->string(255)->notNull()->after('role'));
        $this->addColumn('users', 'experience', $this->integer()->defaultValue(0)->after('level'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211203_102913_alter_users_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211203_102913_alter_users_table cannot be reverted.\n";

        return false;
    }
    */
}
