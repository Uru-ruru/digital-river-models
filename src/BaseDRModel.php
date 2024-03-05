<?php

namespace Uru\DR;

class BaseDRModel implements \JsonSerializable
{
    public const FIELD_NOT_SET = 'field_not_set';

    public function jsonSerialize(): array
    {
        return [];
    }

    protected function filterUnsetFields(array $data): array
    {
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $data[$key] = self::filterUnsetFields($value);
            } elseif (self::FIELD_NOT_SET === $value) {
                unset($data[$key]);
            }
        }

        return $data;
    }
}
