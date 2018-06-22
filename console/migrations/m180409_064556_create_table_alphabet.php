<?php

use yii\db\Migration;

/**
 * Class m180409_064556_create_table_alphabet
 */
class m180409_064556_create_table_alphabet extends Migration
{
    /**
     * {@inheritdoc}
     */
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('alphabet',[
            'id' => $this->primaryKey()->unsigned(),
            'letter' => $this->string(100),
            'description' => $this->string(100),
            'imgURL' => $this->string(100),
            'audioURL' => $this->string(100),
            'bgColor' => $this->string(100)
        ]);

    }

    public function down()
    {
        $this->dropTable('alphabet');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180409_064556_create_table_alphabet cannot be reverted.\n";

        return false;
    }
    */
}
