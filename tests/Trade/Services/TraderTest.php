<?php

namespace Tests\Trade\Services;

use PHPUnit\Framework\TestCase;
use Trade\Services\Trader;

class TraderTest extends TestCase
{
    public function test_is_able_to_iterate_over_cycles_with_an_strategy_and_extract_effectiveness()
    {
        $sut = new Trader;

        $effectiveness = $sut->execute();

        $this->assertNotEmpty($effectiveness);
    }
}
