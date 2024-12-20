<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/services/customer_sk_ad_network_conversion_value_schema_service.proto

namespace Google\Ads\GoogleAds\V16\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for MutateCustomerSkAdNetworkConversionValueSchema.
 *
 * Generated from protobuf message <code>google.ads.googleads.v16.services.MutateCustomerSkAdNetworkConversionValueSchemaResponse</code>
 */
class MutateCustomerSkAdNetworkConversionValueSchemaResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * All results for the mutate.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v16.services.MutateCustomerSkAdNetworkConversionValueSchemaResult result = 1;</code>
     */
    protected $result = null;
<<<<<<< HEAD
    /**
     * Non blocking errors that provides schema validation failure details.
     * Returned only when enable_warnings = true.
     *
     * Generated from protobuf field <code>.google.rpc.Status warning = 2;</code>
     */
    protected $warning = null;
=======
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V16\Services\MutateCustomerSkAdNetworkConversionValueSchemaResult $result
     *           All results for the mutate.
<<<<<<< HEAD
     *     @type \Google\Rpc\Status $warning
     *           Non blocking errors that provides schema validation failure details.
     *           Returned only when enable_warnings = true.
=======
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V16\Services\CustomerSkAdNetworkConversionValueSchemaService::initOnce();
        parent::__construct($data);
    }

    /**
     * All results for the mutate.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v16.services.MutateCustomerSkAdNetworkConversionValueSchemaResult result = 1;</code>
     * @return \Google\Ads\GoogleAds\V16\Services\MutateCustomerSkAdNetworkConversionValueSchemaResult|null
     */
    public function getResult()
    {
        return $this->result;
    }

    public function hasResult()
    {
        return isset($this->result);
    }

    public function clearResult()
    {
        unset($this->result);
    }

    /**
     * All results for the mutate.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v16.services.MutateCustomerSkAdNetworkConversionValueSchemaResult result = 1;</code>
     * @param \Google\Ads\GoogleAds\V16\Services\MutateCustomerSkAdNetworkConversionValueSchemaResult $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V16\Services\MutateCustomerSkAdNetworkConversionValueSchemaResult::class);
        $this->result = $var;

        return $this;
    }

<<<<<<< HEAD
    /**
     * Non blocking errors that provides schema validation failure details.
     * Returned only when enable_warnings = true.
     *
     * Generated from protobuf field <code>.google.rpc.Status warning = 2;</code>
     * @return \Google\Rpc\Status|null
     */
    public function getWarning()
    {
        return $this->warning;
    }

    public function hasWarning()
    {
        return isset($this->warning);
    }

    public function clearWarning()
    {
        unset($this->warning);
    }

    /**
     * Non blocking errors that provides schema validation failure details.
     * Returned only when enable_warnings = true.
     *
     * Generated from protobuf field <code>.google.rpc.Status warning = 2;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setWarning($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->warning = $var;

        return $this;
    }

=======
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
}

