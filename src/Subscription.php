<?php

namespace Uru\DR;

/**
 * Class Subscription.
 */
class Subscription extends BaseDRModel
{
    /**
     * @var IntervalIdEnum
     */
    private $interval_id = self::FIELD_NOT_SET;

    private bool $allow_manual_renewal;

    /**
     * @var PriceScale[]
     */
    private $renewal_price_scale_definition = self::FIELD_NOT_SET;

    /**
     * Subscription constructor.
     */
    public function __construct()
    {
        $this->allow_manual_renewal = true;
    }

    public function setAllowManualRenewal(bool $allow_manual_renewal): void
    {
        $this->allow_manual_renewal = $allow_manual_renewal;
    }

    /**
     * @param PriceScale[] $renewal_price_scale_definition
     */
    public function setRenewalPriceScale(array $renewal_price_scale_definition): void
    {
        $this->renewal_price_scale_definition = $renewal_price_scale_definition;
    }

    public function setIntervalId(IntervalIdEnum $interval_id): void
    {
        $this->interval_id = $interval_id;
    }

    public function jsonSerialize(): array
    {
        $data = [
            'interval_id' => $this->interval_id,
            'renewal_price_scale_definition' => $this->renewal_price_scale_definition,
            'allow_manual_renewal' => $this->allow_manual_renewal,
        ];

        return $this->filterUnsetFields($data);
    }
}
