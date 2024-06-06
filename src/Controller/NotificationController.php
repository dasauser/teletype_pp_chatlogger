<?php

namespace App\Controller;

use App\Action\LogAction;

class NotificationController extends BaseController
{
    public function actions(): array
    {
        return [
            'index' => [
                'class' => LogAction::class,
                'postData' => \Yii::$app->request->post(),
            ],
        ];
    }

    public function verbs(): array
    {
        return [
            'index' => ['POST'],
        ];
    }
}