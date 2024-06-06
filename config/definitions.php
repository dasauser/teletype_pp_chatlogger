<?php

use App\Component\TeletypeToken;
use App\Factory\NotificationLoggerFactory;

$params = require 'env-params.php';

return [
    NotificationLoggerFactory::class => fn() => new NotificationLoggerFactory(\Yii::getAlias('@runtime/log')),
    TeletypeToken::class => fn() => new TeletypeToken($params['teletypeToken'] ?? ''),
];