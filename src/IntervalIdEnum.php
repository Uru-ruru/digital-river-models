<?php

namespace Uru\DR;

/**
 * Class IntervalIdEnum
 * @link https://account.mycommerce.com/home/wiki/01-01%3A%20Billing%20Period%20and%20Subscription%20Duration
 * @package Uru\DR
 */
class IntervalIdEnum extends BaseDREnum
{

    /**
     * Every 12 months (unlimited)
     */
    public const YEA = 'YEA';
    /**
     * Every 12 months (no renewal)
     */
    public const Y1Y = 'Y1Y';


    /**
     * @inheritDoc
     */
    public function getAllowedValues(): array
    {
        return [
            self::YEA,
            self::Y1Y
        ];
    }

    /**
     * @return string
     */
    public function jsonSerialize(): string
    {
        return $this->value;
    }
}
