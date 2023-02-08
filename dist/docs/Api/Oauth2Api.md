# Oceanengine\Open\Oauth2Api

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**oauth2AccessTokenPost()**](Oauth2Api.md#oauth2AccessTokenPost) | **POST** /oauth2/access_token/ | access_token |


## `oauth2AccessTokenPost()`

```php
oauth2AccessTokenPost($x_debug_mode, $oauth2_access_token_post_request): \Oceanengine\Open\Model\Oauth2AccessTokenPost200Response
```

access_token



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Oceanengine\Open\Api\Oauth2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_debug_mode = ; // int | 
$oauth2_access_token_post_request = {"app_id":"1756683357850663","secret":"187f9de9ea53331ee7fa2964b824b2d6f44ac746","grant_type":"auth_code","auth_code":"0454c116e63e3841994115cd558e2fd7ddc97e4d"}; // \Oceanengine\Open\Model\Oauth2AccessTokenPostRequest

try {
    $result = $apiInstance->oauth2AccessTokenPost($x_debug_mode, $oauth2_access_token_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Oauth2Api->oauth2AccessTokenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_debug_mode** | **int**|  | [optional] |
| **oauth2_access_token_post_request** | [**\Oceanengine\Open\Model\Oauth2AccessTokenPostRequest**](../Model/Oauth2AccessTokenPostRequest.md)|  | [optional] |

### Return type

[**\Oceanengine\Open\Model\Oauth2AccessTokenPost200Response**](../Model/Oauth2AccessTokenPost200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
