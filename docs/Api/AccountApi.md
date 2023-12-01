# PersonaClient\AccountApi

All URIs are relative to *http://http:/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountPasswordCheckTokenPost**](AccountApi.md#accountPasswordCheckTokenPost) | **POST** /account/password/check-token | Validate password reset token
[**accountPasswordForgotPost**](AccountApi.md#accountPasswordForgotPost) | **POST** /account/password/forgot | Request password reset link
[**accountPasswordResetPost**](AccountApi.md#accountPasswordResetPost) | **POST** /account/password/reset | Reset a forgotten password with a token



## accountPasswordCheckTokenPost

> accountPasswordCheckTokenPost($body)

Validate password reset token

The second step in the forgotten password reset procedure is to ensure that the password reset token is still valid. Each token can be used at most once and it is valid for a limited duration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = 'body_example'; // string | 

try {
    $apiInstance->accountPasswordCheckTokenPost($body);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountPasswordCheckTokenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## accountPasswordForgotPost

> accountPasswordForgotPost($body)

Request password reset link

This is the starting point of the forgotten password recovery process. It sends a password reset link with a pasword reset token to the given user's email address if such user and email address exist.

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
    $apiInstance->accountPasswordForgotPost($body);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountPasswordForgotPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PersonaClient\Model\ForgotPasswordData**](../Model/ForgotPasswordData.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## accountPasswordResetPost

> accountPasswordResetPost($body)

Reset a forgotten password with a token

The final step of the forgotten password reset procedure performs password reset with a token obtained from the email message sent by the POST /password/forgot endpoint and the new password and its confirmation.

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
    $apiInstance->accountPasswordResetPost($body);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountPasswordResetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PersonaClient\Model\UpdatePasswordData**](../Model/UpdatePasswordData.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

