<?php

namespace App\Component\Notification;

use App\Component\Message\Message;
use App\Component\Message\MessageInterface;

abstract class BaseMessageNotification implements NotificationInterface
{
    private ?Message $message = null;

    public function __construct(protected array $data)
    {
    }

    public function getMessage(): MessageInterface
    {
        $this->message ??= new Message(
            $this->data['text'] ?? '',
            $this->data['dialogId'] ?? 0
        );
        return $this->message;
    }
}