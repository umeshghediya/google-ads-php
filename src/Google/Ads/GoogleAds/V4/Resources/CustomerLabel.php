<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/resources/customer_label.proto

namespace Google\Ads\GoogleAds\V4\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a relationship between a customer and a label. This customer may
 * not have access to all the labels attached to it. Additional CustomerLabels
 * may be returned by increasing permissions with login-customer-id.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.resources.CustomerLabel</code>
 */
class CustomerLabel extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. Name of the resource.
     * Customer label resource names have the form:
     * `customers/{customer_id}/customerLabels/{label_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The resource name of the customer to which the label is attached.
     * Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue customer = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $customer = null;
    /**
     * Output only. The resource name of the label assigned to the customer.
     * Note: the Customer ID portion of the label resource name is not
     * validated when creating a new CustomerLabel.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue label = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $label = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. Name of the resource.
     *           Customer label resource names have the form:
     *           `customers/{customer_id}/customerLabels/{label_id}`
     *     @type \Google\Protobuf\StringValue $customer
     *           Output only. The resource name of the customer to which the label is attached.
     *           Read only.
     *     @type \Google\Protobuf\StringValue $label
     *           Output only. The resource name of the label assigned to the customer.
     *           Note: the Customer ID portion of the label resource name is not
     *           validated when creating a new CustomerLabel.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V4\Resources\CustomerLabel::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. Name of the resource.
     * Customer label resource names have the form:
     * `customers/{customer_id}/customerLabels/{label_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. Name of the resource.
     * Customer label resource names have the form:
     * `customers/{customer_id}/customerLabels/{label_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. The resource name of the customer to which the label is attached.
     * Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue customer = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Returns the unboxed value from <code>getCustomer()</code>

     * Output only. The resource name of the customer to which the label is attached.
     * Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue customer = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getCustomerUnwrapped()
    {
        return $this->readWrapperValue("customer");
    }

    /**
     * Output only. The resource name of the customer to which the label is attached.
     * Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue customer = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCustomer($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->customer = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The resource name of the customer to which the label is attached.
     * Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue customer = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setCustomerUnwrapped($var)
    {
        $this->writeWrapperValue("customer", $var);
        return $this;}

    /**
     * Output only. The resource name of the label assigned to the customer.
     * Note: the Customer ID portion of the label resource name is not
     * validated when creating a new CustomerLabel.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue label = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Returns the unboxed value from <code>getLabel()</code>

     * Output only. The resource name of the label assigned to the customer.
     * Note: the Customer ID portion of the label resource name is not
     * validated when creating a new CustomerLabel.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue label = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getLabelUnwrapped()
    {
        return $this->readWrapperValue("label");
    }

    /**
     * Output only. The resource name of the label assigned to the customer.
     * Note: the Customer ID portion of the label resource name is not
     * validated when creating a new CustomerLabel.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue label = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setLabel($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->label = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The resource name of the label assigned to the customer.
     * Note: the Customer ID portion of the label resource name is not
     * validated when creating a new CustomerLabel.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue label = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setLabelUnwrapped($var)
    {
        $this->writeWrapperValue("label", $var);
        return $this;}

}

