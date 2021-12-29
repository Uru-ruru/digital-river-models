<?php

namespace Uru\DR;

/**
 * Class Address
 * @package Uru\DR
 */
class Address extends BaseDRModel
{
    /**
     * @var string
     */
    protected string $first_name = self::FIELD_NOT_SET;
    /**
     * @var string
     */
    protected string $last_name = self::FIELD_NOT_SET;
    /**
     * @var string
     */
    protected string $company = self::FIELD_NOT_SET;
    /**
     * @var string
     */
    protected string $address_1 = self::FIELD_NOT_SET;
    /**
     * @var string
     */
    protected string $postal_code = self::FIELD_NOT_SET;
    /**
     * @var string
     */
    protected string $city = self::FIELD_NOT_SET;
    /**
     * @var string
     */
    protected string $email = self::FIELD_NOT_SET;
    /**
     * @var string
     */
    protected string $country = self::FIELD_NOT_SET;

    /**
     * @param string|null $first_name
     */
    public function setFirstName(?string $first_name): void
    {
        $this->first_name = $first_name ?: '';
    }

    /**
     * @param string|null $last_name
     */
    public function setLastName(?string $last_name): void
    {
        $this->last_name = $last_name ?: '';
    }

    /**
     * @param string|null $company
     */
    public function setCompany(?string $company): void
    {
        $this->company = $company ?: '';
    }

    /**
     * @param string|null $address_1
     */
    public function setAddress(?string $address_1): void
    {
        $this->address_1 = $address_1 ?: '';
    }

    /**
     * @param string|null $postal_code
     */
    public function setPostalCode(?string $postal_code): void
    {
        $this->postal_code = $postal_code ?: '';
    }

    /**
     * @param string|null $city
     */
    public function setCity(?string $city): void
    {
        $this->city = $city ?: '';
    }

    /**
     * @param string|null $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email ?: '';
    }

    /**
     * @param string|null $country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country ?: '';
    }

    /**
     * @return array
     */
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
            'country' => $this->country
        ];

        return $this->filterUnsetFields($data);
    }
}
