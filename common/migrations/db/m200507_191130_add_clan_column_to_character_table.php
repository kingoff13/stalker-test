<?php

use yii\db\Migration;

/**
 * Handles adding clan to table `character`.
 */
class m200507_191130_add_clan_column_to_character_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('character', 'clan', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('character', 'clan');
    }
}
