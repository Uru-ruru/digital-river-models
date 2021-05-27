<?php

namespace Uru\Tests\DR;

use Uru\DR\Bundle;
use Uru\DR\DeliveryServicesSettings;
use Uru\DR\ExportRegulations;
use Uru\DR\ExportRestrictions;
use Uru\DR\Image;
use Uru\DR\PriceScale;
use Uru\DR\Product;
use PHPUnit\Framework\TestCase;
use Uru\DR\ProductDelivery;
use Uru\DR\ProductDescriptions;
use Uru\DR\ProductStatusEnum;
use Uru\DR\ProductTypeEnum;
use Uru\DR\Subscription;

class ProductTest extends TestCase
{

    public function testSetKeywords()
    {
        $dr = new Product();
        $dr->setKeywords('test');

        $this->assertEquals('{"is_gross":false,"keywords":"test","allow_dynamic_prices":true}', json_encode($dr));
    }

    public function testSetDefaultCurrency()
    {
        $dr = new Product();
        $dr->setDefaultCurrency('test');

        $this->assertEquals('{"default_currency":"test","is_gross":false,"allow_dynamic_prices":true}', json_encode($dr));
    }

    public function testSetBundle()
    {
        $dr = new Product();
        $bundle[] = new Bundle();
        $dr->setBundle($bundle);

        $this->assertEquals('{"is_gross":false,"bundle_definition":[[]],"allow_dynamic_prices":true}', json_encode($dr));
    }

    public function testSetVersion()
    {
        $dr = new Product();
        $dr->setVersion('test');

        $this->assertEquals('{"version":"test","is_gross":false,"allow_dynamic_prices":true}', json_encode($dr));
    }

    public function testSetDeliveryServicesSettings()
    {
        $dr = new Product();
        $dr->setDeliveryServicesSettings((new DeliveryServicesSettings()));

        $this->assertEquals('{"is_gross":false,"delivery_services_settings":[],"allow_dynamic_prices":true}', json_encode($dr));
    }

    public function testSetGross()
    {
        $dr = new Product();
        $dr->setGross(true);

        $this->assertEquals('{"is_gross":true,"allow_dynamic_prices":true}', json_encode($dr));
    }

    public function testSetId()
    {
        $dr = new Product();
        $dr->setId(1);

        $this->assertEquals('{"id":"1","is_gross":false,"allow_dynamic_prices":true}', json_encode($dr));
    }

    public function testGetId()
    {
        $dr = new Product();
        $id = 1;
        $dr->setId($id);
        $expect = $dr->getId();

        $this->assertEquals($id, $expect);
    }

    public function testGetIdEmpty()
    {
        $dr = new Product();
        $expect = $dr->getId();

        $this->assertEquals('', $expect);
    }

    public function testSetName()
    {
        $dr = new Product();
        $dr->setName('test');

        $this->assertEquals('{"name":"test","is_gross":false,"allow_dynamic_prices":true}', json_encode($dr));
    }

    public function testSetThumbnailImage()
    {
        $dr = new Product();
        $dr->setThumbnailImage((new Image()));

        $this->assertEquals('{"thumbnail_image_definition":[],"is_gross":false,"allow_dynamic_prices":true}', json_encode($dr));
    }

    public function testSetAllowDynamicPrices()
    {
        $dr = new Product();
        $dr->setAllowDynamicPrices(false);

        $this->assertEquals('{"is_gross":false,"allow_dynamic_prices":false}', json_encode($dr));
    }

    public function testSetStatus()
    {
        $dr = new Product();
        $status = ProductStatusEnum::DEA;
        $dr->setStatus(new ProductStatusEnum($status));

        $this->assertEquals('{"status":"' . $status . '","is_gross":false,"allow_dynamic_prices":true}', json_encode($dr));
    }

    public function testSetSubscription()
    {
        $dr = new Product();
        $dr->setSubscription(new Subscription());

        $this->assertEquals('{"is_gross":false,"subscription":{"manual_renewal":true},"allow_dynamic_prices":true}', json_encode($dr));
    }

    public function testSetProductType()
    {
        $dr = new Product();
        $productType = ProductTypeEnum::AOP;
        $dr->setProductType(new ProductTypeEnum($productType));

        $this->assertEquals('{"product_type":"' . $productType . '","is_gross":false,"allow_dynamic_prices":true}', json_encode($dr));
    }

    public function testSetExportRegulations()
    {
        $dr = new Product();
        $dr->setExportRegulations(new ExportRegulations());

        $this->assertEquals('{"is_gross":false,"export_regulations":[],"allow_dynamic_prices":true}', json_encode($dr));
    }

    public function testSetProductDelivery()
    {
        $dr = new Product();
        $productDelivery[] = new ProductDelivery();
        $dr->setProductDelivery($productDelivery);

        $this->assertEquals('{"is_gross":false,"allow_dynamic_prices":true,"delivery_items":[[]]}', json_encode($dr));
    }

    public function testSetPriceScale()
    {
        $dr = new Product();
        $priceScale[] = new PriceScale();
        $dr->setPriceScale($priceScale);

        $this->assertEquals('{"is_gross":false,"price_scale_definition":[[]],"allow_dynamic_prices":true}', json_encode($dr));
    }

    public function testSetMinQuantity()
    {
        $dr = new Product();
        $dr->setMinQuantity(1);

        $this->assertEquals('{"is_gross":false,"minimum_quantity":1,"allow_dynamic_prices":true}', json_encode($dr));
    }

    public function testSetImage()
    {
        $dr = new Product();
        $dr->setImage(new Image());

        $this->assertEquals('{"image_definition":[],"is_gross":false,"allow_dynamic_prices":true}', json_encode($dr));
    }

    public function testSetDescriptions()
    {
        $dr = new Product();
        $productDescription[] = new ProductDescriptions();
        $dr->setDescriptions($productDescription);

        $this->assertEquals('{"is_gross":false,"allow_dynamic_prices":true,"descriptions":[[]]}', json_encode($dr));
    }

    public function testSetExportRestrictions()
    {
        $dr = new Product();
        $dr->setExportRestrictions(new ExportRestrictions());

        $this->assertEquals('{"is_gross":false,"export_restrictions":[],"allow_dynamic_prices":true}', json_encode($dr));
    }

    public function testSetVendorId()
    {
        $dr = new Product();
        $dr->setVendorId(1);

        $this->assertEquals('{"vendor_id":"1","is_gross":false,"allow_dynamic_prices":true}', json_encode($dr));
    }

    public function testSetMaxQuantity()
    {
        $dr = new Product();
        $dr->setMaxQuantity(1);

        $this->assertEquals('{"is_gross":false,"maximum_quantity":1,"allow_dynamic_prices":true}', json_encode($dr));
    }

    public function testSetEANCode()
    {
        $dr = new Product();
        $dr->setEANCode('test');

        $this->assertEquals('{"ean_code":"test","is_gross":false,"allow_dynamic_prices":true}', json_encode($dr));
    }

    public function testSetProductCode()
    {
        $dr = new Product();
        $dr->setProductCode('test');

        $this->assertEquals('{"product_code":"test","is_gross":false,"allow_dynamic_prices":true}', json_encode($dr));
    }
}
