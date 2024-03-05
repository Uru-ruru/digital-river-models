<?php

namespace Uru\DR;

/**
 * Class Price.
 */
class Price extends BaseDRModel
{
    private string $currency = self::FIELD_NOT_SET;

    /**
     * @var float|string
     */
    private $price = self::FIELD_NOT_SET;

    /**
     * ISO 4217 currency code, e.g. USD or EUR.
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function jsonSerialize(): array
    {
        $data = [
            'currency' => $this->currency,
            'price' => $this->price,
        ];

        return $this->filterUnsetFields($data);
    }
}
