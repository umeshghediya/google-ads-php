<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/services/recommendation_service.proto

namespace Google\Ads\GoogleAds\V3\Services\ApplyRecommendationOperation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Parameters to use when applying sitelink extension recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.services.ApplyRecommendationOperation.SitelinkExtensionParameters</code>
 */
class SitelinkExtensionParameters extends \Google\Protobuf\Internal\Message
{
    /**
     * Sitelink extensions to be added. This is a required field.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v3.common.SitelinkFeedItem sitelink_extensions = 1;</code>
     */
    private $sitelink_extensions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V3\Common\SitelinkFeedItem[]|\Google\Protobuf\Internal\RepeatedField $sitelink_extensions
     *           Sitelink extensions to be added. This is a required field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Services\RecommendationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Sitelink extensions to be added. This is a required field.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v3.common.SitelinkFeedItem sitelink_extensions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSitelinkExtensions()
    {
        return $this->sitelink_extensions;
    }

    /**
     * Sitelink extensions to be added. This is a required field.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v3.common.SitelinkFeedItem sitelink_extensions = 1;</code>
     * @param \Google\Ads\GoogleAds\V3\Common\SitelinkFeedItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSitelinkExtensions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V3\Common\SitelinkFeedItem::class);
        $this->sitelink_extensions = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SitelinkExtensionParameters::class, \Google\Ads\GoogleAds\V3\Services\ApplyRecommendationOperation_SitelinkExtensionParameters::class);

