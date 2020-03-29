<?php
/**
 * Ptsv2paymentsOrderInformationAmountDetailsTaxDetails
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
 * Ptsv2paymentsOrderInformationAmountDetailsTaxDetails Class Doc Comment
 *
 * @category    Class
 * @package     Haque\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsOrderInformationAmountDetailsTaxDetails implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payments_orderInformation_amountDetails_taxDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'amount' => 'string',
        'rate' => 'string',
        'code' => 'string',
        'taxId' => 'string',
        'applied' => 'bool',
        'exemptionCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'amount' => null,
        'rate' => null,
        'code' => null,
        'taxId' => null,
        'applied' => null,
        'exemptionCode' => null
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
        'type' => 'type',
        'amount' => 'amount',
        'rate' => 'rate',
        'code' => 'code',
        'taxId' => 'taxId',
        'applied' => 'applied',
        'exemptionCode' => 'exemptionCode'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'amount' => 'setAmount',
        'rate' => 'setRate',
        'code' => 'setCode',
        'taxId' => 'setTaxId',
        'applied' => 'setApplied',
        'exemptionCode' => 'setExemptionCode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'amount' => 'getAmount',
        'rate' => 'getRate',
        'code' => 'getCode',
        'taxId' => 'getTaxId',
        'applied' => 'getApplied',
        'exemptionCode' => 'getExemptionCode'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['taxId'] = isset($data['taxId']) ? $data['taxId'] : null;
        $this->container['applied'] = isset($data['applied']) ? $data['applied'] : null;
        $this->container['exemptionCode'] = isset($data['exemptionCode']) ? $data['exemptionCode'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['amount']) && (strlen($this->container['amount']) > 13)) {
            $invalid_properties[] = "invalid value for 'amount', the character length must be smaller than or equal to 13.";
        }

        if (!is_null($this->container['rate']) && (strlen($this->container['rate']) > 6)) {
            $invalid_properties[] = "invalid value for 'rate', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['code']) && (strlen($this->container['code']) > 4)) {
            $invalid_properties[] = "invalid value for 'code', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['taxId']) && (strlen($this->container['taxId']) > 15)) {
            $invalid_properties[] = "invalid value for 'taxId', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['exemptionCode']) && (strlen($this->container['exemptionCode']) > 1)) {
            $invalid_properties[] = "invalid value for 'exemptionCode', the character length must be smaller than or equal to 1.";
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

        if (strlen($this->container['amount']) > 13) {
            return false;
        }
        if (strlen($this->container['rate']) > 6) {
            return false;
        }
        if (strlen($this->container['code']) > 4) {
            return false;
        }
        if (strlen($this->container['taxId']) > 15) {
            return false;
        }
        if (strlen($this->container['exemptionCode']) > 1) {
            return false;
        }
        return true;
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
     * @param string $type Indicates the type of tax data for the _taxDetails_ object.  Possible values:  - `alternate` - `local` - `national` - `vat` - `other`  For processor-specific details, see the `alternate_tax_amount`, `local_tax`, `national_tax` or `vat_tax_amount` field descriptions in [Level II and Level III Processing Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html/)
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets amount
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param string $amount Indicates the amount of tax based on the `type` field as described in the table below:  | type      | type description | |-----------|--------------------| | `alternate` | Total amount of alternate tax for the order. | | `local`     | Sales tax for the order. | | `national`  | National tax for the order. | | `vat`       | Total amount of Value Added Tax (VAT) included in the order. | | `other`     | Other tax. |  For processor-specific details, see the `alternate_tax_amount`, `local_tax`, `national_tax`, `vat_tax_amount` or `other_tax#_amount` field descriptions in [Level II and Level III Processing Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html/)
     * @return $this
     */
    public function setAmount($amount)
    {
        if (!is_null($amount) && (strlen($amount) > 13)) {
            throw new \InvalidArgumentException('invalid length for $amount when calling Ptsv2paymentsOrderInformationAmountDetailsTaxDetails., must be smaller than or equal to 13.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets rate
     * @return string
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     * @param string $rate Rate of VAT or other tax for the order.  Example 0.040 (=4%)  Valid range: 0.01 to 0.99 (1% to 99%, with only whole percentage values accepted; values with additional decimal places will be truncated)  For processor-specific details, see the `alternate_tax_amount`, `vat_rate`, `vat_tax_rate`, `local_tax`, `national_tax`, `vat_tax_amount` or `other_tax#_rate` field descriptions in the [Level II and Level III Processing Using the SCMP API Guide.](https://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html/)
     * @return $this
     */
    public function setRate($rate)
    {
        if (!is_null($rate) && (strlen($rate) > 6)) {
            throw new \InvalidArgumentException('invalid length for $rate when calling Ptsv2paymentsOrderInformationAmountDetailsTaxDetails., must be smaller than or equal to 6.');
        }

        $this->container['rate'] = $rate;

        return $this;
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
     * @param string $code Type of tax being applied to the item.  For possible values, see the processor-specific field descriptions in [Level II and Level III Processing Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html/):  #### FDC Nashville Global - `alternate_tax_type_applied` - `alternate_tax_type_identifier`  #### Worldpay VAP - `alternate_tax_type_identifier`  #### RBS WorldPay Atlanta - `tax_type_applied`  #### TSYS Acquiring Solutions - `tax_type_applied` - `local_tax_indicator`  #### Chase Paymentech Solutions - `tax_type_applied`  #### Elavon Americas - `local_tax_indicator`  #### FDC Compass - `tax_type_applied`  #### OmniPay Direct - `local_tax_indicator`
     * @return $this
     */
    public function setCode($code)
    {
        if (!is_null($code) && (strlen($code) > 4)) {
            throw new \InvalidArgumentException('invalid length for $code when calling Ptsv2paymentsOrderInformationAmountDetailsTaxDetails., must be smaller than or equal to 4.');
        }

        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets taxId
     * @return string
     */
    public function getTaxId()
    {
        return $this->container['taxId'];
    }

    /**
     * Sets taxId
     * @param string $taxId Your tax ID number to use for the alternate tax amount. Required if you set alternate tax amount to any value, including zero. You may send this field without sending alternate tax amount.  For processor-specific details, see `alternate_tax_id` field description in [Level II and Level III Processing Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html/)
     * @return $this
     */
    public function setTaxId($taxId)
    {
        if (!is_null($taxId) && (strlen($taxId) > 15)) {
            throw new \InvalidArgumentException('invalid length for $taxId when calling Ptsv2paymentsOrderInformationAmountDetailsTaxDetails., must be smaller than or equal to 15.');
        }

        $this->container['taxId'] = $taxId;

        return $this;
    }

    /**
     * Gets applied
     * @return bool
     */
    public function getApplied()
    {
        return $this->container['applied'];
    }

    /**
     * Sets applied
     * @param bool $applied Flag that indicates whether the alternate tax amount (`orderInformation.amountDetails.taxDetails[].amount`) is included in the request.  Possible values: - `false`: alternate tax amount is not included in the request. - `true`: alternate tax amount is included in the request.  For processor-specific details, see `alternate_tax_amount_indicator` field description in [Level II and Level III Processing Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html/)
     * @return $this
     */
    public function setApplied($applied)
    {
        $this->container['applied'] = $applied;

        return $this;
    }

    /**
     * Gets exemptionCode
     * @return string
     */
    public function getExemptionCode()
    {
        return $this->container['exemptionCode'];
    }

    /**
     * Sets exemptionCode
     * @param string $exemptionCode Status code for exemption from sales and use tax. This field is a pass-through, which means that Haque\Cybersource\CybersourceSDK does not verify the value or modify it in any way before sending it to the processor.  For possible values and important information for using this field, see _Appendix B, \"Exemption Status Values_ and _Offer-Level Tax Fields_ in [Level II and Level III Processing Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html/)
     * @return $this
     */
    public function setExemptionCode($exemptionCode)
    {
        if (!is_null($exemptionCode) && (strlen($exemptionCode) > 1)) {
            throw new \InvalidArgumentException('invalid length for $exemptionCode when calling Ptsv2paymentsOrderInformationAmountDetailsTaxDetails., must be smaller than or equal to 1.');
        }

        $this->container['exemptionCode'] = $exemptionCode;

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

