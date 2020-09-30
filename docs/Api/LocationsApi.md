# Swagger\Client\LocationsApi

All URIs are relative to *https://api.nedap-bi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**locationById**](LocationsApi.md#locationById) | **GET** /v1/locations/{id} | Return a Location.
[**locationByUuid**](LocationsApi.md#locationByUuid) | **GET** /v1/locations/with_uuid/{uuid} | Find location by uuid
[**locations**](LocationsApi.md#locations) | **GET** /v1/locations | Returns all Locations.


# **locationById**
> \Swagger\Client\Model\Location locationById($id)

Return a Location.

This method will return a single **Location** entity identified by the **Location** id. The location belongs to an **Installation**. Note that locations are only available for installations with Velos version 2016.2 or higher.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | The location id

try {
    $result = $apiInstance->locationById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The location id |

### Return type

[**\Swagger\Client\Model\Location**](../Model/Location.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **locationByUuid**
> \Swagger\Client\Model\Location locationByUuid($uuid)

Find location by uuid

This method will return a single **Location** entity identified by the **Location** UUID. The location belongs to an **Installation**. Note that locations are only available for installations with Velos version 2016.2 or higher.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = "uuid_example"; // string | The location UUID

try {
    $result = $apiInstance->locationByUuid($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationByUuid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The location UUID |

### Return type

[**\Swagger\Client\Model\Location**](../Model/Location.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **locations**
> \Swagger\Client\Model\Location locations($type, $number, $animal_id)

Returns all Locations.

This method lists all locations belonging to an **Installation**. Optionally, an animal ID can be specified to get the location of that animal. Note that locations are only available for installations with Velos version 2016.2 or higher.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = "type_example"; // string | The type of location
$number = 56; // int | Number of the location
$animal_id = 56; // int | The id of the animal that should belong to the location

try {
    $result = $apiInstance->locations($type, $number, $animal_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The type of location | [optional]
 **number** | **int**| Number of the location | [optional]
 **animal_id** | **int**| The id of the animal that should belong to the location | [optional]

### Return type

[**\Swagger\Client\Model\Location**](../Model/Location.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

