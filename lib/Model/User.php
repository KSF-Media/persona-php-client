<?php
/**
 * User
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
 * User Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class User implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'User';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uuid' => 'string',
        'email' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'address' => '\OpenAPI\Client\Model\Address',
        'cusno' => 'int',
        'subs' => '\OpenAPI\Client\Model\Subscription[]',
        'consent' => '\OpenAPI\Client\Model\GdprConsent[]',
        'legal' => '\OpenAPI\Client\Model\LegalConsent[]',
        'pending_address_changes' => '\OpenAPI\Client\Model\PendingAddressChange[]',
        'has_completed_registration' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'uuid' => 'uuid',
        'email' => null,
        'first_name' => null,
        'last_name' => null,
        'address' => null,
        'cusno' => null,
        'subs' => null,
        'consent' => null,
        'legal' => null,
        'pending_address_changes' => null,
        'has_completed_registration' => null
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
        'uuid' => 'uuid',
        'email' => 'email',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'address' => 'address',
        'cusno' => 'cusno',
        'subs' => 'subs',
        'consent' => 'consent',
        'legal' => 'legal',
        'pending_address_changes' => 'pendingAddressChanges',
        'has_completed_registration' => 'hasCompletedRegistration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uuid' => 'setUuid',
        'email' => 'setEmail',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'address' => 'setAddress',
        'cusno' => 'setCusno',
        'subs' => 'setSubs',
        'consent' => 'setConsent',
        'legal' => 'setLegal',
        'pending_address_changes' => 'setPendingAddressChanges',
        'has_completed_registration' => 'setHasCompletedRegistration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uuid' => 'getUuid',
        'email' => 'getEmail',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'address' => 'getAddress',
        'cusno' => 'getCusno',
        'subs' => 'getSubs',
        'consent' => 'getConsent',
        'legal' => 'getLegal',
        'pending_address_changes' => 'getPendingAddressChanges',
        'has_completed_registration' => 'getHasCompletedRegistration'
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
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['cusno'] = isset($data['cusno']) ? $data['cusno'] : null;
        $this->container['subs'] = isset($data['subs']) ? $data['subs'] : null;
        $this->container['consent'] = isset($data['consent']) ? $data['consent'] : null;
        $this->container['legal'] = isset($data['legal']) ? $data['legal'] : null;
        $this->container['pending_address_changes'] = isset($data['pending_address_changes']) ? $data['pending_address_changes'] : null;
        $this->container['has_completed_registration'] = isset($data['has_completed_registration']) ? $data['has_completed_registration'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['uuid'] === null) {
            $invalidProperties[] = "'uuid' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['cusno'] === null) {
            $invalidProperties[] = "'cusno' can't be null";
        }
        if (($this->container['cusno'] > 9223372036854775807)) {
            $invalidProperties[] = "invalid value for 'cusno', must be smaller than or equal to 9223372036854775807.";
        }

        if (($this->container['cusno'] < -9223372036854775808)) {
            $invalidProperties[] = "invalid value for 'cusno', must be bigger than or equal to -9223372036854775808.";
        }

        if ($this->container['subs'] === null) {
            $invalidProperties[] = "'subs' can't be null";
        }
        if ($this->container['consent'] === null) {
            $invalidProperties[] = "'consent' can't be null";
        }
        if ($this->container['legal'] === null) {
            $invalidProperties[] = "'legal' can't be null";
        }
        if ($this->container['has_completed_registration'] === null) {
            $invalidProperties[] = "'has_completed_registration' can't be null";
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
     * Gets uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string $uuid uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name last_name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \OpenAPI\Client\Model\Address|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \OpenAPI\Client\Model\Address|null $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets cusno
     *
     * @return int
     */
    public function getCusno()
    {
        return $this->container['cusno'];
    }

    /**
     * Sets cusno
     *
     * @param int $cusno cusno
     *
     * @return $this
     */
    public function setCusno($cusno)
    {

        if (($cusno > 9223372036854775807)) {
            throw new \InvalidArgumentException('invalid value for $cusno when calling User., must be smaller than or equal to 9223372036854775807.');
        }
        if (($cusno < -9223372036854775808)) {
            throw new \InvalidArgumentException('invalid value for $cusno when calling User., must be bigger than or equal to -9223372036854775808.');
        }

        $this->container['cusno'] = $cusno;

        return $this;
    }

    /**
     * Gets subs
     *
     * @return \OpenAPI\Client\Model\Subscription[]
     */
    public function getSubs()
    {
        return $this->container['subs'];
    }

    /**
     * Sets subs
     *
     * @param \OpenAPI\Client\Model\Subscription[] $subs subs
     *
     * @return $this
     */
    public function setSubs($subs)
    {
        $this->container['subs'] = $subs;

        return $this;
    }

    /**
     * Gets consent
     *
     * @return \OpenAPI\Client\Model\GdprConsent[]
     */
    public function getConsent()
    {
        return $this->container['consent'];
    }

    /**
     * Sets consent
     *
     * @param \OpenAPI\Client\Model\GdprConsent[] $consent consent
     *
     * @return $this
     */
    public function setConsent($consent)
    {
        $this->container['consent'] = $consent;

        return $this;
    }

    /**
     * Gets legal
     *
     * @return \OpenAPI\Client\Model\LegalConsent[]
     */
    public function getLegal()
    {
        return $this->container['legal'];
    }

    /**
     * Sets legal
     *
     * @param \OpenAPI\Client\Model\LegalConsent[] $legal legal
     *
     * @return $this
     */
    public function setLegal($legal)
    {
        $this->container['legal'] = $legal;

        return $this;
    }

    /**
     * Gets pending_address_changes
     *
     * @return \OpenAPI\Client\Model\PendingAddressChange[]|null
     */
    public function getPendingAddressChanges()
    {
        return $this->container['pending_address_changes'];
    }

    /**
     * Sets pending_address_changes
     *
     * @param \OpenAPI\Client\Model\PendingAddressChange[]|null $pending_address_changes pending_address_changes
     *
     * @return $this
     */
    public function setPendingAddressChanges($pending_address_changes)
    {
        $this->container['pending_address_changes'] = $pending_address_changes;

        return $this;
    }

    /**
     * Gets has_completed_registration
     *
     * @return bool
     */
    public function getHasCompletedRegistration()
    {
        return $this->container['has_completed_registration'];
    }

    /**
     * Sets has_completed_registration
     *
     * @param bool $has_completed_registration has_completed_registration
     *
     * @return $this
     */
    public function setHasCompletedRegistration($has_completed_registration)
    {
        $this->container['has_completed_registration'] = $has_completed_registration;

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


