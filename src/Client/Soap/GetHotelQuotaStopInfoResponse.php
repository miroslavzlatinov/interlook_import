<?php

namespace App\Client\Soap;

class GetHotelQuotaStopInfoResponse
{

    /**
     * @var ArrayOfHotelQuotaStopInfo $GetHotelQuotaStopInfoResult
     */
    protected $GetHotelQuotaStopInfoResult = null;

    /**
     * @param ArrayOfHotelQuotaStopInfo $GetHotelQuotaStopInfoResult
     */
    public function __construct($GetHotelQuotaStopInfoResult)
    {
      $this->GetHotelQuotaStopInfoResult = $GetHotelQuotaStopInfoResult;
    }

    /**
     * @return ArrayOfHotelQuotaStopInfo
     */
    public function getGetHotelQuotaStopInfoResult()
    {
      return $this->GetHotelQuotaStopInfoResult;
    }

    /**
     * @param ArrayOfHotelQuotaStopInfo $GetHotelQuotaStopInfoResult
     * @return \App\Client\Soap\GetHotelQuotaStopInfoResponse
     */
    public function setGetHotelQuotaStopInfoResult($GetHotelQuotaStopInfoResult)
    {
      $this->GetHotelQuotaStopInfoResult = $GetHotelQuotaStopInfoResult;
      return $this;
    }

}
