<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/enums/user_list_crm_data_source_type.proto

namespace Google\Ads\GoogleAds\V3\Enums\UserListCrmDataSourceTypeEnum;

use UnexpectedValueException;

/**
 * Enum describing possible user list crm data source type.
 *
 * Protobuf type <code>google.ads.googleads.v3.enums.UserListCrmDataSourceTypeEnum.UserListCrmDataSourceType</code>
 */
class UserListCrmDataSourceType
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
     * The uploaded data is first-party data.
     *
     * Generated from protobuf enum <code>FIRST_PARTY = 2;</code>
     */
    const FIRST_PARTY = 2;
    /**
     * The uploaded data is from a third-party credit bureau.
     *
     * Generated from protobuf enum <code>THIRD_PARTY_CREDIT_BUREAU = 3;</code>
     */
    const THIRD_PARTY_CREDIT_BUREAU = 3;
    /**
     * The uploaded data is from a third-party voter file.
     *
     * Generated from protobuf enum <code>THIRD_PARTY_VOTER_FILE = 4;</code>
     */
    const THIRD_PARTY_VOTER_FILE = 4;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::FIRST_PARTY => 'FIRST_PARTY',
        self::THIRD_PARTY_CREDIT_BUREAU => 'THIRD_PARTY_CREDIT_BUREAU',
        self::THIRD_PARTY_VOTER_FILE => 'THIRD_PARTY_VOTER_FILE',
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
class_alias(UserListCrmDataSourceType::class, \Google\Ads\GoogleAds\V3\Enums\UserListCrmDataSourceTypeEnum_UserListCrmDataSourceType::class);

