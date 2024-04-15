<?php

use yii\db\Migration;

/**
 * Class m240410_085236_info
 */
class m240410_085236_info extends Migration
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

        $this->createTable('{{%info}}', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string()->notNull(),
            'last_name' => $this->string()->notNull(),
            'job' => $this->string()->notNull(),
            'img' => $this->string()->notNull(),
            'age' => $this->integer()->notNull(),
            'language' => $this->string()->notNull(),
            'gender' => $this->integer()->notNull(),
            'cv_link' => $this->string()->notNull(),
            'content' => $this->text()->notNull(),

            'status' => $this->smallInteger()->notNull()->defaultValue(1),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240410_085236_info cannot be reverted.\n";

        return false;
    }   

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240410_085236_info cannot be reverted.\n";

        return false;
    }
    */
}
