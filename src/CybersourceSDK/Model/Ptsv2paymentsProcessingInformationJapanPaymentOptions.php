<?php
/**
 * Ptsv2paymentsProcessingInformationJapanPaymentOptions
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
 * Ptsv2paymentsProcessingInformationJapanPaymentOptions Class Doc Comment
 *
 * @category    Class
 * @package     Haque\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsProcessingInformationJapanPaymentOptions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payments_processingInformation_japanPaymentOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'paymentMethod' => 'string',
        'installments' => 'string',
        'terminalId' => 'string',
        'firstBillingMonth' => 'string',
        'businessName' => 'string',
        'businessNameKatakana' => 'string',
        'jis2TrackData' => 'string',
        'businessNameAlphaNumeric' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'paymentMethod' => null,
        'installments' => null,
        'terminalId' => null,
        'firstBillingMonth' => null,
        'businessName' => null,
        'businessNameKatakana' => null,
        'jis2TrackData' => null,
        'businessNameAlphaNumeric' => null
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
        'paymentMethod' => 'paymentMethod',
        'installments' => 'installments',
        'terminalId' => 'terminalId',
        'firstBillingMonth' => 'firstBillingMonth',
        'businessName' => 'businessName',
        'businessNameKatakana' => 'businessNameKatakana',
        'jis2TrackData' => 'jis2TrackData',
        'businessNameAlphaNumeric' => 'businessNameAlphaNumeric'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'paymentMethod' => 'setPaymentMethod',
        'installments' => 'setInstallments',
        'terminalId' => 'setTerminalId',
        'firstBillingMonth' => 'setFirstBillingMonth',
        'businessName' => 'setBusinessName',
        'businessNameKatakana' => 'setBusinessNameKatakana',
        'jis2TrackData' => 'setJis2TrackData',
        'businessNameAlphaNumeric' => 'setBusinessNameAlphaNumeric'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'paymentMethod' => 'getPaymentMethod',
        'installments' => 'getInstallments',
        'terminalId' => 'getTerminalId',
        'firstBillingMonth' => 'getFirstBillingMonth',
        'businessName' => 'getBusinessName',
        'businessNameKatakana' => 'getBusinessNameKatakana',
        'jis2TrackData' => 'getJis2TrackData',
        'businessNameAlphaNumeric' => 'getBusinessNameAlphaNumeric'
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
        $this->container['paymentMethod'] = isset($data['paymentMethod']) ? $data['paymentMethod'] : null;
        $this->container['installments'] = isset($data['installments']) ? $data['installments'] : null;
        $this->container['terminalId'] = isset($data['terminalId']) ? $data['terminalId'] : null;
        $this->container['firstBillingMonth'] = isset($data['firstBillingMonth']) ? $data['firstBillingMonth'] : null;
        $this->container['businessName'] = isset($data['businessName']) ? $data['businessName'] : null;
        $this->container['businessNameKatakana'] = isset($data['businessNameKatakana']) ? $data['businessNameKatakana'] : null;
        $this->container['jis2TrackData'] = isset($data['jis2TrackData']) ? $data['jis2TrackData'] : null;
        $this->container['businessNameAlphaNumeric'] = isset($data['businessNameAlphaNumeric']) ? $data['businessNameAlphaNumeric'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['paymentMethod']) && (strlen($this->container['paymentMethod']) > 2)) {
            $invalid_properties[] = "invalid value for 'paymentMethod', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['terminalId']) && (strlen($this->container['terminalId']) > 13)) {
            $invalid_properties[] = "invalid value for 'terminalId', the character length must be smaller than or equal to 13.";
        }

        if (!is_null($this->container['firstBillingMonth']) && (strlen($this->container['firstBillingMonth']) > 2)) {
            $invalid_properties[] = "invalid value for 'firstBillingMonth', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['businessName']) && (strlen($this->container['businessName']) > 25)) {
            $invalid_properties[] = "invalid value for 'businessName', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['businessNameKatakana']) && (strlen($this->container['businessNameKatakana']) > 25)) {
            $invalid_properties[] = "invalid value for 'businessNameKatakana', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['jis2TrackData']) && (strlen($this->container['jis2TrackData']) > 69)) {
            $invalid_properties[] = "invalid value for 'jis2TrackData', the character length must be smaller than or equal to 69.";
        }

        if (!is_null($this->container['businessNameAlphaNumeric']) && (strlen($this->container['businessNameAlphaNumeric']) > 25)) {
            $invalid_properties[] = "invalid value for 'businessNameAlphaNumeric', the character length must be smaller than or equal to 25.";
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

        if (strlen($this->container['paymentMethod']) > 2) {
            return false;
        }
        if (strlen($this->container['terminalId']) > 13) {
            return false;
        }
        if (strlen($this->container['firstBillingMonth']) > 2) {
            return false;
        }
        if (strlen($this->container['businessName']) > 25) {
            return false;
        }
        if (strlen($this->container['businessNameKatakana']) > 25) {
            return false;
        }
        if (strlen($this->container['jis2TrackData']) > 69) {
            return false;
        }
        if (strlen($this->container['businessNameAlphaNumeric']) > 25) {
            return false;
        }
        return true;
    }


    /**
     * Gets paymentMethod
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->container['paymentMethod'];
    }

    /**
     * Sets paymentMethod
     * @param string $paymentMethod This value is a 2-digit code indicating the payment method. Use Payment Method Code value that applies to the tranasction. - 10 (One-time payment) - 21, 22, 23, 24  (Bonus(one-time)payment) - 61 (Installment payment) - 31, 32, 33, 34  (Integrated (Bonus + Installment)payment) - 80 (Revolving payment)
     * @return $this
     */
    public function setPaymentMethod($paymentMethod)
    {
        if (!is_null($paymentMethod) && (strlen($paymentMethod) > 2)) {
            throw new \InvalidArgumentException('invalid length for $paymentMethod when calling Ptsv2paymentsProcessingInformationJapanPaymentOptions., must be smaller than or equal to 2.');
        }

        $this->container['paymentMethod'] = $paymentMethod;

        return $this;
    }

    /**
     * Gets installments
     * @return string
     */
    public function getInstallments()
    {
        return $this->container['installments'];
    }

    /**
     * Sets installments
     * @param string $installments Number of Installments.
     * @return $this
     */
    public function setInstallments($installments)
    {
        $this->container['installments'] = $installments;

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
     * @param string $terminalId This value is the 13-digit JCCA number.
     * @return $this
     */
    public function setTerminalId($terminalId)
    {
        if (!is_null($terminalId) && (strlen($terminalId) > 13)) {
            throw new \InvalidArgumentException('invalid length for $terminalId when calling Ptsv2paymentsProcessingInformationJapanPaymentOptions., must be smaller than or equal to 13.');
        }

        $this->container['terminalId'] = $terminalId;

        return $this;
    }

    /**
     * Gets firstBillingMonth
     * @return string
     */
    public function getFirstBillingMonth()
    {
        return $this->container['firstBillingMonth'];
    }

    /**
     * Sets firstBillingMonth
     * @param string $firstBillingMonth Billing month in MM format.
     * @return $this
     */
    public function setFirstBillingMonth($firstBillingMonth)
    {
        if (!is_null($firstBillingMonth) && (strlen($firstBillingMonth) > 2)) {
            throw new \InvalidArgumentException('invalid length for $firstBillingMonth when calling Ptsv2paymentsProcessingInformationJapanPaymentOptions., must be smaller than or equal to 2.');
        }

        $this->container['firstBillingMonth'] = $firstBillingMonth;

        return $this;
    }

    /**
     * Gets businessName
     * @return string
     */
    public function getBusinessName()
    {
        return $this->container['businessName'];
    }

    /**
     * Sets businessName
     * @param string $businessName Business name in Japanese characters. This field is supported only on JCN Gateway and for the Sumitomo Mitsui Card Co. acquirer on Haque\Cybersource\CybersourceSDK through VisaNet.
     * @return $this
     */
    public function setBusinessName($businessName)
    {
        if (!is_null($businessName) && (strlen($businessName) > 25)) {
            throw new \InvalidArgumentException('invalid length for $businessName when calling Ptsv2paymentsProcessingInformationJapanPaymentOptions., must be smaller than or equal to 25.');
        }

        $this->container['businessName'] = $businessName;

        return $this;
    }

    /**
     * Gets businessNameKatakana
     * @return string
     */
    public function getBusinessNameKatakana()
    {
        return $this->container['businessNameKatakana'];
    }

    /**
     * Sets businessNameKatakana
     * @param string $businessNameKatakana Business name in Katakana characters. This field is supported only on JCN Gateway and for the Sumitomo Mitsui Card Co. acquirer on Haque\Cybersource\CybersourceSDK through VisaNet.
     * @return $this
     */
    public function setBusinessNameKatakana($businessNameKatakana)
    {
        if (!is_null($businessNameKatakana) && (strlen($businessNameKatakana) > 25)) {
            throw new \InvalidArgumentException('invalid length for $businessNameKatakana when calling Ptsv2paymentsProcessingInformationJapanPaymentOptions., must be smaller than or equal to 25.');
        }

        $this->container['businessNameKatakana'] = $businessNameKatakana;

        return $this;
    }

    /**
     * Gets jis2TrackData
     * @return string
     */
    public function getJis2TrackData()
    {
        return $this->container['jis2TrackData'];
    }

    /**
     * Sets jis2TrackData
     * @param string $jis2TrackData Japanese Industrial Standard Type 2 (JIS2) track data from the front of the card. This field is supported only on JCN Gateway.
     * @return $this
     */
    public function setJis2TrackData($jis2TrackData)
    {
        if (!is_null($jis2TrackData) && (strlen($jis2TrackData) > 69)) {
            throw new \InvalidArgumentException('invalid length for $jis2TrackData when calling Ptsv2paymentsProcessingInformationJapanPaymentOptions., must be smaller than or equal to 69.');
        }

        $this->container['jis2TrackData'] = $jis2TrackData;

        return $this;
    }

    /**
     * Gets businessNameAlphaNumeric
     * @return string
     */
    public function getBusinessNameAlphaNumeric()
    {
        return $this->container['businessNameAlphaNumeric'];
    }

    /**
     * Sets businessNameAlphaNumeric
     * @param string $businessNameAlphaNumeric Business name in alphanumeric characters. This field is supported only on JCN Gateway and for the Sumitomo Mitsui Card Co. acquirer on Haque\Cybersource\CybersourceSDK through VisaNet.
     * @return $this
     */
    public function setBusinessNameAlphaNumeric($businessNameAlphaNumeric)
    {
        if (!is_null($businessNameAlphaNumeric) && (strlen($businessNameAlphaNumeric) > 25)) {
            throw new \InvalidArgumentException('invalid length for $businessNameAlphaNumeric when calling Ptsv2paymentsProcessingInformationJapanPaymentOptions., must be smaller than or equal to 25.');
        }

        $this->container['businessNameAlphaNumeric'] = $businessNameAlphaNumeric;

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


