<?php

namespace Uru\Tests\DR;

use PHPUnit\Framework\TestCase;
use Uru\DR\ExportRestrictions;

/**
 * @internal
 *
 * @coversNothing
 */
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
