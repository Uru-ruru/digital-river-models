<?php

namespace Uru\Tests\DR;

use Uru\DR\Bundle;
use PHPUnit\Framework\TestCase;

class BundleTest extends TestCase
{

    public function testSetDisplayOrder()
    {
        $dr = new Bundle();
        $dr->setDisplayOrder(1);

        $this->assertEquals('{"display_order":1}', json_encode($dr));
    }

    public function testSetQuantity()
    {
        $dr = new Bundle();
        $dr->setQuantity(1);

        $this->assertEquals('{"quantity":1}', json_encode($dr));
    }

    public function testSetProductId()
    {
        $dr = new Bundle();
        $dr->setProductId(1);

        $this->assertEquals('{"product_id":1}', json_encode($dr));
    }
}
