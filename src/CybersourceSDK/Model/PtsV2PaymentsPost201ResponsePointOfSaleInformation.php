<?php
/**
 * PtsV2PaymentsPost201ResponsePointOfSaleInformation
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
 * PtsV2PaymentsPost201ResponsePointOfSaleInformation Class Doc Comment
 *
 * @category    Class
 * @package     Haque\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PtsV2PaymentsPost201ResponsePointOfSaleInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsV2PaymentsPost201Response_pointOfSaleInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'emv' => '\Haque\Cybersource\CybersourceSDK\Model\PtsV2PaymentsPost201ResponsePointOfSaleInformationEmv',
        'amexCapnData' => 'string',
        'terminalId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'emv' => null,
        'amexCapnData' => null,
        'terminalId' => null
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
        'emv' => 'emv',
        'amexCapnData' => 'amexCapnData',
        'terminalId' => 'terminalId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'emv' => 'setEmv',
        'amexCapnData' => 'setAmexCapnData',
        'terminalId' => 'setTerminalId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'emv' => 'getEmv',
        'amexCapnData' => 'getAmexCapnData',
        'terminalId' => 'getTerminalId'
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
        $this->container['emv'] = isset($data['emv']) ? $data['emv'] : null;
        $this->container['amexCapnData'] = isset($data['amexCapnData']) ? $data['amexCapnData'] : null;
        $this->container['terminalId'] = isset($data['terminalId']) ? $data['terminalId'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['amexCapnData']) && (strlen($this->container['amexCapnData']) > 15)) {
            $invalid_properties[] = "invalid value for 'amexCapnData', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['terminalId']) && (strlen($this->container['terminalId']) > 8)) {
            $invalid_properties[] = "invalid value for 'terminalId', the character length must be smaller than or equal to 8.";
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

        if (strlen($this->container['amexCapnData']) > 15) {
            return false;
        }
        if (strlen($this->container['terminalId']) > 8) {
            return false;
        }
        return true;
    }


    /**
     * Gets emv
     * @return \Haque\Cybersource\CybersourceSDK\Model\PtsV2PaymentsPost201ResponsePointOfSaleInformationEmv
     */
    public function getEmv()
    {
        return $this->container['emv'];
    }

    /**
     * Sets emv
     * @param \Haque\Cybersource\CybersourceSDK\Model\PtsV2PaymentsPost201ResponsePointOfSaleInformationEmv $emv
     * @return $this
     */
    public function setEmv($emv)
    {
        $this->container['emv'] = $emv;

        return $this;
    }

    /**
     * Gets amexCapnData
     * @return string
     */
    public function getAmexCapnData()
    {
        return $this->container['amexCapnData'];
    }

    /**
     * Sets amexCapnData
     * @param string $amexCapnData Point-of-sale details for the transaction. This value is returned only for **American Express Direct**. Haque\Cybersource\CybersourceSDK generates this value, which consists of a series of codes that identify terminal capability, security data, and specific conditions present at the time the transaction occurred. To comply with the CAPN requirements, this value must be included in all subsequent follow-on requests, such as captures and follow-on credits.  When you perform authorizations, captures, and credits through Haque\Cybersource\CybersourceSDK, Haque\Cybersource\CybersourceSDK passes this value from the authorization service to the subsequent services for you. However, when you perform authorizations through Haque\Cybersource\CybersourceSDK and perform subsequent services through other financial institutions, you must ensure that your requests for captures and credits include this value.  For details, see `auth_pos_data` field description in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)
     * @return $this
     */
    public function setAmexCapnData($amexCapnData)
    {
        if (!is_null($amexCapnData) && (strlen($amexCapnData) > 15)) {
            throw new \InvalidArgumentException('invalid length for $amexCapnData when calling PtsV2PaymentsPost201ResponsePointOfSaleInformation., must be smaller than or equal to 15.');
        }

        $this->container['amexCapnData'] = $amexCapnData;

        return $this;
    }

    /**
     * Gets terminalId
     * @return string
     */
    public function getTerminalId()
    {
        return $this->container['terminalId'];
    }

    /**
     * Sets terminalId
     * @param string $terminalId Identifier for the terminal at your retail location. You can define this value yourself, but consult the processor for requirements.  #### FDC Nashville Global To have your account configured to support this field, contact Haque\Cybersource\CybersourceSDK Customer Support. This value must be a value that FDC Nashville Global issued to you.  For details, see the `terminal_id` field description in [Card-Present Processing Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/Retail_SCMP_API/html/)  **For Payouts**: This field is applicable for CtV.
     * @return $this
     */
    public function setTerminalId($terminalId)
    {
        if (!is_null($terminalId) && (strlen($terminalId) > 8)) {
            throw new \InvalidArgumentException('invalid length for $terminalId when calling PtsV2PaymentsPost201ResponsePointOfSaleInformation., must be smaller than or equal to 8.');
        }

        $this->container['terminalId'] = $terminalId;

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


