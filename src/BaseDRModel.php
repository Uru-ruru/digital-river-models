<?php

namespace Uru\DR;

use JsonSerializable;

class BaseDRModel implements JsonSerializable
{
    const FIELD_NOT_SET = 'field_not_set';

    /**
     * @return array
     */
    function jsonSerialize(): array
    {
        return [];
    }

    /**
     * @param array $data
     * @return array
     */
    protected function filterUnsetFields(array $data): array
    {
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $data[$key] = self::filterUnsetFields($value);
            } elseif (BaseDRModel::FIELD_NOT_SET === $value) {
                unset($data[$key]);
            }
        }

        return $data;
    }

}
