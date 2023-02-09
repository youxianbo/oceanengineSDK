# Oceanengine\Open\ReportApi

All URIs are relative to *https://ad.oceanengine.com/open_api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**call2ReportAdvertiserGetGet**](ReportApi.md#call2ReportAdvertiserGetGet) | **GET** /2/report/advertiser/get/ | 广告主数据


# **call2ReportAdvertiserGetGet**
> \Oceanengine\Open\Model\InlineResponse2006 call2ReportAdvertiserGetGet($advertiser_id, $start_date, $end_date, $fields, $group_by, $time_granularity, $filtering, $order_field, $order_type, $page, $page_size, $x_debug_mode)

广告主数据

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Oceanengine\Open\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$advertiser_id = 1; // string | 
$start_date = 2023-02-01; // string | 
$end_date = 2023-02-10; // string | 
$fields = ["cost","convert_rate","show","avg_show_cost","click"]; // string | 指定需要的指标名称，可参考应答参数返回的消耗指标字段 默认值：cost、show、avg_show_cost、click、ctr、avg_click_cost、convert、convert_rate、convert_cost
$group_by = ["STAT_GROUP_BY_FIELD_STAT_TIME"]; // string | 分组条件 默认为STAT_GROUP_BY_FIELD_STAT_TIME，支持多种分组条件，具体详见【分组组合规则】
$time_granularity = STAT_TIME_GRANULARITY_DAILY; // string | 时间粒度 默认值: STAT_TIME_GRANULARITY_DAILY 允许值:STAT_TIME_GRANULARITY_DAILY (按天维度),STAT_TIME_GRANULARITY_HOURLY (按小时维度)
$filtering = {"delivery_mode":["STANDARD"],"platform_version":"ALL"}; // string | 过滤字段，json格式，支持字段如下 delivery_mode:投放模式筛选。允许值:STANDARD:标准投放。ADLAB_FREE:管家&省心投放 platform_version: 获取的数据平台版本允许值:V1:原版。V2:巨量引擎体验版。ALL:原版+巨量引擎体验版（默认值）
$order_field = convert_rate; // string | 排序字段，所有的统计指标均可参与排序
$order_type = DESC; // string | 排序方式；默认值: DESC；允许值: ASC, DESC
$page = 1; // float | 页码 默认值: 1
$page_size = 20; // float | 页面大小，即每页展示的数据量 默认值: 20 取值范围: 1-1000
$x_debug_mode = 56; // int | 

try {
    $result = $apiInstance->call2ReportAdvertiserGetGet($advertiser_id, $start_date, $end_date, $fields, $group_by, $time_granularity, $filtering, $order_field, $order_type, $page, $page_size, $x_debug_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->call2ReportAdvertiserGetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **string**|  |
 **start_date** | **string**|  |
 **end_date** | **string**|  |
 **fields** | **string**| 指定需要的指标名称，可参考应答参数返回的消耗指标字段 默认值：cost、show、avg_show_cost、click、ctr、avg_click_cost、convert、convert_rate、convert_cost | [optional]
 **group_by** | **string**| 分组条件 默认为STAT_GROUP_BY_FIELD_STAT_TIME，支持多种分组条件，具体详见【分组组合规则】 | [optional]
 **time_granularity** | **string**| 时间粒度 默认值: STAT_TIME_GRANULARITY_DAILY 允许值:STAT_TIME_GRANULARITY_DAILY (按天维度),STAT_TIME_GRANULARITY_HOURLY (按小时维度) | [optional]
 **filtering** | **string**| 过滤字段，json格式，支持字段如下 delivery_mode:投放模式筛选。允许值:STANDARD:标准投放。ADLAB_FREE:管家&amp;省心投放 platform_version: 获取的数据平台版本允许值:V1:原版。V2:巨量引擎体验版。ALL:原版+巨量引擎体验版（默认值） | [optional]
 **order_field** | **string**| 排序字段，所有的统计指标均可参与排序 | [optional]
 **order_type** | **string**| 排序方式；默认值: DESC；允许值: ASC, DESC | [optional]
 **page** | **float**| 页码 默认值: 1 | [optional]
 **page_size** | **float**| 页面大小，即每页展示的数据量 默认值: 20 取值范围: 1-1000 | [optional]
 **x_debug_mode** | **int**|  | [optional]

### Return type

[**\Oceanengine\Open\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

