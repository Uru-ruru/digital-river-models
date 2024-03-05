<?php

namespace Uru\Tests\DR;

use PHPUnit\Framework\TestCase;
use Uru\DR\Price;

/**
 * @internal
 *
 * @coversNothing
 */
class PriceTest extends TestCase
{
    public function testSetCurrency()
    {
        $dr = new Price();
        $dr->setCurrency('test');

        $this->assertEquals('{"currency":"test"}', json_encode($dr));
    }

    public function testSetPrice()
    {
        $dr = new Price();
        $dr->setPrice(1.11);

        $this->assertEquals('{"price":1.11}', json_encode($dr));
    }

    public function testSetPriceException()
    {
        $dr = new Price();

        $this->expectException(\TypeError::class);
        $dr->setPrice('test');
    }
}
