<?php
/**
 * PackageOffer
 *
 * PHP version 5
 *
 * @category Class
 * @package  PersonaClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Persona
 *
 * KSF Media unified login service
 *
 * The version of the OpenAPI document: 1.3.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace PersonaClient\Model;

use \ArrayAccess;
use \PersonaClient\ObjectSerializer;

/**
 * PackageOffer Class Doc Comment
 *
 * @category Class
 * @package  PersonaClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PackageOffer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PackageOffer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'months' => 'int',
        'total_price' => 'int',
        'monthly_price' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'months' => null,
        'total_price' => null,
        'monthly_price' => null
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
        'months' => 'months',
        'total_price' => 'totalPrice',
        'monthly_price' => 'monthlyPrice'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'months' => 'setMonths',
        'total_price' => 'setTotalPrice',
        'monthly_price' => 'setMonthlyPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'months' => 'getMonths',
        'total_price' => 'getTotalPrice',
        'monthly_price' => 'getMonthlyPrice'
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
        $this->container['months'] = isset($data['months']) ? $data['months'] : null;
        $this->container['total_price'] = isset($data['total_price']) ? $data['total_price'] : null;
        $this->container['monthly_price'] = isset($data['monthly_price']) ? $data['monthly_price'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['months'] === null) {
            $invalidProperties[] = "'months' can't be null";
        }
        if (($this->container['months'] > 9223372036854775807)) {
            $invalidProperties[] = "invalid value for 'months', must be smaller than or equal to 9223372036854775807.";
        }

        if (($this->container['months'] < -9223372036854775808)) {
            $invalidProperties[] = "invalid value for 'months', must be bigger than or equal to -9223372036854775808.";
        }

        if ($this->container['total_price'] === null) {
            $invalidProperties[] = "'total_price' can't be null";
        }
        if (($this->container['total_price'] < 0)) {
            $invalidProperties[] = "invalid value for 'total_price', must be bigger than or equal to 0.";
        }

        if ($this->container['monthly_price'] === null) {
            $invalidProperties[] = "'monthly_price' can't be null";
        }
        if (($this->container['monthly_price'] < 0)) {
            $invalidProperties[] = "invalid value for 'monthly_price', must be bigger than or equal to 0.";
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
     * Gets months
     *
     * @return int
     */
    public function getMonths()
    {
        return $this->container['months'];
    }

    /**
     * Sets months
     *
     * @param int $months Duration of the offer
     *
     * @return $this
     */
    public function setMonths($months)
    {

        if (($months > 9223372036854775807)) {
            throw new \InvalidArgumentException('invalid value for $months when calling PackageOffer., must be smaller than or equal to 9223372036854775807.');
        }
        if (($months < -9223372036854775808)) {
            throw new \InvalidArgumentException('invalid value for $months when calling PackageOffer., must be bigger than or equal to -9223372036854775808.');
        }

        $this->container['months'] = $months;

        return $this;
    }

    /**
     * Gets total_price
     *
     * @return int
     */
    public function getTotalPrice()
    {
        return $this->container['total_price'];
    }

    /**
     * Sets total_price
     *
     * @param int $total_price Amount of cents that has to be paid
     *
     * @return $this
     */
    public function setTotalPrice($total_price)
    {

        if (($total_price < 0)) {
            throw new \InvalidArgumentException('invalid value for $total_price when calling PackageOffer., must be bigger than or equal to 0.');
        }

        $this->container['total_price'] = $total_price;

        return $this;
    }

    /**
     * Gets monthly_price
     *
     * @return int
     */
    public function getMonthlyPrice()
    {
        return $this->container['monthly_price'];
    }

    /**
     * Sets monthly_price
     *
     * @param int $monthly_price Amount of cents that has to be paid
     *
     * @return $this
     */
    public function setMonthlyPrice($monthly_price)
    {

        if (($monthly_price < 0)) {
            throw new \InvalidArgumentException('invalid value for $monthly_price when calling PackageOffer., must be bigger than or equal to 0.');
        }

        $this->container['monthly_price'] = $monthly_price;

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


