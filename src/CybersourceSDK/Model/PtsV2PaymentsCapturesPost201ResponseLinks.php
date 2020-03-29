<?php
/**
 * PtsV2PaymentsCapturesPost201ResponseLinks
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
 * PtsV2PaymentsCapturesPost201ResponseLinks Class Doc Comment
 *
 * @category    Class
 * @package     Haque\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PtsV2PaymentsCapturesPost201ResponseLinks implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsV2PaymentsCapturesPost201Response__links';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'self' => '\Haque\Cybersource\CybersourceSDK\Model\PtsV2PaymentsPost201ResponseLinksSelf',
        'void' => '\Haque\Cybersource\CybersourceSDK\Model\PtsV2PaymentsPost201ResponseLinksSelf',
        'refund' => '\Haque\Cybersource\CybersourceSDK\Model\PtsV2PaymentsPost201ResponseLinksSelf'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'self' => null,
        'void' => null,
        'refund' => null
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
        'self' => 'self',
        'void' => 'void',
        'refund' => 'refund'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'self' => 'setSelf',
        'void' => 'setVoid',
        'refund' => 'setRefund'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'self' => 'getSelf',
        'void' => 'getVoid',
        'refund' => 'getRefund'
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
        $this->container['self'] = isset($data['self']) ? $data['self'] : null;
        $this->container['void'] = isset($data['void']) ? $data['void'] : null;
        $this->container['refund'] = isset($data['refund']) ? $data['refund'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets self
     * @return \Haque\Cybersource\CybersourceSDK\Model\PtsV2PaymentsPost201ResponseLinksSelf
     */
    public function getSelf()
    {
        return $this->container['self'];
    }

    /**
     * Sets self
     * @param \Haque\Cybersource\CybersourceSDK\Model\PtsV2PaymentsPost201ResponseLinksSelf $self
     * @return $this
     */
    public function setSelf($self)
    {
        $this->container['self'] = $self;

        return $this;
    }

    /**
     * Gets void
     * @return \Haque\Cybersource\CybersourceSDK\Model\PtsV2PaymentsPost201ResponseLinksSelf
     */
    public function getVoid()
    {
        return $this->container['void'];
    }

    /**
     * Sets void
     * @param \Haque\Cybersource\CybersourceSDK\Model\PtsV2PaymentsPost201ResponseLinksSelf $void
     * @return $this
     */
    public function setVoid($void)
    {
        $this->container['void'] = $void;

        return $this;
    }

    /**
     * Gets refund
     * @return \Haque\Cybersource\CybersourceSDK\Model\PtsV2PaymentsPost201ResponseLinksSelf
     */
    public function getRefund()
    {
        return $this->container['refund'];
    }

    /**
     * Sets refund
     * @param \Haque\Cybersource\CybersourceSDK\Model\PtsV2PaymentsPost201ResponseLinksSelf $refund
     * @return $this
     */
    public function setRefund($refund)
    {
        $this->container['refund'] = $refund;

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


