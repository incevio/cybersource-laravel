<?php
/**
 * Ptsv2payoutsSenderInformation
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
 * Ptsv2payoutsSenderInformation Class Doc Comment
 *
 * @category    Class
 * @package     Haque\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2payoutsSenderInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payouts_senderInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'referenceNumber' => 'string',
        'account' => '\Haque\Cybersource\CybersourceSDK\Model\Ptsv2payoutsSenderInformationAccount',
        'firstName' => 'string',
        'middleInitial' => 'string',
        'lastName' => 'string',
        'name' => 'string',
        'address1' => 'string',
        'locality' => 'string',
        'administrativeArea' => 'string',
        'countryCode' => 'string',
        'postalCode' => 'string',
        'phoneNumber' => 'string',
        'dateOfBirth' => 'string',
        'vatRegistrationNumber' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'referenceNumber' => null,
        'account' => null,
        'firstName' => null,
        'middleInitial' => null,
        'lastName' => null,
        'name' => null,
        'address1' => null,
        'locality' => null,
        'administrativeArea' => null,
        'countryCode' => null,
        'postalCode' => null,
        'phoneNumber' => null,
        'dateOfBirth' => null,
        'vatRegistrationNumber' => null
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
        'referenceNumber' => 'referenceNumber',
        'account' => 'account',
        'firstName' => 'firstName',
        'middleInitial' => 'middleInitial',
        'lastName' => 'lastName',
        'name' => 'name',
        'address1' => 'address1',
        'locality' => 'locality',
        'administrativeArea' => 'administrativeArea',
        'countryCode' => 'countryCode',
        'postalCode' => 'postalCode',
        'phoneNumber' => 'phoneNumber',
        'dateOfBirth' => 'dateOfBirth',
        'vatRegistrationNumber' => 'vatRegistrationNumber'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'referenceNumber' => 'setReferenceNumber',
        'account' => 'setAccount',
        'firstName' => 'setFirstName',
        'middleInitial' => 'setMiddleInitial',
        'lastName' => 'setLastName',
        'name' => 'setName',
        'address1' => 'setAddress1',
        'locality' => 'setLocality',
        'administrativeArea' => 'setAdministrativeArea',
        'countryCode' => 'setCountryCode',
        'postalCode' => 'setPostalCode',
        'phoneNumber' => 'setPhoneNumber',
        'dateOfBirth' => 'setDateOfBirth',
        'vatRegistrationNumber' => 'setVatRegistrationNumber'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'referenceNumber' => 'getReferenceNumber',
        'account' => 'getAccount',
        'firstName' => 'getFirstName',
        'middleInitial' => 'getMiddleInitial',
        'lastName' => 'getLastName',
        'name' => 'getName',
        'address1' => 'getAddress1',
        'locality' => 'getLocality',
        'administrativeArea' => 'getAdministrativeArea',
        'countryCode' => 'getCountryCode',
        'postalCode' => 'getPostalCode',
        'phoneNumber' => 'getPhoneNumber',
        'dateOfBirth' => 'getDateOfBirth',
        'vatRegistrationNumber' => 'getVatRegistrationNumber'
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
        $this->container['referenceNumber'] = isset($data['referenceNumber']) ? $data['referenceNumber'] : null;
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['firstName'] = isset($data['firstName']) ? $data['firstName'] : null;
        $this->container['middleInitial'] = isset($data['middleInitial']) ? $data['middleInitial'] : null;
        $this->container['lastName'] = isset($data['lastName']) ? $data['lastName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['address1'] = isset($data['address1']) ? $data['address1'] : null;
        $this->container['locality'] = isset($data['locality']) ? $data['locality'] : null;
        $this->container['administrativeArea'] = isset($data['administrativeArea']) ? $data['administrativeArea'] : null;
        $this->container['countryCode'] = isset($data['countryCode']) ? $data['countryCode'] : null;
        $this->container['postalCode'] = isset($data['postalCode']) ? $data['postalCode'] : null;
        $this->container['phoneNumber'] = isset($data['phoneNumber']) ? $data['phoneNumber'] : null;
        $this->container['dateOfBirth'] = isset($data['dateOfBirth']) ? $data['dateOfBirth'] : null;
        $this->container['vatRegistrationNumber'] = isset($data['vatRegistrationNumber']) ? $data['vatRegistrationNumber'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['referenceNumber']) && (strlen($this->container['referenceNumber']) > 19)) {
            $invalid_properties[] = "invalid value for 'referenceNumber', the character length must be smaller than or equal to 19.";
        }

        if (!is_null($this->container['firstName']) && (strlen($this->container['firstName']) > 35)) {
            $invalid_properties[] = "invalid value for 'firstName', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['middleInitial']) && (strlen($this->container['middleInitial']) > 1)) {
            $invalid_properties[] = "invalid value for 'middleInitial', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['lastName']) && (strlen($this->container['lastName']) > 35)) {
            $invalid_properties[] = "invalid value for 'lastName', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['name']) && (strlen($this->container['name']) > 24)) {
            $invalid_properties[] = "invalid value for 'name', the character length must be smaller than or equal to 24.";
        }

        if (!is_null($this->container['address1']) && (strlen($this->container['address1']) > 50)) {
            $invalid_properties[] = "invalid value for 'address1', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['locality']) && (strlen($this->container['locality']) > 25)) {
            $invalid_properties[] = "invalid value for 'locality', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['administrativeArea']) && (strlen($this->container['administrativeArea']) > 2)) {
            $invalid_properties[] = "invalid value for 'administrativeArea', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['countryCode']) && (strlen($this->container['countryCode']) > 2)) {
            $invalid_properties[] = "invalid value for 'countryCode', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['postalCode']) && (strlen($this->container['postalCode']) > 10)) {
            $invalid_properties[] = "invalid value for 'postalCode', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['phoneNumber']) && (strlen($this->container['phoneNumber']) > 20)) {
            $invalid_properties[] = "invalid value for 'phoneNumber', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['dateOfBirth']) && (strlen($this->container['dateOfBirth']) > 8)) {
            $invalid_properties[] = "invalid value for 'dateOfBirth', the character length must be smaller than or equal to 8.";
        }

        if (!is_null($this->container['dateOfBirth']) && (strlen($this->container['dateOfBirth']) < 8)) {
            $invalid_properties[] = "invalid value for 'dateOfBirth', the character length must be bigger than or equal to 8.";
        }

        if (!is_null($this->container['vatRegistrationNumber']) && (strlen($this->container['vatRegistrationNumber']) > 13)) {
            $invalid_properties[] = "invalid value for 'vatRegistrationNumber', the character length must be smaller than or equal to 13.";
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

        if (strlen($this->container['referenceNumber']) > 19) {
            return false;
        }
        if (strlen($this->container['firstName']) > 35) {
            return false;
        }
        if (strlen($this->container['middleInitial']) > 1) {
            return false;
        }
        if (strlen($this->container['lastName']) > 35) {
            return false;
        }
        if (strlen($this->container['name']) > 24) {
            return false;
        }
        if (strlen($this->container['address1']) > 50) {
            return false;
        }
        if (strlen($this->container['locality']) > 25) {
            return false;
        }
        if (strlen($this->container['administrativeArea']) > 2) {
            return false;
        }
        if (strlen($this->container['countryCode']) > 2) {
            return false;
        }
        if (strlen($this->container['postalCode']) > 10) {
            return false;
        }
        if (strlen($this->container['phoneNumber']) > 20) {
            return false;
        }
        if (strlen($this->container['dateOfBirth']) > 8) {
            return false;
        }
        if (strlen($this->container['dateOfBirth']) < 8) {
            return false;
        }
        if (strlen($this->container['vatRegistrationNumber']) > 13) {
            return false;
        }
        return true;
    }


    /**
     * Gets referenceNumber
     * @return string
     */
    public function getReferenceNumber()
    {
        return $this->container['referenceNumber'];
    }

    /**
     * Sets referenceNumber
     * @param string $referenceNumber Reference number generated by you that uniquely identifies the sender.
     * @return $this
     */
    public function setReferenceNumber($referenceNumber)
    {
        if (!is_null($referenceNumber) && (strlen($referenceNumber) > 19)) {
            throw new \InvalidArgumentException('invalid length for $referenceNumber when calling Ptsv2payoutsSenderInformation., must be smaller than or equal to 19.');
        }

        $this->container['referenceNumber'] = $referenceNumber;

        return $this;
    }

    /**
     * Gets account
     * @return \Haque\Cybersource\CybersourceSDK\Model\Ptsv2payoutsSenderInformationAccount
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     * @param \Haque\Cybersource\CybersourceSDK\Model\Ptsv2payoutsSenderInformationAccount $account
     * @return $this
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets firstName
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     * @param string $firstName First name of sender (Optional). * CTV (14) * Paymentech (30)
     * @return $this
     */
    public function setFirstName($firstName)
    {
        if (!is_null($firstName) && (strlen($firstName) > 35)) {
            throw new \InvalidArgumentException('invalid length for $firstName when calling Ptsv2payoutsSenderInformation., must be smaller than or equal to 35.');
        }

        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets middleInitial
     * @return string
     */
    public function getMiddleInitial()
    {
        return $this->container['middleInitial'];
    }

    /**
     * Sets middleInitial
     * @param string $middleInitial Recipient middle initial (Optional).
     * @return $this
     */
    public function setMiddleInitial($middleInitial)
    {
        if (!is_null($middleInitial) && (strlen($middleInitial) > 1)) {
            throw new \InvalidArgumentException('invalid length for $middleInitial when calling Ptsv2payoutsSenderInformation., must be smaller than or equal to 1.');
        }

        $this->container['middleInitial'] = $middleInitial;

        return $this;
    }

    /**
     * Gets lastName
     * @return string
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     * @param string $lastName Recipient last name (Optional). * CTV (14) * Paymentech (30)
     * @return $this
     */
    public function setLastName($lastName)
    {
        if (!is_null($lastName) && (strlen($lastName) > 35)) {
            throw new \InvalidArgumentException('invalid length for $lastName when calling Ptsv2payoutsSenderInformation., must be smaller than or equal to 35.');
        }

        $this->container['lastName'] = $lastName;

        return $this;
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
     * @param string $name Name of sender.  **Funds Disbursement**  This value is the name of the originator sending the funds disbursement. * CTV, Paymentech (30)
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (strlen($name) > 24)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Ptsv2payoutsSenderInformation., must be smaller than or equal to 24.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets address1
     * @return string
     */
    public function getAddress1()
    {
        return $this->container['address1'];
    }

    /**
     * Sets address1
     * @param string $address1 Street address of sender.  **Funds Disbursement**  This value is the address of the originator sending the funds disbursement.
     * @return $this
     */
    public function setAddress1($address1)
    {
        if (!is_null($address1) && (strlen($address1) > 50)) {
            throw new \InvalidArgumentException('invalid length for $address1 when calling Ptsv2payoutsSenderInformation., must be smaller than or equal to 50.');
        }

        $this->container['address1'] = $address1;

        return $this;
    }

    /**
     * Gets locality
     * @return string
     */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
     * Sets locality
     * @param string $locality City of sender.  **Funds Disbursement**  This value is the city of the originator sending the funds disbursement.
     * @return $this
     */
    public function setLocality($locality)
    {
        if (!is_null($locality) && (strlen($locality) > 25)) {
            throw new \InvalidArgumentException('invalid length for $locality when calling Ptsv2payoutsSenderInformation., must be smaller than or equal to 25.');
        }

        $this->container['locality'] = $locality;

        return $this;
    }

    /**
     * Gets administrativeArea
     * @return string
     */
    public function getAdministrativeArea()
    {
        return $this->container['administrativeArea'];
    }

    /**
     * Sets administrativeArea
     * @param string $administrativeArea Sender’s state. Use the State, Province, and Territory Codes for the United States and Canada.
     * @return $this
     */
    public function setAdministrativeArea($administrativeArea)
    {
        if (!is_null($administrativeArea) && (strlen($administrativeArea) > 2)) {
            throw new \InvalidArgumentException('invalid length for $administrativeArea when calling Ptsv2payoutsSenderInformation., must be smaller than or equal to 2.');
        }

        $this->container['administrativeArea'] = $administrativeArea;

        return $this;
    }

    /**
     * Gets countryCode
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['countryCode'];
    }

    /**
     * Sets countryCode
     * @param string $countryCode Country of sender. Use the ISO Standard Country Codes. * CTV (3)
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        if (!is_null($countryCode) && (strlen($countryCode) > 2)) {
            throw new \InvalidArgumentException('invalid length for $countryCode when calling Ptsv2payoutsSenderInformation., must be smaller than or equal to 2.');
        }

        $this->container['countryCode'] = $countryCode;

        return $this;
    }

    /**
     * Gets postalCode
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postalCode'];
    }

    /**
     * Sets postalCode
     * @param string $postalCode Sender’s postal code. Required only for FDCCompass.
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        if (!is_null($postalCode) && (strlen($postalCode) > 10)) {
            throw new \InvalidArgumentException('invalid length for $postalCode when calling Ptsv2payoutsSenderInformation., must be smaller than or equal to 10.');
        }

        $this->container['postalCode'] = $postalCode;

        return $this;
    }

    /**
     * Gets phoneNumber
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phoneNumber'];
    }

    /**
     * Sets phoneNumber
     * @param string $phoneNumber Sender’s phone number. Required only for FDCCompass.
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        if (!is_null($phoneNumber) && (strlen($phoneNumber) > 20)) {
            throw new \InvalidArgumentException('invalid length for $phoneNumber when calling Ptsv2payoutsSenderInformation., must be smaller than or equal to 20.');
        }

        $this->container['phoneNumber'] = $phoneNumber;

        return $this;
    }

    /**
     * Gets dateOfBirth
     * @return string
     */
    public function getDateOfBirth()
    {
        return $this->container['dateOfBirth'];
    }

    /**
     * Sets dateOfBirth
     * @param string $dateOfBirth Sender’s date of birth in YYYYMMDD format. Required only for FDCCompass.
     * @return $this
     */
    public function setDateOfBirth($dateOfBirth)
    {
        if (!is_null($dateOfBirth) && (strlen($dateOfBirth) > 8)) {
            throw new \InvalidArgumentException('invalid length for $dateOfBirth when calling Ptsv2payoutsSenderInformation., must be smaller than or equal to 8.');
        }
        if (!is_null($dateOfBirth) && (strlen($dateOfBirth) < 8)) {
            throw new \InvalidArgumentException('invalid length for $dateOfBirth when calling Ptsv2payoutsSenderInformation., must be bigger than or equal to 8.');
        }

        $this->container['dateOfBirth'] = $dateOfBirth;

        return $this;
    }

    /**
     * Gets vatRegistrationNumber
     * @return string
     */
    public function getVatRegistrationNumber()
    {
        return $this->container['vatRegistrationNumber'];
    }

    /**
     * Sets vatRegistrationNumber
     * @param string $vatRegistrationNumber Customer's government-assigned tax identification number.
     * @return $this
     */
    public function setVatRegistrationNumber($vatRegistrationNumber)
    {
        if (!is_null($vatRegistrationNumber) && (strlen($vatRegistrationNumber) > 13)) {
            throw new \InvalidArgumentException('invalid length for $vatRegistrationNumber when calling Ptsv2payoutsSenderInformation., must be smaller than or equal to 13.');
        }

        $this->container['vatRegistrationNumber'] = $vatRegistrationNumber;

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


