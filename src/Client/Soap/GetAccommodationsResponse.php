<?php

namespace App\Client\Soap;

class GetAccommodationsResponse
{

    /**
     * @var ServiceResultOfAccomodationInfo $GetAccommodationsResult
     */
    protected $GetAccommodationsResult = null;

    /**
     * @param ServiceResultOfAccomodationInfo $GetAccommodationsResult
     */
    public function __construct($GetAccommodationsResult)
    {
      $this->GetAccommodationsResult = $GetAccommodationsResult;
    }

    /**
     * @return ServiceResultOfAccomodationInfo
     */
    public function getGetAccommodationsResult()
    {
      return $this->GetAccommodationsResult;
    }

    /**
     * @param ServiceResultOfAccomodationInfo $GetAccommodationsResult
     * @return \App\Client\Soap\GetAccommodationsResponse
     */
    public function setGetAccommodationsResult($GetAccommodationsResult)
    {
      $this->GetAccommodationsResult = $GetAccommodationsResult;
      return $this;
    }

}
