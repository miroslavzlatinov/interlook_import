<?php

namespace App\Client\Soap;

class GetTransferTypesResponse
{

    /**
     * @var ArrayOfTransport $GetTransferTypesResult
     */
    protected $GetTransferTypesResult = null;

    /**
     * @param ArrayOfTransport $GetTransferTypesResult
     */
    public function __construct($GetTransferTypesResult)
    {
      $this->GetTransferTypesResult = $GetTransferTypesResult;
    }

    /**
     * @return ArrayOfTransport
     */
    public function getGetTransferTypesResult()
    {
      return $this->GetTransferTypesResult;
    }

    /**
     * @param ArrayOfTransport $GetTransferTypesResult
     * @return \App\Client\Soap\GetTransferTypesResponse
     */
    public function setGetTransferTypesResult($GetTransferTypesResult)
    {
      $this->GetTransferTypesResult = $GetTransferTypesResult;
      return $this;
    }

}
