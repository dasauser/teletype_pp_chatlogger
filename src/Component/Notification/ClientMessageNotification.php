<?php

namespace App\Component\Notification;

class ClientMessageNotification extends BaseMessageNotification implements NotificationInterface
{
    public function __toString(): string
    {
        return $this->data['message'];
    }
}