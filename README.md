# persona_client
KSF Media unified login service

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 1.2.0
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
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
    require_once('/path/to/persona_client/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$login_data = new \OpenAPI\Client\Model\LoginData(); // \OpenAPI\Client\Model\LoginData | 

try {
    $result = $apiInstance->loginPost($login_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->loginPost: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *http://http:/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*LoginApi* | [**loginPost**](docs/Api/LoginApi.md#loginpost) | **POST** /login | Login with email and password
*LoginApi* | [**loginSomePost**](docs/Api/LoginApi.md#loginsomepost) | **POST** /login/some | Login with social media
*LoginApi* | [**loginSsoPost**](docs/Api/LoginApi.md#loginssopost) | **POST** /login/sso | Login with the AccessToken given by the SSO auth
*UsersApi* | [**usersUuidGdprPut**](docs/Api/UsersApi.md#usersuuidgdprput) | **PUT** /users/{uuid}/gdpr | Updates the GDPR consent settings for a given user.
*UsersApi* | [**usersUuidGet**](docs/Api/UsersApi.md#usersuuidget) | **GET** /users/{uuid} | Get user by UUID.


## Documentation For Models

 - [ActiveDays](docs/Model/ActiveDays.md)
 - [Address](docs/Model/Address.md)
 - [Campaign](docs/Model/Campaign.md)
 - [DescriptionFrequency](docs/Model/DescriptionFrequency.md)
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
 - [LoginData](docs/Model/LoginData.md)
 - [LoginDataSSO](docs/Model/LoginDataSSO.md)
 - [LoginDataSoMe](docs/Model/LoginDataSoMe.md)
 - [LoginResponse](docs/Model/LoginResponse.md)
 - [Package](docs/Model/Package.md)
 - [PackageDescription](docs/Model/PackageDescription.md)
 - [PackageOffer](docs/Model/PackageOffer.md)
 - [Paper](docs/Model/Paper.md)
 - [Product](docs/Model/Product.md)
 - [Subscription](docs/Model/Subscription.md)
 - [SubscriptionDates](docs/Model/SubscriptionDates.md)
 - [User](docs/Model/User.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author




