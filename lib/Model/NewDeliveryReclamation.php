<?php
/**
 * NewDeliveryReclamation
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
 * NewDeliveryReclamation Class Doc Comment
 *
 * @category Class
 * @description Data for a delivery reclamation creation.
 * @package  PersonaClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class NewDeliveryReclamation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NewDeliveryReclamation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'paper' => 'string',
        'publication_date' => '\DateTime',
        'claim' => 'string',
        'door_code' => 'string',
        'reason' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'paper' => null,
        'publication_date' => 'date',
        'claim' => null,
        'door_code' => null,
        'reason' => null
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
        'paper' => 'paper',
        'publication_date' => 'publicationDate',
        'claim' => 'claim',
        'door_code' => 'doorCode',
        'reason' => 'reason'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'paper' => 'setPaper',
        'publication_date' => 'setPublicationDate',
        'claim' => 'setClaim',
        'door_code' => 'setDoorCode',
        'reason' => 'setReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'paper' => 'getPaper',
        'publication_date' => 'getPublicationDate',
        'claim' => 'getClaim',
        'door_code' => 'getDoorCode',
        'reason' => 'getReason'
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

    const CLAIM_EXTENSION = 'Extension';
    const CLAIM_NEW_DELIVERY = 'NewDelivery';
    const REASON_MISSING_DELIVERY = 'MissingDelivery';
    const REASON_WRONG_PAPER = 'WrongPaper';
    const REASON_DAMAGED_PAPER = 'DamagedPaper';
    const REASON_OLDER_RECLAMATION = 'OlderReclamation';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getClaimAllowableValues()
    {
        return [
            self::CLAIM_EXTENSION,
            self::CLAIM_NEW_DELIVERY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReasonAllowableValues()
    {
        return [
            self::REASON_MISSING_DELIVERY,
            self::REASON_WRONG_PAPER,
            self::REASON_DAMAGED_PAPER,
            self::REASON_OLDER_RECLAMATION,
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
        $this->container['paper'] = isset($data['paper']) ? $data['paper'] : null;
        $this->container['publication_date'] = isset($data['publication_date']) ? $data['publication_date'] : null;
        $this->container['claim'] = isset($data['claim']) ? $data['claim'] : null;
        $this->container['door_code'] = isset($data['door_code']) ? $data['door_code'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['publication_date'] === null) {
            $invalidProperties[] = "'publication_date' can't be null";
        }
        if ($this->container['claim'] === null) {
            $invalidProperties[] = "'claim' can't be null";
        }
        $allowedValues = $this->getClaimAllowableValues();
        if (!is_null($this->container['claim']) && !in_array($this->container['claim'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'claim', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getReasonAllowableValues();
        if (!is_null($this->container['reason']) && !in_array($this->container['reason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'reason', must be one of '%s'",
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
     * Gets paper
     *
     * @return string|null
     */
    public function getPaper()
    {
        return $this->container['paper'];
    }

    /**
     * Sets paper
     *
     * @param string|null $paper paper
     *
     * @return $this
     */
    public function setPaper($paper)
    {
        $this->container['paper'] = $paper;

        return $this;
    }

    /**
     * Gets publication_date
     *
     * @return \DateTime
     */
    public function getPublicationDate()
    {
        return $this->container['publication_date'];
    }

    /**
     * Sets publication_date
     *
     * @param \DateTime $publication_date publication_date
     *
     * @return $this
     */
    public function setPublicationDate($publication_date)
    {
        $this->container['publication_date'] = $publication_date;

        return $this;
    }

    /**
     * Gets claim
     *
     * @return string
     */
    public function getClaim()
    {
        return $this->container['claim'];
    }

    /**
     * Sets claim
     *
     * @param string $claim claim
     *
     * @return $this
     */
    public function setClaim($claim)
    {
        $allowedValues = $this->getClaimAllowableValues();
        if (!in_array($claim, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'claim', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['claim'] = $claim;

        return $this;
    }

    /**
     * Gets door_code
     *
     * @return string|null
     */
    public function getDoorCode()
    {
        return $this->container['door_code'];
    }

    /**
     * Sets door_code
     *
     * @param string|null $door_code Door code for possible redelivery
     *
     * @return $this
     */
    public function setDoorCode($door_code)
    {
        $this->container['door_code'] = $door_code;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string|null $reason reason
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $allowedValues = $this->getReasonAllowableValues();
        if (!is_null($reason) && !in_array($reason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'reason', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reason'] = $reason;

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


