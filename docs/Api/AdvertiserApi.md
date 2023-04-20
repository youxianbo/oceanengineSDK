# Oceanengine\Open\AdvertiserApi

All URIs are relative to *https://ad.oceanengine.com/open_api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**call2AdvertiserFundDailyStatGet**](AdvertiserApi.md#call2AdvertiserFundDailyStatGet) | **GET** /2/advertiser/fund/daily_stat/ | 查询账户日流水
[**call2AdvertiserFundGetGet**](AdvertiserApi.md#call2AdvertiserFundGetGet) | **GET** /2/advertiser/fund/get/ | 查询账号余额
[**call2AdvertiserFundTransactionGetGet**](AdvertiserApi.md#call2AdvertiserFundTransactionGetGet) | **GET** /2/advertiser/fund/transaction/get/ | 查询账号流水明细
[**call2AdvertiserInfoGet**](AdvertiserApi.md#call2AdvertiserInfoGet) | **GET** /2/advertiser/info/ | 广告主信息
[**call2BusinessPlatformPartnerOrganizationListGet**](AdvertiserApi.md#call2BusinessPlatformPartnerOrganizationListGet) | **GET** /2/business_platform/partner_organization/list/ | 查询合作组织
[**call2CustomerCenterAdvertiserListGet**](AdvertiserApi.md#call2CustomerCenterAdvertiserListGet) | **GET** /2/customer_center/advertiser/list/ | 获取纵横组织下资产账户列表（分页）
[**call2FundSharedWalletBalanceGetGet**](AdvertiserApi.md#call2FundSharedWalletBalanceGetGet) | **GET** /2/fund/shared_wallet_balance/get/ | 获取共享钱包余额
[**call2MajordomoAdvertiserSelectGet**](AdvertiserApi.md#call2MajordomoAdvertiserSelectGet) | **GET** /2/majordomo/advertiser/select/ | 获取纵横组织下资产账户列表
[**v30BusinessPlatformCompanyAccountGetGet**](AdvertiserApi.md#v30BusinessPlatformCompanyAccountGetGet) | **GET** /v3.0/business_platform/company_account/get/ | 获取主体下的账户列表
[**v30BusinessPlatformCompanyInfoGetGet**](AdvertiserApi.md#v30BusinessPlatformCompanyInfoGetGet) | **GET** /v3.0/business_platform/company_info/get/ | 获取纵横组织下所有主体信息


# **call2AdvertiserFundDailyStatGet**
> \Oceanengine\Open\Model\InlineResponse20021 call2AdvertiserFundDailyStatGet($access_token, $x_debug_mode, $inline_object7)

查询账户日流水

获取广告主日流水信息，一般每天8点会出来前一天的数据，如果当天存在数据延迟可往后再尝试。

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
$inline_object7 = new \Oceanengine\Open\Model\InlineObject7(); // \Oceanengine\Open\Model\InlineObject7 | 

try {
    $result = $apiInstance->call2AdvertiserFundDailyStatGet($access_token, $x_debug_mode, $inline_object7);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserApi->call2AdvertiserFundDailyStatGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**|  | [optional]
 **x_debug_mode** | **int**|  | [optional]
 **inline_object7** | [**\Oceanengine\Open\Model\InlineObject7**](../Model/InlineObject7.md)|  | [optional]

### Return type

[**\Oceanengine\Open\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **call2AdvertiserFundGetGet**
> \Oceanengine\Open\Model\InlineResponse20020 call2AdvertiserFundGetGet($access_token, $x_debug_mode, $inline_object6)

查询账号余额

获取广告主或代理商账户余额信息。

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
$inline_object6 = new \Oceanengine\Open\Model\InlineObject6(); // \Oceanengine\Open\Model\InlineObject6 | 

try {
    $result = $apiInstance->call2AdvertiserFundGetGet($access_token, $x_debug_mode, $inline_object6);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserApi->call2AdvertiserFundGetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**|  | [optional]
 **x_debug_mode** | **int**|  | [optional]
 **inline_object6** | [**\Oceanengine\Open\Model\InlineObject6**](../Model/InlineObject6.md)|  | [optional]

### Return type

[**\Oceanengine\Open\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **call2AdvertiserFundTransactionGetGet**
> \Oceanengine\Open\Model\InlineResponse20022 call2AdvertiserFundTransactionGetGet($access_token, $x_debug_mode, $inline_object8)

查询账号流水明细

获取广告主或代理商账户流水明细信息。接口规则如下： 1.假设某广告主A是代理商下广告主，对于A来说，如果流水类型是转账，而收款方是A则意味着是转账加款，如果付款方是A则意味着是转账退款。 2.假设某广告主B是直客广告主，未在任何代理商下，如果交易流水类型为充值，则收款方和付款方将都显示广告主B，如果金额为正则是充值交易，金额为负则是退款交易。

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
$inline_object8 = new \Oceanengine\Open\Model\InlineObject8(); // \Oceanengine\Open\Model\InlineObject8 | 

try {
    $result = $apiInstance->call2AdvertiserFundTransactionGetGet($access_token, $x_debug_mode, $inline_object8);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserApi->call2AdvertiserFundTransactionGetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**|  | [optional]
 **x_debug_mode** | **int**|  | [optional]
 **inline_object8** | [**\Oceanengine\Open\Model\InlineObject8**](../Model/InlineObject8.md)|  | [optional]

### Return type

[**\Oceanengine\Open\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

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

# **call2BusinessPlatformPartnerOrganizationListGet**
> \Oceanengine\Open\Model\InlineResponse20017 call2BusinessPlatformPartnerOrganizationListGet($organization_id, $page, $page_size, $filtering, $access_token)

查询合作组织

合作组织：合作组织的设立，可以帮助实现跨组织协作及跨组织资产管理。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Oceanengine\Open\Api\AdvertiserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 1; // string | 巨量纵横组织id（即管家账户）
$page = 1; // string | 
$page_size = 10; // string | 页面大小，默认值为10，最大不超过200
$filtering = ["partner_organization_ids":[123],"status":["BOUND"]]; // string | 合作状态，默认查询绑定成功的状态，允许值：BOUND（已绑定）、BINDING（绑定中）、INVALID（失效）、DELETED（删除）
$access_token = {{access_token}}; // string | 

try {
    $result = $apiInstance->call2BusinessPlatformPartnerOrganizationListGet($organization_id, $page, $page_size, $filtering, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserApi->call2BusinessPlatformPartnerOrganizationListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| 巨量纵横组织id（即管家账户） |
 **page** | **string**|  | [optional]
 **page_size** | **string**| 页面大小，默认值为10，最大不超过200 | [optional]
 **filtering** | **string**| 合作状态，默认查询绑定成功的状态，允许值：BOUND（已绑定）、BINDING（绑定中）、INVALID（失效）、DELETED（删除） | [optional]
 **access_token** | **string**|  | [optional]

### Return type

[**\Oceanengine\Open\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **call2CustomerCenterAdvertiserListGet**
> \Oceanengine\Open\Model\InlineResponse20027 call2CustomerCenterAdvertiserListGet($access_token, $x_debug_mode, $inline_object13)

获取纵横组织下资产账户列表（分页）

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
$inline_object13 = new \Oceanengine\Open\Model\InlineObject13(); // \Oceanengine\Open\Model\InlineObject13 | 

try {
    $result = $apiInstance->call2CustomerCenterAdvertiserListGet($access_token, $x_debug_mode, $inline_object13);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserApi->call2CustomerCenterAdvertiserListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**|  | [optional]
 **x_debug_mode** | **int**|  | [optional]
 **inline_object13** | [**\Oceanengine\Open\Model\InlineObject13**](../Model/InlineObject13.md)|  | [optional]

### Return type

[**\Oceanengine\Open\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **call2FundSharedWalletBalanceGetGet**
> \Oceanengine\Open\Model\InlineResponse20023 call2FundSharedWalletBalanceGetGet($access_token, $inline_object9)

获取共享钱包余额

返货相关需要咨询相关的运营和销售同学对接，具备返货相关前置条件下，相关返货资金信息可以通过本接口获得

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
$inline_object9 = new \Oceanengine\Open\Model\InlineObject9(); // \Oceanengine\Open\Model\InlineObject9 | 

try {
    $result = $apiInstance->call2FundSharedWalletBalanceGetGet($access_token, $inline_object9);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserApi->call2FundSharedWalletBalanceGetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**|  | [optional]
 **inline_object9** | [**\Oceanengine\Open\Model\InlineObject9**](../Model/InlineObject9.md)|  | [optional]

### Return type

[**\Oceanengine\Open\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **call2MajordomoAdvertiserSelectGet**
> \Oceanengine\Open\Model\InlineResponse20016 call2MajordomoAdvertiserSelectGet($access_token, $x_debug_mode, $inline_object5)

获取纵横组织下资产账户列表

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
$inline_object5 = new \Oceanengine\Open\Model\InlineObject5(); // \Oceanengine\Open\Model\InlineObject5 | 

try {
    $result = $apiInstance->call2MajordomoAdvertiserSelectGet($access_token, $x_debug_mode, $inline_object5);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserApi->call2MajordomoAdvertiserSelectGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**|  |
 **x_debug_mode** | **int**|  | [optional]
 **inline_object5** | [**\Oceanengine\Open\Model\InlineObject5**](../Model/InlineObject5.md)|  | [optional]

### Return type

[**\Oceanengine\Open\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v30BusinessPlatformCompanyAccountGetGet**
> \Oceanengine\Open\Model\InlineResponse20019 v30BusinessPlatformCompanyAccountGetGet($organization_id, $company_id, $account_type, $page, $page_size, $access_token, $x_debug_mode)

获取主体下的账户列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Oceanengine\Open\Api\AdvertiserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 123; // string | 纵横组织id
$company_id = 123; // string | 公司主体id
$account_type = ["AD"]; // string | 账户类型，可选值:AD: 广告账户,QIANCHUAN:千川广告账户
$page = 1; // string | 
$page_size = 10; // string | 页面数据量. 默认值: 10
$access_token = {{access_token}}; // string | 
$x_debug_mode = 56; // int | 

try {
    $result = $apiInstance->v30BusinessPlatformCompanyAccountGetGet($organization_id, $company_id, $account_type, $page, $page_size, $access_token, $x_debug_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserApi->v30BusinessPlatformCompanyAccountGetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| 纵横组织id |
 **company_id** | **string**| 公司主体id |
 **account_type** | **string**| 账户类型，可选值:AD: 广告账户,QIANCHUAN:千川广告账户 |
 **page** | **string**|  | [optional]
 **page_size** | **string**| 页面数据量. 默认值: 10 | [optional]
 **access_token** | **string**|  | [optional]
 **x_debug_mode** | **int**|  | [optional]

### Return type

[**\Oceanengine\Open\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v30BusinessPlatformCompanyInfoGetGet**
> \Oceanengine\Open\Model\InlineResponse20018 v30BusinessPlatformCompanyInfoGetGet($organization_id, $page, $page_size, $access_token)

获取纵横组织下所有主体信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Oceanengine\Open\Api\AdvertiserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 1; // string | 纵横组织id
$page = 1; // string | 
$page_size = 10; // string | 页面数据量. 默认值: 10
$access_token = {{access_token}}; // string | 

try {
    $result = $apiInstance->v30BusinessPlatformCompanyInfoGetGet($organization_id, $page, $page_size, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserApi->v30BusinessPlatformCompanyInfoGetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| 纵横组织id | [optional]
 **page** | **string**|  | [optional]
 **page_size** | **string**| 页面数据量. 默认值: 10 | [optional]
 **access_token** | **string**|  | [optional]

### Return type

[**\Oceanengine\Open\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

