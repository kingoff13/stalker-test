<?php

namespace common\models\enums;

use yii2mod\enum\helpers\BaseEnum;

class ThingLocationEnum extends BaseEnum
{
    const BACKPACK = 1;
    const BELT = 2;
    const STORAGE = 3;

    public static $messageCategory = 'common';

    /**
     * @var array
     */
    public static $list = [
        self::BACKPACK => 'Backpack',
        self::BELT => 'Belt',
        self::STORAGE => 'Storage',
    ];
}