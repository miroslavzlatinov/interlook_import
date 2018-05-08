<?php

namespace App\Client\Soap;

class SearchHotelServicesResponse
{

    /**
     * @var ServiceResultOfDataRequestResult $SearchHotelServicesResult
     */
    protected $SearchHotelServicesResult = null;

    /**
     * @param ServiceResultOfDataRequestResult $SearchHotelServicesResult
     */
    public function __construct($SearchHotelServicesResult)
    {
      $this->SearchHotelServicesResult = $SearchHotelServicesResult;
    }

    /**
     * @return ServiceResultOfDataRequestResult
     */
    public function getSearchHotelServicesResult()
    {
      return $this->SearchHotelServicesResult;
    }

    /**
     * @param ServiceResultOfDataRequestResult $SearchHotelServicesResult
     * @return \Client\Soap\SearchHotelServicesResponse
     */
    public function setSearchHotelServicesResult($SearchHotelServicesResult)
    {
      $this->SearchHotelServicesResult = $SearchHotelServicesResult;
      return $this;
    }

}
