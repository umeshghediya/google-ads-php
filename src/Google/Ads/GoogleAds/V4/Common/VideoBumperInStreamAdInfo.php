<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V4\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Representation of video bumper in-stream ad format (very short in-stream
 * non-skippable video ad).
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.common.VideoBumperInStreamAdInfo</code>
 */
class VideoBumperInStreamAdInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The MediaFile resource name of the companion banner used with the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue companion_banner = 1;</code>
     */
    protected $companion_banner = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $companion_banner
     *           The MediaFile resource name of the companion banner used with the ad.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V4\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * The MediaFile resource name of the companion banner used with the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue companion_banner = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCompanionBanner()
    {
        return $this->companion_banner;
    }

    /**
     * Returns the unboxed value from <code>getCompanionBanner()</code>

     * The MediaFile resource name of the companion banner used with the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue companion_banner = 1;</code>
     * @return string|null
     */
    public function getCompanionBannerUnwrapped()
    {
        return $this->readWrapperValue("companion_banner");
    }

    /**
     * The MediaFile resource name of the companion banner used with the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue companion_banner = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCompanionBanner($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->companion_banner = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The MediaFile resource name of the companion banner used with the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue companion_banner = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCompanionBannerUnwrapped($var)
    {
        $this->writeWrapperValue("companion_banner", $var);
        return $this;}

}

