<?php

use yii\db\Migration;

/**
 * Class m240413_161500_educations
 */
class m240413_161500_educations extends Migration
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

        $this->createTable('{{%educations}}', [
            'id' => $this->primaryKey(),
            'start_year' => $this->integer()->notNull(),
            'end_year' => $this->integer()->notNull(),
            'title' => $this->string()->notNull(),
            'content' => $this->string()->notNull(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240413_161500_educations cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240413_161500_educations cannot be reverted.\n";

        return false;
    }
    */
}
