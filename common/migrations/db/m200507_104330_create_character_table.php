<?php

use yii\db\Migration;

/**
 * Handles the creation of table `character`.
 */
class m200507_104330_create_character_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('character', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'killed' => $this->integer(),
            'password_hash' => $this->string(),
            'created_at' => $this->integer(),
            'logged_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('character');
    }
}
