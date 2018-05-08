<?php

namespace App\Client\Soap;

class GetChangeQuotaAndStopResponse
{

    /**
     * @var ArrayOfQuotaStopInfo $GetChangeQuotaAndStopResult
     */
    protected $GetChangeQuotaAndStopResult = null;

    /**
     * @param ArrayOfQuotaStopInfo $GetChangeQuotaAndStopResult
     */
    public function __construct($GetChangeQuotaAndStopResult)
    {
      $this->GetChangeQuotaAndStopResult = $GetChangeQuotaAndStopResult;
    }

    /**
     * @return ArrayOfQuotaStopInfo
     */
    public function getGetChangeQuotaAndStopResult()
    {
      return $this->GetChangeQuotaAndStopResult;
    }

    /**
     * @param ArrayOfQuotaStopInfo $GetChangeQuotaAndStopResult
     * @return \App\Client\Soap\GetChangeQuotaAndStopResponse
     */
    public function setGetChangeQuotaAndStopResult($GetChangeQuotaAndStopResult)
    {
      $this->GetChangeQuotaAndStopResult = $GetChangeQuotaAndStopResult;
      return $this;
    }

}
