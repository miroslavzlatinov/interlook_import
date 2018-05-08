<?php

namespace App\Client\Soap;

class GetTransportsResponse
{

    /**
     * @var ArrayOfTransport $GetTransportsResult
     */
    protected $GetTransportsResult = null;

    /**
     * @param ArrayOfTransport $GetTransportsResult
     */
    public function __construct($GetTransportsResult)
    {
      $this->GetTransportsResult = $GetTransportsResult;
    }

    /**
     * @return ArrayOfTransport
     */
    public function getGetTransportsResult()
    {
      return $this->GetTransportsResult;
    }

    /**
     * @param ArrayOfTransport $GetTransportsResult
     * @return \App\Client\Soap\GetTransportsResponse
     */
    public function setGetTransportsResult($GetTransportsResult)
    {
      $this->GetTransportsResult = $GetTransportsResult;
      return $this;
    }

}
