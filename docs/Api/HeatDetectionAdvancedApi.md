# Swagger\Client\HeatDetectionAdvancedApi

All URIs are relative to *https://api.nedap-bi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activityDaySummaries**](HeatDetectionAdvancedApi.md#activityDaySummaries) | **GET** /v1/heat_detection/activity/animal/day_summaries | Get activity day summaries of an animal
[**activityTwoHourData**](HeatDetectionAdvancedApi.md#activityTwoHourData) | **GET** /v1/heat_detection/activity/animal/two_hour_data | Get two hour activities of an animal


# **activityDaySummaries**
> \Swagger\Client\Model\HeatDetectionSummary activityDaySummaries($animal_id, $start_date, $end_date, $label_type)

Get activity day summaries of an animal

The heat behaviour of a cow is summarized per day. With these summaries you get detailed insights in the long-term heat behaviour of an individual animal. It shows on which historical days an animal has shown heats before, and how strong the heats were (expressed by the number of increased activity periods).  If end_date is not specified, the current datetime will be used. If start_date is not specified the start datetime will be the end_date – 10 days. The maximum period to request data of is 1 year.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HeatDetectionAdvancedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$animal_id = 56; // int | The ID of the animal
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | start datetime (inclusive). Example: 2020-07-13T22:00:00Z
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | end datetime (exclusive). Example: 2020-07-14T22:00:00Z
$label_type = 56; // int | The label type; 0: Unknown, 1: Intime, 2: Realtime Leg, 3: Realtime Neck

try {
    $result = $apiInstance->activityDaySummaries($animal_id, $start_date, $end_date, $label_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeatDetectionAdvancedApi->activityDaySummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **animal_id** | **int**| The ID of the animal |
 **start_date** | **\DateTime**| start datetime (inclusive). Example: 2020-07-13T22:00:00Z | [optional]
 **end_date** | **\DateTime**| end datetime (exclusive). Example: 2020-07-14T22:00:00Z | [optional]
 **label_type** | **int**| The label type; 0: Unknown, 1: Intime, 2: Realtime Leg, 3: Realtime Neck | [optional]

### Return type

[**\Swagger\Client\Model\HeatDetectionSummary**](../Model/HeatDetectionSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activityTwoHourData**
> \Swagger\Client\Model\ActivityData activityTwoHourData($animal_id, $start_date, $end_date, $label_type)

Get two hour activities of an animal

The heat attentions are generated from the measured activity of an animal. It is compared to its activity during the same period in the past 10 days resulting in a x-factor, a deviated activity indicator. If the number of consecutive periods exceed a specific threshold a heat attention is generated. This endpoint gives access to the two hour activities and corresponding x-factors.  If end_date is not specified, the current datetime will be used. If start_date is not specified the start datetime will be the end_date – 10 days. The maximum period to request data of is 1 month.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HeatDetectionAdvancedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$animal_id = 56; // int | The id of the animal this activity belongs to
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | start datetime (inclusive). Example: 2020-07-15T08:07:19Z
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | end datetime (exclusive). Example: 2020-07-15T08:07:19Z
$label_type = 56; // int | The label type; 0: Unknown, 1: Intime, 2: Realtime Leg, 3: Realtime Neck

try {
    $result = $apiInstance->activityTwoHourData($animal_id, $start_date, $end_date, $label_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeatDetectionAdvancedApi->activityTwoHourData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **animal_id** | **int**| The id of the animal this activity belongs to |
 **start_date** | **\DateTime**| start datetime (inclusive). Example: 2020-07-15T08:07:19Z | [optional]
 **end_date** | **\DateTime**| end datetime (exclusive). Example: 2020-07-15T08:07:19Z | [optional]
 **label_type** | **int**| The label type; 0: Unknown, 1: Intime, 2: Realtime Leg, 3: Realtime Neck | [optional]

### Return type

[**\Swagger\Client\Model\ActivityData**](../Model/ActivityData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

