<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/common/asset_types.proto

namespace Google\Ads\GoogleAds\V4\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for an image at a certain size, either original or resized.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.common.ImageDimension</code>
 */
class ImageDimension extends \Google\Protobuf\Internal\Message
{
    /**
     * Height of the image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value height_pixels = 1;</code>
     */
    protected $height_pixels = null;
    /**
     * Width of the image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value width_pixels = 2;</code>
     */
    protected $width_pixels = null;
    /**
     * A URL that returns the image with this height and width.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue url = 3;</code>
     */
    protected $url = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int64Value $height_pixels
     *           Height of the image.
     *     @type \Google\Protobuf\Int64Value $width_pixels
     *           Width of the image.
     *     @type \Google\Protobuf\StringValue $url
     *           A URL that returns the image with this height and width.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V4\Common\AssetTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * Height of the image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value height_pixels = 1;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getHeightPixels()
    {
        return $this->height_pixels;
    }

    /**
     * Returns the unboxed value from <code>getHeightPixels()</code>

     * Height of the image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value height_pixels = 1;</code>
     * @return int|string|null
     */
    public function getHeightPixelsUnwrapped()
    {
        return $this->readWrapperValue("height_pixels");
    }

    /**
     * Height of the image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value height_pixels = 1;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setHeightPixels($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->height_pixels = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Height of the image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value height_pixels = 1;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setHeightPixelsUnwrapped($var)
    {
        $this->writeWrapperValue("height_pixels", $var);
        return $this;}

    /**
     * Width of the image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value width_pixels = 2;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getWidthPixels()
    {
        return $this->width_pixels;
    }

    /**
     * Returns the unboxed value from <code>getWidthPixels()</code>

     * Width of the image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value width_pixels = 2;</code>
     * @return int|string|null
     */
    public function getWidthPixelsUnwrapped()
    {
        return $this->readWrapperValue("width_pixels");
    }

    /**
     * Width of the image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value width_pixels = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setWidthPixels($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->width_pixels = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Width of the image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value width_pixels = 2;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setWidthPixelsUnwrapped($var)
    {
        $this->writeWrapperValue("width_pixels", $var);
        return $this;}

    /**
     * A URL that returns the image with this height and width.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue url = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Returns the unboxed value from <code>getUrl()</code>

     * A URL that returns the image with this height and width.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue url = 3;</code>
     * @return string|null
     */
    public function getUrlUnwrapped()
    {
        return $this->readWrapperValue("url");
    }

    /**
     * A URL that returns the image with this height and width.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue url = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->url = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * A URL that returns the image with this height and width.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue url = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setUrlUnwrapped($var)
    {
        $this->writeWrapperValue("url", $var);
        return $this;}

}

