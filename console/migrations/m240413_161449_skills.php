<?php

use yii\db\Migration;

/**
 * Class m240413_161449_skills
 */
class m240413_161449_skills extends Migration
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

        $this->createTable('{{%skills}}', [
            'id' => $this->primaryKey(),


            'email' => $this->string()->notNull(),
            'phone' => $this->string()->notNull(),
            'telegram' => $this->string()->notNull(),
            'github' => $this->string()->notNull(),
            'address' => $this->string()->notNull(),

            'skill1_title' => $this->string()->notNull(),
            'skill1' => $this->float()->notNull(),

            'skill2_title' => $this->string()->notNull(),
            'skill2' => $this->float()->notNull(),

            'skill3_title' => $this->string()->notNull(),
            'skill3' => $this->float()->notNull(),

            'skill4_title' => $this->string()->notNull(),
            'skill4' => $this->float()->notNull(),

        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240413_161449_skills cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240413_161449_skills cannot be reverted.\n";

        return false;
    }
    */
}
