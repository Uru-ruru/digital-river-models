<?php

namespace Uru\Tests\DR;

use InvalidArgumentException;
use Uru\DR\ProductStatusEnum;
use PHPUnit\Framework\TestCase;

class ProductStatusEnumTest extends TestCase
{

    public function testGetAllowedValues()
    {
        $expect = ProductStatusEnum::DEA;
        $dr = new ProductStatusEnum($expect);
        $this->assertTrue(is_array($dr->getAllowedValues()));
        $this->assertEquals($expect, $dr->getValue());
    }

    public function testGetAllowedValuesException()
    {
        $this->expectException(InvalidArgumentException::class);

        new ProductStatusEnum('test');
    }
}
