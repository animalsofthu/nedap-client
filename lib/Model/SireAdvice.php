<?php
/**
 * SireAdvice
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Nedap Livestock Connect
 *
 * # Access Tokens With each endpoint information can be retrieved for one installation only. The access token controls which installation will be accessed. This means that you need to use different access tokens for different installations.      # Scopes For each installation, different packages of data ('Connections') are available. On connect.nedap-livestockmanagement.com/nedap-livestock-connect/ an overview of the different available packages and the corresponding enpdoints is given. The basic connection is free to use, but for some of the other connections additional charges will be applied. In order to get access to other connections your application needs permission from us, and from the specific farmer. The first part can be arranged by contacting Nedap, the second part by OAuth2 scopes.  In OAuth2, scopes let you specify which data your application needs from a user. When requesting permission from a farmer to access his data, you specify which scopes you need, what kind of data you want. If the farmer accepts, you will receive a token for those specified scopes. With that token, you can only access API Endpoints that are allowed by those scopes, since every endpoint needs a specific scope to access it.  Summarized:    - Endpoints are protected by scopes. To access them, you need a token with the correct scopes.    - When requesting access to a farm, by default you get access to the scope 'account', which gives access to basic data. If you need more, send those scopes along with the request.    - You can only request scopes that are permitted by your application. If you need more, contact us.  To access the different available connections, use the following scopes:  ## Cows  ### Basic Connection - account: Access to basic data: animals, groups, and calendar events  ### Attentions Connection - account: Access to attentions  ### Heat Detection Advanced Connection - heat_detection: Access to heat detection  ### Health and Management Advanced Connection - behaviour: Access to behavioural data: activity, eating, standing, lying, standups and walking - rumination: Access to rumination data - inactive: Access to inactive data  ### Sire Advice Connection - sire_advice: Access to sire advices  ## Pigs  ### Basic Connection - account: Access to basic data: animals, groups, calendar events and attentions  ### Sow Weights Connection - weights: Access to weighing data  ### Sorting Connection - sorting: Access to sorting data  ### Pig Performance Testing Connection - pig_performance_testing: Access to pig performance testing data  ### Feeding Connection - feeding_animal_summaries: Access to feeding animal summaries - feeding_location_summaries: Access to feeding location summaries - feeding_extended_location_summaries: Access to feeding location summaries including station totals  # Standards  In the API we use the following standards:  - Timestamps are always in UTC in ISO 8601. An example would be '2017-10-23T20:21:01Z'. - Weights are always in grams.  # HTTP Error codes  We use the following HTTP codes to signify errors: - 400 (Invalid data): The data that is sent is invalid (for example an incorrect Animal object). The return body contains pointers on the specific errors. - 401 (Unauthorized): The provided token is not valid or has expired. - 403 (Forbidden): The provided token is valid but has no access to the accessed endpoint. - 404 (Not found): The object that is requested is not found. - 500 (Server error): Something unexpected went wrong on the server.
 *
 * OpenAPI spec version: v1
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.15
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * SireAdvice Class Doc Comment
 *
 * @category Class
 * @description Update a single sire advice
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SireAdvice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sire_advice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'animal_id' => 'int',
        'advice_order' => 'int',
        'sire_code' => 'string',
        'sire_name' => 'string',
        'sire_url' => 'string',
        'sexed' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'animal_id' => 'int32',
        'advice_order' => 'int32',
        'sire_code' => null,
        'sire_name' => null,
        'sire_url' => null,
        'sexed' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'animal_id' => 'animal_id',
        'advice_order' => 'advice_order',
        'sire_code' => 'sire_code',
        'sire_name' => 'sire_name',
        'sire_url' => 'sire_url',
        'sexed' => 'sexed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'animal_id' => 'setAnimalId',
        'advice_order' => 'setAdviceOrder',
        'sire_code' => 'setSireCode',
        'sire_name' => 'setSireName',
        'sire_url' => 'setSireUrl',
        'sexed' => 'setSexed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'animal_id' => 'getAnimalId',
        'advice_order' => 'getAdviceOrder',
        'sire_code' => 'getSireCode',
        'sire_name' => 'getSireName',
        'sire_url' => 'getSireUrl',
        'sexed' => 'getSexed'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const ADVICE_ORDER_1 = 1;
    const ADVICE_ORDER_2 = 2;
    const ADVICE_ORDER_3 = 3;
    const SEXED_0 = 0;
    const SEXED_1 = 1;
    const SEXED_2 = 2;



    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAdviceOrderAllowableValues()
    {
        return [
            self::ADVICE_ORDER_1,
            self::ADVICE_ORDER_2,
            self::ADVICE_ORDER_3,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSexedAllowableValues()
    {
        return [
            self::SEXED_0,
            self::SEXED_1,
            self::SEXED_2,
        ];
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['animal_id'] = isset($data['animal_id']) ? $data['animal_id'] : null;
        $this->container['advice_order'] = isset($data['advice_order']) ? $data['advice_order'] : null;
        $this->container['sire_code'] = isset($data['sire_code']) ? $data['sire_code'] : null;
        $this->container['sire_name'] = isset($data['sire_name']) ? $data['sire_name'] : null;
        $this->container['sire_url'] = isset($data['sire_url']) ? $data['sire_url'] : null;
        $this->container['sexed'] = isset($data['sexed']) ? $data['sexed'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['animal_id'] === null) {
            $invalidProperties[] = "'animal_id' can't be null";
        }
        if ($this->container['advice_order'] === null) {
            $invalidProperties[] = "'advice_order' can't be null";
        }
        $allowedValues = $this->getAdviceOrderAllowableValues();
        if (!is_null($this->container['advice_order']) && !in_array($this->container['advice_order'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'advice_order', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['sire_code'] === null) {
            $invalidProperties[] = "'sire_code' can't be null";
        }
        if ($this->container['sire_name'] === null) {
            $invalidProperties[] = "'sire_name' can't be null";
        }
        if ($this->container['sexed'] === null) {
            $invalidProperties[] = "'sexed' can't be null";
        }
        $allowedValues = $this->getSexedAllowableValues();
        if (!is_null($this->container['sexed']) && !in_array($this->container['sexed'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sexed', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id ID of the advice
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets animal_id
     *
     * @return int
     */
    public function getAnimalId()
    {
        return $this->container['animal_id'];
    }

    /**
     * Sets animal_id
     *
     * @param int $animal_id ID of the animal
     *
     * @return $this
     */
    public function setAnimalId($animal_id)
    {
        $this->container['animal_id'] = $animal_id;

        return $this;
    }

    /**
     * Gets advice_order
     *
     * @return int
     */
    public function getAdviceOrder()
    {
        return $this->container['advice_order'];
    }

    /**
     * Sets advice_order
     *
     * @param int $advice_order Order of the advice
     *
     * @return $this
     */
    public function setAdviceOrder($advice_order)
    {
        $allowedValues = $this->getAdviceOrderAllowableValues();
        if (!in_array($advice_order, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'advice_order', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['advice_order'] = $advice_order;

        return $this;
    }

    /**
     * Gets sire_code
     *
     * @return string
     */
    public function getSireCode()
    {
        return $this->container['sire_code'];
    }

    /**
     * Sets sire_code
     *
     * @param string $sire_code Code of the sire
     *
     * @return $this
     */
    public function setSireCode($sire_code)
    {
        $this->container['sire_code'] = $sire_code;

        return $this;
    }

    /**
     * Gets sire_name
     *
     * @return string
     */
    public function getSireName()
    {
        return $this->container['sire_name'];
    }

    /**
     * Sets sire_name
     *
     * @param string $sire_name Name of the sire
     *
     * @return $this
     */
    public function setSireName($sire_name)
    {
        $this->container['sire_name'] = $sire_name;

        return $this;
    }

    /**
     * Gets sire_url
     *
     * @return string
     */
    public function getSireUrl()
    {
        return $this->container['sire_url'];
    }

    /**
     * Sets sire_url
     *
     * @param string $sire_url Url to the sire's page
     *
     * @return $this
     */
    public function setSireUrl($sire_url)
    {
        $this->container['sire_url'] = $sire_url;

        return $this;
    }

    /**
     * Gets sexed
     *
     * @return int
     */
    public function getSexed()
    {
        return $this->container['sexed'];
    }

    /**
     * Sets sexed
     *
     * @param int $sexed Indication if the sire's semen is sexed, 0: Not sexed, 1: Sexed as male, 2: Sexed as female
     *
     * @return $this
     */
    public function setSexed($sexed)
    {
        $allowedValues = $this->getSexedAllowableValues();
        if (!in_array($sexed, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sexed', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sexed'] = $sexed;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


