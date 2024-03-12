<?php

namespace Uru\DR\Response;

class BaseResponse
{
    private array $data;

    public function __construct(?array $data = null)
    {
        if (!is_null($data)) {
            $this->data = $data;
            $this->proceedArray($data);
        }
    }

    public function toArray(): array
    {
        return $this->data;
    }

    private function proceedArray(array $data): void
    {
        foreach ($data as $name => $val) {
            if (property_exists($this, strtolower($name))) {
                $methodName = 'set'.$this->toCamelCase($name);
                if (method_exists($this, $methodName)) {
                    $this->{$methodName}($val);
                }
            } elseif (is_array($val)) {
                $this->proceedArray($val);
            }
        }
    }

    private function toCamelCase(string $string): string
    {
        return str_replace(['-', '_'], '', ucwords($string, '-_'));
    }
}
