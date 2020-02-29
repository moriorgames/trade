<?php

namespace Domain\Entity;

use DateTime;

class Stocks
{
    private DateTime $createdAt;
    private float $open, $close, $high, $low;
    private int $volume;

    public function __construct(string $createdAt, float $open, float $close, float $high, float $low, int $volume)
    {
        $this->createdAt = new DateTime($createdAt);
        $this->open = $open;
        $this->close = $close;
        $this->high = $high;
        $this->low = $low;
        $this->volume = $volume;
    }
}
