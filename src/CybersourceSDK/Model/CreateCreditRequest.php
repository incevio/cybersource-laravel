<?php
/**
 * CreateCreditRequest
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
 * CreateCreditRequest Class Doc Comment
 *
 * @category    Class
 * @package     Haque\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateCreditRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'createCreditRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'clientReferenceInformation' => '\Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsClientReferenceInformation',
        'processingInformation' => '\Haque\Cybersource\CybersourceSDK\Model\Ptsv2creditsProcessingInformation',
        'paymentInformation' => '\Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsidrefundsPaymentInformation',
        'orderInformation' => '\Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsidrefundsOrderInformation',
        'buyerInformation' => '\Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsidcapturesBuyerInformation',
        'deviceInformation' => '\Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsDeviceInformation',
        'merchantInformation' => '\Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsidrefundsMerchantInformation',
        'aggregatorInformation' => '\Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsidcapturesAggregatorInformation',
        'pointOfSaleInformation' => '\Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsPointOfSaleInformation',
        'merchantDefinedInformation' => '\Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsMerchantDefinedInformation[]',
        'installmentInformation' => '\Haque\Cybersource\CybersourceSDK\Model\Ptsv2creditsInstallmentInformation',
        'travelInformation' => '\Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsidcapturesTravelInformation',
        'promotionInformation' => '\Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsPromotionInformation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'clientReferenceInformation' => null,
        'processingInformation' => null,
        'paymentInformation' => null,
        'orderInformation' => null,
        'buyerInformation' => null,
        'deviceInformation' => null,
        'merchantInformation' => null,
        'aggregatorInformation' => null,
        'pointOfSaleInformation' => null,
        'merchantDefinedInformation' => null,
        'installmentInformation' => null,
        'travelInformation' => null,
        'promotionInformation' => null
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
        'clientReferenceInformation' => 'clientReferenceInformation',
        'processingInformation' => 'processingInformation',
        'paymentInformation' => 'paymentInformation',
        'orderInformation' => 'orderInformation',
        'buyerInformation' => 'buyerInformation',
        'deviceInformation' => 'deviceInformation',
        'merchantInformation' => 'merchantInformation',
        'aggregatorInformation' => 'aggregatorInformation',
        'pointOfSaleInformation' => 'pointOfSaleInformation',
        'merchantDefinedInformation' => 'merchantDefinedInformation',
        'installmentInformation' => 'installmentInformation',
        'travelInformation' => 'travelInformation',
        'promotionInformation' => 'promotionInformation'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'clientReferenceInformation' => 'setClientReferenceInformation',
        'processingInformation' => 'setProcessingInformation',
        'paymentInformation' => 'setPaymentInformation',
        'orderInformation' => 'setOrderInformation',
        'buyerInformation' => 'setBuyerInformation',
        'deviceInformation' => 'setDeviceInformation',
        'merchantInformation' => 'setMerchantInformation',
        'aggregatorInformation' => 'setAggregatorInformation',
        'pointOfSaleInformation' => 'setPointOfSaleInformation',
        'merchantDefinedInformation' => 'setMerchantDefinedInformation',
        'installmentInformation' => 'setInstallmentInformation',
        'travelInformation' => 'setTravelInformation',
        'promotionInformation' => 'setPromotionInformation'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'clientReferenceInformation' => 'getClientReferenceInformation',
        'processingInformation' => 'getProcessingInformation',
        'paymentInformation' => 'getPaymentInformation',
        'orderInformation' => 'getOrderInformation',
        'buyerInformation' => 'getBuyerInformation',
        'deviceInformation' => 'getDeviceInformation',
        'merchantInformation' => 'getMerchantInformation',
        'aggregatorInformation' => 'getAggregatorInformation',
        'pointOfSaleInformation' => 'getPointOfSaleInformation',
        'merchantDefinedInformation' => 'getMerchantDefinedInformation',
        'installmentInformation' => 'getInstallmentInformation',
        'travelInformation' => 'getTravelInformation',
        'promotionInformation' => 'getPromotionInformation'
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
        $this->container['clientReferenceInformation'] = isset($data['clientReferenceInformation']) ? $data['clientReferenceInformation'] : null;
        $this->container['processingInformation'] = isset($data['processingInformation']) ? $data['processingInformation'] : null;
        $this->container['paymentInformation'] = isset($data['paymentInformation']) ? $data['paymentInformation'] : null;
        $this->container['orderInformation'] = isset($data['orderInformation']) ? $data['orderInformation'] : null;
        $this->container['buyerInformation'] = isset($data['buyerInformation']) ? $data['buyerInformation'] : null;
        $this->container['deviceInformation'] = isset($data['deviceInformation']) ? $data['deviceInformation'] : null;
        $this->container['merchantInformation'] = isset($data['merchantInformation']) ? $data['merchantInformation'] : null;
        $this->container['aggregatorInformation'] = isset($data['aggregatorInformation']) ? $data['aggregatorInformation'] : null;
        $this->container['pointOfSaleInformation'] = isset($data['pointOfSaleInformation']) ? $data['pointOfSaleInformation'] : null;
        $this->container['merchantDefinedInformation'] = isset($data['merchantDefinedInformation']) ? $data['merchantDefinedInformation'] : null;
        $this->container['installmentInformation'] = isset($data['installmentInformation']) ? $data['installmentInformation'] : null;
        $this->container['travelInformation'] = isset($data['travelInformation']) ? $data['travelInformation'] : null;
        $this->container['promotionInformation'] = isset($data['promotionInformation']) ? $data['promotionInformation'] : null;
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
     * Gets clientReferenceInformation
     * @return \Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsClientReferenceInformation
     */
    public function getClientReferenceInformation()
    {
        return $this->container['clientReferenceInformation'];
    }

    /**
     * Sets clientReferenceInformation
     * @param \Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsClientReferenceInformation $clientReferenceInformation
     * @return $this
     */
    public function setClientReferenceInformation($clientReferenceInformation)
    {
        $this->container['clientReferenceInformation'] = $clientReferenceInformation;

        return $this;
    }

    /**
     * Gets processingInformation
     * @return \Haque\Cybersource\CybersourceSDK\Model\Ptsv2creditsProcessingInformation
     */
    public function getProcessingInformation()
    {
        return $this->container['processingInformation'];
    }

    /**
     * Sets processingInformation
     * @param \Haque\Cybersource\CybersourceSDK\Model\Ptsv2creditsProcessingInformation $processingInformation
     * @return $this
     */
    public function setProcessingInformation($processingInformation)
    {
        $this->container['processingInformation'] = $processingInformation;

        return $this;
    }

    /**
     * Gets paymentInformation
     * @return \Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsidrefundsPaymentInformation
     */
    public function getPaymentInformation()
    {
        return $this->container['paymentInformation'];
    }

    /**
     * Sets paymentInformation
     * @param \Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsidrefundsPaymentInformation $paymentInformation
     * @return $this
     */
    public function setPaymentInformation($paymentInformation)
    {
        $this->container['paymentInformation'] = $paymentInformation;

        return $this;
    }

    /**
     * Gets orderInformation
     * @return \Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsidrefundsOrderInformation
     */
    public function getOrderInformation()
    {
        return $this->container['orderInformation'];
    }

    /**
     * Sets orderInformation
     * @param \Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsidrefundsOrderInformation $orderInformation
     * @return $this
     */
    public function setOrderInformation($orderInformation)
    {
        $this->container['orderInformation'] = $orderInformation;

        return $this;
    }

    /**
     * Gets buyerInformation
     * @return \Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsidcapturesBuyerInformation
     */
    public function getBuyerInformation()
    {
        return $this->container['buyerInformation'];
    }

    /**
     * Sets buyerInformation
     * @param \Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsidcapturesBuyerInformation $buyerInformation
     * @return $this
     */
    public function setBuyerInformation($buyerInformation)
    {
        $this->container['buyerInformation'] = $buyerInformation;

        return $this;
    }

    /**
     * Gets deviceInformation
     * @return \Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsDeviceInformation
     */
    public function getDeviceInformation()
    {
        return $this->container['deviceInformation'];
    }

    /**
     * Sets deviceInformation
     * @param \Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsDeviceInformation $deviceInformation
     * @return $this
     */
    public function setDeviceInformation($deviceInformation)
    {
        $this->container['deviceInformation'] = $deviceInformation;

        return $this;
    }

    /**
     * Gets merchantInformation
     * @return \Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsidrefundsMerchantInformation
     */
    public function getMerchantInformation()
    {
        return $this->container['merchantInformation'];
    }

    /**
     * Sets merchantInformation
     * @param \Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsidrefundsMerchantInformation $merchantInformation
     * @return $this
     */
    public function setMerchantInformation($merchantInformation)
    {
        $this->container['merchantInformation'] = $merchantInformation;

        return $this;
    }

    /**
     * Gets aggregatorInformation
     * @return \Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsidcapturesAggregatorInformation
     */
    public function getAggregatorInformation()
    {
        return $this->container['aggregatorInformation'];
    }

    /**
     * Sets aggregatorInformation
     * @param \Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsidcapturesAggregatorInformation $aggregatorInformation
     * @return $this
     */
    public function setAggregatorInformation($aggregatorInformation)
    {
        $this->container['aggregatorInformation'] = $aggregatorInformation;

        return $this;
    }

    /**
     * Gets pointOfSaleInformation
     * @return \Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsPointOfSaleInformation
     */
    public function getPointOfSaleInformation()
    {
        return $this->container['pointOfSaleInformation'];
    }

    /**
     * Sets pointOfSaleInformation
     * @param \Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsPointOfSaleInformation $pointOfSaleInformation
     * @return $this
     */
    public function setPointOfSaleInformation($pointOfSaleInformation)
    {
        $this->container['pointOfSaleInformation'] = $pointOfSaleInformation;

        return $this;
    }

    /**
     * Gets merchantDefinedInformation
     * @return \Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsMerchantDefinedInformation[]
     */
    public function getMerchantDefinedInformation()
    {
        return $this->container['merchantDefinedInformation'];
    }

    /**
     * Sets merchantDefinedInformation
     * @param \Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsMerchantDefinedInformation[] $merchantDefinedInformation The object containing the custom data that the merchant defines.
     * @return $this
     */
    public function setMerchantDefinedInformation($merchantDefinedInformation)
    {
        $this->container['merchantDefinedInformation'] = $merchantDefinedInformation;

        return $this;
    }

    /**
     * Gets installmentInformation
     * @return \Haque\Cybersource\CybersourceSDK\Model\Ptsv2creditsInstallmentInformation
     */
    public function getInstallmentInformation()
    {
        return $this->container['installmentInformation'];
    }

    /**
     * Sets installmentInformation
     * @param \Haque\Cybersource\CybersourceSDK\Model\Ptsv2creditsInstallmentInformation $installmentInformation
     * @return $this
     */
    public function setInstallmentInformation($installmentInformation)
    {
        $this->container['installmentInformation'] = $installmentInformation;

        return $this;
    }

    /**
     * Gets travelInformation
     * @return \Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsidcapturesTravelInformation
     */
    public function getTravelInformation()
    {
        return $this->container['travelInformation'];
    }

    /**
     * Sets travelInformation
     * @param \Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsidcapturesTravelInformation $travelInformation
     * @return $this
     */
    public function setTravelInformation($travelInformation)
    {
        $this->container['travelInformation'] = $travelInformation;

        return $this;
    }

    /**
     * Gets promotionInformation
     * @return \Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsPromotionInformation
     */
    public function getPromotionInformation()
    {
        return $this->container['promotionInformation'];
    }

    /**
     * Sets promotionInformation
     * @param \Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsPromotionInformation $promotionInformation
     * @return $this
     */
    public function setPromotionInformation($promotionInformation)
    {
        $this->container['promotionInformation'] = $promotionInformation;

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


