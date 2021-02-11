<?php
/**
 * SubscriptionPauseEdit
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
 * SubscriptionPauseEdit Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SubscriptionPauseEdit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubscriptionPauseEdit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'old_start_date' => '\DateTime',
        'old_end_date' => '\DateTime',
        'new_start_date' => '\DateTime',
        'new_end_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'old_start_date' => 'date',
        'old_end_date' => 'date',
        'new_start_date' => 'date',
        'new_end_date' => 'date'
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
        'old_start_date' => 'oldStartDate',
        'old_end_date' => 'oldEndDate',
        'new_start_date' => 'newStartDate',
        'new_end_date' => 'newEndDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'old_start_date' => 'setOldStartDate',
        'old_end_date' => 'setOldEndDate',
        'new_start_date' => 'setNewStartDate',
        'new_end_date' => 'setNewEndDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'old_start_date' => 'getOldStartDate',
        'old_end_date' => 'getOldEndDate',
        'new_start_date' => 'getNewStartDate',
        'new_end_date' => 'getNewEndDate'
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
        $this->container['old_start_date'] = isset($data['old_start_date']) ? $data['old_start_date'] : null;
        $this->container['old_end_date'] = isset($data['old_end_date']) ? $data['old_end_date'] : null;
        $this->container['new_start_date'] = isset($data['new_start_date']) ? $data['new_start_date'] : null;
        $this->container['new_end_date'] = isset($data['new_end_date']) ? $data['new_end_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['old_start_date'] === null) {
            $invalidProperties[] = "'old_start_date' can't be null";
        }
        if ($this->container['old_end_date'] === null) {
            $invalidProperties[] = "'old_end_date' can't be null";
        }
        if ($this->container['new_start_date'] === null) {
            $invalidProperties[] = "'new_start_date' can't be null";
        }
        if ($this->container['new_end_date'] === null) {
            $invalidProperties[] = "'new_end_date' can't be null";
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
     * Gets old_start_date
     *
     * @return \DateTime
     */
    public function getOldStartDate()
    {
        return $this->container['old_start_date'];
    }

    /**
     * Sets old_start_date
     *
     * @param \DateTime $old_start_date old_start_date
     *
     * @return $this
     */
    public function setOldStartDate($old_start_date)
    {
        $this->container['old_start_date'] = $old_start_date;

        return $this;
    }

    /**
     * Gets old_end_date
     *
     * @return \DateTime
     */
    public function getOldEndDate()
    {
        return $this->container['old_end_date'];
    }

    /**
     * Sets old_end_date
     *
     * @param \DateTime $old_end_date old_end_date
     *
     * @return $this
     */
    public function setOldEndDate($old_end_date)
    {
        $this->container['old_end_date'] = $old_end_date;

        return $this;
    }

    /**
     * Gets new_start_date
     *
     * @return \DateTime
     */
    public function getNewStartDate()
    {
        return $this->container['new_start_date'];
    }

    /**
     * Sets new_start_date
     *
     * @param \DateTime $new_start_date new_start_date
     *
     * @return $this
     */
    public function setNewStartDate($new_start_date)
    {
        $this->container['new_start_date'] = $new_start_date;

        return $this;
    }

    /**
     * Gets new_end_date
     *
     * @return \DateTime
     */
    public function getNewEndDate()
    {
        return $this->container['new_end_date'];
    }

    /**
     * Sets new_end_date
     *
     * @param \DateTime $new_end_date new_end_date
     *
     * @return $this
     */
    public function setNewEndDate($new_end_date)
    {
        $this->container['new_end_date'] = $new_end_date;

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


