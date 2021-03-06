# SwaggerClient-php
# Access Tokens With each endpoint information can be retrieved for one installation only. The access token controls which installation will be accessed. This means that you need to use different access tokens for different installations.      # Scopes For each installation, different packages of data ('Connections') are available. On connect.nedap-livestockmanagement.com/nedap-livestock-connect/ an overview of the different available packages and the corresponding enpdoints is given. The basic connection is free to use, but for some of the other connections additional charges will be applied. In order to get access to other connections your application needs permission from us, and from the specific farmer. The first part can be arranged by contacting Nedap, the second part by OAuth2 scopes.  In OAuth2, scopes let you specify which data your application needs from a user. When requesting permission from a farmer to access his data, you specify which scopes you need, what kind of data you want. If the farmer accepts, you will receive a token for those specified scopes. With that token, you can only access API Endpoints that are allowed by those scopes, since every endpoint needs a specific scope to access it.  Summarized:    - Endpoints are protected by scopes. To access them, you need a token with the correct scopes.    - When requesting access to a farm, by default you get access to the scope 'account', which gives access to basic data. If you need more, send those scopes along with the request.    - You can only request scopes that are permitted by your application. If you need more, contact us.  To access the different available connections, use the following scopes:  ## Cows  ### Basic Connection - account: Access to basic data: animals, groups, and calendar events  ### Attentions Connection - account: Access to attentions  ### Heat Detection Advanced Connection - heat_detection: Access to heat detection  ### Health and Management Advanced Connection - behaviour: Access to behavioural data: activity, eating, standing, lying, standups and walking - rumination: Access to rumination data - inactive: Access to inactive data  ### Sire Advice Connection - sire_advice: Access to sire advices  ## Pigs  ### Basic Connection - account: Access to basic data: animals, groups, calendar events and attentions  ### Sow Weights Connection - weights: Access to weighing data  ### Sorting Connection - sorting: Access to sorting data  ### Pig Performance Testing Connection - pig_performance_testing: Access to pig performance testing data  ### Feeding Connection - feeding_animal_summaries: Access to feeding animal summaries - feeding_location_summaries: Access to feeding location summaries - feeding_extended_location_summaries: Access to feeding location summaries including station totals  # Standards  In the API we use the following standards:  - Timestamps are always in UTC in ISO 8601. An example would be '2017-10-23T20:21:01Z'. - Weights are always in grams.  # HTTP Error codes  We use the following HTTP codes to signify errors: - 400 (Invalid data): The data that is sent is invalid (for example an incorrect Animal object). The return body contains pointers on the specific errors. - 401 (Unauthorized): The provided token is not valid or has expired. - 403 (Forbidden): The provided token is valid but has no access to the accessed endpoint. - 404 (Not found): The object that is requested is not found. - 500 (Server error): Something unexpected went wrong on the server.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: v1
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com//.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AnimalLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$animal_id = 56; // int | Id of the animal

