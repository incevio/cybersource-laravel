<?php
/**
 * Ptsv2paymentsOrderInformationInvoiceDetails
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
 * Ptsv2paymentsOrderInformationInvoiceDetails Class Doc Comment
 *
 * @category    Class
 * @package     Haque\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsOrderInformationInvoiceDetails implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payments_orderInformation_invoiceDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'invoiceNumber' => 'string',
        'barcodeNumber' => 'string',
        'expirationDate' => 'string',
        'purchaseOrderNumber' => 'string',
        'purchaseOrderDate' => 'string',
        'purchaseContactName' => 'string',
        'taxable' => 'bool',
        'vatInvoiceReferenceNumber' => 'string',
        'commodityCode' => 'string',
        'merchandiseCode' => 'int',
        'transactionAdviceAddendum' => '\Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsOrderInformationInvoiceDetailsTransactionAdviceAddendum[]',
        'referenceDataCode' => 'string',
        'referenceDataNumber' => 'string',
        'salesSlipNumber' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'invoiceNumber' => null,
        'barcodeNumber' => null,
        'expirationDate' => null,
        'purchaseOrderNumber' => null,
        'purchaseOrderDate' => null,
        'purchaseContactName' => null,
        'taxable' => null,
        'vatInvoiceReferenceNumber' => null,
        'commodityCode' => null,
        'merchandiseCode' => null,
        'transactionAdviceAddendum' => null,
        'referenceDataCode' => null,
        'referenceDataNumber' => null,
        'salesSlipNumber' => null
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
        'invoiceNumber' => 'invoiceNumber',
        'barcodeNumber' => 'barcodeNumber',
        'expirationDate' => 'expirationDate',
        'purchaseOrderNumber' => 'purchaseOrderNumber',
        'purchaseOrderDate' => 'purchaseOrderDate',
        'purchaseContactName' => 'purchaseContactName',
        'taxable' => 'taxable',
        'vatInvoiceReferenceNumber' => 'vatInvoiceReferenceNumber',
        'commodityCode' => 'commodityCode',
        'merchandiseCode' => 'merchandiseCode',
        'transactionAdviceAddendum' => 'transactionAdviceAddendum',
        'referenceDataCode' => 'referenceDataCode',
        'referenceDataNumber' => 'referenceDataNumber',
        'salesSlipNumber' => 'salesSlipNumber'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'invoiceNumber' => 'setInvoiceNumber',
        'barcodeNumber' => 'setBarcodeNumber',
        'expirationDate' => 'setExpirationDate',
        'purchaseOrderNumber' => 'setPurchaseOrderNumber',
        'purchaseOrderDate' => 'setPurchaseOrderDate',
        'purchaseContactName' => 'setPurchaseContactName',
        'taxable' => 'setTaxable',
        'vatInvoiceReferenceNumber' => 'setVatInvoiceReferenceNumber',
        'commodityCode' => 'setCommodityCode',
        'merchandiseCode' => 'setMerchandiseCode',
        'transactionAdviceAddendum' => 'setTransactionAdviceAddendum',
        'referenceDataCode' => 'setReferenceDataCode',
        'referenceDataNumber' => 'setReferenceDataNumber',
        'salesSlipNumber' => 'setSalesSlipNumber'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'invoiceNumber' => 'getInvoiceNumber',
        'barcodeNumber' => 'getBarcodeNumber',
        'expirationDate' => 'getExpirationDate',
        'purchaseOrderNumber' => 'getPurchaseOrderNumber',
        'purchaseOrderDate' => 'getPurchaseOrderDate',
        'purchaseContactName' => 'getPurchaseContactName',
        'taxable' => 'getTaxable',
        'vatInvoiceReferenceNumber' => 'getVatInvoiceReferenceNumber',
        'commodityCode' => 'getCommodityCode',
        'merchandiseCode' => 'getMerchandiseCode',
        'transactionAdviceAddendum' => 'getTransactionAdviceAddendum',
        'referenceDataCode' => 'getReferenceDataCode',
        'referenceDataNumber' => 'getReferenceDataNumber',
        'salesSlipNumber' => 'getSalesSlipNumber'
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
        $this->container['invoiceNumber'] = isset($data['invoiceNumber']) ? $data['invoiceNumber'] : null;
        $this->container['barcodeNumber'] = isset($data['barcodeNumber']) ? $data['barcodeNumber'] : null;
        $this->container['expirationDate'] = isset($data['expirationDate']) ? $data['expirationDate'] : null;
        $this->container['purchaseOrderNumber'] = isset($data['purchaseOrderNumber']) ? $data['purchaseOrderNumber'] : null;
        $this->container['purchaseOrderDate'] = isset($data['purchaseOrderDate']) ? $data['purchaseOrderDate'] : null;
        $this->container['purchaseContactName'] = isset($data['purchaseContactName']) ? $data['purchaseContactName'] : null;
        $this->container['taxable'] = isset($data['taxable']) ? $data['taxable'] : null;
        $this->container['vatInvoiceReferenceNumber'] = isset($data['vatInvoiceReferenceNumber']) ? $data['vatInvoiceReferenceNumber'] : null;
        $this->container['commodityCode'] = isset($data['commodityCode']) ? $data['commodityCode'] : null;
        $this->container['merchandiseCode'] = isset($data['merchandiseCode']) ? $data['merchandiseCode'] : null;
        $this->container['transactionAdviceAddendum'] = isset($data['transactionAdviceAddendum']) ? $data['transactionAdviceAddendum'] : null;
        $this->container['referenceDataCode'] = isset($data['referenceDataCode']) ? $data['referenceDataCode'] : null;
        $this->container['referenceDataNumber'] = isset($data['referenceDataNumber']) ? $data['referenceDataNumber'] : null;
        $this->container['salesSlipNumber'] = isset($data['salesSlipNumber']) ? $data['salesSlipNumber'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['purchaseOrderNumber']) && (strlen($this->container['purchaseOrderNumber']) > 25)) {
            $invalid_properties[] = "invalid value for 'purchaseOrderNumber', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['purchaseOrderDate']) && (strlen($this->container['purchaseOrderDate']) > 10)) {
            $invalid_properties[] = "invalid value for 'purchaseOrderDate', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['purchaseContactName']) && (strlen($this->container['purchaseContactName']) > 36)) {
            $invalid_properties[] = "invalid value for 'purchaseContactName', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['vatInvoiceReferenceNumber']) && (strlen($this->container['vatInvoiceReferenceNumber']) > 15)) {
            $invalid_properties[] = "invalid value for 'vatInvoiceReferenceNumber', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['commodityCode']) && (strlen($this->container['commodityCode']) > 4)) {
            $invalid_properties[] = "invalid value for 'commodityCode', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['referenceDataCode']) && (strlen($this->container['referenceDataCode']) > 3)) {
            $invalid_properties[] = "invalid value for 'referenceDataCode', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['referenceDataNumber']) && (strlen($this->container['referenceDataNumber']) > 30)) {
            $invalid_properties[] = "invalid value for 'referenceDataNumber', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['salesSlipNumber']) && ($this->container['salesSlipNumber'] > 99999)) {
            $invalid_properties[] = "invalid value for 'salesSlipNumber', must be smaller than or equal to 99999.";
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

        if (strlen($this->container['purchaseOrderNumber']) > 25) {
            return false;
        }
        if (strlen($this->container['purchaseOrderDate']) > 10) {
            return false;
        }
        if (strlen($this->container['purchaseContactName']) > 36) {
            return false;
        }
        if (strlen($this->container['vatInvoiceReferenceNumber']) > 15) {
            return false;
        }
        if (strlen($this->container['commodityCode']) > 4) {
            return false;
        }
        if (strlen($this->container['referenceDataCode']) > 3) {
            return false;
        }
        if (strlen($this->container['referenceDataNumber']) > 30) {
            return false;
        }
        if ($this->container['salesSlipNumber'] > 99999) {
            return false;
        }
        return true;
    }


    /**
     * Gets invoiceNumber
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoiceNumber'];
    }

    /**
     * Sets invoiceNumber
     * @param string $invoiceNumber Invoice Number.
     * @return $this
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->container['invoiceNumber'] = $invoiceNumber;

        return $this;
    }

    /**
     * Gets barcodeNumber
     * @return string
     */
    public function getBarcodeNumber()
    {
        return $this->container['barcodeNumber'];
    }

    /**
     * Sets barcodeNumber
     * @param string $barcodeNumber Barcode Number.
     * @return $this
     */
    public function setBarcodeNumber($barcodeNumber)
    {
        $this->container['barcodeNumber'] = $barcodeNumber;

        return $this;
    }

    /**
     * Gets expirationDate
     * @return string
     */
    public function getExpirationDate()
    {
        return $this->container['expirationDate'];
    }

    /**
     * Sets expirationDate
     * @param string $expirationDate Expiration Date.
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        $this->container['expirationDate'] = $expirationDate;

        return $this;
    }

    /**
     * Gets purchaseOrderNumber
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchaseOrderNumber'];
    }

    /**
     * Sets purchaseOrderNumber
     * @param string $purchaseOrderNumber Value used by your customer to identify the order. This value is typically a purchase order number. Haque\Cybersource\CybersourceSDK recommends that you do not populate the field with all zeros or nines.  For processor-specific information, see the `user_po` field in [Level II and Level III Processing Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html)
     * @return $this
     */
    public function setPurchaseOrderNumber($purchaseOrderNumber)
    {
        if (!is_null($purchaseOrderNumber) && (strlen($purchaseOrderNumber) > 25)) {
            throw new \InvalidArgumentException('invalid length for $purchaseOrderNumber when calling Ptsv2paymentsOrderInformationInvoiceDetails., must be smaller than or equal to 25.');
        }

        $this->container['purchaseOrderNumber'] = $purchaseOrderNumber;

        return $this;
    }

    /**
     * Gets purchaseOrderDate
     * @return string
     */
    public function getPurchaseOrderDate()
    {
        return $this->container['purchaseOrderDate'];
    }

    /**
     * Sets purchaseOrderDate
     * @param string $purchaseOrderDate Date the order was processed. `Format: YYYY-MM-DD`.  For processor-specific information, see the `purchaser_order_date` field in [Level II and Level III Processing Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html)
     * @return $this
     */
    public function setPurchaseOrderDate($purchaseOrderDate)
    {
        if (!is_null($purchaseOrderDate) && (strlen($purchaseOrderDate) > 10)) {
            throw new \InvalidArgumentException('invalid length for $purchaseOrderDate when calling Ptsv2paymentsOrderInformationInvoiceDetails., must be smaller than or equal to 10.');
        }

        $this->container['purchaseOrderDate'] = $purchaseOrderDate;

        return $this;
    }

    /**
     * Gets purchaseContactName
     * @return string
     */
    public function getPurchaseContactName()
    {
        return $this->container['purchaseContactName'];
    }

    /**
     * Sets purchaseContactName
     * @param string $purchaseContactName The name of the individual or the company contacted for company authorized purchases.  For processor-specific information, see the `authorized_contact_name` field in [Level II and Level III Processing Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html)
     * @return $this
     */
    public function setPurchaseContactName($purchaseContactName)
    {
        if (!is_null($purchaseContactName) && (strlen($purchaseContactName) > 36)) {
            throw new \InvalidArgumentException('invalid length for $purchaseContactName when calling Ptsv2paymentsOrderInformationInvoiceDetails., must be smaller than or equal to 36.');
        }

        $this->container['purchaseContactName'] = $purchaseContactName;

        return $this;
    }

    /**
     * Gets taxable
     * @return bool
     */
    public function getTaxable()
    {
        return $this->container['taxable'];
    }

    /**
     * Sets taxable
     * @param bool $taxable Flag that indicates whether an order is taxable. This value must be true if the sum of all _lineItems[].taxAmount_ values > 0.  If you do not include any `lineItems[].taxAmount` values in your request, Haque\Cybersource\CybersourceSDK does not include `invoiceDetails.taxable` in the data it sends to the processor.  For processor-specific information, see the `tax_indicator` field in [Level II and Level III Processing Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html)  Possible values:  - **true**  - **false**
     * @return $this
     */
    public function setTaxable($taxable)
    {
        $this->container['taxable'] = $taxable;

        return $this;
    }

    /**
     * Gets vatInvoiceReferenceNumber
     * @return string
     */
    public function getVatInvoiceReferenceNumber()
    {
        return $this->container['vatInvoiceReferenceNumber'];
    }

    /**
     * Sets vatInvoiceReferenceNumber
     * @param string $vatInvoiceReferenceNumber VAT invoice number associated with the transaction.  For processor-specific information, see the `vat_invoice_ref_number` field in [Level II and Level III Processing Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html)
     * @return $this
     */
    public function setVatInvoiceReferenceNumber($vatInvoiceReferenceNumber)
    {
        if (!is_null($vatInvoiceReferenceNumber) && (strlen($vatInvoiceReferenceNumber) > 15)) {
            throw new \InvalidArgumentException('invalid length for $vatInvoiceReferenceNumber when calling Ptsv2paymentsOrderInformationInvoiceDetails., must be smaller than or equal to 15.');
        }

        $this->container['vatInvoiceReferenceNumber'] = $vatInvoiceReferenceNumber;

        return $this;
    }

    /**
     * Gets commodityCode
     * @return string
     */
    public function getCommodityCode()
    {
        return $this->container['commodityCode'];
    }

    /**
     * Sets commodityCode
     * @param string $commodityCode International description code of the overall order’s goods or services or the Categorizes purchases for VAT reporting. Contact your acquirer for a list of codes.  For processor-specific information, see the `summary_commodity_code` field in [Level II and Level III Processing Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html)
     * @return $this
     */
    public function setCommodityCode($commodityCode)
    {
        if (!is_null($commodityCode) && (strlen($commodityCode) > 4)) {
            throw new \InvalidArgumentException('invalid length for $commodityCode when calling Ptsv2paymentsOrderInformationInvoiceDetails., must be smaller than or equal to 4.');
        }

        $this->container['commodityCode'] = $commodityCode;

        return $this;
    }

    /**
     * Gets merchandiseCode
     * @return int
     */
    public function getMerchandiseCode()
    {
        return $this->container['merchandiseCode'];
    }

    /**
     * Sets merchandiseCode
     * @param int $merchandiseCode Identifier for the merchandise. Possible value:   - 1000: Gift card  This field is supported only for **American Express Direct**.
     * @return $this
     */
    public function setMerchandiseCode($merchandiseCode)
    {
        $this->container['merchandiseCode'] = $merchandiseCode;

        return $this;
    }

    /**
     * Gets transactionAdviceAddendum
     * @return \Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsOrderInformationInvoiceDetailsTransactionAdviceAddendum[]
     */
    public function getTransactionAdviceAddendum()
    {
        return $this->container['transactionAdviceAddendum'];
    }

    /**
     * Sets transactionAdviceAddendum
     * @param \Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsOrderInformationInvoiceDetailsTransactionAdviceAddendum[] $transactionAdviceAddendum
     * @return $this
     */
    public function setTransactionAdviceAddendum($transactionAdviceAddendum)
    {
        $this->container['transactionAdviceAddendum'] = $transactionAdviceAddendum;

        return $this;
    }

    /**
     * Gets referenceDataCode
     * @return string
     */
    public function getReferenceDataCode()
    {
        return $this->container['referenceDataCode'];
    }

    /**
     * Sets referenceDataCode
     * @param string $referenceDataCode Code that identifies the value of the `referenceDataNumber` field.  For the possible values, see \"Reference Data Codes\" in [Level II and Level III Processing Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html/).  This field is a pass-through, which means that Haque\Cybersource\CybersourceSDK does not verify the value or modify it in any way before sending it to the processor.
     * @return $this
     */
    public function setReferenceDataCode($referenceDataCode)
    {
        if (!is_null($referenceDataCode) && (strlen($referenceDataCode) > 3)) {
            throw new \InvalidArgumentException('invalid length for $referenceDataCode when calling Ptsv2paymentsOrderInformationInvoiceDetails., must be smaller than or equal to 3.');
        }

        $this->container['referenceDataCode'] = $referenceDataCode;

        return $this;
    }

    /**
     * Gets referenceDataNumber
     * @return string
     */
    public function getReferenceDataNumber()
    {
        return $this->container['referenceDataNumber'];
    }

    /**
     * Sets referenceDataNumber
     * @param string $referenceDataNumber Reference number. The meaning of this value is identified by the value of the `referenceDataCode` field.  This field is a pass-through, which means that Haque\Cybersource\CybersourceSDK does not verify the value or modify it in any way before sending it to the processor.
     * @return $this
     */
    public function setReferenceDataNumber($referenceDataNumber)
    {
        if (!is_null($referenceDataNumber) && (strlen($referenceDataNumber) > 30)) {
            throw new \InvalidArgumentException('invalid length for $referenceDataNumber when calling Ptsv2paymentsOrderInformationInvoiceDetails., must be smaller than or equal to 30.');
        }

        $this->container['referenceDataNumber'] = $referenceDataNumber;

        return $this;
    }

    /**
     * Gets salesSlipNumber
     * @return int
     */
    public function getSalesSlipNumber()
    {
        return $this->container['salesSlipNumber'];
    }

    /**
     * Sets salesSlipNumber
     * @param int $salesSlipNumber Transaction identifier that Haque\Cybersource\CybersourceSDK generates. You have the option of printing the sales slip number on the receipt. This field is supported only on Cybersource through Visanet and JCN gateway.
     * @return $this
     */
    public function setSalesSlipNumber($salesSlipNumber)
    {

        if (!is_null($salesSlipNumber) && ($salesSlipNumber > 99999)) {
            throw new \InvalidArgumentException('invalid value for $salesSlipNumber when calling Ptsv2paymentsOrderInformationInvoiceDetails., must be smaller than or equal to 99999.');
        }

        $this->container['salesSlipNumber'] = $salesSlipNumber;

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


