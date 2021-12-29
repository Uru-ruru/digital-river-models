<?php

namespace Uru\DR;

/**
 * Class Cart
 * @package Uru\DR
 */
class Cart extends BaseDRModel
{
    /**
     * @var CartItem[]
     */
    protected $items = self::FIELD_NOT_SET;
    /**
     * @var Address
     */
    protected $billing_address = self::FIELD_NOT_SET;
    /**
     * @var Address
     */
    protected $shipping_address = self::FIELD_NOT_SET;
    /**
     * @var string
     */
    protected string $shopper_id = self::FIELD_NOT_SET;
    /**
     * @var string
     */
    protected string $display_currency = self::FIELD_NOT_SET;
    /**
     * @var string
     */
    protected string $protect = self::FIELD_NOT_SET;
    /**
     * @var string
     */
    protected string $final_page_url = self::FIELD_NOT_SET;

    /**
     * @param CartItem[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    /**
     * @param Address $billing_address
     */
    public function setBillingAddress(Address $billing_address): void
    {
        $this->billing_address = $billing_address;
    }

    /**
     * @param Address $shipping_address
     */
    public function setShippingAddress(Address $shipping_address): void
    {
        $this->shipping_address = $shipping_address;
    }

    /**
     * @param string $shopper_id
     */
    public function setShopperId(string $shopper_id): void
    {
        $this->shopper_id = $shopper_id;
    }

    /**
     * @param string $display_currency
     */
    public function setDisplayCurrency(string $display_currency): void
    {
        $this->display_currency = $display_currency;
    }

    /**
     * @param string $protect
     */
    public function setProtect(string $protect): void
    {
        $this->protect = $protect;
    }

    /**
     * @param string $final_page_url
     */
    public function setFinalPageUrl(string $final_page_url): void
    {
        $this->final_page_url = $final_page_url;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $data = [
            'items' => $this->items,
            'payment_account' => [
                'billing_address' => $this->billing_address
            ],
            'shipping_address' => $this->shipping_address,
            'shopper_id' => $this->shopper_id,
            'display_currency' => $this->display_currency,
            'protect' => $this->protect,
            'final_page_url' => $this->final_page_url
        ];

        return $this->filterUnsetFields($data);
    }
}
