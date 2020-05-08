<?php

namespace common\models;


use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "thing".
 *
 * @property int $id
 * @property string $name
 *
 * @property CharacterInventory[] $characterInventories
 */
class Thing extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'thing';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCharacterInventories()
    {
        return $this->hasMany(CharacterInventory::className(), ['thing_id' => 'id']);
    }
}
