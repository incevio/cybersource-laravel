<?php
/**
 * TokenizationApi
 * PHP version 5
 *
 * @category Class
 * @package  Haque\Cybersource\CybersourceSDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Haque\Cybersource\CybersourceSDK Merged Spec
 *
 * All Haque\Cybersource\CybersourceSDK API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Haque\Cybersource\CybersourceSDK\Api;

use \Haque\Cybersource\CybersourceSDK\ApiClient;
use \Haque\Cybersource\CybersourceSDK\ApiException;
use \Haque\Cybersource\CybersourceSDK\Configuration;
use \Haque\Cybersource\CybersourceSDK\ObjectSerializer;

/**
 * TokenizationApi Class Doc Comment
 *
 * @category Class
 * @package  Haque\Cybersource\CybersourceSDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TokenizationApi
{
    /**
     * API Client
     *
     * @var \Haque\Cybersource\CybersourceSDK\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Haque\Cybersource\CybersourceSDK\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Haque\Cybersource\CybersourceSDK\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Haque\Cybersource\CybersourceSDK\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Haque\Cybersource\CybersourceSDK\ApiClient $apiClient set the API client
     *
     * @return TokenizationApi
     */
    public function setApiClient(\Haque\Cybersource\CybersourceSDK\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation tokenize
     *
     * Tokenize Card
     *
     * @param \Haque\Cybersource\CybersourceSDK\Model\TokenizeRequest $tokenizeRequest  (required)
     * @throws \Haque\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of \Haque\Cybersource\CybersourceSDK\Model\FlexV1TokensPost200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function tokenize($tokenizeRequest)
    {
        list($response, $statusCode, $httpHeader) = $this->tokenizeWithHttpInfo($tokenizeRequest);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation tokenizeWithHttpInfo
     *
     * Tokenize Card
     *
     * @param \Haque\Cybersource\CybersourceSDK\Model\TokenizeRequest $tokenizeRequest  (required)
     * @throws \Haque\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of \Haque\Cybersource\CybersourceSDK\Model\FlexV1TokensPost200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function tokenizeWithHttpInfo($tokenizeRequest)
    {
        // verify the required parameter 'tokenizeRequest' is set
        if ($tokenizeRequest === null) {
            throw new \InvalidArgumentException('Missing the required parameter $tokenizeRequest when calling tokenize');
        }
        // parse inputs
        $resourcePath = "/flex/v1/tokens";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // body params
        $_tempBody = null;
        if (isset($tokenizeRequest)) {
            $_tempBody = $tokenizeRequest;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Haque\Cybersource\CybersourceSDK\Model\FlexV1TokensPost200Response',
                '/flex/v1/tokens'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Haque\Cybersource\CybersourceSDK\Model\FlexV1TokensPost200Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Haque\Cybersource\CybersourceSDK\Model\FlexV1TokensPost200Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Haque\Cybersource\CybersourceSDK\Model\InlineResponseDefault', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
