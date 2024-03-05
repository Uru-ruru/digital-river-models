<?php

namespace Uru\Tests\DR;

use PHPUnit\Framework\TestCase;
use Uru\DR\Image;

/**
 * @internal
 *
 * @coversNothing
 */
class ImageTest extends TestCase
{
    public function testSetFileName()
    {
        $dr = new Image();
        $dr->setFileName('test');

        $this->assertEquals('{"file_name":"test"}', json_encode($dr));
    }

    public function testSetData()
    {
        $dr = new Image();
        $dr->setData('test');

        $this->assertEquals('{"data":"test"}', json_encode($dr));
    }
}
