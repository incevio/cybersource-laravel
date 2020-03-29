<?php
/**
 * Tmsv1instrumentidentifiersCard
 *
 * PHP version 5
 *
 * @category Class
 * @package  Haque\Cybersource\CybersourceSDK
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Haque\Cybersource\CybersourceSDK Merged Spec
 *
 * All Haque\Cybersource\CybersourceSDK API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
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

namespace Haque\Cybersource\CybersourceSDK\Model;

use \ArrayAccess;

/**
 * Tmsv1instrumentidentifiersCard Class Doc Comment
 *
 * @category    Class
 * @package     Haque\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Tmsv1instrumentidentifiersCard implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'tmsv1instrumentidentifiers_card';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'number' => 'string',
        'expirationMonth' => 'string',
        'expirationYear' => 'string',
        'securityCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'number' => null,
        'expirationMonth' => 'MM',
        'expirationYear' => 'YYYY',
        'securityCode' => null
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
        'number' => 'number',
        'expirationMonth' => 'expirationMonth',
        'expirationYear' => 'expirationYear',
        'securityCode' => 'securityCode'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'number' => 'setNumber',
        'expirationMonth' => 'setExpirationMonth',
        'expirationYear' => 'setExpirationYear',
        'securityCode' => 'setSecurityCode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'number' => 'getNumber',
        'expirationMonth' => 'getExpirationMonth',
        'expirationYear' => 'getExpirationYear',
        'securityCode' => 'getSecurityCode'
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
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['expirationMonth'] = isset($data['expirationMonth']) ? $data['expirationMonth'] : null;
        $this->container['expirationYear'] = isset($data['expirationYear']) ? $data['expirationYear'] : null;
        $this->container['securityCode'] = isset($data['securityCode']) ? $data['securityCode'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['number']) && (strlen($this->container['number']) > 19)) {
            $invalid_properties[] = "invalid value for 'number', the character length must be smaller than or equal to 19.";
        }

        if (!is_null($this->container['number']) && (strlen($this->container['number']) < 12)) {
            $invalid_properties[] = "invalid value for 'number', the character length must be bigger than or equal to 12.";
        }

        if (!is_null($this->container['expirationMonth']) && (strlen($this->container['expirationMonth']) > 2)) {
            $invalid_properties[] = "invalid value for 'expirationMonth', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['expirationMonth']) && (strlen($this->container['expirationMonth']) < 2)) {
            $invalid_properties[] = "invalid value for 'expirationMonth', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['expirationYear']) && (strlen($this->container['expirationYear']) > 4)) {
            $invalid_properties[] = "invalid value for 'expirationYear', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['expirationYear']) && (strlen($this->container['expirationYear']) < 4)) {
            $invalid_properties[] = "invalid value for 'expirationYear', the character length must be bigger than or equal to 4.";
        }

        if (!is_null($this->container['securityCode']) && (strlen($this->container['securityCode']) > 4)) {
            $invalid_properties[] = "invalid value for 'securityCode', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['securityCode']) && (strlen($this->container['securityCode']) < 3)) {
            $invalid_properties[] = "invalid value for 'securityCode', the character length must be bigger than or equal to 3.";
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

        if (strlen($this->container['number']) > 19) {
            return false;
        }
        if (strlen($this->container['number']) < 12) {
            return false;
        }
        if (strlen($this->container['expirationMonth']) > 2) {
            return false;
        }
        if (strlen($this->container['expirationMonth']) < 2) {
            return false;
        }
        if (strlen($this->container['expirationYear']) > 4) {
            return false;
        }
        if (strlen($this->container['expirationYear']) < 4) {
            return false;
        }
        if (strlen($this->container['securityCode']) > 4) {
            return false;
        }
        if (strlen($this->container['securityCode']) < 3) {
            return false;
        }
        return true;
    }


    /**
     * Gets number
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     * @param string $number Credit card number (PAN).
     * @return $this
     */
    public function setNumber($number)
    {
        if (!is_null($number) && (strlen($number) > 19)) {
            throw new \InvalidArgumentException('invalid length for $number when calling Tmsv1instrumentidentifiersCard., must be smaller than or equal to 19.');
        }
        if (!is_null($number) && (strlen($number) < 12)) {
            throw new \InvalidArgumentException('invalid length for $number when calling Tmsv1instrumentidentifiersCard., must be bigger than or equal to 12.');
        }

        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets expirationMonth
     * @return string
     */
    public function getExpirationMonth()
    {
        return $this->container['expirationMonth'];
    }

    /**
     * Sets expirationMonth
     * @param string $expirationMonth Card expiration month.  Format: `MM`. Possible values: `01` through `12`.
     * @return $this
     */
    public function setExpirationMonth($expirationMonth)
    {
        if (!is_null($expirationMonth) && (strlen($expirationMonth) > 2)) {
            throw new \InvalidArgumentException('invalid length for $expirationMonth when calling Tmsv1instrumentidentifiersCard., must be smaller than or equal to 2.');
        }
        if (!is_null($expirationMonth) && (strlen($expirationMonth) < 2)) {
            throw new \InvalidArgumentException('invalid length for $expirationMonth when calling Tmsv1instrumentidentifiersCard., must be bigger than or equal to 2.');
        }

        $this->container['expirationMonth'] = $expirationMonth;

        return $this;
    }

    /**
     * Gets expirationYear
     * @return string
     */
    public function getExpirationYear()
    {
        return $this->container['expirationYear'];
    }

    /**
     * Sets expirationYear
     * @param string $expirationYear Card expiration year. Format: `YYYY`. Possible values: `1900` through `2099`.
     * @return $this
     */
    public function setExpirationYear($expirationYear)
    {
        if (!is_null($expirationYear) && (strlen($expirationYear) > 4)) {
            throw new \InvalidArgumentException('invalid length for $expirationYear when calling Tmsv1instrumentidentifiersCard., must be smaller than or equal to 4.');
        }
        if (!is_null($expirationYear) && (strlen($expirationYear) < 4)) {
            throw new \InvalidArgumentException('invalid length for $expirationYear when calling Tmsv1instrumentidentifiersCard., must be bigger than or equal to 4.');
        }

        $this->container['expirationYear'] = $expirationYear;

        return $this;
    }

    /**
     * Gets securityCode
     * @return string
     */
    public function getSecurityCode()
    {
        return $this->container['securityCode'];
    }

    /**
     * Sets securityCode
     * @param string $securityCode Card security code.
     * @return $this
     */
    public function setSecurityCode($securityCode)
    {
        if (!is_null($securityCode) && (strlen($securityCode) > 4)) {
            throw new \InvalidArgumentException('invalid length for $securityCode when calling Tmsv1instrumentidentifiersCard., must be smaller than or equal to 4.');
        }
        if (!is_null($securityCode) && (strlen($securityCode) < 3)) {
            throw new \InvalidArgumentException('invalid length for $securityCode when calling Tmsv1instrumentidentifiersCard., must be bigger than or equal to 3.');
        }

        $this->container['securityCode'] = $securityCode;

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
            return json_encode(\Haque\Cybersource\CybersourceSDK\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Haque\Cybersource\CybersourceSDK\ObjectSerializer::sanitizeForSerialization($this));
    }
}


