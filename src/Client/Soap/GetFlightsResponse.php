<?php

namespace App\Client\Soap;

class GetFlightsResponse
{

    /**
     * @var ArrayOfFlight $GetFlightsResult
     */
    protected $GetFlightsResult = null;

    /**
     * @param ArrayOfFlight $GetFlightsResult
     */
    public function __construct($GetFlightsResult)
    {
      $this->GetFlightsResult = $GetFlightsResult;
    }

    /**
     * @return ArrayOfFlight
     */
    public function getGetFlightsResult()
    {
      return $this->GetFlightsResult;
    }

    /**
     * @param ArrayOfFlight $GetFlightsResult
     * @return \App\Client\Soap\GetFlightsResponse
     */
    public function setGetFlightsResult($GetFlightsResult)
    {
      $this->GetFlightsResult = $GetFlightsResult;
      return $this;
    }

}
