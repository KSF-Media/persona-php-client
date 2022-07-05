<?php
/**
 * Subscription
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
 * Subscription Class Doc Comment
 *
 * @category Class
 * @package  PersonaClient
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
        'package' => '\PersonaClient\Model\Package',
        'dates' => '\PersonaClient\Model\SubscriptionDates',
        'extsubsexists' => 'bool',
        'campaign' => '\PersonaClient\Model\PackageCampaign',
        'paused' => '\PersonaClient\Model\PausedSubscription[]',
        'receiver' => 'string',
        'delivery_address' => '\PersonaClient\Model\DeliveryAddress',
        'pending_address_changes' => '\PersonaClient\Model\PendingAddressChange[]',
        'order_number' => 'string',
        'payment_method' => 'string',
        'payment_method_id' => 'int',
        'delivery_trouble_end' => 'string'
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
        'receiver' => null,
        'delivery_address' => null,
        'pending_address_changes' => null,
        'order_number' => null,
        'payment_method' => null,
        'payment_method_id' => null,
        'delivery_trouble_end' => 'yyyy-mm-ddThh:MM:ssZ'
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
        'receiver' => 'receiver',
        'delivery_address' => 'deliveryAddress',
        'pending_address_changes' => 'pendingAddressChanges',
        'order_number' => 'orderNumber',
        'payment_method' => 'paymentMethod',
        'payment_method_id' => 'paymentMethodId',
        'delivery_trouble_end' => 'deliveryTroubleEnd'
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
        'receiver' => 'setReceiver',
        'delivery_address' => 'setDeliveryAddress',
        'pending_address_changes' => 'setPendingAddressChanges',
        'order_number' => 'setOrderNumber',
        'payment_method' => 'setPaymentMethod',
        'payment_method_id' => 'setPaymentMethodId',
        'delivery_trouble_end' => 'setDeliveryTroubleEnd'
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
        'receiver' => 'getReceiver',
        'delivery_address' => 'getDeliveryAddress',
        'pending_address_changes' => 'getPendingAddressChanges',
        'order_number' => 'getOrderNumber',
        'payment_method' => 'getPaymentMethod',
        'payment_method_id' => 'getPaymentMethodId',
        'delivery_trouble_end' => 'getDeliveryTroubleEnd'
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

    const KIND_STANDING_ORDER = 'StandingOrder';
    const KIND_TIME_LIMITED_ORDER = 'TimeLimitedOrder';
    const KIND_NEWS_STAND_ORDER = 'NewsStandOrder';
    const KIND_FREE_ORDER = 'FreeOrder';
    const KIND_TESTING1 = 'Testing1';
    const KIND_TESTING2 = 'Testing2';
    const STATE_UPCOMING = 'Upcoming';
    const STATE_ACTIVE = 'Active';
    const STATE_PAUSED = 'Paused';
    const STATE_ENDED = 'Ended';
    const STATE_UNPAID_AND_CANCELED = 'UnpaidAndCanceled';
    const STATE_CANCELED = 'Canceled';
    const STATE_CANCELED_WITH_LATE_PAYMENT = 'CanceledWithLatePayment';
    const STATE_RESTARTED_AFTER_LATE_PAYMENT = 'RestartedAfterLatePayment';
    const STATE_DEACTIVATED_RECENTLY = 'DeactivatedRecently';
    const STATE_UNKNOWN = 'Unknown';
    const PRICEGROUP_NORMAL = 'Normal';
    const PRICEGROUP_CAMPAIGN = 'Campaign';
    const PRICEGROUP_FLEX = 'Flex';
    const PRICEGROUP_COMPANY = 'Company';
    const PRICEGROUP_COMPANY_FLEX = 'CompanyFlex';
    const PRICEGROUP_STUDENT = 'Student';
    const PRICEGROUP_HBL365_DISCOUNT = 'HBL365Discount';
    const PAYMENT_METHOD_PAPER_INVOICE = 'PaperInvoice';
    const PAYMENT_METHOD_CREDIT_CARD = 'CreditCard';
    const PAYMENT_METHOD_EMAIL = 'Email';
    const PAYMENT_METHOD_NET_BANK = 'NetBank';
    const PAYMENT_METHOD_ELECTRONIC_INVOICE = 'ElectronicInvoice';
    const PAYMENT_METHOD_DIRECT_PAYMENT = 'DirectPayment';
    const PAYMENT_METHOD_UNKNOWN_PAYMENT_METHOD = 'UnknownPaymentMethod';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getKindAllowableValues()
    {
        return [
            self::KIND_STANDING_ORDER,
            self::KIND_TIME_LIMITED_ORDER,
            self::KIND_NEWS_STAND_ORDER,
            self::KIND_FREE_ORDER,
            self::KIND_TESTING1,
            self::KIND_TESTING2,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_UPCOMING,
            self::STATE_ACTIVE,
            self::STATE_PAUSED,
            self::STATE_ENDED,
            self::STATE_UNPAID_AND_CANCELED,
            self::STATE_CANCELED,
            self::STATE_CANCELED_WITH_LATE_PAYMENT,
            self::STATE_RESTARTED_AFTER_LATE_PAYMENT,
            self::STATE_DEACTIVATED_RECENTLY,
            self::STATE_UNKNOWN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPricegroupAllowableValues()
    {
        return [
            self::PRICEGROUP_NORMAL,
            self::PRICEGROUP_CAMPAIGN,
            self::PRICEGROUP_FLEX,
            self::PRICEGROUP_COMPANY,
            self::PRICEGROUP_COMPANY_FLEX,
            self::PRICEGROUP_STUDENT,
            self::PRICEGROUP_HBL365_DISCOUNT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentMethodAllowableValues()
    {
        return [
            self::PAYMENT_METHOD_PAPER_INVOICE,
            self::PAYMENT_METHOD_CREDIT_CARD,
            self::PAYMENT_METHOD_EMAIL,
            self::PAYMENT_METHOD_NET_BANK,
            self::PAYMENT_METHOD_ELECTRONIC_INVOICE,
            self::PAYMENT_METHOD_DIRECT_PAYMENT,
            self::PAYMENT_METHOD_UNKNOWN_PAYMENT_METHOD,
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
        $this->container['receiver'] = isset($data['receiver']) ? $data['receiver'] : null;
        $this->container['delivery_address'] = isset($data['delivery_address']) ? $data['delivery_address'] : null;
        $this->container['pending_address_changes'] = isset($data['pending_address_changes']) ? $data['pending_address_changes'] : null;
        $this->container['order_number'] = isset($data['order_number']) ? $data['order_number'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['payment_method_id'] = isset($data['payment_method_id']) ? $data['payment_method_id'] : null;
        $this->container['delivery_trouble_end'] = isset($data['delivery_trouble_end']) ? $data['delivery_trouble_end'] : null;
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
        $allowedValues = $this->getKindAllowableValues();
        if (!is_null($this->container['kind']) && !in_array($this->container['kind'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'kind', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPricegroupAllowableValues();
        if (!is_null($this->container['pricegroup']) && !in_array($this->container['pricegroup'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'pricegroup', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
        $allowedValues = $this->getPaymentMethodAllowableValues();
        if (!is_null($this->container['payment_method']) && !in_array($this->container['payment_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'payment_method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * @param int $subsno Subscription Id - primary key together with extno
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
     * @param int $extno Subscription Extension Id - how many times a subscription has been extended
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
     * @param int $cusno Customer getting the subscription
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
     * @param int $paycusno Customer paying for the subscription
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
        $allowedValues = $this->getKindAllowableValues();
        if (!in_array($kind, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'kind', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
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
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
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
        $allowedValues = $this->getPricegroupAllowableValues();
        if (!is_null($pricegroup) && !in_array($pricegroup, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'pricegroup', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['pricegroup'] = $pricegroup;

        return $this;
    }

    /**
     * Gets package
     *
     * @return \PersonaClient\Model\Package
     */
    public function getPackage()
    {
        return $this->container['package'];
    }

    /**
     * Sets package
     *
     * @param \PersonaClient\Model\Package $package package
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
     * @return \PersonaClient\Model\SubscriptionDates
     */
    public function getDates()
    {
        return $this->container['dates'];
    }

    /**
     * Sets dates
     *
     * @param \PersonaClient\Model\SubscriptionDates $dates dates
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
     * @param bool $extsubsexists If the extension of this subscription exists
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
     * @return \PersonaClient\Model\PackageCampaign|null
     */
    public function getCampaign()
    {
        return $this->container['campaign'];
    }

    /**
     * Sets campaign
     *
     * @param \PersonaClient\Model\PackageCampaign|null $campaign campaign
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
     * @return \PersonaClient\Model\PausedSubscription[]|null
     */
    public function getPaused()
    {
        return $this->container['paused'];
    }

    /**
     * Sets paused
     *
     * @param \PersonaClient\Model\PausedSubscription[]|null $paused Pause periods of this subscription
     *
     * @return $this
     */
    public function setPaused($paused)
    {
        $this->container['paused'] = $paused;

        return $this;
    }

    /**
     * Gets receiver
     *
     * @return string|null
     */
    public function getReceiver()
    {
        return $this->container['receiver'];
    }

    /**
     * Sets receiver
     *
     * @param string|null $receiver The name of subscription receiver
     *
     * @return $this
     */
    public function setReceiver($receiver)
    {
        $this->container['receiver'] = $receiver;

        return $this;
    }

    /**
     * Gets delivery_address
     *
     * @return \PersonaClient\Model\DeliveryAddress|null
     */
    public function getDeliveryAddress()
    {
        return $this->container['delivery_address'];
    }

    /**
     * Sets delivery_address
     *
     * @param \PersonaClient\Model\DeliveryAddress|null $delivery_address delivery_address
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
     * @return \PersonaClient\Model\PendingAddressChange[]|null
     */
    public function getPendingAddressChanges()
    {
        return $this->container['pending_address_changes'];
    }

    /**
     * Sets pending_address_changes
     *
     * @param \PersonaClient\Model\PendingAddressChange[]|null $pending_address_changes Pending and ongoing temporary address changes
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
     * @param string|null $order_number Order number of subscription
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
        $allowedValues = $this->getPaymentMethodAllowableValues();
        if (!is_null($payment_method) && !in_array($payment_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'payment_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
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
     * Gets delivery_trouble_end
     *
     * @return string|null
     */
    public function getDeliveryTroubleEnd()
    {
        return $this->container['delivery_trouble_end'];
    }

    /**
     * Sets delivery_trouble_end
     *
     * @param string|null $delivery_trouble_end delivery_trouble_end
     *
     * @return $this
     */
    public function setDeliveryTroubleEnd($delivery_trouble_end)
    {
        $this->container['delivery_trouble_end'] = $delivery_trouble_end;

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


