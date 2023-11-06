# PersonaClient\IdentificationApi

All URIs are relative to *http://http:/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**identificationLoginGet**](IdentificationApi.md#identificationLoginGet) | **GET** /identification/login | Authenticate with OpenID Connect
[**identificationLoginMonitorGet**](IdentificationApi.md#identificationLoginMonitorGet) | **GET** /identification/login/monitor | Get token for off band response login flow monitor
[**identificationLoginReturnGet**](IdentificationApi.md#identificationLoginReturnGet) | **GET** /identification/login/return | Redirect endpoint for OpenID Connect
[**identificationUserStampUuidPost**](IdentificationApi.md#identificationUserStampUuidPost) | **POST** /identification/user/stamp/{uuid} | Query when the strong identification was last updated



## identificationLoginGet

> identificationLoginGet($monitor)

Authenticate with OpenID Connect

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\IdentificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$monitor = 'monitor_example'; // string | 

try {
    $apiInstance->identificationLoginGet($monitor);
} catch (Exception $e) {
    echo 'Exception when calling IdentificationApi->identificationLoginGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **monitor** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## identificationLoginMonitorGet

> identificationLoginMonitorGet()

Get token for off band response login flow monitor

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\IdentificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->identificationLoginMonitorGet();
} catch (Exception $e) {
    echo 'Exception when calling IdentificationApi->identificationLoginMonitorGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## identificationLoginReturnGet

> string identificationLoginReturnGet($code, $state, $cookie, $cookie2)

Redirect endpoint for OpenID Connect

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\IdentificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | 
$state = 'state_example'; // string | 
$cookie = "/path/to/file.txt"; // \SplFileObject | 
$cookie2 = "/path/to/file.txt"; // \SplFileObject | 

try {
    $result = $apiInstance->identificationLoginReturnGet($code, $state, $cookie, $cookie2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentificationApi->identificationLoginReturnGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**|  |
 **state** | **string**|  |
 **cookie** | **\SplFileObject****\SplFileObject**|  |
 **cookie2** | **\SplFileObject****\SplFileObject**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/html;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## identificationUserStampUuidPost

> string identificationUserStampUuidPost($uuid, $auth_user, $authorization)

Query when the strong identification was last updated

Authorization header expects the following format ‘OAuth {token}’

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\IdentificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | 
$auth_user = 'auth_user_example'; // string | 
$authorization = 'authorization_example'; // string | 

try {
    $result = $apiInstance->identificationUserStampUuidPost($uuid, $auth_user, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentificationApi->identificationUserStampUuidPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)|  |
 **auth_user** | [**string**](../Model/.md)|  | [optional]
 **authorization** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

