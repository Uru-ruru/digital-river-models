<?php

namespace Uru\Tests\DR;

use PHPUnit\Framework\TestCase;
use Uru\DR\Price;
use Uru\DR\PriceScale;

/**
 * @internal
 *
 * @coversNothing
 */
class PriceScaleTest extends TestCase
{
    public function testSetPrices()
    {
        $dr = new PriceScale();
        $prices[] = new Price();
        $dr->setPrices($prices);

        $this->assertEquals('{"prices":[[]]}', json_encode($dr));
    }

    public function testSetQuantityFrom()
    {
        $dr = new PriceScale();
        $dr->setQuantityFrom(1);

        $this->assertEquals('{"quantity_from":1}', json_encode($dr));
    }
}
