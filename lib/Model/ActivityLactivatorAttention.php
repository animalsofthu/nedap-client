<?php
/**
 * ActivityLactivatorAttention
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
 * ActivityLactivatorAttention Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ActivityLactivatorAttention implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ActivityLactivatorAttention';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'increased' => 'bool',
        'suspicious' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'increased' => null,
        'suspicious' => null
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
        'increased' => 'increased',
        'suspicious' => 'suspicious'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'increased' => 'setIncreased',
        'suspicious' => 'setSuspicious'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'increased' => 'getIncreased',
        'suspicious' => 'getSuspicious'
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
        $this->container['increased'] = isset($data['increased']) ? $data['increased'] : null;
        $this->container['suspicious'] = isset($data['suspicious']) ? $data['suspicious'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets increased
     *
     * @return bool
     */
    public function getIncreased()
    {
        return $this->container['increased'];
    }

    /**
     * Sets increased
     *
     * @param bool $increased Indicates an increased activity attention
     *
     * @return $this
     */
    public function setIncreased($increased)
    {
        $this->container['increased'] = $increased;

        return $this;
    }

    /**
     * Gets suspicious
     *
     * @return bool
     */
    public function getSuspicious()
    {
        return $this->container['suspicious'];
    }

    /**
     * Sets suspicious
     *
     * @param bool $suspicious Indicates a suspicious activity attention
     *
     * @return $this
     */
    public function setSuspicious($suspicious)
    {
        $this->container['suspicious'] = $suspicious;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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

