# Swagger\Client\AsyncTextResultApi

All URIs are relative to *https://api.prowritingaid.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**asyncTextResultGetResult**](AsyncTextResultApi.md#asyncTextResultGetResult) | **GET** /api/async/result/text/{taskId} | 


# **asyncTextResultGetResult**
> \Swagger\Client\Model\TextAnalysisResponse asyncTextResultGetResult($task_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AsyncTextResultApi();
$task_id = "task_id_example"; // string | 

try {
    $result = $api_instance->asyncTextResultGetResult($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AsyncTextResultApi->asyncTextResultGetResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\TextAnalysisResponse**](../Model/TextAnalysisResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

