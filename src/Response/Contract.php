<?php

namespace Uru\DR\Response;

class Contract extends BaseResponse
{
    private ?Address $address = null;
    private ?string $company = null;
    private ?string $email = null;
    private ?string $first_name = null;
    private ?string $last_name = null;
    private ?string $phone = null;

    public function getAddress(): ?Address
    {
        return $this->address;
    }

    public function setAddress(array $address): void
    {
        $this->address = new Address($address);
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(string $company): void
    {
        $this->company = $company;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): void
    {
        $this->first_name = $first_name;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): void
    {
        $this->last_name = $last_name;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }
}
