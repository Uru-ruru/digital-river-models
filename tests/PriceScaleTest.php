<?php

namespace Uru\Tests\DR;

use Uru\DR\Price;
use Uru\DR\PriceScale;
use PHPUnit\Framework\TestCase;

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
