<?php

namespace Uru\DR;

/**
 * Class IntervalIdEnum.
 *
 * @see https://account.mycommerce.com/home/wiki/01-01%3A%20Billing%20Period%20and%20Subscription%20Duration
 */
class IntervalIdEnum extends BaseDREnum
{
    /**
     * Daily (7 days)
     * Caution: Daily subscription renewal products are for testing only.
     */
    public const DAY = 'DAY';

    /**
     * Weekly (no renewal)
     * No automatic renewal/ Manual renewal possible
     * Caution: Automatic subscription ends directly1).
     */
    public const W1W = 'W1W';

    /**
     * Weekly (4 weeks).
     */
    public const W1M = 'W1M';

    /**
     * Weekly (1 year).
     */
    public const W1Y = 'W1Y';

    /**
     * Weekly (2 years).
     */
    public const W2Y = 'W2Y';

    /**
     * Weekly (unlimited).
     */
    public const WEE = 'WEE';

    /**
     * Every 2 weeks (4 weeks).
     */
    public const B1M = 'B1M';

    /**
     * Every 2 weeks (1 year).
     */
    public const B1Y = 'B1Y';

    /**
     * Every 2 weeks (2 years).
     */
    public const B2Y = 'B2Y';

    /**
     * Every 2 weeks (unlimited).
     */
    public const BWE = 'BWE';

    /**
     * Monthly (6 months).
     */
    public const MOH = 'MOH';

    /**
     * Monthly (1 year).
     */
    public const MOY = 'MOY';

    /**
     * Monthly (2 years).
     */
    public const MOT = 'MOT';

    /**
     * Monthly (2 months).
     */
    public const M2M = 'M2M';

    /**
     * Monthly (unlimited).
     */
    public const MON = 'MON';

    /**
     * Every 2 months (1 year).
     */
    public const T1Y = 'T1Y';

    /**
     * Every 2 months (2 years).
     */
    public const T2Y = 'T2Y';

    /**
     * Every 2 months (unlimited).
     */
    public const TME = 'TME';

    /**
     * Every 3 months (no renewal)
     * Caution: Automatic Subscription ends directly1).
     */
    public const Q3M = 'Q3M';

    /**
     * Every 3 months (12 months).
     */
    public const QU4 = 'QU4';

    /**
     * Every 3 months (2 years).
     */
    public const Q2Y = 'Q2Y';

    /**
     * Every 3 months (unlimited).
     */
    public const QYE = 'QYE';

    /**
     * Every 6 months (no renewal).
     */
    public const H6M = 'H6M';

    /**
     * Every 6 months (1 year).
     */
    public const H1Y = 'H1Y';

    /**
     * Every 6 months (2 years).
     */
    public const H2Y = 'H2Y';

    /**
     * Every 6 months (unlimited).
     */
    public const HYE = 'HYE';

    /**
     * Every 12 months (no renewal).
     */
    public const Y1Y = 'Y1Y';

    /**
     * Every 12 months (2 years).
     */
    public const Y2Y = 'Y2Y';

    /**
     * Every 12 months (unlimited).
     */
    public const YEA = 'YEA';

    /**
     * Every 2 years (unlimited).
     */
    public const TWOYE = '2YE';

    /**
     * Every 3 years (unlimited).
     */
    public const THREEYE = '3YE';

    /**
     * Every 3 years (no renewal).
     */
    public const THREEY3 = '3Y3';

    public function getAllowedValues(): array
    {
        return [
            self::DAY,
            self::W1W,
            self::W1M,
            self::W1Y,
            self::W2Y,
            self::WEE,
            self::B1M,
            self::B1Y,
            self::B2Y,
            self::BWE,
            self::MOH,
            self::MOY,
            self::MOT,
            self::M2M,
            self::MON,
            self::T1Y,
            self::T2Y,
            self::TME,
            self::Q3M,
            self::QU4,
            self::Q2Y,
            self::QYE,
            self::H6M,
            self::H1Y,
            self::H2Y,
            self::HYE,
            self::Y1Y,
            self::Y2Y,
            self::YEA,
            self::TWOYE,
            self::THREEYE,
            self::THREEY3,
        ];
    }

    public function jsonSerialize(): string
    {
        return $this->value;
    }
}
