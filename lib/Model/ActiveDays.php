<?php
/**
 * ActiveDays
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
 * ActiveDays Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ActiveDays implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ActiveDays';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'mon' => 'bool',
        'tue' => 'bool',
        'wed' => 'bool',
        'thu' => 'bool',
        'fri' => 'bool',
        'sat' => 'bool',
        'sun' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'mon' => null,
        'tue' => null,
        'wed' => null,
        'thu' => null,
        'fri' => null,
        'sat' => null,
        'sun' => null
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
        'mon' => 'mon',
        'tue' => 'tue',
        'wed' => 'wed',
        'thu' => 'thu',
        'fri' => 'fri',
        'sat' => 'sat',
        'sun' => 'sun'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mon' => 'setMon',
        'tue' => 'setTue',
        'wed' => 'setWed',
        'thu' => 'setThu',
        'fri' => 'setFri',
        'sat' => 'setSat',
        'sun' => 'setSun'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mon' => 'getMon',
        'tue' => 'getTue',
        'wed' => 'getWed',
        'thu' => 'getThu',
        'fri' => 'getFri',
        'sat' => 'getSat',
        'sun' => 'getSun'
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
        $this->container['mon'] = isset($data['mon']) ? $data['mon'] : null;
        $this->container['tue'] = isset($data['tue']) ? $data['tue'] : null;
        $this->container['wed'] = isset($data['wed']) ? $data['wed'] : null;
        $this->container['thu'] = isset($data['thu']) ? $data['thu'] : null;
        $this->container['fri'] = isset($data['fri']) ? $data['fri'] : null;
        $this->container['sat'] = isset($data['sat']) ? $data['sat'] : null;
        $this->container['sun'] = isset($data['sun']) ? $data['sun'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['mon'] === null) {
            $invalidProperties[] = "'mon' can't be null";
        }
        if ($this->container['tue'] === null) {
            $invalidProperties[] = "'tue' can't be null";
        }
        if ($this->container['wed'] === null) {
            $invalidProperties[] = "'wed' can't be null";
        }
        if ($this->container['thu'] === null) {
            $invalidProperties[] = "'thu' can't be null";
        }
        if ($this->container['fri'] === null) {
            $invalidProperties[] = "'fri' can't be null";
        }
        if ($this->container['sat'] === null) {
            $invalidProperties[] = "'sat' can't be null";
        }
        if ($this->container['sun'] === null) {
            $invalidProperties[] = "'sun' can't be null";
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
     * Gets mon
     *
     * @return bool
     */
    public function getMon()
    {
        return $this->container['mon'];
    }

    /**
     * Sets mon
     *
     * @param bool $mon mon
     *
     * @return $this
     */
    public function setMon($mon)
    {
        $this->container['mon'] = $mon;

        return $this;
    }

    /**
     * Gets tue
     *
     * @return bool
     */
    public function getTue()
    {
        return $this->container['tue'];
    }

    /**
     * Sets tue
     *
     * @param bool $tue tue
     *
     * @return $this
     */
    public function setTue($tue)
    {
        $this->container['tue'] = $tue;

        return $this;
    }

    /**
     * Gets wed
     *
     * @return bool
     */
    public function getWed()
    {
        return $this->container['wed'];
    }

    /**
     * Sets wed
     *
     * @param bool $wed wed
     *
     * @return $this
     */
    public function setWed($wed)
    {
        $this->container['wed'] = $wed;

        return $this;
    }

    /**
     * Gets thu
     *
     * @return bool
     */
    public function getThu()
    {
        return $this->container['thu'];
    }

    /**
     * Sets thu
     *
     * @param bool $thu thu
     *
     * @return $this
     */
    public function setThu($thu)
    {
        $this->container['thu'] = $thu;

        return $this;
    }

    /**
     * Gets fri
     *
     * @return bool
     */
    public function getFri()
    {
        return $this->container['fri'];
    }

    /**
     * Sets fri
     *
     * @param bool $fri fri
     *
     * @return $this
     */
    public function setFri($fri)
    {
        $this->container['fri'] = $fri;

        return $this;
    }

    /**
     * Gets sat
     *
     * @return bool
     */
    public function getSat()
    {
        return $this->container['sat'];
    }

    /**
     * Sets sat
     *
     * @param bool $sat sat
     *
     * @return $this
     */
    public function setSat($sat)
    {
        $this->container['sat'] = $sat;

        return $this;
    }

    /**
     * Gets sun
     *
     * @return bool
     */
    public function getSun()
    {
        return $this->container['sun'];
    }

    /**
     * Sets sun
     *
     * @param bool $sun sun
     *
     * @return $this
     */
    public function setSun($sun)
    {
        $this->container['sun'] = $sun;

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


