<?php

namespace App\Factory;

use App\Component\Notification\ClientMessageNotification;
use App\Component\Notification\NotificationInterface;
use App\Component\Notification\OperatorMessageNotification;
use App\Exception\UnknownNotificationType;

class NotificationFactory
{
    /**
     * @throws UnknownNotificationType
     */
    public function create(array $postData): NotificationInterface
    {
        $isItClient = (bool)($postData['isItClient'] ?? false);

        return match(true) {
            $isItClient && isset($postData['client']) => new ClientMessageNotification($postData),
            isset($postData['operator']) && !$isItClient => new OperatorMessageNotification($postData),
            default => throw new UnknownNotificationType()
        };
    }
}