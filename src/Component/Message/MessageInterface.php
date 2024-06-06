<?php

namespace App\Component\Message;

interface MessageInterface
{
    public function __construct(string $text, int $dialogId);

    public function getDialogId(): int;

    public function getText(): int;
}