<?php
/**
 * Package
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
 * Package Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Package implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Package';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'paper' => '\OpenAPI\Client\Model\Paper',
        'digital_only' => 'bool',
        'products' => '\OpenAPI\Client\Model\Product[]',
        'offers' => '\OpenAPI\Client\Model\PackageOffer[]',
        'campaigns' => '\OpenAPI\Client\Model\Campaign[]',
        'next_delivery' => '\DateTime',
        'description' => '\OpenAPI\Client\Model\PackageDescription'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'paper' => null,
        'digital_only' => null,
        'products' => null,
        'offers' => null,
        'campaigns' => null,
        'next_delivery' => 'date',
        'description' => null
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
        'id' => 'id',
        'name' => 'name',
        'paper' => 'paper',
        'digital_only' => 'digitalOnly',
        'products' => 'products',
        'offers' => 'offers',
        'campaigns' => 'campaigns',
        'next_delivery' => 'nextDelivery',
        'description' => 'description'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'paper' => 'setPaper',
        'digital_only' => 'setDigitalOnly',
        'products' => 'setProducts',
        'offers' => 'setOffers',
        'campaigns' => 'setCampaigns',
        'next_delivery' => 'setNextDelivery',
        'description' => 'setDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'paper' => 'getPaper',
        'digital_only' => 'getDigitalOnly',
        'products' => 'getProducts',
        'offers' => 'getOffers',
        'campaigns' => 'getCampaigns',
        'next_delivery' => 'getNextDelivery',
        'description' => 'getDescription'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['paper'] = isset($data['paper']) ? $data['paper'] : null;
        $this->container['digital_only'] = isset($data['digital_only']) ? $data['digital_only'] : null;
        $this->container['products'] = isset($data['products']) ? $data['products'] : null;
        $this->container['offers'] = isset($data['offers']) ? $data['offers'] : null;
        $this->container['campaigns'] = isset($data['campaigns']) ? $data['campaigns'] : null;
        $this->container['next_delivery'] = isset($data['next_delivery']) ? $data['next_delivery'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['paper'] === null) {
            $invalidProperties[] = "'paper' can't be null";
        }
        if ($this->container['digital_only'] === null) {
            $invalidProperties[] = "'digital_only' can't be null";
        }
        if ($this->container['products'] === null) {
            $invalidProperties[] = "'products' can't be null";
        }
        if ($this->container['offers'] === null) {
            $invalidProperties[] = "'offers' can't be null";
        }
        if ($this->container['campaigns'] === null) {
            $invalidProperties[] = "'campaigns' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * Gets paper
     *
     * @return \OpenAPI\Client\Model\Paper
     */
    public function getPaper()
    {
        return $this->container['paper'];
    }

    /**
     * Sets paper
     *
     * @param \OpenAPI\Client\Model\Paper $paper paper
     *
     * @return $this
     */
    public function setPaper($paper)
    {
        $this->container['paper'] = $paper;

        return $this;
    }

    /**
     * Gets digital_only
     *
     * @return bool
     */
    public function getDigitalOnly()
    {
        return $this->container['digital_only'];
    }

    /**
     * Sets digital_only
     *
     * @param bool $digital_only digital_only
     *
     * @return $this
     */
    public function setDigitalOnly($digital_only)
    {
        $this->container['digital_only'] = $digital_only;

        return $this;
    }

    /**
     * Gets products
     *
     * @return \OpenAPI\Client\Model\Product[]
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     *
     * @param \OpenAPI\Client\Model\Product[] $products products
     *
     * @return $this
     */
    public function setProducts($products)
    {
        $this->container['products'] = $products;

        return $this;
    }

    /**
     * Gets offers
     *
     * @return \OpenAPI\Client\Model\PackageOffer[]
     */
    public function getOffers()
    {
        return $this->container['offers'];
    }

    /**
     * Sets offers
     *
     * @param \OpenAPI\Client\Model\PackageOffer[] $offers offers
     *
     * @return $this
     */
    public function setOffers($offers)
    {
        $this->container['offers'] = $offers;

        return $this;
    }

    /**
     * Gets campaigns
     *
     * @return \OpenAPI\Client\Model\Campaign[]
     */
    public function getCampaigns()
    {
        return $this->container['campaigns'];
    }

    /**
     * Sets campaigns
     *
     * @param \OpenAPI\Client\Model\Campaign[] $campaigns campaigns
     *
     * @return $this
     */
    public function setCampaigns($campaigns)
    {
        $this->container['campaigns'] = $campaigns;

        return $this;
    }

    /**
     * Gets next_delivery
     *
     * @return \DateTime|null
     */
    public function getNextDelivery()
    {
        return $this->container['next_delivery'];
    }

    /**
     * Sets next_delivery
     *
     * @param \DateTime|null $next_delivery next_delivery
     *
     * @return $this
     */
    public function setNextDelivery($next_delivery)
    {
        $this->container['next_delivery'] = $next_delivery;

        return $this;
    }

    /**
     * Gets description
     *
     * @return \OpenAPI\Client\Model\PackageDescription|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param \OpenAPI\Client\Model\PackageDescription|null $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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


