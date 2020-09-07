<?php
/**
 * Subscription
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
 * Subscription Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Subscription implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Subscription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'subsno' => 'int',
        'extno' => 'int',
        'cusno' => 'int',
        'paycusno' => 'int',
        'kind' => 'string',
        'state' => 'string',
        'pricegroup' => 'string',
        'package' => '\OpenAPI\Client\Model\Package',
        'dates' => '\OpenAPI\Client\Model\SubscriptionDates',
        'extsubsexists' => 'bool',
        'campaign' => '\OpenAPI\Client\Model\Campaign',
        'paused' => '\OpenAPI\Client\Model\PausedSubscription[]',
        'delivery_address' => '\OpenAPI\Client\Model\DeliveryAddress',
        'pending_address_changes' => '\OpenAPI\Client\Model\PendingAddressChange[]',
        'order_number' => 'string',
        'payment_method' => 'string',
        'payment_method_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'subsno' => null,
        'extno' => null,
        'cusno' => null,
        'paycusno' => null,
        'kind' => null,
        'state' => null,
        'pricegroup' => null,
        'package' => null,
        'dates' => null,
        'extsubsexists' => null,
        'campaign' => null,
        'paused' => null,
        'delivery_address' => null,
        'pending_address_changes' => null,
        'order_number' => null,
        'payment_method' => null,
        'payment_method_id' => null
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
        'extno' => 'extno',
        'cusno' => 'cusno',
        'paycusno' => 'paycusno',
        'kind' => 'kind',
        'state' => 'state',
        'pricegroup' => 'pricegroup',
        'package' => 'package',
        'dates' => 'dates',
        'extsubsexists' => 'extsubsexists',
        'campaign' => 'campaign',
        'paused' => 'paused',
        'delivery_address' => 'deliveryAddress',
        'pending_address_changes' => 'pendingAddressChanges',
        'order_number' => 'orderNumber',
        'payment_method' => 'paymentMethod',
        'payment_method_id' => 'paymentMethodId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'subsno' => 'setSubsno',
        'extno' => 'setExtno',
        'cusno' => 'setCusno',
        'paycusno' => 'setPaycusno',
        'kind' => 'setKind',
        'state' => 'setState',
        'pricegroup' => 'setPricegroup',
        'package' => 'setPackage',
        'dates' => 'setDates',
        'extsubsexists' => 'setExtsubsexists',
        'campaign' => 'setCampaign',
        'paused' => 'setPaused',
        'delivery_address' => 'setDeliveryAddress',
        'pending_address_changes' => 'setPendingAddressChanges',
        'order_number' => 'setOrderNumber',
        'payment_method' => 'setPaymentMethod',
        'payment_method_id' => 'setPaymentMethodId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'subsno' => 'getSubsno',
        'extno' => 'getExtno',
        'cusno' => 'getCusno',
        'paycusno' => 'getPaycusno',
        'kind' => 'getKind',
        'state' => 'getState',
        'pricegroup' => 'getPricegroup',
        'package' => 'getPackage',
        'dates' => 'getDates',
        'extsubsexists' => 'getExtsubsexists',
        'campaign' => 'getCampaign',
        'paused' => 'getPaused',
        'delivery_address' => 'getDeliveryAddress',
        'pending_address_changes' => 'getPendingAddressChanges',
        'order_number' => 'getOrderNumber',
        'payment_method' => 'getPaymentMethod',
        'payment_method_id' => 'getPaymentMethodId'
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
        $this->container['extno'] = isset($data['extno']) ? $data['extno'] : null;
        $this->container['cusno'] = isset($data['cusno']) ? $data['cusno'] : null;
        $this->container['paycusno'] = isset($data['paycusno']) ? $data['paycusno'] : null;
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['pricegroup'] = isset($data['pricegroup']) ? $data['pricegroup'] : null;
        $this->container['package'] = isset($data['package']) ? $data['package'] : null;
        $this->container['dates'] = isset($data['dates']) ? $data['dates'] : null;
        $this->container['extsubsexists'] = isset($data['extsubsexists']) ? $data['extsubsexists'] : null;
        $this->container['campaign'] = isset($data['campaign']) ? $data['campaign'] : null;
        $this->container['paused'] = isset($data['paused']) ? $data['paused'] : null;
        $this->container['delivery_address'] = isset($data['delivery_address']) ? $data['delivery_address'] : null;
        $this->container['pending_address_changes'] = isset($data['pending_address_changes']) ? $data['pending_address_changes'] : null;
        $this->container['order_number'] = isset($data['order_number']) ? $data['order_number'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['payment_method_id'] = isset($data['payment_method_id']) ? $data['payment_method_id'] : null;
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

        if ($this->container['extno'] === null) {
            $invalidProperties[] = "'extno' can't be null";
        }
        if (($this->container['extno'] > 9223372036854775807)) {
            $invalidProperties[] = "invalid value for 'extno', must be smaller than or equal to 9223372036854775807.";
        }

        if (($this->container['extno'] < -9223372036854775808)) {
            $invalidProperties[] = "invalid value for 'extno', must be bigger than or equal to -9223372036854775808.";
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

        if ($this->container['paycusno'] === null) {
            $invalidProperties[] = "'paycusno' can't be null";
        }
        if (($this->container['paycusno'] > 9223372036854775807)) {
            $invalidProperties[] = "invalid value for 'paycusno', must be smaller than or equal to 9223372036854775807.";
        }

        if (($this->container['paycusno'] < -9223372036854775808)) {
            $invalidProperties[] = "invalid value for 'paycusno', must be bigger than or equal to -9223372036854775808.";
        }

        if ($this->container['kind'] === null) {
            $invalidProperties[] = "'kind' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['package'] === null) {
            $invalidProperties[] = "'package' can't be null";
        }
        if ($this->container['dates'] === null) {
            $invalidProperties[] = "'dates' can't be null";
        }
        if ($this->container['extsubsexists'] === null) {
            $invalidProperties[] = "'extsubsexists' can't be null";
        }
        if (!is_null($this->container['payment_method_id']) && ($this->container['payment_method_id'] > 9223372036854775807)) {
            $invalidProperties[] = "invalid value for 'payment_method_id', must be smaller than or equal to 9223372036854775807.";
        }

        if (!is_null($this->container['payment_method_id']) && ($this->container['payment_method_id'] < -9223372036854775808)) {
            $invalidProperties[] = "invalid value for 'payment_method_id', must be bigger than or equal to -9223372036854775808.";
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
            throw new \InvalidArgumentException('invalid value for $subsno when calling Subscription., must be smaller than or equal to 9223372036854775807.');
        }
        if (($subsno < -9223372036854775808)) {
            throw new \InvalidArgumentException('invalid value for $subsno when calling Subscription., must be bigger than or equal to -9223372036854775808.');
        }

        $this->container['subsno'] = $subsno;

        return $this;
    }

    /**
     * Gets extno
     *
     * @return int
     */
    public function getExtno()
    {
        return $this->container['extno'];
    }

    /**
     * Sets extno
     *
     * @param int $extno extno
     *
     * @return $this
     */
    public function setExtno($extno)
    {

        if (($extno > 9223372036854775807)) {
            throw new \InvalidArgumentException('invalid value for $extno when calling Subscription., must be smaller than or equal to 9223372036854775807.');
        }
        if (($extno < -9223372036854775808)) {
            throw new \InvalidArgumentException('invalid value for $extno when calling Subscription., must be bigger than or equal to -9223372036854775808.');
        }

        $this->container['extno'] = $extno;

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
            throw new \InvalidArgumentException('invalid value for $cusno when calling Subscription., must be smaller than or equal to 9223372036854775807.');
        }
        if (($cusno < -9223372036854775808)) {
            throw new \InvalidArgumentException('invalid value for $cusno when calling Subscription., must be bigger than or equal to -9223372036854775808.');
        }

        $this->container['cusno'] = $cusno;

        return $this;
    }

    /**
     * Gets paycusno
     *
     * @return int
     */
    public function getPaycusno()
    {
        return $this->container['paycusno'];
    }

    /**
     * Sets paycusno
     *
     * @param int $paycusno paycusno
     *
     * @return $this
     */
    public function setPaycusno($paycusno)
    {

        if (($paycusno > 9223372036854775807)) {
            throw new \InvalidArgumentException('invalid value for $paycusno when calling Subscription., must be smaller than or equal to 9223372036854775807.');
        }
        if (($paycusno < -9223372036854775808)) {
            throw new \InvalidArgumentException('invalid value for $paycusno when calling Subscription., must be bigger than or equal to -9223372036854775808.');
        }

        $this->container['paycusno'] = $paycusno;

        return $this;
    }

    /**
     * Gets kind
     *
     * @return string
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     *
     * @param string $kind kind
     *
     * @return $this
     */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets pricegroup
     *
     * @return string|null
     */
    public function getPricegroup()
    {
        return $this->container['pricegroup'];
    }

    /**
     * Sets pricegroup
     *
     * @param string|null $pricegroup pricegroup
     *
     * @return $this
     */
    public function setPricegroup($pricegroup)
    {
        $this->container['pricegroup'] = $pricegroup;

        return $this;
    }

    /**
     * Gets package
     *
     * @return \OpenAPI\Client\Model\Package
     */
    public function getPackage()
    {
        return $this->container['package'];
    }

    /**
     * Sets package
     *
     * @param \OpenAPI\Client\Model\Package $package package
     *
     * @return $this
     */
    public function setPackage($package)
    {
        $this->container['package'] = $package;

        return $this;
    }

    /**
     * Gets dates
     *
     * @return \OpenAPI\Client\Model\SubscriptionDates
     */
    public function getDates()
    {
        return $this->container['dates'];
    }

    /**
     * Sets dates
     *
     * @param \OpenAPI\Client\Model\SubscriptionDates $dates dates
     *
     * @return $this
     */
    public function setDates($dates)
    {
        $this->container['dates'] = $dates;

        return $this;
    }

    /**
     * Gets extsubsexists
     *
     * @return bool
     */
    public function getExtsubsexists()
    {
        return $this->container['extsubsexists'];
    }

    /**
     * Sets extsubsexists
     *
     * @param bool $extsubsexists extsubsexists
     *
     * @return $this
     */
    public function setExtsubsexists($extsubsexists)
    {
        $this->container['extsubsexists'] = $extsubsexists;

        return $this;
    }

    /**
     * Gets campaign
     *
     * @return \OpenAPI\Client\Model\Campaign|null
     */
    public function getCampaign()
    {
        return $this->container['campaign'];
    }

    /**
     * Sets campaign
     *
     * @param \OpenAPI\Client\Model\Campaign|null $campaign campaign
     *
     * @return $this
     */
    public function setCampaign($campaign)
    {
        $this->container['campaign'] = $campaign;

        return $this;
    }

    /**
     * Gets paused
     *
     * @return \OpenAPI\Client\Model\PausedSubscription[]|null
     */
    public function getPaused()
    {
        return $this->container['paused'];
    }

    /**
     * Sets paused
     *
     * @param \OpenAPI\Client\Model\PausedSubscription[]|null $paused paused
     *
     * @return $this
     */
    public function setPaused($paused)
    {
        $this->container['paused'] = $paused;

        return $this;
    }

    /**
     * Gets delivery_address
     *
     * @return \OpenAPI\Client\Model\DeliveryAddress|null
     */
    public function getDeliveryAddress()
    {
        return $this->container['delivery_address'];
    }

    /**
     * Sets delivery_address
     *
     * @param \OpenAPI\Client\Model\DeliveryAddress|null $delivery_address delivery_address
     *
     * @return $this
     */
    public function setDeliveryAddress($delivery_address)
    {
        $this->container['delivery_address'] = $delivery_address;

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
     * Gets order_number
     *
     * @return string|null
     */
    public function getOrderNumber()
    {
        return $this->container['order_number'];
    }

    /**
     * Sets order_number
     *
     * @param string|null $order_number order_number
     *
     * @return $this
     */
    public function setOrderNumber($order_number)
    {
        $this->container['order_number'] = $order_number;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return string|null
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param string|null $payment_method payment_method
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets payment_method_id
     *
     * @return int|null
     */
    public function getPaymentMethodId()
    {
        return $this->container['payment_method_id'];
    }

    /**
     * Sets payment_method_id
     *
     * @param int|null $payment_method_id payment_method_id
     *
     * @return $this
     */
    public function setPaymentMethodId($payment_method_id)
    {

        if (!is_null($payment_method_id) && ($payment_method_id > 9223372036854775807)) {
            throw new \InvalidArgumentException('invalid value for $payment_method_id when calling Subscription., must be smaller than or equal to 9223372036854775807.');
        }
        if (!is_null($payment_method_id) && ($payment_method_id < -9223372036854775808)) {
            throw new \InvalidArgumentException('invalid value for $payment_method_id when calling Subscription., must be bigger than or equal to -9223372036854775808.');
        }

        $this->container['payment_method_id'] = $payment_method_id;

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


