<?php

namespace Uru\Tests\DR;

use Uru\DR\Image;
use PHPUnit\Framework\TestCase;

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
