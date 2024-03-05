<?php

namespace Uru\Tests\DR;

use PHPUnit\Framework\TestCase;
use Uru\DR\Address;
use Uru\DR\Cart;
use Uru\DR\CartItem;

/**
 * @internal
 *
 * @coversNothing
 */
class CartTest extends TestCase
{
    public function testSetBillingAddress()
    {
        $dr = new Cart();
        $dr->setBillingAddress(new Address());

        $this->assertEquals('{"payment_account":{"billing_address":[]}}', json_encode($dr));
    }

    public function testSetDisplayCurrency()
    {
        $dr = new Cart();
        $dr->setDisplayCurrency('test');

        $this->assertEquals('{"payment_account":[],"display_currency":"test"}', json_encode($dr));
    }

    public function testSetItems()
    {
        $dr = new Cart();
        $cartItems[] = new CartItem();
        $dr->setItems($cartItems);

        $this->assertEquals('{"items":[[]],"payment_account":[]}', json_encode($dr));

        $cartItems[] = new CartItem();
        $dr->setItems($cartItems);

        $this->assertEquals('{"items":[[],[]],"payment_account":[]}', json_encode($dr));
    }

    public function testSetProtect()
    {
        $dr = new Cart();
        $dr->setProtect('test');

        $this->assertEquals('{"payment_account":[],"protect":"test"}', json_encode($dr));
    }

    public function testSetShippingAddress()
    {
        $dr = new Cart();
        $dr->setShippingAddress(new Address());

        $this->assertEquals('{"payment_account":[],"shipping_address":[]}', json_encode($dr));
    }

    public function testSetFinalPageUrl()
    {
        $dr = new Cart();
        $dr->setFinalPageUrl('test');

        $this->assertEquals('{"payment_account":[],"final_page_url":"test"}', json_encode($dr));
    }

    public function testSetShopperId()
    {
        $dr = new Cart();
        $dr->setShopperId('test');

        $this->assertEquals('{"payment_account":[],"shopper_id":"test"}', json_encode($dr));
    }
}
