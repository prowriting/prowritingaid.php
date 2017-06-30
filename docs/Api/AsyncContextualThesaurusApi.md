# Swagger\Client\AsyncContextualThesaurusApi

All URIs are relative to *https://api.prowritingaid.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**asyncContextualThesaurusPost**](AsyncContextualThesaurusApi.md#asyncContextualThesaurusPost) | **POST** /api/async/contextualthesaurus | 


# **asyncContextualThesaurusPost**
> \Swagger\Client\Model\AsyncResponseContextualThesaurusResponse asyncContextualThesaurusPost($request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AsyncContextualThesaurusApi();
$request = new \Swagger\Client\Model\ContextualThesaurusRequest(); // \Swagger\Client\Model\ContextualThesaurusRequest | 

try {
    $result = $api_instance->asyncContextualThesaurusPost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AsyncContextualThesaurusApi->asyncContextualThesaurusPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ContextualThesaurusRequest**](../Model/\Swagger\Client\Model\ContextualThesaurusRequest.md)|  |

### Return type

[**\Swagger\Client\Model\AsyncResponseContextualThesaurusResponse**](../Model/AsyncResponseContextualThesaurusResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

