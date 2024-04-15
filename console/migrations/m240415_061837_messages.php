<?php

use yii\db\Migration;

/**
 * Class m240415_061837_messages
 */
class m240415_061837_messages extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%messages}}', [
            'name' => $this->string(255)->notNull(),
            'email' => $this->string(255)->notNull(),
            'theme' => $this->string(255)->notNull(),
            'message' => $this->text()->notNull(),

            'created_at' => $this->integer()->notNull(),
            'status' => $this->integer()->notNull()->defaultValue(0),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240415_061837_messages cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240415_061837_messages cannot be reverted.\n";

        return false;
    }
    */
}
