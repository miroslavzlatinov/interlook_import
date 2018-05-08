<?php

namespace App\Client\Soap;

class GetServiceListResponse
{

    /**
     * @var ArrayOfServiceList $GetServiceListResult
     */
    protected $GetServiceListResult = null;

    /**
     * @param ArrayOfServiceList $GetServiceListResult
     */
    public function __construct($GetServiceListResult)
    {
      $this->GetServiceListResult = $GetServiceListResult;
    }

    /**
     * @return ArrayOfServiceList
     */
    public function getGetServiceListResult()
    {
      return $this->GetServiceListResult;
    }

    /**
     * @param ArrayOfServiceList $GetServiceListResult
     * @return \App\Client\Soap\GetServiceListResponse
     */
    public function setGetServiceListResult($GetServiceListResult)
    {
      $this->GetServiceListResult = $GetServiceListResult;
      return $this;
    }

}
