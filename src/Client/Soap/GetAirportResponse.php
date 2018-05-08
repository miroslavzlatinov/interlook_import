<?php

namespace App\Client\Soap;

class GetAirportResponse
{

    /**
     * @var ArrayOfAirport $GetAirportResult
     */
    protected $GetAirportResult = null;

    /**
     * @param ArrayOfAirport $GetAirportResult
     */
    public function __construct($GetAirportResult)
    {
      $this->GetAirportResult = $GetAirportResult;
    }

    /**
     * @return ArrayOfAirport
     */
    public function getGetAirportResult()
    {
      return $this->GetAirportResult;
    }

    /**
     * @param ArrayOfAirport $GetAirportResult
     * @return \App\Client\Soap\GetAirportResponse
     */
    public function setGetAirportResult($GetAirportResult)
    {
      $this->GetAirportResult = $GetAirportResult;
      return $this;
    }

}
