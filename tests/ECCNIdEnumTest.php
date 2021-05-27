<?php

namespace Uru\Tests\DR;

use InvalidArgumentException;
use Uru\DR\ECCNIdEnum;
use PHPUnit\Framework\TestCase;

class ECCNIdEnumTest extends TestCase
{

    public function testGetAllowedValues()
    {
        $expect = ECCNIdEnum::D002;
        $dr = new ECCNIdEnum($expect);
        $this->assertTrue(is_array($dr->getAllowedValues()));
        $this->assertEquals($expect, $dr->getValue());
    }

    public function testGetAllowedValuesException()
    {
        $this->expectException(InvalidArgumentException::class);

        new ECCNIdEnum('test');
    }
}
