<?php
/**
 * InlineResponse500
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
 * OpenAPI spec version: 1.3.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0-SNAPSHOT
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
 * InlineResponse500 Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineResponse500 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_500';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'http_code' => 'int',
        'http_status' => 'string',
        'internal_server_error' => '\OpenAPI\Client\Model\InlineResponse500InternalServerError'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'http_code' => null,
        'http_status' => null,
        'internal_server_error' => null
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
        'http_code' => 'http_code',
        'http_status' => 'http_status',
        'internal_server_error' => 'internal_server_error'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'http_code' => 'setHttpCode',
        'http_status' => 'setHttpStatus',
        'internal_server_error' => 'setInternalServerError'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'http_code' => 'getHttpCode',
        'http_status' => 'getHttpStatus',
        'internal_server_error' => 'getInternalServerError'
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

    const HTTP_STATUS_INTERNAL_SERVER_ERROR = 'Internal server error';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHttpStatusAllowableValues()
    {
        return [
            self::HTTP_STATUS_INTERNAL_SERVER_ERROR,
        ];
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
        $this->container['http_code'] = isset($data['http_code']) ? $data['http_code'] : null;
        $this->container['http_status'] = isset($data['http_status']) ? $data['http_status'] : null;
        $this->container['internal_server_error'] = isset($data['internal_server_error']) ? $data['internal_server_error'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getHttpStatusAllowableValues();
        if (!is_null($this->container['http_status']) && !in_array($this->container['http_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'http_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets http_code
     *
     * @return int|null
     */
    public function getHttpCode()
    {
        return $this->container['http_code'];
    }

    /**
     * Sets http_code
     *
     * @param int|null $http_code http_code
     *
     * @return $this
     */
    public function setHttpCode($http_code)
    {
        $this->container['http_code'] = $http_code;

        return $this;
    }

    /**
     * Gets http_status
     *
     * @return string|null
     */
    public function getHttpStatus()
    {
        return $this->container['http_status'];
    }

    /**
     * Sets http_status
     *
     * @param string|null $http_status http_status
     *
     * @return $this
     */
    public function setHttpStatus($http_status)
    {
        $allowedValues = $this->getHttpStatusAllowableValues();
        if (!is_null($http_status) && !in_array($http_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'http_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['http_status'] = $http_status;

        return $this;
    }

    /**
     * Gets internal_server_error
     *
     * @return \OpenAPI\Client\Model\InlineResponse500InternalServerError|null
     */
    public function getInternalServerError()
    {
        return $this->container['internal_server_error'];
    }

    /**
     * Sets internal_server_error
     *
     * @param \OpenAPI\Client\Model\InlineResponse500InternalServerError|null $internal_server_error internal_server_error
     *
     * @return $this
     */
    public function setInternalServerError($internal_server_error)
    {
        $this->container['internal_server_error'] = $internal_server_error;

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


