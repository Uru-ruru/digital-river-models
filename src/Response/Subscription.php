<?php

namespace Uru\DR\Response;

class Subscription extends BaseResponse
{
    protected ?string $unit = null;
    protected ?string $period = null;
    protected ?string $interval_id = null;
    protected ?string $interval_appellation = null;
    protected bool $manual_renewal = false;
    protected bool $auto_renewal = false;
    protected ?string $applicable_type_subscriptionn = null;

    public function getUnit(): ?string
    {
        return $this->unit;
    }

    public function setUnit(?string $unit): void
    {
        $this->unit = $unit;
    }

    public function getPeriod(): ?string
    {
        return $this->period;
    }

    public function setPeriod(?string $period): void
    {
        $this->period = $period;
    }

    public function getIntervalId(): ?string
    {
        return $this->interval_id;
    }

    public function setIntervalId(?string $interval_id): void
    {
        $this->interval_id = $interval_id;
    }

    public function getIntervalAppellation(): ?string
    {
        return $this->interval_appellation;
    }

    public function setIntervalAppellation(?string $interval_appellation): void
    {
        $this->interval_appellation = $interval_appellation;
    }

    public function isManualRenewal(): bool
    {
        return $this->manual_renewal;
    }

    public function setManualRenewal(bool $manual_renewal): void
    {
        $this->manual_renewal = $manual_renewal;
    }

    public function isAutoRenewal(): bool
    {
        return $this->auto_renewal;
    }

    public function setAutoRenewal(bool $auto_renewal): void
    {
        $this->auto_renewal = $auto_renewal;
    }

    public function getApplicableTypeSubscriptionn(): ?string
    {
        return $this->applicable_type_subscriptionn;
    }

    public function setApplicableTypeSubscriptionn(?string $applicable_type_subscriptionn): void
    {
        $this->applicable_type_subscriptionn = $applicable_type_subscriptionn;
    }
}
