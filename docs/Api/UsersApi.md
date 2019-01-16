# OpenAPI\Client\UsersApi

All URIs are relative to *http://http:/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**usersPost**](UsersApi.md#usersPost) | **POST** /users | Create a new user.
[**usersUuidGdprPut**](UsersApi.md#usersUuidGdprPut) | **PUT** /users/{uuid}/gdpr | Updates the GDPR consent settings for a given user.
[**usersUuidGet**](UsersApi.md#usersUuidGet) | **GET** /users/{uuid} | Get user by UUID.


# **usersPost**
> \OpenAPI\Client\Model\LoginResponse usersPost($new_user)

Create a new user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$new_user = new \OpenAPI\Client\Model\NewUser(); // \OpenAPI\Client\Model\NewUser | 

try {
    $result = $apiInstance->usersPost($new_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_user** | [**\OpenAPI\Client\Model\NewUser**](../Model/NewUser.md)|  |

### Return type

[**\OpenAPI\Client\Model\LoginResponse**](../Model/LoginResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersUuidGdprPut**
> object[] usersUuidGdprPut($uuid, $gdpr_consent, $authorization)

Updates the GDPR consent settings for a given user.

Authorization header expects the following format ‘OAuth {token}’

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | 
$gdpr_consent = array(new \OpenAPI\Client\Model\array()); // \OpenAPI\Client\Model\GdprConsent[] | 
$authorization = 'authorization_example'; // string | 

try {
    $result = $apiInstance->usersUuidGdprPut($uuid, $gdpr_consent, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUuidGdprPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)|  |
 **gdpr_consent** | [**\OpenAPI\Client\Model\GdprConsent[]**](../Model/array.md)|  |
 **authorization** | **string**|  | [optional]

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersUuidGet**
> \OpenAPI\Client\Model\User usersUuidGet($uuid, $authorization, $cache_control)

Get user by UUID.

Authorization header expects the following format ‘OAuth {token}’

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | 
$authorization = 'authorization_example'; // string | 
$cache_control = 'cache_control_example'; // string | 

try {
    $result = $apiInstance->usersUuidGet($uuid, $authorization, $cache_control);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUuidGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)|  |
 **authorization** | **string**|  | [optional]
 **cache_control** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

