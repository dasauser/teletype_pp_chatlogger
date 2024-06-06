<?php

namespace App\Service;

use App\Component\Message\MessageInterface;
use App\Component\TeletypeToken;
use App\Exception\TeletypeException;

class PingPongService
{
    public function __construct(
        protected \yii\httpclient\Client $httpClient,
        protected TeletypeToken $token
    )
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
        // Пока пусть будет так...
        $response = $this->httpClient->createRequest()
            ->setMethod('POST')
            ->setUrl('https://api.teletype.app/public/api/v1/message/send')
            ->setHeaders(['X-Auth-Token' => $this->token])
            ->setData(['dialogId' => $dialogId, 'text' => 'pong!'])
            ->send();
        if ($response->isOk) {
            return true;
        }
        switch ($response->statusCode) {
            // Что-нибудь с enum и с кучей разнотипных исключений.
            default:
                throw new TeletypeException('Some teletype error ');
        }
    }

    protected static function hasPing(MessageInterface $message): bool
    {
        return str_contains($message->getText(), 'ping?');
    }
}