<?php

namespace Uru\DR;

/**
 * Class Address.
 */
class Address extends BaseDRModel
{
    protected string $first_name = self::FIELD_NOT_SET;

    protected string $last_name = self::FIELD_NOT_SET;

    protected string $company = self::FIELD_NOT_SET;

    protected string $address_1 = self::FIELD_NOT_SET;

    protected string $postal_code = self::FIELD_NOT_SET;

    protected string $city = self::FIELD_NOT_SET;

    protected string $email = self::FIELD_NOT_SET;

    protected string $country = self::FIELD_NOT_SET;

    public function setFirstName(?string $first_name): void
    {
        $this->first_name = $first_name ?: '';
    }

    public function setLastName(?string $last_name): void
    {
        $this->last_name = $last_name ?: '';
    }

    public function setCompany(?string $company): void
    {
        $this->company = $company ?: '';
    }

    public function setAddress(?string $address_1): void
    {
        $this->address_1 = $address_1 ?: '';
    }

    public function setPostalCode(?string $postal_code): void
    {
        $this->postal_code = $postal_code ?: '';
    }

    public function setCity(?string $city): void
    {
        $this->city = $city ?: '';
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email ?: '';
    }

    public function setCountry(?string $country): void
    {
        $this->country = $country ?: '';
    }

    public function jsonSerialize(): array
    {
        $data = [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'company' => $this->company,
            'address_1' => $this->address_1,
            'postal_code' => $this->postal_code,
            'city' => $this->city,
            'email' => $this->email,
            'country' => $this->country,
        ];

        return $this->filterUnsetFields($data);
    }
}
