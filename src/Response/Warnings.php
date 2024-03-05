<?php

namespace Uru\DR\Response;

class Warnings extends BaseResponse
{
    protected string $Code;
    protected string $consumer_message;
    protected string $buyer_vat_id;

    public function getCode(): string
    {
        return $this->Code;
    }

    public function setCode(string $Code): void
    {
        $this->Code = $Code;
    }

    public function getConsumerMessage(): string
    {
        return $this->consumer_message;
    }

    public function setConsumerMessage(string $consumer_message): void
    {
        $this->consumer_message = $consumer_message;
    }

    public function getBuyerVatId(): ?string
    {
        return $this->buyer_vat_id ?? null;
    }

    public function setBuyerVatId(string $buyer_vat_id): void
    {
        $this->buyer_vat_id = $buyer_vat_id;
    }
}