try {
    $result = $apiInstance->animalLocation($animal_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnimalLocationsApi->animalLocation: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.nedap-bi.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AnimalLocationsApi* | [**animalLocation**](docs/Api/AnimalLocationsApi.md#animallocation) | **GET** /v1/animal_locations/{animal_id} | Returns the location of an animal
*AnimalLocationsApi* | [**animalLocations**](docs/Api/AnimalLocationsApi.md#animallocations) | **GET** /v1/animal_locations | Returns all animal locations
*AnimalLocationsApi* | [**createAnimalLocation**](docs/Api/AnimalLocationsApi.md#createanimallocation) | **POST** /v1/animal_locations | Creates an animal location.
*AnimalLocationsApi* | [**updateAnimalLocation**](docs/Api/AnimalLocationsApi.md#updateanimallocation) | **PUT** /v1/animal_locations/{animal_id} | Updates an animal location.
*AnimalsApi* | [**animalById**](docs/Api/AnimalsApi.md#animalbyid) | **GET** /v1/animals/{id} | Get animal
*AnimalsApi* | [**animalByUuid**](docs/Api/AnimalsApi.md#animalbyuuid) | **GET** /v1/animals/with_uuid/{uuid} | Get an animal by UUID
*AnimalsApi* | [**animalHistoricLocation**](docs/Api/AnimalsApi.md#animalhistoriclocation) | **GET** /v1/animals/{id}/locations | Historic location information of an animal
*AnimalsApi* | [**animals**](docs/Api/AnimalsApi.md#animals) | **GET** /v1/animals | Get all animals
*AnimalsApi* | [**createAnimal**](docs/Api/AnimalsApi.md#createanimal) | **POST** /v1/animals | Create an animal
*AnimalsApi* | [**deleteAnimal**](docs/Api/AnimalsApi.md#deleteanimal) | **DELETE** /v1/animals/{id} | Delete an animal
*AnimalsApi* | [**updateAnimal**](docs/Api/AnimalsApi.md#updateanimal) | **PUT** /v1/animals/{id} | Update an animal
*AttentionsApi* | [**animalAttentions**](docs/Api/AttentionsApi.md#animalattentions) | **GET** /v1/attentions/animal_attentions | Get all attentions related to a specific animal
*AttentionsApi* | [**attentionById**](docs/Api/AttentionsApi.md#attentionbyid) | **GET** /v1/attentions/{id} | Get a single attention
*AttentionsApi* | [**attentions**](docs/Api/AttentionsApi.md#attentions) | **GET** /v1/attentions | Get all attentions
*AttentionsApi* | [**groupAttentions**](docs/Api/AttentionsApi.md#groupattentions) | **GET** /v1/attentions/group_attentions | Get all attentions related to a specific group
*AttentionsApi* | [**markAttentionAsSeen**](docs/Api/AttentionsApi.md#markattentionasseen) | **PUT** /v1/attentions/{id}/seen | Mark an attention as seen
*CalendarApi* | [**calendarEventById**](docs/Api/CalendarApi.md#calendareventbyid) | **GET** /v1/calendar/{id} | Return a calendar event.
*CalendarApi* | [**calendarEvents**](docs/Api/CalendarApi.md#calendarevents) | **GET** /v1/calendar | Returns all calendar events.
*CalendarApi* | [**calendarEventsForCurrentCycle**](docs/Api/CalendarApi.md#calendareventsforcurrentcycle) | **GET** /v1/calendar/current_cycle | Returns all calendar events of the current cycle
*CalendarApi* | [**createBirthEvent**](docs/Api/CalendarApi.md#createbirthevent) | **POST** /v1/calendar/birth_event | Creates a birth event.
*CalendarApi* | [**createCalvingEvent**](docs/Api/CalendarApi.md#createcalvingevent) | **POST** /v1/calendar/calving_event | Creates a calving event.
*CalendarApi* | [**createDryoffEvent**](docs/Api/CalendarApi.md#createdryoffevent) | **POST** /v1/calendar/dryoff_event | Creates a dryoff event.
*CalendarApi* | [**createHeatEvent**](docs/Api/CalendarApi.md#createheatevent) | **POST** /v1/calendar/heat_event | Creates a heat event.
*CalendarApi* | [**createInseminationEvent**](docs/Api/CalendarApi.md#createinseminationevent) | **POST** /v1/calendar/insemination_event | Creates an insemination event.
*CalendarApi* | [**createKeepOpenEvent**](docs/Api/CalendarApi.md#createkeepopenevent) | **POST** /v1/calendar/keep_open_event | Creates a keep-open event.
*CalendarApi* | [**createPregnancyCheckEvent**](docs/Api/CalendarApi.md#createpregnancycheckevent) | **POST** /v1/calendar/pregnancy_check_event | Creates a pregnancy-check event.
*CalendarApi* | [**deleteAllCalendarEvents**](docs/Api/CalendarApi.md#deleteallcalendarevents) | **DELETE** /v1/animal/{animal_id}/calendar | Deletes all calendar events for an animal.
*CalendarApi* | [**deleteCalendarEvent**](docs/Api/CalendarApi.md#deletecalendarevent) | **DELETE** /v1/calendar/{id} | Deletes a calendar event.
*CalendarApi* | [**updateBirthEvent**](docs/Api/CalendarApi.md#updatebirthevent) | **PUT** /v1/calendar/birth_event/{id} | Updates a birth event.
*CalendarApi* | [**updateCalvingEvent**](docs/Api/CalendarApi.md#updatecalvingevent) | **PUT** /v1/calendar/calving_event/{id} | Updates a calving event.
*CalendarApi* | [**updateDryoffEvent**](docs/Api/CalendarApi.md#updatedryoffevent) | **PUT** /v1/calendar/dryoff_event/{id} | Updates a dryoff event.
*CalendarApi* | [**updateHeatEvent**](docs/Api/CalendarApi.md#updateheatevent) | **PUT** /v1/calendar/heat_event/{id} | Updates a heat event.
*CalendarApi* | [**updateInseminationEvent**](docs/Api/CalendarApi.md#updateinseminationevent) | **PUT** /v1/calendar/insemination_event/{id} | Updates an insemination event.
*CalendarApi* | [**updateKeepOpenEvent**](docs/Api/CalendarApi.md#updatekeepopenevent) | **PUT** /v1/calendar/keep_open_event/{id} | Updates a keep-open event.
*CalendarApi* | [**updatePregnancyCheckEvent**](docs/Api/CalendarApi.md#updatepregnancycheckevent) | **PUT** /v1/calendar/pregnancy_check_event/{id} | Updates an Pregnancy-check event.
*FeedingApi* | [**feedingAnimalSummaries**](docs/Api/FeedingApi.md#feedinganimalsummaries) | **GET** /v1/feeding/animal_summaries | feeding animal summaries
*FeedingApi* | [**feedingExtendedLocationSummaries**](docs/Api/FeedingApi.md#feedingextendedlocationsummaries) | **GET** /v1/feeding/extended_location_summaries | feeding extended location summaries
*FeedingApi* | [**feedingLocationSummaries**](docs/Api/FeedingApi.md#feedinglocationsummaries) | **GET** /v1/feeding/location_summaries | feeding location summaries
*GroupsApi* | [**createGroup**](docs/Api/GroupsApi.md#creategroup) | **POST** /v1/groups | Creates a group
*GroupsApi* | [**groupById**](docs/Api/GroupsApi.md#groupbyid) | **GET** /v1/groups/{id} | Returns the group with the given id
*GroupsApi* | [**groups**](docs/Api/GroupsApi.md#groups) | **GET** /v1/groups | Returns all groups for an installation
*GroupsApi* | [**updateGroup**](docs/Api/GroupsApi.md#updategroup) | **PUT** /v1/groups/{id} | Updates a Group
*HealthAndManagementAdvancedApi* | [**animalEatingDaySummaries**](docs/Api/HealthAndManagementAdvancedApi.md#animaleatingdaysummaries) | **GET** /v1/behaviour/eating/animal/day_summaries | eating day summaries of an animal
*HealthAndManagementAdvancedApi* | [**animalInactiveDaySummaries**](docs/Api/HealthAndManagementAdvancedApi.md#animalinactivedaysummaries) | **GET** /v1/behaviour/inactive/animal/day_summaries | inactive day summaries of an animal
*HealthAndManagementAdvancedApi* | [**animalLyingDaySummaries**](docs/Api/HealthAndManagementAdvancedApi.md#animallyingdaysummaries) | **GET** /v1/behaviour/lying/animal/day_summaries | lying day summaries of an animal
*HealthAndManagementAdvancedApi* | [**animalRuminationDaySummaries**](docs/Api/HealthAndManagementAdvancedApi.md#animalruminationdaysummaries) | **GET** /v1/behaviour/rumination/animal/day_summaries | rumination day summaries of an animal
*HealthAndManagementAdvancedApi* | [**animalStandingDaySummaries**](docs/Api/HealthAndManagementAdvancedApi.md#animalstandingdaysummaries) | **GET** /v1/behaviour/standing/animal/day_summaries | standing day summaries of an animal
*HealthAndManagementAdvancedApi* | [**animalStandupsDaySummaries**](docs/Api/HealthAndManagementAdvancedApi.md#animalstandupsdaysummaries) | **GET** /v1/behaviour/standups/animal/day_summaries | standups day summaries of an animal
*HealthAndManagementAdvancedApi* | [**animalStepsDaySummaries**](docs/Api/HealthAndManagementAdvancedApi.md#animalstepsdaysummaries) | **GET** /v1/behaviour/steps/animal/day_summaries | step day summaries of an animal
*HealthAndManagementAdvancedApi* | [**animalWalkingDaySummaries**](docs/Api/HealthAndManagementAdvancedApi.md#animalwalkingdaysummaries) | **GET** /v1/behaviour/walking/animal/day_summaries | walking day summaries of an animal
*HealthAndManagementAdvancedApi* | [**groupActivityDaySummaries**](docs/Api/HealthAndManagementAdvancedApi.md#groupactivitydaysummaries) | **GET** /v1/behaviour/steps/group/day_summaries | step day summaries of an animal group
*HealthAndManagementAdvancedApi* | [**groupEatingDaySummaries**](docs/Api/HealthAndManagementAdvancedApi.md#groupeatingdaysummaries) | **GET** /v1/behaviour/eating/group/day_summaries | eating day summaries of an animal group
*HealthAndManagementAdvancedApi* | [**groupInactiveDaySummaries**](docs/Api/HealthAndManagementAdvancedApi.md#groupinactivedaysummaries) | **GET** /v1/behaviour/inactive/group/day_summaries | inactive day summaries of an animal group
*HealthAndManagementAdvancedApi* | [**groupLyingDaySummaries**](docs/Api/HealthAndManagementAdvancedApi.md#grouplyingdaysummaries) | **GET** /v1/behaviour/lying/group/day_summaries | lying day summaries of an animal group
*HealthAndManagementAdvancedApi* | [**groupRuminationDaySummaries**](docs/Api/HealthAndManagementAdvancedApi.md#groupruminationdaysummaries) | **GET** /v1/behaviour/rumination/group/day_summaries | rumination day summaries of an animal group
*HealthAndManagementAdvancedApi* | [**groupStandingDaySummaries**](docs/Api/HealthAndManagementAdvancedApi.md#groupstandingdaysummaries) | **GET** /v1/behaviour/standing/group/day_summaries | standing day summaries of an animal group
*HealthAndManagementAdvancedApi* | [**groupStandupsDaySummaries**](docs/Api/HealthAndManagementAdvancedApi.md#groupstandupsdaysummaries) | **GET** /v1/behaviour/standups/group/day_summaries | standups day summaries of an animal group
*HealthAndManagementAdvancedApi* | [**groupWalkingDaySummaries**](docs/Api/HealthAndManagementAdvancedApi.md#groupwalkingdaysummaries) | **GET** /v1/behaviour/walking/group/day_summaries | walking day summaries of an animal group
*HeatDetectionAdvancedApi* | [**activityDaySummaries**](docs/Api/HeatDetectionAdvancedApi.md#activitydaysummaries) | **GET** /v1/heat_detection/activity/animal/day_summaries | Get activity day summaries of an animal
*HeatDetectionAdvancedApi* | [**activityTwoHourData**](docs/Api/HeatDetectionAdvancedApi.md#activitytwohourdata) | **GET** /v1/heat_detection/activity/animal/two_hour_data | Get two hour activities of an animal
*InstallationsApi* | [**installations**](docs/Api/InstallationsApi.md#installations) | **GET** /v1/installations | Get information about the installation’
*LocationsApi* | [**locationById**](docs/Api/LocationsApi.md#locationbyid) | **GET** /v1/locations/{id} | Return a Location.
*LocationsApi* | [**locationByUuid**](docs/Api/LocationsApi.md#locationbyuuid) | **GET** /v1/locations/with_uuid/{uuid} | Find location by uuid
*LocationsApi* | [**locations**](docs/Api/LocationsApi.md#locations) | **GET** /v1/locations | Returns all Locations.
*PigPerformanceTestingApi* | [**animalVisitsByAnimal**](docs/Api/PigPerformanceTestingApi.md#animalvisitsbyanimal) | **GET** /v1/pig_performance_testing/animal/animal_visits | animal visits for an animal
*PigPerformanceTestingApi* | [**animalVisitsByLocation**](docs/Api/PigPerformanceTestingApi.md#animalvisitsbylocation) | **GET** /v1/pig_performance_testing/location/animal_visits | animal visits for a location
*SireAdviceApi* | [**createSireAdvice**](docs/Api/SireAdviceApi.md#createsireadvice) | **POST** /v1/sire_advices | Create a sire advice
*SireAdviceApi* | [**deleteSireAdvice**](docs/Api/SireAdviceApi.md#deletesireadvice) | **DELETE** /v1/sire_advices/{id} | Delete an sire advice
*SireAdviceApi* | [**sireAdviceById**](docs/Api/SireAdviceApi.md#sireadvicebyid) | **GET** /v1/sire_advices/{id} | Get a single sire advice by id
*SireAdviceApi* | [**sireAdvices**](docs/Api/SireAdviceApi.md#sireadvices) | **GET** /v1/sire_advices | Get all sire advices
*SireAdviceApi* | [**updateSireAdvice**](docs/Api/SireAdviceApi.md#updatesireadvice) | **PUT** /v1/sire_advices/{id} | Update a single sire advice
*SortingApi* | [**sortingDeliverySummaries**](docs/Api/SortingApi.md#sortingdeliverysummaries) | **GET** /v1/sorting/delivery_summaries | sorting delivery summaries
*SortingApi* | [**sortingLocationSummaries**](docs/Api/SortingApi.md#sortinglocationsummaries) | **GET** /v1/sorting/location/location_summaries | sorting location summaries
*SowWeightsApi* | [**animalWeekSummaries**](docs/Api/SowWeightsApi.md#animalweeksummaries) | **GET** /v1/weights/sows/animal/week_summaries | week summaries of an animal
*SowWeightsApi* | [**locationWeekSummaries**](docs/Api/SowWeightsApi.md#locationweeksummaries) | **GET** /v1/weights/sows/location/week_summaries | week summaries for all animals on a location


## Documentation For Models

 - [ActivityData](docs/Model/ActivityData.md)
 - [ActivityLactivatorAttention](docs/Model/ActivityLactivatorAttention.md)
 - [ActivitySummaryAttention](docs/Model/ActivitySummaryAttention.md)
 - [Animal](docs/Model/Animal.md)
 - [AnimalHistoricLocation](docs/Model/AnimalHistoricLocation.md)
 - [AnimalLocation](docs/Model/AnimalLocation.md)
 - [AnimalSummary](docs/Model/AnimalSummary.md)
 - [AnimalVisit](docs/Model/AnimalVisit.md)
 - [AnimalWeekSummary](docs/Model/AnimalWeekSummary.md)
 - [Attention](docs/Model/Attention.md)
 - [AttentionSubject](docs/Model/AttentionSubject.md)
 - [CalendarEvent](docs/Model/CalendarEvent.md)
 - [EatingSummary](docs/Model/EatingSummary.md)
 - [Error](docs/Model/Error.md)
 - [ExitSummary](docs/Model/ExitSummary.md)
 - [ExtendedLocationSummary](docs/Model/ExtendedLocationSummary.md)
 - [ExternalToken](docs/Model/ExternalToken.md)
 - [FeedPartTotal](docs/Model/FeedPartTotal.md)
 - [Group](docs/Model/Group.md)
 - [HeatDetectionSummary](docs/Model/HeatDetectionSummary.md)
 - [InactiveSummary](docs/Model/InactiveSummary.md)
 - [Installation](docs/Model/Installation.md)
 - [InstallationAnimal](docs/Model/InstallationAnimal.md)
 - [LicenseItem](docs/Model/LicenseItem.md)
 - [Location](docs/Model/Location.md)
 - [LocationPeriodBehaviour](docs/Model/LocationPeriodBehaviour.md)
 - [LocationSummary](docs/Model/LocationSummary.md)
 - [LocationWeekSummary](docs/Model/LocationWeekSummary.md)
 - [LyingSummary](docs/Model/LyingSummary.md)
 - [PeriodBehaviour](docs/Model/PeriodBehaviour.md)
 - [PostV1Animals](docs/Model/PostV1Animals.md)
 - [PostV1SireAdvices](docs/Model/PostV1SireAdvices.md)
 - [RuminationSummary](docs/Model/RuminationSummary.md)
 - [SireAdvice](docs/Model/SireAdvice.md)
 - [SortingDeliverySummary](docs/Model/SortingDeliverySummary.md)
 - [SortingLocationSummary](docs/Model/SortingLocationSummary.md)
 - [StandingSummary](docs/Model/StandingSummary.md)
 - [StandupsSummary](docs/Model/StandupsSummary.md)
 - [StationTotal](docs/Model/StationTotal.md)
 - [StepsSummary](docs/Model/StepsSummary.md)
 - [WalkingSummary](docs/Model/WalkingSummary.md)
 - [Weight](docs/Model/Weight.md)
 - [WeightVisit](docs/Model/WeightVisit.md)


## Documentation For Authorization


## api_key

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header

## authorization_code

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://nedap-bi.com/oauth/authorize
- **Scopes**: 
 - **account**: Access to basic data: animals, groups, calendar events and attentions
 - **sire_advice**: Access to sire advices
 - **behaviour**: Access to behavioural data: activity, eating, standing, lying, standups and walking
 - **rumination**: Access to rumination data
 - **inactive**: Access to inactive data
 - **weights**: Access to weighing data
 - **pig_performance_testing**: Access to pig performance testing data
 - **sorting**: Access to sorting data
 - **feeding_animal_summaries**: Access to feeding animal summaries
 - **feeding_location_summaries**: Access to feeding location summaries
 - **feeding_extended_location_summaries**: Access to feeding location summaries including station totals
 - **animal_label_information**: Access to animal label information

## implicit

- **Type**: OAuth
- **Flow**: implicit
- **Authorization URL**: https://nedap-bi.com/oauth/authorize
- **Scopes**: 
 - **account**: Access to basic data: animals, groups, calendar events and attentions
 - **sire_advice**: Access to sire advices
 - **behaviour**: Access to behavioural data: activity, eating, standing, lying, standups and walking
 - **rumination**: Access to rumination data
 - **inactive**: Access to inactive data
 - **weights**: Access to weighing data
 - **pig_performance_testing**: Access to pig performance testing data
 - **sorting**: Access to sorting data
 - **feeding_animal_summaries**: Access to feeding animal summaries
 - **feeding_location_summaries**: Access to feeding location summaries
 - **feeding_extended_location_summaries**: Access to feeding location summaries including station totals
 - **animal_label_information**: Access to animal label information


## Author




