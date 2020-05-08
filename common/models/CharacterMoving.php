<?php

namespace common\models;


use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "character_moving".
 *
 * @property int $id
 * @property int $character_id
 * @property int $location_id
 * @property int $visit_at
 *
 * @property Character $character
 * @property Location $location
 */
class CharacterMoving extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'character_moving';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['character_id', 'location_id', 'visit_at'], 'integer'],
            [['character_id'], 'exist', 'skipOnError' => true, 'targetClass' => Character::className(), 'targetAttribute' => ['character_id' => 'id']],
            [['location_id'], 'exist', 'skipOnError' => true, 'targetClass' => Location::className(), 'targetAttribute' => ['location_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('common', 'ID'),
            'character_id' => Yii::t('common', 'Character ID'),
            'location_id' => Yii::t('common', 'Location ID'),
            'visit_at' => Yii::t('common', 'Visit At'),
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
    public function getLocation()
    {
        return $this->hasOne(Location::className(), ['id' => 'location_id']);
    }
}
