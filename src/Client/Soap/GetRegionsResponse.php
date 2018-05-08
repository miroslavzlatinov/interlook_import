<?php

namespace App\Client\Soap;

class GetRegionsResponse
{

    /**
     * @var ArrayOfRegion $GetRegionsResult
     */
    protected $GetRegionsResult = null;

    /**
     * @param ArrayOfRegion $GetRegionsResult
     */
    public function __construct($GetRegionsResult)
    {
      $this->GetRegionsResult = $GetRegionsResult;
    }

    /**
     * @return ArrayOfRegion
     */
    public function getGetRegionsResult()
    {
      return $this->GetRegionsResult;
    }

    /**
     * @param ArrayOfRegion $GetRegionsResult
     * @return \App\Client\Soap\GetRegionsResponse
     */
    public function setGetRegionsResult($GetRegionsResult)
    {
      $this->GetRegionsResult = $GetRegionsResult;
      return $this;
    }

}
