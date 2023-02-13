<?php
/**
 * InlineResponse20021DataList
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
 * InlineResponse20021DataList Class Doc Comment
 *
 * @category Class
 * @package  Oceanengine\Open
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineResponse20021DataList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_21_data_list';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'advertiser_id' => 'int',
        'date' => 'string',
        'balance' => 'float',
        'cash_cost' => 'float',
        'shared_wallet_cost' => 'float',
        'cost' => 'float',
        'frozen' => 'float',
        'grant' => 'float',
        'income' => 'float',
        'reward_cost' => 'float',
        'transfer_in' => 'float',
        'transfer_out' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'advertiser_id' => 'int64',
        'date' => null,
        'balance' => null,
        'cash_cost' => null,
        'shared_wallet_cost' => null,
        'cost' => null,
        'frozen' => null,
        'grant' => null,
        'income' => null,
        'reward_cost' => null,
        'transfer_in' => null,
        'transfer_out' => null
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
        'date' => 'date',
        'balance' => 'balance',
        'cash_cost' => 'cash_cost',
        'shared_wallet_cost' => 'shared_wallet_cost',
        'cost' => 'cost',
        'frozen' => 'frozen',
        'grant' => 'grant',
        'income' => 'income',
        'reward_cost' => 'reward_cost',
        'transfer_in' => 'transfer_in',
        'transfer_out' => 'transfer_out'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'advertiser_id' => 'setAdvertiserId',
        'date' => 'setDate',
        'balance' => 'setBalance',
        'cash_cost' => 'setCashCost',
        'shared_wallet_cost' => 'setSharedWalletCost',
        'cost' => 'setCost',
        'frozen' => 'setFrozen',
        'grant' => 'setGrant',
        'income' => 'setIncome',
        'reward_cost' => 'setRewardCost',
        'transfer_in' => 'setTransferIn',
        'transfer_out' => 'setTransferOut'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'advertiser_id' => 'getAdvertiserId',
        'date' => 'getDate',
        'balance' => 'getBalance',
        'cash_cost' => 'getCashCost',
        'shared_wallet_cost' => 'getSharedWalletCost',
        'cost' => 'getCost',
        'frozen' => 'getFrozen',
        'grant' => 'getGrant',
        'income' => 'getIncome',
        'reward_cost' => 'getRewardCost',
        'transfer_in' => 'getTransferIn',
        'transfer_out' => 'getTransferOut'
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
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['cash_cost'] = isset($data['cash_cost']) ? $data['cash_cost'] : null;
        $this->container['shared_wallet_cost'] = isset($data['shared_wallet_cost']) ? $data['shared_wallet_cost'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['frozen'] = isset($data['frozen']) ? $data['frozen'] : null;
        $this->container['grant'] = isset($data['grant']) ? $data['grant'] : null;
        $this->container['income'] = isset($data['income']) ? $data['income'] : null;
        $this->container['reward_cost'] = isset($data['reward_cost']) ? $data['reward_cost'] : null;
        $this->container['transfer_in'] = isset($data['transfer_in']) ? $data['transfer_in'] : null;
        $this->container['transfer_out'] = isset($data['transfer_out']) ? $data['transfer_out'] : null;
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
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['balance'] === null) {
            $invalidProperties[] = "'balance' can't be null";
        }
        if ($this->container['cash_cost'] === null) {
            $invalidProperties[] = "'cash_cost' can't be null";
        }
        if ($this->container['shared_wallet_cost'] === null) {
            $invalidProperties[] = "'shared_wallet_cost' can't be null";
        }
        if ($this->container['cost'] === null) {
            $invalidProperties[] = "'cost' can't be null";
        }
        if ($this->container['frozen'] === null) {
            $invalidProperties[] = "'frozen' can't be null";
        }
        if ($this->container['grant'] === null) {
            $invalidProperties[] = "'grant' can't be null";
        }
        if ($this->container['income'] === null) {
            $invalidProperties[] = "'income' can't be null";
        }
        if ($this->container['reward_cost'] === null) {
            $invalidProperties[] = "'reward_cost' can't be null";
        }
        if ($this->container['transfer_in'] === null) {
            $invalidProperties[] = "'transfer_in' can't be null";
        }
        if ($this->container['transfer_out'] === null) {
            $invalidProperties[] = "'transfer_out' can't be null";
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
     * Gets date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return float
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param float $balance 日终结余(单位元）
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets cash_cost
     *
     * @return float
     */
    public function getCashCost()
    {
        return $this->container['cash_cost'];
    }

    /**
     * Sets cash_cost
     *
     * @param float $cash_cost 现金支出(单位元)
     *
     * @return $this
     */
    public function setCashCost($cash_cost)
    {
        $this->container['cash_cost'] = $cash_cost;

        return $this;
    }

    /**
     * Gets shared_wallet_cost
     *
     * @return float
     */
    public function getSharedWalletCost()
    {
        return $this->container['shared_wallet_cost'];
    }

    /**
     * Sets shared_wallet_cost
     *
     * @param float $shared_wallet_cost 共享钱包支出（单位元）
     *
     * @return $this
     */
    public function setSharedWalletCost($shared_wallet_cost)
    {
        $this->container['shared_wallet_cost'] = $shared_wallet_cost;

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
     * @param float $cost 总支出(单位元)
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets frozen
     *
     * @return float
     */
    public function getFrozen()
    {
        return $this->container['frozen'];
    }

    /**
     * Sets frozen
     *
     * @param float $frozen 冻结(单位元)
     *
     * @return $this
     */
    public function setFrozen($frozen)
    {
        $this->container['frozen'] = $frozen;

        return $this;
    }

    /**
     * Gets grant
     *
     * @return float
     */
    public function getGrant()
    {
        return $this->container['grant'];
    }

    /**
     * Sets grant
     *
     * @param float $grant grant
     *
     * @return $this
     */
    public function setGrant($grant)
    {
        $this->container['grant'] = $grant;

        return $this;
    }

    /**
     * Gets income
     *
     * @return float
     */
    public function getIncome()
    {
        return $this->container['income'];
    }

    /**
     * Sets income
     *
     * @param float $income 总存入(单位元)
     *
     * @return $this
     */
    public function setIncome($income)
    {
        $this->container['income'] = $income;

        return $this;
    }

    /**
     * Gets reward_cost
     *
     * @return float
     */
    public function getRewardCost()
    {
        return $this->container['reward_cost'];
    }

    /**
     * Sets reward_cost
     *
     * @param float $reward_cost 共享钱包支出（单位元）
     *
     * @return $this
     */
    public function setRewardCost($reward_cost)
    {
        $this->container['reward_cost'] = $reward_cost;

        return $this;
    }

    /**
     * Gets transfer_in
     *
     * @return float
     */
    public function getTransferIn()
    {
        return $this->container['transfer_in'];
    }

    /**
     * Sets transfer_in
     *
     * @param float $transfer_in 总转入(单位元)
     *
     * @return $this
     */
    public function setTransferIn($transfer_in)
    {
        $this->container['transfer_in'] = $transfer_in;

        return $this;
    }

    /**
     * Gets transfer_out
     *
     * @return float
     */
    public function getTransferOut()
    {
        return $this->container['transfer_out'];
    }

    /**
     * Sets transfer_out
     *
     * @param float $transfer_out 总转出(单位元)
     *
     * @return $this
     */
    public function setTransferOut($transfer_out)
    {
        $this->container['transfer_out'] = $transfer_out;

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


