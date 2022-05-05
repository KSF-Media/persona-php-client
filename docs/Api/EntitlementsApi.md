# PersonaClient\EntitlementsApi

All URIs are relative to *http://http:/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**entitlementsAllowDelete**](EntitlementsApi.md#entitlementsAllowDelete) | **DELETE** /entitlements/allow | Remove an entitlement
[**entitlementsAllowGet**](EntitlementsApi.md#entitlementsAllowGet) | **GET** /entitlements/allow | Check if global entitlements are enabled
[**entitlementsAllowPost**](EntitlementsApi.md#entitlementsAllowPost) | **POST** /entitlements/allow | Add an entitlement for all users
[**entitlementsAllowUuidPost**](EntitlementsApi.md#entitlementsAllowUuidPost) | **POST** /entitlements/allow/{uuid} | Grant product access to a customer
[**entitlementsGet**](EntitlementsApi.md#entitlementsGet) | **GET** /entitlements | List all entitlements



## entitlementsAllowDelete

> object[] entitlementsAllowDelete($body, $auth_user, $authorization)

Remove an entitlement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\EntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = 56; // int | 
$auth_user = 'auth_user_example'; // string | 
$authorization = 'authorization_example'; // string | 

try {
    $result = $apiInstance->entitlementsAllowDelete($body, $auth_user, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitlementsApi->entitlementsAllowDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **int**|  |
 **auth_user** | [**string**](../Model/.md)|  | [optional]
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


## entitlementsAllowGet

> \PersonaClient\Model\PersistedEntitlementAccess[] entitlementsAllowGet($auth_user, $authorization, $ip, $paper)

Check if global entitlements are enabled

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\EntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auth_user = 'auth_user_example'; // string | 
$authorization = 'authorization_example'; // string | 
$ip = 'ip_example'; // string | 
$paper = 'paper_example'; // string | 

try {
    $result = $apiInstance->entitlementsAllowGet($auth_user, $authorization, $ip, $paper);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitlementsApi->entitlementsAllowGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_user** | [**string**](../Model/.md)|  | [optional]
 **authorization** | **string**|  | [optional]
 **ip** | **string**|  | [optional]
 **paper** | **string**|  | [optional]

### Return type

[**\PersonaClient\Model\PersistedEntitlementAccess[]**](../Model/PersistedEntitlementAccess.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## entitlementsAllowPost

> object[] entitlementsAllowPost($body, $auth_user, $authorization)

Add an entitlement for all users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\EntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PersonaClient\Model\EntitlementAccess(); // \PersonaClient\Model\EntitlementAccess | 
$auth_user = 'auth_user_example'; // string | 
$authorization = 'authorization_example'; // string | 

try {
    $result = $apiInstance->entitlementsAllowPost($body, $auth_user, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitlementsApi->entitlementsAllowPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PersonaClient\Model\EntitlementAccess**](../Model/EntitlementAccess.md)|  |
 **auth_user** | [**string**](../Model/.md)|  | [optional]
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

> object[] entitlementsAllowUuidPost($uuid, $body, $auth_user, $authorization)

Grant product access to a customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\EntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | 
$body = new \PersonaClient\Model\EntitlementAccess(); // \PersonaClient\Model\EntitlementAccess | 
$auth_user = 'auth_user_example'; // string | 
$authorization = 'authorization_example'; // string | 

try {
    $result = $apiInstance->entitlementsAllowUuidPost($uuid, $body, $auth_user, $authorization);
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
 **body** | [**\PersonaClient\Model\EntitlementAccess**](../Model/EntitlementAccess.md)|  |
 **auth_user** | [**string**](../Model/.md)|  | [optional]
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


$apiInstance = new PersonaClient\Api\EntitlementsApi(
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

