<?php

namespace Uru\Tests\DR;

use PHPUnit\Framework\TestCase;
use Uru\DR\LicenseKey;

/**
 * @internal
 *
 * @coversNothing
 */
class LicenseKeyTest extends TestCase
{
    public function testSetStaticKey()
    {
        $dr = new LicenseKey();
        $dr->setStaticKey('test');

        $this->assertEquals('{"static_key":"test"}', json_encode($dr));
    }

    public function testSetKeyForEachLicense()
    {
        $dr = new LicenseKey();
        $dr->setKeyForEachLicense(true);

        $this->assertEquals('{"key_for_each_license":true}', json_encode($dr));
    }

    public function testSetKeyListName()
    {
        $dr = new LicenseKey();
        $dr->setKeyListName('test');

        $this->assertEquals('{"key_list_name":"test"}', json_encode($dr));
    }

    public function testSetKeyGenerator()
    {
        $dr = new LicenseKey();
        $dr->setKeyGenerator('test');

        $this->assertEquals('{"key_generator":"test","key_generator_version":"3"}', json_encode($dr));
    }

    public function testSetKeyGeneratorVersion()
    {
        $dr = new LicenseKey();
        $dr->setKeyGeneratorVersion('test');

        $this->assertEquals('{"key_generator_version":"test"}', json_encode($dr));
    }
}
