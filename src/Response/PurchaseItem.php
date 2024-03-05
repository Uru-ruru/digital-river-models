<?php

namespace Uru\DR\Response;

class PurchaseItem extends BaseResponse
{
    private array $additional_information;

    private string $currency;

    private string $delivery_type;

    private float $discount;

    private float $extended_download_price;

    private float $manual_order_price;

    private int $notification_no;

    private int $product_id;

    private string $product_name;

    private float $product_single_price;

    private int $quantity;

    private int $running_no;

    private float $shipping_price;

    private float $shipping_vat_pct;

    private ?PurchaseItemSubscription $subscription = null;

    private float $vat_pct;

    private ?string $your_product_id = null;

    public function getAdditionalInformation(): array
    {
        return $this->additional_information;
    }

    public function setAdditionalInformation(array $additional_information): void
    {
        $this->additional_information = $additional_information;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    public function getDeliveryType(): string
    {
        return $this->delivery_type;
    }

    public function setDeliveryType(string $delivery_type): void
    {
        $this->delivery_type = $delivery_type;
    }

    public function getDiscount(): float
    {
        return $this->discount;
    }

    public function setDiscount(float $discount): void
    {
        $this->discount = $discount;
    }

    public function getExtendedDownloadPrice(): float
    {
        return $this->extended_download_price;
    }

    public function setExtendedDownloadPrice(float $extended_download_price): void
    {
        $this->extended_download_price = $extended_download_price;
    }

    public function getManualOrderPrice(): float
    {
        return $this->manual_order_price;
    }

    public function setManualOrderPrice(float $manual_order_price): void
    {
        $this->manual_order_price = $manual_order_price;
    }

    public function getNotificationNo(): int
    {
        return $this->notification_no;
    }

    public function setNotificationNo(int $notification_no): void
    {
        $this->notification_no = $notification_no;
    }

    public function getProductId(): int
    {
        return $this->product_id;
    }

    public function setProductId(int $product_id): void
    {
        $this->product_id = $product_id;
    }

    public function getProductName(): string
    {
        return $this->product_name;
    }

    public function setProductName(string $product_name): void
    {
        $this->product_name = $product_name;
    }

    public function getProductSinglePrice(): float
    {
        return $this->product_single_price;
    }

    public function setProductSinglePrice(float $product_single_price): void
    {
        $this->product_single_price = $product_single_price;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function getRunningNo(): int
    {
        return $this->running_no;
    }

    public function setRunningNo(int $running_no): void
    {
        $this->running_no = $running_no;
    }

    public function getShippingPrice(): float
    {
        return $this->shipping_price;
    }

    public function setShippingPrice(float $shipping_price): void
    {
        $this->shipping_price = $shipping_price;
    }

    public function getShippingVatPct(): float
    {
        return $this->shipping_vat_pct;
    }

    public function setShippingVatPct(float $shipping_vat_pct): void
    {
        $this->shipping_vat_pct = $shipping_vat_pct;
    }

    public function getSubscription(): ?PurchaseItemSubscription
    {
        return $this->subscription;
    }

    public function setSubscription(array $subscription): void
    {
        $this->subscription = new PurchaseItemSubscription($subscription);
    }

    public function setSubscriptionByObject(PurchaseItemSubscription $subscription): void
    {
        $this->subscription = $subscription;
    }

    public function getVatPct(): float
    {
        return $this->vat_pct;
    }

    public function setVatPct(float $vat_pct): void
    {
        $this->vat_pct = $vat_pct;
    }

    public function getYourProductId(): ?string
    {
        return $this->your_product_id;
    }

    public function setYourProductId(?string $your_product_id): void
    {
        $this->your_product_id = $your_product_id;
    }
}
