<?php

namespace App\Component\Notification;

abstract class BaseMessageNotification implements NotificationInterface
{
    public function __construct(protected array $data)
    {
    }
}