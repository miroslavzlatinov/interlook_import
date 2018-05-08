<?php

namespace App\Client\Soap;

class SearchHotelServicesMinHotelResponse
{

    /**
     * @var ServiceResultOfDataRequestResult $SearchHotelServicesMinHotelResult
     */
    protected $SearchHotelServicesMinHotelResult = null;

    /**
     * @param ServiceResultOfDataRequestResult $SearchHotelServicesMinHotelResult
     */
    public function __construct($SearchHotelServicesMinHotelResult)
    {
      $this->SearchHotelServicesMinHotelResult = $SearchHotelServicesMinHotelResult;
    }

    /**
     * @return ServiceResultOfDataRequestResult
     */
    public function getSearchHotelServicesMinHotelResult()
    {
      return $this->SearchHotelServicesMinHotelResult;
    }

    /**
     * @param ServiceResultOfDataRequestResult $SearchHotelServicesMinHotelResult
     * @return \Client\Soap\SearchHotelServicesMinHotelResponse
     */
    public function setSearchHotelServicesMinHotelResult($SearchHotelServicesMinHotelResult)
    {
      $this->SearchHotelServicesMinHotelResult = $SearchHotelServicesMinHotelResult;
      return $this;
    }

}
