<?php

namespace common\models;


use yii\db\ActiveRecord;

/**
 * This is the model class for table "character_inventory".
 *
 * @property int $id
 * @property int $character_id
 * @property int $thing_id
 * @property int $used
 * @property int $location
 *
 * @property Character $character
 * @property Thing $thing
 */
class CharacterInventory extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'character_inventory';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['character_id', 'thing_id', 'used', 'location'], 'integer'],
            [['character_id'], 'exist', 'skipOnError' => true, 'targetClass' => Character::className(), 'targetAttribute' => ['character_id' => 'id']],
            [['thing_id'], 'exist', 'skipOnError' => true, 'targetClass' => Thing::className(), 'targetAttribute' => ['thing_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'character_id' => 'Character ID',
            'thing_id' => 'Thing ID',
            'used' => 'Used',
            'location' => 'Location',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCharacter()
    {
        return $this->hasOne(Character::className(), ['id' => 'character_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getThing()
    {
        return $this->hasOne(Thing::className(), ['id' => 'thing_id']);
    }
}
