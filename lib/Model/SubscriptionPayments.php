<?php
/**
 * SubscriptionPayments
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
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

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * SubscriptionPayments Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SubscriptionPayments implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubscriptionPayments';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'subsno' => 'int',
        'name' => 'string',
        'start_date' => '\DateTime',
        'last_date' => '\DateTime',
        'payments' => '\OpenAPI\Client\Model\Payment[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'subsno' => null,
        'name' => null,
        'start_date' => 'date',
        'last_date' => 'date',
        'payments' => null
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
        'subsno' => 'subsno',
        'name' => 'name',
        'start_date' => 'startDate',
        'last_date' => 'lastDate',
        'payments' => 'payments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'subsno' => 'setSubsno',
        'name' => 'setName',
        'start_date' => 'setStartDate',
        'last_date' => 'setLastDate',
        'payments' => 'setPayments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'subsno' => 'getSubsno',
        'name' => 'getName',
        'start_date' => 'getStartDate',
        'last_date' => 'getLastDate',
        'payments' => 'getPayments'
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
        $this->container['subsno'] = isset($data['subsno']) ? $data['subsno'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['last_date'] = isset($data['last_date']) ? $data['last_date'] : null;
        $this->container['payments'] = isset($data['payments']) ? $data['payments'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['subsno'] === null) {
            $invalidProperties[] = "'subsno' can't be null";
        }
        if (($this->container['subsno'] > 9223372036854775807)) {
            $invalidProperties[] = "invalid value for 'subsno', must be smaller than or equal to 9223372036854775807.";
        }

        if (($this->container['subsno'] < -9223372036854775808)) {
            $invalidProperties[] = "invalid value for 'subsno', must be bigger than or equal to -9223372036854775808.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if ($this->container['last_date'] === null) {
            $invalidProperties[] = "'last_date' can't be null";
        }
        if ($this->container['payments'] === null) {
            $invalidProperties[] = "'payments' can't be null";
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
     * Gets subsno
     *
     * @return int
     */
    public function getSubsno()
    {
        return $this->container['subsno'];
    }

    /**
     * Sets subsno
     *
     * @param int $subsno subsno
     *
     * @return $this
     */
    public function setSubsno($subsno)
    {

        if (($subsno > 9223372036854775807)) {
            throw new \InvalidArgumentException('invalid value for $subsno when calling SubscriptionPayments., must be smaller than or equal to 9223372036854775807.');
        }
        if (($subsno < -9223372036854775808)) {
            throw new \InvalidArgumentException('invalid value for $subsno when calling SubscriptionPayments., must be bigger than or equal to -9223372036854775808.');
        }

        $this->container['subsno'] = $subsno;

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
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date start_date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets last_date
     *
     * @return \DateTime
     */
    public function getLastDate()
    {
        return $this->container['last_date'];
    }

    /**
     * Sets last_date
     *
     * @param \DateTime $last_date last_date
     *
     * @return $this
     */
    public function setLastDate($last_date)
    {
        $this->container['last_date'] = $last_date;

        return $this;
    }

    /**
     * Gets payments
     *
     * @return \OpenAPI\Client\Model\Payment[]
     */
    public function getPayments()
    {
        return $this->container['payments'];
    }

    /**
     * Sets payments
     *
     * @param \OpenAPI\Client\Model\Payment[] $payments payments
     *
     * @return $this
     */
    public function setPayments($payments)
    {
        $this->container['payments'] = $payments;

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

