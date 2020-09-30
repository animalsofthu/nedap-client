# Installation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Installation id | 
**serial_number** | **string** | License code of the installation. The license code is a global unique number-letter combination. | 
**country** | **string** | The country where the installation is located | [optional] 
**version** | **string** | Software version that is running on the installation | [optional] 
**timezone** | **string** | The timezone name of the installation according to tz database (ICANN) | [optional] 
**last_sync** | [**\DateTime**](\DateTime.md) | The date and time of the last time this installation synchronized with the server | [optional] 
**last_sync_cleared** | [**\DateTime**](\DateTime.md) | The date and time of the last time the data for this installation was cleared | [optional] 
**external_id** | **string** | An additional ID used for specific purposes, can be ignored | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


