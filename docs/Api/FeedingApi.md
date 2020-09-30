# Swagger\Client\FeedingApi

All URIs are relative to *https://api.nedap-bi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**feedingAnimalSummaries**](FeedingApi.md#feedingAnimalSummaries) | **GET** /v1/feeding/animal_summaries | feeding animal summaries
[**feedingExtendedLocationSummaries**](FeedingApi.md#feedingExtendedLocationSummaries) | **GET** /v1/feeding/extended_location_summaries | feeding extended location summaries
[**feedingLocationSummaries**](FeedingApi.md#feedingLocationSummaries) | **GET** /v1/feeding/location_summaries | feeding location summaries


# **feedingAnimalSummaries**
> \Swagger\Client\Model\AnimalSummary feedingAnimalSummaries($animal_uuid, $start_date, $end_date)

feeding animal summaries

This method lists feeding animal summaries This list contains animal summaries from the start datetime (inclusive) up to the end datetime (exclusive).  If the end datetime is not specified the current datetime will be used. If the start datetime is not specified the start datetime will be the end datetime - 10 days.  Note:   1. The maximum period to request data of is 1 year.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FeedingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$animal_uuid = "animal_uuid_example"; // string | Animal UUID
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | start datetime (inclusive). Example: 2020-07-15T08:07:19Z
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | end datetime (exclusive). Example: 2020-07-15T08:07:19Z

try {
    $result = $apiInstance->feedingAnimalSummaries($animal_uuid, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedingApi->feedingAnimalSummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **animal_uuid** | **string**| Animal UUID |
 **start_date** | **\DateTime**| start datetime (inclusive). Example: 2020-07-15T08:07:19Z | [optional]
 **end_date** | **\DateTime**| end datetime (exclusive). Example: 2020-07-15T08:07:19Z | [optional]

### Return type

[**\Swagger\Client\Model\AnimalSummary**](../Model/AnimalSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **feedingExtendedLocationSummaries**
> \Swagger\Client\Model\ExtendedLocationSummary feedingExtendedLocationSummaries($location_uuid, $start_date, $end_date)

feeding extended location summaries

This method lists feeding location summaries including totals per station This list contains extended location summaries from the start datetime (inclusive) up to the end datetime (exclusive).  If the end datetime is not specified the current datetime will be used. If the start datetime is not specified the start datetime will be the end datetime - 10 days.  Note:   1. The maximum period to request data of is 1 month.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FeedingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$location_uuid = "location_uuid_example"; // string | Location UUID
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | start datetime (inclusive). Example: 2020-07-15T08:07:19Z
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | end datetime (exclusive). Example: 2020-07-15T08:07:19Z

try {
    $result = $apiInstance->feedingExtendedLocationSummaries($location_uuid, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedingApi->feedingExtendedLocationSummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_uuid** | **string**| Location UUID | [optional]
 **start_date** | **\DateTime**| start datetime (inclusive). Example: 2020-07-15T08:07:19Z | [optional]
 **end_date** | **\DateTime**| end datetime (exclusive). Example: 2020-07-15T08:07:19Z | [optional]

### Return type

[**\Swagger\Client\Model\ExtendedLocationSummary**](../Model/ExtendedLocationSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **feedingLocationSummaries**
> \Swagger\Client\Model\LocationSummary feedingLocationSummaries($location_uuid, $start_date, $end_date)

feeding location summaries

This method lists feeding location summaries This list contains location summaries from the start datetime (inclusive) up to the end datetime (exclusive).  If the end datetime is not specified the current datetime will be used. If the start datetime is not specified the start datetime will be the end datetime - 10 days.  Note:   1. The maximum period to request data of is 1 month.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FeedingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$location_uuid = "location_uuid_example"; // string | Location UUID
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | start datetime (inclusive). Example: 2020-07-15T08:07:19Z
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | end datetime (exclusive). Example: 2020-07-15T08:07:19Z

try {
    $result = $apiInstance->feedingLocationSummaries($location_uuid, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedingApi->feedingLocationSummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_uuid** | **string**| Location UUID | [optional]
 **start_date** | **\DateTime**| start datetime (inclusive). Example: 2020-07-15T08:07:19Z | [optional]
 **end_date** | **\DateTime**| end datetime (exclusive). Example: 2020-07-15T08:07:19Z | [optional]

### Return type

[**\Swagger\Client\Model\LocationSummary**](../Model/LocationSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

