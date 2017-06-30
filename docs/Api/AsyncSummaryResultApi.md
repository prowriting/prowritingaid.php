# Swagger\Client\AsyncSummaryResultApi

All URIs are relative to *https://api.prowritingaid.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**asyncSummaryResultGetResult**](AsyncSummaryResultApi.md#asyncSummaryResultGetResult) | **GET** /api/async/result/summary/{taskId} | 


# **asyncSummaryResultGetResult**
> \Swagger\Client\Model\SummaryAnalysisResponse asyncSummaryResultGetResult($task_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AsyncSummaryResultApi();
$task_id = "task_id_example"; // string | 

try {
    $result = $api_instance->asyncSummaryResultGetResult($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AsyncSummaryResultApi->asyncSummaryResultGetResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\SummaryAnalysisResponse**](../Model/SummaryAnalysisResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

