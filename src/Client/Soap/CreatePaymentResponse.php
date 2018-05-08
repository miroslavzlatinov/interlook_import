<?php

namespace App\Client\Soap;

class CreatePaymentResponse
{

    /**
     * @var int $CreatePaymentResult
     */
    protected $CreatePaymentResult = null;

    /**
     * @param int $CreatePaymentResult
     */
    public function __construct($CreatePaymentResult)
    {
      $this->CreatePaymentResult = $CreatePaymentResult;
    }

    /**
     * @return int
     */
    public function getCreatePaymentResult()
    {
      return $this->CreatePaymentResult;
    }

    /**
     * @param int $CreatePaymentResult
     * @return \App\Client\Soap\CreatePaymentResponse
     */
    public function setCreatePaymentResult($CreatePaymentResult)
    {
      $this->CreatePaymentResult = $CreatePaymentResult;
      return $this;
    }

}
