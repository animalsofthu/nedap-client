# Swagger\Client\PigPerformanceTestingApi

All URIs are relative to *https://api.nedap-bi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**animalVisitsByAnimal**](PigPerformanceTestingApi.md#animalVisitsByAnimal) | **GET** /v1/pig_performance_testing/animal/animal_visits | animal visits for an animal
[**animalVisitsByLocation**](PigPerformanceTestingApi.md#animalVisitsByLocation) | **GET** /v1/pig_performance_testing/location/animal_visits | animal visits for a location


# **animalVisitsByAnimal**
> \Swagger\Client\Model\AnimalVisit animalVisitsByAnimal($animal_uuid, $start_date, $end_date)

animal visits for an animal

This method lists animal visits for an animal This list contains animal visits from the start datetime (inclusive) up to the end datetime (exclusive).  If the end datetime is not specified the current datetime will be used. If the start datetime is not specified the start datetime will be the end datetime - 10 days.  Note:   1. The maximum period to request data of is 1 year.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PigPerformanceTestingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$animal_uuid = "animal_uuid_example"; // string | Animal UUID
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | start datetime (inclusive). Example: 2020-07-15T08:07:19Z
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | end datetime (exclusive). Example: 2020-07-15T08:07:19Z

try {
    $result = $apiInstance->animalVisitsByAnimal($animal_uuid, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PigPerformanceTestingApi->animalVisitsByAnimal: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\AnimalVisit**](../Model/AnimalVisit.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **animalVisitsByLocation**
> \Swagger\Client\Model\AnimalVisit animalVisitsByLocation($location_uuid, $start_date, $end_date)

animal visits for a location

This method lists animal visits for a location This list contains animal visits from the start datetime (inclusive) up to the end datetime (exclusive).  If the end datetime is not specified the current datetime will be used. If the start datetime is not specified the start datetime will be the end datetime - 10 days.  Note:   1. The maximum period to request data of is 1 month.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PigPerformanceTestingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$location_uuid = "location_uuid_example"; // string | Location UUID
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | start datetime (inclusive). Example: 2020-07-15T08:07:19Z
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | end datetime (exclusive). Example: 2020-07-15T08:07:19Z

try {
    $result = $apiInstance->animalVisitsByLocation($location_uuid, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PigPerformanceTestingApi->animalVisitsByLocation: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\AnimalVisit**](../Model/AnimalVisit.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

