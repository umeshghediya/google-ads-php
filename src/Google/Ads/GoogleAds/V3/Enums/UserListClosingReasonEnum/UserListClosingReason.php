<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/enums/user_list_closing_reason.proto

namespace Google\Ads\GoogleAds\V3\Enums\UserListClosingReasonEnum;

use UnexpectedValueException;

/**
 * Enum describing possible user list closing reasons.
 *
 * Protobuf type <code>google.ads.googleads.v3.enums.UserListClosingReasonEnum.UserListClosingReason</code>
 */
class UserListClosingReason
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
     * The userlist was closed because of not being used for over one year.
     *
     * Generated from protobuf enum <code>UNUSED = 2;</code>
     */
    const UNUSED = 2;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::UNUSED => 'UNUSED',
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
class_alias(UserListClosingReason::class, \Google\Ads\GoogleAds\V3\Enums\UserListClosingReasonEnum_UserListClosingReason::class);

