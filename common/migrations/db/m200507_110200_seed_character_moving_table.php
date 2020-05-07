<?php

use yii\db\Migration;

/**
 * Handles the creation of table `thing`.
 */
class m200507_110200_seed_character_moving_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('character_moving',
            [
                'character_id',
                'location_id',
                'visit_at'
            ],
            [
                [1, 2, time()],
                [2, 3, time()],
                [3, 2, time()],
                [3, 1, time()],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('character_moving');
    }
}
