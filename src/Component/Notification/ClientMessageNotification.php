<?php

namespace App\Component\Notification;

class ClientMessageNotification extends BaseMessageNotification implements NotificationInterface
{
    public function __toString(): string
    {
        $clientId = $this->data['client']['id'] ?? 'empty';
        $clientName = $this->data['client']['name'] ?? 'empty';
        return sprintf(
            "client: %s, dialogId: %s, text: %s",
            "$clientId, $clientName",
            $this->data['dialogId'] ?? 'empty',
            $this->data['text'] ?? 'empty',
        );
    }
}