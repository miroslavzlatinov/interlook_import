<?php

namespace App\Client\Soap;

class GetPaymentInformationResponse
{

    /**
     * @var PaymentInformationResult $GetPaymentInformationResult
     */
    protected $GetPaymentInformationResult = null;

    /**
     * @param PaymentInformationResult $GetPaymentInformationResult
     */
    public function __construct($GetPaymentInformationResult)
    {
      $this->GetPaymentInformationResult = $GetPaymentInformationResult;
    }

    /**
     * @return PaymentInformationResult
     */
    public function getGetPaymentInformationResult()
    {
      return $this->GetPaymentInformationResult;
    }

    /**
     * @param PaymentInformationResult $GetPaymentInformationResult
     * @return \App\Client\Soap\GetPaymentInformationResponse
     */
    public function setGetPaymentInformationResult($GetPaymentInformationResult)
    {
      $this->GetPaymentInformationResult = $GetPaymentInformationResult;
      return $this;
    }

}
