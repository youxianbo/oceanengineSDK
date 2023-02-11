<?php
/**
 * EnterpriseApi
 * PHP version 5
 *
 * @category Class
 * @package  Oceanengine\Open
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * 巨量开放接口
 *
 * 根据项目需求完成的接口，非所有接口都有相应的代码
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Oceanengine\Open\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Oceanengine\Open\ApiException;
use Oceanengine\Open\Configuration;
use Oceanengine\Open\HeaderSelector;
use Oceanengine\Open\ObjectSerializer;

/**
 * EnterpriseApi Class Doc Comment
 *
 * @category Class
 * @package  Oceanengine\Open
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EnterpriseApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation v10EnterpriseBindListGetGet
     *
     * 获取广告主关联的企业号列表
     *
     * @param  string $access_token access_token (optional)
     * @param  int $x_debug_mode x_debug_mode (optional)
     * @param  \Oceanengine\Open\Model\InlineObject11 $inline_object11 inline_object11 (optional)
     *
     * @throws \Oceanengine\Open\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Oceanengine\Open\Model\InlineResponse20026
     */
    public function v10EnterpriseBindListGetGet($access_token = null, $x_debug_mode = null, $inline_object11 = null)
    {
        list($response) = $this->v10EnterpriseBindListGetGetWithHttpInfo($access_token, $x_debug_mode, $inline_object11);
        return $response;
    }

    /**
     * Operation v10EnterpriseBindListGetGetWithHttpInfo
     *
     * 获取广告主关联的企业号列表
     *
     * @param  string $access_token (optional)
     * @param  int $x_debug_mode (optional)
     * @param  \Oceanengine\Open\Model\InlineObject11 $inline_object11 (optional)
     *
     * @throws \Oceanengine\Open\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Oceanengine\Open\Model\InlineResponse20026, HTTP status code, HTTP response headers (array of strings)
     */
    public function v10EnterpriseBindListGetGetWithHttpInfo($access_token = null, $x_debug_mode = null, $inline_object11 = null)
    {
        $request = $this->v10EnterpriseBindListGetGetRequest($access_token, $x_debug_mode, $inline_object11);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Oceanengine\Open\Model\InlineResponse20026' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Oceanengine\Open\Model\InlineResponse20026', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Oceanengine\Open\Model\InlineResponse20026';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Oceanengine\Open\Model\InlineResponse20026',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation v10EnterpriseBindListGetGetAsync
     *
     * 获取广告主关联的企业号列表
     *
     * @param  string $access_token (optional)
     * @param  int $x_debug_mode (optional)
     * @param  \Oceanengine\Open\Model\InlineObject11 $inline_object11 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v10EnterpriseBindListGetGetAsync($access_token = null, $x_debug_mode = null, $inline_object11 = null)
    {
        return $this->v10EnterpriseBindListGetGetAsyncWithHttpInfo($access_token, $x_debug_mode, $inline_object11)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation v10EnterpriseBindListGetGetAsyncWithHttpInfo
     *
     * 获取广告主关联的企业号列表
     *
     * @param  string $access_token (optional)
     * @param  int $x_debug_mode (optional)
     * @param  \Oceanengine\Open\Model\InlineObject11 $inline_object11 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v10EnterpriseBindListGetGetAsyncWithHttpInfo($access_token = null, $x_debug_mode = null, $inline_object11 = null)
    {
        $returnType = '\Oceanengine\Open\Model\InlineResponse20026';
        $request = $this->v10EnterpriseBindListGetGetRequest($access_token, $x_debug_mode, $inline_object11);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'v10EnterpriseBindListGetGet'
     *
     * @param  string $access_token (optional)
     * @param  int $x_debug_mode (optional)
     * @param  \Oceanengine\Open\Model\InlineObject11 $inline_object11 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function v10EnterpriseBindListGetGetRequest($access_token = null, $x_debug_mode = null, $inline_object11 = null)
    {

        $resourcePath = '/v1.0/enterprise/bind/list/get/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($access_token !== null) {
            $headerParams['Access-Token'] = ObjectSerializer::toHeaderValue($access_token);
        }
        // header params
        if ($x_debug_mode !== null) {
            $headerParams['X-Debug-Mode'] = ObjectSerializer::toHeaderValue($x_debug_mode);
        }


        // body params
        $_tempBody = null;
        if (isset($inline_object11)) {
            $_tempBody = $inline_object11;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation v10EnterpriseInfoGet
     *
     * 获取企业号信息
     *
     * @param  string $access_token access_token (optional)
     * @param  int $x_debug_mode x_debug_mode (optional)
     * @param  \Oceanengine\Open\Model\InlineObject10 $inline_object10 inline_object10 (optional)
     *
     * @throws \Oceanengine\Open\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Oceanengine\Open\Model\InlineResponse20025
     */
    public function v10EnterpriseInfoGet($access_token = null, $x_debug_mode = null, $inline_object10 = null)
    {
        list($response) = $this->v10EnterpriseInfoGetWithHttpInfo($access_token, $x_debug_mode, $inline_object10);
        return $response;
    }

    /**
     * Operation v10EnterpriseInfoGetWithHttpInfo
     *
     * 获取企业号信息
     *
     * @param  string $access_token (optional)
     * @param  int $x_debug_mode (optional)
     * @param  \Oceanengine\Open\Model\InlineObject10 $inline_object10 (optional)
     *
     * @throws \Oceanengine\Open\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Oceanengine\Open\Model\InlineResponse20025, HTTP status code, HTTP response headers (array of strings)
     */
    public function v10EnterpriseInfoGetWithHttpInfo($access_token = null, $x_debug_mode = null, $inline_object10 = null)
    {
        $request = $this->v10EnterpriseInfoGetRequest($access_token, $x_debug_mode, $inline_object10);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Oceanengine\Open\Model\InlineResponse20025' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Oceanengine\Open\Model\InlineResponse20025', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Oceanengine\Open\Model\InlineResponse20025';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Oceanengine\Open\Model\InlineResponse20025',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation v10EnterpriseInfoGetAsync
     *
     * 获取企业号信息
     *
     * @param  string $access_token (optional)
     * @param  int $x_debug_mode (optional)
     * @param  \Oceanengine\Open\Model\InlineObject10 $inline_object10 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v10EnterpriseInfoGetAsync($access_token = null, $x_debug_mode = null, $inline_object10 = null)
    {
        return $this->v10EnterpriseInfoGetAsyncWithHttpInfo($access_token, $x_debug_mode, $inline_object10)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation v10EnterpriseInfoGetAsyncWithHttpInfo
     *
     * 获取企业号信息
     *
     * @param  string $access_token (optional)
     * @param  int $x_debug_mode (optional)
     * @param  \Oceanengine\Open\Model\InlineObject10 $inline_object10 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v10EnterpriseInfoGetAsyncWithHttpInfo($access_token = null, $x_debug_mode = null, $inline_object10 = null)
    {
        $returnType = '\Oceanengine\Open\Model\InlineResponse20025';
        $request = $this->v10EnterpriseInfoGetRequest($access_token, $x_debug_mode, $inline_object10);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'v10EnterpriseInfoGet'
     *
     * @param  string $access_token (optional)
     * @param  int $x_debug_mode (optional)
     * @param  \Oceanengine\Open\Model\InlineObject10 $inline_object10 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function v10EnterpriseInfoGetRequest($access_token = null, $x_debug_mode = null, $inline_object10 = null)
    {

        $resourcePath = '/v1.0/enterprise/info/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($access_token !== null) {
            $headerParams['Access-Token'] = ObjectSerializer::toHeaderValue($access_token);
        }
        // header params
        if ($x_debug_mode !== null) {
            $headerParams['X-Debug-Mode'] = ObjectSerializer::toHeaderValue($x_debug_mode);
        }


        // body params
        $_tempBody = null;
        if (isset($inline_object10)) {
            $_tempBody = $inline_object10;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation v10EnterpriseOverviewDataGetGet
     *
     * 获取企业号基础数据
     *
     * @param  string $access_token access_token (optional)
     * @param  int $x_debug_mode x_debug_mode (optional)
     * @param  \Oceanengine\Open\Model\InlineObject12 $inline_object12 inline_object12 (optional)
     *
     * @throws \Oceanengine\Open\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Oceanengine\Open\Model\InlineResponse20027
     */
    public function v10EnterpriseOverviewDataGetGet($access_token = null, $x_debug_mode = null, $inline_object12 = null)
    {
        list($response) = $this->v10EnterpriseOverviewDataGetGetWithHttpInfo($access_token, $x_debug_mode, $inline_object12);
        return $response;
    }

    /**
     * Operation v10EnterpriseOverviewDataGetGetWithHttpInfo
     *
     * 获取企业号基础数据
     *
     * @param  string $access_token (optional)
     * @param  int $x_debug_mode (optional)
     * @param  \Oceanengine\Open\Model\InlineObject12 $inline_object12 (optional)
     *
     * @throws \Oceanengine\Open\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Oceanengine\Open\Model\InlineResponse20027, HTTP status code, HTTP response headers (array of strings)
     */
    public function v10EnterpriseOverviewDataGetGetWithHttpInfo($access_token = null, $x_debug_mode = null, $inline_object12 = null)
    {
        $request = $this->v10EnterpriseOverviewDataGetGetRequest($access_token, $x_debug_mode, $inline_object12);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Oceanengine\Open\Model\InlineResponse20027' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Oceanengine\Open\Model\InlineResponse20027', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Oceanengine\Open\Model\InlineResponse20027';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Oceanengine\Open\Model\InlineResponse20027',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation v10EnterpriseOverviewDataGetGetAsync
     *
     * 获取企业号基础数据
     *
     * @param  string $access_token (optional)
     * @param  int $x_debug_mode (optional)
     * @param  \Oceanengine\Open\Model\InlineObject12 $inline_object12 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v10EnterpriseOverviewDataGetGetAsync($access_token = null, $x_debug_mode = null, $inline_object12 = null)
    {
        return $this->v10EnterpriseOverviewDataGetGetAsyncWithHttpInfo($access_token, $x_debug_mode, $inline_object12)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation v10EnterpriseOverviewDataGetGetAsyncWithHttpInfo
     *
     * 获取企业号基础数据
     *
     * @param  string $access_token (optional)
     * @param  int $x_debug_mode (optional)
     * @param  \Oceanengine\Open\Model\InlineObject12 $inline_object12 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v10EnterpriseOverviewDataGetGetAsyncWithHttpInfo($access_token = null, $x_debug_mode = null, $inline_object12 = null)
    {
        $returnType = '\Oceanengine\Open\Model\InlineResponse20027';
        $request = $this->v10EnterpriseOverviewDataGetGetRequest($access_token, $x_debug_mode, $inline_object12);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'v10EnterpriseOverviewDataGetGet'
     *
     * @param  string $access_token (optional)
     * @param  int $x_debug_mode (optional)
     * @param  \Oceanengine\Open\Model\InlineObject12 $inline_object12 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function v10EnterpriseOverviewDataGetGetRequest($access_token = null, $x_debug_mode = null, $inline_object12 = null)
    {

        $resourcePath = '/v1.0/enterprise/overview/data/get/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($access_token !== null) {
            $headerParams['Access-Token'] = ObjectSerializer::toHeaderValue($access_token);
        }
        // header params
        if ($x_debug_mode !== null) {
            $headerParams['X-Debug-Mode'] = ObjectSerializer::toHeaderValue($x_debug_mode);
        }


        // body params
        $_tempBody = null;
        if (isset($inline_object12)) {
            $_tempBody = $inline_object12;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}