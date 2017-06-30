# Swagger\Client\AsyncContextualThesaurusResultApi

All URIs are relative to *https://api.prowritingaid.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**asyncContextualThesaurusResultGetResult**](AsyncContextualThesaurusResultApi.md#asyncContextualThesaurusResultGetResult) | **GET** /api/async/result/contextualthesaurus/{taskId} | 


# **asyncContextualThesaurusResultGetResult**
> \Swagger\Client\Model\ContextualThesaurusResponse asyncContextualThesaurusResultGetResult($task_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AsyncContextualThesaurusResultApi();
$task_id = "task_id_example"; // string | 

try {
    $result = $api_instance->asyncContextualThesaurusResultGetResult($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AsyncContextualThesaurusResultApi->asyncContextualThesaurusResultGetResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ContextualThesaurusResponse**](../Model/ContextualThesaurusResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

