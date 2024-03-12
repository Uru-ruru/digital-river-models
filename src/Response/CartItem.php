<?php

namespace Uru\DR\Response;

class CartItem extends BaseResponse
{
    protected ?string $product_name = null;
    protected ?string $vendor_name = null;

    protected ?Pricing $pricing = null;
    protected ?string $display_name = null;
    protected ?string $short_description = null;
    protected ?string $full_description = null;

    protected ?Subscription $subscription = null;
    protected ?string $product_id = null;
    protected ?string $id = null;

    protected null|float|int|string $quantity = null;

    protected ?string $vendor_id = null;

    protected array $additionals = [];

    protected ?string $dyn_price = null;

    protected ?string $dyn_renewal_price = null;

    protected ?string $dyn_name = null;

    public function setProductId(string $product_id): void
    {
        $this->product_id = $product_id;
    }

    public function setQuantity(float|int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function setVendorId(string $vendor_id): void
    {
        $this->vendor_id = $vendor_id;
    }

    /**
     * @param array $additionals ["name" => "", "value" => "", "hidden" => bool]
     */
    public function addAdditionals(array $additionals): void
    {
        $this->additionals[] = $additionals;
    }

    public function setDynName(string $dyn_name): void
    {
        $this->dyn_name = $dyn_name;
    }

    public function setDynPrice(string $dyn_price): void
    {
        $this->dyn_price = $dyn_price;
    }

    public function setDynRenewalPrice(string $dyn_renewal_price): void
    {
        $this->dyn_renewal_price = $dyn_renewal_price;
    }

    public function getProductId(): ?string
    {
        return $this->product_id;
    }

    public function getQuantity(): null|float|int|string
    {
        return $this->quantity;
    }

    public function getVendorId(): ?string
    {
        return $this->vendor_id;
    }

    public function getAdditionals(): array
    {
        return $this->additionals;
    }

    public function getDynPrice(): ?string
    {
        return $this->dyn_price;
    }

    public function getDynRenewalPrice(): ?string
    {
        return $this->dyn_renewal_price;
    }

    public function getDynName(): ?string
    {
        return $this->dyn_name;
    }

    public function getProductName(): ?string
    {
        return $this->product_name;
    }

    public function setProductName(string $product_name): void
    {
        $this->product_name = $product_name;
    }

    public function getVendorName(): ?string
    {
        return $this->vendor_name;
    }

    public function setVendorName(string $vendor_name): void
    {
        $this->vendor_name = $vendor_name;
    }

    public function getPricing(): ?Pricing
    {
        return $this->pricing;
    }

    public function setPricing(array $pricing): void
    {
        $this->pricing = new Pricing($pricing);
    }

    public function getDisplayName(): ?string
    {
        return $this->display_name;
    }

    public function setDisplayName(string $display_name): void
    {
        $this->display_name = $display_name;
    }

    public function getShortDescription(): ?string
    {
        return $this->short_description;
    }

    public function setShortDescription(string $short_description): void
    {
        $this->short_description = $short_description;
    }

    public function getFullDescription(): ?string
    {
        return $this->full_description;
    }

    public function setFullDescription(string $full_description): void
    {
        $this->full_description = $full_description;
    }

    public function getSubscription(): ?Subscription
    {
        return $this->subscription;
    }

    public function setSubscription(array $subscription): void
    {
        $this->subscription = new Subscription($subscription);
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }
}
