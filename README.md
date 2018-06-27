# ProWritingAid.API

Official PHP prowritingaid.com API.

- API version: v2

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
      "url": "https://github.com/prowriting/prowriting.php.git"
    }
  ],
  "require": {
    "prowriting/prowriting.php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit lib/Tests
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AsyncContextualThesaurusApi();
$request = new \Swagger\Client\Model\ContextualThesaurusRequest(); // \Swagger\Client\Model\ContextualThesaurusRequest | 

try {
    $result = $api_instance->asyncContextualThesaurusPost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AsyncContextualThesaurusApi->asyncContextualThesaurusPost: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.prowritingaid.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ContextualThesaurusApi* | [**get**](docs/Api/ContextualThesaurusApi.md#get) | **GET** /api/async/contextualthesaurus/result/{taskId} | 
*ContextualThesaurusApi* | [**post**](docs/Api/ContextualThesaurusApi.md#post) | **POST** /api/async/contextualthesaurus | 
*HtmlApi* | [**get**](docs/Api/HtmlApi.md#get) | **GET** /api/async/html/result/{taskId} | 
*HtmlApi* | [**post**](docs/Api/HtmlApi.md#post) | **POST** /api/async/html | 
*SummaryApi* | [**get**](docs/Api/SummaryApi.md#get) | **GET** /api/async/summary/result/{taskId} | 
*SummaryApi* | [**post**](docs/Api/SummaryApi.md#post) | **POST** /api/async/summary | 
*TextApi* | [**get**](docs/Api/TextApi.md#get) | **GET** /api/async/text/result/{taskId} | 
*TextApi* | [**post**](docs/Api/TextApi.md#post) | **POST** /api/async/text | 
*ThesaurusApi* | [**post**](docs/Api/ThesaurusApi.md#post) | **POST** /api/thesaurus | Returns the thesaurus entries for a specific word
*WordCloudApi* | [**get**](docs/Api/WordCloudApi.md#get) | **GET** /api/async/wordcloud/result/{taskId} | 
*WordCloudApi* | [**post**](docs/Api/WordCloudApi.md#post) | **POST** /api/async/wordcloud | 


## Documentation For Models

 - [AnalysisSettings](docs/Model/AnalysisSettings.md)
 - [AnalysisSummary](docs/Model/AnalysisSummary.md)
 - [AnalysisSummaryGraph](docs/Model/AnalysisSummaryGraph.md)
 - [AnalysisSummaryGraphItem](docs/Model/AnalysisSummaryGraphItem.md)
 - [AnalysisSummaryItem](docs/Model/AnalysisSummaryItem.md)
 - [AnalysisSummarySubItem](docs/Model/AnalysisSummarySubItem.md)
 - [AsyncResponseContextualThesaurusResponse](docs/Model/AsyncResponseContextualThesaurusResponse.md)
 - [AsyncResponseHtmlAnalysisResponse](docs/Model/AsyncResponseHtmlAnalysisResponse.md)
 - [AsyncResponseSummaryAnalysisResponse](docs/Model/AsyncResponseSummaryAnalysisResponse.md)
 - [AsyncResponseTextAnalysisResponse](docs/Model/AsyncResponseTextAnalysisResponse.md)
 - [AsyncResponseWordCloudResponse](docs/Model/AsyncResponseWordCloudResponse.md)
 - [ContextualThesaurusRequest](docs/Model/ContextualThesaurusRequest.md)
 - [ContextualThesaurusResponse](docs/Model/ContextualThesaurusResponse.md)
 - [DocTag](docs/Model/DocTag.md)
 - [EntryMeaning](docs/Model/EntryMeaning.md)
 - [HtmlAnalysisRequest](docs/Model/HtmlAnalysisRequest.md)
 - [HtmlAnalysisResponse](docs/Model/HtmlAnalysisResponse.md)
 - [SuggestionCategory](docs/Model/SuggestionCategory.md)
 - [SummaryAnalysisRequest](docs/Model/SummaryAnalysisRequest.md)
 - [SummaryAnalysisResponse](docs/Model/SummaryAnalysisResponse.md)
 - [TextAnalysisRequest](docs/Model/TextAnalysisRequest.md)
 - [TextAnalysisResponse](docs/Model/TextAnalysisResponse.md)
 - [ThesaurusRequest](docs/Model/ThesaurusRequest.md)
 - [ThesaurusResponse](docs/Model/ThesaurusResponse.md)
 - [WordCloudRequest](docs/Model/WordCloudRequest.md)
 - [WordCloudResponse](docs/Model/WordCloudResponse.md)


## Documentation For Authorization


## licenseCode

- **Type**: API key
- **API key parameter name**: licenseCode
- **Location**: HTTP header

