<?php

namespace Infrastructure\Repository;

use Domain\Repository\StocksRepository;

class JsonStocksRepository implements StocksRepository
{
    private string $file;

    public function __construct(string $file)
    {
        $this->file = $file;
    }

    public function getAll(): array
    {
        return [];
    }
}
