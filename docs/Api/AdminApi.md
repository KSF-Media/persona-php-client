# PersonaClient\AdminApi

All URIs are relative to *http://http:/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminSearchPost**](AdminApi.md#adminSearchPost) | **POST** /admin/search | Search for users
[**adminTransferPassiveSubscribersListidPost**](AdminApi.md#adminTransferPassiveSubscribersListidPost) | **POST** /admin/transfer-passive-subscribers/{listid} | Transfers passive customers from Kayak to Mailchimp
[**adminUserPost**](AdminApi.md#adminUserPost) | **POST** /admin/user | Create a new user with admin options.



## adminSearchPost

> \PersonaClient\Model\SearchResult[] adminSearchPost($body, $auth_user, $authorization)

Search for users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PersonaClient\Model\SearchQuery(); // \PersonaClient\Model\SearchQuery | 
$auth_user = 'auth_user_example'; // string | 
$authorization = 'authorization_example'; // string | 

try {
    $result = $apiInstance->adminSearchPost($body, $auth_user, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->adminSearchPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PersonaClient\Model\SearchQuery**](../Model/SearchQuery.md)|  |
 **auth_user** | [**string**](../Model/.md)|  | [optional]
 **authorization** | **string**|  | [optional]

### Return type

[**\PersonaClient\Model\SearchResult[]**](../Model/SearchResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adminTransferPassiveSubscribersListidPost

> object adminTransferPassiveSubscribersListidPost($listid, $auth_user, $authorization)

Transfers passive customers from Kayak to Mailchimp

Passive subscribers/members/customers are users who don't have active entitlements and haven't opted out from email marketing. For the given list (audience) ID, this endpoint transfers the list of passive subscribers from Kayak to Mailchimp (via Faro).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$listid = 'listid_example'; // string | 
$auth_user = 'auth_user_example'; // string | 
$authorization = 'authorization_example'; // string | 

try {
    $result = $apiInstance->adminTransferPassiveSubscribersListidPost($listid, $auth_user, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->adminTransferPassiveSubscribersListidPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listid** | **string**|  |
 **auth_user** | [**string**](../Model/.md)|  | [optional]
 **authorization** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adminUserPost

> \PersonaClient\Model\LoginResponse adminUserPost($body, $auth_user, $authorization)

Create a new user with admin options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PersonaClient\Model\AdminNewUser(); // \PersonaClient\Model\AdminNewUser | 
$auth_user = 'auth_user_example'; // string | 
$authorization = 'authorization_example'; // string | 

try {
    $result = $apiInstance->adminUserPost($body, $auth_user, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->adminUserPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PersonaClient\Model\AdminNewUser**](../Model/AdminNewUser.md)|  |
 **auth_user** | [**string**](../Model/.md)|  | [optional]
 **authorization** | **string**|  | [optional]

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

