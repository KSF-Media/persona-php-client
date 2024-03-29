# PersonaClient\LoginApi

All URIs are relative to *http://http:/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**loginIpGet**](LoginApi.md#loginIpGet) | **GET** /login/ip | Login with IP
[**loginPost**](LoginApi.md#loginPost) | **POST** /login | Login with email and password
[**loginSsoPost**](LoginApi.md#loginSsoPost) | **POST** /login/sso | Disabled. Always returns 403.
[**loginUuidDelete**](LoginApi.md#loginUuidDelete) | **DELETE** /login/{uuid} | Logout



## loginIpGet

> \PersonaClient\Model\LoginResponse loginIpGet($x_real_ip, $paper)

Login with IP

Returns auth & token for customers with IP based entitlement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_real_ip = 'x_real_ip_example'; // string | 
$paper = 'paper_example'; // string | 

try {
    $result = $apiInstance->loginIpGet($x_real_ip, $paper);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->loginIpGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_real_ip** | **string**|  |
 **paper** | **string**|  |

### Return type

[**\PersonaClient\Model\LoginResponse**](../Model/LoginResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## loginPost

> \PersonaClient\Model\LoginResponse loginPost($body)

Login with email and password

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PersonaClient\Model\LoginData(); // \PersonaClient\Model\LoginData | 

try {
    $result = $apiInstance->loginPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->loginPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PersonaClient\Model\LoginData**](../Model/LoginData.md)|  |

### Return type

[**\PersonaClient\Model\LoginResponse**](../Model/LoginResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## loginSsoPost

> \PersonaClient\Model\LoginResponse loginSsoPost($body)

Disabled. Always returns 403.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PersonaClient\Model\LoginDataSSO(); // \PersonaClient\Model\LoginDataSSO | 

try {
    $result = $apiInstance->loginSsoPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->loginSsoPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PersonaClient\Model\LoginDataSSO**](../Model/LoginDataSSO.md)|  |

### Return type

[**\PersonaClient\Model\LoginResponse**](../Model/LoginResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## loginUuidDelete

> object[] loginUuidDelete($uuid, $authorization, $everywhere)

Logout

Authorization header expects the following format ‘OAuth {token}’

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | 
$authorization = 'authorization_example'; // string | 
$everywhere = false; // bool | 

try {
    $result = $apiInstance->loginUuidDelete($uuid, $authorization, $everywhere);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->loginUuidDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)|  |
 **authorization** | **string**|  | [optional]
 **everywhere** | **bool**|  | [optional] [default to false]

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

