<?php

namespace Uru\Tests\DR;

use Uru\DR\ECCNIdEnum;
use Uru\DR\ExportRegulations;
use PHPUnit\Framework\TestCase;
use Uru\DR\LicenseExceptionsEnum;

class ExportRegulationsTest extends TestCase
{

    public function testSetCCATS()
    {
        $dr = new ExportRegulations();
        $dr->setCCATS("test");

        $this->assertEquals('{"ccats":"test"}', json_encode($dr));
    }

    public function testSetECCN()
    {
        $expected = ECCNIdEnum::EAR99;
        $dr = new ExportRegulations();
        $dr->setECCN((new ECCNIdEnum($expected)));

        $this->assertEquals('{"eccn_code":"'.$expected.'"}', json_encode($dr));

    }

    public function testSetCountryOfOrigin()
    {
        $dr = new ExportRegulations();
        $dr->setCountryOfOrigin("test");

        $this->assertEquals('{"country_of_origin":"test"}', json_encode($dr));
    }

    public function testSetLicenseException()
    {
        $expected = LicenseExceptionsEnum::NLR;
        $dr = new ExportRegulations();
        $dr->setLicenseException((new LicenseExceptionsEnum($expected)));

        $this->assertEquals('{"license_exception":"'.$expected.'"}', json_encode($dr));
    }

    public function testSetHarmonizeCode()
    {
        $dr = new ExportRegulations();
        $dr->setHarmonizeCode("test");

        $this->assertEquals('{"harmonize_code":"test"}', json_encode($dr));
    }
}
