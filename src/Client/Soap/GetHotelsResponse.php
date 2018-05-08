<?php

namespace App\Client\Soap;

class GetHotelsResponse
{

    /**
     * @var ArrayOfHotel $GetHotelsResult
     */
    protected $GetHotelsResult = null;

    /**
     * @param ArrayOfHotel $GetHotelsResult
     */
    public function __construct($GetHotelsResult)
    {
      $this->GetHotelsResult = $GetHotelsResult;
    }

    /**
     * @return ArrayOfHotel
     */
    public function getGetHotelsResult()
    {
      return $this->GetHotelsResult;
    }

    /**
     * @param ArrayOfHotel $GetHotelsResult
     * @return \App\Client\Soap\GetHotelsResponse
     */
    public function setGetHotelsResult($GetHotelsResult)
    {
      $this->GetHotelsResult = $GetHotelsResult;
      return $this;
    }

}
