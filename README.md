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



$apiInstance = new OpenAPI\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\CodeForTokenData(); // \OpenAPI\Client\Model\CodeForTokenData | 

try {
    $result = $apiInstance->accountCodeForTokenPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountCodeForTokenPost: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *http://http:/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountApi* | [**accountCodeForTokenPost**](docs/Api/AccountApi.md#accountcodefortokenpost) | **POST** /account/codeForToken | Get a password reset token
*AccountApi* | [**accountForgotPassPost**](docs/Api/AccountApi.md#accountforgotpasspost) | **POST** /account/forgotPass | Forgot Password
*AccountApi* | [**accountResetForgottenPasswordPost**](docs/Api/AccountApi.md#accountresetforgottenpasswordpost) | **POST** /account/resetForgottenPassword | Reset a forgotten password with a token
*AdminApi* | [**adminUuidGet**](docs/Api/AdminApi.md#adminuuidget) | **GET** /admin/{uuid} | Get user by admin credentials.
*EntitlementsApi* | [**entitlementsAllowPost**](docs/Api/EntitlementsApi.md#entitlementsallowpost) | **POST** /entitlements/allow | 
*EntitlementsApi* | [**entitlementsAllowUuidPost**](docs/Api/EntitlementsApi.md#entitlementsallowuuidpost) | **POST** /entitlements/allow/{uuid} | Grant product access to a customer
*EntitlementsApi* | [**entitlementsGet**](docs/Api/EntitlementsApi.md#entitlementsget) | **GET** /entitlements | List all entitlements
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
*UsersApi* | [**usersUuidPasswordPut**](docs/Api/UsersApi.md#usersuuidpasswordput) | **PUT** /users/{uuid}/password | Set / Change user password
*UsersApi* | [**usersUuidPatch**](docs/Api/UsersApi.md#usersuuidpatch) | **PATCH** /users/{uuid} | Update a user
*UsersApi* | [**usersUuidSubscriptionsSubsnoAddressChangePost**](docs/Api/UsersApi.md#usersuuidsubscriptionssubsnoaddresschangepost) | **POST** /users/{uuid}/subscriptions/{subsno}/addressChange | Make a temporary address change for a subscription
*UsersApi* | [**usersUuidSubscriptionsSubsnoPausePost**](docs/Api/UsersApi.md#usersuuidsubscriptionssubsnopausepost) | **POST** /users/{uuid}/subscriptions/{subsno}/pause | Pause users subscription
*UsersApi* | [**usersUuidSubscriptionsSubsnoReclamationPost**](docs/Api/UsersApi.md#usersuuidsubscriptionssubsnoreclamationpost) | **POST** /users/{uuid}/subscriptions/{subsno}/reclamation | Create a new delivery reclamation for a subscription
*UsersApi* | [**usersUuidSubscriptionsSubsnoReclamationsReclaimnoGet**](docs/Api/UsersApi.md#usersuuidsubscriptionssubsnoreclamationsreclaimnoget) | **GET** /users/{uuid}/subscriptions/{subsno}/reclamations/{reclaimno} | Get a delivery reclamation
*UsersApi* | [**usersUuidSubscriptionsSubsnoUnpausePost**](docs/Api/UsersApi.md#usersuuidsubscriptionssubsnounpausepost) | **POST** /users/{uuid}/subscriptions/{subsno}/unpause | Pause users subscription


## Documentation For Models

 - [ActiveDays](docs/Model/ActiveDays.md)
 - [Address](docs/Model/Address.md)
 - [Campaign](docs/Model/Campaign.md)
 - [CodeForTokenData](docs/Model/CodeForTokenData.md)
 - [DeliveryAddress](docs/Model/DeliveryAddress.md)
 - [DeliveryReclamation](docs/Model/DeliveryReclamation.md)
 - [DeliveryReclamationClaim](docs/Model/DeliveryReclamationClaim.md)
 - [DescriptionFrequency](docs/Model/DescriptionFrequency.md)
 - [EntitlementAccess](docs/Model/EntitlementAccess.md)
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
 - [LegalConsent](docs/Model/LegalConsent.md)
 - [LoginData](docs/Model/LoginData.md)
 - [LoginDataSSO](docs/Model/LoginDataSSO.md)
 - [LoginDataSoMe](docs/Model/LoginDataSoMe.md)
 - [LoginResponse](docs/Model/LoginResponse.md)
 - [NewDeliveryReclamation](docs/Model/NewDeliveryReclamation.md)
 - [NewTemporaryUser](docs/Model/NewTemporaryUser.md)
 - [NewUser](docs/Model/NewUser.md)
 - [Package](docs/Model/Package.md)
 - [PackageDescription](docs/Model/PackageDescription.md)
 - [PackageOffer](docs/Model/PackageOffer.md)
 - [Paper](docs/Model/Paper.md)
 - [PausedSubscription](docs/Model/PausedSubscription.md)
 - [PendingAddressChange](docs/Model/PendingAddressChange.md)
 - [Product](docs/Model/Product.md)
 - [Subscription](docs/Model/Subscription.md)
 - [SubscriptionDates](docs/Model/SubscriptionDates.md)
 - [SubscriptionPauseDates](docs/Model/SubscriptionPauseDates.md)
 - [TemporaryAddressChange](docs/Model/TemporaryAddressChange.md)
 - [TokenResponse](docs/Model/TokenResponse.md)
 - [UpdatePasswordData](docs/Model/UpdatePasswordData.md)
 - [User](docs/Model/User.md)
 - [UserUpdate](docs/Model/UserUpdate.md)
 - [UserUpdateAddress](docs/Model/UserUpdateAddress.md)
 - [UserUpdatePassword](docs/Model/UserUpdatePassword.md)


## Documentation For Authorization

All endpoints do not require authorization.

## Author



