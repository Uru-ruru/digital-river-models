<?php

namespace Uru\Tests\DR;

use Uru\DR\DeliveryTypeEnum;
use PHPUnit\Framework\TestCase;
use InvalidArgumentException;

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
        $this->expectException(InvalidArgumentException::class);

        new DeliveryTypeEnum('test');
    }
}
