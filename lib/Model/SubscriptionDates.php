<?php
/**
 * SubscriptionDates
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
 * SubscriptionDates Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SubscriptionDates implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubscriptionDates';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'len_months' => 'int',
        'len_days' => 'int',
        'start' => '\DateTime',
        'end' => '\DateTime',
        'unpaid_break' => '\DateTime',
        'invoicing_start' => '\DateTime',
        'paid_until' => '\DateTime',
        'suspend' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'len_months' => null,
        'len_days' => null,
        'start' => 'date',
        'end' => 'date',
        'unpaid_break' => 'date',
        'invoicing_start' => 'date',
        'paid_until' => 'date',
        'suspend' => 'date'
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
        'len_months' => 'lenMonths',
        'len_days' => 'lenDays',
        'start' => 'start',
        'end' => 'end',
        'unpaid_break' => 'unpaidBreak',
        'invoicing_start' => 'invoicingStart',
        'paid_until' => 'paidUntil',
        'suspend' => 'suspend'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'len_months' => 'setLenMonths',
        'len_days' => 'setLenDays',
        'start' => 'setStart',
        'end' => 'setEnd',
        'unpaid_break' => 'setUnpaidBreak',
        'invoicing_start' => 'setInvoicingStart',
        'paid_until' => 'setPaidUntil',
        'suspend' => 'setSuspend'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'len_months' => 'getLenMonths',
        'len_days' => 'getLenDays',
        'start' => 'getStart',
        'end' => 'getEnd',
        'unpaid_break' => 'getUnpaidBreak',
        'invoicing_start' => 'getInvoicingStart',
        'paid_until' => 'getPaidUntil',
        'suspend' => 'getSuspend'
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
        $this->container['len_months'] = isset($data['len_months']) ? $data['len_months'] : null;
        $this->container['len_days'] = isset($data['len_days']) ? $data['len_days'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['unpaid_break'] = isset($data['unpaid_break']) ? $data['unpaid_break'] : null;
        $this->container['invoicing_start'] = isset($data['invoicing_start']) ? $data['invoicing_start'] : null;
        $this->container['paid_until'] = isset($data['paid_until']) ? $data['paid_until'] : null;
        $this->container['suspend'] = isset($data['suspend']) ? $data['suspend'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['len_months']) && ($this->container['len_months'] > 9223372036854775807)) {
            $invalidProperties[] = "invalid value for 'len_months', must be smaller than or equal to 9223372036854775807.";
        }

        if (!is_null($this->container['len_months']) && ($this->container['len_months'] < -9223372036854775808)) {
            $invalidProperties[] = "invalid value for 'len_months', must be bigger than or equal to -9223372036854775808.";
        }

        if (!is_null($this->container['len_days']) && ($this->container['len_days'] > 9223372036854775807)) {
            $invalidProperties[] = "invalid value for 'len_days', must be smaller than or equal to 9223372036854775807.";
        }

        if (!is_null($this->container['len_days']) && ($this->container['len_days'] < -9223372036854775808)) {
            $invalidProperties[] = "invalid value for 'len_days', must be bigger than or equal to -9223372036854775808.";
        }

        if ($this->container['start'] === null) {
            $invalidProperties[] = "'start' can't be null";
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
     * Gets len_months
     *
     * @return int|null
     */
    public function getLenMonths()
    {
        return $this->container['len_months'];
    }

    /**
     * Sets len_months
     *
     * @param int|null $len_months len_months
     *
     * @return $this
     */
    public function setLenMonths($len_months)
    {

        if (!is_null($len_months) && ($len_months > 9223372036854775807)) {
            throw new \InvalidArgumentException('invalid value for $len_months when calling SubscriptionDates., must be smaller than or equal to 9223372036854775807.');
        }
        if (!is_null($len_months) && ($len_months < -9223372036854775808)) {
            throw new \InvalidArgumentException('invalid value for $len_months when calling SubscriptionDates., must be bigger than or equal to -9223372036854775808.');
        }

        $this->container['len_months'] = $len_months;

        return $this;
    }

    /**
     * Gets len_days
     *
     * @return int|null
     */
    public function getLenDays()
    {
        return $this->container['len_days'];
    }

    /**
     * Sets len_days
     *
     * @param int|null $len_days len_days
     *
     * @return $this
     */
    public function setLenDays($len_days)
    {

        if (!is_null($len_days) && ($len_days > 9223372036854775807)) {
            throw new \InvalidArgumentException('invalid value for $len_days when calling SubscriptionDates., must be smaller than or equal to 9223372036854775807.');
        }
        if (!is_null($len_days) && ($len_days < -9223372036854775808)) {
            throw new \InvalidArgumentException('invalid value for $len_days when calling SubscriptionDates., must be bigger than or equal to -9223372036854775808.');
        }

        $this->container['len_days'] = $len_days;

        return $this;
    }

    /**
     * Gets start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param \DateTime $start start
     *
     * @return $this
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets end
     *
     * @return \DateTime|null
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     *
     * @param \DateTime|null $end end
     *
     * @return $this
     */
    public function setEnd($end)
    {
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets unpaid_break
     *
     * @return \DateTime|null
     */
    public function getUnpaidBreak()
    {
        return $this->container['unpaid_break'];
    }

    /**
     * Sets unpaid_break
     *
     * @param \DateTime|null $unpaid_break unpaid_break
     *
     * @return $this
     */
    public function setUnpaidBreak($unpaid_break)
    {
        $this->container['unpaid_break'] = $unpaid_break;

        return $this;
    }

    /**
     * Gets invoicing_start
     *
     * @return \DateTime|null
     */
    public function getInvoicingStart()
    {
        return $this->container['invoicing_start'];
    }

    /**
     * Sets invoicing_start
     *
     * @param \DateTime|null $invoicing_start invoicing_start
     *
     * @return $this
     */
    public function setInvoicingStart($invoicing_start)
    {
        $this->container['invoicing_start'] = $invoicing_start;

        return $this;
    }

    /**
     * Gets paid_until
     *
     * @return \DateTime|null
     */
    public function getPaidUntil()
    {
        return $this->container['paid_until'];
    }

    /**
     * Sets paid_until
     *
     * @param \DateTime|null $paid_until paid_until
     *
     * @return $this
     */
    public function setPaidUntil($paid_until)
    {
        $this->container['paid_until'] = $paid_until;

        return $this;
    }

    /**
     * Gets suspend
     *
     * @return \DateTime|null
     */
    public function getSuspend()
    {
        return $this->container['suspend'];
    }

    /**
     * Sets suspend
     *
     * @param \DateTime|null $suspend suspend
     *
     * @return $this
     */
    public function setSuspend($suspend)
    {
        $this->container['suspend'] = $suspend;

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


