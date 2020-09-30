# HeatDetectionSummary

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The summary ID | 
**animal_id** | **int** | The ID of the animal | 
**date** | [**\DateTime**](\DateTime.md) | The start date and time of the summary | [optional] 
**total** | **int** | The total activity | [optional] 
**average** | **int** | The average activity of the animal in the 10 days before the summary date | [optional] 
**maximum_x_factor** | **float** | The maximum x-factor of the day. This is the deviated activity indicator. The higher the x-factor the more active a cow is compared to its typical activity level | [optional] 
**increased_attention_periods** | **int** | Total number of periods with an active attention (a period is a 2-hour block) | [optional] 
**attentions** | [**\Swagger\Client\Model\ActivitySummaryAttention**](ActivitySummaryAttention.md) | Summary attention types | [optional] 
**label_type** | **int** | The label type; 0: Unknown, 1: Intime, 2: Realtime Leg, 3: Realtime Neck | [optional] 
**seconds** | **int** | The total duration (in seconds) of measured data for this date. For a typical day this should be 86400 s, for days with daylight saving shifts it can be +/- 3600 s. For other values: this indicates that measured data does not represent the full day and is not reliable. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


