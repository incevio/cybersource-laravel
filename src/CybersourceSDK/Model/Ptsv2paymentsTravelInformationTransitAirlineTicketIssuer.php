<?php
/**
 * Ptsv2paymentsTravelInformationTransitAirlineTicketIssuer
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
 * Ptsv2paymentsTravelInformationTransitAirlineTicketIssuer Class Doc Comment
 *
 * @category    Class
 * @package     Incevio\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsTravelInformationTransitAirlineTicketIssuer implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payments_travelInformation_transit_airline_ticketIssuer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'name' => 'string',
        'address' => 'string',
        'locality' => 'string',
        'administrativeArea' => 'string',
        'postalCode' => 'string',
        'country' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'name' => null,
        'address' => null,
        'locality' => null,
        'administrativeArea' => null,
        'postalCode' => null,
        'country' => null
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
        'code' => 'code',
        'name' => 'name',
        'address' => 'address',
        'locality' => 'locality',
        'administrativeArea' => 'administrativeArea',
        'postalCode' => 'postalCode',
        'country' => 'country'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'name' => 'setName',
        'address' => 'setAddress',
        'locality' => 'setLocality',
        'administrativeArea' => 'setAdministrativeArea',
        'postalCode' => 'setPostalCode',
        'country' => 'setCountry'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'name' => 'getName',
        'address' => 'getAddress',
        'locality' => 'getLocality',
        'administrativeArea' => 'getAdministrativeArea',
        'postalCode' => 'getPostalCode',
        'country' => 'getCountry'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['locality'] = isset($data['locality']) ? $data['locality'] : null;
        $this->container['administrativeArea'] = isset($data['administrativeArea']) ? $data['administrativeArea'] : null;
        $this->container['postalCode'] = isset($data['postalCode']) ? $data['postalCode'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['code']) && (strlen($this->container['code']) > 4)) {
            $invalid_properties[] = "invalid value for 'code', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['name']) && (strlen($this->container['name']) > 20)) {
            $invalid_properties[] = "invalid value for 'name', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['address']) && (strlen($this->container['address']) > 16)) {
            $invalid_properties[] = "invalid value for 'address', the character length must be smaller than or equal to 16.";
        }

        if (!is_null($this->container['locality']) && (strlen($this->container['locality']) > 18)) {
            $invalid_properties[] = "invalid value for 'locality', the character length must be smaller than or equal to 18.";
        }

        if (!is_null($this->container['administrativeArea']) && (strlen($this->container['administrativeArea']) > 18)) {
            $invalid_properties[] = "invalid value for 'administrativeArea', the character length must be smaller than or equal to 18.";
        }

        if (!is_null($this->container['postalCode']) && (strlen($this->container['postalCode']) > 15)) {
            $invalid_properties[] = "invalid value for 'postalCode', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['country']) && (strlen($this->container['country']) > 18)) {
            $invalid_properties[] = "invalid value for 'country', the character length must be smaller than or equal to 18.";
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

        if (strlen($this->container['code']) > 4) {
            return false;
        }
        if (strlen($this->container['name']) > 20) {
            return false;
        }
        if (strlen($this->container['address']) > 16) {
            return false;
        }
        if (strlen($this->container['locality']) > 18) {
            return false;
        }
        if (strlen($this->container['administrativeArea']) > 18) {
            return false;
        }
        if (strlen($this->container['postalCode']) > 15) {
            return false;
        }
        if (strlen($this->container['country']) > 18) {
            return false;
        }
        return true;
    }


    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code IATA2 airline code. Format: English characters only.
     * @return $this
     */
    public function setCode($code)
    {
        if (!is_null($code) && (strlen($code) > 4)) {
            throw new \InvalidArgumentException('invalid length for $code when calling Ptsv2paymentsTravelInformationTransitAirlineTicketIssuer., must be smaller than or equal to 4.');
        }

        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Name of the ticket issuer. If you do not include this field, Incevio\Cybersource\CybersourceSDK uses the value for your merchant name that is in the Incevio\Cybersource\CybersourceSDK merchant configuration database.
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (strlen($name) > 20)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Ptsv2paymentsTravelInformationTransitAirlineTicketIssuer., must be smaller than or equal to 20.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets address
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     * @param string $address Address of the company issuing the ticket.
     * @return $this
     */
    public function setAddress($address)
    {
        if (!is_null($address) && (strlen($address) > 16)) {
            throw new \InvalidArgumentException('invalid length for $address when calling Ptsv2paymentsTravelInformationTransitAirlineTicketIssuer., must be smaller than or equal to 16.');
        }

        $this->container['address'] = $address;

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
     * @param string $locality City in which the transactionoccurred. If the name of the city exceeds 18 characters, use meaningful abbreviations. Format: English characters only
     * @return $this
     */
    public function setLocality($locality)
    {
        if (!is_null($locality) && (strlen($locality) > 18)) {
            throw new \InvalidArgumentException('invalid length for $locality when calling Ptsv2paymentsTravelInformationTransitAirlineTicketIssuer., must be smaller than or equal to 18.');
        }

        $this->container['locality'] = $locality;

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
     * @param string $administrativeArea State in which transaction occured.
     * @return $this
     */
    public function setAdministrativeArea($administrativeArea)
    {
        if (!is_null($administrativeArea) && (strlen($administrativeArea) > 18)) {
            throw new \InvalidArgumentException('invalid length for $administrativeArea when calling Ptsv2paymentsTravelInformationTransitAirlineTicketIssuer., must be smaller than or equal to 18.');
        }

        $this->container['administrativeArea'] = $administrativeArea;

        return $this;
    }

    /**
     * Gets postalCode
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postalCode'];
    }

    /**
     * Sets postalCode
     * @param string $postalCode Zip code of the city in which transaction occured.
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        if (!is_null($postalCode) && (strlen($postalCode) > 15)) {
            throw new \InvalidArgumentException('invalid length for $postalCode when calling Ptsv2paymentsTravelInformationTransitAirlineTicketIssuer., must be smaller than or equal to 15.');
        }

        $this->container['postalCode'] = $postalCode;

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
     * @param string $country Country in which transaction occured.
     * @return $this
     */
    public function setCountry($country)
    {
        if (!is_null($country) && (strlen($country) > 18)) {
            throw new \InvalidArgumentException('invalid length for $country when calling Ptsv2paymentsTravelInformationTransitAirlineTicketIssuer., must be smaller than or equal to 18.');
        }

        $this->container['country'] = $country;

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


