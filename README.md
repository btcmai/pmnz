# SwaggerClient-php
The 'Advertising' integration focuses on allowing 3rd party systems and customized websites to sync available properties from Palace to display up-to-date advertising on a company's website.<BR><BR>The 'Advertising Integration' area does NOT require an upgrade from a 'Standard' API account to a 'Premium' API Account. There is a NO cost involved in using these contracts unless you are a 3rd Party solution provider wanting to integrate at a partner level.<BR><BR>The following is a list of contracts to integrate 'Available Properties' into a public website.  The first contract /v2AvailableProperties/JSON provides comprehensive array of currrent available properties with details.<BR><BR>  Every time the call is made to this contract it provides the current list at the time of the call.  If a property is no longer showing in the latest call that existed in previous calls you can use the /v2PreviousAvailableProperty/JSON/ contract to get information regarding the leased or withdrawn status and comments of the properties.<BR><BR> You can get a list of related images to a Property in Base64 encoded string (/v2AvailablePropertyImages/JSON) or a URL (/v2AvailablePropertyImagesURL/JSON/) directly to the JPG file.  Use the Base64 encoded option to download the images to your website<BR><BR> (NOTE: Do not use this contract to render images per request as the resulting request will be too slow to handle this).<BR><BR>  You can use the URL requests to link directly to your site.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2.0.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

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
      "url": "https://github.com//.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
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

$apiInstance = new Swagger\Client\Api\DevelopersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->v2AvailableProperties();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevelopersApi->v2AvailableProperties: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.getpalace.com/Service.svc/RestService/*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DevelopersApi* | [**v2AvailableProperties**](docs/Api/DevelopersApi.md#v2availableproperties) | **GET** /v2AvailableProperties/JSON | All current available properties with detailed data
*DevelopersApi* | [**v2AvailablePropertyImages**](docs/Api/DevelopersApi.md#v2availablepropertyimages) | **GET** /v2AvailablePropertyImages/JSON/{PropertyCode} | Array of images and meta data
*DevelopersApi* | [**v2AvailablePropertyImagesURL**](docs/Api/DevelopersApi.md#v2availablepropertyimagesurl) | **GET** /v2AvailablePropertyImagesURL/JSON/{PropertyCode} | Array of image URL&#39;s and meta data
*DevelopersApi* | [**v2PreviousAvailableProperty**](docs/Api/DevelopersApi.md#v2previousavailableproperty) | **GET** /v2PreviousAvailableProperty/JSON/{PropertyCode} | Withdrawn or leased details


## Documentation For Models

 - [V2AvailablePropertyAgentDetails](docs/Model/V2AvailablePropertyAgentDetails.md)
 - [V2AvailablePropertyCustomList](docs/Model/V2AvailablePropertyCustomList.md)
 - [V2AvailablePropertyDetails](docs/Model/V2AvailablePropertyDetails.md)
 - [V2AvailablePropertyFeatures](docs/Model/V2AvailablePropertyFeatures.md)
 - [V2AvailablePropertyImages](docs/Model/V2AvailablePropertyImages.md)
 - [V2AvailablePropertyImagesURL](docs/Model/V2AvailablePropertyImagesURL.md)
 - [V2AvailablePropertyPrevious](docs/Model/V2AvailablePropertyPrevious.md)
 - [V2AvailablePropertySuburbs](docs/Model/V2AvailablePropertySuburbs.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author

development@getpalace.com


