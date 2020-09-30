# Swagger\Client\AnimalLocationsApi

All URIs are relative to *https://api.nedap-bi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**animalLocation**](AnimalLocationsApi.md#animalLocation) | **GET** /v1/animal_locations/{animal_id} | Returns the location of an animal
[**animalLocations**](AnimalLocationsApi.md#animalLocations) | **GET** /v1/animal_locations | Returns all animal locations
[**createAnimalLocation**](AnimalLocationsApi.md#createAnimalLocation) | **POST** /v1/animal_locations | Creates an animal location.
[**updateAnimalLocation**](AnimalLocationsApi.md#updateAnimalLocation) | **PUT** /v1/animal_locations/{animal_id} | Updates an animal location.


# **animalLocation**
> \Swagger\Client\Model\AnimalLocation animalLocation($animal_id)

Returns the location of an animal

This method returns the home location of an animal belonging to this **Installation**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AnimalLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$animal_id = 56; // int | Id of the animal

try {
    $result = $apiInstance->animalLocation($animal_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnimalLocationsApi->animalLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **animal_id** | **int**| Id of the animal |

### Return type

[**\Swagger\Client\Model\AnimalLocation**](../Model/AnimalLocation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **animalLocations**
> \Swagger\Client\Model\AnimalLocation animalLocations()

Returns all animal locations

This method lists the home location of each animal belonging to this **Installation**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AnimalLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->animalLocations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnimalLocationsApi->animalLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\AnimalLocation**](../Model/AnimalLocation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAnimalLocation**
> \Swagger\Client\Model\AnimalLocation createAnimalLocation($animal_id, $location_id)

Creates an animal location.

This method allows the creation of an animal location. After a successful creation of an animal location the created animal location is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AnimalLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$animal_id = 56; // int | The animal id
$location_id = 56; // int | The location id

try {
    $result = $apiInstance->createAnimalLocation($animal_id, $location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnimalLocationsApi->createAnimalLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **animal_id** | **int**| The animal id |
 **location_id** | **int**| The location id |

### Return type

[**\Swagger\Client\Model\AnimalLocation**](../Model/AnimalLocation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAnimalLocation**
> \Swagger\Client\Model\AnimalLocation updateAnimalLocation($animal_id, $location_id)

Updates an animal location.

This method updates the animal location. After a successful update the updated animal location is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AnimalLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$animal_id = 56; // int | The animal id
$location_id = 56; // int | The location id

try {
    $result = $apiInstance->updateAnimalLocation($animal_id, $location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnimalLocationsApi->updateAnimalLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **animal_id** | **int**| The animal id |
 **location_id** | **int**| The location id |

### Return type

[**\Swagger\Client\Model\AnimalLocation**](../Model/AnimalLocation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

