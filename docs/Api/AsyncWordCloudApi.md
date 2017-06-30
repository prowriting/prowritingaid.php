# Swagger\Client\AsyncWordCloudApi

All URIs are relative to *https://api.prowritingaid.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**asyncWordCloudPost**](AsyncWordCloudApi.md#asyncWordCloudPost) | **POST** /api/async/wordcloud | 


# **asyncWordCloudPost**
> \Swagger\Client\Model\AsyncResponseWordCloudResponse asyncWordCloudPost($request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AsyncWordCloudApi();
$request = new \Swagger\Client\Model\WordCloudRequest(); // \Swagger\Client\Model\WordCloudRequest | 

try {
    $result = $api_instance->asyncWordCloudPost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AsyncWordCloudApi->asyncWordCloudPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WordCloudRequest**](../Model/\Swagger\Client\Model\WordCloudRequest.md)|  |

### Return type

[**\Swagger\Client\Model\AsyncResponseWordCloudResponse**](../Model/AsyncResponseWordCloudResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

