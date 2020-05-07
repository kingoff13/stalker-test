<?php

use yii\db\Migration;

/**
 * Handles the creation of table `thing`.
 */
class m200507_110000_seed_location_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('location', ['id', 'name'], [
            [1, 'Припять'],
            [2, 'Рыжий лес'],
            [3, 'Кордон'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('location');
    }
}
