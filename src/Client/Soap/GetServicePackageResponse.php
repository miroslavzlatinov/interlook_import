<?php

namespace App\Client\Soap;

class GetServicePackageResponse
{

    /**
     * @var ArrayOfServiceList $GetServicePackageResult
     */
    protected $GetServicePackageResult = null;

    /**
     * @param ArrayOfServiceList $GetServicePackageResult
     */
    public function __construct($GetServicePackageResult)
    {
      $this->GetServicePackageResult = $GetServicePackageResult;
    }

    /**
     * @return ArrayOfServiceList
     */
    public function getGetServicePackageResult()
    {
      return $this->GetServicePackageResult;
    }

    /**
     * @param ArrayOfServiceList $GetServicePackageResult
     * @return \App\Client\Soap\GetServicePackageResponse
     */
    public function setGetServicePackageResult($GetServicePackageResult)
    {
      $this->GetServicePackageResult = $GetServicePackageResult;
      return $this;
    }

}
