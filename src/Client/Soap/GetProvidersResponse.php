<?php

namespace App\Client\Soap;

class GetProvidersResponse
{

    /**
     * @var ArrayOfPartner $GetProvidersResult
     */
    protected $GetProvidersResult = null;

    /**
     * @param ArrayOfPartner $GetProvidersResult
     */
    public function __construct($GetProvidersResult)
    {
      $this->GetProvidersResult = $GetProvidersResult;
    }

    /**
     * @return ArrayOfPartner
     */
    public function getGetProvidersResult()
    {
      return $this->GetProvidersResult;
    }

    /**
     * @param ArrayOfPartner $GetProvidersResult
     * @return \App\Client\Soap\GetProvidersResponse
     */
    public function setGetProvidersResult($GetProvidersResult)
    {
      $this->GetProvidersResult = $GetProvidersResult;
      return $this;
    }

}
