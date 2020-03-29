<?php
/**
 * InstrumentIdentifierResponse
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
 * InstrumentIdentifierResponse Class Doc Comment
 *
 * @category    Class
 * @package     Haque\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InstrumentIdentifierResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'InstrumentIdentifierResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'links' => '\Haque\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPost200ResponseLinks',
        'id' => 'string',
        'object' => 'string',
        'state' => 'string',
        'card' => '\Haque\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPost200ResponseCard',
        'tokenizedCard' => '\Haque\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPost200ResponseTokenizedCard',
        'issuer' => '\Haque\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPost200ResponseIssuer',
        'bankAccount' => '\Haque\Cybersource\CybersourceSDK\Model\Tmsv1instrumentidentifiersBankAccount',
        'processingInformation' => '\Haque\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPost200ResponseProcessingInformation',
        'metadata' => '\Haque\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPost200ResponseMetadata'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'links' => null,
        'id' => null,
        'object' => null,
        'state' => null,
        'card' => null,
        'tokenizedCard' => null,
        'issuer' => null,
        'bankAccount' => null,
        'processingInformation' => null,
        'metadata' => null
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
        'links' => '_links',
        'id' => 'id',
        'object' => 'object',
        'state' => 'state',
        'card' => 'card',
        'tokenizedCard' => 'tokenizedCard',
        'issuer' => 'issuer',
        'bankAccount' => 'bankAccount',
        'processingInformation' => 'processingInformation',
        'metadata' => 'metadata'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'id' => 'setId',
        'object' => 'setObject',
        'state' => 'setState',
        'card' => 'setCard',
        'tokenizedCard' => 'setTokenizedCard',
        'issuer' => 'setIssuer',
        'bankAccount' => 'setBankAccount',
        'processingInformation' => 'setProcessingInformation',
        'metadata' => 'setMetadata'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'id' => 'getId',
        'object' => 'getObject',
        'state' => 'getState',
        'card' => 'getCard',
        'tokenizedCard' => 'getTokenizedCard',
        'issuer' => 'getIssuer',
        'bankAccount' => 'getBankAccount',
        'processingInformation' => 'getProcessingInformation',
        'metadata' => 'getMetadata'
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
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['object'] = isset($data['object']) ? $data['object'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
        $this->container['tokenizedCard'] = isset($data['tokenizedCard']) ? $data['tokenizedCard'] : null;
        $this->container['issuer'] = isset($data['issuer']) ? $data['issuer'] : null;
        $this->container['bankAccount'] = isset($data['bankAccount']) ? $data['bankAccount'] : null;
        $this->container['processingInformation'] = isset($data['processingInformation']) ? $data['processingInformation'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
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
     * Gets links
     * @return \Haque\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPost200ResponseLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \Haque\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPost200ResponseLinks $links
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id Unique identification number assigned by Haque\Cybersource\CybersourceSDK to the submitted request.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets object
     * @return string
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     * @param string $object 'Describes type of token.'  Valid values: - instrumentIdentifier
     * @return $this
     */
    public function setObject($object)
    {
        $this->container['object'] = $object;

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
     * @param string $state 'Current state of the token.'  Valid values: - ACTIVE - CLOSED
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets card
     * @return \Haque\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPost200ResponseCard
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     * @param \Haque\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPost200ResponseCard $card
     * @return $this
     */
    public function setCard($card)
    {
        $this->container['card'] = $card;

        return $this;
    }

    /**
     * Gets tokenizedCard
     * @return \Haque\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPost200ResponseTokenizedCard
     */
    public function getTokenizedCard()
    {
        return $this->container['tokenizedCard'];
    }

    /**
     * Sets tokenizedCard
     * @param \Haque\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPost200ResponseTokenizedCard $tokenizedCard
     * @return $this
     */
    public function setTokenizedCard($tokenizedCard)
    {
        $this->container['tokenizedCard'] = $tokenizedCard;

        return $this;
    }

    /**
     * Gets issuer
     * @return \Haque\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPost200ResponseIssuer
     */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
     * Sets issuer
     * @param \Haque\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPost200ResponseIssuer $issuer
     * @return $this
     */
    public function setIssuer($issuer)
    {
        $this->container['issuer'] = $issuer;

        return $this;
    }

    /**
     * Gets bankAccount
     * @return \Haque\Cybersource\CybersourceSDK\Model\Tmsv1instrumentidentifiersBankAccount
     */
    public function getBankAccount()
    {
        return $this->container['bankAccount'];
    }

    /**
     * Sets bankAccount
     * @param \Haque\Cybersource\CybersourceSDK\Model\Tmsv1instrumentidentifiersBankAccount $bankAccount
     * @return $this
     */
    public function setBankAccount($bankAccount)
    {
        $this->container['bankAccount'] = $bankAccount;

        return $this;
    }

    /**
     * Gets processingInformation
     * @return \Haque\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPost200ResponseProcessingInformation
     */
    public function getProcessingInformation()
    {
        return $this->container['processingInformation'];
    }

    /**
     * Sets processingInformation
     * @param \Haque\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPost200ResponseProcessingInformation $processingInformation
     * @return $this
     */
    public function setProcessingInformation($processingInformation)
    {
        $this->container['processingInformation'] = $processingInformation;

        return $this;
    }

    /**
     * Gets metadata
     * @return \Haque\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPost200ResponseMetadata
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     * @param \Haque\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPost200ResponseMetadata $metadata
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

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


