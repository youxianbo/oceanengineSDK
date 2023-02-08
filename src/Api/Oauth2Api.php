<?php
/**
 * Oauth2Api
 * PHP version 5
 *
 * @category Class
 * @package  Oceanengine\Open
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * 巨量
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
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
 * Oauth2Api Class Doc Comment
 *
 * @category Class
 * @package  Oceanengine\Open
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Oauth2Api
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
     * Operation oauth2AccessTokenPost
     *
     * access_token
     *
     * @param  int $x_debug_mode x_debug_mode (optional)
     * @param  \Oceanengine\Open\Model\InlineObject $inline_object inline_object (optional)
     *
     * @throws \Oceanengine\Open\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Oceanengine\Open\Model\InlineResponse200
     */
    public function oauth2AccessTokenPost($x_debug_mode = null, $inline_object = null)
    {
        list($response) = $this->oauth2AccessTokenPostWithHttpInfo($x_debug_mode, $inline_object);
        return $response;
    }

    /**
     * Operation oauth2AccessTokenPostWithHttpInfo
     *
     * access_token
     *
     * @param  int $x_debug_mode (optional)
     * @param  \Oceanengine\Open\Model\InlineObject $inline_object (optional)
     *
     * @throws \Oceanengine\Open\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Oceanengine\Open\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function oauth2AccessTokenPostWithHttpInfo($x_debug_mode = null, $inline_object = null)
    {
        $request = $this->oauth2AccessTokenPostRequest($x_debug_mode, $inline_object);

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
                    if ('\Oceanengine\Open\Model\InlineResponse200' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Oceanengine\Open\Model\InlineResponse200', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Oceanengine\Open\Model\InlineResponse200';
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
                        '\Oceanengine\Open\Model\InlineResponse200',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation oauth2AccessTokenPostAsync
     *
     * access_token
     *
     * @param  int $x_debug_mode (optional)
     * @param  \Oceanengine\Open\Model\InlineObject $inline_object (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function oauth2AccessTokenPostAsync($x_debug_mode = null, $inline_object = null)
    {
        return $this->oauth2AccessTokenPostAsyncWithHttpInfo($x_debug_mode, $inline_object)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation oauth2AccessTokenPostAsyncWithHttpInfo
     *
     * access_token
     *
     * @param  int $x_debug_mode (optional)
     * @param  \Oceanengine\Open\Model\InlineObject $inline_object (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function oauth2AccessTokenPostAsyncWithHttpInfo($x_debug_mode = null, $inline_object = null)
    {
        $returnType = '\Oceanengine\Open\Model\InlineResponse200';
        $request = $this->oauth2AccessTokenPostRequest($x_debug_mode, $inline_object);

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
     * Create request for operation 'oauth2AccessTokenPost'
     *
     * @param  int $x_debug_mode (optional)
     * @param  \Oceanengine\Open\Model\InlineObject $inline_object (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function oauth2AccessTokenPostRequest($x_debug_mode = null, $inline_object = null)
    {

        $resourcePath = '/oauth2/access_token/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($x_debug_mode !== null) {
            $headerParams['X-Debug-Mode'] = ObjectSerializer::toHeaderValue($x_debug_mode);
        }


        // body params
        $_tempBody = null;
        if (isset($inline_object)) {
            $_tempBody = $inline_object;
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation oauth2AdvertiserGetPost
     *
     * 获取已授权账户
     *
     * @param  int $x_debug_mode x_debug_mode (optional)
     * @param  \Oceanengine\Open\Model\InlineObject2 $inline_object2 inline_object2 (optional)
     *
     * @throws \Oceanengine\Open\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Oceanengine\Open\Model\InlineResponse2002
     */
    public function oauth2AdvertiserGetPost($x_debug_mode = null, $inline_object2 = null)
    {
        list($response) = $this->oauth2AdvertiserGetPostWithHttpInfo($x_debug_mode, $inline_object2);
        return $response;
    }

    /**
     * Operation oauth2AdvertiserGetPostWithHttpInfo
     *
     * 获取已授权账户
     *
     * @param  int $x_debug_mode (optional)
     * @param  \Oceanengine\Open\Model\InlineObject2 $inline_object2 (optional)
     *
     * @throws \Oceanengine\Open\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Oceanengine\Open\Model\InlineResponse2002, HTTP status code, HTTP response headers (array of strings)
     */
    public function oauth2AdvertiserGetPostWithHttpInfo($x_debug_mode = null, $inline_object2 = null)
    {
        $request = $this->oauth2AdvertiserGetPostRequest($x_debug_mode, $inline_object2);

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
                    if ('\Oceanengine\Open\Model\InlineResponse2002' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Oceanengine\Open\Model\InlineResponse2002', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Oceanengine\Open\Model\InlineResponse2002';
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
                        '\Oceanengine\Open\Model\InlineResponse2002',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation oauth2AdvertiserGetPostAsync
     *
     * 获取已授权账户
     *
     * @param  int $x_debug_mode (optional)
     * @param  \Oceanengine\Open\Model\InlineObject2 $inline_object2 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function oauth2AdvertiserGetPostAsync($x_debug_mode = null, $inline_object2 = null)
    {
        return $this->oauth2AdvertiserGetPostAsyncWithHttpInfo($x_debug_mode, $inline_object2)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation oauth2AdvertiserGetPostAsyncWithHttpInfo
     *
     * 获取已授权账户
     *
     * @param  int $x_debug_mode (optional)
     * @param  \Oceanengine\Open\Model\InlineObject2 $inline_object2 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function oauth2AdvertiserGetPostAsyncWithHttpInfo($x_debug_mode = null, $inline_object2 = null)
    {
        $returnType = '\Oceanengine\Open\Model\InlineResponse2002';
        $request = $this->oauth2AdvertiserGetPostRequest($x_debug_mode, $inline_object2);

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
     * Create request for operation 'oauth2AdvertiserGetPost'
     *
     * @param  int $x_debug_mode (optional)
     * @param  \Oceanengine\Open\Model\InlineObject2 $inline_object2 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function oauth2AdvertiserGetPostRequest($x_debug_mode = null, $inline_object2 = null)
    {

        $resourcePath = '/oauth2/advertiser/get/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($x_debug_mode !== null) {
            $headerParams['X-Debug-Mode'] = ObjectSerializer::toHeaderValue($x_debug_mode);
        }


        // body params
        $_tempBody = null;
        if (isset($inline_object2)) {
            $_tempBody = $inline_object2;
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation oauth2RefreshTokenPost
     *
     * 刷新Refresh Token
     *
     * @param  int $x_debug_mode x_debug_mode (optional)
     * @param  \Oceanengine\Open\Model\InlineObject1 $inline_object1 inline_object1 (optional)
     *
     * @throws \Oceanengine\Open\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Oceanengine\Open\Model\InlineResponse2001
     */
    public function oauth2RefreshTokenPost($x_debug_mode = null, $inline_object1 = null)
    {
        list($response) = $this->oauth2RefreshTokenPostWithHttpInfo($x_debug_mode, $inline_object1);
        return $response;
    }

    /**
     * Operation oauth2RefreshTokenPostWithHttpInfo
     *
     * 刷新Refresh Token
     *
     * @param  int $x_debug_mode (optional)
     * @param  \Oceanengine\Open\Model\InlineObject1 $inline_object1 (optional)
     *
     * @throws \Oceanengine\Open\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Oceanengine\Open\Model\InlineResponse2001, HTTP status code, HTTP response headers (array of strings)
     */
    public function oauth2RefreshTokenPostWithHttpInfo($x_debug_mode = null, $inline_object1 = null)
    {
        $request = $this->oauth2RefreshTokenPostRequest($x_debug_mode, $inline_object1);

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
                    if ('\Oceanengine\Open\Model\InlineResponse2001' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Oceanengine\Open\Model\InlineResponse2001', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Oceanengine\Open\Model\InlineResponse2001';
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
                        '\Oceanengine\Open\Model\InlineResponse2001',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation oauth2RefreshTokenPostAsync
     *
     * 刷新Refresh Token
     *
     * @param  int $x_debug_mode (optional)
     * @param  \Oceanengine\Open\Model\InlineObject1 $inline_object1 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function oauth2RefreshTokenPostAsync($x_debug_mode = null, $inline_object1 = null)
    {
        return $this->oauth2RefreshTokenPostAsyncWithHttpInfo($x_debug_mode, $inline_object1)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation oauth2RefreshTokenPostAsyncWithHttpInfo
     *
     * 刷新Refresh Token
     *
     * @param  int $x_debug_mode (optional)
     * @param  \Oceanengine\Open\Model\InlineObject1 $inline_object1 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function oauth2RefreshTokenPostAsyncWithHttpInfo($x_debug_mode = null, $inline_object1 = null)
    {
        $returnType = '\Oceanengine\Open\Model\InlineResponse2001';
        $request = $this->oauth2RefreshTokenPostRequest($x_debug_mode, $inline_object1);

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
     * Create request for operation 'oauth2RefreshTokenPost'
     *
     * @param  int $x_debug_mode (optional)
     * @param  \Oceanengine\Open\Model\InlineObject1 $inline_object1 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function oauth2RefreshTokenPostRequest($x_debug_mode = null, $inline_object1 = null)
    {

        $resourcePath = '/oauth2/refresh_token/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($x_debug_mode !== null) {
            $headerParams['X-Debug-Mode'] = ObjectSerializer::toHeaderValue($x_debug_mode);
        }


        // body params
        $_tempBody = null;
        if (isset($inline_object1)) {
            $_tempBody = $inline_object1;
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
            'POST',
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