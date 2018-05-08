<?php

namespace App\Client\Soap;

class GetCountriesResponse
{

    /**
     * @var ArrayOfCountry $GetCountriesResult
     */
    protected $GetCountriesResult = null;

    /**
     * @param ArrayOfCountry $GetCountriesResult
     */
    public function __construct($GetCountriesResult)
    {
      $this->GetCountriesResult = $GetCountriesResult;
    }

    /**
     * @return ArrayOfCountry
     */
    public function getGetCountriesResult()
    {
      return $this->GetCountriesResult;
    }

    /**
     * @param ArrayOfCountry $GetCountriesResult
     * @return \App\Client\Soap\GetCountriesResponse
     */
    public function setGetCountriesResult($GetCountriesResult)
    {
      $this->GetCountriesResult = $GetCountriesResult;
      return $this;
    }

}
