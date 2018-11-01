<?php
/**
 * PackageDescription
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
 * OpenAPI spec version: 1.1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.1.2-SNAPSHOT
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
 * PackageDescription Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PackageDescription implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PackageDescription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'brand' => 'string',
        'brand_long' => 'string',
        'desc_short' => 'string',
        'desc_long' => 'string',
        'url' => 'string',
        'days' => 'string',
        'weekdays' => 'string',
        'frequency' => '\OpenAPI\Client\Model\DescriptionFrequency',
        'includes' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'brand' => null,
        'brand_long' => null,
        'desc_short' => null,
        'desc_long' => null,
        'url' => null,
        'days' => null,
        'weekdays' => null,
        'frequency' => null,
        'includes' => null
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
        'brand' => 'brand',
        'brand_long' => 'brandLong',
        'desc_short' => 'descShort',
        'desc_long' => 'descLong',
        'url' => 'url',
        'days' => 'days',
        'weekdays' => 'weekdays',
        'frequency' => 'frequency',
        'includes' => 'includes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'brand' => 'setBrand',
        'brand_long' => 'setBrandLong',
        'desc_short' => 'setDescShort',
        'desc_long' => 'setDescLong',
        'url' => 'setUrl',
        'days' => 'setDays',
        'weekdays' => 'setWeekdays',
        'frequency' => 'setFrequency',
        'includes' => 'setIncludes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'brand' => 'getBrand',
        'brand_long' => 'getBrandLong',
        'desc_short' => 'getDescShort',
        'desc_long' => 'getDescLong',
        'url' => 'getUrl',
        'days' => 'getDays',
        'weekdays' => 'getWeekdays',
        'frequency' => 'getFrequency',
        'includes' => 'getIncludes'
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
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['brand_long'] = isset($data['brand_long']) ? $data['brand_long'] : null;
        $this->container['desc_short'] = isset($data['desc_short']) ? $data['desc_short'] : null;
        $this->container['desc_long'] = isset($data['desc_long']) ? $data['desc_long'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['days'] = isset($data['days']) ? $data['days'] : null;
        $this->container['weekdays'] = isset($data['weekdays']) ? $data['weekdays'] : null;
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['includes'] = isset($data['includes']) ? $data['includes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['brand'] === null) {
            $invalidProperties[] = "'brand' can't be null";
        }
        if ($this->container['brand_long'] === null) {
            $invalidProperties[] = "'brand_long' can't be null";
        }
        if ($this->container['desc_short'] === null) {
            $invalidProperties[] = "'desc_short' can't be null";
        }
        if ($this->container['desc_long'] === null) {
            $invalidProperties[] = "'desc_long' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['days'] === null) {
            $invalidProperties[] = "'days' can't be null";
        }
        if ($this->container['weekdays'] === null) {
            $invalidProperties[] = "'weekdays' can't be null";
        }
        if ($this->container['frequency'] === null) {
            $invalidProperties[] = "'frequency' can't be null";
        }
        if ($this->container['includes'] === null) {
            $invalidProperties[] = "'includes' can't be null";
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
     * Gets brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string $brand brand
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets brand_long
     *
     * @return string
     */
    public function getBrandLong()
    {
        return $this->container['brand_long'];
    }

    /**
     * Sets brand_long
     *
     * @param string $brand_long brand_long
     *
     * @return $this
     */
    public function setBrandLong($brand_long)
    {
        $this->container['brand_long'] = $brand_long;

        return $this;
    }

    /**
     * Gets desc_short
     *
     * @return string
     */
    public function getDescShort()
    {
        return $this->container['desc_short'];
    }

    /**
     * Sets desc_short
     *
     * @param string $desc_short desc_short
     *
     * @return $this
     */
    public function setDescShort($desc_short)
    {
        $this->container['desc_short'] = $desc_short;

        return $this;
    }

    /**
     * Gets desc_long
     *
     * @return string
     */
    public function getDescLong()
    {
        return $this->container['desc_long'];
    }

    /**
     * Sets desc_long
     *
     * @param string $desc_long desc_long
     *
     * @return $this
     */
    public function setDescLong($desc_long)
    {
        $this->container['desc_long'] = $desc_long;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets days
     *
     * @return string
     */
    public function getDays()
    {
        return $this->container['days'];
    }

    /**
     * Sets days
     *
     * @param string $days days
     *
     * @return $this
     */
    public function setDays($days)
    {
        $this->container['days'] = $days;

        return $this;
    }

    /**
     * Gets weekdays
     *
     * @return string
     */
    public function getWeekdays()
    {
        return $this->container['weekdays'];
    }

    /**
     * Sets weekdays
     *
     * @param string $weekdays weekdays
     *
     * @return $this
     */
    public function setWeekdays($weekdays)
    {
        $this->container['weekdays'] = $weekdays;

        return $this;
    }

    /**
     * Gets frequency
     *
     * @return \OpenAPI\Client\Model\DescriptionFrequency
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     *
     * @param \OpenAPI\Client\Model\DescriptionFrequency $frequency frequency
     *
     * @return $this
     */
    public function setFrequency($frequency)
    {
        $this->container['frequency'] = $frequency;

        return $this;
    }

    /**
     * Gets includes
     *
     * @return string[]
     */
    public function getIncludes()
    {
        return $this->container['includes'];
    }

    /**
     * Sets includes
     *
     * @param string[] $includes includes
     *
     * @return $this
     */
    public function setIncludes($includes)
    {
        $this->container['includes'] = $includes;

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

