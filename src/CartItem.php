<?php

namespace Uru\DR;

/**
 * Class CartItem.
 */
class CartItem extends BaseDRModel
{
    protected string $product_id = self::FIELD_NOT_SET;

    protected float|int|string $quantity = self::FIELD_NOT_SET;

    protected string $vendor_id = self::FIELD_NOT_SET;

    protected array $additionals = [];

    protected string $dyn_price = self::FIELD_NOT_SET;

    private string $dyn_renewal_price = self::FIELD_NOT_SET;

    private string $dyn_name = self::FIELD_NOT_SET;

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

    /**
     * @param string $dyn_price "{$basketItem->getPrice()}USD,N" | $basketItem->getPrice().self::DEFAULT_CURRENCY.",N"
     */
    public function setDynPrice(string $dyn_price, string $dyn_price_pass): void
    {
        if (self::FIELD_NOT_SET === $this->product_id) {
            throw new \InvalidArgumentException(
                'product_id must be set for setting dyn price'
            );
        }
        $this->dyn_price = $dyn_price.';'.md5("{$this->product_id}#{$dyn_price}#{$dyn_price_pass}");
    }

    /**
     * @param string $dyn_renewal_price "{$basketItem->getPrice()}USD,N" | $basketItem->getPrice().self::DEFAULT_CURRENCY.",N"
     */
    public function setDynRenewalPrice(string $dyn_renewal_price, string $dyn_price_pass): void
    {
        if (self::FIELD_NOT_SET === $this->product_id) {
            throw new \InvalidArgumentException(
                'product_id must be set for setting dyn price'
            );
        }
        $this->dyn_renewal_price = $dyn_renewal_price.';'.md5("{$this->product_id}#{$dyn_renewal_price}#{$dyn_price_pass}");
    }

    public function jsonSerialize(): array
    {
        $data = [
            'product_id' => $this->product_id,
            'quantity' => $this->quantity,
            'vendor_id' => $this->vendor_id,
            'additionals' => [] === $this->additionals ? self::FIELD_NOT_SET : $this->additionals,
            'dyn_name' => $this->dyn_name,
            'dyn_price' => $this->dyn_price,
            'dyn_renewal_price' => $this->dyn_renewal_price,
        ];

        return $this->filterUnsetFields($data);
    }
}
