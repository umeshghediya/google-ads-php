<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/common/extensions.proto

namespace Google\Ads\GoogleAds\V5\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Price extension.
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.common.PriceFeedItem</code>
 */
class PriceFeedItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Price extension type of this extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.PriceExtensionTypeEnum.PriceExtensionType type = 1;</code>
     */
    protected $type = 0;
    /**
     * Price qualifier for all offers of this price extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.PriceExtensionPriceQualifierEnum.PriceExtensionPriceQualifier price_qualifier = 2;</code>
     */
    protected $price_qualifier = 0;
    /**
     * Tracking URL template for all offers of this price extension.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url_template = 3;</code>
     */
    protected $tracking_url_template = null;
    /**
     * The code of the language used for this price extension.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 4;</code>
     */
    protected $language_code = null;
    /**
     * The price offerings in this price extension.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v5.common.PriceOffer price_offerings = 5;</code>
     */
    private $price_offerings;
    /**
     * URL template for appending params to landing page URLs served with parallel
     * tracking.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue final_url_suffix = 6;</code>
     */
    protected $final_url_suffix = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           Price extension type of this extension.
     *     @type int $price_qualifier
     *           Price qualifier for all offers of this price extension.
     *     @type \Google\Protobuf\StringValue $tracking_url_template
     *           Tracking URL template for all offers of this price extension.
     *     @type \Google\Protobuf\StringValue $language_code
     *           The code of the language used for this price extension.
     *     @type \Google\Ads\GoogleAds\V5\Common\PriceOffer[]|\Google\Protobuf\Internal\RepeatedField $price_offerings
     *           The price offerings in this price extension.
     *     @type \Google\Protobuf\StringValue $final_url_suffix
     *           URL template for appending params to landing page URLs served with parallel
     *           tracking.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V5\Common\Extensions::initOnce();
        parent::__construct($data);
    }

    /**
     * Price extension type of this extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.PriceExtensionTypeEnum.PriceExtensionType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Price extension type of this extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.PriceExtensionTypeEnum.PriceExtensionType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V5\Enums\PriceExtensionTypeEnum\PriceExtensionType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Price qualifier for all offers of this price extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.PriceExtensionPriceQualifierEnum.PriceExtensionPriceQualifier price_qualifier = 2;</code>
     * @return int
     */
    public function getPriceQualifier()
    {
        return $this->price_qualifier;
    }

    /**
     * Price qualifier for all offers of this price extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.PriceExtensionPriceQualifierEnum.PriceExtensionPriceQualifier price_qualifier = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPriceQualifier($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V5\Enums\PriceExtensionPriceQualifierEnum\PriceExtensionPriceQualifier::class);
        $this->price_qualifier = $var;

        return $this;
    }

    /**
     * Tracking URL template for all offers of this price extension.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url_template = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getTrackingUrlTemplate()
    {
        return isset($this->tracking_url_template) ? $this->tracking_url_template : null;
    }

    public function hasTrackingUrlTemplate()
    {
        return isset($this->tracking_url_template);
    }

    public function clearTrackingUrlTemplate()
    {
        unset($this->tracking_url_template);
    }

    /**
     * Returns the unboxed value from <code>getTrackingUrlTemplate()</code>

     * Tracking URL template for all offers of this price extension.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url_template = 3;</code>
     * @return string|null
     */
    public function getTrackingUrlTemplateUnwrapped()
    {
        return $this->readWrapperValue("tracking_url_template");
    }

    /**
     * Tracking URL template for all offers of this price extension.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url_template = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setTrackingUrlTemplate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->tracking_url_template = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Tracking URL template for all offers of this price extension.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url_template = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setTrackingUrlTemplateUnwrapped($var)
    {
        $this->writeWrapperValue("tracking_url_template", $var);
        return $this;}

    /**
     * The code of the language used for this price extension.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getLanguageCode()
    {
        return isset($this->language_code) ? $this->language_code : null;
    }

    public function hasLanguageCode()
    {
        return isset($this->language_code);
    }

    public function clearLanguageCode()
    {
        unset($this->language_code);
    }

    /**
     * Returns the unboxed value from <code>getLanguageCode()</code>

     * The code of the language used for this price extension.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 4;</code>
     * @return string|null
     */
    public function getLanguageCodeUnwrapped()
    {
        return $this->readWrapperValue("language_code");
    }

    /**
     * The code of the language used for this price extension.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->language_code = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The code of the language used for this price extension.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 4;</code>
     * @param string|null $var
     * @return $this
     */
    public function setLanguageCodeUnwrapped($var)
    {
        $this->writeWrapperValue("language_code", $var);
        return $this;}

    /**
     * The price offerings in this price extension.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v5.common.PriceOffer price_offerings = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPriceOfferings()
    {
        return $this->price_offerings;
    }

    /**
     * The price offerings in this price extension.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v5.common.PriceOffer price_offerings = 5;</code>
     * @param \Google\Ads\GoogleAds\V5\Common\PriceOffer[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPriceOfferings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V5\Common\PriceOffer::class);
        $this->price_offerings = $arr;

        return $this;
    }

    /**
     * URL template for appending params to landing page URLs served with parallel
     * tracking.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue final_url_suffix = 6;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getFinalUrlSuffix()
    {
        return isset($this->final_url_suffix) ? $this->final_url_suffix : null;
    }

    public function hasFinalUrlSuffix()
    {
        return isset($this->final_url_suffix);
    }

    public function clearFinalUrlSuffix()
    {
        unset($this->final_url_suffix);
    }

    /**
     * Returns the unboxed value from <code>getFinalUrlSuffix()</code>

     * URL template for appending params to landing page URLs served with parallel
     * tracking.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue final_url_suffix = 6;</code>
     * @return string|null
     */
    public function getFinalUrlSuffixUnwrapped()
    {
        return $this->readWrapperValue("final_url_suffix");
    }

    /**
     * URL template for appending params to landing page URLs served with parallel
     * tracking.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue final_url_suffix = 6;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setFinalUrlSuffix($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->final_url_suffix = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * URL template for appending params to landing page URLs served with parallel
     * tracking.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue final_url_suffix = 6;</code>
     * @param string|null $var
     * @return $this
     */
    public function setFinalUrlSuffixUnwrapped($var)
    {
        $this->writeWrapperValue("final_url_suffix", $var);
        return $this;}

}

