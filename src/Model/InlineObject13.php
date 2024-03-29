<?php
/**
 * InlineObject13
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
 * InlineObject13 Class Doc Comment
 *
 * @category Class
 * @package  Oceanengine\Open
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineObject13 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_13';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cc_account_id' => 'float',
        'account_source' => 'string',
        'filtering' => '\Oceanengine\Open\Model\Model2customerCenteradvertiserlistFiltering',
        'page' => 'float',
        'page_size' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'cc_account_id' => null,
        'account_source' => null,
        'filtering' => null,
        'page' => null,
        'page_size' => null
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
        'cc_account_id' => 'cc_account_id',
        'account_source' => 'account_source',
        'filtering' => 'filtering',
        'page' => 'page',
        'page_size' => 'page_size'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cc_account_id' => 'setCcAccountId',
        'account_source' => 'setAccountSource',
        'filtering' => 'setFiltering',
        'page' => 'setPage',
        'page_size' => 'setPageSize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cc_account_id' => 'getCcAccountId',
        'account_source' => 'getAccountSource',
        'filtering' => 'getFiltering',
        'page' => 'getPage',
        'page_size' => 'getPageSize'
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
        $this->container['cc_account_id'] = isset($data['cc_account_id']) ? $data['cc_account_id'] : null;
        $this->container['account_source'] = isset($data['account_source']) ? $data['account_source'] : null;
        $this->container['filtering'] = isset($data['filtering']) ? $data['filtering'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['page_size'] = isset($data['page_size']) ? $data['page_size'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['filtering'] === null) {
            $invalidProperties[] = "'filtering' can't be null";
        }
        if ($this->container['page'] === null) {
            $invalidProperties[] = "'page' can't be null";
        }
        if ($this->container['page_size'] === null) {
            $invalidProperties[] = "'page_size' can't be null";
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
     * Gets cc_account_id
     *
     * @return float|null
     */
    public function getCcAccountId()
    {
        return $this->container['cc_account_id'];
    }

    /**
     * Sets cc_account_id
     *
     * @param float|null $cc_account_id 纵横组织id
     *
     * @return $this
     */
    public function setCcAccountId($cc_account_id)
    {
        $this->container['cc_account_id'] = $cc_account_id;

        return $this;
    }

    /**
     * Gets account_source
     *
     * @return string|null
     */
    public function getAccountSource()
    {
        return $this->container['account_source'];
    }

    /**
     * Sets account_source
     *
     * @param string|null $account_source 账户类型，可选值：AD 广告主账号、ENTERPRISE企业号，默认值：AD
     *
     * @return $this
     */
    public function setAccountSource($account_source)
    {
        $this->container['account_source'] = $account_source;

        return $this;
    }

    /**
     * Gets filtering
     *
     * @return \Oceanengine\Open\Model\Model2customerCenteradvertiserlistFiltering
     */
    public function getFiltering()
    {
        return $this->container['filtering'];
    }

    /**
     * Sets filtering
     *
     * @param \Oceanengine\Open\Model\Model2customerCenteradvertiserlistFiltering $filtering filtering
     *
     * @return $this
     */
    public function setFiltering($filtering)
    {
        $this->container['filtering'] = $filtering;

        return $this;
    }

    /**
     * Gets page
     *
     * @return float
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param float $page 页码 默认值: 1
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return float
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param float $page_size 页面大小 默认值: 10，最大值：100
     *
     * @return $this
     */
    public function setPageSize($page_size)
    {
        $this->container['page_size'] = $page_size;

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


