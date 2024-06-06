<?php

namespace App\Action;

use App\Exception\UnknownNotificationType;
use App\Factory\NotificationFactory;
use yii\base\Action;
use yii\web\BadRequestHttpException;

class LogAction extends Action
{
    public array $postData = [];

    public function run()
    {
        try {
            $notification = \Yii::$container->get(NotificationFactory::class)->create($this->postData);
        } catch (UnknownNotificationType) {
            throw new BadRequestHttpException("Unknown notification type");
        }
        return $notification;
    }
}