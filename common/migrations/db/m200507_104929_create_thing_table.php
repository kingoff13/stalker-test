<?php

use yii\db\Migration;

/**
 * Handles the creation of table `thing`.
 */
class m200507_104929_create_thing_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('thing', [
            'id' => $this->primaryKey(),
            'name' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('thing');
    }
}
