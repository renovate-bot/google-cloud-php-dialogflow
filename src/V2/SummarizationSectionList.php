<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/generator.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * List of summarization sections.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.SummarizationSectionList</code>
 */
class SummarizationSectionList extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Summarization sections.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.SummarizationSection summarization_sections = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $summarization_sections;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Dialogflow\V2\SummarizationSection>|\Google\Protobuf\Internal\RepeatedField $summarization_sections
     *           Optional. Summarization sections.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Generator::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Summarization sections.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.SummarizationSection summarization_sections = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSummarizationSections()
    {
        return $this->summarization_sections;
    }

    /**
     * Optional. Summarization sections.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.SummarizationSection summarization_sections = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\Dialogflow\V2\SummarizationSection>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSummarizationSections($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\SummarizationSection::class);
        $this->summarization_sections = $arr;

        return $this;
    }

}

