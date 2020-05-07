<?php

use yii\db\Migration;

/**
 * Handles the creation of table `thing`.
 */
class m200507_104945_seed_thing_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('thing', ['id', 'name'], [
            [1, 'Автомат'],
            [2, 'Пистолет'],
            [3, 'Граната'],
            [4, 'Аптечка'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('thing');
    }
}
