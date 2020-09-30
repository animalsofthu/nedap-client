# Swagger\Client\InstallationsApi

All URIs are relative to *https://api.nedap-bi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**installations**](InstallationsApi.md#installations) | **GET** /v1/installations | Get information about the installation’


# **installations**
> \Swagger\Client\Model\Installation installations()

Get information about the installation’

With each endpoint information can be retrieved for one installation only. The access token controls which installation will be accessed. The installation endpoint can be used to get information about the installation corresponding to the access token being used. Best practice is to check the last_sync parameter regularly to make sure that the installation is syncing with the Nedap server.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InstallationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->installations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallationsApi->installations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Installation**](../Model/Installation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

