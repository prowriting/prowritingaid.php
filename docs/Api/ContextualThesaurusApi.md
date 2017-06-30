# Swagger\Client\ContextualThesaurusApi

All URIs are relative to *https://api.prowritingaid.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**contextualThesaurusPost**](ContextualThesaurusApi.md#contextualThesaurusPost) | **POST** /api/contextualthesaurus | 


# **contextualThesaurusPost**
> \Swagger\Client\Model\ContextualThesaurusResponse contextualThesaurusPost($request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContextualThesaurusApi();
$request = new \Swagger\Client\Model\ContextualThesaurusRequest(); // \Swagger\Client\Model\ContextualThesaurusRequest | 

try {
    $result = $api_instance->contextualThesaurusPost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContextualThesaurusApi->contextualThesaurusPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ContextualThesaurusRequest**](../Model/\Swagger\Client\Model\ContextualThesaurusRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ContextualThesaurusResponse**](../Model/ContextualThesaurusResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

