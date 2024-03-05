<?php

namespace Uru\Tests\DR;

use PHPUnit\Framework\TestCase;
use Uru\DR\IntervalIdEnum;
use Uru\DR\PriceScale;
use Uru\DR\Subscription;

/**
 * @internal
 *
 * @coversNothing
 */
class SubscriptionTest extends TestCase
{
    public function testSetManualRenewal()
    {
        $dr = new Subscription();
        $dr->setAllowManualRenewal(false);

        $this->assertEquals('{"allow_manual_renewal":false}', json_encode($dr));
    }

    public function testSetIntervalId()
    {
        $dr = new Subscription();
        $dr->setIntervalId(new IntervalIdEnum(IntervalIdEnum::YEA));

        $this->assertEquals('{"interval_id":"YEA","allow_manual_renewal":true}', json_encode($dr));
    }

    public function testSetPriceScale()
    {
        $dr = new Subscription();
        $priceScale[] = new PriceScale();
        $dr->setRenewalPriceScale($priceScale);

        $this->assertEquals('{"renewal_price_scale_definition":[[]],"allow_manual_renewal":true}', json_encode($dr));
    }
}
