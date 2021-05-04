# PersonaClient\UsersApi

All URIs are relative to *http://http:/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**usersAdminPost**](UsersApi.md#usersAdminPost) | **POST** /users/admin | Create a new user with admin options.
[**usersPost**](UsersApi.md#usersPost) | **POST** /users | Create a new user.
[**usersSearchGet**](UsersApi.md#usersSearchGet) | **GET** /users/search | Search for users
[**usersTemporaryPost**](UsersApi.md#usersTemporaryPost) | **POST** /users/temporary | Create a new user with email.
[**usersUuidEntitlementGet**](UsersApi.md#usersUuidEntitlementGet) | **GET** /users/{uuid}/entitlement | Get users entitlements.
[**usersUuidGdprPut**](UsersApi.md#usersUuidGdprPut) | **PUT** /users/{uuid}/gdpr | Updates the GDPR consent settings for a given user.
[**usersUuidGet**](UsersApi.md#usersUuidGet) | **GET** /users/{uuid} | Get user by UUID.
[**usersUuidLegalPut**](UsersApi.md#usersUuidLegalPut) | **PUT** /users/{uuid}/legal | Updates the legal consent settings for a given user.
[**usersUuidPasswordPut**](UsersApi.md#usersUuidPasswordPut) | **PUT** /users/{uuid}/password | Set / Change user password
[**usersUuidPatch**](UsersApi.md#usersUuidPatch) | **PATCH** /users/{uuid} | Update a user
[**usersUuidPaymentsGet**](UsersApi.md#usersUuidPaymentsGet) | **GET** /users/{uuid}/payments | Get user&#39;s subscriptions and payment events
[**usersUuidSubscriptionsSubsnoAddressChangeDelete**](UsersApi.md#usersUuidSubscriptionsSubsnoAddressChangeDelete) | **DELETE** /users/{uuid}/subscriptions/{subsno}/addressChange | Delete temporary address change for subscription
[**usersUuidSubscriptionsSubsnoAddressChangePatch**](UsersApi.md#usersUuidSubscriptionsSubsnoAddressChangePatch) | **PATCH** /users/{uuid}/subscriptions/{subsno}/addressChange | Edit temporary address change dates of a subscription
[**usersUuidSubscriptionsSubsnoAddressChangePost**](UsersApi.md#usersUuidSubscriptionsSubsnoAddressChangePost) | **POST** /users/{uuid}/subscriptions/{subsno}/addressChange | Make a temporary address change for a subscription
[**usersUuidSubscriptionsSubsnoCancelPut**](UsersApi.md#usersUuidSubscriptionsSubsnoCancelPut) | **PUT** /users/{uuid}/subscriptions/{subsno}/cancel | Cancels user subscription
[**usersUuidSubscriptionsSubsnoPausePatch**](UsersApi.md#usersUuidSubscriptionsSubsnoPausePatch) | **PATCH** /users/{uuid}/subscriptions/{subsno}/pause | Edit pause duration
[**usersUuidSubscriptionsSubsnoPausePost**](UsersApi.md#usersUuidSubscriptionsSubsnoPausePost) | **POST** /users/{uuid}/subscriptions/{subsno}/pause | Pause users subscription
[**usersUuidSubscriptionsSubsnoReclamationPost**](UsersApi.md#usersUuidSubscriptionsSubsnoReclamationPost) | **POST** /users/{uuid}/subscriptions/{subsno}/reclamation | Create a new delivery reclamation for a subscription
[**usersUuidSubscriptionsSubsnoReclamationsReclaimnoGet**](UsersApi.md#usersUuidSubscriptionsSubsnoReclamationsReclaimnoGet) | **GET** /users/{uuid}/subscriptions/{subsno}/reclamations/{reclaimno} | Get a delivery reclamation
[**usersUuidSubscriptionsSubsnoUnpausePost**](UsersApi.md#usersUuidSubscriptionsSubsnoUnpausePost) | **POST** /users/{uuid}/subscriptions/{subsno}/unpause | Pause users subscription



## usersAdminPost

> \PersonaClient\Model\LoginResponse usersAdminPost($body, $auth_user, $authorization)

Create a new user with admin options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PersonaClient\Model\AdminNewUser(); // \PersonaClient\Model\AdminNewUser | 
$auth_user = 'auth_user_example'; // string | 
$authorization = 'authorization_example'; // string | 

try {
    $result = $apiInstance->usersAdminPost($body, $auth_user, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersAdminPost: ', $e->getMessage(), PHP_EOL;
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


## usersPost

> \PersonaClient\Model\LoginResponse usersPost($body)

Create a new user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PersonaClient\Model\NewUser(); // \PersonaClient\Model\NewUser | 

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
 **body** | [**\PersonaClient\Model\NewUser**](../Model/NewUser.md)|  |

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


## usersSearchGet

> \PersonaClient\Model\User[] usersSearchGet($query, $auth_user, $authorization)

Search for users

deprecated

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$query = 'query_example'; // string | 
$auth_user = 'auth_user_example'; // string | 
$authorization = 'authorization_example'; // string | 

try {
    $result = $apiInstance->usersSearchGet($query, $auth_user, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersSearchGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**|  |
 **auth_user** | [**string**](../Model/.md)|  | [optional]
 **authorization** | **string**|  | [optional]

### Return type

[**\PersonaClient\Model\User[]**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersTemporaryPost

> \PersonaClient\Model\LoginResponse usersTemporaryPost($body)

Create a new user with email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PersonaClient\Model\NewTemporaryUser(); // \PersonaClient\Model\NewTemporaryUser | 

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
 **body** | [**\PersonaClient\Model\NewTemporaryUser**](../Model/NewTemporaryUser.md)|  |

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


## usersUuidEntitlementGet

> string[] usersUuidEntitlementGet($uuid, $auth_user, $authorization, $cache_control)

Get users entitlements.

Authorization header expects the following format ‘OAuth {token}’

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\UsersApi(
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

> \PersonaClient\Model\User usersUuidGdprPut($uuid, $body, $auth_user, $authorization)

Updates the GDPR consent settings for a given user.

Authorization header expects the following format ‘OAuth {token}’

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | 
$body = array(new \PersonaClient\Model\array()); // \PersonaClient\Model\GdprConsent[] | 
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
 **body** | [**\PersonaClient\Model\GdprConsent[]**](../Model/array.md)|  |
 **auth_user** | [**string**](../Model/.md)|  | [optional]
 **authorization** | **string**|  | [optional]

### Return type

[**\PersonaClient\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersUuidGet

> \PersonaClient\Model\User usersUuidGet($uuid, $auth_user, $authorization, $cache_control)

Get user by UUID.

Authorization header expects the following format ‘OAuth {token}’

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\UsersApi(
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

[**\PersonaClient\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersUuidLegalPut

> \PersonaClient\Model\User usersUuidLegalPut($uuid, $body, $auth_user, $authorization)

Updates the legal consent settings for a given user.

Authorization header expects the following format ‘OAuth {token}’

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | 
$body = array(new \PersonaClient\Model\array()); // \PersonaClient\Model\LegalConsent[] | 
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
 **body** | [**\PersonaClient\Model\LegalConsent[]**](../Model/array.md)|  |
 **auth_user** | [**string**](../Model/.md)|  | [optional]
 **authorization** | **string**|  | [optional]

### Return type

[**\PersonaClient\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersUuidPasswordPut

> \PersonaClient\Model\User usersUuidPasswordPut($uuid, $body, $auth_user, $authorization)

Set / Change user password

Authorization header expects the following format ‘OAuth {token}’

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | 
$body = new \PersonaClient\Model\UserUpdatePassword(); // \PersonaClient\Model\UserUpdatePassword | 
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
 **body** | [**\PersonaClient\Model\UserUpdatePassword**](../Model/UserUpdatePassword.md)|  |
 **auth_user** | [**string**](../Model/.md)|  | [optional]
 **authorization** | **string**|  | [optional]

### Return type

[**\PersonaClient\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersUuidPatch

> \PersonaClient\Model\User usersUuidPatch($uuid, $body, $auth_user, $authorization)

Update a user

Authorization header expects the following format ‘OAuth {token}’

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | 
$body = new \PersonaClient\Model\UserUpdate(); // \PersonaClient\Model\UserUpdate | 
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
 **body** | [**\PersonaClient\Model\UserUpdate**](../Model/UserUpdate.md)|  |
 **auth_user** | [**string**](../Model/.md)|  | [optional]
 **authorization** | **string**|  | [optional]

### Return type

[**\PersonaClient\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersUuidPaymentsGet

> \PersonaClient\Model\SubscriptionPayments[] usersUuidPaymentsGet($uuid, $auth_user, $authorization)

Get user's subscriptions and payment events

Authorization header expects the following format ‘OAuth {token}’

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\UsersApi(
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

[**\PersonaClient\Model\SubscriptionPayments[]**](../Model/SubscriptionPayments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersUuidSubscriptionsSubsnoAddressChangeDelete

> \PersonaClient\Model\Subscription usersUuidSubscriptionsSubsnoAddressChangeDelete($uuid, $subsno, $body, $auth_user, $authorization)

Delete temporary address change for subscription

Authorization header expects the following format ‘OAuth {token}’

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | 
$subsno = 56; // int | 
$body = new \PersonaClient\Model\DeleteTempAddressChangeDates(); // \PersonaClient\Model\DeleteTempAddressChangeDates | 
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
 **body** | [**\PersonaClient\Model\DeleteTempAddressChangeDates**](../Model/DeleteTempAddressChangeDates.md)|  |
 **auth_user** | [**string**](../Model/.md)|  | [optional]
 **authorization** | **string**|  | [optional]

### Return type

[**\PersonaClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersUuidSubscriptionsSubsnoAddressChangePatch

> \PersonaClient\Model\Subscription usersUuidSubscriptionsSubsnoAddressChangePatch($uuid, $subsno, $body, $auth_user, $authorization)

Edit temporary address change dates of a subscription

Authorization header expects the following format ‘OAuth {token}’

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | 
$subsno = 56; // int | 
$body = new \PersonaClient\Model\TemporaryAddressChangeDates(); // \PersonaClient\Model\TemporaryAddressChangeDates | 
$auth_user = 'auth_user_example'; // string | 
$authorization = 'authorization_example'; // string | 

try {
    $result = $apiInstance->usersUuidSubscriptionsSubsnoAddressChangePatch($uuid, $subsno, $body, $auth_user, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUuidSubscriptionsSubsnoAddressChangePatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)|  |
 **subsno** | **int**|  |
 **body** | [**\PersonaClient\Model\TemporaryAddressChangeDates**](../Model/TemporaryAddressChangeDates.md)|  |
 **auth_user** | [**string**](../Model/.md)|  | [optional]
 **authorization** | **string**|  | [optional]

### Return type

[**\PersonaClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersUuidSubscriptionsSubsnoAddressChangePost

> \PersonaClient\Model\Subscription usersUuidSubscriptionsSubsnoAddressChangePost($uuid, $subsno, $body, $auth_user, $authorization)

Make a temporary address change for a subscription

Authorization header expects the following format ‘OAuth {token}’

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | 
$subsno = 56; // int | 
$body = new \PersonaClient\Model\TemporaryAddressChange(); // \PersonaClient\Model\TemporaryAddressChange | 
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
 **body** | [**\PersonaClient\Model\TemporaryAddressChange**](../Model/TemporaryAddressChange.md)|  |
 **auth_user** | [**string**](../Model/.md)|  | [optional]
 **authorization** | **string**|  | [optional]

### Return type

[**\PersonaClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersUuidSubscriptionsSubsnoCancelPut

> \PersonaClient\Model\Subscription usersUuidSubscriptionsSubsnoCancelPut($uuid, $subsno, $body, $auth_user, $authorization)

Cancels user subscription

The subscription continues to be valid until the end of the billing period. Authorization header expects the following format ‘OAuth {token}’

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | 
$subsno = 56; // int | 
$body = new \PersonaClient\Model\CancelSubscriptionReason(); // \PersonaClient\Model\CancelSubscriptionReason | 
$auth_user = 'auth_user_example'; // string | 
$authorization = 'authorization_example'; // string | 

try {
    $result = $apiInstance->usersUuidSubscriptionsSubsnoCancelPut($uuid, $subsno, $body, $auth_user, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUuidSubscriptionsSubsnoCancelPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)|  |
 **subsno** | **int**|  |
 **body** | [**\PersonaClient\Model\CancelSubscriptionReason**](../Model/CancelSubscriptionReason.md)|  |
 **auth_user** | [**string**](../Model/.md)|  | [optional]
 **authorization** | **string**|  | [optional]

### Return type

[**\PersonaClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersUuidSubscriptionsSubsnoPausePatch

> \PersonaClient\Model\Subscription usersUuidSubscriptionsSubsnoPausePatch($uuid, $subsno, $body, $auth_user, $authorization)

Edit pause duration

Authorization header expects the following format ‘OAuth {token}’

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | 
$subsno = 56; // int | 
$body = new \PersonaClient\Model\SubscriptionPauseEdit(); // \PersonaClient\Model\SubscriptionPauseEdit | 
$auth_user = 'auth_user_example'; // string | 
$authorization = 'authorization_example'; // string | 

try {
    $result = $apiInstance->usersUuidSubscriptionsSubsnoPausePatch($uuid, $subsno, $body, $auth_user, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUuidSubscriptionsSubsnoPausePatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)|  |
 **subsno** | **int**|  |
 **body** | [**\PersonaClient\Model\SubscriptionPauseEdit**](../Model/SubscriptionPauseEdit.md)|  |
 **auth_user** | [**string**](../Model/.md)|  | [optional]
 **authorization** | **string**|  | [optional]

### Return type

[**\PersonaClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersUuidSubscriptionsSubsnoPausePost

> \PersonaClient\Model\Subscription usersUuidSubscriptionsSubsnoPausePost($uuid, $subsno, $body, $auth_user, $authorization)

Pause users subscription

Authorization header expects the following format ‘OAuth {token}’

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | 
$subsno = 56; // int | 
$body = new \PersonaClient\Model\SubscriptionPauseDates(); // \PersonaClient\Model\SubscriptionPauseDates | 
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
 **body** | [**\PersonaClient\Model\SubscriptionPauseDates**](../Model/SubscriptionPauseDates.md)|  |
 **auth_user** | [**string**](../Model/.md)|  | [optional]
 **authorization** | **string**|  | [optional]

### Return type

[**\PersonaClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersUuidSubscriptionsSubsnoReclamationPost

> \PersonaClient\Model\DeliveryReclamation usersUuidSubscriptionsSubsnoReclamationPost($uuid, $subsno, $body, $auth_user, $authorization)

Create a new delivery reclamation for a subscription

Authorization header expects the following format ‘OAuth {token}’

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | 
$subsno = 56; // int | 
$body = new \PersonaClient\Model\NewDeliveryReclamation(); // \PersonaClient\Model\NewDeliveryReclamation | 
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
 **body** | [**\PersonaClient\Model\NewDeliveryReclamation**](../Model/NewDeliveryReclamation.md)|  |
 **auth_user** | [**string**](../Model/.md)|  | [optional]
 **authorization** | **string**|  | [optional]

### Return type

[**\PersonaClient\Model\DeliveryReclamation**](../Model/DeliveryReclamation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json;charset=utf-8
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersUuidSubscriptionsSubsnoReclamationsReclaimnoGet

> \PersonaClient\Model\DeliveryReclamation usersUuidSubscriptionsSubsnoReclamationsReclaimnoGet($uuid, $subsno, $reclaimno, $auth_user, $authorization)

Get a delivery reclamation

Authorization header expects the following format ‘OAuth {token}’

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\UsersApi(
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

[**\PersonaClient\Model\DeliveryReclamation**](../Model/DeliveryReclamation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersUuidSubscriptionsSubsnoUnpausePost

> \PersonaClient\Model\Subscription usersUuidSubscriptionsSubsnoUnpausePost($uuid, $subsno, $auth_user, $authorization)

Pause users subscription

Authorization header expects the following format ‘OAuth {token}’

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PersonaClient\Api\UsersApi(
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

[**\PersonaClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

