<?php

namespace Tests\Domain\Service;

use Domain\Repository\StocksRepository;
use Domain\Service\Trader;
use PHPUnit\Framework\TestCase;

class TraderTest extends TestCase
{
    public function test_is_able_to_iterate_over_cycles_with_an_strategy_and_extract_effectiveness()
    {
        $repository = $this->prophesize(StocksRepository::class);
        $sut = new Trader($repository->reveal());

        $effectiveness = $sut->execute();

        $this->assertNotEmpty($effectiveness);
    }
}
