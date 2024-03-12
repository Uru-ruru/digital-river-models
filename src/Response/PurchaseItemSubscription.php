<?php

namespace Uru\DR\Response;

class PurchaseItemSubscription extends BaseResponse
{
    private ?\DateTime $expiration_date = null;

    private ?string $id = null;

    private ?string $interval = null;

    private ?int $original_notification_no = null;

    private ?string $original_purchase_id = null;

    private ?int $original_running_no = null;

    private ?string $renewal_discount_count = null;

    private ?string $renewal_discount_start = null;

    private ?string $renewal_type = null;

    private ?string $retention_discount_count = null;

    private ?string $retention_discount_percent = null;

    private ?\DateTime $start_date = null;

    private ?string $status = null;

    private ?string $status_id = null;

    public function getExpirationDate(): \DateTime
    {
        return $this->expiration_date;
    }

    /**
     * @throws \Exception
     */
    public function setExpirationDate(string $expiration_date): void
    {
        $this->expiration_date = new \DateTime($expiration_date);
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getInterval(): ?string
    {
        return $this->interval;
    }

    public function setInterval(string $interval): void
    {
        $this->interval = $interval;
    }

    public function getOriginalNotificationNo(): ?int
    {
        return $this->original_notification_no;
    }

    public function setOriginalNotificationNo(int $original_notification_no): void
    {
        $this->original_notification_no = $original_notification_no;
    }

    public function getOriginalPurchaseId(): ?string
    {
        return $this->original_purchase_id;
    }

    public function setOriginalPurchaseId(string $original_purchase_id): void
    {
        $this->original_purchase_id = $original_purchase_id;
    }

    public function getOriginalRunningNo(): ?int
    {
        return $this->original_running_no;
    }

    public function setOriginalRunningNo(int $original_running_no): void
    {
        $this->original_running_no = $original_running_no;
    }

    public function getRenewalDiscountCount(): ?string
    {
        return $this->renewal_discount_count;
    }

    public function setRenewalDiscountCount(string $renewal_discount_count): void
    {
        $this->renewal_discount_count = $renewal_discount_count;
    }

    public function getRenewalDiscountStart(): ?string
    {
        return $this->renewal_discount_start;
    }

    public function setRenewalDiscountStart(string $renewal_discount_start): void
    {
        $this->renewal_discount_start = $renewal_discount_start;
    }

    public function getRenewalType(): ?string
    {
        return $this->renewal_type;
    }

    public function setRenewalType(string $renewal_type): void
    {
        $this->renewal_type = $renewal_type;
    }

    public function getRetentionDiscountCount(): ?string
    {
        return $this->retention_discount_count;
    }

    public function setRetentionDiscountCount(string $retention_discount_count): void
    {
        $this->retention_discount_count = $retention_discount_count;
    }

    public function getRetentionDiscountPercent(): ?string
    {
        return $this->retention_discount_percent;
    }

    public function setRetentionDiscountPercent(string $retention_discount_percent): void
    {
        $this->retention_discount_percent = $retention_discount_percent;
    }

    public function getStartDate(): ?\DateTime
    {
        return $this->start_date;
    }

    /**
     * @throws \Exception
     */
    public function setStartDate(string $start_date): void
    {
        $this->start_date = new \DateTime($start_date);
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getStatusId(): ?string
    {
        return $this->status_id;
    }

    public function setStatusId(string $status_id): void
    {
        $this->status_id = $status_id;
    }
}
