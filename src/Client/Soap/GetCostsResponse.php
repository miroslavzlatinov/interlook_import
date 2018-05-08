<?php

namespace App\Client\Soap;

class GetCostsResponse
{

    /**
     * @var ServiceResultOfCostInfo $GetCostsResult
     */
    protected $GetCostsResult = null;

    /**
     * @param ServiceResultOfCostInfo $GetCostsResult
     */
    public function __construct($GetCostsResult)
    {
      $this->GetCostsResult = $GetCostsResult;
    }

    /**
     * @return ServiceResultOfCostInfo
     */
    public function getGetCostsResult()
    {
      return $this->GetCostsResult;
    }

    /**
     * @param ServiceResultOfCostInfo $GetCostsResult
     * @return \App\Client\Soap\GetCostsResponse
     */
    public function setGetCostsResult($GetCostsResult)
    {
      $this->GetCostsResult = $GetCostsResult;
      return $this;
    }

}
