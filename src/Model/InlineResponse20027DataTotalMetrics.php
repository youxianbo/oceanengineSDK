<?php
/**
 * InlineResponse20027DataTotalMetrics
 *
 * PHP version 5
 *
 * @category Class
 * @package  Oceanengine\Open
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * 巨量开放接口
 *
 * 根据项目需求完成的接口，非所有接口都有相应的代码
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Oceanengine\Open\Model;

use \ArrayAccess;
use \Oceanengine\Open\ObjectSerializer;

/**
 * InlineResponse20027DataTotalMetrics Class Doc Comment
 *
 * @category Class
 * @package  Oceanengine\Open
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineResponse20027DataTotalMetrics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_27_data_total_metrics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'business_page_home_visited' => 'string',
        'business_page_new_fans_num' => 'string',
        'business_page_total_play' => 'string',
        'business_page_like' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'business_page_home_visited' => null,
        'business_page_new_fans_num' => null,
        'business_page_total_play' => null,
        'business_page_like' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'business_page_home_visited' => 'business_page_home_visited',
        'business_page_new_fans_num' => 'business_page_new_fans_num',
        'business_page_total_play' => 'business_page_total_play',
        'business_page_like' => 'business_page_like'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'business_page_home_visited' => 'setBusinessPageHomeVisited',
        'business_page_new_fans_num' => 'setBusinessPageNewFansNum',
        'business_page_total_play' => 'setBusinessPageTotalPlay',
        'business_page_like' => 'setBusinessPageLike'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'business_page_home_visited' => 'getBusinessPageHomeVisited',
        'business_page_new_fans_num' => 'getBusinessPageNewFansNum',
        'business_page_total_play' => 'getBusinessPageTotalPlay',
        'business_page_like' => 'getBusinessPageLike'
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
        return self::$openAPIModelName;
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
        $this->container['business_page_home_visited'] = isset($data['business_page_home_visited']) ? $data['business_page_home_visited'] : null;
        $this->container['business_page_new_fans_num'] = isset($data['business_page_new_fans_num']) ? $data['business_page_new_fans_num'] : null;
        $this->container['business_page_total_play'] = isset($data['business_page_total_play']) ? $data['business_page_total_play'] : null;
        $this->container['business_page_like'] = isset($data['business_page_like']) ? $data['business_page_like'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['business_page_home_visited'] === null) {
            $invalidProperties[] = "'business_page_home_visited' can't be null";
        }
        if ($this->container['business_page_new_fans_num'] === null) {
            $invalidProperties[] = "'business_page_new_fans_num' can't be null";
        }
        if ($this->container['business_page_total_play'] === null) {
            $invalidProperties[] = "'business_page_total_play' can't be null";
        }
        if ($this->container['business_page_like'] === null) {
            $invalidProperties[] = "'business_page_like' can't be null";
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
     * Gets business_page_home_visited
     *
     * @return string
     */
    public function getBusinessPageHomeVisited()
    {
        return $this->container['business_page_home_visited'];
    }

    /**
     * Sets business_page_home_visited
     *
     * @param string $business_page_home_visited business_page_home_visited
     *
     * @return $this
     */
    public function setBusinessPageHomeVisited($business_page_home_visited)
    {
        $this->container['business_page_home_visited'] = $business_page_home_visited;

        return $this;
    }

    /**
     * Gets business_page_new_fans_num
     *
     * @return string
     */
    public function getBusinessPageNewFansNum()
    {
        return $this->container['business_page_new_fans_num'];
    }

    /**
     * Sets business_page_new_fans_num
     *
     * @param string $business_page_new_fans_num business_page_new_fans_num
     *
     * @return $this
     */
    public function setBusinessPageNewFansNum($business_page_new_fans_num)
    {
        $this->container['business_page_new_fans_num'] = $business_page_new_fans_num;

        return $this;
    }

    /**
     * Gets business_page_total_play
     *
     * @return string
     */
    public function getBusinessPageTotalPlay()
    {
        return $this->container['business_page_total_play'];
    }

    /**
     * Sets business_page_total_play
     *
     * @param string $business_page_total_play business_page_total_play
     *
     * @return $this
     */
    public function setBusinessPageTotalPlay($business_page_total_play)
    {
        $this->container['business_page_total_play'] = $business_page_total_play;

        return $this;
    }

    /**
     * Gets business_page_like
     *
     * @return string
     */
    public function getBusinessPageLike()
    {
        return $this->container['business_page_like'];
    }

    /**
     * Sets business_page_like
     *
     * @param string $business_page_like business_page_like
     *
     * @return $this
     */
    public function setBusinessPageLike($business_page_like)
    {
        $this->container['business_page_like'] = $business_page_like;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

