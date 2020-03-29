<?php
/**
 * Ptsv2paymentsMerchantInformationServiceFeeDescriptor
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
 * Ptsv2paymentsMerchantInformationServiceFeeDescriptor Class Doc Comment
 *
 * @category    Class
 * @package     Haque\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsMerchantInformationServiceFeeDescriptor implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payments_merchantInformation_serviceFeeDescriptor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'contact' => 'string',
        'state' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'contact' => null,
        'state' => null
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
        'name' => 'name',
        'contact' => 'contact',
        'state' => 'state'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'contact' => 'setContact',
        'state' => 'setState'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'contact' => 'getContact',
        'state' => 'getState'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['name']) && (strlen($this->container['name']) > 22)) {
            $invalid_properties[] = "invalid value for 'name', the character length must be smaller than or equal to 22.";
        }

        if (!is_null($this->container['contact']) && (strlen($this->container['contact']) > 11)) {
            $invalid_properties[] = "invalid value for 'contact', the character length must be smaller than or equal to 11.";
        }

        if (!is_null($this->container['state']) && (strlen($this->container['state']) > 20)) {
            $invalid_properties[] = "invalid value for 'state', the character length must be smaller than or equal to 20.";
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

        if (strlen($this->container['name']) > 22) {
            return false;
        }
        if (strlen($this->container['contact']) > 11) {
            return false;
        }
        if (strlen($this->container['state']) > 20) {
            return false;
        }
        return true;
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
     * @param string $name Name of the service provider that is collecting the service fee. The service provider name must consist of 3, 7, or 12 characters followed by an asterisk (*). This value must also include the words “Service Fee.”  When you include more than one consecutive space, extra spaces are removed. Use one of the following formats for this value: - <3-character name>*Service Fee - <7-character name>*Service Fee - <12-character name>*Service Fee  When payments are made in installments, this value must also include installment information such as “1 of 5” or “3 of 7.” For installment payments, use one of the following formats for this value: - <3-character name>*Service Fee*<N> of <M> - <7-character name>*Service Fee*<N> of <M> - <12-character name>*Service Fee*<N> of <M>  where <N> is the payment number and <M> is the total number of payments.  When you do not include this value in your request, Haque\Cybersource\CybersourceSDK uses the value that is in your Haque\Cybersource\CybersourceSDK account.  This value might be displayed on the cardholder’s statement.
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (strlen($name) > 22)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Ptsv2paymentsMerchantInformationServiceFeeDescriptor., must be smaller than or equal to 22.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets contact
     * @return string
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     * @param string $contact Contact information for the service provider that is collecting the service fee. when you include more than one consecutive space, extra spaces are removed.  When you do not include this value in your request, Haque\Cybersource\CybersourceSDK uses the value that is in your Haque\Cybersource\CybersourceSDK account.  This value might be displayed on the cardholder’s statement.
     * @return $this
     */
    public function setContact($contact)
    {
        if (!is_null($contact) && (strlen($contact) > 11)) {
            throw new \InvalidArgumentException('invalid length for $contact when calling Ptsv2paymentsMerchantInformationServiceFeeDescriptor., must be smaller than or equal to 11.');
        }

        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state State or territory in which the service provider is located.  When you do not include this value in your request, Haque\Cybersource\CybersourceSDK uses the value that is in your Haque\Cybersource\CybersourceSDK account.  This value might be displayed on the cardholder’s statement.
     * @return $this
     */
    public function setState($state)
    {
        if (!is_null($state) && (strlen($state) > 20)) {
            throw new \InvalidArgumentException('invalid length for $state when calling Ptsv2paymentsMerchantInformationServiceFeeDescriptor., must be smaller than or equal to 20.');
        }

        $this->container['state'] = $state;

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


