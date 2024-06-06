<?php

namespace App\Component\Notification;

use App\Component\Message\MessageInterface;

interface NotificationInterface extends \Stringable
{
    public function __construct(array $data);

    public function getMessage(): MessageInterface;
}