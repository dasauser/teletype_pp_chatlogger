<?php

namespace App\Component\Message;

class Message implements MessageInterface
{
    public function __construct(protected string $text, protected int $dialogId)
    {
    }

    public function getDialogId(): int
    {
        return $this->dialogId;
    }

    public function getText(): string
    {
        return $this->text;
    }
}