<?php

namespace App\Component;

/**
 * Teletype API access token (string).
 */
final class TeletypeToken implements \Stringable
{
    public function __construct(protected string $token)
    {
    }

    public function __toString(): string
    {
        return $this->token;
    }
}