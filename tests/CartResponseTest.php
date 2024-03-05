<?php

namespace Uru\Tests\DR;

use PHPUnit\Framework\TestCase;
use Uru\DR\Response\Cart;

/**
 * @internal
 *
 * @coversNothing
 */
class CartResponseTest extends TestCase
{
    /**
     * @throws \JsonException
     */
    protected function setUp(): void
    {
        $content = file_get_contents(__DIR__.'/Stubs/cart_error_response.json');
        $this->response = json_decode($content, true, 512, JSON_THROW_ON_ERROR);
        $this->cart = new Cart($this->response);
    }

    public function testCartUrl(): void
    {
        $this->assertEquals($this->response['cart_url'], $this->cart->getCartUrl());
    }

    public function testWarningsCode(): void
    {
        $this->assertEquals($this->response['warnings'][0]['Code'], $this->cart->getWarnings()[0]->getCode());
    }

    public function testWarningsConsumerMessage(): void
    {
        $this->assertEquals(
            $this->response['warnings'][0]['consumer_message'],
            $this->cart->getWarnings()[0]->getConsumerMessage()
        );
    }

    public function testWarningsBuyerVatId(): void
    {
        $this->assertEquals(
            $this->response['warnings'][0]['parameters']['buyer_vat_id'],
            $this->cart->getWarnings()[0]->getBuyerVatId()
        );
    }
}
