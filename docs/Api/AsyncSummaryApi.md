# Swagger\Client\AsyncSummaryApi

All URIs are relative to *https://api.prowritingaid.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**asyncSummaryPost**](AsyncSummaryApi.md#asyncSummaryPost) | **POST** /api/async/summary | 


# **asyncSummaryPost**
> \Swagger\Client\Model\AsyncResponseSummaryAnalysisResponse asyncSummaryPost($request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AsyncSummaryApi();
$request = new \Swagger\Client\Model\SummaryAnalysisRequest(); // \Swagger\Client\Model\SummaryAnalysisRequest | 

try {
    $result = $api_instance->asyncSummaryPost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AsyncSummaryApi->asyncSummaryPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\SummaryAnalysisRequest**](../Model/\Swagger\Client\Model\SummaryAnalysisRequest.md)|  |

### Return type

[**\Swagger\Client\Model\AsyncResponseSummaryAnalysisResponse**](../Model/AsyncResponseSummaryAnalysisResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

