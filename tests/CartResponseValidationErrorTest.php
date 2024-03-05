<?php

namespace Uru\Tests\DR;

use PHPUnit\Framework\TestCase;
use Uru\DR\Response\Cart;

/**
 * @internal
 *
 * @coversNothing
 */
class CartResponseValidationErrorTest extends TestCase
{
    /**
     * @throws \JsonException
     */
    protected function setUp(): void
    {
        $content = file_get_contents(__DIR__.'/Stubs/cart_validation_error_response.json');
        $this->response = json_decode($content, true, 512, JSON_THROW_ON_ERROR);
        $this->cart = new Cart($this->response);
    }

    public function testCode(): void
    {
        $this->assertEquals($this->response['code'], $this->cart->getCode());
    }

    public function testConsumerMessage(): void
    {
        $this->assertEquals(
            $this->response['consumer_message'],
            $this->cart->getConsumerMessage()
        );
    }
}
