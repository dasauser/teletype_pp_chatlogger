<?php

namespace App\Component\Notification;

interface NotificationInterface extends \Stringable
{
    public function __construct(array $data);
}