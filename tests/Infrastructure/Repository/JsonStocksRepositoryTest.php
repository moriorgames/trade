<?php

use Infrastructure\Repository\JsonStocksRepository;
use PHPUnit\Framework\TestCase;

class JsonStocksRepositoryTest extends TestCase
{
    public function test_is_able_to_return_stocks_data_from_file()
    {
        $file = __DIR__ . '/../../../data/sample.json';
        $sut = new JsonStocksRepository($file);

        $result = $sut->getAll();

        $this->assertNotEmpty($result);
    }
}
