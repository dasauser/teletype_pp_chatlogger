<?php

namespace App\Action;

use App\Exception\UnknownNotificationType;
use App\Factory\NotificationLoggerFactory;
use App\Factory\NotificationFactory;
use App\Service\PingPongService;
use Monolog\Level;
use yii\base\Action;
use yii\di\Container;
use yii\web\BadRequestHttpException;

class LogAction extends Action
{
    public array $postData = [];
    public ?Container $container = null;

    public function run()
    {
        try {
            $notification = $this->container->get(NotificationFactory::class)->create($this->postData);

            $logger = $this->container->get(NotificationLoggerFactory::class)->create($notification);

            $logger->log(Level::Info, $notification);

            $this->container->get(PingPongService::class)
                ->tryToPlay($notification->getMessage());
        } catch (UnknownNotificationType) {
            throw new BadRequestHttpException("Unknown notification type");
        }

        return 'success';
    }
}