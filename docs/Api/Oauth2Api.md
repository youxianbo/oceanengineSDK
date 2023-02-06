# OpenAPI\Client\Oauth2Api

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**oauth2AccessTokenPost**](Oauth2Api.md#oauth2AccessTokenPost) | **POST** /oauth2/access_token/ | access_token



## oauth2AccessTokenPost

> \OpenAPI\Client\Model\InlineResponse200 oauth2AccessTokenPost($content_type, $x_debug_mode, $inline_object)

access_token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\Oauth2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = application/json; // string | 
$x_debug_mode = 1; // string | 允许值：1（开启）
$inline_object = new \OpenAPI\Client\Model\InlineObject(); // \OpenAPI\Client\Model\InlineObject | 

try {
    $result = $apiInstance->oauth2AccessTokenPost($content_type, $x_debug_mode, $inline_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Oauth2Api->oauth2AccessTokenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  |
 **x_debug_mode** | **string**| 允许值：1（开启） | [optional]
 **inline_object** | [**\OpenAPI\Client\Model\InlineObject**](../Model/InlineObject.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

