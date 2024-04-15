<?php

use yii\db\Migration;

/**
 * Class m240413_161512_portfolio
 */
class m240413_161512_portfolio extends Migration
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

        $this->createTable('{{%portfolio}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'img' => $this->string()->notNull(),
            'link' => $this->string()->notNull(),
            'date' => $this->string()->notNull(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240413_161512_portfolio cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240413_161512_portfolio cannot be reverted.\n";

        return false;
    }
    */
}
