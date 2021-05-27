<?php

namespace Uru\Tests\DR;

use Uru\DR\ExportRestrictions;
use PHPUnit\Framework\TestCase;

class ExportRestrictionsTest extends TestCase
{

    public function testAddCountry()
    {
        $dr = new ExportRestrictions();
        $dr->addCountry('test');

        $this->assertEquals('{"countries":["test"]}', json_encode($dr));
    }

    public function testSetSelectionType()
    {
        $dr = new ExportRestrictions();
        $dr->setSelectionType('test');

        $this->assertEquals('{"selection_type":"test"}', json_encode($dr));
    }
}
