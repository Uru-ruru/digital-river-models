<?php

namespace Uru\DR\Response;

class Token extends BaseResponse
{
    protected ?int $expires_in = null;
    protected ?string $access_token = null;
    protected ?string $token_type = null;

    public function getExpiresIn(): ?int
    {
        return $this->expires_in;
    }

    public function setExpiresIn(?int $expires_in): void
    {
        $this->expires_in = $expires_in;
    }

    public function getAccessToken(): ?string
    {
        return $this->access_token;
    }

    public function setAccessToken(?string $access_token): void
    {
        $this->access_token = $access_token;
    }

    public function getTokenType(): ?string
    {
        return $this->token_type;
    }

    public function setTokenType(?string $token_type): void
    {
        $this->token_type = $token_type;
    }
}
