# Oceanengine\Open\AdvertiserApi

All URIs are relative to *https://ad.oceanengine.com/open_api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**call2AdvertiserInfoGet**](AdvertiserApi.md#call2AdvertiserInfoGet) | **GET** /2/advertiser/info/ | 广告主信息


# **call2AdvertiserInfoGet**
> \Oceanengine\Open\Model\InlineResponse2005 call2AdvertiserInfoGet($access_token, $x_debug_mode, $inline_object4)

广告主信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Oceanengine\Open\Api\AdvertiserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = {{access_token}}; // string | 
$x_debug_mode = 56; // int | 
$inline_object4 = new \Oceanengine\Open\Model\InlineObject4(); // \Oceanengine\Open\Model\InlineObject4 | 

try {
    $result = $apiInstance->call2AdvertiserInfoGet($access_token, $x_debug_mode, $inline_object4);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserApi->call2AdvertiserInfoGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**|  |
 **x_debug_mode** | **int**|  | [optional]
 **inline_object4** | [**\Oceanengine\Open\Model\InlineObject4**](../Model/InlineObject4.md)|  | [optional]

### Return type

[**\Oceanengine\Open\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

