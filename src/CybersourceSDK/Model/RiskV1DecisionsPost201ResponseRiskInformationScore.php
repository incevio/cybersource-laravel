<?php
/**
 * RiskV1DecisionsPost201ResponseRiskInformationScore
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
 * RiskV1DecisionsPost201ResponseRiskInformationScore Class Doc Comment
 *
 * @category    Class
 * @package     Haque\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RiskV1DecisionsPost201ResponseRiskInformationScore implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'riskV1DecisionsPost201Response_riskInformation_score';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'factorCodes' => 'string[]',
        'modelUsed' => 'string',
        'result' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'factorCodes' => null,
        'modelUsed' => null,
        'result' => null
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
        'factorCodes' => 'factorCodes',
        'modelUsed' => 'modelUsed',
        'result' => 'result'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'factorCodes' => 'setFactorCodes',
        'modelUsed' => 'setModelUsed',
        'result' => 'setResult'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'factorCodes' => 'getFactorCodes',
        'modelUsed' => 'getModelUsed',
        'result' => 'getResult'
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
        $this->container['factorCodes'] = isset($data['factorCodes']) ? $data['factorCodes'] : null;
        $this->container['modelUsed'] = isset($data['modelUsed']) ? $data['modelUsed'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['modelUsed']) && (strlen($this->container['modelUsed']) > 255)) {
            $invalid_properties[] = "invalid value for 'modelUsed', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['result']) && (strlen($this->container['result']) > 255)) {
            $invalid_properties[] = "invalid value for 'result', the character length must be smaller than or equal to 255.";
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

        if (strlen($this->container['modelUsed']) > 255) {
            return false;
        }
        if (strlen($this->container['result']) > 255) {
            return false;
        }
        return true;
    }


    /**
     * Gets factorCodes
     * @return string[]
     */
    public function getFactorCodes()
    {
        return $this->container['factorCodes'];
    }

    /**
     * Sets factorCodes
     * @param string[] $factorCodes
     * @return $this
     */
    public function setFactorCodes($factorCodes)
    {
        $this->container['factorCodes'] = $factorCodes;

        return $this;
    }

    /**
     * Gets modelUsed
     * @return string
     */
    public function getModelUsed()
    {
        return $this->container['modelUsed'];
    }

    /**
     * Sets modelUsed
     * @param string $modelUsed Name of the score model used for the transaction. If you did not include a custom model in your request, this field contains the name of Haque\Cybersource\CybersourceSDK’s default model.  For all possible values, see the `score_model_used` field description in the _Decision Manager Using the SCMP API Developer Guide_ on the [Haque\Cybersource\CybersourceSDK Business Center.](https://ebc2.cybersource.com/ebc2/) Click **Decision Manager** > **Documentation** > **Guides** > _Decision Manager Using the SCMP API Developer Guide_ (PDF link).
     * @return $this
     */
    public function setModelUsed($modelUsed)
    {
        if (!is_null($modelUsed) && (strlen($modelUsed) > 255)) {
            throw new \InvalidArgumentException('invalid length for $modelUsed when calling RiskV1DecisionsPost201ResponseRiskInformationScore., must be smaller than or equal to 255.');
        }

        $this->container['modelUsed'] = $modelUsed;

        return $this;
    }

    /**
     * Gets result
     * @return string
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     * @param string $result Total score calculated for this order. The value cannot be negative.  For all possible values, see the `score_score_result` field description in the _Decision Manager Using the SCMP API Developer Guide_ on the [Haque\Cybersource\CybersourceSDK Business Center.](https://ebc2.cybersource.com/ebc2/) Click **Decision Manager** > **Documentation** > **Guides** > _Decision Manager Using the SCMP API Developer Guide_ (PDF link).
     * @return $this
     */
    public function setResult($result)
    {
        if (!is_null($result) && (strlen($result) > 255)) {
            throw new \InvalidArgumentException('invalid length for $result when calling RiskV1DecisionsPost201ResponseRiskInformationScore., must be smaller than or equal to 255.');
        }

        $this->container['result'] = $result;

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


