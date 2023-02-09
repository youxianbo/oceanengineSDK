# oceanengine-sdk
根据项目需求完成的接口，非所有接口都有相应的代码

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 1.0.0
- Package version: 0.0.1-beta2
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/youxianbo/oceanengineSDK.git"
    }
  ],
  "require": {
    "youxianbo/oceanengineSDK": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/oceanengine-sdk/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://ad.oceanengine.com/open_api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdvertiserApi* | [**call2AdvertiserInfoGet**](docs\Api/AdvertiserApi.md#call2advertiserinfoget) | **GET** /2/advertiser/info/ | 广告主信息
*Oauth2Api* | [**call2UserInfoGet**](docs\Api/Oauth2Api.md#call2userinfoget) | **GET** /2/user/info/ | 获取授权User信息
*Oauth2Api* | [**oauth2AccessTokenPost**](docs\Api/Oauth2Api.md#oauth2accesstokenpost) | **POST** /oauth2/access_token/ | access_token
*Oauth2Api* | [**oauth2AdvertiserGetGet**](docs\Api/Oauth2Api.md#oauth2advertisergetget) | **GET** /oauth2/advertiser/get/ | 获取已授权账户
*Oauth2Api* | [**oauth2AppAccessTokenPost**](docs\Api/Oauth2Api.md#oauth2appaccesstokenpost) | **POST** /oauth2/app_access_token/ | 获取APP Access Token
*Oauth2Api* | [**oauth2RefreshTokenPost**](docs\Api/Oauth2Api.md#oauth2refreshtokenpost) | **POST** /oauth2/refresh_token/ | 刷新Refresh Token
*ReportApi* | [**call2ReportAdGetGet**](docs\Api/ReportApi.md#call2reportadgetget) | **GET** /2/report/ad/get/ | 广告计划数据
*ReportApi* | [**call2ReportAdvertiserGetGet**](docs\Api/ReportApi.md#call2reportadvertisergetget) | **GET** /2/report/advertiser/get/ | 广告主数据
*ReportApi* | [**call2ReportAudienceAgeGet**](docs\Api/ReportApi.md#call2reportaudienceageget) | **GET** /2/report/audience/age/ | 年龄数据
*ReportApi* | [**call2ReportAudienceCityGet**](docs\Api/ReportApi.md#call2reportaudiencecityget) | **GET** /2/report/audience/city/ | 市级数据
*ReportApi* | [**call2ReportAudienceGenderGet**](docs\Api/ReportApi.md#call2reportaudiencegenderget) | **GET** /2/report/audience/gender/ | 性别数据
*ReportApi* | [**call2ReportAudienceInterestActionListGet**](docs\Api/ReportApi.md#call2reportaudienceinterestactionlistget) | **GET** /2/report/audience/interest_action/list/ | 行为兴趣数据
*ReportApi* | [**call2ReportAudienceProvinceGet**](docs\Api/ReportApi.md#call2reportaudienceprovinceget) | **GET** /2/report/audience/province/ | 省级数据
*ReportApi* | [**call2ReportCampaignGetGet**](docs\Api/ReportApi.md#call2reportcampaigngetget) | **GET** /2/report/campaign/get/ | 广告组数据
*ReportApi* | [**call2ReportCreativeGetGet**](docs\Api/ReportApi.md#call2reportcreativegetget) | **GET** /2/report/creative/get/ | 广告创意数据
*ReportApi* | [**call2ReportSitePageGet**](docs\Api/ReportApi.md#call2reportsitepageget) | **GET** /2/report/site/page/ | 橙子建站落地页数据
*ReportApi* | [**v30ReportCustomGetGet**](docs\Api/ReportApi.md#v30reportcustomgetget) | **GET** /v3.0/report/custom/get/ | 自定义报表


## Documentation For Models

 - [AccessTokenData](docs\Model/AccessTokenData.md)
 - [AdvertiserGet](docs\Model/AdvertiserGet.md)
 - [AdvertiserList](docs\Model/AdvertiserList.md)
 - [AdvertiserListCompanyList](docs\Model/AdvertiserListCompanyList.md)
 - [InlineObject](docs\Model/InlineObject.md)
 - [InlineObject1](docs\Model/InlineObject1.md)
 - [InlineObject2](docs\Model/InlineObject2.md)
 - [InlineObject3](docs\Model/InlineObject3.md)
 - [InlineObject4](docs\Model/InlineObject4.md)
 - [InlineResponse200](docs\Model/InlineResponse200.md)
 - [InlineResponse2001](docs\Model/InlineResponse2001.md)
 - [InlineResponse20010](docs\Model/InlineResponse20010.md)
 - [InlineResponse20010Data](docs\Model/InlineResponse20010Data.md)
 - [InlineResponse20010DataList](docs\Model/InlineResponse20010DataList.md)
 - [InlineResponse20010DataMetrics](docs\Model/InlineResponse20010DataMetrics.md)
 - [InlineResponse20011](docs\Model/InlineResponse20011.md)
 - [InlineResponse20011Data](docs\Model/InlineResponse20011Data.md)
 - [InlineResponse20011MetricsDict](docs\Model/InlineResponse20011MetricsDict.md)
 - [InlineResponse20012](docs\Model/InlineResponse20012.md)
 - [InlineResponse20012Data](docs\Model/InlineResponse20012Data.md)
 - [InlineResponse20013](docs\Model/InlineResponse20013.md)
 - [InlineResponse20013Data](docs\Model/InlineResponse20013Data.md)
 - [InlineResponse20014](docs\Model/InlineResponse20014.md)
 - [InlineResponse20014Data](docs\Model/InlineResponse20014Data.md)
 - [InlineResponse20015](docs\Model/InlineResponse20015.md)
 - [InlineResponse20015Data](docs\Model/InlineResponse20015Data.md)
 - [InlineResponse20015DataSiteRecord](docs\Model/InlineResponse20015DataSiteRecord.md)
 - [InlineResponse20015DataSiteRecordAVGLOADTIME](docs\Model/InlineResponse20015DataSiteRecordAVGLOADTIME.md)
 - [InlineResponse20016](docs\Model/InlineResponse20016.md)
 - [InlineResponse20016Data](docs\Model/InlineResponse20016Data.md)
 - [InlineResponse20016DataDimensions](docs\Model/InlineResponse20016DataDimensions.md)
 - [InlineResponse20016DataMetrics](docs\Model/InlineResponse20016DataMetrics.md)
 - [InlineResponse20016DataPageInfo](docs\Model/InlineResponse20016DataPageInfo.md)
 - [InlineResponse20016DataRows](docs\Model/InlineResponse20016DataRows.md)
 - [InlineResponse20016DataTotalMetrics](docs\Model/InlineResponse20016DataTotalMetrics.md)
 - [InlineResponse2001Data](docs\Model/InlineResponse2001Data.md)
 - [InlineResponse2002](docs\Model/InlineResponse2002.md)
 - [InlineResponse2002Data](docs\Model/InlineResponse2002Data.md)
 - [InlineResponse2003](docs\Model/InlineResponse2003.md)
 - [InlineResponse2003Data](docs\Model/InlineResponse2003Data.md)
 - [InlineResponse2004](docs\Model/InlineResponse2004.md)
 - [InlineResponse2004Data](docs\Model/InlineResponse2004Data.md)
 - [InlineResponse2005](docs\Model/InlineResponse2005.md)
 - [InlineResponse2005Data](docs\Model/InlineResponse2005Data.md)
 - [InlineResponse2006](docs\Model/InlineResponse2006.md)
 - [InlineResponse2006Data](docs\Model/InlineResponse2006Data.md)
 - [InlineResponse2006DataList](docs\Model/InlineResponse2006DataList.md)
 - [InlineResponse2006DataPageInfo](docs\Model/InlineResponse2006DataPageInfo.md)
 - [InlineResponse2007](docs\Model/InlineResponse2007.md)
 - [InlineResponse2007Data](docs\Model/InlineResponse2007Data.md)
 - [InlineResponse2007DataList](docs\Model/InlineResponse2007DataList.md)
 - [InlineResponse2007DataPageInfo](docs\Model/InlineResponse2007DataPageInfo.md)
 - [InlineResponse2008](docs\Model/InlineResponse2008.md)
 - [InlineResponse2009](docs\Model/InlineResponse2009.md)
 - [InlineResponse2009Data](docs\Model/InlineResponse2009Data.md)
 - [InlineResponse2009DataList](docs\Model/InlineResponse2009DataList.md)
 - [InlineResponse2009DataPageInfo](docs\Model/InlineResponse2009DataPageInfo.md)
 - [RefreshTokenData](docs\Model/RefreshTokenData.md)
 - [Result](docs\Model/Result.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author




