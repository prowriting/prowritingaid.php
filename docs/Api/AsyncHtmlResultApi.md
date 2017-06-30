# Swagger\Client\AsyncHtmlResultApi

All URIs are relative to *https://api.prowritingaid.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**asyncHtmlResultGetResult**](AsyncHtmlResultApi.md#asyncHtmlResultGetResult) | **GET** /api/async/result/html/{taskId} | 


# **asyncHtmlResultGetResult**
> \Swagger\Client\Model\HtmlAnalysisResponse asyncHtmlResultGetResult($task_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AsyncHtmlResultApi();
$task_id = "task_id_example"; // string | 

try {
    $result = $api_instance->asyncHtmlResultGetResult($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AsyncHtmlResultApi->asyncHtmlResultGetResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\HtmlAnalysisResponse**](../Model/HtmlAnalysisResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

