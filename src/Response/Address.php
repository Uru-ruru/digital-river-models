<?php

namespace Uru\DR\Response;

/**
 * Class Address.
 */
class Address extends BaseResponse
{
    protected ?string $city = null;
    protected ?string $country = null;
    protected ?string $country_id = null;
    protected ?string $postal_code = null;
    protected ?string $street1 = null;

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    public function getCountryId(): ?string
    {
        return $this->country_id;
    }

    public function setCountryId(string $country_id): void
    {
        $this->country_id = $country_id;
    }

    public function getPostalCode(): ?string
    {
        return $this->postal_code;
    }

    public function setPostalCode(string $postal_code): void
    {
        $this->postal_code = $postal_code;
    }

    public function getStreet1(): ?string
    {
        return $this->street1;
    }

    public function setStreet1(string $street1): void
    {
        $this->street1 = $street1;
    }
}
