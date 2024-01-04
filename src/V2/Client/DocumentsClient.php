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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/dialogflow/v2/document.proto
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
use Google\Cloud\Dialogflow\V2\CreateDocumentRequest;
use Google\Cloud\Dialogflow\V2\DeleteDocumentRequest;
use Google\Cloud\Dialogflow\V2\Document;
use Google\Cloud\Dialogflow\V2\ExportDocumentRequest;
use Google\Cloud\Dialogflow\V2\GetDocumentRequest;
use Google\Cloud\Dialogflow\V2\ImportDocumentsRequest;
use Google\Cloud\Dialogflow\V2\ImportDocumentsResponse;
use Google\Cloud\Dialogflow\V2\KnowledgeOperationMetadata;
use Google\Cloud\Dialogflow\V2\ListDocumentsRequest;
use Google\Cloud\Dialogflow\V2\ReloadDocumentRequest;
use Google\Cloud\Dialogflow\V2\UpdateDocumentRequest;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\Location;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Service for managing knowledge
 * [Documents][google.cloud.dialogflow.v2.Document].
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface createDocumentAsync(CreateDocumentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteDocumentAsync(DeleteDocumentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface exportDocumentAsync(ExportDocumentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getDocumentAsync(GetDocumentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface importDocumentsAsync(ImportDocumentsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listDocumentsAsync(ListDocumentsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface reloadDocumentAsync(ReloadDocumentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateDocumentAsync(UpdateDocumentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getLocationAsync(GetLocationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listLocationsAsync(ListLocationsRequest $request, array $optionalArgs = [])
 */
final class DocumentsClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.dialogflow.v2.Documents';

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
            'clientConfig' => __DIR__ . '/../resources/documents_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/documents_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/documents_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/documents_rest_client_config.php',
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
     * knowledge_base resource.
     *
     * @param string $project
     * @param string $knowledgeBase
     *
     * @return string The formatted knowledge_base resource.
     */
    public static function knowledgeBaseName(string $project, string $knowledgeBase): string
    {
        return self::getPathTemplate('knowledgeBase')->render([
            'project' => $project,
            'knowledge_base' => $knowledgeBase,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_knowledge_base resource.
     *
     * @param string $project
     * @param string $knowledgeBase
     *
     * @return string The formatted project_knowledge_base resource.
     */
    public static function projectKnowledgeBaseName(string $project, string $knowledgeBase): string
    {
        return self::getPathTemplate('projectKnowledgeBase')->render([
            'project' => $project,
            'knowledge_base' => $knowledgeBase,
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
     * project_location_knowledge_base resource.
     *
     * @param string $project
     * @param string $location
     * @param string $knowledgeBase
     *
     * @return string The formatted project_location_knowledge_base resource.
     */
    public static function projectLocationKnowledgeBaseName(string $project, string $location, string $knowledgeBase): string
    {
        return self::getPathTemplate('projectLocationKnowledgeBase')->render([
            'project' => $project,
            'location' => $location,
            'knowledge_base' => $knowledgeBase,
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
     * - document: projects/{project}/knowledgeBases/{knowledge_base}/documents/{document}
     * - knowledgeBase: projects/{project}/knowledgeBases/{knowledge_base}
     * - projectKnowledgeBase: projects/{project}/knowledgeBases/{knowledge_base}
     * - projectKnowledgeBaseDocument: projects/{project}/knowledgeBases/{knowledge_base}/documents/{document}
     * - projectLocationKnowledgeBase: projects/{project}/locations/{location}/knowledgeBases/{knowledge_base}
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
     * Creates a new document.
     *
     * This method is a [long-running
     * operation](https://cloud.google.com/dialogflow/cx/docs/how/long-running-operation).
     * The returned `Operation` type has the following method-specific fields:
     *
     * - `metadata`:
     * [KnowledgeOperationMetadata][google.cloud.dialogflow.v2.KnowledgeOperationMetadata]
     * - `response`: [Document][google.cloud.dialogflow.v2.Document]
     *
     * The async variant is {@see DocumentsClient::createDocumentAsync()} .
     *
     * @example samples/V2/DocumentsClient/create_document.php
     *
     * @param CreateDocumentRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
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
    public function createDocument(CreateDocumentRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateDocument', $request, $callOptions)->wait();
    }

    /**
     * Deletes the specified document.
     *
     * This method is a [long-running
     * operation](https://cloud.google.com/dialogflow/cx/docs/how/long-running-operation).
     * The returned `Operation` type has the following method-specific fields:
     *
     * - `metadata`:
     * [KnowledgeOperationMetadata][google.cloud.dialogflow.v2.KnowledgeOperationMetadata]
     * - `response`: An [Empty
     * message](https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#empty)
     *
     * The async variant is {@see DocumentsClient::deleteDocumentAsync()} .
     *
     * @example samples/V2/DocumentsClient/delete_document.php
     *
     * @param DeleteDocumentRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
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
    public function deleteDocument(DeleteDocumentRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DeleteDocument', $request, $callOptions)->wait();
    }

    /**
     * Exports a smart messaging candidate document into the specified
     * destination.
     *
     * This method is a [long-running
     * operation](https://cloud.google.com/dialogflow/cx/docs/how/long-running-operation).
     * The returned `Operation` type has the following method-specific fields:
     *
     * - `metadata`:
     * [KnowledgeOperationMetadata][google.cloud.dialogflow.v2.KnowledgeOperationMetadata]
     * - `response`: [Document][google.cloud.dialogflow.v2.Document]
     *
     * The async variant is {@see DocumentsClient::exportDocumentAsync()} .
     *
     * @example samples/V2/DocumentsClient/export_document.php
     *
     * @param ExportDocumentRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
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
    public function exportDocument(ExportDocumentRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('ExportDocument', $request, $callOptions)->wait();
    }

    /**
     * Retrieves the specified document.
     *
     * The async variant is {@see DocumentsClient::getDocumentAsync()} .
     *
     * @example samples/V2/DocumentsClient/get_document.php
     *
     * @param GetDocumentRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Document
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getDocument(GetDocumentRequest $request, array $callOptions = []): Document
    {
        return $this->startApiCall('GetDocument', $request, $callOptions)->wait();
    }

    /**
     * Creates documents by importing data from external sources.
     * Dialogflow supports up to 350 documents in each request. If you try to
     * import more, Dialogflow will return an error.
     *
     * This method is a [long-running
     * operation](https://cloud.google.com/dialogflow/cx/docs/how/long-running-operation).
     * The returned `Operation` type has the following method-specific fields:
     *
     * - `metadata`:
     * [KnowledgeOperationMetadata][google.cloud.dialogflow.v2.KnowledgeOperationMetadata]
     * - `response`:
     * [ImportDocumentsResponse][google.cloud.dialogflow.v2.ImportDocumentsResponse]
     *
     * The async variant is {@see DocumentsClient::importDocumentsAsync()} .
     *
     * @example samples/V2/DocumentsClient/import_documents.php
     *
     * @param ImportDocumentsRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
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
    public function importDocuments(ImportDocumentsRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('ImportDocuments', $request, $callOptions)->wait();
    }

    /**
     * Returns the list of all documents of the knowledge base.
     *
     * The async variant is {@see DocumentsClient::listDocumentsAsync()} .
     *
     * @example samples/V2/DocumentsClient/list_documents.php
     *
     * @param ListDocumentsRequest $request     A request to house fields associated with the call.
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
    public function listDocuments(ListDocumentsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListDocuments', $request, $callOptions);
    }

    /**
     * Reloads the specified document from its specified source, content_uri or
     * content. The previously loaded content of the document will be deleted.
     * Note: Even when the content of the document has not changed, there still
     * may be side effects because of internal implementation changes.
     *
     * This method is a [long-running
     * operation](https://cloud.google.com/dialogflow/cx/docs/how/long-running-operation).
     * The returned `Operation` type has the following method-specific fields:
     *
     * - `metadata`:
     * [KnowledgeOperationMetadata][google.cloud.dialogflow.v2.KnowledgeOperationMetadata]
     * - `response`: [Document][google.cloud.dialogflow.v2.Document]
     *
     * Note: The `projects.agent.knowledgeBases.documents` resource is deprecated;
     * only use `projects.knowledgeBases.documents`.
     *
     * The async variant is {@see DocumentsClient::reloadDocumentAsync()} .
     *
     * @example samples/V2/DocumentsClient/reload_document.php
     *
     * @param ReloadDocumentRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
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
    public function reloadDocument(ReloadDocumentRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('ReloadDocument', $request, $callOptions)->wait();
    }

    /**
     * Updates the specified document.
     *
     * This method is a [long-running
     * operation](https://cloud.google.com/dialogflow/cx/docs/how/long-running-operation).
     * The returned `Operation` type has the following method-specific fields:
     *
     * - `metadata`:
     * [KnowledgeOperationMetadata][google.cloud.dialogflow.v2.KnowledgeOperationMetadata]
     * - `response`: [Document][google.cloud.dialogflow.v2.Document]
     *
     * The async variant is {@see DocumentsClient::updateDocumentAsync()} .
     *
     * @example samples/V2/DocumentsClient/update_document.php
     *
     * @param UpdateDocumentRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
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
    public function updateDocument(UpdateDocumentRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('UpdateDocument', $request, $callOptions)->wait();
    }

    /**
     * Gets information about a location.
     *
     * The async variant is {@see DocumentsClient::getLocationAsync()} .
     *
     * @example samples/V2/DocumentsClient/get_location.php
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
     * The async variant is {@see DocumentsClient::listLocationsAsync()} .
     *
     * @example samples/V2/DocumentsClient/list_locations.php
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
