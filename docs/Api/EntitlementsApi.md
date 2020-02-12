# OpenAPI\Client\EntitlementsApi

All URIs are relative to *http://http:/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**entitlementsAllowPost**](EntitlementsApi.md#entitlementsAllowPost) | **POST** /entitlements/allow | 
[**entitlementsAllowUuidPost**](EntitlementsApi.md#entitlementsAllowUuidPost) | **POST** /entitlements/allow/{uuid} | Grant product access to a customer
[**entitlementsGet**](EntitlementsApi.md#entitlementsGet) | **GET** /entitlements | List all entitlements



## entitlementsAllowPost

> object[] entitlementsAllowPost($body, $authorization)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\EntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\EntitlementAccess(); // \OpenAPI\Client\Model\EntitlementAccess | 
$authorization = 'authorization_example'; // string | 

try {
    $result = $apiInstance->entitlementsAllowPost($body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitlementsApi->entitlementsAllowPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\EntitlementAccess**](../Model/EntitlementAccess.md)|  |
 **authorization** | **string**|  | [optional]

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## entitlementsAllowUuidPost

> object[] entitlementsAllowUuidPost($uuid, $body, $authorization)

Grant product access to a customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\EntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | 
$body = new \OpenAPI\Client\Model\EntitlementAccess(); // \OpenAPI\Client\Model\EntitlementAccess | 
$authorization = 'authorization_example'; // string | 

try {
    $result = $apiInstance->entitlementsAllowUuidPost($uuid, $body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitlementsApi->entitlementsAllowUuidPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)|  |
 **body** | [**\OpenAPI\Client\Model\EntitlementAccess**](../Model/EntitlementAccess.md)|  |
 **authorization** | **string**|  | [optional]

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## entitlementsGet

> map[string,string[]] entitlementsGet()

List all entitlements

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\EntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->entitlementsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitlementsApi->entitlementsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**map[string,string[]]**](../Model/array.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

