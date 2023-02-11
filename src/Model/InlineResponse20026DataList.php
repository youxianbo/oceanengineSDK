<?php
/**
 * InlineResponse20026DataList
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
 * InlineResponse20026DataList Class Doc Comment
 *
 * @category Class
 * @package  Oceanengine\Open
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineResponse20026DataList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_26_data_list';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'open_id' => 'string',
        'aweme_id' => 'string',
        'authorize_times' => '\Oceanengine\Open\Model\InlineResponse20026DataAuthorizeTimes[]',
        'aweme_name' => 'string',
        'aweme_avatar' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'open_id' => null,
        'aweme_id' => null,
        'authorize_times' => null,
        'aweme_name' => null,
        'aweme_avatar' => null
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
        'open_id' => 'open_id',
        'aweme_id' => 'aweme_id',
        'authorize_times' => 'authorize_times',
        'aweme_name' => 'aweme_name',
        'aweme_avatar' => 'aweme_avatar'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'open_id' => 'setOpenId',
        'aweme_id' => 'setAwemeId',
        'authorize_times' => 'setAuthorizeTimes',
        'aweme_name' => 'setAwemeName',
        'aweme_avatar' => 'setAwemeAvatar'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'open_id' => 'getOpenId',
        'aweme_id' => 'getAwemeId',
        'authorize_times' => 'getAuthorizeTimes',
        'aweme_name' => 'getAwemeName',
        'aweme_avatar' => 'getAwemeAvatar'
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
        $this->container['open_id'] = isset($data['open_id']) ? $data['open_id'] : null;
        $this->container['aweme_id'] = isset($data['aweme_id']) ? $data['aweme_id'] : null;
        $this->container['authorize_times'] = isset($data['authorize_times']) ? $data['authorize_times'] : null;
        $this->container['aweme_name'] = isset($data['aweme_name']) ? $data['aweme_name'] : null;
        $this->container['aweme_avatar'] = isset($data['aweme_avatar']) ? $data['aweme_avatar'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['open_id'] === null) {
            $invalidProperties[] = "'open_id' can't be null";
        }
        if ($this->container['aweme_id'] === null) {
            $invalidProperties[] = "'aweme_id' can't be null";
        }
        if ($this->container['authorize_times'] === null) {
            $invalidProperties[] = "'authorize_times' can't be null";
        }
        if ($this->container['aweme_name'] === null) {
            $invalidProperties[] = "'aweme_name' can't be null";
        }
        if ($this->container['aweme_avatar'] === null) {
            $invalidProperties[] = "'aweme_avatar' can't be null";
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
     * Gets open_id
     *
     * @return string
     */
    public function getOpenId()
    {
        return $this->container['open_id'];
    }

    /**
     * Sets open_id
     *
     * @param string $open_id open_id
     *
     * @return $this
     */
    public function setOpenId($open_id)
    {
        $this->container['open_id'] = $open_id;

        return $this;
    }

    /**
     * Gets aweme_id
     *
     * @return string
     */
    public function getAwemeId()
    {
        return $this->container['aweme_id'];
    }

    /**
     * Sets aweme_id
     *
     * @param string $aweme_id aweme_id
     *
     * @return $this
     */
    public function setAwemeId($aweme_id)
    {
        $this->container['aweme_id'] = $aweme_id;

        return $this;
    }

    /**
     * Gets authorize_times
     *
     * @return \Oceanengine\Open\Model\InlineResponse20026DataAuthorizeTimes[]
     */
    public function getAuthorizeTimes()
    {
        return $this->container['authorize_times'];
    }

    /**
     * Sets authorize_times
     *
     * @param \Oceanengine\Open\Model\InlineResponse20026DataAuthorizeTimes[] $authorize_times authorize_times
     *
     * @return $this
     */
    public function setAuthorizeTimes($authorize_times)
    {
        $this->container['authorize_times'] = $authorize_times;

        return $this;
    }

    /**
     * Gets aweme_name
     *
     * @return string
     */
    public function getAwemeName()
    {
        return $this->container['aweme_name'];
    }

    /**
     * Sets aweme_name
     *
     * @param string $aweme_name aweme_name
     *
     * @return $this
     */
    public function setAwemeName($aweme_name)
    {
        $this->container['aweme_name'] = $aweme_name;

        return $this;
    }

    /**
     * Gets aweme_avatar
     *
     * @return string
     */
    public function getAwemeAvatar()
    {
        return $this->container['aweme_avatar'];
    }

    /**
     * Sets aweme_avatar
     *
     * @param string $aweme_avatar aweme_avatar
     *
     * @return $this
     */
    public function setAwemeAvatar($aweme_avatar)
    {
        $this->container['aweme_avatar'] = $aweme_avatar;

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


