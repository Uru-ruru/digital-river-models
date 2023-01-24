<?php

namespace Uru\DR;

use InvalidArgumentException;
use JsonSerializable;

abstract class BaseDREnum implements JsonSerializable
{
    /**
     * @var string|string[]
     */
    protected $value;

    /**
     * @var string[]
     */
    protected array $allowedValues = [];

    /**
     * @return string[]
     */
    abstract public function getAllowedValues(): array;

    /**
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->validateValue($value);
        $this->value = $value;
    }

    /**
     * @param mixed $value
     * @throws InvalidArgumentException
     */
    protected function validateValue($value): void
    {
        if (!in_array($value, $this->getAllowedValues(), true)) {
            throw new InvalidArgumentException(
                'Invalid value "' . $value . '". Allowed values are: ' . implode(',', $this->allowedValues)
            );
        }
    }

    /**
     * @return string|array
     */
    public function getValue()
    {
        return $this->value;
    }
}
