<?php

namespace Uru\DR\Response;

use Uru\DR\Address;

class Cart extends BaseResponse
{
    protected string $status;
    protected Pricing $pricing;
    protected string $shopper_ip_country;
    protected string $shopper_ip_cookie_type;
    protected array $select_languages;
    protected array $selling_entity;
    protected bool $legal_disclaimer_checkbox;
    protected array $items;

    protected string $cart_url;
    protected array $warnings;
    protected string $code;
    protected string $consumer_message;
    protected array $validation_errors;
    protected string $language;
    protected string $currency;
    protected string $display_currency;

    protected Address $billing_address;

    protected Address $shipping_address;

    protected string $id;
    protected string $final_page_url;
    protected string $shopper_id;

    protected string $protect;

    public function setItems(array $items): void
    {
        foreach ($items as $item) {
            $this->items[] = new CartItem($item);
        }
    }

    public function setBillingAddress($billing_address): void
    {
        $this->billing_address = new Address($billing_address);
    }

    public function setShippingAddress(array $shipping_address): void
    {
        $this->shipping_address = new Address($shipping_address);
    }

    public function setShopperId(string $shopper_id): void
    {
        $this->shopper_id = $shopper_id;
    }

    public function setDisplayCurrency(string $display_currency): void
    {
        $this->display_currency = $display_currency;
    }

    public function setProtect(string $protect): void
    {
        $this->protect = $protect;
    }

    public function setFinalPageUrl(string $final_page_url): void
    {
        $this->final_page_url = $final_page_url;
    }

    /**
     * @return array<int,CartItem>
     */
    public function getItems(): array
    {
        return $this->items;
    }

    public function getBillingAddress(): Address
    {
        return $this->billing_address;
    }

    public function getShippingAddress(): Address
    {
        return $this->shipping_address;
    }

    public function getShopperId(): string
    {
        return $this->shopper_id;
    }

    public function getDisplayCurrency(): string
    {
        return $this->display_currency;
    }

    public function getProtect(): string
    {
        return $this->protect;
    }

    public function getFinalPageUrl(): string
    {
        return $this->final_page_url;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getPricing(): Pricing
    {
        return $this->pricing;
    }

    public function setPricing(array $pricing): void
    {
        $this->pricing = new Pricing($pricing);
    }

    public function getShopperIpCountry(): string
    {
        return $this->shopper_ip_country;
    }

    public function setShopperIpCountry(string $shopper_ip_country): void
    {
        $this->shopper_ip_country = $shopper_ip_country;
    }

    public function getShopperIpCookieType(): string
    {
        return $this->shopper_ip_cookie_type;
    }

    public function setShopperIpCookieType(string $shopper_ip_cookie_type): void
    {
        $this->shopper_ip_cookie_type = $shopper_ip_cookie_type;
    }

    public function getSelectLanguages(): array
    {
        return $this->select_languages;
    }

    public function setSelectLanguages(array $select_languages): void
    {
        $this->select_languages = $select_languages;
    }

    public function getSellingEntity(): array
    {
        return $this->selling_entity;
    }

    public function setSellingEntity(array $selling_entity): void
    {
        $this->selling_entity = $selling_entity;
    }

    public function isLegalDisclaimerCheckbox(): bool
    {
        return $this->legal_disclaimer_checkbox;
    }

    public function setLegalDisclaimerCheckbox(bool $legal_disclaimer_checkbox): void
    {
        $this->legal_disclaimer_checkbox = $legal_disclaimer_checkbox;
    }

    public function getCartUrl(): ?string
    {
        return $this->cart_url ?? null;
    }

    public function setCartUrl(string $cart_url): void
    {
        $this->cart_url = $cart_url;
    }

    /**
     * @return null|array<int,Warnings>
     */
    public function getWarnings(): ?array
    {
        return $this->warnings ?? null;
    }

    public function setWarnings(array $warnings): void
    {
        foreach ($warnings as $warning) {
            $this->warnings[] = new Warnings($warning);
        }
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function setLanguage(string $language): void
    {
        $this->language = $language;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getCode(): ?string
    {
        return $this->code ?? null;
    }

    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    public function getConsumerMessage(): ?string
    {
        return $this->consumer_message ?? null;
    }

    public function setConsumerMessage(string $consumer_message): void
    {
        $this->consumer_message = $consumer_message;
    }

    public function getValidationErrors(): array
    {
        return $this->validation_errors;
    }

    public function setValidationErrors(array $validation_errors): void
    {
        $this->validation_errors = $validation_errors;
    }
}
