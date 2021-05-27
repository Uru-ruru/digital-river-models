<?php

namespace Uru\Tests\DR;

use Uru\DR\DownloadLink;
use PHPUnit\Framework\TestCase;

class DownloadLinkTest extends TestCase
{

    public function testSetFileName()
    {
        $dr = new DownloadLink();
        $dr->setFileName('test');

        $this->assertEquals('{"file_name":"test"}', json_encode($dr));
    }

    public function testSetFileDescription()
    {
        $dr = new DownloadLink();
        $dr->setFileDescription('test');

        $this->assertEquals('{"file_description":"test"}', json_encode($dr));
    }
}
