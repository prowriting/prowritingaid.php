# Swagger\Client\ContextualThesaurusApi

All URIs are relative to *https://api.prowritingaid.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get**](ContextualThesaurusApi.md#get) | **GET** /api/async/contextualthesaurus/result/{taskId} | 
[**post**](ContextualThesaurusApi.md#post) | **POST** /api/async/contextualthesaurus | 


# **get**
> \Swagger\Client\Model\AsyncResponseContextualThesaurusResponse get($task_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: licenseCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('licenseCode', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('licenseCode', 'Bearer');

$apiInstance = new Swagger\Client\Api\ContextualThesaurusApi(
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
    echo 'Exception when calling ContextualThesaurusApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\AsyncResponseContextualThesaurusResponse**](../Model/AsyncResponseContextualThesaurusResponse.md)

### Authorization

[licenseCode](../../README.md#licenseCode)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **post**
> \Swagger\Client\Model\AsyncResponseContextualThesaurusResponse post($requestp)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: licenseCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('licenseCode', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('licenseCode', 'Bearer');

$apiInstance = new Swagger\Client\Api\ContextualThesaurusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$requestp = new \Swagger\Client\Model\ContextualThesaurusRequest(); // \Swagger\Client\Model\ContextualThesaurusRequest | 

try {
    $result = $apiInstance->post($requestp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContextualThesaurusApi->post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestp** | [**\Swagger\Client\Model\ContextualThesaurusRequest**](../Model/ContextualThesaurusRequest.md)|  |

### Return type

[**\Swagger\Client\Model\AsyncResponseContextualThesaurusResponse**](../Model/AsyncResponseContextualThesaurusResponse.md)

### Authorization

[licenseCode](../../README.md#licenseCode)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

