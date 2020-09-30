<?php
/**
 * HeatDetectionSummary
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
 * HeatDetectionSummary Class Doc Comment
 *
 * @category Class
 * @description The heat behaviour of a cow is summarized per day. With these summaries you get detailed insights in the long-term heat behaviour of an individual animal. It shows on which historical days an animal has shown heats before, and how strong the heats were (expressed by the number of increased activity periods).  If end_date is not specified, the current datetime will be used. If start_date is not specified the start datetime will be the end_date – 10 days. The maximum period to request data of is 1 year.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HeatDetectionSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'heat_detection_summary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'animal_id' => 'int',
        'date' => '\DateTime',
        'total' => 'int',
        'average' => 'int',
        'maximum_x_factor' => 'float',
        'increased_attention_periods' => 'int',
        'attentions' => '\Swagger\Client\Model\ActivitySummaryAttention',
        'label_type' => 'int',
        'seconds' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'animal_id' => 'int32',
        'date' => 'date-time',
        'total' => 'int32',
        'average' => 'int32',
        'maximum_x_factor' => 'float',
        'increased_attention_periods' => 'int32',
        'attentions' => null,
        'label_type' => 'int32',
        'seconds' => 'int32'
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
        'date' => 'date',
        'total' => 'total',
        'average' => 'average',
        'maximum_x_factor' => 'maximum_x_factor',
        'increased_attention_periods' => 'increased_attention_periods',
        'attentions' => 'attentions',
        'label_type' => 'label_type',
        'seconds' => 'seconds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'animal_id' => 'setAnimalId',
        'date' => 'setDate',
        'total' => 'setTotal',
        'average' => 'setAverage',
        'maximum_x_factor' => 'setMaximumXFactor',
        'increased_attention_periods' => 'setIncreasedAttentionPeriods',
        'attentions' => 'setAttentions',
        'label_type' => 'setLabelType',
        'seconds' => 'setSeconds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'animal_id' => 'getAnimalId',
        'date' => 'getDate',
        'total' => 'getTotal',
        'average' => 'getAverage',
        'maximum_x_factor' => 'getMaximumXFactor',
        'increased_attention_periods' => 'getIncreasedAttentionPeriods',
        'attentions' => 'getAttentions',
        'label_type' => 'getLabelType',
        'seconds' => 'getSeconds'
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

    const LABEL_TYPE_0 = 0;
    const LABEL_TYPE_1 = 1;
    const LABEL_TYPE_2 = 2;
    const LABEL_TYPE_3 = 3;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLabelTypeAllowableValues()
    {
        return [
            self::LABEL_TYPE_0,
            self::LABEL_TYPE_1,
            self::LABEL_TYPE_2,
            self::LABEL_TYPE_3,
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
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['average'] = isset($data['average']) ? $data['average'] : null;
        $this->container['maximum_x_factor'] = isset($data['maximum_x_factor']) ? $data['maximum_x_factor'] : null;
        $this->container['increased_attention_periods'] = isset($data['increased_attention_periods']) ? $data['increased_attention_periods'] : null;
        $this->container['attentions'] = isset($data['attentions']) ? $data['attentions'] : null;
        $this->container['label_type'] = isset($data['label_type']) ? $data['label_type'] : null;
        $this->container['seconds'] = isset($data['seconds']) ? $data['seconds'] : null;
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
        $allowedValues = $this->getLabelTypeAllowableValues();
        if (!is_null($this->container['label_type']) && !in_array($this->container['label_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'label_type', must be one of '%s'",
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
     * @param int $id The summary ID
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
     * @param int $animal_id The ID of the animal
     *
     * @return $this
     */
    public function setAnimalId($animal_id)
    {
        $this->container['animal_id'] = $animal_id;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date The start date and time of the summary
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets total
     *
     * @return int
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int $total The total activity
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets average
     *
     * @return int
     */
    public function getAverage()
    {
        return $this->container['average'];
    }

    /**
     * Sets average
     *
     * @param int $average The average activity of the animal in the 10 days before the summary date
     *
     * @return $this
     */
    public function setAverage($average)
    {
        $this->container['average'] = $average;

        return $this;
    }

    /**
     * Gets maximum_x_factor
     *
     * @return float
     */
    public function getMaximumXFactor()
    {
        return $this->container['maximum_x_factor'];
    }

    /**
     * Sets maximum_x_factor
     *
     * @param float $maximum_x_factor The maximum x-factor of the day. This is the deviated activity indicator. The higher the x-factor the more active a cow is compared to its typical activity level
     *
     * @return $this
     */
    public function setMaximumXFactor($maximum_x_factor)
    {
        $this->container['maximum_x_factor'] = $maximum_x_factor;

        return $this;
    }

    /**
     * Gets increased_attention_periods
     *
     * @return int
     */
    public function getIncreasedAttentionPeriods()
    {
        return $this->container['increased_attention_periods'];
    }

    /**
     * Sets increased_attention_periods
     *
     * @param int $increased_attention_periods Total number of periods with an active attention (a period is a 2-hour block)
     *
     * @return $this
     */
    public function setIncreasedAttentionPeriods($increased_attention_periods)
    {
        $this->container['increased_attention_periods'] = $increased_attention_periods;

        return $this;
    }

    /**
     * Gets attentions
     *
     * @return \Swagger\Client\Model\ActivitySummaryAttention
     */
    public function getAttentions()
    {
        return $this->container['attentions'];
    }

    /**
     * Sets attentions
     *
     * @param \Swagger\Client\Model\ActivitySummaryAttention $attentions Summary attention types
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
        $allowedValues = $this->getLabelTypeAllowableValues();
        if (!is_null($label_type) && !in_array($label_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'label_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['label_type'] = $label_type;

        return $this;
    }

    /**
     * Gets seconds
     *
     * @return int
     */
    public function getSeconds()
    {
        return $this->container['seconds'];
    }

    /**
     * Sets seconds
     *
     * @param int $seconds The total duration (in seconds) of measured data for this date. For a typical day this should be 86400 s, for days with daylight saving shifts it can be +/- 3600 s. For other values: this indicates that measured data does not represent the full day and is not reliable.
     *
     * @return $this
     */
    public function setSeconds($seconds)
    {
        $this->container['seconds'] = $seconds;

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


