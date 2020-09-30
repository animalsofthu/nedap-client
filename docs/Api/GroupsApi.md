# Swagger\Client\GroupsApi

All URIs are relative to *https://api.nedap-bi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createGroup**](GroupsApi.md#createGroup) | **POST** /v1/groups | Creates a group
[**groupById**](GroupsApi.md#groupById) | **GET** /v1/groups/{id} | Returns the group with the given id
[**groups**](GroupsApi.md#groups) | **GET** /v1/groups | Returns all groups for an installation
[**updateGroup**](GroupsApi.md#updateGroup) | **PUT** /v1/groups/{id} | Updates a Group


# **createGroup**
> \Swagger\Client\Model\Group createGroup($group_type, $number, $name)

Creates a group

This method allows the creation of a new group. After the successful creation of a group the group id is returned in the response class. The group id acts as an indicator for further group based requests.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_type = 56; // int | Type of group. 0: Feeding (DEPRECATED), 1: Livestock
$number = 56; // int | The number of the group
$name = "name_example"; // string | The name of the group

try {
    $result = $apiInstance->createGroup($group_type, $number, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->createGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_type** | **int**| Type of group. 0: Feeding (DEPRECATED), 1: Livestock |
 **number** | **int**| The number of the group |
 **name** | **string**| The name of the group | [optional]

### Return type

[**\Swagger\Client\Model\Group**](../Model/Group.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupById**
> \Swagger\Client\Model\Group groupById($id)

Returns the group with the given id

This method returns the group with the given id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | The group id

try {
    $result = $apiInstance->groupById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The group id |

### Return type

[**\Swagger\Client\Model\Group**](../Model/Group.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groups**
> \Swagger\Client\Model\Group groups()

Returns all groups for an installation

This method lists all groups belonging to an installation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->groups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Group**](../Model/Group.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGroup**
> \Swagger\Client\Model\Group updateGroup($id, $number, $name)

Updates a Group

This method updates the group entity with specified id with the data provided in the context. After a successful update the updated group entity is returned as the response class. To properly update a group ensure the usage rules are met. If an error occurred the error entity is returned instead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | The group id
$number = 56; // int | The number of the group
$name = "name_example"; // string | The name of the group

try {
    $result = $apiInstance->updateGroup($id, $number, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->updateGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The group id |
 **number** | **int**| The number of the group | [optional]
 **name** | **string**| The name of the group | [optional]

### Return type

[**\Swagger\Client\Model\Group**](../Model/Group.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

