<?php

namespace App\Client\Soap;

class GetRatingsResponse
{

    /**
     * @var ArrayOfHotelCategory $GetRatingsResult
     */
    protected $GetRatingsResult = null;

    /**
     * @param ArrayOfHotelCategory $GetRatingsResult
     */
    public function __construct($GetRatingsResult)
    {
      $this->GetRatingsResult = $GetRatingsResult;
    }

    /**
     * @return ArrayOfHotelCategory
     */
    public function getGetRatingsResult()
    {
      return $this->GetRatingsResult;
    }

    /**
     * @param ArrayOfHotelCategory $GetRatingsResult
     * @return \App\Client\Soap\GetRatingsResponse
     */
    public function setGetRatingsResult($GetRatingsResult)
    {
      $this->GetRatingsResult = $GetRatingsResult;
      return $this;
    }

}
