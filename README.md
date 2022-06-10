# persona

KSF Media unified login service

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 1.3.0
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/KSF-Media/persona-php-client.git"
    }
  ],
  "require": {
    "KSF-Media/persona-php-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/persona/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PersonaClient\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 'email_example'; // string | 
$redir = True; // bool | 

try {
    $result = $apiInstance->accountPasswordForgotGet($email, $redir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountPasswordForgotGet: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *http://http:/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountApi* | [**accountPasswordForgotGet**](docs/Api/AccountApi.md#accountpasswordforgotget) | **GET** /account/password/forgot | Request password reset link
*AccountApi* | [**accountPasswordForgotPost**](docs/Api/AccountApi.md#accountpasswordforgotpost) | **POST** /account/password/forgot | Request password reset link
*AccountApi* | [**accountPasswordResetPost**](docs/Api/AccountApi.md#accountpasswordresetpost) | **POST** /account/password/reset | Reset a forgotten password with a token
*AdminApi* | [**adminSearchPost**](docs/Api/AdminApi.md#adminsearchpost) | **POST** /admin/search | Search for users
*AdminApi* | [**adminUserPost**](docs/Api/AdminApi.md#adminuserpost) | **POST** /admin/user | Create a new user with admin options.
*EntitlementsApi* | [**entitlementsAllowDelete**](docs/Api/EntitlementsApi.md#entitlementsallowdelete) | **DELETE** /entitlements/allow | Remove an entitlement
*EntitlementsApi* | [**entitlementsAllowGet**](docs/Api/EntitlementsApi.md#entitlementsallowget) | **GET** /entitlements/allow | Check if global entitlements are enabled
*EntitlementsApi* | [**entitlementsAllowPost**](docs/Api/EntitlementsApi.md#entitlementsallowpost) | **POST** /entitlements/allow | Add an entitlement for all users
*EntitlementsApi* | [**entitlementsAllowUuidPost**](docs/Api/EntitlementsApi.md#entitlementsallowuuidpost) | **POST** /entitlements/allow/{uuid} | Grant product access to a customer
*EntitlementsApi* | [**entitlementsGet**](docs/Api/EntitlementsApi.md#entitlementsget) | **GET** /entitlements | List all entitlements
*LoginApi* | [**loginIpGet**](docs/Api/LoginApi.md#loginipget) | **GET** /login/ip | Login with IP
*LoginApi* | [**loginPost**](docs/Api/LoginApi.md#loginpost) | **POST** /login | Login with email and password
*LoginApi* | [**loginSomePost**](docs/Api/LoginApi.md#loginsomepost) | **POST** /login/some | Login with social media
*LoginApi* | [**loginSsoPost**](docs/Api/LoginApi.md#loginssopost) | **POST** /login/sso | Login with the AccessToken given by the SSO auth
*LoginApi* | [**loginUuidDelete**](docs/Api/LoginApi.md#loginuuiddelete) | **DELETE** /login/{uuid} | Logout
*UsersApi* | [**usersPost**](docs/Api/UsersApi.md#userspost) | **POST** /users | Create a new user.
*UsersApi* | [**usersTemporaryPost**](docs/Api/UsersApi.md#userstemporarypost) | **POST** /users/temporary | Create a new user with email.
*UsersApi* | [**usersUuidEntitlementGet**](docs/Api/UsersApi.md#usersuuidentitlementget) | **GET** /users/{uuid}/entitlement | Get users entitlements.
*UsersApi* | [**usersUuidGdprPut**](docs/Api/UsersApi.md#usersuuidgdprput) | **PUT** /users/{uuid}/gdpr | Updates the GDPR consent settings for a given user.
*UsersApi* | [**usersUuidGet**](docs/Api/UsersApi.md#usersuuidget) | **GET** /users/{uuid} | Get user by UUID.
*UsersApi* | [**usersUuidLegalPut**](docs/Api/UsersApi.md#usersuuidlegalput) | **PUT** /users/{uuid}/legal | Updates the legal consent settings for a given user.
*UsersApi* | [**usersUuidNewslettersGet**](docs/Api/UsersApi.md#usersuuidnewslettersget) | **GET** /users/{uuid}/newsletters | Get newsletter subscriptions
*UsersApi* | [**usersUuidNewslettersPut**](docs/Api/UsersApi.md#usersuuidnewslettersput) | **PUT** /users/{uuid}/newsletters | Update newsletter subscriptions
*UsersApi* | [**usersUuidPasswordPut**](docs/Api/UsersApi.md#usersuuidpasswordput) | **PUT** /users/{uuid}/password | Set / Change user password
*UsersApi* | [**usersUuidPatch**](docs/Api/UsersApi.md#usersuuidpatch) | **PATCH** /users/{uuid} | Update a user
*UsersApi* | [**usersUuidPaymentsGet**](docs/Api/UsersApi.md#usersuuidpaymentsget) | **GET** /users/{uuid}/payments | Get user&#39;s subscriptions and payment events
*UsersApi* | [**usersUuidScopeGet**](docs/Api/UsersApi.md#usersuuidscopeget) | **GET** /users/{uuid}/scope | Check if user has valid token for a scope
*UsersApi* | [**usersUuidSubscriptionsSubsnoAddressChangeDelete**](docs/Api/UsersApi.md#usersuuidsubscriptionssubsnoaddresschangedelete) | **DELETE** /users/{uuid}/subscriptions/{subsno}/addressChange | Delete temporary address change for subscription
*UsersApi* | [**usersUuidSubscriptionsSubsnoAddressChangePatch**](docs/Api/UsersApi.md#usersuuidsubscriptionssubsnoaddresschangepatch) | **PATCH** /users/{uuid}/subscriptions/{subsno}/addressChange | Edit temporary address change dates of a subscription
*UsersApi* | [**usersUuidSubscriptionsSubsnoAddressChangePost**](docs/Api/UsersApi.md#usersuuidsubscriptionssubsnoaddresschangepost) | **POST** /users/{uuid}/subscriptions/{subsno}/addressChange | Make a temporary address change for a subscription
*UsersApi* | [**usersUuidSubscriptionsSubsnoCancelPut**](docs/Api/UsersApi.md#usersuuidsubscriptionssubsnocancelput) | **PUT** /users/{uuid}/subscriptions/{subsno}/cancel | Cancels user subscription
*UsersApi* | [**usersUuidSubscriptionsSubsnoPausePatch**](docs/Api/UsersApi.md#usersuuidsubscriptionssubsnopausepatch) | **PATCH** /users/{uuid}/subscriptions/{subsno}/pause | Edit pause duration
*UsersApi* | [**usersUuidSubscriptionsSubsnoPausePost**](docs/Api/UsersApi.md#usersuuidsubscriptionssubsnopausepost) | **POST** /users/{uuid}/subscriptions/{subsno}/pause | Pause users subscription
*UsersApi* | [**usersUuidSubscriptionsSubsnoReclamationPost**](docs/Api/UsersApi.md#usersuuidsubscriptionssubsnoreclamationpost) | **POST** /users/{uuid}/subscriptions/{subsno}/reclamation | Create a new delivery reclamation for a subscription
*UsersApi* | [**usersUuidSubscriptionsSubsnoReclamationsReclaimnoGet**](docs/Api/UsersApi.md#usersuuidsubscriptionssubsnoreclamationsreclaimnoget) | **GET** /users/{uuid}/subscriptions/{subsno}/reclamations/{reclaimno} | Get a delivery reclamation
*UsersApi* | [**usersUuidSubscriptionsSubsnoUnpausePost**](docs/Api/UsersApi.md#usersuuidsubscriptionssubsnounpausepost) | **POST** /users/{uuid}/subscriptions/{subsno}/unpause | Unpause users subscription


## Documentation For Models

 - [ActiveDays](docs/Model/ActiveDays.md)
 - [Address](docs/Model/Address.md)
 - [AdminNewUser](docs/Model/AdminNewUser.md)
 - [CancelSubscriptionReason](docs/Model/CancelSubscriptionReason.md)
 - [DeleteTempAddressChangeDates](docs/Model/DeleteTempAddressChangeDates.md)
 - [DeliveryAddress](docs/Model/DeliveryAddress.md)
 - [DeliveryReclamation](docs/Model/DeliveryReclamation.md)
 - [EntitlementAccess](docs/Model/EntitlementAccess.md)
 - [FaroUser](docs/Model/FaroUser.md)
 - [ForgotPasswordData](docs/Model/ForgotPasswordData.md)
 - [GdprConsent](docs/Model/GdprConsent.md)
 - [InlineResponse400](docs/Model/InlineResponse400.md)
 - [InlineResponse400InvalidRequestBody](docs/Model/InlineResponse400InvalidRequestBody.md)
 - [InlineResponse403](docs/Model/InlineResponse403.md)
 - [InlineResponse4031](docs/Model/InlineResponse4031.md)
 - [InlineResponse4031AccessTokenExpired](docs/Model/InlineResponse4031AccessTokenExpired.md)
 - [InlineResponse4032](docs/Model/InlineResponse4032.md)
 - [InlineResponse4032EmailAddressInUse](docs/Model/InlineResponse4032EmailAddressInUse.md)
 - [InlineResponse4032EmailNotAuthorized](docs/Model/InlineResponse4032EmailNotAuthorized.md)
 - [InlineResponse4032OauthFailed](docs/Model/InlineResponse4032OauthFailed.md)
 - [InlineResponse403InvalidCredentials](docs/Model/InlineResponse403InvalidCredentials.md)
 - [InlineResponse415](docs/Model/InlineResponse415.md)
 - [InlineResponse415UnsupportedMediaType](docs/Model/InlineResponse415UnsupportedMediaType.md)
 - [InlineResponse500](docs/Model/InlineResponse500.md)
 - [InlineResponse500InternalServerError](docs/Model/InlineResponse500InternalServerError.md)
 - [JanrainUser](docs/Model/JanrainUser.md)
 - [LegalConsent](docs/Model/LegalConsent.md)
 - [LoginData](docs/Model/LoginData.md)
 - [LoginDataSSO](docs/Model/LoginDataSSO.md)
 - [LoginDataSoMe](docs/Model/LoginDataSoMe.md)
 - [LoginResponse](docs/Model/LoginResponse.md)
 - [NewDeliveryReclamation](docs/Model/NewDeliveryReclamation.md)
 - [NewTemporaryUser](docs/Model/NewTemporaryUser.md)
 - [NewUser](docs/Model/NewUser.md)
 - [NewsletterSubscriptions](docs/Model/NewsletterSubscriptions.md)
 - [Package](docs/Model/Package.md)
 - [PackageCampaign](docs/Model/PackageCampaign.md)
 - [PackageOffer](docs/Model/PackageOffer.md)
 - [Paper](docs/Model/Paper.md)
 - [PastTemporaryAddress](docs/Model/PastTemporaryAddress.md)
 - [PausedSubscription](docs/Model/PausedSubscription.md)
 - [Payment](docs/Model/Payment.md)
 - [PendingAddressChange](docs/Model/PendingAddressChange.md)
 - [PersistedEntitlementAccess](docs/Model/PersistedEntitlementAccess.md)
 - [Product](docs/Model/Product.md)
 - [SearchQuery](docs/Model/SearchQuery.md)
 - [SearchResult](docs/Model/SearchResult.md)
 - [Subscription](docs/Model/Subscription.md)
 - [SubscriptionDates](docs/Model/SubscriptionDates.md)
 - [SubscriptionPauseDates](docs/Model/SubscriptionPauseDates.md)
 - [SubscriptionPauseEdit](docs/Model/SubscriptionPauseEdit.md)
 - [SubscriptionPayments](docs/Model/SubscriptionPayments.md)
 - [TemporaryAddressChange](docs/Model/TemporaryAddressChange.md)
 - [TemporaryAddressChangeDates](docs/Model/TemporaryAddressChangeDates.md)
 - [UpdatePasswordData](docs/Model/UpdatePasswordData.md)
 - [User](docs/Model/User.md)
 - [UserUpdate](docs/Model/UserUpdate.md)
 - [UserUpdateAddress](docs/Model/UserUpdateAddress.md)
 - [UserUpdatePassword](docs/Model/UserUpdatePassword.md)


## Documentation For Authorization

All endpoints do not require authorization.

## Author



