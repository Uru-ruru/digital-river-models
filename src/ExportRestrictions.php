<?php

namespace Uru\DR;

/**
 * Class ExportRestrictions
 * @package Uru\DR
 */
class ExportRestrictions extends BaseDRModel
{
    /**
     * @var string
     */
    private string $selection_type = self::FIELD_NOT_SET;

    /**
     * @var array
     */
    private array $countries = [];

    /**
     * Selection type. Possible values:
     *  N: Not export this product to the selected countries
     *  P: Only export this product to the selected countries.
     * @param string $selection_type
     */
    public function setSelectionType(string $selection_type): void
    {
        $this->selection_type = $selection_type;
    }

    /**
     * ISO 3166-1 alpha-2 country codes the export restriction should apply
     * @param string $country
     */
    public function addCountry(string $country): void
    {
        $this->countries[] = $country;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $data = [
            'selection_type' => $this->selection_type,
            'countries' => $this->countries == [] ? self::FIELD_NOT_SET : $this->countries
        ];

        return $this->filterUnsetFields($data);
    }
}
