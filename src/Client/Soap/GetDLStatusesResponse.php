<?php

namespace App\Client\Soap;

class GetDLStatusesResponse
{

    /**
     * @var ArrayOfStatusService $GetDLStatusesResult
     */
    protected $GetDLStatusesResult = null;

    /**
     * @param ArrayOfStatusService $GetDLStatusesResult
     */
    public function __construct($GetDLStatusesResult)
    {
      $this->GetDLStatusesResult = $GetDLStatusesResult;
    }

    /**
     * @return ArrayOfStatusService
     */
    public function getGetDLStatusesResult()
    {
      return $this->GetDLStatusesResult;
    }

    /**
     * @param ArrayOfStatusService $GetDLStatusesResult
     * @return \App\Client\Soap\GetDLStatusesResponse
     */
    public function setGetDLStatusesResult($GetDLStatusesResult)
    {
      $this->GetDLStatusesResult = $GetDLStatusesResult;
      return $this;
    }

}
