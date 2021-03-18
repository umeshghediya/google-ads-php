<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/enums/frequency_cap_time_unit.proto

namespace Google\Ads\GoogleAds\V4\Enums\FrequencyCapTimeUnitEnum;

use UnexpectedValueException;

/**
 * Unit of time the cap is defined at (e.g. day, week).
 *
 * Protobuf type <code>google.ads.googleads.v4.enums.FrequencyCapTimeUnitEnum.FrequencyCapTimeUnit</code>
 */
class FrequencyCapTimeUnit
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The cap would define limit per one day.
     *
     * Generated from protobuf enum <code>DAY = 2;</code>
     */
    const DAY = 2;
    /**
     * The cap would define limit per one week.
     *
     * Generated from protobuf enum <code>WEEK = 3;</code>
     */
    const WEEK = 3;
    /**
     * The cap would define limit per one month.
     *
     * Generated from protobuf enum <code>MONTH = 4;</code>
     */
    const MONTH = 4;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::DAY => 'DAY',
        self::WEEK => 'WEEK',
        self::MONTH => 'MONTH',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FrequencyCapTimeUnit::class, \Google\Ads\GoogleAds\V4\Enums\FrequencyCapTimeUnitEnum_FrequencyCapTimeUnit::class);
