<?php

namespace Uru\Tests\DR;

use PHPUnit\Framework\TestCase;
use Uru\DR\Address;
use Uru\DR\Cart;
use Uru\DR\CartItem;
use Uru\DR\Response\Purchase;

/**
 * @internal
 *
 * @coversNothing
 */
class PurchaseResponseTest extends TestCase
{
    /**
     * @throws \JsonException
     */
    protected function setUp(): void
    {
        $content = file_get_contents(__DIR__.'/Stubs/request.json');
        $this->request = json_decode($content, true, 512, JSON_THROW_ON_ERROR);
        $this->purchase = new Purchase($this->request);
    }

    public function testBillingContract()
    {
        $this->assertEquals(
            $this->request['order_notification']['purchase']['customer_data']['billing_contact']['company'],
            $this->purchase->getBillingContact()->getCompany()
        );
        $this->assertEquals(
            $this->request['order_notification']['purchase']['customer_data']['billing_contact']['email'],
            $this->purchase->getBillingContact()->getEmail()
        );
        $this->assertEquals(
            $this->request['order_notification']['purchase']['customer_data']['billing_contact']['first_name'],
            $this->purchase->getBillingContact()->getFirstName()
        );
        $this->assertEquals(
            $this->request['order_notification']['purchase']['customer_data']['billing_contact']['last_name'],
            $this->purchase->getBillingContact()->getLastName()
        );
        $this->assertEquals(
            $this->request['order_notification']['purchase']['customer_data']['billing_contact']['phone'],
            $this->purchase->getBillingContact()->getPhone()
        );

        $this->assertEquals(
            $this->request['order_notification']['purchase']['customer_data']['billing_contact']['address']['city'],
            $this->purchase->getBillingContact()->getAddress()->getCity()
        );
        $this->assertEquals(
            $this->request['order_notification']['purchase']['customer_data']['billing_contact']['address']['country'],
            $this->purchase->getBillingContact()->getAddress()->getCountry()
        );
        $this->assertEquals(
            $this->request['order_notification']['purchase']['customer_data']['billing_contact']['address']['country_id'],
            $this->purchase->getBillingContact()->getAddress()->getCountryId()
        );
        $this->assertEquals(
            $this->request['order_notification']['purchase']['customer_data']['billing_contact']['address']['postal_code'],
            $this->purchase->getBillingContact()->getAddress()->getPostalCode()
        );
        $this->assertEquals(
            $this->request['order_notification']['purchase']['customer_data']['billing_contact']['address']['street1'],
            $this->purchase->getBillingContact()->getAddress()->getStreet1()
        );
    }

    public function testDeliveryContract()
    {
        $this->assertEquals(
            $this->request['order_notification']['purchase']['customer_data']['delivery_contact']['company'],
            $this->purchase->getDeliveryContact()->getCompany()
        );
        $this->assertEquals(
            $this->request['order_notification']['purchase']['customer_data']['delivery_contact']['email'],
            $this->purchase->getDeliveryContact()->getEmail()
        );
        $this->assertEquals(
            $this->request['order_notification']['purchase']['customer_data']['delivery_contact']['first_name'],
            $this->purchase->getDeliveryContact()->getFirstName()
        );
        $this->assertEquals(
            $this->request['order_notification']['purchase']['customer_data']['delivery_contact']['last_name'],
            $this->purchase->getDeliveryContact()->getLastName()
        );
        $this->assertEquals(
            $this->request['order_notification']['purchase']['customer_data']['delivery_contact']['phone'],
            $this->purchase->getDeliveryContact()->getPhone()
        );

        $this->assertEquals(
            $this->request['order_notification']['purchase']['customer_data']['delivery_contact']['address']['city'],
            $this->purchase->getDeliveryContact()->getAddress()->getCity()
        );
        $this->assertEquals(
            $this->request['order_notification']['purchase']['customer_data']['delivery_contact']['address']['country'],
            $this->purchase->getDeliveryContact()->getAddress()->getCountry()
        );
        $this->assertEquals(
            $this->request['order_notification']['purchase']['customer_data']['delivery_contact']['address']['country_id'],
            $this->purchase->getDeliveryContact()->getAddress()->getCountryId()
        );
        $this->assertEquals(
            $this->request['order_notification']['purchase']['customer_data']['delivery_contact']['address']['postal_code'],
            $this->purchase->getDeliveryContact()->getAddress()->getPostalCode()
        );
        $this->assertEquals(
            $this->request['order_notification']['purchase']['customer_data']['delivery_contact']['address']['street1'],
            $this->purchase->getDeliveryContact()->getAddress()->getStreet1()
        );
    }

    public function testShopperId()
    {
        $this->assertEquals(
            $this->request['order_notification']['purchase']['customer_data']['shopper_id'],
            $this->purchase->getShopperId()
        );
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
