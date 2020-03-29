<?php
/**
 * DownloadDTDApi
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
 * DownloadDTDApi Class Doc Comment
 *
 * @category Class
 * @package  Haque\Cybersource\CybersourceSDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DownloadDTDApi
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
     * @return DownloadDTDApi
     */
    public function setApiClient(\Haque\Cybersource\CybersourceSDK\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getDTDV2
     *
     * Download DTD for Report
     *
     * @param string $reportDefinitionNameVersion Name and version of DTD file to download. Some DTDs only have one version. In that case version name is not needed. Some example values are ctdr-1.0, tdr, pbdr-1.1 (required)
     * @throws \Haque\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of void, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDTDV2($reportDefinitionNameVersion)
    {
        list($response, $statusCode, $httpHeader) = $this->getDTDV2WithHttpInfo($reportDefinitionNameVersion);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation getDTDV2WithHttpInfo
     *
     * Download DTD for Report
     *
     * @param string $reportDefinitionNameVersion Name and version of DTD file to download. Some DTDs only have one version. In that case version name is not needed. Some example values are ctdr-1.0, tdr, pbdr-1.1 (required)
     * @throws \Haque\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDTDV2WithHttpInfo($reportDefinitionNameVersion)
    {
        // verify the required parameter 'reportDefinitionNameVersion' is set
        if ($reportDefinitionNameVersion === null) {
            throw new \InvalidArgumentException('Missing the required parameter $reportDefinitionNameVersion when calling getDTDV2');
        }
        // parse inputs
        $resourcePath = "/dtds/{reportDefinitionNameVersion}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/xml-dtd']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // path params
        if ($reportDefinitionNameVersion !== null) {
            $resourcePath = str_replace(
                "{" . "reportDefinitionNameVersion" . "}",
                $this->apiClient->getSerializer()->toPathValue($reportDefinitionNameVersion),
                $resourcePath
            );
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/dtds/{reportDefinitionNameVersion}'
            );

            return [$response, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
