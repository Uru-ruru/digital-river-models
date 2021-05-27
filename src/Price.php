<?php


namespace Uru\DR;


/**
 * Class Price
 * @package Uru\DR
 */
class Price extends BaseDRModel
{
    /**
     * @var string
     */
    private string $currency = self::FIELD_NOT_SET;
    /**
     * @var float|string
     */
    private $price = self::FIELD_NOT_SET;

    /**
     * ISO 4217 currency code, e.g. USD or EUR
     * @param string $currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $data = [
            'currency' => $this->currency,
            'price' => $this->price,
        ];

        return $this->filterUnsetFields($data);
    }

}
