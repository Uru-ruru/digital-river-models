<?php

namespace Uru\DR;

/**
 * Class DeliveryTypeEnum.
 */
class DeliveryTypeEnum extends BaseDREnum
{
    /**
     * EL5_FUL_DWL    MyCommerce Share-It delivers: Download link for the full version
     * EL5_DEM_DWL    MyCommerce Share-It delivers: Download link for the trial version
     * EL5_KEY_INL    MyCommerce Share-It delivers: License key
     * EL5_UKN_INO    MyCommerce Share-It delivers: Licensing information
     * PBL_SER_INL    You deliver: Service.
     */
    public const EL5_FUL_DWL = 'EL5_FUL_DWL';

    public const EL5_DEM_DWL = 'EL5_DEM_DWL';

    public const EL5_KEY_INL = 'EL5_KEY_INL';

    public const EL5_UKN_INO = 'EL5_UKN_INO';

    public const PBL_SER_INL = 'PBL_SER_INL';

    public function getAllowedValues(): array
    {
        return [
            self::EL5_FUL_DWL,
            self::EL5_DEM_DWL,
            self::EL5_KEY_INL,
            self::EL5_UKN_INO,
            self::PBL_SER_INL,
        ];
    }

    public function jsonSerialize(): mixed
    {
        return $this->value;
    }
}
