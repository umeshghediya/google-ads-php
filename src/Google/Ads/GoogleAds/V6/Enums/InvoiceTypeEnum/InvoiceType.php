<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/enums/invoice_type.proto

namespace Google\Ads\GoogleAds\V6\Enums\InvoiceTypeEnum;

use UnexpectedValueException;

/**
 * The possible type of invoices.
 *
 * Protobuf type <code>google.ads.googleads.v6.enums.InvoiceTypeEnum.InvoiceType</code>
 */
class InvoiceType
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
     * An invoice with a negative amount. The account receives a credit.
     *
     * Generated from protobuf enum <code>CREDIT_MEMO = 2;</code>
     */
    const CREDIT_MEMO = 2;
    /**
     * An invoice with a positive amount. The account owes a balance.
     *
     * Generated from protobuf enum <code>INVOICE = 3;</code>
     */
    const INVOICE = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::CREDIT_MEMO => 'CREDIT_MEMO',
        self::INVOICE => 'INVOICE',
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
class_alias(InvoiceType::class, \Google\Ads\GoogleAds\V6\Enums\InvoiceTypeEnum_InvoiceType::class);

