<?php

namespace Uru\Tests\DR;

use PHPUnit\Framework\TestCase;
use Uru\DR\Address;

class AddressTest extends TestCase
{

    public function testSetAddress()
    {
        $dr = new Address();
        $dr->setAddress('test');

        $this->assertEquals('{"address_1":"test"}', json_encode($dr));

    }

    public function testSetCity()
    {
        $dr = new Address();
        $dr->setCity('test');

        $this->assertEquals('{"city":"test"}', json_encode($dr));
    }

    public function testSetFirstName()
    {
        $dr = new Address();
        $dr->setFirstName('test');

        $this->assertEquals('{"first_name":"test"}', json_encode($dr));
    }

    public function testSetEmail()
    {
        $dr = new Address();
        $dr->setEmail('test');

        $this->assertEquals('{"email":"test"}', json_encode($dr));
    }

    public function testSetPostalCode()
    {
        $dr = new Address();
        $dr->setPostalCode('test');

        $this->assertEquals('{"postal_code":"test"}', json_encode($dr));
    }

    public function testSetLastName()
    {
        $dr = new Address();
        $dr->setLastName('test');

        $this->assertEquals('{"last_name":"test"}', json_encode($dr));
    }

    public function testSetCompany()
    {
        $dr = new Address();
        $dr->setCompany('test');

        $this->assertEquals('{"company":"test"}', json_encode($dr));
    }

    public function testSetCountry()
    {
        $dr = new Address();
        $dr->setCountry('test');

        $this->assertEquals('{"country":"test"}', json_encode($dr));
    }
}
