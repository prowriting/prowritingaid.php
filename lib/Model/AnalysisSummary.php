<?php
/**
 * AnalysisSummary
 *
 * PHP version 5
 *
 * @category Class
 * @package  ProWritingAidSDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ProWritingAid API V2
 *
 * Official ProWritingAid API Version 2
 *
 * OpenAPI spec version: v2
 * Contact: hello@prowritingaid.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ProWritingAidSDK\Model;

use \ArrayAccess;
use \ProWritingAidSDK\ObjectSerializer;

/**
 * AnalysisSummary Class Doc Comment
 *
 * @category Class
 * @description Represents report summary
 * @package  ProWritingAidSDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AnalysisSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AnalysisSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'report_display_name' => 'string',
        'report_name' => 'string',
        'summary_items' => '\ProWritingAidSDK\Model\AnalysisSummaryItem[]',
        'number_of_issues' => 'int',
        'report_description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'report_display_name' => null,
        'report_name' => null,
        'summary_items' => null,
        'number_of_issues' => 'int32',
        'report_description' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'report_display_name' => 'ReportDisplayName',
        'report_name' => 'ReportName',
        'summary_items' => 'SummaryItems',
        'number_of_issues' => 'NumberOfIssues',
        'report_description' => 'ReportDescription'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'report_display_name' => 'setReportDisplayName',
        'report_name' => 'setReportName',
        'summary_items' => 'setSummaryItems',
        'number_of_issues' => 'setNumberOfIssues',
        'report_description' => 'setReportDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'report_display_name' => 'getReportDisplayName',
        'report_name' => 'getReportName',
        'summary_items' => 'getSummaryItems',
        'number_of_issues' => 'getNumberOfIssues',
        'report_description' => 'getReportDescription'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['report_display_name'] = isset($data['report_display_name']) ? $data['report_display_name'] : null;
        $this->container['report_name'] = isset($data['report_name']) ? $data['report_name'] : null;
        $this->container['summary_items'] = isset($data['summary_items']) ? $data['summary_items'] : null;
        $this->container['number_of_issues'] = isset($data['number_of_issues']) ? $data['number_of_issues'] : null;
        $this->container['report_description'] = isset($data['report_description']) ? $data['report_description'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets report_display_name
     *
     * @return string
     */
    public function getReportDisplayName()
    {
        return $this->container['report_display_name'];
    }

    /**
     * Sets report_display_name
     *
     * @param string $report_display_name Report's display name
     *
     * @return $this
     */
    public function setReportDisplayName($report_display_name)
    {
        $this->container['report_display_name'] = $report_display_name;

        return $this;
    }

    /**
     * Gets report_name
     *
     * @return string
     */
    public function getReportName()
    {
        return $this->container['report_name'];
    }

    /**
     * Sets report_name
     *
     * @param string $report_name Report's ID
     *
     * @return $this
     */
    public function setReportName($report_name)
    {
        $this->container['report_name'] = $report_name;

        return $this;
    }

    /**
     * Gets summary_items
     *
     * @return \ProWritingAidSDK\Model\AnalysisSummaryItem[]
     */
    public function getSummaryItems()
    {
        return $this->container['summary_items'];
    }

    /**
     * Sets summary_items
     *
     * @param \ProWritingAidSDK\Model\AnalysisSummaryItem[] $summary_items Found issues
     *
     * @return $this
     */
    public function setSummaryItems($summary_items)
    {
        $this->container['summary_items'] = $summary_items;

        return $this;
    }

    /**
     * Gets number_of_issues
     *
     * @return int
     */
    public function getNumberOfIssues()
    {
        return $this->container['number_of_issues'];
    }

    /**
     * Sets number_of_issues
     *
     * @param int $number_of_issues Number of found issues
     *
     * @return $this
     */
    public function setNumberOfIssues($number_of_issues)
    {
        $this->container['number_of_issues'] = $number_of_issues;

        return $this;
    }

    /**
     * Gets report_description
     *
     * @return string
     */
    public function getReportDescription()
    {
        return $this->container['report_description'];
    }

    /**
     * Sets report_description
     *
     * @param string $report_description Short report description
     *
     * @return $this
     */
    public function setReportDescription($report_description)
    {
        $this->container['report_description'] = $report_description;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


