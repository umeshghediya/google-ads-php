<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/common/user_lists.proto

namespace Google\Ads\GoogleAds\V4\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A rule item composed of a number operation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.common.UserListNumberRuleItemInfo</code>
 */
class UserListNumberRuleItemInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Number comparison operator.
     * This field is required and must be populated when creating a new number
     * rule item.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.UserListNumberRuleItemOperatorEnum.UserListNumberRuleItemOperator operator = 1;</code>
     */
    protected $operator = 0;
    /**
     * Number value to be compared with the variable.
     * This field is required and must be populated when creating a new number
     * rule item.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue value = 2;</code>
     */
    protected $value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $operator
     *           Number comparison operator.
     *           This field is required and must be populated when creating a new number
     *           rule item.
     *     @type \Google\Protobuf\DoubleValue $value
     *           Number value to be compared with the variable.
     *           This field is required and must be populated when creating a new number
     *           rule item.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V4\Common\UserLists::initOnce();
        parent::__construct($data);
    }

    /**
     * Number comparison operator.
     * This field is required and must be populated when creating a new number
     * rule item.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.UserListNumberRuleItemOperatorEnum.UserListNumberRuleItemOperator operator = 1;</code>
     * @return int
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Number comparison operator.
     * This field is required and must be populated when creating a new number
     * rule item.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.UserListNumberRuleItemOperatorEnum.UserListNumberRuleItemOperator operator = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOperator($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\UserListNumberRuleItemOperatorEnum_UserListNumberRuleItemOperator::class);
        $this->operator = $var;

        return $this;
    }

    /**
     * Number value to be compared with the variable.
     * This field is required and must be populated when creating a new number
     * rule item.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue value = 2;</code>
     * @return \Google\Protobuf\DoubleValue
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Returns the unboxed value from <code>getValue()</code>

     * Number value to be compared with the variable.
     * This field is required and must be populated when creating a new number
     * rule item.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue value = 2;</code>
     * @return float|null
     */
    public function getValueUnwrapped()
    {
        return $this->readWrapperValue("value");
    }

    /**
     * Number value to be compared with the variable.
     * This field is required and must be populated when creating a new number
     * rule item.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue value = 2;</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->value = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\DoubleValue object.

     * Number value to be compared with the variable.
     * This field is required and must be populated when creating a new number
     * rule item.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue value = 2;</code>
     * @param float|null $var
     * @return $this
     */
    public function setValueUnwrapped($var)
    {
        $this->writeWrapperValue("value", $var);
        return $this;}

}

