<?php

namespace App\Service;

use App\Component\Message\MessageInterface;

class PingPongService
{
    public function __construct(protected \yii\httpclient\Client $httpClient)
    {
    }

    public function tryToPlay(MessageInterface $message): void
    {
        if (static::hasPing($message)) {
            $this->sendPong($message->getDialogId());
        }
    }

    protected function sendPong(int $dialogId): bool
    {
        return true;
    }

    protected static function hasPing(MessageInterface $message): bool
    {
        return str_contains($message->getText(), 'ping?');
    }
}