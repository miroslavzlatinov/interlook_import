<?php

namespace App\Client\Soap;

class GetTransfersResponse
{

    /**
     * @var ArrayOfTransfer $GetTransfersResult
     */
    protected $GetTransfersResult = null;

    /**
     * @param ArrayOfTransfer $GetTransfersResult
     */
    public function __construct($GetTransfersResult)
    {
      $this->GetTransfersResult = $GetTransfersResult;
    }

    /**
     * @return ArrayOfTransfer
     */
    public function getGetTransfersResult()
    {
      return $this->GetTransfersResult;
    }

    /**
     * @param ArrayOfTransfer $GetTransfersResult
     * @return \App\Client\Soap\GetTransfersResponse
     */
    public function setGetTransfersResult($GetTransfersResult)
    {
      $this->GetTransfersResult = $GetTransfersResult;
      return $this;
    }

}
