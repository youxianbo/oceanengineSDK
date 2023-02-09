# AdvertiserList

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**advertiser_id** | **float** |  | [optional] 
**advertiser_name** | **string** |  | 
**advertiser_role** | **float** | 旧版账号角色，1-普通广告主，2-纵横组织账户，3-一级代理商，4-二级代理商，6-星图账号 | 
**is_valid** | **bool** | 授权有效性，允许值：true/false；false表示对应的user在客户中心/一站式平台代理商平台变更了对此账号的权限,需要到对应平台进行调整过来； | 
**account_role** | **string** | 新版账号角色，见【枚举值-账户角色】 | 
**company_list** | [**\Oceanengine\Open\Model\AdvertiserListCompanyList[]**](AdvertiserListCompanyList.md) | 代理商账户下勾选账户，但授权时选择的是代理商类型账户时，该字段才有意义 company_list为空时，代表当前代理商账户下所有adv均可访问；不为空时，代表仅能访问该部分客户id下的adv | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


