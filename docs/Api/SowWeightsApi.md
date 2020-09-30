# Swagger\Client\SowWeightsApi

All URIs are relative to *https://api.nedap-bi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**animalWeekSummaries**](SowWeightsApi.md#animalWeekSummaries) | **GET** /v1/weights/sows/animal/week_summaries | week summaries of an animal
[**locationWeekSummaries**](SowWeightsApi.md#locationWeekSummaries) | **GET** /v1/weights/sows/location/week_summaries | week summaries for all animals on a location


# **animalWeekSummaries**
> \Swagger\Client\Model\AnimalWeekSummary animalWeekSummaries($animal_uuid, $start_date, $end_date)

week summaries of an animal

This method lists the animal week weights.  If the end datetime is not specified the current datetime will be used. If the start datetime is not specified the start datetime will be the end datetime - 7 days.  Note:   1. The maximum period to request data is 1 year per API call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SowWeightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$animal_uuid = "animal_uuid_example"; // string | Animal UUID
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | start datetime (inclusive). Example: 2020-07-15T08:07:19Z
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | end datetime (exclusive). Example: 2020-07-15T08:07:19Z

try {
    $result = $apiInstance->animalWeekSummaries($animal_uuid, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SowWeightsApi->animalWeekSummaries: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\AnimalWeekSummary**](../Model/AnimalWeekSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **locationWeekSummaries**
> \Swagger\Client\Model\LocationWeekSummary locationWeekSummaries($location_uuid, $start_date, $end_date)

week summaries for all animals on a location

This method lists the week weights for all animals on a location.  If the end datetime is not specified the current datetime will be used. If the start datetime is not specified the start datetime will be the end datetime - 7 days.  Note:   1. The maximum period to request data is 1 month per API call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SowWeightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$location_uuid = "location_uuid_example"; // string | Location UUID
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | start datetime (inclusive). Example: 2020-07-15T08:07:19Z
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | end datetime (exclusive). Example: 2020-07-15T08:07:19Z

try {
    $result = $apiInstance->locationWeekSummaries($location_uuid, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SowWeightsApi->locationWeekSummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_uuid** | **string**| Location UUID |
 **start_date** | **\DateTime**| start datetime (inclusive). Example: 2020-07-15T08:07:19Z | [optional]
 **end_date** | **\DateTime**| end datetime (exclusive). Example: 2020-07-15T08:07:19Z | [optional]

### Return type

[**\Swagger\Client\Model\LocationWeekSummary**](../Model/LocationWeekSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

