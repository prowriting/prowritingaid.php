# Swagger\Client\AsyncHtmlApi

All URIs are relative to *https://api.prowritingaid.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**asyncHtmlPost**](AsyncHtmlApi.md#asyncHtmlPost) | **POST** /api/async/html | 


# **asyncHtmlPost**
> \Swagger\Client\Model\AsyncResponseHtmlAnalysisResponse asyncHtmlPost($request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AsyncHtmlApi();
$request = new \Swagger\Client\Model\HtmlAnalysisRequest(); // \Swagger\Client\Model\HtmlAnalysisRequest | 

try {
    $result = $api_instance->asyncHtmlPost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AsyncHtmlApi->asyncHtmlPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\HtmlAnalysisRequest**](../Model/\Swagger\Client\Model\HtmlAnalysisRequest.md)|  |

### Return type

[**\Swagger\Client\Model\AsyncResponseHtmlAnalysisResponse**](../Model/AsyncResponseHtmlAnalysisResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

