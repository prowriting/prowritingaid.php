# Swagger\Client\ThesaurusApi

All URIs are relative to *https://api.prowritingaid.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**post**](ThesaurusApi.md#post) | **POST** /api/thesaurus | Returns the thesaurus entries for a specific word


# **post**
> \Swagger\Client\Model\ThesaurusResponse post($request)

Returns the thesaurus entries for a specific word

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: licenseCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('licenseCode', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('licenseCode', 'Bearer');

$apiInstance = new Swagger\Client\Api\ThesaurusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ThesaurusRequest(); // \Swagger\Client\Model\ThesaurusRequest | 

try {
    $result = $apiInstance->post($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThesaurusApi->post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ThesaurusRequest**](../Model/ThesaurusRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ThesaurusResponse**](../Model/ThesaurusResponse.md)

### Authorization

[licenseCode](../../README.md#licenseCode)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

