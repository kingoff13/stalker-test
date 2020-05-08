<?php

namespace common\models;


use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "character".
 *
 * @property int $id
 * @property string $name
 * @property int $killed
 * @property string $clan
 * @property string $password_hash
 * @property int $created_at
 * @property int $logged_at
 *
 * @property CharacterInventory[] $characterInventories
 * @property CharacterMoving[] $characterMovings
 */
class Character extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'character';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['killed', 'created_at', 'logged_at'], 'integer'],
            [['name', 'password_hash', 'clan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('common', 'ID'),
            'name' => Yii::t('common', 'Name'),
            'killed' => Yii::t('common', 'Killed'),
            'clan' => Yii::t('common', 'Clan'),
            'password_hash' => Yii::t('common', 'Password Hash'),
            'created_at' => Yii::t('common', 'Created At'),
            'logged_at' => Yii::t('common', 'Logged At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCharacterInventories()
    {
        return $this->hasMany(CharacterInventory::className(), ['character_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCharacterMovings()
    {
        return $this->hasMany(CharacterMoving::className(), ['character_id' => 'id']);
    }
}
