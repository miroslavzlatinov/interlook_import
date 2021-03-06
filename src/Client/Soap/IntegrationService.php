<?php

namespace App\Client\Soap;
use Symfony\Component\Config\Definition\Exception\Exception;

class IntegrationService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'Connect' => 'App\\Client\\Soap\\Connect',
      'ConnectResponse' => 'App\\Client\\Soap\\ConnectResponse',
      'CheckConnect' => 'App\\Client\\Soap\\CheckConnect',
      'CheckConnectResponse' => 'App\\Client\\Soap\\CheckConnectResponse',
      'GetQuotaStop' => 'App\\Client\\Soap\\GetQuotaStop',
      'GetQuotaStopResponse' => 'App\\Client\\Soap\\GetQuotaStopResponse',
      'ArrayOfQuoteHotel' => 'App\\Client\\Soap\\ArrayOfQuoteHotel',
      'QuoteHotel' => 'App\\Client\\Soap\\QuoteHotel',
      'AllotmentHotel' => 'App\\Client\\Soap\\AllotmentHotel',
      'Allotment' => 'App\\Client\\Soap\\Allotment',
      'StopSale' => 'App\\Client\\Soap\\StopSale',
      'GetChangeQuotaAndStop' => 'App\\Client\\Soap\\GetChangeQuotaAndStop',
      'GetChangeQuotaAndStopResponse' => 'App\\Client\\Soap\\GetChangeQuotaAndStopResponse',
      'ArrayOfQuotaStopInfo' => 'App\\Client\\Soap\\ArrayOfQuotaStopInfo',
      'QuotaStopInfo' => 'App\\Client\\Soap\\QuotaStopInfo',
      'GetHotelQuotaStopInfo' => 'App\\Client\\Soap\\GetHotelQuotaStopInfo',
      'GetHotelQuotaStopInfoResponse' => 'App\\Client\\Soap\\GetHotelQuotaStopInfoResponse',
      'ArrayOfHotelQuotaStopInfo' => 'App\\Client\\Soap\\ArrayOfHotelQuotaStopInfo',
      'HotelQuotaStopInfo' => 'App\\Client\\Soap\\HotelQuotaStopInfo',
      'GetSpoList' => 'App\\Client\\Soap\\GetSpoList',
      'SPORequest' => 'App\\Client\\Soap\\SPORequest',
      'GetSpoListResponse' => 'App\\Client\\Soap\\GetSpoListResponse',
      'ServiceResultOfSPOInfo' => 'App\\Client\\Soap\\ServiceResultOfSPOInfo',
      'ArrayOfSPOInfo' => 'App\\Client\\Soap\\ArrayOfSPOInfo',
      'SPOInfo' => 'App\\Client\\Soap\\SPOInfo',
      'ArrayOfCOLinkService' => 'App\\Client\\Soap\\ArrayOfCOLinkService',
      'COLinkService' => 'App\\Client\\Soap\\COLinkService',
      'ArrayOfXYRule' => 'App\\Client\\Soap\\ArrayOfXYRule',
      'XYRule' => 'App\\Client\\Soap\\XYRule',
      'ArrayOfCOService' => 'App\\Client\\Soap\\ArrayOfCOService',
      'COService' => 'App\\Client\\Soap\\COService',
      'GetCosts' => 'App\\Client\\Soap\\GetCosts',
      'CostRequest' => 'App\\Client\\Soap\\CostRequest',
      'GetCostsResponse' => 'App\\Client\\Soap\\GetCostsResponse',
      'ServiceResultOfCostInfo' => 'App\\Client\\Soap\\ServiceResultOfCostInfo',
      'ArrayOfCostInfo' => 'App\\Client\\Soap\\ArrayOfCostInfo',
      'CostInfo' => 'App\\Client\\Soap\\CostInfo',
      'SpoPriceMarkDownloaded' => 'App\\Client\\Soap\\SpoPriceMarkDownloaded',
      'SpoPriceMarkDownloadedResponse' => 'App\\Client\\Soap\\SpoPriceMarkDownloadedResponse',
      'GetHotels' => 'App\\Client\\Soap\\GetHotels',
      'GetHotelsResponse' => 'App\\Client\\Soap\\GetHotelsResponse',
      'ArrayOfHotel' => 'App\\Client\\Soap\\ArrayOfHotel',
      'Hotel' => 'App\\Client\\Soap\\Hotel',
      'Reference' => 'App\\Client\\Soap\\Reference',
      'Entity' => 'App\\Client\\Soap\\Entity',
      'ArrayOfParameterPair' => 'App\\Client\\Soap\\ArrayOfParameterPair',
      'ParameterPair' => 'App\\Client\\Soap\\ParameterPair',
      'Country' => 'App\\Client\\Soap\\Country',
      'City' => 'App\\Client\\Soap\\City',
      'HotelCategory' => 'App\\Client\\Soap\\HotelCategory',
      'GetTransfers' => 'App\\Client\\Soap\\GetTransfers',
      'ArrayOfTransfer' => 'App\\Client\\Soap\\ArrayOfTransfer',
      'Transfer' => 'App\\Client\\Soap\\Transfer',
      'GetTransfersResponse' => 'App\\Client\\Soap\\GetTransfersResponse',
      'GetExcursions' => 'App\\Client\\Soap\\GetExcursions',
      'ArrayOfExcursion' => 'App\\Client\\Soap\\ArrayOfExcursion',
      'Excursion' => 'App\\Client\\Soap\\Excursion',
      'GetExcursionsResponse' => 'App\\Client\\Soap\\GetExcursionsResponse',
      'GetServiceList' => 'App\\Client\\Soap\\GetServiceList',
      'ArrayOfServiceList' => 'App\\Client\\Soap\\ArrayOfServiceList',
      'ServiceList' => 'App\\Client\\Soap\\ServiceList',
      'GetServiceListResponse' => 'App\\Client\\Soap\\GetServiceListResponse',
      'CalculateSingleCost' => 'App\\Client\\Soap\\CalculateSingleCost',
      'ArrayOfInt' => 'App\\Client\\Soap\\ArrayOfInt',
      'CostCalculateResult' => 'App\\Client\\Soap\\CostCalculateResult',
      'CalculateSingleCostResponse' => 'App\\Client\\Soap\\CalculateSingleCostResponse',
      'GetExtraServices' => 'App\\Client\\Soap\\GetExtraServices',
      'ExtraServiceRequest' => 'App\\Client\\Soap\\ExtraServiceRequest',
      'ServiceResultOfExtraServiceInfo' => 'App\\Client\\Soap\\ServiceResultOfExtraServiceInfo',
      'ArrayOfExtraServiceInfo' => 'App\\Client\\Soap\\ArrayOfExtraServiceInfo',
      'ExtraServiceInfo' => 'App\\Client\\Soap\\ExtraServiceInfo',
      'ArrayOfHotelLinkTypeEx' => 'App\\Client\\Soap\\ArrayOfHotelLinkTypeEx',
      'HotelLinkTypeEx' => 'App\\Client\\Soap\\HotelLinkTypeEx',
      'GetExtraServicesResponse' => 'App\\Client\\Soap\\GetExtraServicesResponse',
      'GetReservation' => 'App\\Client\\Soap\\GetReservation',
      'Reservation' => 'App\\Client\\Soap\\Reservation',
      'Rate' => 'App\\Client\\Soap\\Rate',
      'ArrayOfTouristService' => 'App\\Client\\Soap\\ArrayOfTouristService',
      'TouristService' => 'App\\Client\\Soap\\TouristService',
      'ArrayOfService' => 'App\\Client\\Soap\\ArrayOfService',
      'Service' => 'App\\Client\\Soap\\Service',
      'ServiceClass' => 'App\\Client\\Soap\\ServiceClass',
      'Partner' => 'App\\Client\\Soap\\Partner',
      'ArrayOfTourist' => 'App\\Client\\Soap\\ArrayOfTourist',
      'Tourist' => 'App\\Client\\Soap\\Tourist',
      'Passport' => 'App\\Client\\Soap\\Passport',
      'StatusService' => 'App\\Client\\Soap\\StatusService',
      'InsuranceService' => 'App\\Client\\Soap\\InsuranceService',
      'AdditionalDescription' => 'App\\Client\\Soap\\AdditionalDescription',
      'Insurance' => 'App\\Client\\Soap\\Insurance',
      'ExcursionService' => 'App\\Client\\Soap\\ExcursionService',
      'Transport' => 'App\\Client\\Soap\\Transport',
      'ExtraService' => 'App\\Client\\Soap\\ExtraService',
      'VisaService' => 'App\\Client\\Soap\\VisaService',
      'Visa' => 'App\\Client\\Soap\\Visa',
      'HotelService' => 'App\\Client\\Soap\\HotelService',
      'Room' => 'App\\Client\\Soap\\Room',
      'RoomType' => 'App\\Client\\Soap\\RoomType',
      'RoomCategory' => 'App\\Client\\Soap\\RoomCategory',
      'RoomAccomodation' => 'App\\Client\\Soap\\RoomAccomodation',
      'Pansion' => 'App\\Client\\Soap\\Pansion',
      'FlightService' => 'App\\Client\\Soap\\FlightService',
      'Tariff' => 'App\\Client\\Soap\\Tariff',
      'Flight' => 'App\\Client\\Soap\\Flight',
      'Airport' => 'App\\Client\\Soap\\Airport',
      'AirLine' => 'App\\Client\\Soap\\AirLine',
      'TransferService' => 'App\\Client\\Soap\\TransferService',
      'GetReservationResponse' => 'App\\Client\\Soap\\GetReservationResponse',
      'CreateReservation' => 'App\\Client\\Soap\\CreateReservation',
      'CreateReservationResponse' => 'App\\Client\\Soap\\CreateReservationResponse',
      'CancelReservation' => 'App\\Client\\Soap\\CancelReservation',
      'CancelReservationResponse' => 'App\\Client\\Soap\\CancelReservationResponse',
      'CreateReservationMessage' => 'App\\Client\\Soap\\CreateReservationMessage',
      'CreateReservationMessageResponse' => 'App\\Client\\Soap\\CreateReservationMessageResponse',
      'SearchHotelServices' => 'App\\Client\\Soap\\SearchHotelServices',
      'SearchHotelServiceRequest' => 'App\\Client\\Soap\\SearchHotelServiceRequest',
      'ServiceResultOfDataRequestResult' => 'App\\Client\\Soap\\ServiceResultOfDataRequestResult',
      'ArrayOfDataRequestResult' => 'App\\Client\\Soap\\ArrayOfDataRequestResult',
      'DataRequestResult' => 'App\\Client\\Soap\\DataRequestResult',
      'ResultTable' => 'App\\Client\\Soap\\ResultTable',
      'ArrayOfString' => 'App\\Client\\Soap\\ArrayOfString',
      'ArrayOfArrayOfAnyType' => 'App\\Client\\Soap\\ArrayOfArrayOfAnyType',
      'ArrayOfAnyType' => 'App\\Client\\Soap\\ArrayOfAnyType',
      'SearchHotelServicesResponse' => 'App\\Client\\Soap\\SearchHotelServicesResponse',
      'SearchHotelServicesMinHotel' => 'App\\Client\\Soap\\SearchHotelServicesMinHotel',
      'SearchHotelServicesMinHotelResponse' => 'App\\Client\\Soap\\SearchHotelServicesMinHotelResponse',
      'SearchActualCostCalculationVariant' => 'App\\Client\\Soap\\SearchActualCostCalculationVariant',
      'SearchActualCostCalculationVariantRequest' => 'App\\Client\\Soap\\SearchActualCostCalculationVariantRequest',
      'ServiceResultOfCostCalculationVariant' => 'App\\Client\\Soap\\ServiceResultOfCostCalculationVariant',
      'ArrayOfCostCalculationVariant' => 'App\\Client\\Soap\\ArrayOfCostCalculationVariant',
      'CostCalculationVariant' => 'App\\Client\\Soap\\CostCalculationVariant',
      'SearchActualCostCalculationVariantResponse' => 'App\\Client\\Soap\\SearchActualCostCalculationVariantResponse',
      'GetCountries' => 'App\\Client\\Soap\\GetCountries',
      'ArrayOfCountry' => 'App\\Client\\Soap\\ArrayOfCountry',
      'GetCountriesResponse' => 'App\\Client\\Soap\\GetCountriesResponse',
      'GetRegions' => 'App\\Client\\Soap\\GetRegions',
      'ArrayOfRegion' => 'App\\Client\\Soap\\ArrayOfRegion',
      'Region' => 'App\\Client\\Soap\\Region',
      'GetRegionsResponse' => 'App\\Client\\Soap\\GetRegionsResponse',
      'GetCities' => 'App\\Client\\Soap\\GetCities',
      'ArrayOfCity' => 'App\\Client\\Soap\\ArrayOfCity',
      'GetCitiesResponse' => 'App\\Client\\Soap\\GetCitiesResponse',
      'GetRoomCategories' => 'App\\Client\\Soap\\GetRoomCategories',
      'ArrayOfRoomCategory' => 'App\\Client\\Soap\\ArrayOfRoomCategory',
      'GetRoomCategoriesResponse' => 'App\\Client\\Soap\\GetRoomCategoriesResponse',
      'GetRoomType' => 'App\\Client\\Soap\\GetRoomType',
      'ArrayOfRoomType' => 'App\\Client\\Soap\\ArrayOfRoomType',
      'GetRoomTypeResponse' => 'App\\Client\\Soap\\GetRoomTypeResponse',
      'GetRoomAccommodations' => 'App\\Client\\Soap\\GetRoomAccommodations',
      'ArrayOfRoomAccomodation' => 'App\\Client\\Soap\\ArrayOfRoomAccomodation',
      'GetRoomAccommodationsResponse' => 'App\\Client\\Soap\\GetRoomAccommodationsResponse',
      'GetAccommodations' => 'App\\Client\\Soap\\GetAccommodations',
      'ServiceResultOfAccomodationInfo' => 'App\\Client\\Soap\\ServiceResultOfAccomodationInfo',
      'ArrayOfAccomodationInfo' => 'App\\Client\\Soap\\ArrayOfAccomodationInfo',
      'AccomodationInfo' => 'App\\Client\\Soap\\AccomodationInfo',
      'ArrayOfAccomadationAge' => 'App\\Client\\Soap\\ArrayOfAccomadationAge',
      'AccomadationAge' => 'App\\Client\\Soap\\AccomadationAge',
      'GetAccommodationsResponse' => 'App\\Client\\Soap\\GetAccommodationsResponse',
      'GetPansions' => 'App\\Client\\Soap\\GetPansions',
      'ArrayOfPansion' => 'App\\Client\\Soap\\ArrayOfPansion',
      'GetPansionsResponse' => 'App\\Client\\Soap\\GetPansionsResponse',
      'GetRatings' => 'App\\Client\\Soap\\GetRatings',
      'ArrayOfHotelCategory' => 'App\\Client\\Soap\\ArrayOfHotelCategory',
      'GetRatingsResponse' => 'App\\Client\\Soap\\GetRatingsResponse',
      'GetFlights' => 'App\\Client\\Soap\\GetFlights',
      'ArrayOfFlight' => 'App\\Client\\Soap\\ArrayOfFlight',
      'GetFlightsResponse' => 'App\\Client\\Soap\\GetFlightsResponse',
      'GetAirport' => 'App\\Client\\Soap\\GetAirport',
      'ArrayOfAirport' => 'App\\Client\\Soap\\ArrayOfAirport',
      'GetAirportResponse' => 'App\\Client\\Soap\\GetAirportResponse',
      'GetProviders' => 'App\\Client\\Soap\\GetProviders',
      'ArrayOfPartner' => 'App\\Client\\Soap\\ArrayOfPartner',
      'GetProvidersResponse' => 'App\\Client\\Soap\\GetProvidersResponse',
      'GetTransports' => 'App\\Client\\Soap\\GetTransports',
      'ArrayOfTransport' => 'App\\Client\\Soap\\ArrayOfTransport',
      'GetTransportsResponse' => 'App\\Client\\Soap\\GetTransportsResponse',
      'GetTransferTypes' => 'App\\Client\\Soap\\GetTransferTypes',
      'GetTransferTypesResponse' => 'App\\Client\\Soap\\GetTransferTypesResponse',
      'GetServicePackage' => 'App\\Client\\Soap\\GetServicePackage',
      'GetServicePackageResponse' => 'App\\Client\\Soap\\GetServicePackageResponse',
      'GetRoomDescriptions' => 'App\\Client\\Soap\\GetRoomDescriptions',
      'ArrayOfAdditionalDescription' => 'App\\Client\\Soap\\ArrayOfAdditionalDescription',
      'GetRoomDescriptionsResponse' => 'App\\Client\\Soap\\GetRoomDescriptionsResponse',
      'GetRates' => 'App\\Client\\Soap\\GetRates',
      'ArrayOfRate' => 'App\\Client\\Soap\\ArrayOfRate',
      'GetRatesResponse' => 'App\\Client\\Soap\\GetRatesResponse',
      'GetDLStatuses' => 'App\\Client\\Soap\\GetDLStatuses',
      'ArrayOfStatusService' => 'App\\Client\\Soap\\ArrayOfStatusService',
      'GetDLStatusesResponse' => 'App\\Client\\Soap\\GetDLStatusesResponse',
      'CreatePaymentForDogovor' => 'App\\Client\\Soap\\CreatePaymentForDogovor',
      'CreatePaymentForDogovorResponse' => 'App\\Client\\Soap\\CreatePaymentForDogovorResponse',
      'CreatePayment' => 'App\\Client\\Soap\\CreatePayment',
      'CreatePaymentResponse' => 'App\\Client\\Soap\\CreatePaymentResponse',
      'GetPaymentInformation' => 'App\\Client\\Soap\\GetPaymentInformation',
      'PaymentInformationResult' => 'App\\Client\\Soap\\PaymentInformationResult',
      'PaymentsShortInformation' => 'App\\Client\\Soap\\PaymentsShortInformation',
      'GetPaymentInformationResponse' => 'App\\Client\\Soap\\GetPaymentInformationResponse',
      'CheckReservation' => 'App\\Client\\Soap\\CheckReservation',
      'AmountSum' => 'App\\Client\\Soap\\AmountSum',
      'CheckReservationResponse' => 'App\\Client\\Soap\\CheckReservationResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $service.wsdl The service.wsdl file to use
     */


    public function __construct(array $options = [], $service = null)
    {
        foreach  (self::$classmap as  $key => $value)
        {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        $options = array_merge(array (
            'features' => 1,
//            'trace'=>1,
            'uri'=>'http://schemas.xmlsoap.org/wsdl/soap/',
            'style'=>SOAP_RPC,
            'use'=>SOAP_ENCODED,
            'soap_version'=>SOAP_1_2,
            'cache_wsdl'=>WSDL_CACHE_NONE,
            'connection_timeout'=>300,
            'trace'=>true,
            'encoding'=>'UTF-8',
            'exceptions'=>true,
        ), $options);

        if (!$service) {
            throw new Exception('wsdl not specify');
        }

        parent::__construct($service, $options);
    }




}
