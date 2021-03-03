# PersonaClient\AccountApi

All URIs are relative to *http://http:/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountCodeForTokenPost**](AccountApi.md#accountCodeForTokenPost) | **POST** /account/codeForToken | Get a password reset token
[**accountForgotPassPost**](AccountApi.md#accountForgotPassPost) | **POST** /account/forgotPass | Forgot Password
[**accountResetForgottenPasswordPost**](AccountApi.md#accountResetForgottenPasswordPost) | **POST** /account/resetForgottenPassword | Reset a forgotten password with a token



## accountCodeForTokenPost

> \PersonaClient\Model\TokenResponse accountCodeForTokenPost($body)

Get a password reset token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PersonaClient\Model\CodeForTokenData(); // \PersonaClient\Model\CodeForTokenData | 

try {
    $result = $apiInstance->accountCodeForTokenPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountCodeForTokenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PersonaClient\Model\CodeForTokenData**](../Model/CodeForTokenData.md)|  |

### Return type

[**\PersonaClient\Model\TokenResponse**](../Model/TokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## accountForgotPassPost

> object[] accountForgotPassPost($body)

Forgot Password

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PersonaClient\Model\ForgotPasswordData(); // \PersonaClient\Model\ForgotPasswordData | 

try {
    $result = $apiInstance->accountForgotPassPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountForgotPassPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PersonaClient\Model\ForgotPasswordData**](../Model/ForgotPasswordData.md)|  |

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


## accountResetForgottenPasswordPost

> object[] accountResetForgottenPasswordPost($body)

Reset a forgotten password with a token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PersonaClient\Model\UpdatePasswordData(); // \PersonaClient\Model\UpdatePasswordData | 

try {
    $result = $apiInstance->accountResetForgottenPasswordPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountResetForgottenPasswordPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PersonaClient\Model\UpdatePasswordData**](../Model/UpdatePasswordData.md)|  |

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

