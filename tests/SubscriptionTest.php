<?php

namespace Uru\Tests\DR;

use Uru\DR\Subscription;
use PHPUnit\Framework\TestCase;

class SubscriptionTest extends TestCase
{

    public function testSetManualRenewal()
    {
        $dr = new Subscription();
        $dr->setManualRenewal(false);

        $this->assertEquals('{"manual_renewal":false}', json_encode($dr));
    }

    public function testSetIntervalId()
    {
        $dr = new Subscription();
        $dr->setIntervalId('test');

        $this->assertEquals('{"interval_id":"test","manual_renewal":true}', json_encode($dr));
    }
}
