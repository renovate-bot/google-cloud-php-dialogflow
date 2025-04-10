<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation_profile.proto

namespace Google\Cloud\Dialogflow\V2\HumanAgentHandoffConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration specific to Salesforce Live Agent.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.HumanAgentHandoffConfig.SalesforceLiveAgentConfig</code>
 */
class SalesforceLiveAgentConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The organization ID of the Salesforce account.
     *
     * Generated from protobuf field <code>string organization_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $organization_id = '';
    /**
     * Required. Live Agent deployment ID.
     *
     * Generated from protobuf field <code>string deployment_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $deployment_id = '';
    /**
     * Required. Live Agent chat button ID.
     *
     * Generated from protobuf field <code>string button_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $button_id = '';
    /**
     * Required. Domain of the Live Agent endpoint for this agent. You can find
     * the endpoint URL in the `Live Agent settings` page. For example if URL
     * has the form https://d.la4-c2-phx.salesforceliveagent.com/...,
     * you should fill in d.la4-c2-phx.salesforceliveagent.com.
     *
     * Generated from protobuf field <code>string endpoint_domain = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $endpoint_domain = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $organization_id
     *           Required. The organization ID of the Salesforce account.
     *     @type string $deployment_id
     *           Required. Live Agent deployment ID.
     *     @type string $button_id
     *           Required. Live Agent chat button ID.
     *     @type string $endpoint_domain
     *           Required. Domain of the Live Agent endpoint for this agent. You can find
     *           the endpoint URL in the `Live Agent settings` page. For example if URL
     *           has the form https://d.la4-c2-phx.salesforceliveagent.com/...,
     *           you should fill in d.la4-c2-phx.salesforceliveagent.com.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\ConversationProfile::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The organization ID of the Salesforce account.
     *
     * Generated from protobuf field <code>string organization_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->organization_id;
    }

    /**
     * Required. The organization ID of the Salesforce account.
     *
     * Generated from protobuf field <code>string organization_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setOrganizationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->organization_id = $var;

        return $this;
    }

    /**
     * Required. Live Agent deployment ID.
     *
     * Generated from protobuf field <code>string deployment_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDeploymentId()
    {
        return $this->deployment_id;
    }

    /**
     * Required. Live Agent deployment ID.
     *
     * Generated from protobuf field <code>string deployment_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDeploymentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->deployment_id = $var;

        return $this;
    }

    /**
     * Required. Live Agent chat button ID.
     *
     * Generated from protobuf field <code>string button_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getButtonId()
    {
        return $this->button_id;
    }

    /**
     * Required. Live Agent chat button ID.
     *
     * Generated from protobuf field <code>string button_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setButtonId($var)
    {
        GPBUtil::checkString($var, True);
        $this->button_id = $var;

        return $this;
    }

    /**
     * Required. Domain of the Live Agent endpoint for this agent. You can find
     * the endpoint URL in the `Live Agent settings` page. For example if URL
     * has the form https://d.la4-c2-phx.salesforceliveagent.com/...,
     * you should fill in d.la4-c2-phx.salesforceliveagent.com.
     *
     * Generated from protobuf field <code>string endpoint_domain = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getEndpointDomain()
    {
        return $this->endpoint_domain;
    }

    /**
     * Required. Domain of the Live Agent endpoint for this agent. You can find
     * the endpoint URL in the `Live Agent settings` page. For example if URL
     * has the form https://d.la4-c2-phx.salesforceliveagent.com/...,
     * you should fill in d.la4-c2-phx.salesforceliveagent.com.
     *
     * Generated from protobuf field <code>string endpoint_domain = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setEndpointDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->endpoint_domain = $var;

        return $this;
    }

}


