# Swagger\Client\CalendarApi

All URIs are relative to *https://api.nedap-bi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**calendarEventById**](CalendarApi.md#calendarEventById) | **GET** /v1/calendar/{id} | Return a calendar event.
[**calendarEvents**](CalendarApi.md#calendarEvents) | **GET** /v1/calendar | Returns all calendar events.
[**calendarEventsForCurrentCycle**](CalendarApi.md#calendarEventsForCurrentCycle) | **GET** /v1/calendar/current_cycle | Returns all calendar events of the current cycle
[**createBirthEvent**](CalendarApi.md#createBirthEvent) | **POST** /v1/calendar/birth_event | Creates a birth event.
[**createCalvingEvent**](CalendarApi.md#createCalvingEvent) | **POST** /v1/calendar/calving_event | Creates a calving event.
[**createDryoffEvent**](CalendarApi.md#createDryoffEvent) | **POST** /v1/calendar/dryoff_event | Creates a dryoff event.
[**createHeatEvent**](CalendarApi.md#createHeatEvent) | **POST** /v1/calendar/heat_event | Creates a heat event.
[**createInseminationEvent**](CalendarApi.md#createInseminationEvent) | **POST** /v1/calendar/insemination_event | Creates an insemination event.
[**createKeepOpenEvent**](CalendarApi.md#createKeepOpenEvent) | **POST** /v1/calendar/keep_open_event | Creates a keep-open event.
[**createPregnancyCheckEvent**](CalendarApi.md#createPregnancyCheckEvent) | **POST** /v1/calendar/pregnancy_check_event | Creates a pregnancy-check event.
[**deleteAllCalendarEvents**](CalendarApi.md#deleteAllCalendarEvents) | **DELETE** /v1/animal/{animal_id}/calendar | Deletes all calendar events for an animal.
[**deleteCalendarEvent**](CalendarApi.md#deleteCalendarEvent) | **DELETE** /v1/calendar/{id} | Deletes a calendar event.
[**updateBirthEvent**](CalendarApi.md#updateBirthEvent) | **PUT** /v1/calendar/birth_event/{id} | Updates a birth event.
[**updateCalvingEvent**](CalendarApi.md#updateCalvingEvent) | **PUT** /v1/calendar/calving_event/{id} | Updates a calving event.
[**updateDryoffEvent**](CalendarApi.md#updateDryoffEvent) | **PUT** /v1/calendar/dryoff_event/{id} | Updates a dryoff event.
[**updateHeatEvent**](CalendarApi.md#updateHeatEvent) | **PUT** /v1/calendar/heat_event/{id} | Updates a heat event.
[**updateInseminationEvent**](CalendarApi.md#updateInseminationEvent) | **PUT** /v1/calendar/insemination_event/{id} | Updates an insemination event.
[**updateKeepOpenEvent**](CalendarApi.md#updateKeepOpenEvent) | **PUT** /v1/calendar/keep_open_event/{id} | Updates a keep-open event.
[**updatePregnancyCheckEvent**](CalendarApi.md#updatePregnancyCheckEvent) | **PUT** /v1/calendar/pregnancy_check_event/{id} | Updates an Pregnancy-check event.


# **calendarEventById**
> \Swagger\Client\Model\CalendarEvent calendarEventById($id)

Return a calendar event.

This method returns the **CalendarEvent** with the given id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Calendar event id

try {
    $result = $apiInstance->calendarEventById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->calendarEventById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Calendar event id |

### Return type

[**\Swagger\Client\Model\CalendarEvent**](../Model/CalendarEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **calendarEvents**
> \Swagger\Client\Model\CalendarEvent calendarEvents($animal_id, $cycle_number, $type)

Returns all calendar events.

This method lists all **CalendarEvents** belonging to an **Animal**. Results can be narrowed down by adding the **CalendarEvent** type in the type field. All **CalendarEvent** types are inherited from the response class, so not all values have to be filled for each type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$animal_id = 56; // int | The id of the animal this calendar event belongs to
$cycle_number = 56; // int | The cycle number of a calving.
$type = "type_example"; // string | The calendar event type

try {
    $result = $apiInstance->calendarEvents($animal_id, $cycle_number, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->calendarEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **animal_id** | **int**| The id of the animal this calendar event belongs to |
 **cycle_number** | **int**| The cycle number of a calving. | [optional]
 **type** | **string**| The calendar event type | [optional]

### Return type

[**\Swagger\Client\Model\CalendarEvent**](../Model/CalendarEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **calendarEventsForCurrentCycle**
> \Swagger\Client\Model\CalendarEvent calendarEventsForCurrentCycle($animal_id, $type)

Returns all calendar events of the current cycle

This method lists all **CalendarEvents** of the current cycle belonging to an **Animal**..

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$animal_id = 56; // int | The id of the animal this calendar event belongs to
$type = "type_example"; // string | The calendar event type

try {
    $result = $apiInstance->calendarEventsForCurrentCycle($animal_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->calendarEventsForCurrentCycle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **animal_id** | **int**| The id of the animal this calendar event belongs to |
 **type** | **string**| The calendar event type | [optional]

### Return type

[**\Swagger\Client\Model\CalendarEvent**](../Model/CalendarEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBirthEvent**
> \Swagger\Client\Model\CalendarEvent createBirthEvent($animal_id, $timestamp, $memo)

Creates a birth event.

This method allows the creation of a birth event. After a successful creation of a birth event the calendar event id is returned in the response class. The **CalendarEvent** id acts as an indicator for further calendar event based requests.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$animal_id = 56; // int | The id of the animal this calendar event belongs to
$timestamp = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date and time of the calendar event
$memo = "memo_example"; // string | Memo text

try {
    $result = $apiInstance->createBirthEvent($animal_id, $timestamp, $memo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->createBirthEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **animal_id** | **int**| The id of the animal this calendar event belongs to |
 **timestamp** | **\DateTime**| Date and time of the calendar event |
 **memo** | **string**| Memo text | [optional]

### Return type

[**\Swagger\Client\Model\CalendarEvent**](../Model/CalendarEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCalvingEvent**
> \Swagger\Client\Model\CalendarEvent createCalvingEvent($animal_id, $timestamp, $cycle_number, $memo)

Creates a calving event.

This method allows the creation of a calving event. After a successful creation of a calving event the calendar event id is returned in the response class. The calendar event id acts as an indicator for further calendar event based requests.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$animal_id = 56; // int | The id of the animal this calendar event belongs to
$timestamp = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date and time of the calendar event
$cycle_number = 56; // int | The cycle number of a calving.
$memo = "memo_example"; // string | Memo text

try {
    $result = $apiInstance->createCalvingEvent($animal_id, $timestamp, $cycle_number, $memo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->createCalvingEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **animal_id** | **int**| The id of the animal this calendar event belongs to |
 **timestamp** | **\DateTime**| Date and time of the calendar event |
 **cycle_number** | **int**| The cycle number of a calving. | [optional]
 **memo** | **string**| Memo text | [optional]

### Return type

[**\Swagger\Client\Model\CalendarEvent**](../Model/CalendarEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDryoffEvent**
> \Swagger\Client\Model\CalendarEvent createDryoffEvent($animal_id, $timestamp, $memo)

Creates a dryoff event.

This method allows the creation of a dryoff event. After a successful creation of a dryoff event the calendar event id is returned in the response class. The calendar event id acts as an indicator for further calendar event based requests.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$animal_id = 56; // int | The id of the animal this calendar event belongs to
$timestamp = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date and time of the calendar event
$memo = "memo_example"; // string | Memo text

try {
    $result = $apiInstance->createDryoffEvent($animal_id, $timestamp, $memo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->createDryoffEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **animal_id** | **int**| The id of the animal this calendar event belongs to |
 **timestamp** | **\DateTime**| Date and time of the calendar event |
 **memo** | **string**| Memo text | [optional]

### Return type

[**\Swagger\Client\Model\CalendarEvent**](../Model/CalendarEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createHeatEvent**
> \Swagger\Client\Model\CalendarEvent createHeatEvent($animal_id, $timestamp, $memo)

Creates a heat event.

This method allows the creation of a heat event entity. After a successful creation of a heat event the calendar event id is returned in the response class. The calendar event id acts as an indicator for further calendar event based requests.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$animal_id = 56; // int | The id of the animal this calendar event belongs to
$timestamp = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date and time of the calendar event
$memo = "memo_example"; // string | Memo text

try {
    $result = $apiInstance->createHeatEvent($animal_id, $timestamp, $memo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->createHeatEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **animal_id** | **int**| The id of the animal this calendar event belongs to |
 **timestamp** | **\DateTime**| Date and time of the calendar event |
 **memo** | **string**| Memo text | [optional]

### Return type

[**\Swagger\Client\Model\CalendarEvent**](../Model/CalendarEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createInseminationEvent**
> \Swagger\Client\Model\CalendarEvent createInseminationEvent($animal_id, $timestamp, $mating_code, $memo, $performer)

Creates an insemination event.

This method allows the creation of an insemination event entity. After a successful creation of an insemination event the calendar event id is returned in the response class. The calendar event id acts as an indicator for further calendar event based requests.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$animal_id = 56; // int | The id of the animal this calendar event belongs to
$timestamp = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date and time of the calendar event
$mating_code = "mating_code_example"; // string | The name/code of the male animal used for insemination (max 50 characters long)
$memo = "memo_example"; // string | Memo text
$performer = "performer_example"; // string | The performer's name of the calendar event

try {
    $result = $apiInstance->createInseminationEvent($animal_id, $timestamp, $mating_code, $memo, $performer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->createInseminationEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **animal_id** | **int**| The id of the animal this calendar event belongs to |
 **timestamp** | **\DateTime**| Date and time of the calendar event |
 **mating_code** | **string**| The name/code of the male animal used for insemination (max 50 characters long) | [optional]
 **memo** | **string**| Memo text | [optional]
 **performer** | **string**| The performer&#39;s name of the calendar event | [optional]

### Return type

[**\Swagger\Client\Model\CalendarEvent**](../Model/CalendarEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createKeepOpenEvent**
> \Swagger\Client\Model\CalendarEvent createKeepOpenEvent($animal_id, $timestamp, $memo)

Creates a keep-open event.

This method allows the creation of a keep-open event entity. After a successful creation of a keep-open event the calendar event id is returned in the response class. The calendar event id acts as an indicator for further calendar event based requests.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$animal_id = 56; // int | The id of the animal this calendar event belongs to
$timestamp = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date and time of the calendar event
$memo = "memo_example"; // string | Memo text

try {
    $result = $apiInstance->createKeepOpenEvent($animal_id, $timestamp, $memo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->createKeepOpenEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **animal_id** | **int**| The id of the animal this calendar event belongs to |
 **timestamp** | **\DateTime**| Date and time of the calendar event |
 **memo** | **string**| Memo text | [optional]

### Return type

[**\Swagger\Client\Model\CalendarEvent**](../Model/CalendarEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPregnancyCheckEvent**
> \Swagger\Client\Model\CalendarEvent createPregnancyCheckEvent($animal_id, $timestamp, $pregnancy_check_result, $memo, $performer)

Creates a pregnancy-check event.

This method allows the creation of a pregnancy-check event entity. After a successful creation of a pregnancy-check event the calendar event id is returned in the response class. The calendar event id acts as an indicator for further calendar event based requests.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$animal_id = 56; // int | The id of the animal this calendar event belongs to
$timestamp = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date and time of the calendar event
$pregnancy_check_result = 56; // int | The result of a pregnancy check. 1: Pregnant, 2: Not pregnant, 3: Automatic pregnant, 4: Unknown
$memo = "memo_example"; // string | Memo text
$performer = "performer_example"; // string | The performer's name of the calendar event

try {
    $result = $apiInstance->createPregnancyCheckEvent($animal_id, $timestamp, $pregnancy_check_result, $memo, $performer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->createPregnancyCheckEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **animal_id** | **int**| The id of the animal this calendar event belongs to |
 **timestamp** | **\DateTime**| Date and time of the calendar event |
 **pregnancy_check_result** | **int**| The result of a pregnancy check. 1: Pregnant, 2: Not pregnant, 3: Automatic pregnant, 4: Unknown |
 **memo** | **string**| Memo text | [optional]
 **performer** | **string**| The performer&#39;s name of the calendar event | [optional]

### Return type

[**\Swagger\Client\Model\CalendarEvent**](../Model/CalendarEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAllCalendarEvents**
> deleteAllCalendarEvents($animal_id)

Deletes all calendar events for an animal.

This method deletes all calendar events for an animal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$animal_id = 56; // int | The id of the animal this calendar event belongs to

try {
    $apiInstance->deleteAllCalendarEvents($animal_id);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->deleteAllCalendarEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **animal_id** | **int**| The id of the animal this calendar event belongs to |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCalendarEvent**
> deleteCalendarEvent($id)

Deletes a calendar event.

This method allows the deletion of a calendar event entity with the corresponding id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Calendar event id

try {
    $apiInstance->deleteCalendarEvent($id);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->deleteCalendarEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Calendar event id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBirthEvent**
> \Swagger\Client\Model\CalendarEvent updateBirthEvent($id, $timestamp, $memo)

Updates a birth event.

This method updates the birth event with the specified id with the data provided in the context. After a successful update the updated birth event entity is returned as the response class. To properly update a birth event ensure the usage rules are met. If an error occurred the error entity is returned instead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Calendar event id
$timestamp = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date and time of the calendar event
$memo = "memo_example"; // string | Memo text

try {
    $result = $apiInstance->updateBirthEvent($id, $timestamp, $memo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->updateBirthEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Calendar event id |
 **timestamp** | **\DateTime**| Date and time of the calendar event |
 **memo** | **string**| Memo text | [optional]

### Return type

[**\Swagger\Client\Model\CalendarEvent**](../Model/CalendarEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCalvingEvent**
> \Swagger\Client\Model\CalendarEvent updateCalvingEvent($id, $timestamp, $cycle_number, $memo)

Updates a calving event.

This method updates the calving event with the specified id with the data provided in the context. After a successful update the updated calving event entity is returned as the response class. To properly update a calving event ensure the usage rules are met. If an error occurred the error entity is returned instead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Calendar event id
$timestamp = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date and time of the calendar event
$cycle_number = 56; // int | The cycle number of a calving.
$memo = "memo_example"; // string | Memo text

try {
    $result = $apiInstance->updateCalvingEvent($id, $timestamp, $cycle_number, $memo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->updateCalvingEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Calendar event id |
 **timestamp** | **\DateTime**| Date and time of the calendar event |
 **cycle_number** | **int**| The cycle number of a calving. | [optional]
 **memo** | **string**| Memo text | [optional]

### Return type

[**\Swagger\Client\Model\CalendarEvent**](../Model/CalendarEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDryoffEvent**
> \Swagger\Client\Model\CalendarEvent updateDryoffEvent($id, $timestamp, $memo)

Updates a dryoff event.

This method updates the dryoff event with the specified id with the data provided in the context. After a successful update the updated dryoff event is returned as the response class. To properly update a dryoff event ensure the usage rules are met. If an error occurred the error entity is returned instead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Calendar event id
$timestamp = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date and time of the calendar event
$memo = "memo_example"; // string | Memo text

try {
    $result = $apiInstance->updateDryoffEvent($id, $timestamp, $memo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->updateDryoffEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Calendar event id |
 **timestamp** | **\DateTime**| Date and time of the calendar event |
 **memo** | **string**| Memo text | [optional]

### Return type

[**\Swagger\Client\Model\CalendarEvent**](../Model/CalendarEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateHeatEvent**
> \Swagger\Client\Model\CalendarEvent updateHeatEvent($id, $timestamp, $memo)

Updates a heat event.

This method updates the heat event with the specified id with the data provided in the context. After a successful update the updated heat event is returned as the response class. To properly update a heat event ensure the usage rules are met. If an error occurred the error entity is returned instead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Calendar event id
$timestamp = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date and time of the calendar event
$memo = "memo_example"; // string | Memo text

try {
    $result = $apiInstance->updateHeatEvent($id, $timestamp, $memo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->updateHeatEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Calendar event id |
 **timestamp** | **\DateTime**| Date and time of the calendar event |
 **memo** | **string**| Memo text | [optional]

### Return type

[**\Swagger\Client\Model\CalendarEvent**](../Model/CalendarEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateInseminationEvent**
> \Swagger\Client\Model\CalendarEvent updateInseminationEvent($id, $timestamp, $mating_code, $memo, $performer)

Updates an insemination event.

This method updates the insemination event with the specified id with the data provided in the context. After a successful update the updated insemination event is returned as the response class. To properly update a insemination event ensure the usage rules are met. If an error occurred the error entity is returned instead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Calendar event id
$timestamp = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date and time of the calendar event
$mating_code = "mating_code_example"; // string | The name/code of the male animal used for insemination (max 50 characters long)
$memo = "memo_example"; // string | Memo text
$performer = "performer_example"; // string | The performer's name of the calendar event

try {
    $result = $apiInstance->updateInseminationEvent($id, $timestamp, $mating_code, $memo, $performer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->updateInseminationEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Calendar event id |
 **timestamp** | **\DateTime**| Date and time of the calendar event |
 **mating_code** | **string**| The name/code of the male animal used for insemination (max 50 characters long) | [optional]
 **memo** | **string**| Memo text | [optional]
 **performer** | **string**| The performer&#39;s name of the calendar event | [optional]

### Return type

[**\Swagger\Client\Model\CalendarEvent**](../Model/CalendarEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateKeepOpenEvent**
> \Swagger\Client\Model\CalendarEvent updateKeepOpenEvent($id, $timestamp, $memo)

Updates a keep-open event.

This method updates the keep-open event with the specified id with the data provided in the context. After a successful update the updated keep-open event is returned as the response class. To properly update a keep-open event ensure the usage rules are met. If an error occurred the error entity is returned instead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Calendar event id
$timestamp = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date and time of the calendar event
$memo = "memo_example"; // string | Memo text

try {
    $result = $apiInstance->updateKeepOpenEvent($id, $timestamp, $memo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->updateKeepOpenEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Calendar event id |
 **timestamp** | **\DateTime**| Date and time of the calendar event |
 **memo** | **string**| Memo text | [optional]

### Return type

[**\Swagger\Client\Model\CalendarEvent**](../Model/CalendarEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePregnancyCheckEvent**
> \Swagger\Client\Model\CalendarEvent updatePregnancyCheckEvent($id, $timestamp, $pregnancy_check_result, $memo, $performer)

Updates an Pregnancy-check event.

This method updates the pregnancy-check event entity with the specified id with the data provided in the context. After a successful update the updated pregnancy-check event entity is returned as the response class. To properly update a pregnancy-check event ensure the usage rules are met. If an error occurred the error entity is returned instead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Calendar event id
$timestamp = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date and time of the calendar event
$pregnancy_check_result = 56; // int | The result of a pregnancy check. 1: Pregnant, 2: Not pregnant, 3: Automatic pregnant, 4: Unknown
$memo = "memo_example"; // string | Memo text
$performer = "performer_example"; // string | The performer's name of the calendar event

try {
    $result = $apiInstance->updatePregnancyCheckEvent($id, $timestamp, $pregnancy_check_result, $memo, $performer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->updatePregnancyCheckEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Calendar event id |
 **timestamp** | **\DateTime**| Date and time of the calendar event |
 **pregnancy_check_result** | **int**| The result of a pregnancy check. 1: Pregnant, 2: Not pregnant, 3: Automatic pregnant, 4: Unknown | [optional]
 **memo** | **string**| Memo text | [optional]
 **performer** | **string**| The performer&#39;s name of the calendar event | [optional]

### Return type

[**\Swagger\Client\Model\CalendarEvent**](../Model/CalendarEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

