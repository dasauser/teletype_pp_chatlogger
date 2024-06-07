<?php

namespace App\Factory;

use App\Component\Notification\ClientMessageNotification;
use App\Component\Notification\NotificationInterface;
use App\Component\Notification\OperatorMessageNotification;
use App\Exception\UnknownNotificationType;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class NotificationLoggerFactory
{
    /**
     * @param string $logDir Absolute path to log directory.
     */
    public function __construct(protected string $logDir)
    {
    }

    public function create(NotificationInterface $notification): Logger
    {
        $file = match ($notification::class) {
            ClientMessageNotification::class => 'Clients.log',
            OperatorMessageNotification::class => 'Operators.log',
            default => throw new UnknownNotificationType()
        };

        $logger = new Logger('NotificationLogger');
        $logger->pushHandler(new StreamHandler($this->logDir . '/' . $file));

        return $logger;
    }
}