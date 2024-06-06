<?php

use App\Factory\NotificationLoggerFactory;

return [
    NotificationLoggerFactory::class => fn() => new NotificationLoggerFactory(\Yii::getAlias('@runtime/log')),
];