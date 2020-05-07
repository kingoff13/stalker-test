<?php

use yii\db\Migration;

/**
 * Class m200507_191310_seed_character_table
 */
class m200507_191310_seed_character_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->update('character', ['clan' => 'Долг'], ['id' => 1]);
        $this->update('character', ['clan' => 'Свобода'], ['id' => 2]);
        $this->update('character', ['clan' => 'Монолит'], ['id' => 3]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->update('character', ['clan' => null]);
    }
}
