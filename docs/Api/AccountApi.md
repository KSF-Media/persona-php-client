# PersonaClient\AccountApi

All URIs are relative to *http://http:/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountPasswordForgotPost**](AccountApi.md#accountPasswordForgotPost) | **POST** /account/password/forgot | Request password reset link
[**accountPasswordResetPost**](AccountApi.md#accountPasswordResetPost) | **POST** /account/password/reset | Reset a forgotten password with a token



## accountPasswordForgotPost

> object[] accountPasswordForgotPost($body)

Request password reset link

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
    $result = $apiInstance->accountPasswordForgotPost($body);
    print_r($result);
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

**object[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## accountPasswordResetPost

> object[] accountPasswordResetPost($body)

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
    $result = $apiInstance->accountPasswordResetPost($body);
    print_r($result);
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

**object[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

