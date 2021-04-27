# PersonaClient\AdminApi

All URIs are relative to *http://http:/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminSearchPost**](AdminApi.md#adminSearchPost) | **POST** /admin/search | Search for users



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

