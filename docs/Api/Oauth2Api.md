# Oceanengine\Open\Oauth2Api

All URIs are relative to *https://ad.oceanengine.com/open_api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**oauth2AccessTokenPost**](Oauth2Api.md#oauth2AccessTokenPost) | **POST** /oauth2/access_token/ | access_token
[**oauth2AdvertiserGetPost**](Oauth2Api.md#oauth2AdvertiserGetPost) | **POST** /oauth2/advertiser/get/ | 获取已授权账户
[**oauth2RefreshTokenPost**](Oauth2Api.md#oauth2RefreshTokenPost) | **POST** /oauth2/refresh_token/ | 刷新Refresh Token


# **oauth2AccessTokenPost**
> \Oceanengine\Open\Model\InlineResponse200 oauth2AccessTokenPost($x_debug_mode, $inline_object)

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
$x_debug_mode = 56; // int | 
$inline_object = new \Oceanengine\Open\Model\InlineObject(); // \Oceanengine\Open\Model\InlineObject | 

try {
    $result = $apiInstance->oauth2AccessTokenPost($x_debug_mode, $inline_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Oauth2Api->oauth2AccessTokenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_debug_mode** | **int**|  | [optional]
 **inline_object** | [**\Oceanengine\Open\Model\InlineObject**](../Model/InlineObject.md)|  | [optional]

### Return type

[**\Oceanengine\Open\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **oauth2AdvertiserGetPost**
> \Oceanengine\Open\Model\InlineResponse2002 oauth2AdvertiserGetPost($x_debug_mode, $inline_object2)

获取已授权账户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Oceanengine\Open\Api\Oauth2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_debug_mode = 56; // int | 
$inline_object2 = new \Oceanengine\Open\Model\InlineObject2(); // \Oceanengine\Open\Model\InlineObject2 | 

try {
    $result = $apiInstance->oauth2AdvertiserGetPost($x_debug_mode, $inline_object2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Oauth2Api->oauth2AdvertiserGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_debug_mode** | **int**|  | [optional]
 **inline_object2** | [**\Oceanengine\Open\Model\InlineObject2**](../Model/InlineObject2.md)|  | [optional]

### Return type

[**\Oceanengine\Open\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **oauth2RefreshTokenPost**
> \Oceanengine\Open\Model\InlineResponse2001 oauth2RefreshTokenPost($x_debug_mode, $inline_object1)

刷新Refresh Token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Oceanengine\Open\Api\Oauth2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_debug_mode = 56; // int | 
$inline_object1 = new \Oceanengine\Open\Model\InlineObject1(); // \Oceanengine\Open\Model\InlineObject1 | 

try {
    $result = $apiInstance->oauth2RefreshTokenPost($x_debug_mode, $inline_object1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Oauth2Api->oauth2RefreshTokenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_debug_mode** | **int**|  | [optional]
 **inline_object1** | [**\Oceanengine\Open\Model\InlineObject1**](../Model/InlineObject1.md)|  | [optional]

### Return type

[**\Oceanengine\Open\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

