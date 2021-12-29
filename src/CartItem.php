<?php

namespace Uru\DR;

use InvalidArgumentException;
use function PHPUnit\Framework\throwException;

/**
 * Class CartItem
 * @package Uru\DR
 */
class CartItem extends BaseDRModel
{
    /**
     * @var string
     */
    protected string $product_id = self::FIELD_NOT_SET;
    /**
     * @var int
     */
    protected $quantity = self::FIELD_NOT_SET;
    /**
     * @var string
     */
    protected string $vendor_id = self::FIELD_NOT_SET;
    /**
     * @var array
     */
    protected array $additionals = [];
    /**
     * @var string
     */
    protected string $dyn_price = self::FIELD_NOT_SET;
    /**
     * @var string
     */
    private string $dyn_renewal_price = self::FIELD_NOT_SET;
    /**
     * @var string
     */
    private string $dyn_name = self::FIELD_NOT_SET;

    /**
     * @param string $product_id
     */
    public function setProductId(string $product_id): void
    {
        $this->product_id = $product_id;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @param string $vendor_id
     */
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

    /**
     * @param string $dyn_name
     */
    public function setDynName(string $dyn_name): void
    {
        $this->dyn_name = $dyn_name;
    }

    /**
     * @param string $dyn_price "{$basketItem->getPrice()}USD,N" | $basketItem->getPrice().self::DEFAULT_CURRENCY.",N"
     * @param string $dyn_price_pass
     */
    public function setDynPrice(string $dyn_price, string $dyn_price_pass): void
    {
        if ($this->product_id == self::FIELD_NOT_SET) {
            throw new InvalidArgumentException(
                'product_id must be set for setting dyn price'
            );
        }
        $this->dyn_price = $dyn_price . ';' . md5("{$this->product_id}#{$dyn_price}#{$dyn_price_pass}");
    }

    /**
     * @param string $dyn_renewal_price "{$basketItem->getPrice()}USD,N" | $basketItem->getPrice().self::DEFAULT_CURRENCY.",N"
     * @param string $dyn_price_pass
     */
    public function setDynRenewalPrice(string $dyn_renewal_price, string $dyn_price_pass): void
    {
        if ($this->product_id == self::FIELD_NOT_SET) {
            throw new InvalidArgumentException(
                'product_id must be set for setting dyn price'
            );
        }
        $this->dyn_renewal_price = $dyn_renewal_price . ';' . md5("{$this->product_id}#{$dyn_renewal_price}#{$dyn_price_pass}");
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $data = [
            'product_id' => $this->product_id,
            'quantity' => $this->quantity,
            'vendor_id' => $this->vendor_id,
            'additionals' => $this->additionals == [] ? self::FIELD_NOT_SET : $this->additionals,
            'dyn_name' => $this->dyn_name,
            'dyn_price' => $this->dyn_price,
            'dyn_renewal_price' => $this->dyn_renewal_price,
        ];

        return $this->filterUnsetFields($data);
    }
}
