<?php

namespace App\Component\Notification;

class OperatorMessageNotification extends BaseMessageNotification implements NotificationInterface
{
    public function __toString(): string
    {
        return sprintf(
            "dialogId: %s, messageId: %s",
            $this->data['dialogId'] ?? 'empty',
            $this->data['messageId'] ?? 'empty',
        );
    }
}