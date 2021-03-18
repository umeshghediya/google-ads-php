<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/common/targeting_setting.proto

namespace Google\Ads\GoogleAds\V4\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The list of per-targeting-dimension targeting settings.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.common.TargetRestriction</code>
 */
class TargetRestriction extends \Google\Protobuf\Internal\Message
{
    /**
     * The targeting dimension that these settings apply to.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.TargetingDimensionEnum.TargetingDimension targeting_dimension = 1;</code>
     */
    protected $targeting_dimension = 0;
    /**
     * Indicates whether to restrict your ads to show only for the criteria you
     * have selected for this targeting_dimension, or to target all values for
     * this targeting_dimension and show ads based on your targeting in other
     * TargetingDimensions. A value of `true` means that these criteria will only
     * apply bid modifiers, and not affect targeting. A value of `false` means
     * that these criteria will restrict targeting as well as applying bid
     * modifiers.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue bid_only = 2;</code>
     */
    protected $bid_only = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $targeting_dimension
     *           The targeting dimension that these settings apply to.
     *     @type \Google\Protobuf\BoolValue $bid_only
     *           Indicates whether to restrict your ads to show only for the criteria you
     *           have selected for this targeting_dimension, or to target all values for
     *           this targeting_dimension and show ads based on your targeting in other
     *           TargetingDimensions. A value of `true` means that these criteria will only
     *           apply bid modifiers, and not affect targeting. A value of `false` means
     *           that these criteria will restrict targeting as well as applying bid
     *           modifiers.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V4\Common\TargetingSetting::initOnce();
        parent::__construct($data);
    }

    /**
     * The targeting dimension that these settings apply to.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.TargetingDimensionEnum.TargetingDimension targeting_dimension = 1;</code>
     * @return int
     */
    public function getTargetingDimension()
    {
        return $this->targeting_dimension;
    }

    /**
     * The targeting dimension that these settings apply to.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.TargetingDimensionEnum.TargetingDimension targeting_dimension = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setTargetingDimension($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\TargetingDimensionEnum_TargetingDimension::class);
        $this->targeting_dimension = $var;

        return $this;
    }

    /**
     * Indicates whether to restrict your ads to show only for the criteria you
     * have selected for this targeting_dimension, or to target all values for
     * this targeting_dimension and show ads based on your targeting in other
     * TargetingDimensions. A value of `true` means that these criteria will only
     * apply bid modifiers, and not affect targeting. A value of `false` means
     * that these criteria will restrict targeting as well as applying bid
     * modifiers.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue bid_only = 2;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getBidOnly()
    {
        return $this->bid_only;
    }

    /**
     * Returns the unboxed value from <code>getBidOnly()</code>

     * Indicates whether to restrict your ads to show only for the criteria you
     * have selected for this targeting_dimension, or to target all values for
     * this targeting_dimension and show ads based on your targeting in other
     * TargetingDimensions. A value of `true` means that these criteria will only
     * apply bid modifiers, and not affect targeting. A value of `false` means
     * that these criteria will restrict targeting as well as applying bid
     * modifiers.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue bid_only = 2;</code>
     * @return bool|null
     */
    public function getBidOnlyUnwrapped()
    {
        return $this->readWrapperValue("bid_only");
    }

    /**
     * Indicates whether to restrict your ads to show only for the criteria you
     * have selected for this targeting_dimension, or to target all values for
     * this targeting_dimension and show ads based on your targeting in other
     * TargetingDimensions. A value of `true` means that these criteria will only
     * apply bid modifiers, and not affect targeting. A value of `false` means
     * that these criteria will restrict targeting as well as applying bid
     * modifiers.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue bid_only = 2;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setBidOnly($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->bid_only = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Indicates whether to restrict your ads to show only for the criteria you
     * have selected for this targeting_dimension, or to target all values for
     * this targeting_dimension and show ads based on your targeting in other
     * TargetingDimensions. A value of `true` means that these criteria will only
     * apply bid modifiers, and not affect targeting. A value of `false` means
     * that these criteria will restrict targeting as well as applying bid
     * modifiers.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue bid_only = 2;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setBidOnlyUnwrapped($var)
    {
        $this->writeWrapperValue("bid_only", $var);
        return $this;}

}

