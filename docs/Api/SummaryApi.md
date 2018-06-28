# Swagger\Client\SummaryApi

All URIs are relative to *https://api.prowritingaid.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get**](SummaryApi.md#get) | **GET** /api/async/summary/result/{taskId} | Tries to get the result of a request using the task id of the request
[**post**](SummaryApi.md#post) | **POST** /api/async/summary | Gets the summary analysis of a document


# **get**
> \Swagger\Client\Model\AsyncResponseSummaryAnalysisResponse get($task_id)


Tries to get the result of a request using the task id of the request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: licenseCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('licenseCode', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('licenseCode', 'Bearer');

$apiInstance = new Swagger\Client\Api\SummaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = "task_id_example"; // string | 

try {
    $result = $apiInstance->get($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SummaryApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\AsyncResponseSummaryAnalysisResponse**](../Model/AsyncResponseSummaryAnalysisResponse.md)

### Authorization

[licenseCode](../../README.md#licenseCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **post**
> \Swagger\Client\Model\AsyncResponseSummaryAnalysisResponse post($requestp)


Gets the summary analysis of a document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: licenseCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('licenseCode', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('licenseCode', 'Bearer');

$apiInstance = new Swagger\Client\Api\SummaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$requestp = new \Swagger\Client\Model\SummaryAnalysisRequest(); // \Swagger\Client\Model\SummaryAnalysisRequest | 

try {
    $result = $apiInstance->post($requestp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SummaryApi->post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestp** | [**\Swagger\Client\Model\SummaryAnalysisRequest**](../Model/SummaryAnalysisRequest.md)|  |

### Return type

[**\Swagger\Client\Model\AsyncResponseSummaryAnalysisResponse**](../Model/AsyncResponseSummaryAnalysisResponse.md)

### Authorization

[licenseCode](../../README.md#licenseCode)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

