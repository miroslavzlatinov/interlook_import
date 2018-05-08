<?php
/**
 * Created by PhpStorm.
 * User: mzlatinov
 * Date: 5/13/17
 * Time: 9:26 AM
 */

namespace App\Services;

use App\Client\Soap;

use App\Client\Soap\GetCountriesResponse;
use App\Client\Soap\GetRegionsResponse;
use App\Services\Contracts\SoapClientInterface;
use App\Client\Soap\IntegrationService;




class InterlookClient implements SoapClientInterface
{
    private $service;


    public function __construct(IntegrationService $service)
    {
        $this->service = $service;
    }


    public function Connect($username, $password)
    {
        return $this->service->Connect(['login' => $username, 'password' => $password]);

    }

    public function CheckConnect($guid)
    {
        return $this->service->CheckConnect(['guid' => $guid]);
    }

    /**
     * @return GetCountriesResponse
     */
    public function GetCountries()
    {
        $result = $this->service->GetCountries();
         $result = $result->getGetCountriesResult();
        return    $result->getCountry();

    }

    /**
     * @param $countryKey
     * @return GetRegionsResponse
     */
    public function GetRegions($countryKey)
    {
        return $this->service->GetRegions(['countryKey' => $countryKey]);
    }

    /**
     * @param $countryKey
     * @param $regionKey
     * @return Soap\GetCitiesResponse
     */

    public function GetCities($countryKey, $regionKey)
    {
        return $this->service->GetCities(['countryKey' => $countryKey, 'regionKey' => $regionKey]);

    }

    /**
     * @param $countryKey
     * @param $regionKey
     * @param $cityKey
     * @return Soap\GetHotelsResponse
     *
     */
    public function GetHotels($countryKey, $regionKey, $cityKey)
    {
        return $this->service->GetHotels(['countryKey' => $countryKey, 'regionKey' => $regionKey, 'cityKey' => $cityKey]);
    }

    /**
     * @return Soap\GetRatingsResponse
     */
    public function GetRatings()
    {
        return $this->service->GetRatings();
    }

    /**
     * @param $guid
     * @param  Soap\SPORequest $request
     * @return Soap\GetSpoListResponse
     */
    public function GetSpoList($guid, $request)
    {
        return $this->service->GetSpoList(['guid' => $guid, 'request' => $request]);
    }

    /**
     * @param $guid
     * @param  Soap\CostRequest $request
     * @return Soap\GetCostsResponse
     *
     */

    public function GetCosts($guid, $request)
    {
        return $this->service->GetCosts(['guid' => $guid, 'request' => $request]);
    }

    /**
     * @param $guid
     * @param $hotelKey
     * @param \DateTime $date
     * @param bool $UseRoomDescription
     * @param bool $LoadQuota
     * @param bool $LoadStop
     * @return Soap\GetChangeQuotaAndStopResponse
     *
     */

    public function GetChangeQuotaAndStop($guid, $hotelKey, \DateTime $date, $UseRoomDescription, $LoadQuota, $LoadStop)
    {
        return $this->service->GetChangeQuotaAndStop(['guid' => $guid,
            'hotelKey' => $hotelKey,
            'date' => $date,
            'UseRoomDescription' => $UseRoomDescription,
            'LoadQuota' => $LoadQuota,
            'LoadStop' => $LoadStop]);
    }

    /**
     * @param $guid
     * @param \DateTime $date
     * @return Soap\GetHotelQuotaStopInfoResponse
     */

    public function GetHotelQuotaStopInfo($guid, \DateTime $date)
    {
        return $this->service->GetHotelQuotaStopInfo(['guid' => $guid, 'date' => $date]);
    }

    /**
     * @param $guid
     * @param $dgKey
     * @return Soap\GetReservationResponse
     */

    public function GetReservation($guid, $dgKey)
    {
        return $this->service->GetReservation(['guid' => $guid, 'dgKey' => $dgKey]);
    }

    /**
     * @return Soap\GetRoomTypeResponse
     */

    public function GetRoomType()
    {
        return $this->service->GetRoomType();
    }

    /**
     * @return Soap\GetRoomCategories
     */

    public function GetRoomCategories()
    {
        return $this->service->GetRoomCategories();
    }

    /**
     * @param $guid
     * @return Soap\GetRoomAccommodationsResponse
     */

    public function GetAccommodations($guid)
    {
        return $this->service->GetAccommodations(['guid' => $guid]);
    }

    /**
     * @return Soap\GetPansions
     */
    public function GetPansions()
    {
        return $this->service->GetPansions();
    }

    /**
     * @return Soap\GetRoomAccommodationsResponse
     */
    public function GetRoomAccommodations()
    {
        return $this->service->GetRoomAccommodations();
    }

    /**
     * @return Soap\GetAirportResponse
     */

    public function GetAirport()
    {
        return $this->service->GetAirport();
    }

    /**
     * @return Soap\GetFlightsResponse
     */
    public function GetFlights()
    {
        return $this->service->GetFlights();
    }

    /**
     * @param $countryKey
     * @param $regionKey
     * @param $cityKey
     * @return Soap\GetTransfersResponse
     */

