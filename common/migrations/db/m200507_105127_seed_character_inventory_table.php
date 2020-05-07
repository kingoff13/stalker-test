<?php

use yii\db\Migration;

/**
 * Handles the creation of table `character_inventory`.
 */
class m200507_105127_seed_character_inventory_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('character_inventory',
            [
                'character_id',
                'thing_id',
                'used',
                'location'
            ],
            [
                [1, 2, 1, 1],
                [1, 1, 1, 2],
                [2, 1, 1, 1],
                [2, 4, 3, 3],
                [2, 4, 2, 1],
                [3, 2, 1, 3],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('character_inventory');
    }
}
