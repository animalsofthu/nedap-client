# Swagger\Client\SortingApi

All URIs are relative to *https://api.nedap-bi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sortingDeliverySummaries**](SortingApi.md#sortingDeliverySummaries) | **GET** /v1/sorting/delivery_summaries | sorting delivery summaries
[**sortingLocationSummaries**](SortingApi.md#sortingLocationSummaries) | **GET** /v1/sorting/location/location_summaries | sorting location summaries


# **sortingDeliverySummaries**
> \Swagger\Client\Model\SortingDeliverySummary sortingDeliverySummaries($location_uuid, $start_date, $end_date)

sorting delivery summaries

This method lists sorting deliveries for locations This list contains deliveries from the start datetime (inclusive) up to the end datetime (exclusive). Set the location parameter to get deliveries for a specific location  If the end datetime is not specified the current datetime will be used. If the start datetime is not specified the start datetime will be the end datetime - 10 days.  Note:   1. The maximum period to request data of is 1 year.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SortingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$location_uuid = "location_uuid_example"; // string | The location uuid
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | start datetime (inclusive). Example: 2020-07-15T08:07:19Z
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | end datetime (exclusive). Example: 2020-07-15T08:07:19Z

try {
    $result = $apiInstance->sortingDeliverySummaries($location_uuid, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SortingApi->sortingDeliverySummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_uuid** | **string**| The location uuid | [optional]
 **start_date** | **\DateTime**| start datetime (inclusive). Example: 2020-07-15T08:07:19Z | [optional]
 **end_date** | **\DateTime**| end datetime (exclusive). Example: 2020-07-15T08:07:19Z | [optional]

### Return type

[**\Swagger\Client\Model\SortingDeliverySummary**](../Model/SortingDeliverySummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sortingLocationSummaries**
> \Swagger\Client\Model\SortingLocationSummary sortingLocationSummaries($location_uuid, $start_date, $end_date)

sorting location summaries

This method lists sorting day summaries for a location This list contains location summaries from the start datetime (inclusive) up to the end datetime (exclusive).    If the end datetime is not specified the current datetime will be used. If the start datetime is not specified the start datetime will be the end datetime - 10 days.    Note:   1. The maximum period to request data of is 1 year.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SortingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$location_uuid = "location_uuid_example"; // string | The location uuid
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | start datetime (inclusive). Example: 2020-07-15T08:07:19Z
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | end datetime (exclusive). Example: 2020-07-15T08:07:19Z

try {
    $result = $apiInstance->sortingLocationSummaries($location_uuid, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SortingApi->sortingLocationSummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_uuid** | **string**| The location uuid |
 **start_date** | **\DateTime**| start datetime (inclusive). Example: 2020-07-15T08:07:19Z | [optional]
 **end_date** | **\DateTime**| end datetime (exclusive). Example: 2020-07-15T08:07:19Z | [optional]

### Return type

[**\Swagger\Client\Model\SortingLocationSummary**](../Model/SortingLocationSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

