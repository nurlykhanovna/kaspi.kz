<?php

use yii\db\Migration;

/**
 * Class m180408_041034_create_table_letters
 */
class m180408_041034_create_table_letters extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('letters',[
            'id' => $this->primaryKey()->unsigned(),
            'old_upletter' => $this->string(10),
            'new_upletter' => $this->string(10),
            'old_lowletter' => $this->string(10),
            'new_lowletter' => $this->string(10)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('letters');
        /*echo "m180408_041034_create_table_letters cannot be reverted.\n";*/

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180408_041034_create_table_letters cannot be reverted.\n";

        return false;
    }
    */
}
