# ProWritingAid.API

Official PHP prowritingaid.com API.

- API version: v2

For more information, please visit [https://prowritingaid.com/en/App/API#php](https://prowritingaid.com/en/App/API#php)

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "minimum-stability": "dev",
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/prowriting/prowritingaid.php.git"
    }
  ],
  "require": {
    "prowriting/prowritingaid.php": "*"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php

require_once(__DIR__ . '/vendor/autoload.php');
use ProWritingAidSDK\Configuration;
use ProWritingAidSDK\Api\TextApi;
use ProWritingAidSDK\Model\TextAnalysisRequest;

$config = new Configuration();
$config->setHost('https://api.prowritingaid.com');
$config->setApiKey('licenseCode', 'YOUR API KEY');
$api_instance = new TextApi(null, $config);

$request = new TextAnalysisRequest();
$request->setText('I place my cane firmly on the ground and, slowly, with its aid, \'
                    \'I lower myself from the hammock. Now the rains have gone my joints \'
                    \'don\'t hurt so badly. Today won\'t be too bad, I think. I\'m prone to \'
                    \'be over optimistic. Could this be my last day. At this time the jungle \'
                    \'is strangely subdued. She poke around in the ashes. Every day the \'
                    \'weariness is even worst than beofre. I don\'t know yett. \n\'
                    \'Whne? What a weka statement. Jaroslav Drabny is a Czech football goalkeeper. \'
                    \'Bhuvnehwar Kumar is a Czech football goalkeeper. I just saw Siyabonga Siyo. \'
                    \'I just saw Siyabonga Seyo. I read this article on RaelSport.');
$request->setStyle('General');
$request->setLanguage('en');
$request->setReports(['grammar']);

try {
    $result = $api_instance->post($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling the API: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.prowritingaid.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ContextualThesaurusApi* | [**get**](docs/Api/ContextualThesaurusApi.md#get) | **GET** /api/async/contextualthesaurus/result/{taskId} | Tries to get the result of a request using the task id of the request
*ContextualThesaurusApi* | [**post**](docs/Api/ContextualThesaurusApi.md#post) | **POST** /api/async/contextualthesaurus | Analyses text and returns contextual thesaurus entries
*HtmlApi* | [**get**](docs/Api/HtmlApi.md#get) | **GET** /api/async/html/result/{taskId} | Tries to get the result of a request using the task id of the request
*HtmlApi* | [**post**](docs/Api/HtmlApi.md#post) | **POST** /api/async/html | Analyses HTML and adds suggestion tags to it
*SummaryApi* | [**get**](docs/Api/SummaryApi.md#get) | **GET** /api/async/summary/result/{taskId} | Tries to get the result of a request using the task id of the request
*SummaryApi* | [**post**](docs/Api/SummaryApi.md#post) | **POST** /api/async/summary | Gets the summary analysis of a document
*TextApi* | [**get**](docs/Api/TextApi.md#get) | **GET** /api/async/text/result/{taskId} | Tries to get the result of a request using the task id of the request
*TextApi* | [**post**](docs/Api/TextApi.md#post) | **POST** /api/async/text | Analyses text and returns tags for it
*ThesaurusApi* | [**post**](docs/Api/ThesaurusApi.md#post) | **POST** /api/thesaurus | Returns the thesaurus entries for a specific word
*WordCloudApi* | [**get**](docs/Api/WordCloudApi.md#get) | **GET** /api/async/wordcloud/result/{taskId} | Tries to get the result of a request using the task id of the request
*WordCloudApi* | [**post**](docs/Api/WordCloudApi.md#post) | **POST** /api/async/wordcloud | Analyses text and returns a word cloud (as an image)


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

