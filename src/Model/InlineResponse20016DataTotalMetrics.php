<?php
/**
 * InlineResponse20016DataTotalMetrics
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
 * InlineResponse20016DataTotalMetrics Class Doc Comment
 *
 * @category Class
 * @description 指标汇总数据
 * @package  Oceanengine\Open
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineResponse20016DataTotalMetrics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_16_data_total_metrics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'click_cnt' => 'string',
        'conversion_cost' => 'string',
        'conversion_rate' => 'string',
        'convert_cnt' => 'string',
        'cpc_platform' => 'string',
        'cpm_platform' => 'string',
        'ctr' => 'string',
        'deep_convert_cnt' => 'string',
        'deep_convert_cost' => 'string',
        'deep_convert_rate' => 'string',
        'show_cnt' => 'string',
        'stat_cost' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'click_cnt' => null,
        'conversion_cost' => null,
        'conversion_rate' => null,
        'convert_cnt' => null,
        'cpc_platform' => null,
        'cpm_platform' => null,
        'ctr' => null,
        'deep_convert_cnt' => null,
        'deep_convert_cost' => null,
        'deep_convert_rate' => null,
        'show_cnt' => null,
        'stat_cost' => null
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
        'click_cnt' => 'click_cnt',
        'conversion_cost' => 'conversion_cost',
        'conversion_rate' => 'conversion_rate',
        'convert_cnt' => 'convert_cnt',
        'cpc_platform' => 'cpc_platform',
        'cpm_platform' => 'cpm_platform',
        'ctr' => 'ctr',
        'deep_convert_cnt' => 'deep_convert_cnt',
        'deep_convert_cost' => 'deep_convert_cost',
        'deep_convert_rate' => 'deep_convert_rate',
        'show_cnt' => 'show_cnt',
        'stat_cost' => 'stat_cost'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'click_cnt' => 'setClickCnt',
        'conversion_cost' => 'setConversionCost',
        'conversion_rate' => 'setConversionRate',
        'convert_cnt' => 'setConvertCnt',
        'cpc_platform' => 'setCpcPlatform',
        'cpm_platform' => 'setCpmPlatform',
        'ctr' => 'setCtr',
        'deep_convert_cnt' => 'setDeepConvertCnt',
        'deep_convert_cost' => 'setDeepConvertCost',
        'deep_convert_rate' => 'setDeepConvertRate',
        'show_cnt' => 'setShowCnt',
        'stat_cost' => 'setStatCost'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'click_cnt' => 'getClickCnt',
        'conversion_cost' => 'getConversionCost',
        'conversion_rate' => 'getConversionRate',
        'convert_cnt' => 'getConvertCnt',
        'cpc_platform' => 'getCpcPlatform',
        'cpm_platform' => 'getCpmPlatform',
        'ctr' => 'getCtr',
        'deep_convert_cnt' => 'getDeepConvertCnt',
        'deep_convert_cost' => 'getDeepConvertCost',
        'deep_convert_rate' => 'getDeepConvertRate',
        'show_cnt' => 'getShowCnt',
        'stat_cost' => 'getStatCost'
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
        $this->container['click_cnt'] = isset($data['click_cnt']) ? $data['click_cnt'] : null;
        $this->container['conversion_cost'] = isset($data['conversion_cost']) ? $data['conversion_cost'] : null;
        $this->container['conversion_rate'] = isset($data['conversion_rate']) ? $data['conversion_rate'] : null;
        $this->container['convert_cnt'] = isset($data['convert_cnt']) ? $data['convert_cnt'] : null;
        $this->container['cpc_platform'] = isset($data['cpc_platform']) ? $data['cpc_platform'] : null;
        $this->container['cpm_platform'] = isset($data['cpm_platform']) ? $data['cpm_platform'] : null;
        $this->container['ctr'] = isset($data['ctr']) ? $data['ctr'] : null;
        $this->container['deep_convert_cnt'] = isset($data['deep_convert_cnt']) ? $data['deep_convert_cnt'] : null;
        $this->container['deep_convert_cost'] = isset($data['deep_convert_cost']) ? $data['deep_convert_cost'] : null;
        $this->container['deep_convert_rate'] = isset($data['deep_convert_rate']) ? $data['deep_convert_rate'] : null;
        $this->container['show_cnt'] = isset($data['show_cnt']) ? $data['show_cnt'] : null;
        $this->container['stat_cost'] = isset($data['stat_cost']) ? $data['stat_cost'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['click_cnt'] === null) {
            $invalidProperties[] = "'click_cnt' can't be null";
        }
        if ($this->container['conversion_cost'] === null) {
            $invalidProperties[] = "'conversion_cost' can't be null";
        }
        if ($this->container['conversion_rate'] === null) {
            $invalidProperties[] = "'conversion_rate' can't be null";
        }
        if ($this->container['convert_cnt'] === null) {
            $invalidProperties[] = "'convert_cnt' can't be null";
        }
        if ($this->container['cpc_platform'] === null) {
            $invalidProperties[] = "'cpc_platform' can't be null";
        }
        if ($this->container['cpm_platform'] === null) {
            $invalidProperties[] = "'cpm_platform' can't be null";
        }
        if ($this->container['ctr'] === null) {
            $invalidProperties[] = "'ctr' can't be null";
        }
        if ($this->container['deep_convert_cnt'] === null) {
            $invalidProperties[] = "'deep_convert_cnt' can't be null";
        }
        if ($this->container['deep_convert_cost'] === null) {
            $invalidProperties[] = "'deep_convert_cost' can't be null";
        }
        if ($this->container['deep_convert_rate'] === null) {
            $invalidProperties[] = "'deep_convert_rate' can't be null";
        }
        if ($this->container['show_cnt'] === null) {
            $invalidProperties[] = "'show_cnt' can't be null";
        }
        if ($this->container['stat_cost'] === null) {
            $invalidProperties[] = "'stat_cost' can't be null";
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
     * Gets click_cnt
     *
     * @return string
     */
    public function getClickCnt()
    {
        return $this->container['click_cnt'];
    }

    /**
     * Sets click_cnt
     *
     * @param string $click_cnt click_cnt
     *
     * @return $this
     */
    public function setClickCnt($click_cnt)
    {
        $this->container['click_cnt'] = $click_cnt;

        return $this;
    }

    /**
     * Gets conversion_cost
     *
     * @return string
     */
    public function getConversionCost()
    {
        return $this->container['conversion_cost'];
    }

    /**
     * Sets conversion_cost
     *
     * @param string $conversion_cost conversion_cost
     *
     * @return $this
     */
    public function setConversionCost($conversion_cost)
    {
        $this->container['conversion_cost'] = $conversion_cost;

        return $this;
    }

    /**
     * Gets conversion_rate
     *
     * @return string
     */
    public function getConversionRate()
    {
        return $this->container['conversion_rate'];
    }

    /**
     * Sets conversion_rate
     *
     * @param string $conversion_rate conversion_rate
     *
     * @return $this
     */
    public function setConversionRate($conversion_rate)
    {
        $this->container['conversion_rate'] = $conversion_rate;

        return $this;
    }

    /**
     * Gets convert_cnt
     *
     * @return string
     */
    public function getConvertCnt()
    {
        return $this->container['convert_cnt'];
    }

    /**
     * Sets convert_cnt
     *
     * @param string $convert_cnt convert_cnt
     *
     * @return $this
     */
    public function setConvertCnt($convert_cnt)
    {
        $this->container['convert_cnt'] = $convert_cnt;

        return $this;
    }

    /**
     * Gets cpc_platform
     *
     * @return string
     */
    public function getCpcPlatform()
    {
        return $this->container['cpc_platform'];
    }

    /**
     * Sets cpc_platform
     *
     * @param string $cpc_platform cpc_platform
     *
     * @return $this
     */
    public function setCpcPlatform($cpc_platform)
    {
        $this->container['cpc_platform'] = $cpc_platform;

        return $this;
    }

    /**
     * Gets cpm_platform
     *
     * @return string
     */
    public function getCpmPlatform()
    {
        return $this->container['cpm_platform'];
    }

    /**
     * Sets cpm_platform
     *
     * @param string $cpm_platform cpm_platform
     *
     * @return $this
     */
    public function setCpmPlatform($cpm_platform)
    {
        $this->container['cpm_platform'] = $cpm_platform;

        return $this;
    }

    /**
     * Gets ctr
     *
     * @return string
     */
    public function getCtr()
    {
        return $this->container['ctr'];
    }

    /**
     * Sets ctr
     *
     * @param string $ctr ctr
     *
     * @return $this
     */
    public function setCtr($ctr)
    {
        $this->container['ctr'] = $ctr;

        return $this;
    }

    /**
     * Gets deep_convert_cnt
     *
     * @return string
     */
    public function getDeepConvertCnt()
    {
        return $this->container['deep_convert_cnt'];
    }

    /**
     * Sets deep_convert_cnt
     *
     * @param string $deep_convert_cnt deep_convert_cnt
     *
     * @return $this
     */
    public function setDeepConvertCnt($deep_convert_cnt)
    {
        $this->container['deep_convert_cnt'] = $deep_convert_cnt;

        return $this;
    }

    /**
     * Gets deep_convert_cost
     *
     * @return string
     */
    public function getDeepConvertCost()
    {
        return $this->container['deep_convert_cost'];
    }

    /**
     * Sets deep_convert_cost
     *
     * @param string $deep_convert_cost deep_convert_cost
     *
     * @return $this
     */
    public function setDeepConvertCost($deep_convert_cost)
    {
        $this->container['deep_convert_cost'] = $deep_convert_cost;

        return $this;
    }

    /**
     * Gets deep_convert_rate
     *
     * @return string
     */
    public function getDeepConvertRate()
    {
        return $this->container['deep_convert_rate'];
    }

    /**
     * Sets deep_convert_rate
     *
     * @param string $deep_convert_rate deep_convert_rate
     *
     * @return $this
     */
    public function setDeepConvertRate($deep_convert_rate)
    {
        $this->container['deep_convert_rate'] = $deep_convert_rate;

        return $this;
    }

    /**
     * Gets show_cnt
     *
     * @return string
     */
    public function getShowCnt()
    {
        return $this->container['show_cnt'];
    }

    /**
     * Sets show_cnt
     *
     * @param string $show_cnt show_cnt
     *
     * @return $this
     */
    public function setShowCnt($show_cnt)
    {
        $this->container['show_cnt'] = $show_cnt;

        return $this;
    }

    /**
     * Gets stat_cost
     *
     * @return string
     */
    public function getStatCost()
    {
        return $this->container['stat_cost'];
    }

    /**
     * Sets stat_cost
     *
     * @param string $stat_cost stat_cost
     *
     * @return $this
     */
    public function setStatCost($stat_cost)
    {
        $this->container['stat_cost'] = $stat_cost;

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


