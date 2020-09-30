# Swagger\Client\AttentionsApi

All URIs are relative to *https://api.nedap-bi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**animalAttentions**](AttentionsApi.md#animalAttentions) | **GET** /v1/attentions/animal_attentions | Get all attentions related to a specific animal
[**attentionById**](AttentionsApi.md#attentionById) | **GET** /v1/attentions/{id} | Get a single attention
[**attentions**](AttentionsApi.md#attentions) | **GET** /v1/attentions | Get all attentions
[**groupAttentions**](AttentionsApi.md#groupAttentions) | **GET** /v1/attentions/group_attentions | Get all attentions related to a specific group
[**markAttentionAsSeen**](AttentionsApi.md#markAttentionAsSeen) | **PUT** /v1/attentions/{id}/seen | Mark an attention as seen


# **animalAttentions**
> \Swagger\Client\Model\Attention animalAttentions($animal_id, $seen, $type)

Get all attentions related to a specific animal

Get all attentions related to a specific animal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AttentionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$animal_id = 56; // int | Id of the animal
$seen = true; // bool | If an attention is marked as ‘seen’ or not
$type = 56; // int | The attention type. A list of possible codes and their meaning can be found above in the general Attentions section.

try {
    $result = $apiInstance->animalAttentions($animal_id, $seen, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttentionsApi->animalAttentions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **animal_id** | **int**| Id of the animal |
 **seen** | **bool**| If an attention is marked as ‘seen’ or not | [optional]
 **type** | **int**| The attention type. A list of possible codes and their meaning can be found above in the general Attentions section. | [optional]

### Return type

[**\Swagger\Client\Model\Attention**](../Model/Attention.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attentionById**
> \Swagger\Client\Model\Attention attentionById($id)

Get a single attention

See the general ‘Attentions’ section for explanation about the different types of attentions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AttentionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The attention id

try {
    $result = $apiInstance->attentionById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttentionsApi->attentionById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The attention id |

### Return type

[**\Swagger\Client\Model\Attention**](../Model/Attention.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attentions**
> \Swagger\Client\Model\Attention attentions($seen, $type)

Get all attentions

See the general ‘Attentions’ section for explanation about the different types of attentions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AttentionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$seen = true; // bool | If an attention is marked as ‘seen’ or not
$type = 56; // int | The attention type. A list of possible codes and their meaning can be found above in the general Attentions section.

try {
    $result = $apiInstance->attentions($seen, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttentionsApi->attentions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seen** | **bool**| If an attention is marked as ‘seen’ or not | [optional]
 **type** | **int**| The attention type. A list of possible codes and their meaning can be found above in the general Attentions section. | [optional]

### Return type

[**\Swagger\Client\Model\Attention**](../Model/Attention.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupAttentions**
> \Swagger\Client\Model\Attention groupAttentions($group_id, $seen)

Get all attentions related to a specific group

See the general ‘Attentions’ section for explanation about the different types of attentions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AttentionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 56; // int | Id of the group
$seen = true; // bool | If an attention is marked as ‘seen’ or not

try {
    $result = $apiInstance->groupAttentions($group_id, $seen);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttentionsApi->groupAttentions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| Id of the group |
 **seen** | **bool**| If an attention is marked as ‘seen’ or not | [optional]

### Return type

[**\Swagger\Client\Model\Attention**](../Model/Attention.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markAttentionAsSeen**
> \Swagger\Client\Model\Attention markAttentionAsSeen($id)

Mark an attention as seen

A user can mark the animal attention as ‘seen’ in the Nedap software. This disables the blinking of an attention light on the VPU which is installed at the farm. Controlling the light via the ‘mark as seen’ option can be done via this endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AttentionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The attention id

try {
    $result = $apiInstance->markAttentionAsSeen($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttentionsApi->markAttentionAsSeen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The attention id |

### Return type

[**\Swagger\Client\Model\Attention**](../Model/Attention.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

