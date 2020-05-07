<?php

namespace common\models;


use yii\db\ActiveRecord;

/**
 * This is the model class for table "location".
 *
 * @property int $id
 * @property string $name
 *
 * @property CharacterMoving[] $characterMovings
 */
class Location extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'location';
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
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCharacterMovings()
    {
        return $this->hasMany(CharacterMoving::className(), ['location_id' => 'id']);
    }
}
