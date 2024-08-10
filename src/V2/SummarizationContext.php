<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/generator.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Summarization context that customer can configure.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.SummarizationContext</code>
 */
class SummarizationContext extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. List of sections. Note it contains both predefined section sand
     * customer defined sections.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.SummarizationSection summarization_sections = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $summarization_sections;
    /**
     * Optional. List of few shot examples.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.FewShotExample few_shot_examples = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $few_shot_examples;
    /**
     * Optional. Version of the feature. If not set, default to latest version.
     * Current candidates are ["1.0"].
     *
     * Generated from protobuf field <code>string version = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $version = '';
    /**
     * Optional. The target language of the generated summary. The language code
     * for conversation will be used if this field is empty. Supported 2.0 and
     * later versions.
     *
     * Generated from protobuf field <code>string output_language_code = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $output_language_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Dialogflow\V2\SummarizationSection>|\Google\Protobuf\Internal\RepeatedField $summarization_sections
     *           Optional. List of sections. Note it contains both predefined section sand
     *           customer defined sections.
     *     @type array<\Google\Cloud\Dialogflow\V2\FewShotExample>|\Google\Protobuf\Internal\RepeatedField $few_shot_examples
     *           Optional. List of few shot examples.
     *     @type string $version
     *           Optional. Version of the feature. If not set, default to latest version.
     *           Current candidates are ["1.0"].
     *     @type string $output_language_code
     *           Optional. The target language of the generated summary. The language code
     *           for conversation will be used if this field is empty. Supported 2.0 and
     *           later versions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Generator::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. List of sections. Note it contains both predefined section sand
     * customer defined sections.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.SummarizationSection summarization_sections = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSummarizationSections()
    {
        return $this->summarization_sections;
    }

    /**
     * Optional. List of sections. Note it contains both predefined section sand
     * customer defined sections.
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

    /**
     * Optional. List of few shot examples.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.FewShotExample few_shot_examples = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFewShotExamples()
    {
        return $this->few_shot_examples;
    }

    /**
     * Optional. List of few shot examples.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.FewShotExample few_shot_examples = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\Dialogflow\V2\FewShotExample>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFewShotExamples($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\FewShotExample::class);
        $this->few_shot_examples = $arr;

        return $this;
    }

    /**
     * Optional. Version of the feature. If not set, default to latest version.
     * Current candidates are ["1.0"].
     *
     * Generated from protobuf field <code>string version = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Optional. Version of the feature. If not set, default to latest version.
     * Current candidates are ["1.0"].
     *
     * Generated from protobuf field <code>string version = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * Optional. The target language of the generated summary. The language code
     * for conversation will be used if this field is empty. Supported 2.0 and
     * later versions.
     *
     * Generated from protobuf field <code>string output_language_code = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getOutputLanguageCode()
    {
        return $this->output_language_code;
    }

    /**
     * Optional. The target language of the generated summary. The language code
     * for conversation will be used if this field is empty. Supported 2.0 and
     * later versions.
     *
     * Generated from protobuf field <code>string output_language_code = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setOutputLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->output_language_code = $var;

        return $this;
    }

}
