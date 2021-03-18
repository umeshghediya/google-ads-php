<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/resources/customer_client.proto

namespace Google\Ads\GoogleAds\V5\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A link between the given customer and a client customer. CustomerClients only
 * exist for manager customers. All direct and indirect client customers are
 * included, as well as the manager itself.
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.resources.CustomerClient</code>
 */
class CustomerClient extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the customer client.
     * CustomerClient resource names have the form:
     * `customers/{customer_id}/customerClients/{client_customer_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The resource name of the client-customer which is linked to
     * the given customer. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue client_customer = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $client_customer = null;
    /**
     * Output only. Specifies whether this is a
     * [hidden account](https://support.google.com/google-ads/answer/7519830).
     * Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue hidden = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $hidden = null;
    /**
     * Output only. Distance between given customer and client. For self link, the level value
     * will be 0. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value level = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $level = null;
    /**
     * Output only. Common Locale Data Repository (CLDR) string representation of the
     * time zone of the client, e.g. America/Los_Angeles. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue time_zone = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $time_zone = null;
    /**
     * Output only. Identifies if the client is a test account. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue test_account = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $test_account = null;
    /**
     * Output only. Identifies if the client is a manager. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue manager = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $manager = null;
    /**
     * Output only. Descriptive name for the client. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue descriptive_name = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $descriptive_name = null;
    /**
     * Output only. Currency code (e.g. 'USD', 'EUR') for the client. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $currency_code = null;
    /**
     * Output only. The ID of the client customer. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the customer client.
     *           CustomerClient resource names have the form:
     *           `customers/{customer_id}/customerClients/{client_customer_id}`
     *     @type \Google\Protobuf\StringValue $client_customer
     *           Output only. The resource name of the client-customer which is linked to
     *           the given customer. Read only.
     *     @type \Google\Protobuf\BoolValue $hidden
     *           Output only. Specifies whether this is a
     *           [hidden account](https://support.google.com/google-ads/answer/7519830).
     *           Read only.
     *     @type \Google\Protobuf\Int64Value $level
     *           Output only. Distance between given customer and client. For self link, the level value
     *           will be 0. Read only.
     *     @type \Google\Protobuf\StringValue $time_zone
     *           Output only. Common Locale Data Repository (CLDR) string representation of the
     *           time zone of the client, e.g. America/Los_Angeles. Read only.
     *     @type \Google\Protobuf\BoolValue $test_account
     *           Output only. Identifies if the client is a test account. Read only.
     *     @type \Google\Protobuf\BoolValue $manager
     *           Output only. Identifies if the client is a manager. Read only.
     *     @type \Google\Protobuf\StringValue $descriptive_name
     *           Output only. Descriptive name for the client. Read only.
     *     @type \Google\Protobuf\StringValue $currency_code
     *           Output only. Currency code (e.g. 'USD', 'EUR') for the client. Read only.
     *     @type \Google\Protobuf\Int64Value $id
     *           Output only. The ID of the client customer. Read only.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V5\Resources\CustomerClient::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the customer client.
     * CustomerClient resource names have the form:
     * `customers/{customer_id}/customerClients/{client_customer_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the customer client.
     * CustomerClient resource names have the form:
     * `customers/{customer_id}/customerClients/{client_customer_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
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
     * Output only. The resource name of the client-customer which is linked to
     * the given customer. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue client_customer = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getClientCustomer()
    {
        return isset($this->client_customer) ? $this->client_customer : null;
    }

    public function hasClientCustomer()
    {
        return isset($this->client_customer);
    }

    public function clearClientCustomer()
    {
        unset($this->client_customer);
    }

    /**
     * Returns the unboxed value from <code>getClientCustomer()</code>

     * Output only. The resource name of the client-customer which is linked to
     * the given customer. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue client_customer = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getClientCustomerUnwrapped()
    {
        return $this->readWrapperValue("client_customer");
    }

    /**
     * Output only. The resource name of the client-customer which is linked to
     * the given customer. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue client_customer = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setClientCustomer($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->client_customer = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The resource name of the client-customer which is linked to
     * the given customer. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue client_customer = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setClientCustomerUnwrapped($var)
    {
        $this->writeWrapperValue("client_customer", $var);
        return $this;}

    /**
     * Output only. Specifies whether this is a
     * [hidden account](https://support.google.com/google-ads/answer/7519830).
     * Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue hidden = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getHidden()
    {
        return isset($this->hidden) ? $this->hidden : null;
    }

    public function hasHidden()
    {
        return isset($this->hidden);
    }

    public function clearHidden()
    {
        unset($this->hidden);
    }

    /**
     * Returns the unboxed value from <code>getHidden()</code>

     * Output only. Specifies whether this is a
     * [hidden account](https://support.google.com/google-ads/answer/7519830).
     * Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue hidden = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool|null
     */
    public function getHiddenUnwrapped()
    {
        return $this->readWrapperValue("hidden");
    }

    /**
     * Output only. Specifies whether this is a
     * [hidden account](https://support.google.com/google-ads/answer/7519830).
     * Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue hidden = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setHidden($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->hidden = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Output only. Specifies whether this is a
     * [hidden account](https://support.google.com/google-ads/answer/7519830).
     * Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue hidden = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool|null $var
     * @return $this
     */
    public function setHiddenUnwrapped($var)
    {
        $this->writeWrapperValue("hidden", $var);
        return $this;}

    /**
     * Output only. Distance between given customer and client. For self link, the level value
     * will be 0. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value level = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getLevel()
    {
        return isset($this->level) ? $this->level : null;
    }

    public function hasLevel()
    {
        return isset($this->level);
    }

    public function clearLevel()
    {
        unset($this->level);
    }

    /**
     * Returns the unboxed value from <code>getLevel()</code>

     * Output only. Distance between given customer and client. For self link, the level value
     * will be 0. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value level = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string|null
     */
    public function getLevelUnwrapped()
    {
        return $this->readWrapperValue("level");
    }

    /**
     * Output only. Distance between given customer and client. For self link, the level value
     * will be 0. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value level = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->level = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Output only. Distance between given customer and client. For self link, the level value
     * will be 0. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value level = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setLevelUnwrapped($var)
    {
        $this->writeWrapperValue("level", $var);
        return $this;}

    /**
     * Output only. Common Locale Data Repository (CLDR) string representation of the
     * time zone of the client, e.g. America/Los_Angeles. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue time_zone = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getTimeZone()
    {
        return isset($this->time_zone) ? $this->time_zone : null;
    }

    public function hasTimeZone()
    {
        return isset($this->time_zone);
    }

    public function clearTimeZone()
    {
        unset($this->time_zone);
    }

    /**
     * Returns the unboxed value from <code>getTimeZone()</code>

     * Output only. Common Locale Data Repository (CLDR) string representation of the
     * time zone of the client, e.g. America/Los_Angeles. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue time_zone = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getTimeZoneUnwrapped()
    {
        return $this->readWrapperValue("time_zone");
    }

    /**
     * Output only. Common Locale Data Repository (CLDR) string representation of the
     * time zone of the client, e.g. America/Los_Angeles. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue time_zone = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setTimeZone($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->time_zone = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. Common Locale Data Repository (CLDR) string representation of the
     * time zone of the client, e.g. America/Los_Angeles. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue time_zone = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setTimeZoneUnwrapped($var)
    {
        $this->writeWrapperValue("time_zone", $var);
        return $this;}

    /**
     * Output only. Identifies if the client is a test account. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue test_account = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getTestAccount()
    {
        return isset($this->test_account) ? $this->test_account : null;
    }

    public function hasTestAccount()
    {
        return isset($this->test_account);
    }

    public function clearTestAccount()
    {
        unset($this->test_account);
    }

    /**
     * Returns the unboxed value from <code>getTestAccount()</code>

     * Output only. Identifies if the client is a test account. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue test_account = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool|null
     */
    public function getTestAccountUnwrapped()
    {
        return $this->readWrapperValue("test_account");
    }

    /**
     * Output only. Identifies if the client is a test account. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue test_account = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setTestAccount($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->test_account = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Output only. Identifies if the client is a test account. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue test_account = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool|null $var
     * @return $this
     */
    public function setTestAccountUnwrapped($var)
    {
        $this->writeWrapperValue("test_account", $var);
        return $this;}

    /**
     * Output only. Identifies if the client is a manager. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue manager = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getManager()
    {
        return isset($this->manager) ? $this->manager : null;
    }

    public function hasManager()
    {
        return isset($this->manager);
    }

    public function clearManager()
    {
        unset($this->manager);
    }

    /**
     * Returns the unboxed value from <code>getManager()</code>

     * Output only. Identifies if the client is a manager. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue manager = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool|null
     */
    public function getManagerUnwrapped()
    {
        return $this->readWrapperValue("manager");
    }

    /**
     * Output only. Identifies if the client is a manager. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue manager = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setManager($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->manager = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Output only. Identifies if the client is a manager. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue manager = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool|null $var
     * @return $this
     */
    public function setManagerUnwrapped($var)
    {
        $this->writeWrapperValue("manager", $var);
        return $this;}

    /**
     * Output only. Descriptive name for the client. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue descriptive_name = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getDescriptiveName()
    {
        return isset($this->descriptive_name) ? $this->descriptive_name : null;
    }

    public function hasDescriptiveName()
    {
        return isset($this->descriptive_name);
    }

    public function clearDescriptiveName()
    {
        unset($this->descriptive_name);
    }

    /**
     * Returns the unboxed value from <code>getDescriptiveName()</code>

     * Output only. Descriptive name for the client. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue descriptive_name = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getDescriptiveNameUnwrapped()
    {
        return $this->readWrapperValue("descriptive_name");
    }

    /**
     * Output only. Descriptive name for the client. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue descriptive_name = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setDescriptiveName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->descriptive_name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. Descriptive name for the client. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue descriptive_name = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setDescriptiveNameUnwrapped($var)
    {
        $this->writeWrapperValue("descriptive_name", $var);
        return $this;}

    /**
     * Output only. Currency code (e.g. 'USD', 'EUR') for the client. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCurrencyCode()
    {
        return isset($this->currency_code) ? $this->currency_code : null;
    }

    public function hasCurrencyCode()
    {
        return isset($this->currency_code);
    }

    public function clearCurrencyCode()
    {
        unset($this->currency_code);
    }

    /**
     * Returns the unboxed value from <code>getCurrencyCode()</code>

     * Output only. Currency code (e.g. 'USD', 'EUR') for the client. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getCurrencyCodeUnwrapped()
    {
        return $this->readWrapperValue("currency_code");
    }

    /**
     * Output only. Currency code (e.g. 'USD', 'EUR') for the client. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCurrencyCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->currency_code = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. Currency code (e.g. 'USD', 'EUR') for the client. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setCurrencyCodeUnwrapped($var)
    {
        $this->writeWrapperValue("currency_code", $var);
        return $this;}

    /**
     * Output only. The ID of the client customer. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : null;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * Returns the unboxed value from <code>getId()</code>

     * Output only. The ID of the client customer. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string|null
     */
    public function getIdUnwrapped()
    {
        return $this->readWrapperValue("id");
    }

    /**
     * Output only. The ID of the client customer. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Output only. The ID of the client customer. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setIdUnwrapped($var)
    {
        $this->writeWrapperValue("id", $var);
        return $this;}

}