    public function GetTransfers($countryKey, $regionKey, $cityKey)
    {
        return $this->service->GetTransfers(['countryKey' => $countryKey, 'regionKey' => $regionKey, 'cityKey' => $cityKey]);
    }

    /**
     * @param $countryKey
     * @param $regionKey
     * @param $cityKey
     * @return Soap\GetExcursionsResponse
     *
     */

    public function GetExcursions($countryKey, $regionKey, $cityKey)
    {
        return $this->service->GetExcursions(['countryKey' => $countryKey, 'regionKey' => $regionKey, 'cityKey' => $cityKey]);
    }

    /**
     * @return Soap\GetServiceList
     */

    public function GetServiceList()
    {
        return $this->service->GetServiceList();
    }

    /**
     * @param $guid
     * @param $request
     * @return Soap\GetExtraServicesResponse
     */

    public function GetExtraServices($guid, $request)
    {
        return $this->service->GetExtraServices($guid, $request);
    }

    /**
     * @return Soap\GetTransportsResponse
     *
     */
    public function GetTransports()
    {
        return $this->service->GetTransports();
    }

    /**
     * @return Soap\GetTransferTypesResponse
     */

    public function GetTransferTypes()
    {
        return $this->service->GetTransferTypes();
    }

    /**
     * @return Soap\GetProvidersResponse
     */
    public function GetProviders()
    {
        return $this->service->GetProviders();
    }

    /**
     * @return Soap\GetServicePackageResponse
     */
    public function GetServicePackage()
    {
        return $this->service->GetServicePackage();
    }

    /**
     * @param $userToken
     * @param $reservationCode
     * @param $externalPaymentId
     * @return Soap\GetPaymentInformationResponse
     */
    public function GetPaymentInformation($userToken, $reservationCode, $externalPaymentId)
    {
        return $this->service->GetPaymentInformation([
            'userToken' => $userToken,
            'reservationCode' => $reservationCode,
            'externalPaymentId' => $externalPaymentId]);
    }

    /**
     * @return Soap\GetRatesResponse
     */
    public function GetRates()
    {
        return $this->service->GetRates();
    }

    /**
     * @return Soap\GetDLStatusesResponse
     */
    public function GetDLStatuses()
    {
        return $this->service->GetDLStatuses();
    }

    /**
     * @param $guid
     * @param $reserv
     * @return Soap\CreateReservationResponse
     */
    public function CreateReservation($guid, $reserv)
    {
        return $this->service->CreateReservation(['guid' => $guid, 'reserv' => $reserv]);
    }

    /**
     * @param $userToken
     * @param \DateTime $date
     * @param $sum
     * @param $currencyIsoCode
     * @param $reservationCode
     * @param $paymentId
     * @return Soap\CreatePaymentResponse
     */
    public function CreatePayment($userToken, \DateTime $date, $sum, $currencyIsoCode, $reservationCode, $paymentId)
    {
        return $this->service->CreatePayment([
            'userToken' => $userToken,
            'date' => $date,
            'sum' => $sum,
            'currencyIsoCode' => $currencyIsoCode,
            'reservationCode' => $reservationCode,
            'paymentId' => $paymentId]);
    }


    /**
     * @param $guid
     * @param $dgKey
     * @param $annulReasonID
     * @param $note
     * @return Soap\CancelReservation
     */
    public function CancelReservation($guid, $dgKey, $annulReasonID, $note)
    {
        return $this->service->CancelReservation(
               [
                   'guid' => $guid,
                   'dgKey' => $dgKey,
                   'annulReasonID' => $annulReasonID,
                   'note' => $note
               ]);

    }

    /**
     * @param $guid
     * @param $request
     * //@return Soap\SearchHotelServicesResponse
     *
     */
    public function SearchHotelServices($guid, $request)
    {
        return $this->service->SearchHotelServices([
            'guid' => $guid,
             'request' => $request
            ]

        );
    }

    /**
     * @param $roomTypeId
     * @param $roomCategoryId
     * @return Soap\GetRoomAccommodationsResponse
     */
    public function GetRoomDescriptions($roomTypeId, $roomCategoryId)
    {
        return $this->service->GetRoomDescriptions([
            'roomTypeId' => $roomTypeId ,
             'roomCategoryId' => $roomCategoryId
            ]);


    }

    /**
     * @param $guid
     * @param $request
     * @return Soap\SearchHotelServicesMinHotelResponse
     */
    public function SearchActualCostCalculationVariant($guid, $request)
    {

        return $this->service->SearchActualCostCalculationVariant([
             'guid' => $guid ,

             'request' => $request
        ]);
    }

    /**
     * @param  string $guid
     * @param Soap\SearchHotelServiceRequest $request
     * @return Soap\SearchActualCostCalculationVariantResponse
     *
     */
    public function SearchHotelServicesMinHotel($guid, $request)
    {

        return $this->service->SearchHotelServicesMinHotel([
                'guid' => $guid ,

                'request' => $request
            ]
        );
    }


    public function __getLastRequest()
     {
         return $this->service->__getLastRequest();
     }

    public function __getLastResponse()
    {
        return $this->service->__getLastResponse();
    }
}