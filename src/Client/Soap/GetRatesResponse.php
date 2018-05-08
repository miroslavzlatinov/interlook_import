<?php

namespace App\Client\Soap;

class GetRatesResponse
{

    /**
     * @var ArrayOfRate $GetRatesResult
     */
    protected $GetRatesResult = null;

    /**
     * @param ArrayOfRate $GetRatesResult
     */
    public function __construct($GetRatesResult)
    {
      $this->GetRatesResult = $GetRatesResult;
    }

    /**
     * @return ArrayOfRate
     */
    public function getGetRatesResult()
    {
      return $this->GetRatesResult;
    }

    /**
     * @param ArrayOfRate $GetRatesResult
     * @return \App\Client\Soap\GetRatesResponse
     */
    public function setGetRatesResult($GetRatesResult)
    {
      $this->GetRatesResult = $GetRatesResult;
      return $this;
    }

}
