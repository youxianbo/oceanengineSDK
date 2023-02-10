<?php
/**
 * InlineResponse20021Data
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
 * InlineResponse20021Data Class Doc Comment
 *
 * @category Class
 * @package  Oceanengine\Open
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineResponse20021Data implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_21_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'advertiser_id' => 'int',
        'name' => 'string',
        'emal' => 'string',
        'balance' => 'int',
        'valid_balance' => 'int',
        'cash' => 'int',
        'valid_cash' => 'int',
        'grant' => 'int',
        'union_grant' => 'int',
        'search_grant' => 'int',
        'common_grant' => 'int',
        'default_grant' => 'int',
        'valid_grant' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'advertiser_id' => 'int64',
        'name' => null,
        'emal' => null,
        'balance' => 'int32',
        'valid_balance' => 'int32',
        'cash' => 'int32',
        'valid_cash' => 'int32',
        'grant' => 'int32',
        'union_grant' => 'int32',
        'search_grant' => 'int32',
        'common_grant' => 'int32',
        'default_grant' => 'int32',
        'valid_grant' => 'int32'
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
        'name' => 'name',
        'emal' => 'emal',
        'balance' => 'balance',
        'valid_balance' => 'valid_balance',
        'cash' => 'cash',
        'valid_cash' => 'valid_cash',
        'grant' => 'grant',
        'union_grant' => 'union_grant',
        'search_grant' => 'search_grant',
        'common_grant' => 'common_grant',
        'default_grant' => 'default_grant',
        'valid_grant' => 'valid_grant'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'advertiser_id' => 'setAdvertiserId',
        'name' => 'setName',
        'emal' => 'setEmal',
        'balance' => 'setBalance',
        'valid_balance' => 'setValidBalance',
        'cash' => 'setCash',
        'valid_cash' => 'setValidCash',
        'grant' => 'setGrant',
        'union_grant' => 'setUnionGrant',
        'search_grant' => 'setSearchGrant',
        'common_grant' => 'setCommonGrant',
        'default_grant' => 'setDefaultGrant',
        'valid_grant' => 'setValidGrant'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'advertiser_id' => 'getAdvertiserId',
        'name' => 'getName',
        'emal' => 'getEmal',
        'balance' => 'getBalance',
        'valid_balance' => 'getValidBalance',
        'cash' => 'getCash',
        'valid_cash' => 'getValidCash',
        'grant' => 'getGrant',
        'union_grant' => 'getUnionGrant',
        'search_grant' => 'getSearchGrant',
        'common_grant' => 'getCommonGrant',
        'default_grant' => 'getDefaultGrant',
        'valid_grant' => 'getValidGrant'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['emal'] = isset($data['emal']) ? $data['emal'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['valid_balance'] = isset($data['valid_balance']) ? $data['valid_balance'] : null;
        $this->container['cash'] = isset($data['cash']) ? $data['cash'] : null;
        $this->container['valid_cash'] = isset($data['valid_cash']) ? $data['valid_cash'] : null;
        $this->container['grant'] = isset($data['grant']) ? $data['grant'] : null;
        $this->container['union_grant'] = isset($data['union_grant']) ? $data['union_grant'] : null;
        $this->container['search_grant'] = isset($data['search_grant']) ? $data['search_grant'] : null;
        $this->container['common_grant'] = isset($data['common_grant']) ? $data['common_grant'] : null;
        $this->container['default_grant'] = isset($data['default_grant']) ? $data['default_grant'] : null;
        $this->container['valid_grant'] = isset($data['valid_grant']) ? $data['valid_grant'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['emal'] === null) {
            $invalidProperties[] = "'emal' can't be null";
        }
        if ($this->container['balance'] === null) {
            $invalidProperties[] = "'balance' can't be null";
        }
        if ($this->container['valid_balance'] === null) {
            $invalidProperties[] = "'valid_balance' can't be null";
        }
        if ($this->container['cash'] === null) {
            $invalidProperties[] = "'cash' can't be null";
        }
        if ($this->container['valid_cash'] === null) {
            $invalidProperties[] = "'valid_cash' can't be null";
        }
        if ($this->container['grant'] === null) {
            $invalidProperties[] = "'grant' can't be null";
        }
        if ($this->container['union_grant'] === null) {
            $invalidProperties[] = "'union_grant' can't be null";
        }
        if ($this->container['search_grant'] === null) {
            $invalidProperties[] = "'search_grant' can't be null";
        }
        if ($this->container['common_grant'] === null) {
            $invalidProperties[] = "'common_grant' can't be null";
        }
        if ($this->container['default_grant'] === null) {
            $invalidProperties[] = "'default_grant' can't be null";
        }
        if ($this->container['valid_grant'] === null) {
            $invalidProperties[] = "'valid_grant' can't be null";
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
     * @return int
     */
    public function getAdvertiserId()
    {
        return $this->container['advertiser_id'];
    }

    /**
     * Sets advertiser_id
     *
     * @param int $advertiser_id advertiser_id
     *
     * @return $this
     */
    public function setAdvertiserId($advertiser_id)
    {
        $this->container['advertiser_id'] = $advertiser_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets emal
     *
     * @return string
     */
    public function getEmal()
    {
        return $this->container['emal'];
    }

    /**
     * Sets emal
     *
     * @param string $emal emal
     *
     * @return $this
     */
    public function setEmal($emal)
    {
        $this->container['emal'] = $emal;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return int
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param int $balance balance
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets valid_balance
     *
     * @return int
     */
    public function getValidBalance()
    {
        return $this->container['valid_balance'];
    }

    /**
     * Sets valid_balance
     *
     * @param int $valid_balance valid_balance
     *
     * @return $this
     */
    public function setValidBalance($valid_balance)
    {
        $this->container['valid_balance'] = $valid_balance;

        return $this;
    }

    /**
     * Gets cash
     *
     * @return int
     */
    public function getCash()
    {
        return $this->container['cash'];
    }

    /**
     * Sets cash
     *
     * @param int $cash cash
     *
     * @return $this
     */
    public function setCash($cash)
    {
        $this->container['cash'] = $cash;

        return $this;
    }

    /**
     * Gets valid_cash
     *
     * @return int
     */
    public function getValidCash()
    {
        return $this->container['valid_cash'];
    }

    /**
     * Sets valid_cash
     *
     * @param int $valid_cash valid_cash
     *
     * @return $this
     */
    public function setValidCash($valid_cash)
    {
        $this->container['valid_cash'] = $valid_cash;

        return $this;
    }

    /**
     * Gets grant
     *
     * @return int
     */
    public function getGrant()
    {
        return $this->container['grant'];
    }

    /**
     * Sets grant
     *
     * @param int $grant grant
     *
     * @return $this
     */
    public function setGrant($grant)
    {
        $this->container['grant'] = $grant;

        return $this;
    }

    /**
     * Gets union_grant
     *
     * @return int
     */
    public function getUnionGrant()
    {
        return $this->container['union_grant'];
    }

    /**
     * Sets union_grant
     *
     * @param int $union_grant union_grant
     *
     * @return $this
     */
    public function setUnionGrant($union_grant)
    {
        $this->container['union_grant'] = $union_grant;

        return $this;
    }

    /**
     * Gets search_grant
     *
     * @return int
     */
    public function getSearchGrant()
    {
        return $this->container['search_grant'];
    }

    /**
     * Sets search_grant
     *
     * @param int $search_grant search_grant
     *
     * @return $this
     */
    public function setSearchGrant($search_grant)
    {
        $this->container['search_grant'] = $search_grant;

        return $this;
    }

    /**
     * Gets common_grant
     *
     * @return int
     */
    public function getCommonGrant()
    {
        return $this->container['common_grant'];
    }

    /**
     * Sets common_grant
     *
     * @param int $common_grant common_grant
     *
     * @return $this
     */
    public function setCommonGrant($common_grant)
    {
        $this->container['common_grant'] = $common_grant;

        return $this;
    }

    /**
     * Gets default_grant
     *
     * @return int
     */
    public function getDefaultGrant()
    {
        return $this->container['default_grant'];
    }

    /**
     * Sets default_grant
     *
     * @param int $default_grant default_grant
     *
     * @return $this
     */
    public function setDefaultGrant($default_grant)
    {
        $this->container['default_grant'] = $default_grant;

        return $this;
    }

    /**
     * Gets valid_grant
     *
     * @return int
     */
    public function getValidGrant()
    {
        return $this->container['valid_grant'];
    }

    /**
     * Sets valid_grant
     *
     * @param int $valid_grant valid_grant
     *
     * @return $this
     */
    public function setValidGrant($valid_grant)
    {
        $this->container['valid_grant'] = $valid_grant;

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


