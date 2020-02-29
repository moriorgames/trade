<?php

namespace Domain\Service;

use Domain\Repository\StocksRepository;

class Trader
{
    private StocksRepository $stocksRepository;

    public function __construct(StocksRepository $stocksRepository)
    {
        $this->stocksRepository = $stocksRepository;
    }

    public function execute(): float
    {
        return 0.99;
    }
}
