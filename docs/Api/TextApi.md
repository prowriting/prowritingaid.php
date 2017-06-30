# Swagger\Client\TextApi

All URIs are relative to *https://api.prowritingaid.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**textPost**](TextApi.md#textPost) | **POST** /api/text | 


# **textPost**
> \Swagger\Client\Model\TextAnalysisResponse textPost($request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TextApi();
$request = new \Swagger\Client\Model\TextAnalysisRequest(); // \Swagger\Client\Model\TextAnalysisRequest | 

try {
    $result = $api_instance->textPost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextApi->textPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\TextAnalysisRequest**](../Model/\Swagger\Client\Model\TextAnalysisRequest.md)|  |

### Return type

[**\Swagger\Client\Model\TextAnalysisResponse**](../Model/TextAnalysisResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

