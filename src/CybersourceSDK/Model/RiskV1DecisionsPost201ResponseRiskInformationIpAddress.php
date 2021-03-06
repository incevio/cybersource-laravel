<?php
/**
 * RiskV1DecisionsPost201ResponseRiskInformationIpAddress
 *
 * PHP version 5
 *
 * @category Class
 * @package  Incevio\Cybersource\CybersourceSDK
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Incevio\Cybersource\CybersourceSDK Merged Spec
 *
 * All Incevio\Cybersource\CybersourceSDK API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Incevio\Cybersource\CybersourceSDK\Model;

use \ArrayAccess;

/**
 * RiskV1DecisionsPost201ResponseRiskInformationIpAddress Class Doc Comment
 *
 * @category    Class
 * @description Contains detailed response information about the customer&#39;s IP address.
 * @package     Incevio\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RiskV1DecisionsPost201ResponseRiskInformationIpAddress implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'riskV1DecisionsPost201Response_riskInformation_ipAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'anonymizerStatus' => 'string',
        'locality' => 'string',
        'country' => 'string',
        'administrativeArea' => 'string',
        'routingMethod' => 'string',
        'carrier' => 'string',
        'organization' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'anonymizerStatus' => null,
        'locality' => null,
        'country' => null,
        'administrativeArea' => null,
        'routingMethod' => null,
        'carrier' => null,
        'organization' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'anonymizerStatus' => 'anonymizerStatus',
        'locality' => 'locality',
        'country' => 'country',
        'administrativeArea' => 'administrativeArea',
        'routingMethod' => 'routingMethod',
        'carrier' => 'carrier',
        'organization' => 'organization'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'anonymizerStatus' => 'setAnonymizerStatus',
        'locality' => 'setLocality',
        'country' => 'setCountry',
        'administrativeArea' => 'setAdministrativeArea',
        'routingMethod' => 'setRoutingMethod',
        'carrier' => 'setCarrier',
        'organization' => 'setOrganization'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'anonymizerStatus' => 'getAnonymizerStatus',
        'locality' => 'getLocality',
        'country' => 'getCountry',
        'administrativeArea' => 'getAdministrativeArea',
        'routingMethod' => 'getRoutingMethod',
        'carrier' => 'getCarrier',
        'organization' => 'getOrganization'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }





    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['anonymizerStatus'] = isset($data['anonymizerStatus']) ? $data['anonymizerStatus'] : null;
        $this->container['locality'] = isset($data['locality']) ? $data['locality'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['administrativeArea'] = isset($data['administrativeArea']) ? $data['administrativeArea'] : null;
        $this->container['routingMethod'] = isset($data['routingMethod']) ? $data['routingMethod'] : null;
        $this->container['carrier'] = isset($data['carrier']) ? $data['carrier'] : null;
        $this->container['organization'] = isset($data['organization']) ? $data['organization'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['anonymizerStatus']) && (strlen($this->container['anonymizerStatus']) > 255)) {
            $invalid_properties[] = "invalid value for 'anonymizerStatus', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['locality']) && (strlen($this->container['locality']) > 255)) {
            $invalid_properties[] = "invalid value for 'locality', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['country']) && (strlen($this->container['country']) > 255)) {
            $invalid_properties[] = "invalid value for 'country', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['administrativeArea']) && (strlen($this->container['administrativeArea']) > 255)) {
            $invalid_properties[] = "invalid value for 'administrativeArea', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['routingMethod']) && (strlen($this->container['routingMethod']) > 255)) {
            $invalid_properties[] = "invalid value for 'routingMethod', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['carrier']) && (strlen($this->container['carrier']) > 255)) {
            $invalid_properties[] = "invalid value for 'carrier', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['organization']) && (strlen($this->container['organization']) > 255)) {
            $invalid_properties[] = "invalid value for 'organization', the character length must be smaller than or equal to 255.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if (strlen($this->container['anonymizerStatus']) > 255) {
            return false;
        }
        if (strlen($this->container['locality']) > 255) {
            return false;
        }
        if (strlen($this->container['country']) > 255) {
            return false;
        }
        if (strlen($this->container['administrativeArea']) > 255) {
            return false;
        }
        if (strlen($this->container['routingMethod']) > 255) {
            return false;
        }
        if (strlen($this->container['carrier']) > 255) {
            return false;
        }
        if (strlen($this->container['organization']) > 255) {
            return false;
        }
        return true;
    }


    /**
     * Gets anonymizerStatus
     * @return string
     */
    public function getAnonymizerStatus()
    {
        return $this->container['anonymizerStatus'];
    }

    /**
     * Sets anonymizerStatus
     * @param string $anonymizerStatus Indicates whether the transaction IP address is associated with a known anonymous proxy.  For all possible values, see the `score_ip_anonymizer_status` field description in the _Decision Manager Using the SCMP API Developer Guide_ on the [Incevio\Cybersource\CybersourceSDK Business Center.](https://ebc2.cybersource.com/ebc2/) Click **Decision Manager** > **Documentation** > **Guides** > _Decision Manager Using the SCMP API Developer Guide_ (PDF link).
     * @return $this
     */
    public function setAnonymizerStatus($anonymizerStatus)
    {
        if (!is_null($anonymizerStatus) && (strlen($anonymizerStatus) > 255)) {
            throw new \InvalidArgumentException('invalid length for $anonymizerStatus when calling RiskV1DecisionsPost201ResponseRiskInformationIpAddress., must be smaller than or equal to 255.');
        }

        $this->container['anonymizerStatus'] = $anonymizerStatus;

        return $this;
    }

    /**
     * Gets locality
     * @return string
     */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
     * Sets locality
     * @param string $locality Name of the city decoded from the IP address used directly or indirectly by the customer to send the order.  For all possible values, see the `score_ip_city` field description in the _Decision Manager Using the SCMP API Developer Guide_ on the [Incevio\Cybersource\CybersourceSDK Business Center.](https://ebc2.cybersource.com/ebc2/) Click **Decision Manager** > **Documentation** > **Guides** > _Decision Manager Using the SCMP API Developer Guide_ (PDF link).
     * @return $this
     */
    public function setLocality($locality)
    {
        if (!is_null($locality) && (strlen($locality) > 255)) {
            throw new \InvalidArgumentException('invalid length for $locality when calling RiskV1DecisionsPost201ResponseRiskInformationIpAddress., must be smaller than or equal to 255.');
        }

        $this->container['locality'] = $locality;

        return $this;
    }

    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     * @param string $country Name of the country decoded from the IP address used directly or indirectly by the customer to send the order.  For all possible values, see the `score_ip_country` field description in the _Decision Manager Using the SCMP API Developer Guide_ on the [Incevio\Cybersource\CybersourceSDK Business Center.](https://ebc2.cybersource.com/ebc2/) Click **Decision Manager** > **Documentation** > **Guides** > _Decision Manager Using the SCMP API Developer Guide_ (PDF link).
     * @return $this
     */
    public function setCountry($country)
    {
        if (!is_null($country) && (strlen($country) > 255)) {
            throw new \InvalidArgumentException('invalid length for $country when calling RiskV1DecisionsPost201ResponseRiskInformationIpAddress., must be smaller than or equal to 255.');
        }

        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets administrativeArea
     * @return string
     */
    public function getAdministrativeArea()
    {
        return $this->container['administrativeArea'];
    }

    /**
     * Sets administrativeArea
     * @param string $administrativeArea Name of the state decoded from the IP address used directly or indirectly by the customer to send the order.  For all possible values, see the `score_ip_state` field description in the _Decision Manager Using the SCMP API Developer Guide_ on the [Incevio\Cybersource\CybersourceSDK Business Center.](https://ebc2.cybersource.com/ebc2/) Click **Decision Manager** > **Documentation** > **Guides** > _Decision Manager Using the SCMP API Developer Guide_ (PDF link).
     * @return $this
     */
    public function setAdministrativeArea($administrativeArea)
    {
        if (!is_null($administrativeArea) && (strlen($administrativeArea) > 255)) {
            throw new \InvalidArgumentException('invalid length for $administrativeArea when calling RiskV1DecisionsPost201ResponseRiskInformationIpAddress., must be smaller than or equal to 255.');
        }

        $this->container['administrativeArea'] = $administrativeArea;

        return $this;
    }

    /**
     * Gets routingMethod
     * @return string
     */
    public function getRoutingMethod()
    {
        return $this->container['routingMethod'];
    }

    /**
     * Sets routingMethod
     * @param string $routingMethod Routing method decoded from the IP address used directly or indirectly by the customer to send the order.  For all possible values, see the `score_ip_routing_method` field description in the _Decision Manager Using the SCMP API Developer Guide_ on the [Incevio\Cybersource\CybersourceSDK Business Center.](https://ebc2.cybersource.com/ebc2/) Click **Decision Manager** > **Documentation** > **Guides** > _Decision Manager Using the SCMP API Developer Guide_ (PDF link).
     * @return $this
     */
    public function setRoutingMethod($routingMethod)
    {
        if (!is_null($routingMethod) && (strlen($routingMethod) > 255)) {
            throw new \InvalidArgumentException('invalid length for $routingMethod when calling RiskV1DecisionsPost201ResponseRiskInformationIpAddress., must be smaller than or equal to 255.');
        }

        $this->container['routingMethod'] = $routingMethod;

        return $this;
    }

    /**
     * Gets carrier
     * @return string
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     * @param string $carrier Provides the name of the organization that owns the ASN. The carrier is responsible for the traffic carried on the network or set of networks designated as an Autonomous System (AS) and identified by the ASN. While there are more than 27,000 active ASNs, there are fewer carriers, because a single carrier often manages several ASNs.
     * @return $this
     */
    public function setCarrier($carrier)
    {
        if (!is_null($carrier) && (strlen($carrier) > 255)) {
            throw new \InvalidArgumentException('invalid length for $carrier when calling RiskV1DecisionsPost201ResponseRiskInformationIpAddress., must be smaller than or equal to 255.');
        }

        $this->container['carrier'] = $carrier;

        return $this;
    }

    /**
     * Gets organization
     * @return string
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     * @param string $organization The Registering Organization is the entity responsible for the actions and content associated with a given block of IP addresses. This is in contrast to the carrier, which is responsible for the routing of traffic for network blocks. Registering Organizations include many types of entities, including corporate, government, or educational entities, and ISPs managing the allocation and use of network blocks.
     * @return $this
     */
    public function setOrganization($organization)
    {
        if (!is_null($organization) && (strlen($organization) > 255)) {
            throw new \InvalidArgumentException('invalid length for $organization when calling RiskV1DecisionsPost201ResponseRiskInformationIpAddress., must be smaller than or equal to 255.');
        }

        $this->container['organization'] = $organization;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Incevio\Cybersource\CybersourceSDK\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Incevio\Cybersource\CybersourceSDK\ObjectSerializer::sanitizeForSerialization($this));
    }
}


