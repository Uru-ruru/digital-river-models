<?php

namespace Uru\DR\Response;

class Pricing extends BaseResponse
{
    protected float $total;
    protected float $total_no_discount;
    protected float $total_no_shipping;
    protected float $subtotal;
    protected float $tax;
    protected float $shipping;
    protected float $shipping_gross;
    protected float $shipping_tax;
    protected float $tax_rate;
    protected string $tax_types;
    protected bool $has_vat;
    protected float $subtotal_no_discount;
    protected float $discount_gross;
    protected float $discount;
    protected string $currency;

    public function getTotal(): float
    {
        return $this->total;
    }

    public function setTotal(float $total): void
    {
        $this->total = $total;
    }

    public function getTotalNoDiscount(): float
    {
        return $this->total_no_discount;
    }

    public function setTotalNoDiscount(float $total_no_discount): void
    {
        $this->total_no_discount = $total_no_discount;
    }

    public function getTotalNoShipping(): float
    {
        return $this->total_no_shipping;
    }

    public function setTotalNoShipping(float $total_no_shipping): void
    {
        $this->total_no_shipping = $total_no_shipping;
    }

    public function getSubtotal(): float
    {
        return $this->subtotal;
    }

    public function setSubtotal(float $subtotal): void
    {
        $this->subtotal = $subtotal;
    }

    public function getTax(): float
    {
        return $this->tax;
    }

    public function setTax(float $tax): void
    {
        $this->tax = $tax;
    }

    public function getShipping(): float
    {
        return $this->shipping;
    }

    public function setShipping(float $shipping): void
    {
        $this->shipping = $shipping;
    }

    public function getShippingGross(): float
    {
        return $this->shipping_gross;
    }

    public function setShippingGross(float $shipping_gross): void
    {
        $this->shipping_gross = $shipping_gross;
    }

    public function getShippingTax(): float
    {
        return $this->shipping_tax;
    }

    public function setShippingTax(float $shipping_tax): void
    {
        $this->shipping_tax = $shipping_tax;
    }

    public function getTaxRate(): float
    {
        return $this->tax_rate;
    }

    public function setTaxRate(float $tax_rate): void
    {
        $this->tax_rate = $tax_rate;
    }

    public function getTaxTypes(): string
    {
        return $this->tax_types;
    }

    public function setTaxTypes(string $tax_types): void
    {
        $this->tax_types = $tax_types;
    }

    public function isHasVat(): bool
    {
        return $this->has_vat;
    }

    public function setHasVat(bool $has_vat): void
    {
        $this->has_vat = $has_vat;
    }

    public function getSubtotalNoDiscount(): float
    {
        return $this->subtotal_no_discount;
    }

    public function setSubtotalNoDiscount(float $subtotal_no_discount): void
    {
        $this->subtotal_no_discount = $subtotal_no_discount;
    }

    public function getDiscountGross(): float
    {
        return $this->discount_gross;
    }

    public function setDiscountGross(float $discount_gross): void
    {
        $this->discount_gross = $discount_gross;
    }

    public function getDiscount(): float
    {
        return $this->discount;
    }

    public function setDiscount(float $discount): void
    {
        $this->discount = $discount;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }
}
