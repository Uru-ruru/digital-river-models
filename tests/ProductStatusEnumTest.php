<?php

namespace Uru\Tests\DR;

use PHPUnit\Framework\TestCase;
use Uru\DR\ProductStatusEnum;

/**
 * @internal
 *
 * @coversNothing
 */
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
        $this->expectException(\InvalidArgumentException::class);

        new ProductStatusEnum('test');
    }
}
