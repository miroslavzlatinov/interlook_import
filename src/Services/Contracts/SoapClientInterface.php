<?php

/**
 * Created by PhpStorm.
 * User: mzlatinov
 * Date: 5/13/17
 * Time: 8:32 AM
 */
namespace App\Services\Contracts;

interface SoapClientInterface
{

    public function Connect($username, $password);

    public function CheckConnect($guid);

    public function GetCountries();

    public function GetRegions($countryKey);

    public function GetCities($countryKey, $regionKey);


    public function GetHotels($countryKey, $regionKey, $cityKey);

    public function GetRatings();

    public function GetSpoList($guid, $request);

    public function GetCosts($guid, $request);

    public function GetChangeQuotaAndStop($guid, $hotelKey, \DateTime $date, $UseRoomDescription, $LoadQuota, $LoadStop);

    public function GetHotelQuotaStopInfo($guid, \DateTime $date);

    public function GetReservation($guid, $dgKey);

    public function GetRoomType();

    public function GetRoomCategories();

    public function GetAccommodations($guid);

    public function GetPansions();

    public function GetRoomAccommodations();

    public function GetAirport();

    public function GetFlights();

    public function GetTransfers($countryKey, $regionKey, $cityKey);

    public function GetExcursions($countryKey, $regionKey, $cityKey);

    public function GetServiceList();

    public function GetExtraServices($guid, $request);

    public function GetTransports();

    public function GetTransferTypes();

    public function GetProviders();

    public function GetServicePackage();

    public function GetPaymentInformation($userToken, $reservationCode, $externalPaymentId);

    public function GetRates();

    public function GetDLStatuses();

    public function CreateReservation($guid, $reserv);

    public function CreatePayment($userToken, \DateTime $date, $sum, $currencyIsoCode, $reservationCode, $paymentId);

    public function CancelReservation($guid, $dgKey, $annulReasonID, $note);

    public function SearchHotelServices($guid, $request);

    public function GetRoomDescriptions($roomTypeId, $roomCategoryId);

    public function SearchActualCostCalculationVariant($guid, $request);

    public function SearchHotelServicesMinHotel($guid,$request);



}