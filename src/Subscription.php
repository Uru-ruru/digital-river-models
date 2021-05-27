<?php


namespace Uru\DR;


/**
 * Class Subscription
 * @package Uru\DR
 */
class Subscription extends BaseDRModel
{
    /**
     * @var string
     */
    private string $interval_id = self::FIELD_NOT_SET;
    /**
     * @var bool
     */
    private bool $manual_renewal;

    /**
     * Subscription constructor.
     */
    public function __construct()
    {
        $this->manual_renewal = true;
    }


    /**
     * @param $interval_id
     */
    public function setIntervalId($interval_id)
    {
        $this->interval_id = $interval_id;
    }

    /**
     * @param bool $manual_renewal
     */
    public function setManualRenewal(bool $manual_renewal)
    {
        $this->manual_renewal = $manual_renewal;
    }


    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $data = [
            'interval_id' => $this->interval_id,
            'manual_renewal' => $this->manual_renewal,
        ];

        return $this->filterUnsetFields($data);
    }

}
