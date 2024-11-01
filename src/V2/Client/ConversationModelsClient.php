<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/dialogflow/v2/conversation_model.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Dialogflow\V2\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Dialogflow\V2\ConversationModel;
use Google\Cloud\Dialogflow\V2\ConversationModelEvaluation;
use Google\Cloud\Dialogflow\V2\CreateConversationModelEvaluationRequest;
use Google\Cloud\Dialogflow\V2\CreateConversationModelOperationMetadata;
use Google\Cloud\Dialogflow\V2\CreateConversationModelRequest;
use Google\Cloud\Dialogflow\V2\DeleteConversationModelOperationMetadata;
use Google\Cloud\Dialogflow\V2\DeleteConversationModelRequest;
use Google\Cloud\Dialogflow\V2\DeployConversationModelOperationMetadata;
use Google\Cloud\Dialogflow\V2\DeployConversationModelRequest;
use Google\Cloud\Dialogflow\V2\GetConversationModelEvaluationRequest;
use Google\Cloud\Dialogflow\V2\GetConversationModelRequest;
use Google\Cloud\Dialogflow\V2\ListConversationModelEvaluationsRequest;
use Google\Cloud\Dialogflow\V2\ListConversationModelsRequest;
use Google\Cloud\Dialogflow\V2\UndeployConversationModelOperationMetadata;
use Google\Cloud\Dialogflow\V2\UndeployConversationModelRequest;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\Location;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Manages a collection of models for human agent assistant.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface<OperationResponse> createConversationModelAsync(CreateConversationModelRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> createConversationModelEvaluationAsync(CreateConversationModelEvaluationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> deleteConversationModelAsync(DeleteConversationModelRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> deployConversationModelAsync(DeployConversationModelRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<ConversationModel> getConversationModelAsync(GetConversationModelRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<ConversationModelEvaluation> getConversationModelEvaluationAsync(GetConversationModelEvaluationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listConversationModelEvaluationsAsync(ListConversationModelEvaluationsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listConversationModelsAsync(ListConversationModelsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> undeployConversationModelAsync(UndeployConversationModelRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Location> getLocationAsync(GetLocationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listLocationsAsync(ListLocationsRequest $request, array $optionalArgs = [])
 */
final class ConversationModelsClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.dialogflow.v2.ConversationModels';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'dialogflow.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'dialogflow.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/dialogflow',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/conversation_models_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/conversation_models_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/conversation_models_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/conversation_models_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning']) ? $this->descriptors[$methodName]['longRunning'] : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * conversation_dataset resource.
     *
     * @param string $project
     * @param string $location
     * @param string $conversationDataset
     *
     * @return string The formatted conversation_dataset resource.
     */
    public static function conversationDatasetName(string $project, string $location, string $conversationDataset): string
    {
        return self::getPathTemplate('conversationDataset')->render([
            'project' => $project,
            'location' => $location,
            'conversation_dataset' => $conversationDataset,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * conversation_model resource.
     *
     * @param string $project
     * @param string $location
     * @param string $conversationModel
     *
     * @return string The formatted conversation_model resource.
     */
    public static function conversationModelName(string $project, string $location, string $conversationModel): string
    {
        return self::getPathTemplate('conversationModel')->render([
            'project' => $project,
            'location' => $location,
            'conversation_model' => $conversationModel,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * conversation_model_evaluation resource.
     *
     * @param string $project
     * @param string $conversationModel
     * @param string $evaluation
     *
     * @return string The formatted conversation_model_evaluation resource.
     */
    public static function conversationModelEvaluationName(string $project, string $conversationModel, string $evaluation): string
    {
        return self::getPathTemplate('conversationModelEvaluation')->render([
            'project' => $project,
            'conversation_model' => $conversationModel,
            'evaluation' => $evaluation,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a document
     * resource.
     *
     * @param string $project
     * @param string $knowledgeBase
     * @param string $document
     *
     * @return string The formatted document resource.
     */
    public static function documentName(string $project, string $knowledgeBase, string $document): string
    {
        return self::getPathTemplate('document')->render([
            'project' => $project,
            'knowledge_base' => $knowledgeBase,
            'document' => $document,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_conversation_model resource.
     *
     * @param string $project
     * @param string $conversationModel
     *
     * @return string The formatted project_conversation_model resource.
     */
    public static function projectConversationModelName(string $project, string $conversationModel): string
    {
        return self::getPathTemplate('projectConversationModel')->render([
            'project' => $project,
            'conversation_model' => $conversationModel,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_conversation_model_evaluation resource.
     *
     * @param string $project
     * @param string $conversationModel
     * @param string $evaluation
     *
     * @return string The formatted project_conversation_model_evaluation resource.
     */
    public static function projectConversationModelEvaluationName(string $project, string $conversationModel, string $evaluation): string
    {
        return self::getPathTemplate('projectConversationModelEvaluation')->render([
            'project' => $project,
            'conversation_model' => $conversationModel,
            'evaluation' => $evaluation,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_knowledge_base_document resource.
     *
     * @param string $project
     * @param string $knowledgeBase
     * @param string $document
     *
     * @return string The formatted project_knowledge_base_document resource.
     */
    public static function projectKnowledgeBaseDocumentName(string $project, string $knowledgeBase, string $document): string
    {
        return self::getPathTemplate('projectKnowledgeBaseDocument')->render([
            'project' => $project,
            'knowledge_base' => $knowledgeBase,
            'document' => $document,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_conversation_model resource.
     *
     * @param string $project
     * @param string $location
     * @param string $conversationModel
     *
     * @return string The formatted project_location_conversation_model resource.
     */
    public static function projectLocationConversationModelName(string $project, string $location, string $conversationModel): string
    {
        return self::getPathTemplate('projectLocationConversationModel')->render([
            'project' => $project,
            'location' => $location,
            'conversation_model' => $conversationModel,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_conversation_model_evaluation resource.
     *
     * @param string $project
     * @param string $location
     * @param string $conversationModel
     * @param string $evaluation
     *
     * @return string The formatted project_location_conversation_model_evaluation resource.
     */
    public static function projectLocationConversationModelEvaluationName(string $project, string $location, string $conversationModel, string $evaluation): string
    {
        return self::getPathTemplate('projectLocationConversationModelEvaluation')->render([
            'project' => $project,
            'location' => $location,
            'conversation_model' => $conversationModel,
            'evaluation' => $evaluation,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_knowledge_base_document resource.
     *
     * @param string $project
     * @param string $location
     * @param string $knowledgeBase
     * @param string $document
     *
     * @return string The formatted project_location_knowledge_base_document resource.
     */
    public static function projectLocationKnowledgeBaseDocumentName(string $project, string $location, string $knowledgeBase, string $document): string
    {
        return self::getPathTemplate('projectLocationKnowledgeBaseDocument')->render([
            'project' => $project,
            'location' => $location,
            'knowledge_base' => $knowledgeBase,
            'document' => $document,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - conversationDataset: projects/{project}/locations/{location}/conversationDatasets/{conversation_dataset}
     * - conversationModel: projects/{project}/locations/{location}/conversationModels/{conversation_model}
     * - conversationModelEvaluation: projects/{project}/conversationModels/{conversation_model}/evaluations/{evaluation}
     * - document: projects/{project}/knowledgeBases/{knowledge_base}/documents/{document}
     * - projectConversationModel: projects/{project}/conversationModels/{conversation_model}
     * - projectConversationModelEvaluation: projects/{project}/conversationModels/{conversation_model}/evaluations/{evaluation}
     * - projectKnowledgeBaseDocument: projects/{project}/knowledgeBases/{knowledge_base}/documents/{document}
     * - projectLocationConversationModel: projects/{project}/locations/{location}/conversationModels/{conversation_model}
     * - projectLocationConversationModelEvaluation: projects/{project}/locations/{location}/conversationModels/{conversation_model}/evaluations/{evaluation}
     * - projectLocationKnowledgeBaseDocument: projects/{project}/locations/{location}/knowledgeBases/{knowledge_base}/documents/{document}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'dialogflow.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Creates a model.
     *
     * This method is a [long-running
     * operation](https://cloud.google.com/dialogflow/es/docs/how/long-running-operations).
     * The returned `Operation` type has the following method-specific fields:
     *
     * - `metadata`:
     * [CreateConversationModelOperationMetadata][google.cloud.dialogflow.v2.CreateConversationModelOperationMetadata]
     * - `response`:
     * [ConversationModel][google.cloud.dialogflow.v2.ConversationModel]
     *
     * The async variant is
     * {@see ConversationModelsClient::createConversationModelAsync()} .
     *
     * @example samples/V2/ConversationModelsClient/create_conversation_model.php
     *
     * @param CreateConversationModelRequest $request     A request to house fields associated with the call.
     * @param array                          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createConversationModel(CreateConversationModelRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateConversationModel', $request, $callOptions)->wait();
    }

    /**
     * Creates evaluation of a conversation model.
     *
     * The async variant is
     * {@see ConversationModelsClient::createConversationModelEvaluationAsync()} .
     *
     * @example samples/V2/ConversationModelsClient/create_conversation_model_evaluation.php
     *
     * @param CreateConversationModelEvaluationRequest $request     A request to house fields associated with the call.
     * @param array                                    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createConversationModelEvaluation(CreateConversationModelEvaluationRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateConversationModelEvaluation', $request, $callOptions)->wait();
    }

    /**
     * Deletes a model.
     *
     * This method is a [long-running
     * operation](https://cloud.google.com/dialogflow/es/docs/how/long-running-operations).
     * The returned `Operation` type has the following method-specific fields:
     *
     * - `metadata`:
     * [DeleteConversationModelOperationMetadata][google.cloud.dialogflow.v2.DeleteConversationModelOperationMetadata]
     * - `response`: An [Empty
     * message](https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#empty)
     *
     * The async variant is
     * {@see ConversationModelsClient::deleteConversationModelAsync()} .
     *
     * @example samples/V2/ConversationModelsClient/delete_conversation_model.php
     *
     * @param DeleteConversationModelRequest $request     A request to house fields associated with the call.
     * @param array                          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteConversationModel(DeleteConversationModelRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DeleteConversationModel', $request, $callOptions)->wait();
    }

    /**
     * Deploys a model. If a model is already deployed, deploying it
     * has no effect. A model can only serve prediction requests after it gets
     * deployed. For article suggestion, custom model will not be used unless
     * it is deployed.
     *
     * This method is a [long-running
     * operation](https://cloud.google.com/dialogflow/es/docs/how/long-running-operations).
     * The returned `Operation` type has the following method-specific fields:
     *
     * - `metadata`:
     * [DeployConversationModelOperationMetadata][google.cloud.dialogflow.v2.DeployConversationModelOperationMetadata]
     * - `response`: An [Empty
     * message](https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#empty)
     *
     * The async variant is
     * {@see ConversationModelsClient::deployConversationModelAsync()} .
     *
     * @example samples/V2/ConversationModelsClient/deploy_conversation_model.php
     *
     * @param DeployConversationModelRequest $request     A request to house fields associated with the call.
     * @param array                          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deployConversationModel(DeployConversationModelRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DeployConversationModel', $request, $callOptions)->wait();
    }

    /**
     * Gets conversation model.
     *
     * The async variant is
     * {@see ConversationModelsClient::getConversationModelAsync()} .
     *
     * @example samples/V2/ConversationModelsClient/get_conversation_model.php
     *
     * @param GetConversationModelRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ConversationModel
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getConversationModel(GetConversationModelRequest $request, array $callOptions = []): ConversationModel
    {
        return $this->startApiCall('GetConversationModel', $request, $callOptions)->wait();
    }

    /**
     * Gets an evaluation of conversation model.
     *
     * The async variant is
     * {@see ConversationModelsClient::getConversationModelEvaluationAsync()} .
     *
     * @example samples/V2/ConversationModelsClient/get_conversation_model_evaluation.php
     *
     * @param GetConversationModelEvaluationRequest $request     A request to house fields associated with the call.
     * @param array                                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ConversationModelEvaluation
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getConversationModelEvaluation(GetConversationModelEvaluationRequest $request, array $callOptions = []): ConversationModelEvaluation
    {
        return $this->startApiCall('GetConversationModelEvaluation', $request, $callOptions)->wait();
    }

    /**
     * Lists evaluations of a conversation model.
     *
     * The async variant is
     * {@see ConversationModelsClient::listConversationModelEvaluationsAsync()} .
     *
     * @example samples/V2/ConversationModelsClient/list_conversation_model_evaluations.php
     *
     * @param ListConversationModelEvaluationsRequest $request     A request to house fields associated with the call.
     * @param array                                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listConversationModelEvaluations(ListConversationModelEvaluationsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListConversationModelEvaluations', $request, $callOptions);
    }

    /**
     * Lists conversation models.
     *
     * The async variant is
     * {@see ConversationModelsClient::listConversationModelsAsync()} .
     *
     * @example samples/V2/ConversationModelsClient/list_conversation_models.php
     *
     * @param ListConversationModelsRequest $request     A request to house fields associated with the call.
     * @param array                         $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listConversationModels(ListConversationModelsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListConversationModels', $request, $callOptions);
    }

    /**
     * Undeploys a model. If the model is not deployed this method has no effect.
     * If the model is currently being used:
     * - For article suggestion, article suggestion will fallback to the default
     * model if model is undeployed.
     *
     * This method is a [long-running
     * operation](https://cloud.google.com/dialogflow/es/docs/how/long-running-operations).
     * The returned `Operation` type has the following method-specific fields:
     *
     * - `metadata`:
     * [UndeployConversationModelOperationMetadata][google.cloud.dialogflow.v2.UndeployConversationModelOperationMetadata]
     * - `response`: An [Empty
     * message](https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#empty)
     *
     * The async variant is
     * {@see ConversationModelsClient::undeployConversationModelAsync()} .
     *
     * @example samples/V2/ConversationModelsClient/undeploy_conversation_model.php
     *
     * @param UndeployConversationModelRequest $request     A request to house fields associated with the call.
     * @param array                            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function undeployConversationModel(UndeployConversationModelRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('UndeployConversationModel', $request, $callOptions)->wait();
    }

    /**
     * Gets information about a location.
     *
     * The async variant is {@see ConversationModelsClient::getLocationAsync()} .
     *
     * @example samples/V2/ConversationModelsClient/get_location.php
     *
     * @param GetLocationRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Location
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getLocation(GetLocationRequest $request, array $callOptions = []): Location
    {
        return $this->startApiCall('GetLocation', $request, $callOptions)->wait();
    }

    /**
     * Lists information about the supported locations for this service.
     *
     * The async variant is {@see ConversationModelsClient::listLocationsAsync()} .
     *
     * @example samples/V2/ConversationModelsClient/list_locations.php
     *
     * @param ListLocationsRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listLocations(ListLocationsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListLocations', $request, $callOptions);
    }
}
