<?php

namespace Uru\DR\Response;

class Purchase extends BaseResponse
{
    private \DateTime $creation_date;

    private Contract $billing_contact;

    private Contract $delivery_contact;

    private int $shopper_id;

    private bool $is_test = false;

    private \DateTime $payment_complete_date;

    private string $payment_status;

    private string $payment_status_id;

    private \DateTime $purchase_date;

    private string $purchase_id;

    private array $purchase_item = [];

    private string $purchase_origin;

    private string $rebilling_cancel_reason;

    public function getCreationDate(): \DateTime
    {
        return $this->creation_date;
    }

    /**
     * @throws \Exception
     */
    public function setCreationDate(string $creation_date): void
    {
        $this->creation_date = new \DateTime($creation_date);
    }

    public function getBillingContact(): Contract
    {
        return $this->billing_contact;
    }

    public function setBillingContact(array $billing_contact): void
    {
        $this->billing_contact = new Contract($billing_contact);
    }

    public function getDeliveryContact(): Contract
    {
        return $this->delivery_contact;
    }

    public function setDeliveryContact(array $delivery_contact): void
    {
        $this->delivery_contact = new Contract($delivery_contact);
    }

    public function getShopperId(): int
    {
        return $this->shopper_id;
    }

    public function setShopperId(int $shopper_id): void
    {
        $this->shopper_id = $shopper_id;
    }

    public function isTest(): bool
    {
        return $this->is_test;
    }

    public function getIsTest(): bool
    {
        return $this->is_test;
    }

    public function setIsTest(bool $is_test): void
    {
        $this->is_test = $is_test;
    }

    public function getPaymentCompleteDate(): \DateTime
    {
        return $this->payment_complete_date;
    }

    /**
     * @throws \Exception
     */
    public function setPaymentCompleteDate(string $payment_complete_date): void
    {
        $this->payment_complete_date = new \DateTime($payment_complete_date);
    }

    public function getPaymentStatus(): string
    {
        return $this->payment_status;
    }

    public function setPaymentStatus(string $payment_status): void
    {
        $this->payment_status = $payment_status;
    }

    public function getPaymentStatusId(): string
    {
        return $this->payment_status_id;
    }

    public function setPaymentStatusId(string $payment_status_id): void
    {
        $this->payment_status_id = $payment_status_id;
    }

    public function getPurchaseDate(): \DateTime
    {
        return $this->purchase_date;
    }

    /**
     * @throws \Exception
     */
    public function setPurchaseDate(string $purchase_date): void
    {
        $this->purchase_date = new \DateTime($purchase_date);
    }

    public function getPurchaseId(): string
    {
        return $this->purchase_id;
    }

    public function setPurchaseId(string $purchase_id): void
    {
        $this->purchase_id = $purchase_id;
    }

    /**
     * @return array|PurchaseItem[]
     */
    public function getPurchaseItem(): array
    {
        return $this->purchase_item;
    }

    public function setPurchaseItem(array $purchase_item): void
    {
        foreach ($purchase_item as $item) {
            $this->purchase_item[] = new PurchaseItem($item);
        }
    }

    public function getPurchaseOrigin(): string
    {
        return $this->purchase_origin;
    }

    public function setPurchaseOrigin(string $purchase_origin): void
    {
        $this->purchase_origin = $purchase_origin;
    }

    public function getRebillingCancelReason(): string
    {
        return $this->rebilling_cancel_reason;
    }

    public function setRebillingCancelReason(string $rebilling_cancel_reason): void
    {
        $this->rebilling_cancel_reason = $rebilling_cancel_reason;
    }
}
