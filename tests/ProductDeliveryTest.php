<?php

namespace Uru\Tests\DR;

use PHPUnit\Framework\TestCase;
use Uru\DR\DeliveryTypeEnum;
use Uru\DR\DownloadLink;
use Uru\DR\LicenseKey;
use Uru\DR\ProductDelivery;

/**
 * @internal
 *
 * @coversNothing
 */
class ProductDeliveryTest extends TestCase
{
    public function testSetDeliveryType()
    {
        $dr = new ProductDelivery();
        $deliveryType = DeliveryTypeEnum::EL5_DEM_DWL;
        $dr->setDeliveryType(new DeliveryTypeEnum($deliveryType));

        $this->assertEquals('{"delivery_type":"'.$deliveryType.'"}', json_encode($dr));
    }

    public function testSetLicenseKeyDefinition()
    {
        $dr = new ProductDelivery();
        $dr->setLicenseKeyDefinition(new LicenseKey());

        $this->assertEquals('{"license_key_definition":[]}', json_encode($dr));
    }

    public function testSetDownloadLinkDefinition()
    {
        $dr = new ProductDelivery();
        $dr->setDownloadLinkDefinition(new DownloadLink());

        $this->assertEquals('{"download_link_definition":[]}', json_encode($dr));
    }
}
