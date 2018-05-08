<?php

namespace App\Client\Soap;

class GetQuotaStopResponse
{

    /**
     * @var ArrayOfQuoteHotel $GetQuotaStopResult
     */
    protected $GetQuotaStopResult = null;

    /**
     * @param ArrayOfQuoteHotel $GetQuotaStopResult
     */
    public function __construct($GetQuotaStopResult)
    {
      $this->GetQuotaStopResult = $GetQuotaStopResult;
    }

    /**
     * @return ArrayOfQuoteHotel
     */
    public function getGetQuotaStopResult()
    {
      return $this->GetQuotaStopResult;
    }

    /**
     * @param ArrayOfQuoteHotel $GetQuotaStopResult
     * @return \App\Client\Soap\GetQuotaStopResponse
     */
    public function setGetQuotaStopResult($GetQuotaStopResult)
    {
      $this->GetQuotaStopResult = $GetQuotaStopResult;
      return $this;
    }

}
