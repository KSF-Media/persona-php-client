<?php
/**
 * InlineResponse4032EmailAddressInUse
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
 * InlineResponse4032EmailAddressInUse Class Doc Comment
 *
 * @category Class
 * @package  PersonaClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineResponse4032EmailAddressInUse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_403_2_email_address_in_use';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'merge_token' => 'string',
        'description' => 'string',
        'existing_provider' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'merge_token' => null,
        'description' => null,
        'existing_provider' => null
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
        'merge_token' => 'merge_token',
        'description' => 'description',
        'existing_provider' => 'existing_provider'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merge_token' => 'setMergeToken',
        'description' => 'setDescription',
        'existing_provider' => 'setExistingProvider'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merge_token' => 'getMergeToken',
        'description' => 'getDescription',
        'existing_provider' => 'getExistingProvider'
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

    const DESCRIPTION_USER_HAS_ANOTHER_RECORD_REGISTERED__PLEASE_MERGE_THE_ACCOUNTS = 'User has another record registered. Please merge the accounts.';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDescriptionAllowableValues()
    {
        return [
            self::DESCRIPTION_USER_HAS_ANOTHER_RECORD_REGISTERED__PLEASE_MERGE_THE_ACCOUNTS,
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
        $this->container['merge_token'] = isset($data['merge_token']) ? $data['merge_token'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['existing_provider'] = isset($data['existing_provider']) ? $data['existing_provider'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDescriptionAllowableValues();
        if (!is_null($this->container['description']) && !in_array($this->container['description'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'description', must be one of '%s'",
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
     * Gets merge_token
     *
     * @return string|null
     */
    public function getMergeToken()
    {
        return $this->container['merge_token'];
    }

    /**
     * Sets merge_token
     *
     * @param string|null $merge_token merge_token
     *
     * @return $this
     */
    public function setMergeToken($merge_token)
    {
        $this->container['merge_token'] = $merge_token;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $allowedValues = $this->getDescriptionAllowableValues();
        if (!is_null($description) && !in_array($description, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'description', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets existing_provider
     *
     * @return string|null
     */
    public function getExistingProvider()
    {
        return $this->container['existing_provider'];
    }

    /**
     * Sets existing_provider
     *
     * @param string|null $existing_provider existing_provider
     *
     * @return $this
     */
    public function setExistingProvider($existing_provider)
    {
        $this->container['existing_provider'] = $existing_provider;

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


