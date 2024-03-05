<?php

namespace Uru\Tests\DR;

use PHPUnit\Framework\TestCase;
use Uru\DR\ProductDescriptions;

/**
 * @internal
 *
 * @coversNothing
 */
class ProductDescriptionsTest extends TestCase
{
    public function testSetLanguage()
    {
        $dr = new ProductDescriptions();
        $dr->setLanguage('test');

        $this->assertEquals('{"language":"test"}', json_encode($dr));
    }

    public function testSetDisplayName()
    {
        $dr = new ProductDescriptions();
        $dr->setDisplayName('test');

        $this->assertEquals('{"display_name":"test"}', json_encode($dr));
    }

    public function testSetKeyTemplate()
    {
        $dr = new ProductDescriptions();
        $dr->setKeyTemplate('test');

        $this->assertEquals('{"key_template":"test"}', json_encode($dr));
    }

    public function testSetFullDescription()
    {
        $dr = new ProductDescriptions();
        $dr->setFullDescription('test');

        $this->assertEquals('{"full_description":"test"}', json_encode($dr));
    }

    public function testSetInstallNote()
    {
        $dr = new ProductDescriptions();
        $dr->setInstallNote('test');

        $this->assertEquals('{"install_note":"test"}', json_encode($dr));
    }

    public function testSetShortDescription()
    {
        $dr = new ProductDescriptions();
        $dr->setShortDescription('test');

        $this->assertEquals('{"short_description":"test"}', json_encode($dr));
    }
}
