<?php

namespace Uru\DR;

/**
 * Class Product
 * Create or update a product.
 */
class Product extends BaseDRModel
{
    private string $id = self::FIELD_NOT_SET;

    private string $vendor_id = self::FIELD_NOT_SET;

    /**
     * @var Image
     */
    private $image_definition = self::FIELD_NOT_SET;

    /**
     * @var Image
     */
    private $thumbnail_image_definition = self::FIELD_NOT_SET;

    private string $name = self::FIELD_NOT_SET;

    private string $version = self::FIELD_NOT_SET;

    /**
     * @var ProductTypeEnum
     */
    private $product_type = self::FIELD_NOT_SET;

    private string $product_code = self::FIELD_NOT_SET;

    private string $ean_code = self::FIELD_NOT_SET;

    /**
     * @var ProductStatusEnum
     */
    private $status = self::FIELD_NOT_SET;

    private string $default_currency = self::FIELD_NOT_SET;

    private bool $is_gross;

    /**
     * @var PriceScale[]
     */
    private $price_scale_definition = self::FIELD_NOT_SET;

    /**
     * @var Subscription
     */
    private $subscription_definition = self::FIELD_NOT_SET;

    /**
     * @var int
     */
    private $minimum_quantity = self::FIELD_NOT_SET;

    /**
     * @var int
     */
    private $maximum_quantity = self::FIELD_NOT_SET;

    private string $keywords = self::FIELD_NOT_SET;

    /**
     * @var ExportRestrictions
     */
    private $export_restrictions = self::FIELD_NOT_SET;

    /**
     * @var ExportRegulations
     */
    private $export_regulations = self::FIELD_NOT_SET;

    /**
     * @var DeliveryServicesSettings
     */
    private $delivery_services_settings = self::FIELD_NOT_SET;

    /**
     * @var Bundle[]
     */
    private $bundle_definition = self::FIELD_NOT_SET;

    private bool $allow_dynamic_prices;

    /**
     * @var ProductDescriptions[]
     */
    private $descriptions = self::FIELD_NOT_SET;

    /**
     * @var ProductDelivery[]
     */
    private $delivery_items = self::FIELD_NOT_SET;

    public function __construct()
    {
        $this->is_gross = false;
        $this->allow_dynamic_prices = true;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function setVendorId(string $vendor_id): void
    {
        $this->vendor_id = $vendor_id;
    }

    public function setImage(Image $image_definition): void
    {
        $this->image_definition = $image_definition;
    }

    public function setThumbnailImage(Image $thumbnail_image_definition): void
    {
        $this->thumbnail_image_definition = $thumbnail_image_definition;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setVersion(string $version): void
    {
        $this->version = $version;
    }

    public function setProductType(ProductTypeEnum $product_type): void
    {
        $this->product_type = $product_type;
    }

    public function setProductCode(string $product_code): void
    {
        $this->product_code = $product_code;
    }

    public function setEANCode(string $ean_code): void
    {
        $this->ean_code = $ean_code;
    }

    public function setStatus(ProductStatusEnum $status): void
    {
        $this->status = $status;
    }

    public function setDefaultCurrency(string $default_currency): void
    {
        $this->default_currency = $default_currency;
    }

    public function setGross(bool $is_gross): void
    {
        $this->is_gross = $is_gross;
    }

    /**
     * @param PriceScale[] $price_scale_definition
     */
    public function setPriceScale(array $price_scale_definition): void
    {
        $this->price_scale_definition = $price_scale_definition;
    }

    public function setSubscription(Subscription $subscription_definition): void
    {
        $this->subscription_definition = $subscription_definition;
    }

    public function setMaxQuantity(int $maximum_quantity): void
    {
        $this->maximum_quantity = $maximum_quantity;
    }

    public function setMinQuantity(int $minimum_quantity): void
    {
        $this->minimum_quantity = $minimum_quantity;
    }

    public function setKeywords(string $keywords): void
    {
        $this->keywords = $keywords;
    }

    public function setExportRestrictions(ExportRestrictions $export_restrictions): void
    {
        $this->export_restrictions = $export_restrictions;
    }

    public function setExportRegulations(ExportRegulations $export_regulations): void
    {
        $this->export_regulations = $export_regulations;
    }

    public function setDeliveryServicesSettings(DeliveryServicesSettings $delivery_services_settings): void
    {
        $this->delivery_services_settings = $delivery_services_settings;
    }

    public function setBundle(array $bundle_definition): void
    {
        $this->bundle_definition = $bundle_definition;
    }

    public function setAllowDynamicPrices(bool $allow_dynamic_prices): void
    {
        $this->allow_dynamic_prices = $allow_dynamic_prices;
    }

    public function setDescriptions(array $descriptions): void
    {
        $this->descriptions = $descriptions;
    }

    public function setProductDelivery(array $delivery_items): void
    {
        $this->delivery_items = $delivery_items;
    }

    public function getId(): ?string
    {
        return self::FIELD_NOT_SET === $this->id ? null : $this->id;
    }

    public function jsonSerialize(): array
    {
        $data = [
            'id' => $this->id,
            'vendor_id' => $this->vendor_id,
            'image_definition' => $this->image_definition,
            'thumbnail_image_definition' => $this->thumbnail_image_definition,
            'name' => $this->name,
            'version' => $this->version,
            'product_type' => $this->product_type,
            'product_code' => $this->product_code,
            'ean_code' => $this->ean_code,
            'status' => $this->status,
            'default_currency' => $this->default_currency,
            'is_gross' => $this->is_gross,
            'price_scale_definition' => $this->price_scale_definition,
            'subscription_definition' => $this->subscription_definition,
            'minimum_quantity' => $this->minimum_quantity,
            'maximum_quantity' => $this->maximum_quantity,
            'keywords' => $this->keywords,
            'export_restrictions' => $this->export_restrictions,
            'export_regulations' => $this->export_regulations,
            'delivery_services_settings' => $this->delivery_services_settings,
            'bundle_definition' => $this->bundle_definition,
            'allow_dynamic_prices' => $this->allow_dynamic_prices,
            'descriptions' => $this->descriptions,
            'delivery_items' => $this->delivery_items,
        ];

        return $this->filterUnsetFields($data);
    }
}
