<?php
/**
 * InlineObject12
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
 * InlineObject12 Class Doc Comment
 *
 * @category Class
 * @package  Oceanengine\Open
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineObject12 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_12';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'advertiser_id' => 'string',
        'start_time' => 'string',
        'end_time' => 'string',
        'last_start_time' => 'string',
        'last_end_time' => 'string',
        'fields' => 'string',
        'ratio_fields' => 'string',
        'time_dimension' => 'string',
        'order_field' => 'string',
        'order_type' => 'string',
        'filter' => 'string',
        'offset' => 'string',
        'limit' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'advertiser_id' => null,
        'start_time' => null,
        'end_time' => null,
        'last_start_time' => null,
        'last_end_time' => null,
        'fields' => null,
        'ratio_fields' => null,
        'time_dimension' => null,
        'order_field' => null,
        'order_type' => null,
        'filter' => null,
        'offset' => null,
        'limit' => null
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
        'advertiser_id' => 'advertiser_id',
        'start_time' => 'start_time',
        'end_time' => 'end_time',
        'last_start_time' => 'last_start_time',
        'last_end_time' => 'last_end_time',
        'fields' => 'fields',
        'ratio_fields' => 'ratio_fields',
        'time_dimension' => 'time_dimension',
        'order_field' => 'order_field',
        'order_type' => 'order_type',
        'filter' => 'filter',
        'offset' => 'offset',
        'limit' => 'limit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'advertiser_id' => 'setAdvertiserId',
        'start_time' => 'setStartTime',
        'end_time' => 'setEndTime',
        'last_start_time' => 'setLastStartTime',
        'last_end_time' => 'setLastEndTime',
        'fields' => 'setFields',
        'ratio_fields' => 'setRatioFields',
        'time_dimension' => 'setTimeDimension',
        'order_field' => 'setOrderField',
        'order_type' => 'setOrderType',
        'filter' => 'setFilter',
        'offset' => 'setOffset',
        'limit' => 'setLimit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'advertiser_id' => 'getAdvertiserId',
        'start_time' => 'getStartTime',
        'end_time' => 'getEndTime',
        'last_start_time' => 'getLastStartTime',
        'last_end_time' => 'getLastEndTime',
        'fields' => 'getFields',
        'ratio_fields' => 'getRatioFields',
        'time_dimension' => 'getTimeDimension',
        'order_field' => 'getOrderField',
        'order_type' => 'getOrderType',
        'filter' => 'getFilter',
        'offset' => 'getOffset',
        'limit' => 'getLimit'
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
        $this->container['advertiser_id'] = isset($data['advertiser_id']) ? $data['advertiser_id'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['last_start_time'] = isset($data['last_start_time']) ? $data['last_start_time'] : null;
        $this->container['last_end_time'] = isset($data['last_end_time']) ? $data['last_end_time'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['ratio_fields'] = isset($data['ratio_fields']) ? $data['ratio_fields'] : null;
        $this->container['time_dimension'] = isset($data['time_dimension']) ? $data['time_dimension'] : null;
        $this->container['order_field'] = isset($data['order_field']) ? $data['order_field'] : null;
        $this->container['order_type'] = isset($data['order_type']) ? $data['order_type'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['advertiser_id'] === null) {
            $invalidProperties[] = "'advertiser_id' can't be null";
        }
        if ($this->container['start_time'] === null) {
            $invalidProperties[] = "'start_time' can't be null";
        }
        if ($this->container['end_time'] === null) {
            $invalidProperties[] = "'end_time' can't be null";
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
     * Gets advertiser_id
     *
     * @return string
     */
    public function getAdvertiserId()
    {
        return $this->container['advertiser_id'];
    }

    /**
     * Sets advertiser_id
     *
     * @param string $advertiser_id 广告主id
     *
     * @return $this
     */
    public function setAdvertiserId($advertiser_id)
    {
        $this->container['advertiser_id'] = $advertiser_id;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return string
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param string $start_time 报表开始时间，格式为yyyy-mm-dd，仅支持查询2020年11月1日之后的数据
     *
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return string
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param string $end_time 报表结束时间，格式为yyyy-mm-dd，最大时间范围365天
     *
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets last_start_time
     *
     * @return string|null
     */
    public function getLastStartTime()
    {
        return $this->container['last_start_time'];
    }

    /**
     * Sets last_start_time
     *
     * @param string|null $last_start_time 环比周期开始时间，格式为yyyy-mm-dd
     *
     * @return $this
     */
    public function setLastStartTime($last_start_time)
    {
        $this->container['last_start_time'] = $last_start_time;

        return $this;
    }

    /**
     * Gets last_end_time
     *
     * @return string|null
     */
    public function getLastEndTime()
    {
        return $this->container['last_end_time'];
    }

    /**
     * Sets last_end_time
     *
     * @param string|null $last_end_time 环比周期结束时间，格式为yyyy-mm-dd
     *
     * @return $this
     */
    public function setLastEndTime($last_end_time)
    {
        $this->container['last_end_time'] = $last_end_time;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return string|null
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param string|null $fields 指标字段， 默认传入指标：business_page_home_visited、business_page_new_fans_num、business_page_like、business_page_total_play，若需自定义，请点击查看各维度下支持查询的指标，否则会报错
     *
     * @return $this
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets ratio_fields
     *
     * @return string|null
     */
    public function getRatioFields()
    {
        return $this->container['ratio_fields'];
    }

    /**
     * Sets ratio_fields
     *
     * @param string|null $ratio_fields 需要环比指标字段
     *
     * @return $this
     */
    public function setRatioFields($ratio_fields)
    {
        $this->container['ratio_fields'] = $ratio_fields;

        return $this;
    }

    /**
     * Gets time_dimension
     *
     * @return string|null
     */
    public function getTimeDimension()
    {
        return $this->container['time_dimension'];
    }

    /**
     * Sets time_dimension
     *
     * @param string|null $time_dimension 是否需要分天数据，默认值SUM 允许值：SUM 合计数据、DAILY 分天数据
     *
     * @return $this
     */
    public function setTimeDimension($time_dimension)
    {
        $this->container['time_dimension'] = $time_dimension;

        return $this;
    }

    /**
     * Gets order_field
     *
     * @return string|null
     */
    public function getOrderField()
    {
        return $this->container['order_field'];
    }

    /**
     * Sets order_field
     *
     * @param string|null $order_field 排序指标字段，不传默认为空
     *
     * @return $this
     */
    public function setOrderField($order_field)
    {
        $this->container['order_field'] = $order_field;

        return $this;
    }

    /**
     * Gets order_type
     *
     * @return string|null
     */
    public function getOrderType()
    {
        return $this->container['order_type'];
    }

    /**
     * Sets order_type
     *
     * @param string|null $order_type 排序类型；默认值: DESC 允许值: ASC、 DESC，未传入order_field时不生效
     *
     * @return $this
     */
    public function setOrderType($order_type)
    {
        $this->container['order_type'] = $order_type;

        return $this;
    }

    /**
     * Gets filter
     *
     * @return string|null
     */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
     * Sets filter
     *
     * @param string|null $filter 筛选字段:抖音号open_id，同时支持查询企业号和普通抖音号数据
     *
     * @return $this
     */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;

        return $this;
    }

    /**
     * Gets offset
     *
     * @return string|null
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     *
     * @param string|null $offset 偏移，类似于SQL中offset（起始为0，翻页时new_offset=old_offset+limit），默认值：0，取值范围:≥ 0
     *
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return string|null
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param string|null $limit 返回数据量，默认值：100，取值范围：1-100
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

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


