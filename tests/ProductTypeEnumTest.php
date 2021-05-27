<?php

namespace Uru\Tests\DR;

use InvalidArgumentException;
use Uru\DR\ProductTypeEnum;
use PHPUnit\Framework\TestCase;

class ProductTypeEnumTest extends TestCase
{

    public function testGetAllowedValues()
    {
        $expect = ProductTypeEnum::AOP;
        $dr = new ProductTypeEnum($expect);
        $this->assertTrue(is_array($dr->getAllowedValues()));
        $this->assertEquals($expect, $dr->getValue());
    }

    public function testGetAllowedValuesException()
    {
        $this->expectException(InvalidArgumentException::class);

        new ProductTypeEnum('test');
    }
}
