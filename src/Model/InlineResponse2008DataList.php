<?php
/**
 * InlineResponse2008DataList
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
 * InlineResponse2008DataList Class Doc Comment
 *
 * @category Class
 * @package  Oceanengine\Open
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineResponse2008DataList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_8_data_list';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'avg_show_cost' => 'float',
        'show' => 'int',
        'ad_name' => 'string',
        'convert_rate' => 'float',
        'stat_datetime' => 'string',
        'campaign_id' => 'string',
        'campaign_name' => 'string',
        'click' => 'int',
        'cost' => 'float',
        'ad_id' => 'string',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'avg_show_cost' => null,
        'show' => 'int32',
        'ad_name' => null,
        'convert_rate' => null,
        'stat_datetime' => null,
        'campaign_id' => null,
        'campaign_name' => null,
        'click' => 'int32',
        'cost' => null,
        'ad_id' => null,
        'id' => null
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
        'avg_show_cost' => 'avg_show_cost',
        'show' => 'show',
        'ad_name' => 'ad_name',
        'convert_rate' => 'convert_rate',
        'stat_datetime' => 'stat_datetime',
        'campaign_id' => 'campaign_id',
        'campaign_name' => 'campaign_name',
        'click' => 'click',
        'cost' => 'cost',
        'ad_id' => 'ad_id',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'avg_show_cost' => 'setAvgShowCost',
        'show' => 'setShow',
        'ad_name' => 'setAdName',
        'convert_rate' => 'setConvertRate',
        'stat_datetime' => 'setStatDatetime',
        'campaign_id' => 'setCampaignId',
        'campaign_name' => 'setCampaignName',
        'click' => 'setClick',
        'cost' => 'setCost',
        'ad_id' => 'setAdId',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'avg_show_cost' => 'getAvgShowCost',
        'show' => 'getShow',
        'ad_name' => 'getAdName',
        'convert_rate' => 'getConvertRate',
        'stat_datetime' => 'getStatDatetime',
        'campaign_id' => 'getCampaignId',
        'campaign_name' => 'getCampaignName',
        'click' => 'getClick',
        'cost' => 'getCost',
        'ad_id' => 'getAdId',
        'id' => 'getId'
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
        $this->container['avg_show_cost'] = isset($data['avg_show_cost']) ? $data['avg_show_cost'] : null;
        $this->container['show'] = isset($data['show']) ? $data['show'] : null;
        $this->container['ad_name'] = isset($data['ad_name']) ? $data['ad_name'] : null;
        $this->container['convert_rate'] = isset($data['convert_rate']) ? $data['convert_rate'] : null;
        $this->container['stat_datetime'] = isset($data['stat_datetime']) ? $data['stat_datetime'] : null;
        $this->container['campaign_id'] = isset($data['campaign_id']) ? $data['campaign_id'] : null;
        $this->container['campaign_name'] = isset($data['campaign_name']) ? $data['campaign_name'] : null;
        $this->container['click'] = isset($data['click']) ? $data['click'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['ad_id'] = isset($data['ad_id']) ? $data['ad_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['avg_show_cost'] === null) {
            $invalidProperties[] = "'avg_show_cost' can't be null";
        }
        if ($this->container['show'] === null) {
            $invalidProperties[] = "'show' can't be null";
        }
        if ($this->container['ad_name'] === null) {
            $invalidProperties[] = "'ad_name' can't be null";
        }
        if ($this->container['convert_rate'] === null) {
            $invalidProperties[] = "'convert_rate' can't be null";
        }
        if ($this->container['stat_datetime'] === null) {
            $invalidProperties[] = "'stat_datetime' can't be null";
        }
        if ($this->container['campaign_id'] === null) {
            $invalidProperties[] = "'campaign_id' can't be null";
        }
        if ($this->container['campaign_name'] === null) {
            $invalidProperties[] = "'campaign_name' can't be null";
        }
        if ($this->container['click'] === null) {
            $invalidProperties[] = "'click' can't be null";
        }
        if ($this->container['cost'] === null) {
            $invalidProperties[] = "'cost' can't be null";
        }
        if ($this->container['ad_id'] === null) {
            $invalidProperties[] = "'ad_id' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
     * Gets avg_show_cost
     *
     * @return float
     */
    public function getAvgShowCost()
    {
        return $this->container['avg_show_cost'];
    }

    /**
     * Sets avg_show_cost
     *
     * @param float $avg_show_cost avg_show_cost
     *
     * @return $this
     */
    public function setAvgShowCost($avg_show_cost)
    {
        $this->container['avg_show_cost'] = $avg_show_cost;

        return $this;
    }

    /**
     * Gets show
     *
     * @return int
     */
    public function getShow()
    {
        return $this->container['show'];
    }

    /**
     * Sets show
     *
     * @param int $show show
     *
     * @return $this
     */
    public function setShow($show)
    {
        $this->container['show'] = $show;

        return $this;
    }

    /**
     * Gets ad_name
     *
     * @return string
     */
    public function getAdName()
    {
        return $this->container['ad_name'];
    }

    /**
     * Sets ad_name
     *
     * @param string $ad_name ad_name
     *
     * @return $this
     */
    public function setAdName($ad_name)
    {
        $this->container['ad_name'] = $ad_name;

        return $this;
    }

    /**
     * Gets convert_rate
     *
     * @return float
     */
    public function getConvertRate()
    {
        return $this->container['convert_rate'];
    }

    /**
     * Sets convert_rate
     *
     * @param float $convert_rate convert_rate
     *
     * @return $this
     */
    public function setConvertRate($convert_rate)
    {
        $this->container['convert_rate'] = $convert_rate;

        return $this;
    }

    /**
     * Gets stat_datetime
     *
     * @return string
     */
    public function getStatDatetime()
    {
        return $this->container['stat_datetime'];
    }

    /**
     * Sets stat_datetime
     *
     * @param string $stat_datetime stat_datetime
     *
     * @return $this
     */
    public function setStatDatetime($stat_datetime)
    {
        $this->container['stat_datetime'] = $stat_datetime;

        return $this;
    }

    /**
     * Gets campaign_id
     *
     * @return string
     */
    public function getCampaignId()
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     *
     * @param string $campaign_id campaign_id
     *
     * @return $this
     */
    public function setCampaignId($campaign_id)
    {
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets campaign_name
     *
     * @return string
     */
    public function getCampaignName()
    {
        return $this->container['campaign_name'];
    }

    /**
     * Sets campaign_name
     *
     * @param string $campaign_name campaign_name
     *
     * @return $this
     */
    public function setCampaignName($campaign_name)
    {
        $this->container['campaign_name'] = $campaign_name;

        return $this;
    }

    /**
     * Gets click
     *
     * @return int
     */
    public function getClick()
    {
        return $this->container['click'];
    }

    /**
     * Sets click
     *
     * @param int $click click
     *
     * @return $this
     */
    public function setClick($click)
    {
        $this->container['click'] = $click;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return float
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param float $cost cost
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets ad_id
     *
     * @return string
     */
    public function getAdId()
    {
        return $this->container['ad_id'];
    }

    /**
     * Sets ad_id
     *
     * @param string $ad_id ad_id
     *
     * @return $this
     */
    public function setAdId($ad_id)
    {
        $this->container['ad_id'] = $ad_id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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


