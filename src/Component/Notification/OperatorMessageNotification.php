<?php

namespace App\Component\Notification;

class OperatorMessageNotification extends BaseMessageNotification implements NotificationInterface
{
    public function __toString(): string
    {
        return $this->data['message'];
    }
}