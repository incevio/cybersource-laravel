<?php
/**
 * TssV2TransactionsGet200ResponsePaymentInformationCard
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
 * TssV2TransactionsGet200ResponsePaymentInformationCard Class Doc Comment
 *
 * @category    Class
 * @package     Haque\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TssV2TransactionsGet200ResponsePaymentInformationCard implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'tssV2TransactionsGet200Response_paymentInformation_card';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'suffix' => 'string',
        'prefix' => 'string',
        'expirationMonth' => 'string',
        'expirationYear' => 'string',
        'startMonth' => 'string',
        'startYear' => 'string',
        'issueNumber' => 'string',
        'type' => 'string',
        'accountEncoderId' => 'string',
        'useAs' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'suffix' => null,
        'prefix' => null,
        'expirationMonth' => null,
        'expirationYear' => null,
        'startMonth' => null,
        'startYear' => null,
        'issueNumber' => null,
        'type' => null,
        'accountEncoderId' => null,
        'useAs' => null
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
        'suffix' => 'suffix',
        'prefix' => 'prefix',
        'expirationMonth' => 'expirationMonth',
        'expirationYear' => 'expirationYear',
        'startMonth' => 'startMonth',
        'startYear' => 'startYear',
        'issueNumber' => 'issueNumber',
        'type' => 'type',
        'accountEncoderId' => 'accountEncoderId',
        'useAs' => 'useAs'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'suffix' => 'setSuffix',
        'prefix' => 'setPrefix',
        'expirationMonth' => 'setExpirationMonth',
        'expirationYear' => 'setExpirationYear',
        'startMonth' => 'setStartMonth',
        'startYear' => 'setStartYear',
        'issueNumber' => 'setIssueNumber',
        'type' => 'setType',
        'accountEncoderId' => 'setAccountEncoderId',
        'useAs' => 'setUseAs'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'suffix' => 'getSuffix',
        'prefix' => 'getPrefix',
        'expirationMonth' => 'getExpirationMonth',
        'expirationYear' => 'getExpirationYear',
        'startMonth' => 'getStartMonth',
        'startYear' => 'getStartYear',
        'issueNumber' => 'getIssueNumber',
        'type' => 'getType',
        'accountEncoderId' => 'getAccountEncoderId',
        'useAs' => 'getUseAs'
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
        $this->container['suffix'] = isset($data['suffix']) ? $data['suffix'] : null;
        $this->container['prefix'] = isset($data['prefix']) ? $data['prefix'] : null;
        $this->container['expirationMonth'] = isset($data['expirationMonth']) ? $data['expirationMonth'] : null;
        $this->container['expirationYear'] = isset($data['expirationYear']) ? $data['expirationYear'] : null;
        $this->container['startMonth'] = isset($data['startMonth']) ? $data['startMonth'] : null;
        $this->container['startYear'] = isset($data['startYear']) ? $data['startYear'] : null;
        $this->container['issueNumber'] = isset($data['issueNumber']) ? $data['issueNumber'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['accountEncoderId'] = isset($data['accountEncoderId']) ? $data['accountEncoderId'] : null;
        $this->container['useAs'] = isset($data['useAs']) ? $data['useAs'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['prefix']) && (strlen($this->container['prefix']) > 6)) {
            $invalid_properties[] = "invalid value for 'prefix', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['expirationMonth']) && (strlen($this->container['expirationMonth']) > 2)) {
            $invalid_properties[] = "invalid value for 'expirationMonth', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['expirationYear']) && (strlen($this->container['expirationYear']) > 4)) {
            $invalid_properties[] = "invalid value for 'expirationYear', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['startMonth']) && (strlen($this->container['startMonth']) > 2)) {
            $invalid_properties[] = "invalid value for 'startMonth', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['startYear']) && (strlen($this->container['startYear']) > 4)) {
            $invalid_properties[] = "invalid value for 'startYear', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['issueNumber']) && (strlen($this->container['issueNumber']) > 5)) {
            $invalid_properties[] = "invalid value for 'issueNumber', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['accountEncoderId']) && (strlen($this->container['accountEncoderId']) > 3)) {
            $invalid_properties[] = "invalid value for 'accountEncoderId', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['useAs']) && (strlen($this->container['useAs']) > 20)) {
            $invalid_properties[] = "invalid value for 'useAs', the character length must be smaller than or equal to 20.";
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

        if (strlen($this->container['prefix']) > 6) {
            return false;
        }
        if (strlen($this->container['expirationMonth']) > 2) {
            return false;
        }
        if (strlen($this->container['expirationYear']) > 4) {
            return false;
        }
        if (strlen($this->container['startMonth']) > 2) {
            return false;
        }
        if (strlen($this->container['startYear']) > 4) {
            return false;
        }
        if (strlen($this->container['issueNumber']) > 5) {
            return false;
        }
        if (strlen($this->container['accountEncoderId']) > 3) {
            return false;
        }
        if (strlen($this->container['useAs']) > 20) {
            return false;
        }
        return true;
    }


    /**
     * Gets suffix
     * @return string
     */
    public function getSuffix()
    {
        return $this->container['suffix'];
    }

    /**
     * Sets suffix
     * @param string $suffix Last four digits of the cardholder’s account number. This field is returned only for tokenized transactions. You can use this value on the receipt that you give to the cardholder.  **Note** This field is returned only for Haque\Cybersource\CybersourceSDK through VisaNet and FDC Nashville Global.  #### Haque\Cybersource\CybersourceSDK through VisaNet The value for this field corresponds to the following data in the TC 33 capture file: - Record: CP01 TCRB - Position: 85 - Field: American Express last 4 PAN return indicator.
     * @return $this
     */
    public function setSuffix($suffix)
    {
        $this->container['suffix'] = $suffix;

        return $this;
    }

    /**
     * Gets prefix
     * @return string
     */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
     * Sets prefix
     * @param string $prefix Bank Identification Number (BIN). This is the initial four to six numbers on a credit card account number.
     * @return $this
     */
    public function setPrefix($prefix)
    {
        if (!is_null($prefix) && (strlen($prefix) > 6)) {
            throw new \InvalidArgumentException('invalid length for $prefix when calling TssV2TransactionsGet200ResponsePaymentInformationCard., must be smaller than or equal to 6.');
        }

        $this->container['prefix'] = $prefix;

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
     * @param string $expirationMonth Two-digit month in which the payment card expires.  Format: `MM`.  Valid values: `01` through `12`.  #### Barclays and Streamline For Maestro (UK Domestic) and Maestro (International) cards on Barclays and Streamline, this must be a valid value (`01` through `12`) but is not required to be a valid expiration date. In other words, an expiration date that is in the past does not cause Haque\Cybersource\CybersourceSDK to reject your request. However, an invalid expiration date might cause the issuer to reject your request.  #### Encoded Account Numbers For encoded account numbers (_type_=039), if there is no expiration date on the card, use `12`.  **Important** It is your responsibility to determine whether a field is required for the transaction you are requesting.  For processor-specific information, see the `customer_cc_expmo` field description in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)
     * @return $this
     */
    public function setExpirationMonth($expirationMonth)
    {
        if (!is_null($expirationMonth) && (strlen($expirationMonth) > 2)) {
            throw new \InvalidArgumentException('invalid length for $expirationMonth when calling TssV2TransactionsGet200ResponsePaymentInformationCard., must be smaller than or equal to 2.');
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
     * @param string $expirationYear Four-digit year in which the credit card expires.  Format: `YYYY`.  #### Barclays and Streamline For Maestro (UK Domestic) and Maestro (International) cards on Barclays and Streamline, this must be a valid value (`1900` through `3000`) but is not required to be a valid expiration date. In other words, an expiration date that is in the past does not cause Haque\Cybersource\CybersourceSDK to reject your request. However, an invalid expiration date might cause the issuer to reject your request.  #### Encoded Account Numbers For encoded account numbers (**_type_**`=039`), if there is no expiration date on the card, use `2021`.  #### FDC Nashville Global and FDMS South You can send in 2 digits or 4 digits. If you send in 2 digits, they must be the last 2 digits of the year.  **Important** It is your responsibility to determine whether a field is required for the transaction you are requesting.  For processor-specific information, see the `customer_cc_expyr` field description in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)
     * @return $this
     */
    public function setExpirationYear($expirationYear)
    {
        if (!is_null($expirationYear) && (strlen($expirationYear) > 4)) {
            throw new \InvalidArgumentException('invalid length for $expirationYear when calling TssV2TransactionsGet200ResponsePaymentInformationCard., must be smaller than or equal to 4.');
        }

        $this->container['expirationYear'] = $expirationYear;

        return $this;
    }

    /**
     * Gets startMonth
     * @return string
     */
    public function getStartMonth()
    {
        return $this->container['startMonth'];
    }

    /**
     * Sets startMonth
     * @param string $startMonth Month of the start of the Maestro (UK Domestic) card validity period. Do not include the field, even with a blank value, if the card is not a Maestro (UK Domestic) card. `Format: MM`. Possible values: 01 through 12.  **Note** The start date is not required for Maestro (UK Domestic) transactions.
     * @return $this
     */
    public function setStartMonth($startMonth)
    {
        if (!is_null($startMonth) && (strlen($startMonth) > 2)) {
            throw new \InvalidArgumentException('invalid length for $startMonth when calling TssV2TransactionsGet200ResponsePaymentInformationCard., must be smaller than or equal to 2.');
        }

        $this->container['startMonth'] = $startMonth;

        return $this;
    }

    /**
     * Gets startYear
     * @return string
     */
    public function getStartYear()
    {
        return $this->container['startYear'];
    }

    /**
     * Sets startYear
     * @param string $startYear Year of the start of the Maestro (UK Domestic) card validity period. Do not include the field, even with a blank value, if the card is not a Maestro (UK Domestic) card. `Format: YYYY`.  **Note** The start date is not required for Maestro (UK Domestic) transactions.
     * @return $this
     */
    public function setStartYear($startYear)
    {
        if (!is_null($startYear) && (strlen($startYear) > 4)) {
            throw new \InvalidArgumentException('invalid length for $startYear when calling TssV2TransactionsGet200ResponsePaymentInformationCard., must be smaller than or equal to 4.');
        }

        $this->container['startYear'] = $startYear;

        return $this;
    }

    /**
     * Gets issueNumber
     * @return string
     */
    public function getIssueNumber()
    {
        return $this->container['issueNumber'];
    }

    /**
     * Sets issueNumber
     * @param string $issueNumber Number of times a Maestro (UK Domestic) card has been issued to the account holder. The card might or might not have an issue number. The number can consist of one or two digits, and the first digit might be a zero. When you include this value in your request, include exactly what is printed on the card. A value of 2 is different than a value of 02. Do not include the field, even with a blank value, if the card is not a Maestro (UK Domestic) card.  **Note** The issue number is not required for Maestro (UK Domestic) transactions.
     * @return $this
     */
    public function setIssueNumber($issueNumber)
    {
        if (!is_null($issueNumber) && (strlen($issueNumber) > 5)) {
            throw new \InvalidArgumentException('invalid length for $issueNumber when calling TssV2TransactionsGet200ResponsePaymentInformationCard., must be smaller than or equal to 5.');
        }

        $this->container['issueNumber'] = $issueNumber;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Three-digit value that indicates the card type.  Type of card to authorize. - 001 Visa - 002 Mastercard - 003 Amex - 004 Discover - 005: Diners Club - 007: JCB - 024: Maestro (UK Domestic) - 036: Cartes Bancaires - 039 Encoded account number - 042: Maestro (International)  For the complete list of possible values, see `card_type` field description in the [Credit Card Services Using the SCMP API Guide.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets accountEncoderId
     * @return string
     */
    public function getAccountEncoderId()
    {
        return $this->container['accountEncoderId'];
    }

    /**
     * Sets accountEncoderId
     * @param string $accountEncoderId Identifier for the issuing bank that provided the customer’s encoded account number. Contact your processor for the bank’s ID.
     * @return $this
     */
    public function setAccountEncoderId($accountEncoderId)
    {
        if (!is_null($accountEncoderId) && (strlen($accountEncoderId) > 3)) {
            throw new \InvalidArgumentException('invalid length for $accountEncoderId when calling TssV2TransactionsGet200ResponsePaymentInformationCard., must be smaller than or equal to 3.');
        }

        $this->container['accountEncoderId'] = $accountEncoderId;

        return $this;
    }

    /**
     * Gets useAs
     * @return string
     */
    public function getUseAs()
    {
        return $this->container['useAs'];
    }

    /**
     * Sets useAs
     * @param string $useAs Flag that specifies the type of account associated with the card. The cardholder provides this information during the payment process.  #### Cielo and Comercio Latino  Possible values:   - CREDIT: Credit card  - DEBIT: Debit card  This field is required for:  - Debit transactions on Cielo and Comercio Latino.  - Transactions with Brazilian-issued cards on Haque\Cybersource\CybersourceSDK through VisaNet.  **Note** The value for this field corresponds to the following data in the TC 33 capture file5: - Record: CP07 TCR0 - Position: 51 - Field: Combination Card Transaction Identifier  This field is supported only for Mastercard transactions in Brazil on Haque\Cybersource\CybersourceSDK through VisaNet.
     * @return $this
     */
    public function setUseAs($useAs)
    {
        if (!is_null($useAs) && (strlen($useAs) > 20)) {
            throw new \InvalidArgumentException('invalid length for $useAs when calling TssV2TransactionsGet200ResponsePaymentInformationCard., must be smaller than or equal to 20.');
        }

        $this->container['useAs'] = $useAs;

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


