<?php

namespace App\Client\Soap;

class GetSpoListResponse
{

    /**
     * @var ServiceResultOfSPOInfo $GetSpoListResult
     */
    protected $GetSpoListResult = null;

    /**
     * @param ServiceResultOfSPOInfo $GetSpoListResult
     */
    public function __construct($GetSpoListResult)
    {
      $this->GetSpoListResult = $GetSpoListResult;
    }

    /**
     * @return ServiceResultOfSPOInfo
     */
    public function getGetSpoListResult()
    {
      return $this->GetSpoListResult;
    }

    /**
     * @param ServiceResultOfSPOInfo $GetSpoListResult
     * @return \App\Client\Soap\GetSpoListResponse
     */
    public function setGetSpoListResult($GetSpoListResult)
    {
      $this->GetSpoListResult = $GetSpoListResult;
      return $this;
    }

}
