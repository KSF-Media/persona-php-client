# OpenAPI\Client\UsersApi

All URIs are relative to *http://http:/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**usersPost**](UsersApi.md#usersPost) | **POST** /users | Create a new user.
[**usersTemporaryPost**](UsersApi.md#usersTemporaryPost) | **POST** /users/temporary | Create a new user with email.
[**usersUuidEntitlementGet**](UsersApi.md#usersUuidEntitlementGet) | **GET** /users/{uuid}/entitlement | Get users entitlements.
[**usersUuidGdprPut**](UsersApi.md#usersUuidGdprPut) | **PUT** /users/{uuid}/gdpr | Updates the GDPR consent settings for a given user.
[**usersUuidGet**](UsersApi.md#usersUuidGet) | **GET** /users/{uuid} | Get user by UUID.
[**usersUuidLegalPut**](UsersApi.md#usersUuidLegalPut) | **PUT** /users/{uuid}/legal | Updates the legal consent settings for a given user.
[**usersUuidPasswordPut**](UsersApi.md#usersUuidPasswordPut) | **PUT** /users/{uuid}/password | Set / Change user password
[**usersUuidPatch**](UsersApi.md#usersUuidPatch) | **PATCH** /users/{uuid} | Update a user
[**usersUuidPaymentsGet**](UsersApi.md#usersUuidPaymentsGet) | **GET** /users/{uuid}/payments | Get user&#39;s subscriptions and payment events
[**usersUuidSubscriptionsSubsnoAddressChangeDelete**](UsersApi.md#usersUuidSubscriptionsSubsnoAddressChangeDelete) | **DELETE** /users/{uuid}/subscriptions/{subsno}/addressChange | Delete temporary address change for subscription
[**usersUuidSubscriptionsSubsnoAddressChangePost**](UsersApi.md#usersUuidSubscriptionsSubsnoAddressChangePost) | **POST** /users/{uuid}/subscriptions/{subsno}/addressChange | Make a temporary address change for a subscription
[**usersUuidSubscriptionsSubsnoPausePost**](UsersApi.md#usersUuidSubscriptionsSubsnoPausePost) | **POST** /users/{uuid}/subscriptions/{subsno}/pause | Pause users subscription
[**usersUuidSubscriptionsSubsnoReclamationPost**](UsersApi.md#usersUuidSubscriptionsSubsnoReclamationPost) | **POST** /users/{uuid}/subscriptions/{subsno}/reclamation | Create a new delivery reclamation for a subscription
[**usersUuidSubscriptionsSubsnoReclamationsReclaimnoGet**](UsersApi.md#usersUuidSubscriptionsSubsnoReclamationsReclaimnoGet) | **GET** /users/{uuid}/subscriptions/{subsno}/reclamations/{reclaimno} | Get a delivery reclamation
[**usersUuidSubscriptionsSubsnoUnpausePost**](UsersApi.md#usersUuidSubscriptionsSubsnoUnpausePost) | **POST** /users/{uuid}/subscriptions/{subsno}/unpause | Pause users subscription



## usersPost

> \OpenAPI\Client\Model\LoginResponse usersPost($body)

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
$body = new \OpenAPI\Client\Model\NewUser(); // \OpenAPI\Client\Model\NewUser | 

try {
    $result = $apiInstance->usersPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\NewUser**](../Model/NewUser.md)|  |

### Return type

[**\OpenAPI\Client\Model\LoginResponse**](../Model/LoginResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersTemporaryPost

> \OpenAPI\Client\Model\LoginResponse usersTemporaryPost($body)

Create a new user with email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\NewTemporaryUser(); // \OpenAPI\Client\Model\NewTemporaryUser | 

try {
    $result = $apiInstance->usersTemporaryPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersTemporaryPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\NewTemporaryUser**](../Model/NewTemporaryUser.md)|  |

### Return type

[**\OpenAPI\Client\Model\LoginResponse**](../Model/LoginResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersUuidEntitlementGet

> string[] usersUuidEntitlementGet($uuid, $auth_user, $authorization, $cache_control)

Get users entitlements.

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
$auth_user = 'auth_user_example'; // string | 
$authorization = 'authorization_example'; // string | 
$cache_control = 'cache_control_example'; // string | 

try {
    $result = $apiInstance->usersUuidEntitlementGet($uuid, $auth_user, $authorization, $cache_control);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUuidEntitlementGet: ', $e->getMessage(), PHP_EOL;
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

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersUuidGdprPut

> \OpenAPI\Client\Model\User usersUuidGdprPut($uuid, $body, $auth_user, $authorization)

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
$body = array(new \OpenAPI\Client\Model\array()); // \OpenAPI\Client\Model\GdprConsent[] | 
$auth_user = 'auth_user_example'; // string | 
$authorization = 'authorization_example'; // string | 

try {
    $result = $apiInstance->usersUuidGdprPut($uuid, $body, $auth_user, $authorization);
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
 **body** | [**\OpenAPI\Client\Model\GdprConsent[]**](../Model/array.md)|  |
 **auth_user** | [**string**](../Model/.md)|  | [optional]
 **authorization** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersUuidGet

> \OpenAPI\Client\Model\User usersUuidGet($uuid, $auth_user, $authorization, $cache_control)

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
$auth_user = 'auth_user_example'; // string | 
$authorization = 'authorization_example'; // string | 
$cache_control = 'cache_control_example'; // string | 

try {
    $result = $apiInstance->usersUuidGet($uuid, $auth_user, $authorization, $cache_control);
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
 **auth_user** | [**string**](../Model/.md)|  | [optional]
 **authorization** | **string**|  | [optional]
 **cache_control** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersUuidLegalPut

> \OpenAPI\Client\Model\User usersUuidLegalPut($uuid, $body, $auth_user, $authorization)

Updates the legal consent settings for a given user.

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
$body = array(new \OpenAPI\Client\Model\array()); // \OpenAPI\Client\Model\LegalConsent[] | 
$auth_user = 'auth_user_example'; // string | 
$authorization = 'authorization_example'; // string | 

try {
    $result = $apiInstance->usersUuidLegalPut($uuid, $body, $auth_user, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUuidLegalPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)|  |
 **body** | [**\OpenAPI\Client\Model\LegalConsent[]**](../Model/array.md)|  |
 **auth_user** | [**string**](../Model/.md)|  | [optional]
 **authorization** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersUuidPasswordPut

> \OpenAPI\Client\Model\User usersUuidPasswordPut($uuid, $body, $auth_user, $authorization)

Set / Change user password

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
$body = new \OpenAPI\Client\Model\UserUpdatePassword(); // \OpenAPI\Client\Model\UserUpdatePassword | 
$auth_user = 'auth_user_example'; // string | 
$authorization = 'authorization_example'; // string | 

try {
    $result = $apiInstance->usersUuidPasswordPut($uuid, $body, $auth_user, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUuidPasswordPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)|  |
 **body** | [**\OpenAPI\Client\Model\UserUpdatePassword**](../Model/UserUpdatePassword.md)|  |
 **auth_user** | [**string**](../Model/.md)|  | [optional]
 **authorization** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersUuidPatch

> \OpenAPI\Client\Model\User usersUuidPatch($uuid, $body, $auth_user, $authorization)

Update a user

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
$body = new \OpenAPI\Client\Model\UserUpdate(); // \OpenAPI\Client\Model\UserUpdate | 
$auth_user = 'auth_user_example'; // string | 
$authorization = 'authorization_example'; // string | 

try {
    $result = $apiInstance->usersUuidPatch($uuid, $body, $auth_user, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUuidPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)|  |
 **body** | [**\OpenAPI\Client\Model\UserUpdate**](../Model/UserUpdate.md)|  |
 **auth_user** | [**string**](../Model/.md)|  | [optional]
 **authorization** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersUuidPaymentsGet

> \OpenAPI\Client\Model\SubscriptionPayments[] usersUuidPaymentsGet($uuid, $auth_user, $authorization)

Get user's subscriptions and payment events

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
$auth_user = 'auth_user_example'; // string | 
$authorization = 'authorization_example'; // string | 

try {
    $result = $apiInstance->usersUuidPaymentsGet($uuid, $auth_user, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUuidPaymentsGet: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\SubscriptionPayments[]**](../Model/SubscriptionPayments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersUuidSubscriptionsSubsnoAddressChangeDelete

> \OpenAPI\Client\Model\Subscription usersUuidSubscriptionsSubsnoAddressChangeDelete($uuid, $subsno, $body, $auth_user, $authorization)

Delete temporary address change for subscription

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
$subsno = 56; // int | 
$body = new \OpenAPI\Client\Model\DeleteTempAddressChangeDates(); // \OpenAPI\Client\Model\DeleteTempAddressChangeDates | 
$auth_user = 'auth_user_example'; // string | 
$authorization = 'authorization_example'; // string | 

try {
    $result = $apiInstance->usersUuidSubscriptionsSubsnoAddressChangeDelete($uuid, $subsno, $body, $auth_user, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUuidSubscriptionsSubsnoAddressChangeDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)|  |
 **subsno** | **int**|  |
 **body** | [**\OpenAPI\Client\Model\DeleteTempAddressChangeDates**](../Model/DeleteTempAddressChangeDates.md)|  |
 **auth_user** | [**string**](../Model/.md)|  | [optional]
 **authorization** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersUuidSubscriptionsSubsnoAddressChangePost

> \OpenAPI\Client\Model\Subscription usersUuidSubscriptionsSubsnoAddressChangePost($uuid, $subsno, $body, $auth_user, $authorization)

Make a temporary address change for a subscription

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
$subsno = 56; // int | 
$body = new \OpenAPI\Client\Model\TemporaryAddressChange(); // \OpenAPI\Client\Model\TemporaryAddressChange | 
$auth_user = 'auth_user_example'; // string | 
$authorization = 'authorization_example'; // string | 

try {
    $result = $apiInstance->usersUuidSubscriptionsSubsnoAddressChangePost($uuid, $subsno, $body, $auth_user, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUuidSubscriptionsSubsnoAddressChangePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)|  |
 **subsno** | **int**|  |
 **body** | [**\OpenAPI\Client\Model\TemporaryAddressChange**](../Model/TemporaryAddressChange.md)|  |
 **auth_user** | [**string**](../Model/.md)|  | [optional]
 **authorization** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersUuidSubscriptionsSubsnoPausePost

> \OpenAPI\Client\Model\Subscription usersUuidSubscriptionsSubsnoPausePost($uuid, $subsno, $body, $auth_user, $authorization)

Pause users subscription

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
$subsno = 56; // int | 
$body = new \OpenAPI\Client\Model\SubscriptionPauseDates(); // \OpenAPI\Client\Model\SubscriptionPauseDates | 
$auth_user = 'auth_user_example'; // string | 
$authorization = 'authorization_example'; // string | 

try {
    $result = $apiInstance->usersUuidSubscriptionsSubsnoPausePost($uuid, $subsno, $body, $auth_user, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUuidSubscriptionsSubsnoPausePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)|  |
 **subsno** | **int**|  |
 **body** | [**\OpenAPI\Client\Model\SubscriptionPauseDates**](../Model/SubscriptionPauseDates.md)|  |
 **auth_user** | [**string**](../Model/.md)|  | [optional]
 **authorization** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersUuidSubscriptionsSubsnoReclamationPost

> \OpenAPI\Client\Model\DeliveryReclamation usersUuidSubscriptionsSubsnoReclamationPost($uuid, $subsno, $body, $auth_user, $authorization)

Create a new delivery reclamation for a subscription

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
$subsno = 56; // int | 
$body = new \OpenAPI\Client\Model\NewDeliveryReclamation(); // \OpenAPI\Client\Model\NewDeliveryReclamation | 
$auth_user = 'auth_user_example'; // string | 
$authorization = 'authorization_example'; // string | 

try {
    $result = $apiInstance->usersUuidSubscriptionsSubsnoReclamationPost($uuid, $subsno, $body, $auth_user, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUuidSubscriptionsSubsnoReclamationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)|  |
 **subsno** | **int**|  |
 **body** | [**\OpenAPI\Client\Model\NewDeliveryReclamation**](../Model/NewDeliveryReclamation.md)|  |
 **auth_user** | [**string**](../Model/.md)|  | [optional]
 **authorization** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\DeliveryReclamation**](../Model/DeliveryReclamation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersUuidSubscriptionsSubsnoReclamationsReclaimnoGet

> \OpenAPI\Client\Model\DeliveryReclamation usersUuidSubscriptionsSubsnoReclamationsReclaimnoGet($uuid, $subsno, $reclaimno, $auth_user, $authorization)

Get a delivery reclamation

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
$subsno = 56; // int | 
$reclaimno = 56; // int | 
$auth_user = 'auth_user_example'; // string | 
$authorization = 'authorization_example'; // string | 

try {
    $result = $apiInstance->usersUuidSubscriptionsSubsnoReclamationsReclaimnoGet($uuid, $subsno, $reclaimno, $auth_user, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUuidSubscriptionsSubsnoReclamationsReclaimnoGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)|  |
 **subsno** | **int**|  |
 **reclaimno** | **int**|  |
 **auth_user** | [**string**](../Model/.md)|  | [optional]
 **authorization** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\DeliveryReclamation**](../Model/DeliveryReclamation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersUuidSubscriptionsSubsnoUnpausePost

> \OpenAPI\Client\Model\Subscription usersUuidSubscriptionsSubsnoUnpausePost($uuid, $subsno, $auth_user, $authorization)

Pause users subscription

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
$subsno = 56; // int | 
$auth_user = 'auth_user_example'; // string | 
$authorization = 'authorization_example'; // string | 

try {
    $result = $apiInstance->usersUuidSubscriptionsSubsnoUnpausePost($uuid, $subsno, $auth_user, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUuidSubscriptionsSubsnoUnpausePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)|  |
 **subsno** | **int**|  |
 **auth_user** | [**string**](../Model/.md)|  | [optional]
 **authorization** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

