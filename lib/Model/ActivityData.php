<?php
/**
 * ActivityData
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
 * ActivityData Class Doc Comment
 *
 * @category Class
 * @description The heat attentions are generated from the measured activity of an animal. It is compared to its activity during the same period in the past 10 days resulting in a x-factor, a deviated activity indicator. If the number of consecutive periods exceed a specific threshold a heat attention is generated. This endpoint gives access to the two hour activities and corresponding x-factors.  If end_date is not specified, the current datetime will be used. If start_date is not specified the start datetime will be the end_date – 10 days. The maximum period to request data of is 1 month.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ActivityData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'activity_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'animal_id' => 'int',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'x_factor' => 'float',
        'attentions' => '\Swagger\Client\Model\ActivityLactivatorAttention',
        'label_type' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'animal_id' => 'int32',
        'start_date' => 'date-time',
        'end_date' => 'date-time',
        'x_factor' => 'float',
        'attentions' => null,
        'label_type' => 'int32'
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
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'x_factor' => 'x_factor',
        'attentions' => 'attentions',
        'label_type' => 'label_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'animal_id' => 'setAnimalId',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'x_factor' => 'setXFactor',
        'attentions' => 'setAttentions',
        'label_type' => 'setLabelType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'animal_id' => 'getAnimalId',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'x_factor' => 'getXFactor',
        'attentions' => 'getAttentions',
        'label_type' => 'getLabelType'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['animal_id'] = isset($data['animal_id']) ? $data['animal_id'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['x_factor'] = isset($data['x_factor']) ? $data['x_factor'] : null;
        $this->container['attentions'] = isset($data['attentions']) ? $data['attentions'] : null;
        $this->container['label_type'] = isset($data['label_type']) ? $data['label_type'] : null;
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
     * @param int $id The activity id
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
     * @param int $animal_id The id of the animal this activity belongs to
     *
     * @return $this
     */
    public function setAnimalId($animal_id)
    {
        $this->container['animal_id'] = $animal_id;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date The start datetime of the activity
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date The end datetime of the activity
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets x_factor
     *
     * @return float
     */
    public function getXFactor()
    {
        return $this->container['x_factor'];
    }

    /**
     * Sets x_factor
     *
     * @param float $x_factor The x factor of this period
     *
     * @return $this
     */
    public function setXFactor($x_factor)
    {
        $this->container['x_factor'] = $x_factor;

        return $this;
    }

    /**
     * Gets attentions
     *
     * @return \Swagger\Client\Model\ActivityLactivatorAttention
     */
    public function getAttentions()
    {
        return $this->container['attentions'];
    }

    /**
     * Sets attentions
     *
     * @param \Swagger\Client\Model\ActivityLactivatorAttention $attentions Summary attention types
     *
     * @return $this
     */
    public function setAttentions($attentions)
    {
        $this->container['attentions'] = $attentions;

        return $this;
    }

    /**
     * Gets label_type
     *
     * @return int
     */
    public function getLabelType()
    {
        return $this->container['label_type'];
    }

    /**
     * Sets label_type
     *
     * @param int $label_type The label type; 0: Unknown, 1: Intime, 2: Realtime Leg, 3: Realtime Neck
     *
     * @return $this
     */
    public function setLabelType($label_type)
    {
        $this->container['label_type'] = $label_type;

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


