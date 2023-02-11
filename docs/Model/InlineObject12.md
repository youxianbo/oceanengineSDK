# InlineObject12

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**advertiser_id** | **string** | 广告主id | 
**start_time** | **string** | 报表开始时间，格式为yyyy-mm-dd，仅支持查询2020年11月1日之后的数据 | 
**end_time** | **string** | 报表结束时间，格式为yyyy-mm-dd，最大时间范围365天 | 
**last_start_time** | **string** | 环比周期开始时间，格式为yyyy-mm-dd | [optional] 
**last_end_time** | **string** | 环比周期结束时间，格式为yyyy-mm-dd | [optional] 
**fields** | **string** | 指标字段， 默认传入指标：business_page_home_visited、business_page_new_fans_num、business_page_like、business_page_total_play，若需自定义，请点击查看各维度下支持查询的指标，否则会报错 | [optional] 
**ratio_fields** | **string** | 需要环比指标字段 | [optional] 
**time_dimension** | **string** | 是否需要分天数据，默认值SUM 允许值：SUM 合计数据、DAILY 分天数据 | [optional] 
**order_field** | **string** | 排序指标字段，不传默认为空 | [optional] 
**order_type** | **string** | 排序类型；默认值: DESC 允许值: ASC、 DESC，未传入order_field时不生效 | [optional] 
**filter** | **string** | 筛选字段:抖音号open_id，同时支持查询企业号和普通抖音号数据 | [optional] 
**offset** | **string** | 偏移，类似于SQL中offset（起始为0，翻页时new_offset&#x3D;old_offset+limit），默认值：0，取值范围:≥ 0 | [optional] 
**limit** | **string** | 返回数据量，默认值：100，取值范围：1-100 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


