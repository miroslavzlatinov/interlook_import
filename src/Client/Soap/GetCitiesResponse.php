<?php

namespace App\Client\Soap;

class GetCitiesResponse
{

    /**
     * @var ArrayOfCity $GetCitiesResult
     */
    protected $GetCitiesResult = null;

    /**
     * @param ArrayOfCity $GetCitiesResult
     */
    public function __construct($GetCitiesResult)
    {
      $this->GetCitiesResult = $GetCitiesResult;
    }

    /**
     * @return ArrayOfCity
     */
    public function getGetCitiesResult()
    {
      return $this->GetCitiesResult;
    }

    /**
     * @param ArrayOfCity $GetCitiesResult
     * @return \App\Client\Soap\GetCitiesResponse
     */
    public function setGetCitiesResult($GetCitiesResult)
    {
      $this->GetCitiesResult = $GetCitiesResult;
      return $this;
    }

}
