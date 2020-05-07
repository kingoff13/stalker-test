<?php

use yii\db\Migration;

/**
 * Handles the creation of table `character`.
 */
class m200507_104530_seed_character_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('character',
            [
                'id',
                'name',
                'killed',
                'password_hash',
                'created_at',
                'logged_at'
            ],
            [
                [1, 'Иван', 4, Yii::$app->getSecurity()->generatePasswordHash(time()), time(), time()],
                [2, 'Петр', 5, Yii::$app->getSecurity()->generatePasswordHash(time()), time(), time()],
                [3, 'Василий', 6, Yii::$app->getSecurity()->generatePasswordHash(time()), time(), time()],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('character');
    }
}
