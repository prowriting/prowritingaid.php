# Swagger\Client\WordCloudApi

All URIs are relative to *https://api.prowritingaid.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**wordCloudPost**](WordCloudApi.md#wordCloudPost) | **POST** /api/wordcloud | 


# **wordCloudPost**
> \Swagger\Client\Model\WordCloudResponse wordCloudPost($request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\WordCloudApi();
$request = new \Swagger\Client\Model\WordCloudRequest(); // \Swagger\Client\Model\WordCloudRequest | 

try {
    $result = $api_instance->wordCloudPost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordCloudApi->wordCloudPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WordCloudRequest**](../Model/\Swagger\Client\Model\WordCloudRequest.md)|  |

### Return type

[**\Swagger\Client\Model\WordCloudResponse**](../Model/WordCloudResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

