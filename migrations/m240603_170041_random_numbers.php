<?php

use yii\db\Migration;

/**
 * Class m240603_170041_random_numbers
 */
class m240603_170041_random_numbers extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%random_numbers}}', [
            'id' => $this->primaryKey(),
            'random_number' => $this->integer(),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240603_170041_random_numbers cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240603_170041_random_numbers cannot be reverted.\n";

        return false;
    }
    */
}
