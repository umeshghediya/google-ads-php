<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/common/criteria.proto

namespace Google\Ads\GoogleAds\V4\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A radius around a list of locations specified via a feed.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.common.LocationGroupInfo</code>
 */
class LocationGroupInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Feed specifying locations for targeting.
     * This is required and must be set in CREATE operations.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed = 1;</code>
     */
    protected $feed = null;
    /**
     * Geo target constant(s) restricting the scope of the geographic area within
     * the feed. Currently only one geo target constant is allowed.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue geo_target_constants = 2;</code>
     */
    private $geo_target_constants;
    /**
     * Distance in units specifying the radius around targeted locations.
     * This is required and must be set in CREATE operations.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value radius = 3;</code>
     */
    protected $radius = null;
    /**
     * Unit of the radius, miles and meters supported currently.
     * This is required and must be set in CREATE operations.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.LocationGroupRadiusUnitsEnum.LocationGroupRadiusUnits radius_units = 4;</code>
     */
    protected $radius_units = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $feed
     *           Feed specifying locations for targeting.
     *           This is required and must be set in CREATE operations.
     *     @type \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $geo_target_constants
     *           Geo target constant(s) restricting the scope of the geographic area within
     *           the feed. Currently only one geo target constant is allowed.
     *     @type \Google\Protobuf\Int64Value $radius
     *           Distance in units specifying the radius around targeted locations.
     *           This is required and must be set in CREATE operations.
     *     @type int $radius_units
     *           Unit of the radius, miles and meters supported currently.
     *           This is required and must be set in CREATE operations.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V4\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * Feed specifying locations for targeting.
     * This is required and must be set in CREATE operations.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getFeed()
    {
        return $this->feed;
    }

    /**
     * Returns the unboxed value from <code>getFeed()</code>

     * Feed specifying locations for targeting.
     * This is required and must be set in CREATE operations.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed = 1;</code>
     * @return string|null
     */
    public function getFeedUnwrapped()
    {
        return $this->readWrapperValue("feed");
    }

    /**
     * Feed specifying locations for targeting.
     * This is required and must be set in CREATE operations.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setFeed($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->feed = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Feed specifying locations for targeting.
     * This is required and must be set in CREATE operations.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setFeedUnwrapped($var)
    {
        $this->writeWrapperValue("feed", $var);
        return $this;}

    /**
     * Geo target constant(s) restricting the scope of the geographic area within
     * the feed. Currently only one geo target constant is allowed.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue geo_target_constants = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGeoTargetConstants()
    {
        return $this->geo_target_constants;
    }

    /**
     * Geo target constant(s) restricting the scope of the geographic area within
     * the feed. Currently only one geo target constant is allowed.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue geo_target_constants = 2;</code>
     * @param \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGeoTargetConstants($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\StringValue::class);
        $this->geo_target_constants = $arr;

        return $this;
    }

    /**
     * Distance in units specifying the radius around targeted locations.
     * This is required and must be set in CREATE operations.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value radius = 3;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * Returns the unboxed value from <code>getRadius()</code>

     * Distance in units specifying the radius around targeted locations.
     * This is required and must be set in CREATE operations.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value radius = 3;</code>
     * @return int|string|null
     */
    public function getRadiusUnwrapped()
    {
        return $this->readWrapperValue("radius");
    }

    /**
     * Distance in units specifying the radius around targeted locations.
     * This is required and must be set in CREATE operations.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value radius = 3;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setRadius($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->radius = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Distance in units specifying the radius around targeted locations.
     * This is required and must be set in CREATE operations.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value radius = 3;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setRadiusUnwrapped($var)
    {
        $this->writeWrapperValue("radius", $var);
        return $this;}

    /**
     * Unit of the radius, miles and meters supported currently.
     * This is required and must be set in CREATE operations.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.LocationGroupRadiusUnitsEnum.LocationGroupRadiusUnits radius_units = 4;</code>
     * @return int
     */
    public function getRadiusUnits()
    {
        return $this->radius_units;
    }

    /**
     * Unit of the radius, miles and meters supported currently.
     * This is required and must be set in CREATE operations.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.LocationGroupRadiusUnitsEnum.LocationGroupRadiusUnits radius_units = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setRadiusUnits($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\LocationGroupRadiusUnitsEnum_LocationGroupRadiusUnits::class);
        $this->radius_units = $var;

        return $this;
    }

}

