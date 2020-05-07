<?php

use yii\db\Migration;

/**
 * Handles the creation of table `character_moving`.
 */
class m200507_110131_create_character_moving_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('character_moving', [
            'id' => $this->primaryKey(),
            'character_id' => $this->integer(),
            'location_id' => $this->integer(),
            'visit_at' => $this->integer()
        ]);

        $this->addForeignKey(
            'character_moving-character_id-fk',
            'character_moving',
            'character_id',
            'character',
            'id');

        $this->addForeignKey(
            'character_moving-location_id-fk',
            'character_moving',
            'location_id',
            'location',
            'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('character_moving-location_id-fk', 'character_moving');
        $this->dropForeignKey('character_moving-character_id-fk', 'character_moving');
        $this->dropTable('character_moving');
    }
}
