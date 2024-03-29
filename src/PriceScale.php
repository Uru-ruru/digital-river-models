<?php

namespace Uru\DR;

/**
 * Class PriceScale.
 */
class PriceScale extends BaseDRModel
{
    /**
     * @var int|string
     */
    private $quantity_from = self::FIELD_NOT_SET;

    /**
     * @var Price[]|string
     */
    private $prices = self::FIELD_NOT_SET;

    public function setQuantityFrom(int $quantity_from): void
    {
        $this->quantity_from = $quantity_from;
    }

    /**
     * @param Price[] $prices
     */
    public function setPrices(array $prices): void
    {
        $this->prices = $prices;
    }

    public function jsonSerialize(): array
    {
        $data = [
            'quantity_from' => $this->quantity_from,
            'prices' => $this->prices,
        ];

        return $this->filterUnsetFields($data);
    }
}
