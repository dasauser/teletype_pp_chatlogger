<?php

namespace App\Service;

use App\Component\Notification\NotificationInterface;

class PingPong
{
    public function __construct(protected \yii\httpclient\Client $httpClient)
    {
    }

    public function pong(NotificationInterface $notification)
    {

    }

    protected function hasPing(NotificationInterface $notification): bool
    {

    }

    protected function sendPong(NotificationInterface $notification): bool
    {

    }
}