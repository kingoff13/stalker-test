<?php

use yii\db\Migration;

/**
 * Handles the creation of table `character_inventory`.
 */
class m200507_105027_create_character_inventory_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('character_inventory', [
            'id' => $this->primaryKey(),
            'character_id' => $this->integer(),
            'thing_id' => $this->integer(),
            'used' => $this->integer(),
            'location' => $this->integer()
        ]);

        $this->addForeignKey(
            'character_inventory-character_id-fk',
            'character_inventory',
            'character_id',
            'character',
            'id');

        $this->addForeignKey(
            'character_inventory-thing_id-fk',
            'character_inventory',
            'thing_id',
            'thing',
            'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('character_inventory-thing_id-fk', 'character_inventory');
        $this->dropForeignKey('character_inventory-character_id-fk', 'character_inventory');
        $this->dropTable('character_inventory');
    }
}
