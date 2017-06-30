# Swagger\Client\AsyncTextAnnotationResultApi

All URIs are relative to *http://localhost:5004*

Method | HTTP request | Description
------------- | ------------- | -------------
[**asyncTextAnnotationResultGetResult**](AsyncTextAnnotationResultApi.md#asyncTextAnnotationResultGetResult) | **GET** /api/async/result/annotatetext/{taskId} | 


# **asyncTextAnnotationResultGetResult**
> \Swagger\Client\Model\TextAnnotateResponse asyncTextAnnotationResultGetResult($task_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AsyncTextAnnotationResultApi();
$task_id = "task_id_example"; // string | 

try {
    $result = $api_instance->asyncTextAnnotationResultGetResult($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AsyncTextAnnotationResultApi->asyncTextAnnotationResultGetResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\TextAnnotateResponse**](../Model/TextAnnotateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

