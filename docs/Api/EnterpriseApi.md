# Oceanengine\Open\EnterpriseApi

All URIs are relative to *https://ad.oceanengine.com/open_api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v10EnterpriseBindListGetGet**](EnterpriseApi.md#v10EnterpriseBindListGetGet) | **GET** /v1.0/enterprise/bind/list/get/ | 获取广告主关联的企业号列表
[**v10EnterpriseInfoGet**](EnterpriseApi.md#v10EnterpriseInfoGet) | **GET** /v1.0/enterprise/info/ | 获取企业号信息
[**v10EnterpriseOverviewDataGetGet**](EnterpriseApi.md#v10EnterpriseOverviewDataGetGet) | **GET** /v1.0/enterprise/overview/data/get/ | 获取企业号基础数据


# **v10EnterpriseBindListGetGet**
> \Oceanengine\Open\Model\InlineResponse20025 v10EnterpriseBindListGetGet($access_token, $x_debug_mode, $inline_object11)

获取广告主关联的企业号列表

获取广告主账号关联的抖音号open_id、抖音号id、抖音号名称、抖音号头像、授权有效期，其中包含企业号（企业号是抖音号的一种认证类型，包含关系）

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Oceanengine\Open\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = {{access_token}}; // string | 
$x_debug_mode = 56; // int | 
$inline_object11 = new \Oceanengine\Open\Model\InlineObject11(); // \Oceanengine\Open\Model\InlineObject11 | 

try {
    $result = $apiInstance->v10EnterpriseBindListGetGet($access_token, $x_debug_mode, $inline_object11);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->v10EnterpriseBindListGetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**|  | [optional]
 **x_debug_mode** | **int**|  | [optional]
 **inline_object11** | [**\Oceanengine\Open\Model\InlineObject11**](../Model/InlineObject11.md)|  | [optional]

### Return type

[**\Oceanengine\Open\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v10EnterpriseInfoGet**
> \Oceanengine\Open\Model\InlineResponse20024 v10EnterpriseInfoGet($access_token, $x_debug_mode, $inline_object10)

获取企业号信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Oceanengine\Open\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = {{access_token}}; // string | 
$x_debug_mode = 56; // int | 
$inline_object10 = new \Oceanengine\Open\Model\InlineObject10(); // \Oceanengine\Open\Model\InlineObject10 | 

try {
    $result = $apiInstance->v10EnterpriseInfoGet($access_token, $x_debug_mode, $inline_object10);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->v10EnterpriseInfoGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**|  | [optional]
 **x_debug_mode** | **int**|  | [optional]
 **inline_object10** | [**\Oceanengine\Open\Model\InlineObject10**](../Model/InlineObject10.md)|  | [optional]

### Return type

[**\Oceanengine\Open\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v10EnterpriseOverviewDataGetGet**
> \Oceanengine\Open\Model\InlineResponse20026 v10EnterpriseOverviewDataGetGet($access_token, $x_debug_mode, $inline_object12)

获取企业号基础数据

获取企业号的基础数据，含主页访问量、新增粉丝数、新增播放数、新增点赞数等

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Oceanengine\Open\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = {{access_token}}; // string | 
$x_debug_mode = 56; // int | 
$inline_object12 = new \Oceanengine\Open\Model\InlineObject12(); // \Oceanengine\Open\Model\InlineObject12 | 

try {
    $result = $apiInstance->v10EnterpriseOverviewDataGetGet($access_token, $x_debug_mode, $inline_object12);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->v10EnterpriseOverviewDataGetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**|  | [optional]
 **x_debug_mode** | **int**|  | [optional]
 **inline_object12** | [**\Oceanengine\Open\Model\InlineObject12**](../Model/InlineObject12.md)|  | [optional]

### Return type

[**\Oceanengine\Open\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

