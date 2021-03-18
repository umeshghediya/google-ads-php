<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/resources/invoice.proto

namespace Google\Ads\GoogleAds\V3\Resources\Invoice;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a summarized account budget billable cost.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.resources.Invoice.AccountBudgetSummary</code>
 */
class AccountBudgetSummary extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the customer associated with this account budget.
     * This contains the customer ID, which appears on the invoice PDF as
     * "Account ID".
     * Customer resource names have the form:
     * `customers/{customer_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue customer = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $customer = null;
    /**
     * Output only. The descriptive name of the account budget’s customer. It appears on the
     * invoice PDF as "Account".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue customer_descriptive_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $customer_descriptive_name = null;
    /**
     * Output only. The resource name of the account budget associated with this summarized
     * billable cost.
     * AccountBudget resource names have the form:
     * `customers/{customer_id}/accountBudgets/{account_budget_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue account_budget = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $account_budget = null;
    /**
     * Output only. The name of the account budget. It appears on the invoice PDF as "Account
     * budget".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue account_budget_name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $account_budget_name = null;
    /**
     * Output only. The purchase order number of the account budget. It appears on the
     * invoice PDF as "Purchase order".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue purchase_order_number = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $purchase_order_number = null;
    /**
     * Output only. The pretax subtotal amount attributable to this budget during the service
     * period, in micros.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value subtotal_amount_micros = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $subtotal_amount_micros = null;
    /**
     * Output only. The tax amount attributable to this budget during the service period, in
     * micros.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value tax_amount_micros = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $tax_amount_micros = null;
    /**
     * Output only. The total amount attributable to this budget during the service period,
     * in micros. This equals the sum of the account budget subtotal amount and
     * the account budget tax amount.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value total_amount_micros = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $total_amount_micros = null;
    /**
     * Output only. The billable activity date range of the account budget, within the
     * service date range of this invoice. The end date is inclusive. This can
     * be different from the account budget's start and end time.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.common.DateRange billable_activity_date_range = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $billable_activity_date_range = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $customer
     *           Output only. The resource name of the customer associated with this account budget.
     *           This contains the customer ID, which appears on the invoice PDF as
     *           "Account ID".
     *           Customer resource names have the form:
     *           `customers/{customer_id}`
     *     @type \Google\Protobuf\StringValue $customer_descriptive_name
     *           Output only. The descriptive name of the account budget’s customer. It appears on the
     *           invoice PDF as "Account".
     *     @type \Google\Protobuf\StringValue $account_budget
     *           Output only. The resource name of the account budget associated with this summarized
     *           billable cost.
     *           AccountBudget resource names have the form:
     *           `customers/{customer_id}/accountBudgets/{account_budget_id}`
     *     @type \Google\Protobuf\StringValue $account_budget_name
     *           Output only. The name of the account budget. It appears on the invoice PDF as "Account
     *           budget".
     *     @type \Google\Protobuf\StringValue $purchase_order_number
     *           Output only. The purchase order number of the account budget. It appears on the
     *           invoice PDF as "Purchase order".
     *     @type \Google\Protobuf\Int64Value $subtotal_amount_micros
     *           Output only. The pretax subtotal amount attributable to this budget during the service
     *           period, in micros.
     *     @type \Google\Protobuf\Int64Value $tax_amount_micros
     *           Output only. The tax amount attributable to this budget during the service period, in
     *           micros.
     *     @type \Google\Protobuf\Int64Value $total_amount_micros
     *           Output only. The total amount attributable to this budget during the service period,
     *           in micros. This equals the sum of the account budget subtotal amount and
     *           the account budget tax amount.
     *     @type \Google\Ads\GoogleAds\V3\Common\DateRange $billable_activity_date_range
     *           Output only. The billable activity date range of the account budget, within the
     *           service date range of this invoice. The end date is inclusive. This can
     *           be different from the account budget's start and end time.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Resources\Invoice::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the customer associated with this account budget.
     * This contains the customer ID, which appears on the invoice PDF as
     * "Account ID".
     * Customer resource names have the form:
     * `customers/{customer_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue customer = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Returns the unboxed value from <code>getCustomer()</code>

     * Output only. The resource name of the customer associated with this account budget.
     * This contains the customer ID, which appears on the invoice PDF as
     * "Account ID".
     * Customer resource names have the form:
     * `customers/{customer_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue customer = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getCustomerUnwrapped()
    {
        return $this->readWrapperValue("customer");
    }

    /**
     * Output only. The resource name of the customer associated with this account budget.
     * This contains the customer ID, which appears on the invoice PDF as
     * "Account ID".
     * Customer resource names have the form:
     * `customers/{customer_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue customer = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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

     * Output only. The resource name of the customer associated with this account budget.
     * This contains the customer ID, which appears on the invoice PDF as
     * "Account ID".
     * Customer resource names have the form:
     * `customers/{customer_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue customer = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setCustomerUnwrapped($var)
    {
        $this->writeWrapperValue("customer", $var);
        return $this;}

    /**
     * Output only. The descriptive name of the account budget’s customer. It appears on the
     * invoice PDF as "Account".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue customer_descriptive_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCustomerDescriptiveName()
    {
        return $this->customer_descriptive_name;
    }

    /**
     * Returns the unboxed value from <code>getCustomerDescriptiveName()</code>

     * Output only. The descriptive name of the account budget’s customer. It appears on the
     * invoice PDF as "Account".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue customer_descriptive_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getCustomerDescriptiveNameUnwrapped()
    {
        return $this->readWrapperValue("customer_descriptive_name");
    }

    /**
     * Output only. The descriptive name of the account budget’s customer. It appears on the
     * invoice PDF as "Account".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue customer_descriptive_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCustomerDescriptiveName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->customer_descriptive_name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The descriptive name of the account budget’s customer. It appears on the
     * invoice PDF as "Account".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue customer_descriptive_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setCustomerDescriptiveNameUnwrapped($var)
    {
        $this->writeWrapperValue("customer_descriptive_name", $var);
        return $this;}

    /**
     * Output only. The resource name of the account budget associated with this summarized
     * billable cost.
     * AccountBudget resource names have the form:
     * `customers/{customer_id}/accountBudgets/{account_budget_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue account_budget = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAccountBudget()
    {
        return $this->account_budget;
    }

    /**
     * Returns the unboxed value from <code>getAccountBudget()</code>

     * Output only. The resource name of the account budget associated with this summarized
     * billable cost.
     * AccountBudget resource names have the form:
     * `customers/{customer_id}/accountBudgets/{account_budget_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue account_budget = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getAccountBudgetUnwrapped()
    {
        return $this->readWrapperValue("account_budget");
    }

    /**
     * Output only. The resource name of the account budget associated with this summarized
     * billable cost.
     * AccountBudget resource names have the form:
     * `customers/{customer_id}/accountBudgets/{account_budget_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue account_budget = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAccountBudget($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->account_budget = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The resource name of the account budget associated with this summarized
     * billable cost.
     * AccountBudget resource names have the form:
     * `customers/{customer_id}/accountBudgets/{account_budget_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue account_budget = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setAccountBudgetUnwrapped($var)
    {
        $this->writeWrapperValue("account_budget", $var);
        return $this;}

    /**
     * Output only. The name of the account budget. It appears on the invoice PDF as "Account
     * budget".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue account_budget_name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAccountBudgetName()
    {
        return $this->account_budget_name;
    }

    /**
     * Returns the unboxed value from <code>getAccountBudgetName()</code>

     * Output only. The name of the account budget. It appears on the invoice PDF as "Account
     * budget".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue account_budget_name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getAccountBudgetNameUnwrapped()
    {
        return $this->readWrapperValue("account_budget_name");
    }

    /**
     * Output only. The name of the account budget. It appears on the invoice PDF as "Account
     * budget".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue account_budget_name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAccountBudgetName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->account_budget_name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The name of the account budget. It appears on the invoice PDF as "Account
     * budget".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue account_budget_name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setAccountBudgetNameUnwrapped($var)
    {
        $this->writeWrapperValue("account_budget_name", $var);
        return $this;}

    /**
     * Output only. The purchase order number of the account budget. It appears on the
     * invoice PDF as "Purchase order".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue purchase_order_number = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPurchaseOrderNumber()
    {
        return $this->purchase_order_number;
    }

    /**
     * Returns the unboxed value from <code>getPurchaseOrderNumber()</code>

     * Output only. The purchase order number of the account budget. It appears on the
     * invoice PDF as "Purchase order".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue purchase_order_number = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getPurchaseOrderNumberUnwrapped()
    {
        return $this->readWrapperValue("purchase_order_number");
    }

    /**
     * Output only. The purchase order number of the account budget. It appears on the
     * invoice PDF as "Purchase order".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue purchase_order_number = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPurchaseOrderNumber($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->purchase_order_number = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The purchase order number of the account budget. It appears on the
     * invoice PDF as "Purchase order".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue purchase_order_number = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setPurchaseOrderNumberUnwrapped($var)
    {
        $this->writeWrapperValue("purchase_order_number", $var);
        return $this;}

    /**
     * Output only. The pretax subtotal amount attributable to this budget during the service
     * period, in micros.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value subtotal_amount_micros = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getSubtotalAmountMicros()
    {
        return $this->subtotal_amount_micros;
    }

    /**
     * Returns the unboxed value from <code>getSubtotalAmountMicros()</code>

     * Output only. The pretax subtotal amount attributable to this budget during the service
     * period, in micros.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value subtotal_amount_micros = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string|null
     */
    public function getSubtotalAmountMicrosUnwrapped()
    {
        return $this->readWrapperValue("subtotal_amount_micros");
    }

    /**
     * Output only. The pretax subtotal amount attributable to this budget during the service
     * period, in micros.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value subtotal_amount_micros = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setSubtotalAmountMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->subtotal_amount_micros = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Output only. The pretax subtotal amount attributable to this budget during the service
     * period, in micros.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value subtotal_amount_micros = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setSubtotalAmountMicrosUnwrapped($var)
    {
        $this->writeWrapperValue("subtotal_amount_micros", $var);
        return $this;}

    /**
     * Output only. The tax amount attributable to this budget during the service period, in
     * micros.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value tax_amount_micros = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getTaxAmountMicros()
    {
        return $this->tax_amount_micros;
    }

    /**
     * Returns the unboxed value from <code>getTaxAmountMicros()</code>

     * Output only. The tax amount attributable to this budget during the service period, in
     * micros.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value tax_amount_micros = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string|null
     */
    public function getTaxAmountMicrosUnwrapped()
    {
        return $this->readWrapperValue("tax_amount_micros");
    }

    /**
     * Output only. The tax amount attributable to this budget during the service period, in
     * micros.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value tax_amount_micros = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setTaxAmountMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->tax_amount_micros = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Output only. The tax amount attributable to this budget during the service period, in
     * micros.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value tax_amount_micros = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setTaxAmountMicrosUnwrapped($var)
    {
        $this->writeWrapperValue("tax_amount_micros", $var);
        return $this;}

    /**
     * Output only. The total amount attributable to this budget during the service period,
     * in micros. This equals the sum of the account budget subtotal amount and
     * the account budget tax amount.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value total_amount_micros = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getTotalAmountMicros()
    {
        return $this->total_amount_micros;
    }

    /**
     * Returns the unboxed value from <code>getTotalAmountMicros()</code>

     * Output only. The total amount attributable to this budget during the service period,
     * in micros. This equals the sum of the account budget subtotal amount and
     * the account budget tax amount.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value total_amount_micros = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string|null
     */
    public function getTotalAmountMicrosUnwrapped()
    {
        return $this->readWrapperValue("total_amount_micros");
    }

    /**
     * Output only. The total amount attributable to this budget during the service period,
     * in micros. This equals the sum of the account budget subtotal amount and
     * the account budget tax amount.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value total_amount_micros = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setTotalAmountMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->total_amount_micros = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Output only. The total amount attributable to this budget during the service period,
     * in micros. This equals the sum of the account budget subtotal amount and
     * the account budget tax amount.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value total_amount_micros = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setTotalAmountMicrosUnwrapped($var)
    {
        $this->writeWrapperValue("total_amount_micros", $var);
        return $this;}

    /**
     * Output only. The billable activity date range of the account budget, within the
     * service date range of this invoice. The end date is inclusive. This can
     * be different from the account budget's start and end time.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.common.DateRange billable_activity_date_range = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V3\Common\DateRange
     */
    public function getBillableActivityDateRange()
    {
        return $this->billable_activity_date_range;
    }

    /**
     * Output only. The billable activity date range of the account budget, within the
     * service date range of this invoice. The end date is inclusive. This can
     * be different from the account budget's start and end time.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.common.DateRange billable_activity_date_range = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V3\Common\DateRange $var
     * @return $this
     */
    public function setBillableActivityDateRange($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V3\Common\DateRange::class);
        $this->billable_activity_date_range = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AccountBudgetSummary::class, \Google\Ads\GoogleAds\V3\Resources\Invoice_AccountBudgetSummary::class);

