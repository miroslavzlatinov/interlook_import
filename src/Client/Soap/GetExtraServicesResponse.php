<?php

namespace App\Client\Soap;

class GetExtraServicesResponse
{

    /**
     * @var ServiceResultOfExtraServiceInfo $GetExtraServicesResult
     */
    protected $GetExtraServicesResult = null;

    /**
     * @param ServiceResultOfExtraServiceInfo $GetExtraServicesResult
     */
    public function __construct($GetExtraServicesResult)
    {
      $this->GetExtraServicesResult = $GetExtraServicesResult;
    }

    /**
     * @return ServiceResultOfExtraServiceInfo
     */
    public function getGetExtraServicesResult()
    {
      return $this->GetExtraServicesResult;
    }

    /**
     * @param ServiceResultOfExtraServiceInfo $GetExtraServicesResult
     * @return \App\Client\Soap\GetExtraServicesResponse
     */
    public function setGetExtraServicesResult($GetExtraServicesResult)
    {
      $this->GetExtraServicesResult = $GetExtraServicesResult;
      return $this;
    }

}
