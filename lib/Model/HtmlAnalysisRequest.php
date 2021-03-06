<?php
/**
 * HtmlAnalysisRequest
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
 * HtmlAnalysisRequest Class Doc Comment
 *
 * @category Class
 * @description ## Available Reports  Below is a list of the currently available reports from ProWritingAid. If you would like a different report, or require extra information, such as tokenization, sentence split, parts of speech, etc. then please [get in touch](https://prowritingaid.com/en/Home/Contact).    Report Name | Status | Description  ------------ | ------------- | -------------  acronym | Live | Shows all the acronyms in your writing and highlights where they haven&#39;t been defined, or have been defined after the first occurrence, or have been defined multiple times.. |  alliteration | Live | Highlights alliterations in your writing. Alliterations are a linguistic tool used by some writers for effect.. |  allrepeats | Development | Highlights words and phrases that you&#39;ve used repeatedly in your text. |  allsentences | Live | Shows a visual representation of the sentences lengths of your writing. Try and vary the sentence lengths to maintain the interest of the reader.. |  bully | Development | Highlights bullying and vulgar language in your text.. |  cliche | Live | Scours your work for cliches and highlights them. Nobody likes to read a cliche so best to avoid them. Redundant expressions can also be removed as they say the same thing twice.. |  closerepeat | Development | Highlights any words and phrases that you have repeated within a short space of writing. Try and think of something else to say.. |  complex | Live | Highlights complex words in your writing. Words are broken down by number of syllables.. |  consistency | Live | Highlights inconsistency in your text. Picking up inconsistencies in your text can be one of the hardest editing tasks.. |  core | Development | Core findings. |  coreplus | Development | Core findings. |  corporate | Live | Highlights uses of corporate wording that can be simplified to clarify your document.. |  dialog | Live | Highlights the dialogue tags in your text. Editors prefer minimal use of all dialogue tags (except for &#39;said&#39;).. |  diction | Live | Provides a list of possible diction problems and suggestions on how you might revise them.. |  dva | Live | Highlights diction problems, vague and abstract words in your text.. |  eloquence | Live | Designed to help you develop your use of stylistic writing techniques such as alliteration, epistrophe, and hendiadys. The items in this report are not suggestions, just aids to help you along the way.. |  grammar | Live | Checks your text for grammar errors and potential word mis-use.. |  grammarplus | Live | Checks your text for grammar errors and potential word mis-use.. |  homonym | Live | Helps you check for incorrect word usage. Homonyms are words which sound alike yet are spelled differently. For example: there, their and they&#39;re or raw and roar.. |  house | Development | A blank report for you to create your own patterns in. Ideal for a house style. Go to the settings screen to set-up your own patterns. . |  initial | Live | Highlights the initial pronouns in your text. Repetitive use of initial pronouns can lead to boring text, e.g. He did this. He did that. He did another thing.. |  nlp | Development | Our NLP Predicate Words report allows you to easily identify the key modality or representation system of a piece of text. If you are analyzing a document written by someone else then this will give you an idea of their preferred representational system. This may help you tailor your writing in order to build rapport. If you don&#39;t know the modality of your reader then try to use a balance of words from each modality. This will broaden the appeal of your writing.. |  overused | Live | Compares the frequency of commonly overused words in your text to published writing to give you an indication of where you may be over-using words.. |  overusedonly | Live | Compares the frequency of commonly overused words in your text to published writing to give you an indication of where you may be over-using words.. |  overview | Live | Gives you an overview of the key metrics for your document.. |  pacing | Live | Identifies the slower paced parts of your manuscript, such as introspection and backstory so you can spread them out. Try not to have too many slower paced paragraphs in a row as this can get boring.. |  paragraph_readability | Live | Shows you the relative readability of each paragraph in your text.. |  passive | Live | Highlights areas where your writing style might be improved, such as use of passive and hidden verbs.. |  phrases | Live | Provides a summary of all the phrases that you have repeated in your writing. Try and cut down on repeats.. |  plagiarism | Live | Identifies parts of your text that occur in other documents. Scans millions of web-pages, books, and academic papers.. |  plength | Live | A visual representation of the paragraph lengths of your writing. Avoid writing more than five or six sentences in a paragraph. Also try to avoid too many short paragraphs.. |  preadability | Live | Provides a series of readability measures for your text so you can determine if it is suitable for your intended audience.. |  readability | Live | Provides a series of readability measures for your text so you can determine if it is suitable for your intended audience.. |  sentiment | Live | Shows a histogram of the sentiment in your story so you can monitor large swings.. |  sentimentwords | Development | Highlights words that have a sentiment bias in your text, and grades them.. |  seo | Development | Shows how yout text can be optimized to appear higher in Google rankings.. |  slength | Live | Shows a visual representation of the sentences lengths of your writing. Try and vary the sentence lengths to maintain the interest of the reader.. |  ssentences | Live | Shows sticky sentences in your writing. Sticky sentences slow your reader down; try to avoid them.. |  ssentences_noglue | Live | Shows sticky sentences in your writing. Sticky sentences slow your reader down; try to avoid them.. |  structure | Live | Highlights the key structure of a document such as sentences and paragraphs.. |  thesaurus | Beta | Shows possible replacements for nouns, verbs, adjectives and adverbs.. |  time | Live | Highlights any temporal references in your text so you can check for inconsistency and view the time-line of your text.. |  topics | Live | Suggested topics that are related to the subject matter of your text.. |  transition | Live | Highlights the transitions in your report. Transitions help organize ideas. Writing that is short on transitions is often hard to follow. Non-fiction writing that has under 1 transition per 4 sentences tends to be less understandable.. |  vague | Live | Provides a list of words that may be considered vague or abstract. Consider strengthening them.. |  wordcloud | Live | Shows you a word cloud of the most commonly occuring words in your text.. |  wordsandphrases | Deprecated | Highlights any words and phrases that you have repeated within a short space of writing. Try and think of something else to say.. |  wordsphrases | Live | Highlights any words and phrases that you have repeated within a short space of writing. Try and think of something else to say.. |
 * @package  ProWritingAidSDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HtmlAnalysisRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HtmlAnalysisRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'html' => 'string',
        'reports' => 'string[]',
        'style' => 'string',
        'language' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'html' => null,
        'reports' => null,
        'style' => null,
        'language' => null
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
        'html' => 'Html',
        'reports' => 'Reports',
        'style' => 'Style',
        'language' => 'Language'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'html' => 'setHtml',
        'reports' => 'setReports',
        'style' => 'setStyle',
        'language' => 'setLanguage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'html' => 'getHtml',
        'reports' => 'getReports',
        'style' => 'getStyle',
        'language' => 'getLanguage'
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

    const STYLE_NOT_SET = 'NotSet';
    const STYLE_GENERAL = 'General';
    const STYLE_ACADEMIC = 'Academic';
    const STYLE_BUSINESS = 'Business';
    const STYLE_TECHNICAL = 'Technical';
    const STYLE_CREATIVE = 'Creative';
    const STYLE_CASUAL = 'Casual';
    const STYLE_WEB = 'Web';
    const LANGUAGE_EN_US = 'en_US';
    const LANGUAGE_EN_UK = 'en_UK';
    const LANGUAGE_EN_AU = 'en_AU';
    const LANGUAGE_EN_CA = 'en_CA';
    const LANGUAGE_EN = 'en';
    const LANGUAGE_ES = 'es';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStyleAllowableValues()
    {
        return [
            self::STYLE_NOT_SET,
            self::STYLE_GENERAL,
            self::STYLE_ACADEMIC,
            self::STYLE_BUSINESS,
            self::STYLE_TECHNICAL,
            self::STYLE_CREATIVE,
            self::STYLE_CASUAL,
            self::STYLE_WEB,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLanguageAllowableValues()
    {
        return [
            self::LANGUAGE_EN_US,
            self::LANGUAGE_EN_UK,
            self::LANGUAGE_EN_AU,
            self::LANGUAGE_EN_CA,
            self::LANGUAGE_EN,
            self::LANGUAGE_ES,
        ];
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
        $this->container['html'] = isset($data['html']) ? $data['html'] : null;
        $this->container['reports'] = isset($data['reports']) ? $data['reports'] : null;
        $this->container['style'] = isset($data['style']) ? $data['style'] : 'General';
        $this->container['language'] = isset($data['language']) ? $data['language'] : 'en';
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['html'] === null) {
            $invalidProperties[] = "'html' can't be null";
        }
        if ($this->container['reports'] === null) {
            $invalidProperties[] = "'reports' can't be null";
        }
        if ($this->container['style'] === null) {
            $invalidProperties[] = "'style' can't be null";
        }
        $allowedValues = $this->getStyleAllowableValues();
        if (!is_null($this->container['style']) && !in_array($this->container['style'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'style', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        $allowedValues = $this->getLanguageAllowableValues();
        if (!is_null($this->container['language']) && !in_array($this->container['language'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'language', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets html
     *
     * @return string
     */
    public function getHtml()
    {
        return $this->container['html'];
    }

    /**
     * Sets html
     *
     * @param string $html Html to be processed
     *
     * @return $this
     */
    public function setHtml($html)
    {
        $this->container['html'] = $html;

        return $this;
    }

    /**
     * Gets reports
     *
     * @return string[]
     */
    public function getReports()
    {
        return $this->container['reports'];
    }

    /**
     * Sets reports
     *
     * @param string[] $reports List of reports - EXAMPLE: [\"grammar\",\"overused\"]
     *
     * @return $this
     */
    public function setReports($reports)
    {
        $this->container['reports'] = $reports;

        return $this;
    }

    /**
     * Gets style
     *
     * @return string
     */
    public function getStyle()
    {
        return $this->container['style'];
    }

    /**
     * Sets style
     *
     * @param string $style Document's writing style
     *
     * @return $this
     */
    public function setStyle($style)
    {
        $allowedValues = $this->getStyleAllowableValues();
        if (!in_array($style, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'style', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['style'] = $style;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language Document's language. Set correct UK/US language to get region-specific suggestions
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $allowedValues = $this->getLanguageAllowableValues();
        if (!in_array($language, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'language', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['language'] = $language;

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


