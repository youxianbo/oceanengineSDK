# Oceanengine\Open\ReportApi

All URIs are relative to *https://ad.oceanengine.com/open_api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**call2ReportAdGetGet**](ReportApi.md#call2ReportAdGetGet) | **GET** /2/report/ad/get/ | 广告计划数据
[**call2ReportAdvertiserGetGet**](ReportApi.md#call2ReportAdvertiserGetGet) | **GET** /2/report/advertiser/get/ | 广告主数据
[**call2ReportAudienceAgeGet**](ReportApi.md#call2ReportAudienceAgeGet) | **GET** /2/report/audience/age/ | 年龄数据
[**call2ReportAudienceCityGet**](ReportApi.md#call2ReportAudienceCityGet) | **GET** /2/report/audience/city/ | 市级数据
[**call2ReportAudienceGenderGet**](ReportApi.md#call2ReportAudienceGenderGet) | **GET** /2/report/audience/gender/ | 性别数据
[**call2ReportAudienceInterestActionListGet**](ReportApi.md#call2ReportAudienceInterestActionListGet) | **GET** /2/report/audience/interest_action/list/ | 行为兴趣数据
[**call2ReportAudienceProvinceGet**](ReportApi.md#call2ReportAudienceProvinceGet) | **GET** /2/report/audience/province/ | 省级数据
[**call2ReportCampaignGetGet**](ReportApi.md#call2ReportCampaignGetGet) | **GET** /2/report/campaign/get/ | 广告组数据
[**call2ReportCreativeGetGet**](ReportApi.md#call2ReportCreativeGetGet) | **GET** /2/report/creative/get/ | 广告创意数据
[**call2ReportSitePageGet**](ReportApi.md#call2ReportSitePageGet) | **GET** /2/report/site/page/ | 橙子建站落地页数据
[**v30ReportCustomGetGet**](ReportApi.md#v30ReportCustomGetGet) | **GET** /v3.0/report/custom/get/ | 自定义报表


# **call2ReportAdGetGet**
> \Oceanengine\Open\Model\InlineResponse2008 call2ReportAdGetGet($advertiser_id, $start_date, $end_date, $fields, $group_by, $time_granularity, $filtering, $order_field, $order_type, $page, $page_size, $access_token, $x_debug_mode)

广告计划数据

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Oceanengine\Open\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$advertiser_id = 1; // string | 广告主ID
$start_date = 2023-02-01; // string | 起始日期,格式YYYY-MM-DD,只支持查询2016-10-26及以后的日期
$end_date = 2023-02-10; // string | 结束日期,格式YYYY-MM-DD,只支持查询2016-10-26及以后的日期,时间跨度不能超过30天
$fields = ["cost","convert_rate","show","avg_show_cost","click"]; // string | 指定需要的指标名称，可参考应答参数返回的消耗指标字段 默认值：cost、show、avg_show_cost、click、ctr、avg_click_cost、convert、convert_rate、convert_cost
$group_by = ["STAT_GROUP_BY_FIELD_STAT_TIME"]; // string | 分组条件 默认为STAT_GROUP_BY_FIELD_STAT_TIME，支持多种分组条件，具体详见【分组组合规则】
$time_granularity = STAT_TIME_GRANULARITY_DAILY; // string | 时间粒度 默认值: STAT_TIME_GRANULARITY_DAILY 允许值:STAT_TIME_GRANULARITY_DAILY (按天维度),STAT_TIME_GRANULARITY_HOURLY (按小时维度)
$filtering = {"campaign_ids":[123],"ad_name":"广告计划名称","ad_ids":[123],"pricings":["PRICING_CPC"],"landing_types":["LINK","APP","DPA","GOODS","STORE","SHOP","AWEME"],"status":"AD_STATUS_DELIVERY_OK","delivery_mode":"STANDARD"}; // string | 过滤字段，json格式，支持字段如下 campaign_ids:广告组id列表：按照campaign_id过滤，最多支持100个 ad_name:广告计划名称：按照ad_name过滤，字符串长度限制1-30 ad_ids:广告计划id列表：按照 ad_id 过滤，最多支持100个 pricings:出价方式列表：按照出价方式过滤，详见【附录-计划出价类型】 landing_types:推广目的列表：按照广告组推广目的过滤,详见【附录-推广目的类型】允许值:\"LINK\",\"APP\",\"DPA\",\"GOODS\",\"STORE\",\"SHOP\",\"AWEME\" status:广告组状态：按照广告组状态过滤，默认为返回“所有不包含已删除”，如果要返回所有包含已删除有对应枚举表示，详见【附录-广告组状态】 delivery_mode:投放模式筛选。允许值:STANDARD:标准投放。ADLAB_FREE:管家&省心投放
$order_field = convert_rate; // string | 排序字段，所有的统计指标均可参与排序
$order_type = DESC; // string | 排序方式；默认值: DESC；允许值: ASC, DESC
$page = 1; // float | 页码 默认值: 1
$page_size = 20; // float | 页面大小，即每页展示的数据量 默认值: 20 取值范围: 1-1000
$access_token = {{access_token}}; // string | 
$x_debug_mode = 56; // int | 

try {
    $result = $apiInstance->call2ReportAdGetGet($advertiser_id, $start_date, $end_date, $fields, $group_by, $time_granularity, $filtering, $order_field, $order_type, $page, $page_size, $access_token, $x_debug_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->call2ReportAdGetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **string**| 广告主ID |
 **start_date** | **string**| 起始日期,格式YYYY-MM-DD,只支持查询2016-10-26及以后的日期 |
 **end_date** | **string**| 结束日期,格式YYYY-MM-DD,只支持查询2016-10-26及以后的日期,时间跨度不能超过30天 |
 **fields** | **string**| 指定需要的指标名称，可参考应答参数返回的消耗指标字段 默认值：cost、show、avg_show_cost、click、ctr、avg_click_cost、convert、convert_rate、convert_cost | [optional]
 **group_by** | **string**| 分组条件 默认为STAT_GROUP_BY_FIELD_STAT_TIME，支持多种分组条件，具体详见【分组组合规则】 | [optional]
 **time_granularity** | **string**| 时间粒度 默认值: STAT_TIME_GRANULARITY_DAILY 允许值:STAT_TIME_GRANULARITY_DAILY (按天维度),STAT_TIME_GRANULARITY_HOURLY (按小时维度) | [optional]
 **filtering** | **string**| 过滤字段，json格式，支持字段如下 campaign_ids:广告组id列表：按照campaign_id过滤，最多支持100个 ad_name:广告计划名称：按照ad_name过滤，字符串长度限制1-30 ad_ids:广告计划id列表：按照 ad_id 过滤，最多支持100个 pricings:出价方式列表：按照出价方式过滤，详见【附录-计划出价类型】 landing_types:推广目的列表：按照广告组推广目的过滤,详见【附录-推广目的类型】允许值:\&quot;LINK\&quot;,\&quot;APP\&quot;,\&quot;DPA\&quot;,\&quot;GOODS\&quot;,\&quot;STORE\&quot;,\&quot;SHOP\&quot;,\&quot;AWEME\&quot; status:广告组状态：按照广告组状态过滤，默认为返回“所有不包含已删除”，如果要返回所有包含已删除有对应枚举表示，详见【附录-广告组状态】 delivery_mode:投放模式筛选。允许值:STANDARD:标准投放。ADLAB_FREE:管家&amp;省心投放 | [optional]
 **order_field** | **string**| 排序字段，所有的统计指标均可参与排序 | [optional]
 **order_type** | **string**| 排序方式；默认值: DESC；允许值: ASC, DESC | [optional]
 **page** | **float**| 页码 默认值: 1 | [optional]
 **page_size** | **float**| 页面大小，即每页展示的数据量 默认值: 20 取值范围: 1-1000 | [optional]
 **access_token** | **string**|  | [optional]
 **x_debug_mode** | **int**|  | [optional]

### Return type

[**\Oceanengine\Open\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **call2ReportAdvertiserGetGet**
> \Oceanengine\Open\Model\InlineResponse2006 call2ReportAdvertiserGetGet($advertiser_id, $start_date, $end_date, $fields, $group_by, $time_granularity, $filtering, $order_field, $order_type, $page, $page_size, $access_token, $x_debug_mode)

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
$advertiser_id = 1; // string | 广告主ID
$start_date = 2023-02-01; // string | 起始日期,格式YYYY-MM-DD,只支持查询2016-10-26及以后的日期
$end_date = 2023-02-10; // string | 结束日期,格式YYYY-MM-DD,只支持查询2016-10-26及以后的日期,时间跨度不能超过30天
$fields = ["cost","convert_rate","show","avg_show_cost","click"]; // string | 指定需要的指标名称，可参考应答参数返回的消耗指标字段 默认值：cost、show、avg_show_cost、click、ctr、avg_click_cost、convert、convert_rate、convert_cost
$group_by = ["STAT_GROUP_BY_FIELD_STAT_TIME"]; // string | 分组条件 默认为STAT_GROUP_BY_FIELD_STAT_TIME，支持多种分组条件，具体详见【分组组合规则】
$time_granularity = STAT_TIME_GRANULARITY_DAILY; // string | 时间粒度 默认值: STAT_TIME_GRANULARITY_DAILY 允许值:STAT_TIME_GRANULARITY_DAILY (按天维度),STAT_TIME_GRANULARITY_HOURLY (按小时维度)
$filtering = {"delivery_mode":["STANDARD"],"platform_version":"ALL"}; // string | 过滤字段，json格式，支持字段如下 delivery_mode:投放模式筛选。允许值:STANDARD:标准投放。ADLAB_FREE:管家&省心投放 platform_version: 获取的数据平台版本允许值:V1:原版。V2:巨量引擎体验版。ALL:原版+巨量引擎体验版（默认值）
$order_field = convert_rate; // string | 排序字段，所有的统计指标均可参与排序
$order_type = DESC; // string | 排序方式；默认值: DESC；允许值: ASC, DESC
$page = 1; // float | 页码 默认值: 1
$page_size = 20; // float | 页面大小，即每页展示的数据量 默认值: 20 取值范围: 1-1000
$access_token = {{access_token}}; // string | 
$x_debug_mode = 56; // int | 

try {
    $result = $apiInstance->call2ReportAdvertiserGetGet($advertiser_id, $start_date, $end_date, $fields, $group_by, $time_granularity, $filtering, $order_field, $order_type, $page, $page_size, $access_token, $x_debug_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->call2ReportAdvertiserGetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **string**| 广告主ID |
 **start_date** | **string**| 起始日期,格式YYYY-MM-DD,只支持查询2016-10-26及以后的日期 |
 **end_date** | **string**| 结束日期,格式YYYY-MM-DD,只支持查询2016-10-26及以后的日期,时间跨度不能超过30天 |
 **fields** | **string**| 指定需要的指标名称，可参考应答参数返回的消耗指标字段 默认值：cost、show、avg_show_cost、click、ctr、avg_click_cost、convert、convert_rate、convert_cost | [optional]
 **group_by** | **string**| 分组条件 默认为STAT_GROUP_BY_FIELD_STAT_TIME，支持多种分组条件，具体详见【分组组合规则】 | [optional]
 **time_granularity** | **string**| 时间粒度 默认值: STAT_TIME_GRANULARITY_DAILY 允许值:STAT_TIME_GRANULARITY_DAILY (按天维度),STAT_TIME_GRANULARITY_HOURLY (按小时维度) | [optional]
 **filtering** | **string**| 过滤字段，json格式，支持字段如下 delivery_mode:投放模式筛选。允许值:STANDARD:标准投放。ADLAB_FREE:管家&amp;省心投放 platform_version: 获取的数据平台版本允许值:V1:原版。V2:巨量引擎体验版。ALL:原版+巨量引擎体验版（默认值） | [optional]
 **order_field** | **string**| 排序字段，所有的统计指标均可参与排序 | [optional]
 **order_type** | **string**| 排序方式；默认值: DESC；允许值: ASC, DESC | [optional]
 **page** | **float**| 页码 默认值: 1 | [optional]
 **page_size** | **float**| 页面大小，即每页展示的数据量 默认值: 20 取值范围: 1-1000 | [optional]
 **access_token** | **string**|  | [optional]
 **x_debug_mode** | **int**|  | [optional]

### Return type

[**\Oceanengine\Open\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **call2ReportAudienceAgeGet**
> \Oceanengine\Open\Model\InlineResponse20014 call2ReportAudienceAgeGet($advertiser_id, $start_date, $end_date, $id_type, $metrics, $ids, $access_token, $x_debug_mode)

年龄数据

获取年龄定向受众数据，当前包括6个年龄段（1-18；18-23；24-30；31-40；41-50；50岁以上），可以查看受众中不同年龄段用户的投放数据，包括花费、展示、点击等数据。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Oceanengine\Open\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$advertiser_id = 1; // string | 广告主ID
$start_date = 2023-02-01; // string | 起始日期，从0时起，格式2020-01-01，只支持查询2016-10-26及以后的日期
$end_date = 2023-02-10; // string | 结束日期，至0时止，格式2020-01-08，只支持查询2016-10-26及以后的日期 最大查询跨度1年
$id_type = AUDIENCE_STAT_ID_TYPE_ADVERTISER; // string | 查询ID类型，可选值： AUDIENCE_STAT_ID_TYPE_ADVERTISER 按广告主查询、AUDIENCE_STAT_ID_TYPE_CAMPAIGN 按广告组查询、AUDIENCE_STAT_ID_TYPE_AD 按广告计划查询
$metrics = ["cost","show","click","convert"]; // string | 查询指标列表，详见此文档下方【查询指标】 允许值：cost，show，click，convert
$ids = [123]; // string | 查询ID列表，长度1-100 id_type为AUDIENCE_STAT_ID_TYPE_ADVERTISER时，选填；其他类型，必填
$access_token = {{access_token}}; // string | 
$x_debug_mode = 56; // int | 

try {
    $result = $apiInstance->call2ReportAudienceAgeGet($advertiser_id, $start_date, $end_date, $id_type, $metrics, $ids, $access_token, $x_debug_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->call2ReportAudienceAgeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **string**| 广告主ID |
 **start_date** | **string**| 起始日期，从0时起，格式2020-01-01，只支持查询2016-10-26及以后的日期 |
 **end_date** | **string**| 结束日期，至0时止，格式2020-01-08，只支持查询2016-10-26及以后的日期 最大查询跨度1年 |
 **id_type** | **string**| 查询ID类型，可选值： AUDIENCE_STAT_ID_TYPE_ADVERTISER 按广告主查询、AUDIENCE_STAT_ID_TYPE_CAMPAIGN 按广告组查询、AUDIENCE_STAT_ID_TYPE_AD 按广告计划查询 |
 **metrics** | **string**| 查询指标列表，详见此文档下方【查询指标】 允许值：cost，show，click，convert |
 **ids** | **string**| 查询ID列表，长度1-100 id_type为AUDIENCE_STAT_ID_TYPE_ADVERTISER时，选填；其他类型，必填 | [optional]
 **access_token** | **string**|  | [optional]
 **x_debug_mode** | **int**|  | [optional]

### Return type

[**\Oceanengine\Open\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **call2ReportAudienceCityGet**
> \Oceanengine\Open\Model\InlineResponse20012 call2ReportAudienceCityGet($advertiser_id, $start_date, $end_date, $id_type, $metrics, $ids, $access_token, $x_debug_mode)

市级数据

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Oceanengine\Open\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$advertiser_id = 1; // string | 广告主ID
$start_date = 2023-02-01; // string | 起始日期，从0时起，格式2020-01-01，只支持查询2016-10-26及以后的日期
$end_date = 2023-02-10; // string | 结束日期，至0时止，格式2020-01-08，只支持查询2016-10-26及以后的日期 最大查询跨度1年
$id_type = AUDIENCE_STAT_ID_TYPE_ADVERTISER; // string | 查询ID类型，可选值： AUDIENCE_STAT_ID_TYPE_ADVERTISER 按广告主查询、AUDIENCE_STAT_ID_TYPE_CAMPAIGN 按广告组查询、AUDIENCE_STAT_ID_TYPE_AD 按广告计划查询
$metrics = ["cost","show","click","convert"]; // string | 查询指标列表，详见此文档下方【查询指标】 允许值：cost，show，click，convert
$ids = [123]; // string | 查询ID列表，长度1-100 id_type为AUDIENCE_STAT_ID_TYPE_ADVERTISER时，选填；其他类型，必填
$access_token = {{access_token}}; // string | 
$x_debug_mode = 56; // int | 

try {
    $result = $apiInstance->call2ReportAudienceCityGet($advertiser_id, $start_date, $end_date, $id_type, $metrics, $ids, $access_token, $x_debug_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->call2ReportAudienceCityGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **string**| 广告主ID |
 **start_date** | **string**| 起始日期，从0时起，格式2020-01-01，只支持查询2016-10-26及以后的日期 |
 **end_date** | **string**| 结束日期，至0时止，格式2020-01-08，只支持查询2016-10-26及以后的日期 最大查询跨度1年 |
 **id_type** | **string**| 查询ID类型，可选值： AUDIENCE_STAT_ID_TYPE_ADVERTISER 按广告主查询、AUDIENCE_STAT_ID_TYPE_CAMPAIGN 按广告组查询、AUDIENCE_STAT_ID_TYPE_AD 按广告计划查询 |
 **metrics** | **string**| 查询指标列表，详见此文档下方【查询指标】 允许值：cost，show，click，convert |
 **ids** | **string**| 查询ID列表，长度1-100 id_type为AUDIENCE_STAT_ID_TYPE_ADVERTISER时，选填；其他类型，必填 | [optional]
 **access_token** | **string**|  | [optional]
 **x_debug_mode** | **int**|  | [optional]

### Return type

[**\Oceanengine\Open\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **call2ReportAudienceGenderGet**
> \Oceanengine\Open\Model\InlineResponse20013 call2ReportAudienceGenderGet($advertiser_id, $start_date, $end_date, $id_type, $metrics, $ids, $access_token, $x_debug_mode)

性别数据

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Oceanengine\Open\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$advertiser_id = 1; // string | 广告主ID
$start_date = 2023-02-01; // string | 起始日期，从0时起，格式2020-01-01，只支持查询2016-10-26及以后的日期
$end_date = 2023-02-10; // string | 结束日期，至0时止，格式2020-01-08，只支持查询2016-10-26及以后的日期 最大查询跨度1年
$id_type = AUDIENCE_STAT_ID_TYPE_ADVERTISER; // string | 查询ID类型，可选值： AUDIENCE_STAT_ID_TYPE_ADVERTISER 按广告主查询、AUDIENCE_STAT_ID_TYPE_CAMPAIGN 按广告组查询、AUDIENCE_STAT_ID_TYPE_AD 按广告计划查询
$metrics = ["cost","show","click","convert"]; // string | 查询指标列表，详见此文档下方【查询指标】 允许值：cost，show，click，convert
$ids = [123]; // string | 查询ID列表，长度1-100 id_type为AUDIENCE_STAT_ID_TYPE_ADVERTISER时，选填；其他类型，必填
$access_token = {{access_token}}; // string | 
$x_debug_mode = 56; // int | 

try {
    $result = $apiInstance->call2ReportAudienceGenderGet($advertiser_id, $start_date, $end_date, $id_type, $metrics, $ids, $access_token, $x_debug_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->call2ReportAudienceGenderGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **string**| 广告主ID |
 **start_date** | **string**| 起始日期，从0时起，格式2020-01-01，只支持查询2016-10-26及以后的日期 |
 **end_date** | **string**| 结束日期，至0时止，格式2020-01-08，只支持查询2016-10-26及以后的日期 最大查询跨度1年 |
 **id_type** | **string**| 查询ID类型，可选值： AUDIENCE_STAT_ID_TYPE_ADVERTISER 按广告主查询、AUDIENCE_STAT_ID_TYPE_CAMPAIGN 按广告组查询、AUDIENCE_STAT_ID_TYPE_AD 按广告计划查询 |
 **metrics** | **string**| 查询指标列表，详见此文档下方【查询指标】 允许值：cost，show，click，convert |
 **ids** | **string**| 查询ID列表，长度1-100 id_type为AUDIENCE_STAT_ID_TYPE_ADVERTISER时，选填；其他类型，必填 | [optional]
 **access_token** | **string**|  | [optional]
 **x_debug_mode** | **int**|  | [optional]

### Return type

[**\Oceanengine\Open\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **call2ReportAudienceInterestActionListGet**
> \Oceanengine\Open\Model\InlineResponse20010 call2ReportAudienceInterestActionListGet($advertiser_id, $start_date, $end_date, $metrics, $filtering, $page, $page_size, $access_token, $x_debug_mode)

行为兴趣数据

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Oceanengine\Open\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$advertiser_id = 1; // string | 广告主ID
$start_date = 2023-02-01; // string | 起始日期，从0时起，格式2020-08-15默认15天前，即不指定起止时间获取最近15天数据
$end_date = 2023-02-10; // string | 结束日期，至24时止，格式2020-08-29默认昨天，即不指定起止时间获取最近15天数据,起始时间与结束时间之差小于15天，否则报错并提示\"max time span is 15 days\"
$metrics = ["stat_cost", "show_cnt", "cpm_platform", "click_cnt", "ctr", "cpc_platform", "convert_cnt", "conversion_cost", "conversion_rate", "deep_convert_cnt", "deep_convert_cost", "deep_convert_rate"]; // string | 查询指标列表，允许值：stat_cost, show_cnt, cpm_platform, click_cnt, ctr, cpc_platform, convert_cnt, conversion_cost, conversion_rate, deep_convert_cnt, deep_convert_cost, deep_convert_rate, total_play, valid_play, valid_play_rate, valid_play_cost, dy_follow, dy_like, dy_comment, dy_share。默认值: [\"stat_cost\", \"show_cnt\", \"cpm_platform\", \"click_cnt\", \"ctr\", \"cpc_platform\", \"convert_cnt\", \"conversion_cost\", \"conversion_rate\", \"deep_convert_cnt\", \"deep_convert_cost\", \"deep_convert_rate\"]
$filtering = {"interest_action_type":"INTEREST","audience_level":"FIRST_LEVEL","campaign_ids":[1234],"ad_ids":[1234],"action_scene":["E-COMMERCE", "NEWS", "APP"],"action_days":30}; // string | 过滤字段 interest_action_type：行为兴趣类型，详见【附录-行为兴趣类型】可选值: ACTION（行为）,INTEREST（兴趣）默认值: INTEREST，当传ACTION时，表示获取“行为”受众数据，当传INTEREST时，表示获取“兴趣”受众数据 audience_level：类目词级别 详见【附录-类目词级别】可选值: FIRST_LEVEL,SECOND_LEVEL,THIRD_LEVEL,FOURTH_LEVEL,KEYWORD_AWEME，默认值: FIRST_LEVEL campaign_ids:广告组查询列表，长度1-100 ad_ids:广告计划查询列表，长度1-100 action_scene:行为场景，仅在行为兴趣类型为ACTION时传入，详见【附录-行为场景】允许值：E-COMMERCE, NEWS, APP 默认值: [\"E-COMMERCE\", \"NEWS\", \"APP\"] action_days:行为天数，仅在行为兴趣类型为ACTION时传入 默认值: 30
$page = 1; // float | 页码 默认值: 1
$page_size = 20; // float | 页面大小，即每页展示的数据量 默认值: 20 取值范围: 1-1000
$access_token = {{access_token}}; // string | 
$x_debug_mode = 56; // int | 

try {
    $result = $apiInstance->call2ReportAudienceInterestActionListGet($advertiser_id, $start_date, $end_date, $metrics, $filtering, $page, $page_size, $access_token, $x_debug_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->call2ReportAudienceInterestActionListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **string**| 广告主ID |
 **start_date** | **string**| 起始日期，从0时起，格式2020-08-15默认15天前，即不指定起止时间获取最近15天数据 | [optional]
 **end_date** | **string**| 结束日期，至24时止，格式2020-08-29默认昨天，即不指定起止时间获取最近15天数据,起始时间与结束时间之差小于15天，否则报错并提示\&quot;max time span is 15 days\&quot; | [optional]
 **metrics** | **string**| 查询指标列表，允许值：stat_cost, show_cnt, cpm_platform, click_cnt, ctr, cpc_platform, convert_cnt, conversion_cost, conversion_rate, deep_convert_cnt, deep_convert_cost, deep_convert_rate, total_play, valid_play, valid_play_rate, valid_play_cost, dy_follow, dy_like, dy_comment, dy_share。默认值: [\&quot;stat_cost\&quot;, \&quot;show_cnt\&quot;, \&quot;cpm_platform\&quot;, \&quot;click_cnt\&quot;, \&quot;ctr\&quot;, \&quot;cpc_platform\&quot;, \&quot;convert_cnt\&quot;, \&quot;conversion_cost\&quot;, \&quot;conversion_rate\&quot;, \&quot;deep_convert_cnt\&quot;, \&quot;deep_convert_cost\&quot;, \&quot;deep_convert_rate\&quot;] | [optional]
 **filtering** | **string**| 过滤字段 interest_action_type：行为兴趣类型，详见【附录-行为兴趣类型】可选值: ACTION（行为）,INTEREST（兴趣）默认值: INTEREST，当传ACTION时，表示获取“行为”受众数据，当传INTEREST时，表示获取“兴趣”受众数据 audience_level：类目词级别 详见【附录-类目词级别】可选值: FIRST_LEVEL,SECOND_LEVEL,THIRD_LEVEL,FOURTH_LEVEL,KEYWORD_AWEME，默认值: FIRST_LEVEL campaign_ids:广告组查询列表，长度1-100 ad_ids:广告计划查询列表，长度1-100 action_scene:行为场景，仅在行为兴趣类型为ACTION时传入，详见【附录-行为场景】允许值：E-COMMERCE, NEWS, APP 默认值: [\&quot;E-COMMERCE\&quot;, \&quot;NEWS\&quot;, \&quot;APP\&quot;] action_days:行为天数，仅在行为兴趣类型为ACTION时传入 默认值: 30 | [optional]
 **page** | **float**| 页码 默认值: 1 | [optional]
 **page_size** | **float**| 页面大小，即每页展示的数据量 默认值: 20 取值范围: 1-1000 | [optional]
 **access_token** | **string**|  | [optional]
 **x_debug_mode** | **int**|  | [optional]

### Return type

[**\Oceanengine\Open\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **call2ReportAudienceProvinceGet**
> \Oceanengine\Open\Model\InlineResponse20011 call2ReportAudienceProvinceGet($advertiser_id, $start_date, $end_date, $id_type, $metrics, $ids, $access_token, $x_debug_mode)

省级数据

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Oceanengine\Open\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$advertiser_id = 1; // string | 广告主ID
$start_date = 2023-02-01; // string | 起始日期，从0时起，格式2020-01-01，只支持查询2016-10-26及以后的日期
$end_date = 2023-02-10; // string | 结束日期，至0时止，格式2020-01-08，只支持查询2016-10-26及以后的日期 最大查询跨度1年
$id_type = AUDIENCE_STAT_ID_TYPE_ADVERTISER; // string | 查询ID类型，可选值： AUDIENCE_STAT_ID_TYPE_ADVERTISER 按广告主查询、AUDIENCE_STAT_ID_TYPE_CAMPAIGN 按广告组查询、AUDIENCE_STAT_ID_TYPE_AD 按广告计划查询
$metrics = ["cost","show","click","convert"]; // string | 查询指标列表，详见此文档下方【查询指标】 允许值：cost，show，click，convert
$ids = [123]; // string | 查询ID列表，长度1-100 id_type为AUDIENCE_STAT_ID_TYPE_ADVERTISER时，选填；其他类型，必填
$access_token = {{access_token}}; // string | 
$x_debug_mode = 56; // int | 

try {
    $result = $apiInstance->call2ReportAudienceProvinceGet($advertiser_id, $start_date, $end_date, $id_type, $metrics, $ids, $access_token, $x_debug_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->call2ReportAudienceProvinceGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **string**| 广告主ID |
 **start_date** | **string**| 起始日期，从0时起，格式2020-01-01，只支持查询2016-10-26及以后的日期 |
 **end_date** | **string**| 结束日期，至0时止，格式2020-01-08，只支持查询2016-10-26及以后的日期 最大查询跨度1年 |
 **id_type** | **string**| 查询ID类型，可选值： AUDIENCE_STAT_ID_TYPE_ADVERTISER 按广告主查询、AUDIENCE_STAT_ID_TYPE_CAMPAIGN 按广告组查询、AUDIENCE_STAT_ID_TYPE_AD 按广告计划查询 |
 **metrics** | **string**| 查询指标列表，详见此文档下方【查询指标】 允许值：cost，show，click，convert |
 **ids** | **string**| 查询ID列表，长度1-100 id_type为AUDIENCE_STAT_ID_TYPE_ADVERTISER时，选填；其他类型，必填 | [optional]
 **access_token** | **string**|  | [optional]
 **x_debug_mode** | **int**|  | [optional]

### Return type

[**\Oceanengine\Open\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **call2ReportCampaignGetGet**
> \Oceanengine\Open\Model\InlineResponse2007 call2ReportCampaignGetGet($advertiser_id, $start_date, $end_date, $fields, $group_by, $time_granularity, $filtering, $order_field, $order_type, $page, $page_size, $access_token, $x_debug_mode)

广告组数据

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Oceanengine\Open\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$advertiser_id = 1; // string | 广告主ID
$start_date = 2023-02-01; // string | 起始日期,格式YYYY-MM-DD,只支持查询2016-10-26及以后的日期
$end_date = 2023-02-10; // string | 结束日期,格式YYYY-MM-DD,只支持查询2016-10-26及以后的日期,时间跨度不能超过30天
$fields = ["cost","convert_rate","show","avg_show_cost","click"]; // string | 指定需要的指标名称，可参考应答参数返回的消耗指标字段 默认值：cost、show、avg_show_cost、click、ctr、avg_click_cost、convert、convert_rate、convert_cost
$group_by = ["STAT_GROUP_BY_FIELD_STAT_TIME"]; // string | 分组条件 默认为STAT_GROUP_BY_FIELD_STAT_TIME，支持多种分组条件，具体详见【分组组合规则】
$time_granularity = STAT_TIME_GRANULARITY_DAILY; // string | 时间粒度 默认值: STAT_TIME_GRANULARITY_DAILY 允许值:STAT_TIME_GRANULARITY_DAILY (按天维度),STAT_TIME_GRANULARITY_HOURLY (按小时维度)
$filtering = {"campaign_ids":[123],"campaign_name":"广告组名称","landing_types":["LINK","APP","DPA","GOODS","STORE","SHOP","AWEME"],"status":"CAMPAIGN_STATUS_NOT_DELETE","delivery_mode":"STANDARD"}; // string | 过滤字段，json格式，支持字段如下 campaign_ids:广告组id列表：按照campaign_id过滤，最多支持100个 campaign_name:广告组名称：按照campaign_name过滤，字符串长度限制1-30 landing_types:推广目的列表：按照广告组推广目的过滤,详见【附录-推广目的类型】允许值:\"LINK\",\"APP\",\"DPA\",\"GOODS\",\"STORE\",\"SHOP\",\"AWEME\" status:广告组状态：按照广告组状态过滤，默认为返回“所有不包含已删除”，如果要返回所有包含已删除有对应枚举表示，详见【附录-广告组状态】 delivery_mode:投放模式筛选。允许值:STANDARD:标准投放。ADLAB_FREE:管家&省心投放
$order_field = convert_rate; // string | 排序字段，所有的统计指标均可参与排序
$order_type = DESC; // string | 排序方式；默认值: DESC；允许值: ASC, DESC
$page = 1; // float | 页码 默认值: 1
$page_size = 20; // float | 页面大小，即每页展示的数据量 默认值: 20 取值范围: 1-1000
$access_token = {{access_token}}; // string | 
$x_debug_mode = 56; // int | 

try {
    $result = $apiInstance->call2ReportCampaignGetGet($advertiser_id, $start_date, $end_date, $fields, $group_by, $time_granularity, $filtering, $order_field, $order_type, $page, $page_size, $access_token, $x_debug_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->call2ReportCampaignGetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **string**| 广告主ID |
 **start_date** | **string**| 起始日期,格式YYYY-MM-DD,只支持查询2016-10-26及以后的日期 |
 **end_date** | **string**| 结束日期,格式YYYY-MM-DD,只支持查询2016-10-26及以后的日期,时间跨度不能超过30天 |
 **fields** | **string**| 指定需要的指标名称，可参考应答参数返回的消耗指标字段 默认值：cost、show、avg_show_cost、click、ctr、avg_click_cost、convert、convert_rate、convert_cost | [optional]
 **group_by** | **string**| 分组条件 默认为STAT_GROUP_BY_FIELD_STAT_TIME，支持多种分组条件，具体详见【分组组合规则】 | [optional]
 **time_granularity** | **string**| 时间粒度 默认值: STAT_TIME_GRANULARITY_DAILY 允许值:STAT_TIME_GRANULARITY_DAILY (按天维度),STAT_TIME_GRANULARITY_HOURLY (按小时维度) | [optional]
 **filtering** | **string**| 过滤字段，json格式，支持字段如下 campaign_ids:广告组id列表：按照campaign_id过滤，最多支持100个 campaign_name:广告组名称：按照campaign_name过滤，字符串长度限制1-30 landing_types:推广目的列表：按照广告组推广目的过滤,详见【附录-推广目的类型】允许值:\&quot;LINK\&quot;,\&quot;APP\&quot;,\&quot;DPA\&quot;,\&quot;GOODS\&quot;,\&quot;STORE\&quot;,\&quot;SHOP\&quot;,\&quot;AWEME\&quot; status:广告组状态：按照广告组状态过滤，默认为返回“所有不包含已删除”，如果要返回所有包含已删除有对应枚举表示，详见【附录-广告组状态】 delivery_mode:投放模式筛选。允许值:STANDARD:标准投放。ADLAB_FREE:管家&amp;省心投放 | [optional]
 **order_field** | **string**| 排序字段，所有的统计指标均可参与排序 | [optional]
 **order_type** | **string**| 排序方式；默认值: DESC；允许值: ASC, DESC | [optional]
 **page** | **float**| 页码 默认值: 1 | [optional]
 **page_size** | **float**| 页面大小，即每页展示的数据量 默认值: 20 取值范围: 1-1000 | [optional]
 **access_token** | **string**|  | [optional]
 **x_debug_mode** | **int**|  | [optional]

### Return type

[**\Oceanengine\Open\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **call2ReportCreativeGetGet**
> \Oceanengine\Open\Model\InlineResponse2009 call2ReportCreativeGetGet($advertiser_id, $start_date, $end_date, $fields, $group_by, $time_granularity, $filtering, $order_field, $order_type, $page, $page_size, $access_token, $x_debug_mode)

广告创意数据

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Oceanengine\Open\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$advertiser_id = 1; // string | 广告主ID
$start_date = 2023-02-01; // string | 起始日期,格式YYYY-MM-DD,只支持查询2016-10-26及以后的日期
$end_date = 2023-02-10; // string | 结束日期,格式YYYY-MM-DD,只支持查询2016-10-26及以后的日期,时间跨度不能超过30天
$fields = ["cost","convert_rate","show","avg_show_cost","click"]; // string | 指定需要的指标名称，可参考应答参数返回的消耗指标字段 默认值：cost、show、avg_show_cost、click、ctr、avg_click_cost、convert、convert_rate、convert_cost
$group_by = ["STAT_GROUP_BY_FIELD_STAT_TIME"]; // string | 分组条件 默认为STAT_GROUP_BY_FIELD_STAT_TIME，支持多种分组条件，具体详见【分组组合规则】
$time_granularity = STAT_TIME_GRANULARITY_DAILY; // string | 时间粒度 默认值: STAT_TIME_GRANULARITY_DAILY 允许值:STAT_TIME_GRANULARITY_DAILY (按天维度),STAT_TIME_GRANULARITY_HOURLY (按小时维度)
$filtering = {"campaign_ids":[123],"creative_ids":[123],"inventory_types":["INVENTORY_FEED","INVENTORY_TEXT_LINK"],"ad_ids":[123],"pricings":["PRICING_CPC"],"image_modes":["CREATIVE_IMAGE_MODE_SMALL","CREATIVE_IMAGE_MODE_LARGE"],"creative_material_modes":["INTERVENE","STATIC_ASSEMBLE"],"landing_types":["LINK","APP","DPA","GOODS","STORE","SHOP","AWEME"],"status":"CREATIVE_STATUS_DELIVERY_OK","delivery_mode":"STANDARD"}; // string | 过滤字段，json格式，支持字段如下 campaign_ids:广告组id列表：按照campaign_id过滤，最多支持100个 ad_ids:广告计划id列表：按照 ad_id 过滤，最多支持100个 creative_ids:广告创意id列表：按照 creative_id 过滤，最多支持100个 inventory_types:广告位置列表：按照广告位置过滤，详见【附录-首选投放位置】 pricings:出价方式列表：按照出价方式过滤，详见【附录-计划出价类型】 image_modes:素材类型列表：按照类型过滤，详见【附录-素材类型】 creative_material_modes:创意类型列表：按照创意类型过滤，STATIC_ASSEMBLE 表示程序化创意，INTERVENE表示自定义创意。 landing_types:推广目的列表：按照广告组推广目的过滤,详见【附录-推广目的类型】允许值:\"LINK\",\"APP\",\"DPA\",\"GOODS\",\"STORE\",\"SHOP\",\"AWEME\" status:广告创意状态：按照广告创意状态过滤，详见【附录-创意状态】 delivery_mode:投放模式筛选。允许值:STANDARD:标准投放。ADLAB_FREE:管家&省心投放
$order_field = convert_rate; // string | 排序字段，所有的统计指标均可参与排序
$order_type = DESC; // string | 排序方式；默认值: DESC；允许值: ASC, DESC
$page = 1; // float | 页码 默认值: 1
$page_size = 20; // float | 页面大小，即每页展示的数据量 默认值: 20 取值范围: 1-1000
$access_token = {{access_token}}; // string | 
$x_debug_mode = 56; // int | 

try {
    $result = $apiInstance->call2ReportCreativeGetGet($advertiser_id, $start_date, $end_date, $fields, $group_by, $time_granularity, $filtering, $order_field, $order_type, $page, $page_size, $access_token, $x_debug_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->call2ReportCreativeGetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **string**| 广告主ID |
 **start_date** | **string**| 起始日期,格式YYYY-MM-DD,只支持查询2016-10-26及以后的日期 |
 **end_date** | **string**| 结束日期,格式YYYY-MM-DD,只支持查询2016-10-26及以后的日期,时间跨度不能超过30天 |
 **fields** | **string**| 指定需要的指标名称，可参考应答参数返回的消耗指标字段 默认值：cost、show、avg_show_cost、click、ctr、avg_click_cost、convert、convert_rate、convert_cost | [optional]
 **group_by** | **string**| 分组条件 默认为STAT_GROUP_BY_FIELD_STAT_TIME，支持多种分组条件，具体详见【分组组合规则】 | [optional]
 **time_granularity** | **string**| 时间粒度 默认值: STAT_TIME_GRANULARITY_DAILY 允许值:STAT_TIME_GRANULARITY_DAILY (按天维度),STAT_TIME_GRANULARITY_HOURLY (按小时维度) | [optional]
 **filtering** | **string**| 过滤字段，json格式，支持字段如下 campaign_ids:广告组id列表：按照campaign_id过滤，最多支持100个 ad_ids:广告计划id列表：按照 ad_id 过滤，最多支持100个 creative_ids:广告创意id列表：按照 creative_id 过滤，最多支持100个 inventory_types:广告位置列表：按照广告位置过滤，详见【附录-首选投放位置】 pricings:出价方式列表：按照出价方式过滤，详见【附录-计划出价类型】 image_modes:素材类型列表：按照类型过滤，详见【附录-素材类型】 creative_material_modes:创意类型列表：按照创意类型过滤，STATIC_ASSEMBLE 表示程序化创意，INTERVENE表示自定义创意。 landing_types:推广目的列表：按照广告组推广目的过滤,详见【附录-推广目的类型】允许值:\&quot;LINK\&quot;,\&quot;APP\&quot;,\&quot;DPA\&quot;,\&quot;GOODS\&quot;,\&quot;STORE\&quot;,\&quot;SHOP\&quot;,\&quot;AWEME\&quot; status:广告创意状态：按照广告创意状态过滤，详见【附录-创意状态】 delivery_mode:投放模式筛选。允许值:STANDARD:标准投放。ADLAB_FREE:管家&amp;省心投放 | [optional]
 **order_field** | **string**| 排序字段，所有的统计指标均可参与排序 | [optional]
 **order_type** | **string**| 排序方式；默认值: DESC；允许值: ASC, DESC | [optional]
 **page** | **float**| 页码 默认值: 1 | [optional]
 **page_size** | **float**| 页面大小，即每页展示的数据量 默认值: 20 取值范围: 1-1000 | [optional]
 **access_token** | **string**|  | [optional]
 **x_debug_mode** | **int**|  | [optional]

### Return type

[**\Oceanengine\Open\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **call2ReportSitePageGet**
> \Oceanengine\Open\Model\InlineResponse20015 call2ReportSitePageGet($advertiser_id, $site_id, $time_duration, $inventory_type, $access_token, $x_debug_mode)

橙子建站落地页数据

获取橙子建站和程序化落地页的数据。不包含第三方落地页。落地页数据以当日前两天的方式返回，如：当3号入参查询周期1天，返回1号数据

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Oceanengine\Open\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$advertiser_id = 1; // string | 广告主ID
$site_id = 123; // string | 站点ID
$time_duration = WEEK; // string | 查询时间周期。DAY:1天。THREE_DAY: 3天。WEEK:7天。MONTH:30天。
$inventory_type = 'inventory_type_example'; // string | 首选投放位置。不传默认查全部。WATERMELON:西瓜。HOTSOON:火山。AWEME:抖音。TOUTIAO: 头条。UNION_SLOT:穿山甲。
$access_token = {{access_token}}; // string | 
$x_debug_mode = 56; // int | 

try {
    $result = $apiInstance->call2ReportSitePageGet($advertiser_id, $site_id, $time_duration, $inventory_type, $access_token, $x_debug_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->call2ReportSitePageGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **string**| 广告主ID |
 **site_id** | **string**| 站点ID |
 **time_duration** | **string**| 查询时间周期。DAY:1天。THREE_DAY: 3天。WEEK:7天。MONTH:30天。 |
 **inventory_type** | **string**| 首选投放位置。不传默认查全部。WATERMELON:西瓜。HOTSOON:火山。AWEME:抖音。TOUTIAO: 头条。UNION_SLOT:穿山甲。 | [optional]
 **access_token** | **string**|  | [optional]
 **x_debug_mode** | **int**|  | [optional]

### Return type

[**\Oceanengine\Open\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v30ReportCustomGetGet**
> \Oceanengine\Open\Model\InlineResponse20016 v30ReportCustomGetGet($advertiser_id, $dimensions, $metrics, $filters, $start_time, $end_time, $order_by, $page, $page_size, $data_topic, $access_token)

自定义报表

自定义报表是基于巨量引擎体验版对于数据报表提供新的接口能力，用户可以自由选择和组合指标和维度，以此定义数据报表的字段。 相关指标和维度可通过获取自定义报表可用维度和指标接口获取不同数据主题下的可用维度和指标。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Oceanengine\Open\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$advertiser_id = 1; // string | 广告主id
$dimensions = ["ABC"]; // string | 维度列表。 获取方式： 1.巨量引擎体验版—>报表—>新建/编辑自定义报表—>API参数生成。该字段从前端自定义报表中获取，建议不要修改。 2.可通过【获取自定义报表可用维度和指标】接口获取不同数据主题下的可用维度和指标
$metrics = ["ABC"]; // string | 指标列表 。 获取方式： 1.巨量引擎体验版—>报表—>新建/编辑自定义报表—>API参数生成。该字段从前端自定义报表中获取，建议不要修改。 2.可通过【获取自定义报表可用维度和指标】接口获取不同数据主题下的可用维度和指标
$filters = [{"field":"abc", "type":123,"operator":1,"values":"abc"}]; // string | 过滤条件。 获取方式： 1.巨量引擎体验版—>报表—>新建/编辑自定义报表—>API参数生成。该字段从前端自定义报表中获取，建议不要修改。 2.可通过【获取自定义报表可用维度和指标】接口获取不同数据主题下的可用维度和指标 字段： field：条件必填，过滤的消耗指标字段 type：条件必填，字段类型。允许值：1 -固定枚举值，2 - 固定输入值，3 -数类型 operator：条件必填，处理方式。 允许值：1 -等于，2 -小于，3 -小于等于，4 -大于，5 -大于等于，6 -不等于，7-包含，8 -不包含，9 -范围查询，10 -多个值匹配包含，11 -多个值匹配都要包含 values：条件必填，过滤字段具体值
$start_time = 2023-02-01; // string | 开始时间。格式为：yyyy-MM-dd。例如2022-08-01
$end_time = 2023-02-10; // string | 结束时间。格式为：yyyy-MM-dd。例如2022-08-01（默认为当天23:59:59）
$order_by = [{"field":"ABC","type":"DESC"}]; // string | 排序 field:排序字段。字段必须在选中的metrics或dimensions中。其中metrics所有字段支持排序。dimensions是否排序请参考维度、指标说明。 type:排序类型 可选值:ASC: 升序DESC: 降序
$page = 1; // string | 
$page_size = 10; // string | 页面大小。默认为10，最大100
$data_topic = BASIC_DATA; // string | 数据主题，默认值：BASIC_DATA广告基础数据，枚举值：BASIC_DATA广告基础数据、QUERY_DATA搜索词数据、BIDWORD_DATA关键词数据、MATERIAL_DATA素材数据，注：从巨量引擎体验版平台获取到API参数生成后需在请求参数中手动添加对应的数据主题，否则将无法正确获取数据
$access_token = {{access_token}}; // string | 

try {
    $result = $apiInstance->v30ReportCustomGetGet($advertiser_id, $dimensions, $metrics, $filters, $start_time, $end_time, $order_by, $page, $page_size, $data_topic, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->v30ReportCustomGetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **string**| 广告主id |
 **dimensions** | **string**| 维度列表。 获取方式： 1.巨量引擎体验版—&gt;报表—&gt;新建/编辑自定义报表—&gt;API参数生成。该字段从前端自定义报表中获取，建议不要修改。 2.可通过【获取自定义报表可用维度和指标】接口获取不同数据主题下的可用维度和指标 |
 **metrics** | **string**| 指标列表 。 获取方式： 1.巨量引擎体验版—&gt;报表—&gt;新建/编辑自定义报表—&gt;API参数生成。该字段从前端自定义报表中获取，建议不要修改。 2.可通过【获取自定义报表可用维度和指标】接口获取不同数据主题下的可用维度和指标 |
 **filters** | **string**| 过滤条件。 获取方式： 1.巨量引擎体验版—&gt;报表—&gt;新建/编辑自定义报表—&gt;API参数生成。该字段从前端自定义报表中获取，建议不要修改。 2.可通过【获取自定义报表可用维度和指标】接口获取不同数据主题下的可用维度和指标 字段： field：条件必填，过滤的消耗指标字段 type：条件必填，字段类型。允许值：1 -固定枚举值，2 - 固定输入值，3 -数类型 operator：条件必填，处理方式。 允许值：1 -等于，2 -小于，3 -小于等于，4 -大于，5 -大于等于，6 -不等于，7-包含，8 -不包含，9 -范围查询，10 -多个值匹配包含，11 -多个值匹配都要包含 values：条件必填，过滤字段具体值 |
 **start_time** | **string**| 开始时间。格式为：yyyy-MM-dd。例如2022-08-01 |
 **end_time** | **string**| 结束时间。格式为：yyyy-MM-dd。例如2022-08-01（默认为当天23:59:59） |
 **order_by** | **string**| 排序 field:排序字段。字段必须在选中的metrics或dimensions中。其中metrics所有字段支持排序。dimensions是否排序请参考维度、指标说明。 type:排序类型 可选值:ASC: 升序DESC: 降序 |
 **page** | **string**|  | [optional]
 **page_size** | **string**| 页面大小。默认为10，最大100 | [optional]
 **data_topic** | **string**| 数据主题，默认值：BASIC_DATA广告基础数据，枚举值：BASIC_DATA广告基础数据、QUERY_DATA搜索词数据、BIDWORD_DATA关键词数据、MATERIAL_DATA素材数据，注：从巨量引擎体验版平台获取到API参数生成后需在请求参数中手动添加对应的数据主题，否则将无法正确获取数据 | [optional]
 **access_token** | **string**|  | [optional]

### Return type

[**\Oceanengine\Open\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

