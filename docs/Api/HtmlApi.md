# Swagger\Client\HtmlApi

All URIs are relative to *https://api.prowritingaid.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**htmlPost**](HtmlApi.md#htmlPost) | **POST** /api/html | 


# **htmlPost**
> \Swagger\Client\Model\HtmlAnalysisResponse htmlPost($request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\HtmlApi();
$request = new \Swagger\Client\Model\HtmlAnalysisRequest(); // \Swagger\Client\Model\HtmlAnalysisRequest | 

try {
    $result = $api_instance->htmlPost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HtmlApi->htmlPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\HtmlAnalysisRequest**](../Model/\Swagger\Client\Model\HtmlAnalysisRequest.md)|  |

### Return type

[**\Swagger\Client\Model\HtmlAnalysisResponse**](../Model/HtmlAnalysisResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

