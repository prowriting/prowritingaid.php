<?php
/**
 * HtmlAnalysisResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * AnalysisBackend
 *
 * No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * HtmlAnalysisResponse Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class HtmlAnalysisResponse implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'HtmlAnalysisResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'html' => 'string',
        'word_count' => 'int',
        'summaries' => '\Swagger\Client\Model\AnalysisSummary[]'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'html' => 'Html',
        'word_count' => 'WordCount',
        'summaries' => 'Summaries'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'html' => 'setHtml',
        'word_count' => 'setWordCount',
        'summaries' => 'setSummaries'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'html' => 'getHtml',
        'word_count' => 'getWordCount',
        'summaries' => 'getSummaries'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['html'] = isset($data['html']) ? $data['html'] : null;
        $this->container['word_count'] = isset($data['word_count']) ? $data['word_count'] : null;
        $this->container['summaries'] = isset($data['summaries']) ? $data['summaries'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['html'] === null) {
            $invalid_properties[] = "'html' can't be null";
        }
        if ($this->container['word_count'] === null) {
            $invalid_properties[] = "'word_count' can't be null";
        }
        if ($this->container['summaries'] === null) {
            $invalid_properties[] = "'summaries' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['html'] === null) {
            return false;
        }
        if ($this->container['word_count'] === null) {
            return false;
        }
        if ($this->container['summaries'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets html
     * @return string
     */
    public function getHtml()
    {
        return $this->container['html'];
    }

    /**
     * Sets html
     * @param string $html
     * @return $this
     */
    public function setHtml($html)
    {
        $this->container['html'] = $html;

        return $this;
    }

    /**
     * Gets word_count
     * @return int
     */
    public function getWordCount()
    {
        return $this->container['word_count'];
    }

    /**
     * Sets word_count
     * @param int $word_count
     * @return $this
     */
    public function setWordCount($word_count)
    {
        $this->container['word_count'] = $word_count;

        return $this;
    }

    /**
     * Gets summaries
     * @return \Swagger\Client\Model\AnalysisSummary[]
     */
    public function getSummaries()
    {
        return $this->container['summaries'];
    }

    /**
     * Sets summaries
     * @param \Swagger\Client\Model\AnalysisSummary[] $summaries
     * @return $this
     */
    public function setSummaries($summaries)
    {
        $this->container['summaries'] = $summaries;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


