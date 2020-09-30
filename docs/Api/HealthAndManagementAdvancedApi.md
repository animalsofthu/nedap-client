# Swagger\Client\HealthAndManagementAdvancedApi

All URIs are relative to *https://api.nedap-bi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**animalEatingDaySummaries**](HealthAndManagementAdvancedApi.md#animalEatingDaySummaries) | **GET** /v1/behaviour/eating/animal/day_summaries | eating day summaries of an animal
[**animalInactiveDaySummaries**](HealthAndManagementAdvancedApi.md#animalInactiveDaySummaries) | **GET** /v1/behaviour/inactive/animal/day_summaries | inactive day summaries of an animal
[**animalLyingDaySummaries**](HealthAndManagementAdvancedApi.md#animalLyingDaySummaries) | **GET** /v1/behaviour/lying/animal/day_summaries | lying day summaries of an animal
[**animalRuminationDaySummaries**](HealthAndManagementAdvancedApi.md#animalRuminationDaySummaries) | **GET** /v1/behaviour/rumination/animal/day_summaries | rumination day summaries of an animal
[**animalStandingDaySummaries**](HealthAndManagementAdvancedApi.md#animalStandingDaySummaries) | **GET** /v1/behaviour/standing/animal/day_summaries | standing day summaries of an animal
[**animalStandupsDaySummaries**](HealthAndManagementAdvancedApi.md#animalStandupsDaySummaries) | **GET** /v1/behaviour/standups/animal/day_summaries | standups day summaries of an animal
[**animalStepsDaySummaries**](HealthAndManagementAdvancedApi.md#animalStepsDaySummaries) | **GET** /v1/behaviour/steps/animal/day_summaries | step day summaries of an animal
[**animalWalkingDaySummaries**](HealthAndManagementAdvancedApi.md#animalWalkingDaySummaries) | **GET** /v1/behaviour/walking/animal/day_summaries | walking day summaries of an animal
[**groupActivityDaySummaries**](HealthAndManagementAdvancedApi.md#groupActivityDaySummaries) | **GET** /v1/behaviour/steps/group/day_summaries | step day summaries of an animal group
[**groupEatingDaySummaries**](HealthAndManagementAdvancedApi.md#groupEatingDaySummaries) | **GET** /v1/behaviour/eating/group/day_summaries | eating day summaries of an animal group
[**groupInactiveDaySummaries**](HealthAndManagementAdvancedApi.md#groupInactiveDaySummaries) | **GET** /v1/behaviour/inactive/group/day_summaries | inactive day summaries of an animal group
[**groupLyingDaySummaries**](HealthAndManagementAdvancedApi.md#groupLyingDaySummaries) | **GET** /v1/behaviour/lying/group/day_summaries | lying day summaries of an animal group
[**groupRuminationDaySummaries**](HealthAndManagementAdvancedApi.md#groupRuminationDaySummaries) | **GET** /v1/behaviour/rumination/group/day_summaries | rumination day summaries of an animal group
[**groupStandingDaySummaries**](HealthAndManagementAdvancedApi.md#groupStandingDaySummaries) | **GET** /v1/behaviour/standing/group/day_summaries | standing day summaries of an animal group
[**groupStandupsDaySummaries**](HealthAndManagementAdvancedApi.md#groupStandupsDaySummaries) | **GET** /v1/behaviour/standups/group/day_summaries | standups day summaries of an animal group
[**groupWalkingDaySummaries**](HealthAndManagementAdvancedApi.md#groupWalkingDaySummaries) | **GET** /v1/behaviour/walking/group/day_summaries | walking day summaries of an animal group


# **animalEatingDaySummaries**
> \Swagger\Client\Model\EatingSummary animalEatingDaySummaries($animal_id, $start_date, $end_date)

eating day summaries of an animal

This method lists all eating day summaries of an animal from the start datetime (inclusive) up to the end datetime (exclusive)  If the end datetime is not specified the current datetime will be used. If the start datetime is not specified the start datetime will be the end datetime - 10 days.  Note:   1. The maximum period to request data of is 1 year.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HealthAndManagementAdvancedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$animal_id = 56; // int | The id of the animal this eating summary belongs to
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | start datetime (inclusive). Example: 2020-07-15T08:07:19Z
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | end datetime (exclusive). Example: 2020-07-15T08:07:19Z

try {
    $result = $apiInstance->animalEatingDaySummaries($animal_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthAndManagementAdvancedApi->animalEatingDaySummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **animal_id** | **int**| The id of the animal this eating summary belongs to |
 **start_date** | **\DateTime**| start datetime (inclusive). Example: 2020-07-15T08:07:19Z | [optional]
 **end_date** | **\DateTime**| end datetime (exclusive). Example: 2020-07-15T08:07:19Z | [optional]

### Return type

[**\Swagger\Client\Model\EatingSummary**](../Model/EatingSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **animalInactiveDaySummaries**
> \Swagger\Client\Model\InactiveSummary animalInactiveDaySummaries($animal_id, $start_date, $end_date)

inactive day summaries of an animal

This method lists all inactive (not eating and not ruminating) day summaries of an animal from the start datetime (inclusive) up to the end datetime (exclusive)  If the end datetime is not specified the current datetime will be used. If the start datetime is not specified the start datetime will be the end datetime - 10 days.  Note:   1. The maximum period to request data of is 1 year.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HealthAndManagementAdvancedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$animal_id = 56; // int | The id of the animal this inactive summary belongs to
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | start datetime (inclusive). Example: 2020-07-15T08:07:19Z
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | end datetime (exclusive). Example: 2020-07-15T08:07:19Z

try {
    $result = $apiInstance->animalInactiveDaySummaries($animal_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthAndManagementAdvancedApi->animalInactiveDaySummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **animal_id** | **int**| The id of the animal this inactive summary belongs to |
 **start_date** | **\DateTime**| start datetime (inclusive). Example: 2020-07-15T08:07:19Z | [optional]
 **end_date** | **\DateTime**| end datetime (exclusive). Example: 2020-07-15T08:07:19Z | [optional]

### Return type

[**\Swagger\Client\Model\InactiveSummary**](../Model/InactiveSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **animalLyingDaySummaries**
> \Swagger\Client\Model\LyingSummary animalLyingDaySummaries($animal_id, $start_date, $end_date)

lying day summaries of an animal

This method lists day summaries concerning the lying time of an animal. This list contains day summaries from the start datetime (inclusive) up to the end datetime (exclusive).  If the end datetime is not specified the current datetime will be used. If the start datetime is not specified the start datetime will be the end datetime - 10 days.  Note:   1. The maximum period to request data of is 1 year.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HealthAndManagementAdvancedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$animal_id = 56; // int | The id of the animal this lying summary belongs to
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | start datetime (inclusive). Example: 2020-07-15T08:07:19Z
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | end datetime (exclusive). Example: 2020-07-15T08:07:19Z

try {
    $result = $apiInstance->animalLyingDaySummaries($animal_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthAndManagementAdvancedApi->animalLyingDaySummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **animal_id** | **int**| The id of the animal this lying summary belongs to |
 **start_date** | **\DateTime**| start datetime (inclusive). Example: 2020-07-15T08:07:19Z | [optional]
 **end_date** | **\DateTime**| end datetime (exclusive). Example: 2020-07-15T08:07:19Z | [optional]

### Return type

[**\Swagger\Client\Model\LyingSummary**](../Model/LyingSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **animalRuminationDaySummaries**
> \Swagger\Client\Model\RuminationSummary animalRuminationDaySummaries($animal_id, $start_date, $end_date)

rumination day summaries of an animal

This method lists all rumination day summaries of an animal from the start datetime (inclusive) up to the end datetime (exclusive)  If the end datetime is not specified the current datetime will be used. If the start datetime is not specified the start datetime will be the end datetime - 10 days.  Note:   1. The maximum period to request data of is 1 year.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HealthAndManagementAdvancedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$animal_id = 56; // int | The id of the animal this rumination summary belongs to
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | start datetime (inclusive). Example: 2020-07-15T08:07:19Z
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | end datetime (exclusive). Example: 2020-07-15T08:07:19Z

try {
    $result = $apiInstance->animalRuminationDaySummaries($animal_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthAndManagementAdvancedApi->animalRuminationDaySummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **animal_id** | **int**| The id of the animal this rumination summary belongs to |
 **start_date** | **\DateTime**| start datetime (inclusive). Example: 2020-07-15T08:07:19Z | [optional]
 **end_date** | **\DateTime**| end datetime (exclusive). Example: 2020-07-15T08:07:19Z | [optional]

### Return type

[**\Swagger\Client\Model\RuminationSummary**](../Model/RuminationSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **animalStandingDaySummaries**
> \Swagger\Client\Model\StandingSummary animalStandingDaySummaries($animal_id, $start_date, $end_date)

standing day summaries of an animal

This method lists day summaries concerning the standing time of an animal. This list contains day summaries from the start datetime (inclusive) up to the end datetime (exclusive)  If the end datetime is not specified the current datetime will be used. If the start datetime is not specified the start datetime will be the end datetime - 10 days.  Note:   1. The maximum period to request data of is 1 year.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HealthAndManagementAdvancedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$animal_id = 56; // int | The id of the animal this standing summary belongs to
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | start datetime (inclusive). Example: 2020-07-15T08:07:19Z
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | end datetime (exclusive). Example: 2020-07-15T08:07:19Z

try {
    $result = $apiInstance->animalStandingDaySummaries($animal_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthAndManagementAdvancedApi->animalStandingDaySummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **animal_id** | **int**| The id of the animal this standing summary belongs to |
 **start_date** | **\DateTime**| start datetime (inclusive). Example: 2020-07-15T08:07:19Z | [optional]
 **end_date** | **\DateTime**| end datetime (exclusive). Example: 2020-07-15T08:07:19Z | [optional]

### Return type

[**\Swagger\Client\Model\StandingSummary**](../Model/StandingSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **animalStandupsDaySummaries**
> \Swagger\Client\Model\StandupsSummary animalStandupsDaySummaries($animal_id, $start_date, $end_date)

standups day summaries of an animal

This method lists the day summaries concerning the standup count of an animal. The standup count is the number of times the animal was lying and stood up. This list contains day summaries from the start datetime (inclusive) up to the end datetime (exclusive).  If the end datetime is not specified the current datetime will be used. If the start datetime is not specified the start datetime will be the end datetime - 10 days.  Note:   1. The maximum period to request data of is 1 year.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HealthAndManagementAdvancedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$animal_id = 56; // int | The id of the animal this standups summary belongs to
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | start datetime (inclusive). Example: 2020-07-15T08:07:19Z
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | end datetime (exclusive). Example: 2020-07-15T08:07:19Z

try {
    $result = $apiInstance->animalStandupsDaySummaries($animal_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthAndManagementAdvancedApi->animalStandupsDaySummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **animal_id** | **int**| The id of the animal this standups summary belongs to |
 **start_date** | **\DateTime**| start datetime (inclusive). Example: 2020-07-15T08:07:19Z | [optional]
 **end_date** | **\DateTime**| end datetime (exclusive). Example: 2020-07-15T08:07:19Z | [optional]

### Return type

[**\Swagger\Client\Model\StandupsSummary**](../Model/StandupsSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **animalStepsDaySummaries**
> \Swagger\Client\Model\StepsSummary animalStepsDaySummaries($animal_id, $start_date, $end_date)

step day summaries of an animal

This method lists day summaries concerning the steps of an animal. This list contains day summaries from the start datetime (inclusive) up to the end datetime (exclusive).  If the end datetime is not specified the current datetime will be used. If the start datetime is not specified the start datetime will be the end datetime - 10 days.  Note:   1. The maximum period to request data of is 1 year.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HealthAndManagementAdvancedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$animal_id = 56; // int | The id of the animal this step summary belongs to
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | start datetime (inclusive). Example: 2020-07-15T08:07:19Z
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | end datetime (exclusive). Example: 2020-07-15T08:07:19Z

try {
    $result = $apiInstance->animalStepsDaySummaries($animal_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthAndManagementAdvancedApi->animalStepsDaySummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **animal_id** | **int**| The id of the animal this step summary belongs to |
 **start_date** | **\DateTime**| start datetime (inclusive). Example: 2020-07-15T08:07:19Z | [optional]
 **end_date** | **\DateTime**| end datetime (exclusive). Example: 2020-07-15T08:07:19Z | [optional]

### Return type

[**\Swagger\Client\Model\StepsSummary**](../Model/StepsSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **animalWalkingDaySummaries**
> \Swagger\Client\Model\WalkingSummary animalWalkingDaySummaries($animal_id, $start_date, $end_date)

walking day summaries of an animal

This method lists day summaries concerning the walking time of an animal. This list contains day summaries from the start datetime (inclusive) up to the end datetime (exclusive)  If the end datetime is not specified the current datetime will be used. If the start datetime is not specified the start datetime will be the end datetime - 10 days.  Note:   1. The maximum period to request data of is 1 year.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HealthAndManagementAdvancedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$animal_id = 56; // int | The id of the animal this walking summary belongs to
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | start datetime (inclusive). Example: 2020-07-15T08:07:19Z
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | end datetime (exclusive). Example: 2020-07-15T08:07:19Z

try {
    $result = $apiInstance->animalWalkingDaySummaries($animal_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthAndManagementAdvancedApi->animalWalkingDaySummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **animal_id** | **int**| The id of the animal this walking summary belongs to |
 **start_date** | **\DateTime**| start datetime (inclusive). Example: 2020-07-15T08:07:19Z | [optional]
 **end_date** | **\DateTime**| end datetime (exclusive). Example: 2020-07-15T08:07:19Z | [optional]

### Return type

[**\Swagger\Client\Model\WalkingSummary**](../Model/WalkingSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupActivityDaySummaries**
> \Swagger\Client\Model\StepsSummary groupActivityDaySummaries($group_id, $start_date, $end_date)

step day summaries of an animal group

This method lists the average of all step day summaries of a group from the start datetime (inclusive) up to the end datetime (exclusive). If the end datetime is not specified the current datetime will be used. If the start datetime is not specified the start datetime will be the end datetime - 10 days.  Notes:   1. Only day summaries are taken in account if all quarter data is collected for an animal of the day. Otherwise the animal will be excluded in the group average.   2. Total quarter in a day are based on the timezone of the user. Total quarters can change based on daylight savings time.      If no timezone information is available the total number of quarters need to meet 96 for that day.   3. The maximum period to request data of is 1 year.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HealthAndManagementAdvancedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 56; // int | the group
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | start datetime (inclusive). Example: 2020-07-15T08:07:19Z
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | end datetime (exclusive). Example: 2020-07-15T08:07:19Z

try {
    $result = $apiInstance->groupActivityDaySummaries($group_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthAndManagementAdvancedApi->groupActivityDaySummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| the group |
 **start_date** | **\DateTime**| start datetime (inclusive). Example: 2020-07-15T08:07:19Z | [optional]
 **end_date** | **\DateTime**| end datetime (exclusive). Example: 2020-07-15T08:07:19Z | [optional]

### Return type

[**\Swagger\Client\Model\StepsSummary**](../Model/StepsSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupEatingDaySummaries**
> \Swagger\Client\Model\EatingSummary groupEatingDaySummaries($group_id, $start_date, $end_date)

eating day summaries of an animal group

This method lists the average of all ^(1,2) eating day summaries of an group from the start datetime (inclusive) up to the end datetime (exclusive). If the end datetime is not specified the current datetime will be used. If the start datetime is not specified the start datetime will be the end datetime - 10 days.  Notes:   1. Only day summaries are taken in account if all quarter data is collected for an animal of the day. Otherwise the animal will be excluded in the group average.   2. Total quarter in a day are based on the timezone of the user. Total quarters can change based on daylight savings time.      If no timezone information is available the total number of quarters need to meet 96 for that day.   3. The maximum period to request data of is 1 year.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HealthAndManagementAdvancedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 56; // int | the group
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | start datetime (inclusive). Example: 2020-07-15T08:07:19Z
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | end datetime (exclusive). Example: 2020-07-15T08:07:19Z

try {
    $result = $apiInstance->groupEatingDaySummaries($group_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthAndManagementAdvancedApi->groupEatingDaySummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| the group |
 **start_date** | **\DateTime**| start datetime (inclusive). Example: 2020-07-15T08:07:19Z | [optional]
 **end_date** | **\DateTime**| end datetime (exclusive). Example: 2020-07-15T08:07:19Z | [optional]

### Return type

[**\Swagger\Client\Model\EatingSummary**](../Model/EatingSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupInactiveDaySummaries**
> \Swagger\Client\Model\InactiveSummary groupInactiveDaySummaries($group_id, $start_date, $end_date)

inactive day summaries of an animal group

This method lists the average of all inactive (not eating and not ruminating) day summaries of an group from the start datetime (inclusive) up to the end datetime (exclusive). If the end datetime is not specified the current datetime will be used. If the start datetime is not specified the start datetime will be the end datetime - 10 days.  Notes:   1. The maximum period to request data of is 1 year.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HealthAndManagementAdvancedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 56; // int | the group
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | start datetime (inclusive). Example: 2020-07-15T08:07:19Z
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | end datetime (exclusive). Example: 2020-07-15T08:07:19Z

try {
    $result = $apiInstance->groupInactiveDaySummaries($group_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthAndManagementAdvancedApi->groupInactiveDaySummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| the group |
 **start_date** | **\DateTime**| start datetime (inclusive). Example: 2020-07-15T08:07:19Z | [optional]
 **end_date** | **\DateTime**| end datetime (exclusive). Example: 2020-07-15T08:07:19Z | [optional]

### Return type

[**\Swagger\Client\Model\InactiveSummary**](../Model/InactiveSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupLyingDaySummaries**
> \Swagger\Client\Model\LyingSummary groupLyingDaySummaries($group_id, $start_date, $end_date)

lying day summaries of an animal group

This method lists the average of all ^(1,2) day summaries concerning the lying time of an group from the start datetime (inclusive) up to the end datetime (exclusive). If the end datetime is not specified the current datetime will be used. If the start datetime is not specified the start datetime will be the end datetime - 10 days.  Notes:   1. Only day summaries are taken in account if all quarter data is collected for an animal of the day. Otherwise the animal will be excluded in the group average.   2. Total quarter in a day are based on the timezone of the user. Total quarters can change based on daylight savings time.      If no timezone information is available the total number of quarters need to meet 96 for that day.   3. The maximum period to request data of is 1 year.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HealthAndManagementAdvancedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 56; // int | the group of the installation
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | start datetime (inclusive). Example: 2020-07-15T08:07:19Z
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | end datetime (exclusive). Example: 2020-07-15T08:07:19Z

try {
    $result = $apiInstance->groupLyingDaySummaries($group_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthAndManagementAdvancedApi->groupLyingDaySummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| the group of the installation |
 **start_date** | **\DateTime**| start datetime (inclusive). Example: 2020-07-15T08:07:19Z | [optional]
 **end_date** | **\DateTime**| end datetime (exclusive). Example: 2020-07-15T08:07:19Z | [optional]

### Return type

[**\Swagger\Client\Model\LyingSummary**](../Model/LyingSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupRuminationDaySummaries**
> \Swagger\Client\Model\RuminationSummary groupRuminationDaySummaries($group_id, $start_date, $end_date)

rumination day summaries of an animal group

This method lists the average of all rumination day summaries of a group from the start datetime (inclusive) up to the end datetime (exclusive). If the end datetime is not specified the current datetime will be used. If the start datetime is not specified the start datetime will be the end datetime - 10 days.  Notes:   1. The maximum period to request data of is 1 year.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HealthAndManagementAdvancedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 56; // int | the group
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | start datetime (inclusive). Example: 2020-07-15T08:07:19Z
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | end datetime (exclusive). Example: 2020-07-15T08:07:19Z

try {
    $result = $apiInstance->groupRuminationDaySummaries($group_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthAndManagementAdvancedApi->groupRuminationDaySummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| the group |
 **start_date** | **\DateTime**| start datetime (inclusive). Example: 2020-07-15T08:07:19Z | [optional]
 **end_date** | **\DateTime**| end datetime (exclusive). Example: 2020-07-15T08:07:19Z | [optional]

### Return type

[**\Swagger\Client\Model\RuminationSummary**](../Model/RuminationSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupStandingDaySummaries**
> \Swagger\Client\Model\StandingSummary groupStandingDaySummaries($group_id, $start_date, $end_date)

standing day summaries of an animal group

This method lists the average of all ^(1,2) day summaries concerning the standing time of an group from the start datetime (inclusive) up to the end datetime (exclusive). If the end datetime is not specified the current datetime will be used. If the start datetime is not specified the start datetime will be the end datetime - 10 days.  Notes:  1. Only day summaries are taken in account if all quarter data is collected for an animal of the day. Otherwise the animal will be excluded in the group average.  2. Total quarter in a day are based on the timezone of the user. Total quarters can change based on daylight savings time.  If no timezone information is available the total number of quarters need to meet 96 for that day.  3. The maximum period to request data of is 1 year.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HealthAndManagementAdvancedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 56; // int | the group of the installation
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | start datetime (inclusive). Example: 2020-07-15T08:07:19Z
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | end datetime (exclusive). Example: 2020-07-15T08:07:19Z

try {
    $result = $apiInstance->groupStandingDaySummaries($group_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthAndManagementAdvancedApi->groupStandingDaySummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| the group of the installation |
 **start_date** | **\DateTime**| start datetime (inclusive). Example: 2020-07-15T08:07:19Z | [optional]
 **end_date** | **\DateTime**| end datetime (exclusive). Example: 2020-07-15T08:07:19Z | [optional]

### Return type

[**\Swagger\Client\Model\StandingSummary**](../Model/StandingSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupStandupsDaySummaries**
> \Swagger\Client\Model\StandupsSummary groupStandupsDaySummaries($group_id, $start_date, $end_date)

standups day summaries of an animal group

This method lists the average of all ^(1,2) day summaries concerning the standups count of an animal group. This list contains day summaries from the start datetime (inclusive) up to the end datetime (exclusive).  If the end datetime is not specified the current datetime will be used. If the start datetime is not specified the start datetime will be the end datetime - 10 days.  Notes:  1. Only day summaries are taken in account if all quarter data is collected for an animal of the day. Otherwise the animal will be excluded in the group average.  2. Total quarter in a day are based on the timezone of the user. Total quarters can change based on daylight savings time.     If no timezone information is available the total number of quarters need to meet 96 for that day.  3. The maximum period to request data of is 1 year.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HealthAndManagementAdvancedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 56; // int | the group of the installation
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | start datetime (inclusive). Example: 2020-07-15T08:07:19Z
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | end datetime (exclusive). Example: 2020-07-15T08:07:19Z

try {
    $result = $apiInstance->groupStandupsDaySummaries($group_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthAndManagementAdvancedApi->groupStandupsDaySummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| the group of the installation |
 **start_date** | **\DateTime**| start datetime (inclusive). Example: 2020-07-15T08:07:19Z | [optional]
 **end_date** | **\DateTime**| end datetime (exclusive). Example: 2020-07-15T08:07:19Z | [optional]

### Return type

[**\Swagger\Client\Model\StandupsSummary**](../Model/StandupsSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupWalkingDaySummaries**
> \Swagger\Client\Model\WalkingSummary groupWalkingDaySummaries($group_id, $start_date, $end_date)

walking day summaries of an animal group

This method lists day summaries concerning the walking time of an animal group. This list contains day summaries from the start datetime (inclusive) up to the end datetime (exclusive).  If the end datetime is not specified the current datetime will be used. If the start datetime is not specified the start datetime will be the end datetime - 10 days.  Note:   1. The maximum period to request data of is 1 year.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HealthAndManagementAdvancedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 56; // int | the group of the installation
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | start datetime (inclusive). Example: 2020-07-15T08:07:19Z
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | end datetime (exclusive). Example: 2020-07-15T08:07:19Z

try {
    $result = $apiInstance->groupWalkingDaySummaries($group_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthAndManagementAdvancedApi->groupWalkingDaySummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| the group of the installation |
 **start_date** | **\DateTime**| start datetime (inclusive). Example: 2020-07-15T08:07:19Z | [optional]
 **end_date** | **\DateTime**| end datetime (exclusive). Example: 2020-07-15T08:07:19Z | [optional]

### Return type

[**\Swagger\Client\Model\WalkingSummary**](../Model/WalkingSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

