<?php

namespace Uru\Tests\DR;

use Uru\DR\CartItem;
use PHPUnit\Framework\TestCase;
use InvalidArgumentException;

class CartItemTest extends TestCase
{

    public function testSetVendorId()
    {
        $dr = new CartItem();
        $dr->setVendorId('test');

        $this->assertEquals('{"vendor_id":"test"}', json_encode($dr));
    }

    public function testSetQuantity()
    {
        $dr = new CartItem();
        $dr->setQuantity(1);

        $this->assertEquals('{"quantity":1}', json_encode($dr));
    }

    public function testSetDynPriceException()
    {
        $dr = new CartItem();

        $this->expectException(InvalidArgumentException::class);

        $dr->setDynPrice(1, 'test');
    }

    public function testSetDynPrice()
    {
        $dr = new CartItem();
        $dr->setProductId('1');
        $dr->setDynPrice(1, 'test');

        $this->assertEquals('{"product_id":"1","dyn_price":"1;d3be79778eabc8f70e77201da5affc67"}', json_encode($dr));
    }

    public function testAddAdditionals()
    {
        $dr = new CartItem();
        $dr->addAdditionals(["name" => "test", "value" => "test", "hidden" => true]);

        $this->assertEquals('{"additionals":[{"name":"test","value":"test","hidden":true}]}', json_encode($dr));
    }

    public function testSetProductId()
    {
        $dr = new CartItem();
        $dr->setProductId('test');

        $this->assertEquals('{"product_id":"test"}', json_encode($dr));
    }
}
