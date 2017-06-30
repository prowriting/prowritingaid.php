# Swagger\Client\AsyncTextAnnotationApi

All URIs are relative to *http://localhost:5004*

Method | HTTP request | Description
------------- | ------------- | -------------
[**asyncTextAnnotationPost**](AsyncTextAnnotationApi.md#asyncTextAnnotationPost) | **POST** /api/async/annotatetext | 


# **asyncTextAnnotationPost**
> \Swagger\Client\Model\AsyncResponseTextAnnotateResponse asyncTextAnnotationPost($request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AsyncTextAnnotationApi();
$request = new \Swagger\Client\Model\TextAnnotateRequest(); // \Swagger\Client\Model\TextAnnotateRequest | 

try {
    $result = $api_instance->asyncTextAnnotationPost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AsyncTextAnnotationApi->asyncTextAnnotationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\TextAnnotateRequest**](../Model/\Swagger\Client\Model\TextAnnotateRequest.md)|  |

### Return type

[**\Swagger\Client\Model\AsyncResponseTextAnnotateResponse**](../Model/AsyncResponseTextAnnotateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

