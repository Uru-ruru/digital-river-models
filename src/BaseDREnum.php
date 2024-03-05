<?php

namespace Uru\DR;

abstract class BaseDREnum implements \JsonSerializable
{
    /**
     * @var string|string[]
     */
    protected $value;

    /**
     * @var string[]
     */
    protected array $allowedValues = [];

    public function __construct(string $value)
    {
        $this->validateValue($value);
        $this->value = $value;
    }

    /**
     * @return string[]
     */
    abstract public function getAllowedValues(): array;

    /**
     * @return array|string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     *
     * @throws \InvalidArgumentException
     */
    protected function validateValue($value): void
    {
        if (!in_array($value, $this->getAllowedValues(), true)) {
            throw new \InvalidArgumentException(
                'Invalid value "'.$value.'". Allowed values are: '.implode(',', $this->allowedValues)
            );
        }
    }
}
