# Swagger\Client\AsyncWordCloudResultApi

All URIs are relative to *https://api.prowritingaid.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**asyncWordCloudResultGetResult**](AsyncWordCloudResultApi.md#asyncWordCloudResultGetResult) | **GET** /api/async/result/wordcloud/{taskId} | 


# **asyncWordCloudResultGetResult**
> \Swagger\Client\Model\WordCloudResponse asyncWordCloudResultGetResult($task_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AsyncWordCloudResultApi();
$task_id = "task_id_example"; // string | 

try {
    $result = $api_instance->asyncWordCloudResultGetResult($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AsyncWordCloudResultApi->asyncWordCloudResultGetResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\WordCloudResponse**](../Model/WordCloudResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

