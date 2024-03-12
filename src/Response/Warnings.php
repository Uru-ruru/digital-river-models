<?php

namespace Uru\DR\Response;

class Warnings extends BaseResponse
{
    protected ?string $code = null;
    protected ?string $consumer_message = null;
    protected ?string $buyer_vat_id = null;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    public function getConsumerMessage(): ?string
    {
        return $this->consumer_message;
    }

    public function setConsumerMessage(string $consumer_message): void
    {
        $this->consumer_message = $consumer_message;
    }

    public function getBuyerVatId(): ?string
    {
        return $this->buyer_vat_id;
    }

    public function setBuyerVatId(string $buyer_vat_id): void
    {
        $this->buyer_vat_id = $buyer_vat_id;
    }
}
