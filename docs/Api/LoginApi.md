# OpenAPI\Client\LoginApi

All URIs are relative to *http://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**loginPost**](LoginApi.md#loginPost) | **POST** /login | Login with email and password
[**loginSomePost**](LoginApi.md#loginSomePost) | **POST** /login/some | Login with social media
[**loginSsoPost**](LoginApi.md#loginSsoPost) | **POST** /login/sso | Login with the AccessToken given by the SSO auth


# **loginPost**
> \OpenAPI\Client\Model\LoginResponse loginPost($login_data)

Login with email and password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$login_data = new \OpenAPI\Client\Model\LoginData(); // \OpenAPI\Client\Model\LoginData | 

try {
    $result = $apiInstance->loginPost($login_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->loginPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login_data** | [**\OpenAPI\Client\Model\LoginData**](../Model/LoginData.md)|  |

### Return type

[**\OpenAPI\Client\Model\LoginResponse**](../Model/LoginResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loginSomePost**
> \OpenAPI\Client\Model\LoginResponse loginSomePost($login_data_so_me)

Login with social media

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$login_data_so_me = new \OpenAPI\Client\Model\LoginDataSoMe(); // \OpenAPI\Client\Model\LoginDataSoMe | 

try {
    $result = $apiInstance->loginSomePost($login_data_so_me);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->loginSomePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login_data_so_me** | [**\OpenAPI\Client\Model\LoginDataSoMe**](../Model/LoginDataSoMe.md)|  |

### Return type

[**\OpenAPI\Client\Model\LoginResponse**](../Model/LoginResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loginSsoPost**
> \OpenAPI\Client\Model\LoginResponse loginSsoPost($login_data_sso)

Login with the AccessToken given by the SSO auth

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$login_data_sso = new \OpenAPI\Client\Model\LoginDataSSO(); // \OpenAPI\Client\Model\LoginDataSSO | 

try {
    $result = $apiInstance->loginSsoPost($login_data_sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->loginSsoPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login_data_sso** | [**\OpenAPI\Client\Model\LoginDataSSO**](../Model/LoginDataSSO.md)|  |

### Return type

[**\OpenAPI\Client\Model\LoginResponse**](../Model/LoginResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

