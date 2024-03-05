<?php

namespace Uru\Tests\DR;

use PHPUnit\Framework\TestCase;
use Uru\DR\DeliveryTypeEnum;

/**
 * @internal
 *
 * @coversNothing
 */
class DeliveryTypeEnumTest extends TestCase
{
    public function testGetAllowedValues()
    {
        $expect = DeliveryTypeEnum::EL5_DEM_DWL;
        $dr = new DeliveryTypeEnum($expect);
        $this->assertTrue(is_array($dr->getAllowedValues()));
        $this->assertEquals($expect, $dr->getValue());
    }

    public function testGetAllowedValuesException()
    {
        $this->expectException(\InvalidArgumentException::class);

        new DeliveryTypeEnum('test');
    }
}
