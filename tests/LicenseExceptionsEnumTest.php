<?php

namespace Uru\Tests\DR;

use InvalidArgumentException;
use Uru\DR\LicenseExceptionsEnum;
use PHPUnit\Framework\TestCase;

class LicenseExceptionsEnumTest extends TestCase
{

    public function testGetAllowedValues()
    {
        $expect = LicenseExceptionsEnum::APP;
        $dr = new LicenseExceptionsEnum($expect);
        $this->assertTrue(is_array($dr->getAllowedValues()));
        $this->assertEquals($expect, $dr->getValue());
    }

    public function testGetAllowedValuesException()
    {
        $this->expectException(InvalidArgumentException::class);

        new LicenseExceptionsEnum('test');
    }
}
