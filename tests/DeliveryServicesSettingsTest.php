<?php

namespace Uru\Tests\DR;

use Uru\DR\DeliveryServicesSettings;
use PHPUnit\Framework\TestCase;

class DeliveryServicesSettingsTest extends TestCase
{

    public function testSetDownloadProtectionProductId()
    {
        $dr = new DeliveryServicesSettings();
        $dr->setDownloadProtectionProductId(1);

        $this->assertEquals('{"download_protection_product_id":1}', json_encode($dr));
    }

    public function testSetBackupMediaProductId()
    {
        $dr = new DeliveryServicesSettings();
        $dr->setBackupMediaProductId(1);

        $this->assertEquals('{"backup_media_product_id":1}', json_encode($dr));
    }
}
