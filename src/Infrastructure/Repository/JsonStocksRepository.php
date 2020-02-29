<?php

namespace Infrastructure\Repository;

use Domain\Entity\Stocks;
use Domain\Entity\StocksCollection;
use Domain\Repository\StocksRepository;

class JsonStocksRepository implements StocksRepository
{
    private string $file;

    public function __construct(string $file)
    {
        $this->file = $file;
    }

    public function getAll(): StocksCollection
    {
        $stocksCollection = new StocksCollection;
        $json = json_decode(file_get_contents($this->file), true);
        if (isset($json['intraday'])) {
            foreach ($json['intraday'] as $key => $v) {
                $stocksCollection->addStocks(
                    new Stocks(
                        $key, $v['open'], $v['close'], $v['high'], $v['low'], $v['volume']
                    )
                );
            }
        }

        return $stocksCollection;
    }
}
