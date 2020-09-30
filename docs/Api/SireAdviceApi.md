# Swagger\Client\SireAdviceApi

All URIs are relative to *https://api.nedap-bi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSireAdvice**](SireAdviceApi.md#createSireAdvice) | **POST** /v1/sire_advices | Create a sire advice
[**deleteSireAdvice**](SireAdviceApi.md#deleteSireAdvice) | **DELETE** /v1/sire_advices/{id} | Delete an sire advice
[**sireAdviceById**](SireAdviceApi.md#sireAdviceById) | **GET** /v1/sire_advices/{id} | Get a single sire advice by id
[**sireAdvices**](SireAdviceApi.md#sireAdvices) | **GET** /v1/sire_advices | Get all sire advices
[**updateSireAdvice**](SireAdviceApi.md#updateSireAdvice) | **PUT** /v1/sire_advices/{id} | Update a single sire advice


# **createSireAdvice**
> \Swagger\Client\Model\SireAdvice createSireAdvice($v1_sire_advices)

Create a sire advice

Create a sire advice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SireAdviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$v1_sire_advices = new \Swagger\Client\Model\PostV1SireAdvices(); // \Swagger\Client\Model\PostV1SireAdvices | 

try {
    $result = $apiInstance->createSireAdvice($v1_sire_advices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SireAdviceApi->createSireAdvice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **v1_sire_advices** | [**\Swagger\Client\Model\PostV1SireAdvices**](../Model/PostV1SireAdvices.md)|  |

### Return type

[**\Swagger\Client\Model\SireAdvice**](../Model/SireAdvice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSireAdvice**
> deleteSireAdvice($id)

Delete an sire advice

Note that once a sire advice is deleted it cannot be restored.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SireAdviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | ID of the advice

try {
    $apiInstance->deleteSireAdvice($id);
} catch (Exception $e) {
    echo 'Exception when calling SireAdviceApi->deleteSireAdvice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the advice |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sireAdviceById**
> \Swagger\Client\Model\SireAdvice sireAdviceById($id)

Get a single sire advice by id

Get a single sire advice by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SireAdviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | ID of the advice

try {
    $result = $apiInstance->sireAdviceById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SireAdviceApi->sireAdviceById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the advice |

### Return type

[**\Swagger\Client\Model\SireAdvice**](../Model/SireAdvice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sireAdvices**
> \Swagger\Client\Model\SireAdvice sireAdvices($animal_id, $advice_order, $sexed)

Get all sire advices

Get all sire advices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SireAdviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$animal_id = 56; // int | ID of the animal
$advice_order = 56; // int | Order of the advice
$sexed = 56; // int | Indication if the sire's semen is sexed, 0: Not sexed, 1: Sexed as male, 2: Sexed as female

try {
    $result = $apiInstance->sireAdvices($animal_id, $advice_order, $sexed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SireAdviceApi->sireAdvices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **animal_id** | **int**| ID of the animal | [optional]
 **advice_order** | **int**| Order of the advice | [optional]
 **sexed** | **int**| Indication if the sire&#39;s semen is sexed, 0: Not sexed, 1: Sexed as male, 2: Sexed as female | [optional]

### Return type

[**\Swagger\Client\Model\SireAdvice**](../Model/SireAdvice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSireAdvice**
> \Swagger\Client\Model\SireAdvice updateSireAdvice($id, $sire_code, $sire_name, $sire_url, $sexed)

Update a single sire advice

Update a single sire advice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SireAdviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | ID of the advice
$sire_code = "sire_code_example"; // string | Code of the sire
$sire_name = "sire_name_example"; // string | Name of the sire
$sire_url = "sire_url_example"; // string | Url to the sire's page
$sexed = 56; // int | Indication if the sire's semen is sexed, 0: Not sexed, 1: Sexed as male, 2: Sexed as female

try {
    $result = $apiInstance->updateSireAdvice($id, $sire_code, $sire_name, $sire_url, $sexed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SireAdviceApi->updateSireAdvice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the advice |
 **sire_code** | **string**| Code of the sire | [optional]
 **sire_name** | **string**| Name of the sire | [optional]
 **sire_url** | **string**| Url to the sire&#39;s page | [optional]
 **sexed** | **int**| Indication if the sire&#39;s semen is sexed, 0: Not sexed, 1: Sexed as male, 2: Sexed as female | [optional]

### Return type

[**\Swagger\Client\Model\SireAdvice**](../Model/SireAdvice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

