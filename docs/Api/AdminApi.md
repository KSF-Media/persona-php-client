# PersonaClient\AdminApi

All URIs are relative to *http://http:/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminUuidGet**](AdminApi.md#adminUuidGet) | **GET** /admin/{uuid} | Get user by admin credentials.



## adminUuidGet

> \PersonaClient\Model\User adminUuidGet($uuid, $auth_user, $authorization, $cache_control)

Get user by admin credentials.

Authorization header expects the following format ‘OAuth {token}’

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | 
$auth_user = 'auth_user_example'; // string | 
$authorization = 'authorization_example'; // string | 
$cache_control = 'cache_control_example'; // string | 

try {
    $result = $apiInstance->adminUuidGet($uuid, $auth_user, $authorization, $cache_control);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->adminUuidGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)|  |
 **auth_user** | [**string**](../Model/.md)|  | [optional]
 **authorization** | **string**|  | [optional]
 **cache_control** | **string**|  | [optional]

### Return type

[**\PersonaClient\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

