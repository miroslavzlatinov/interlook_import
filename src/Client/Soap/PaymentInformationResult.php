<?php

namespace App\Client\Soap;

class PaymentInformationResult
{

    /**
     * @var boolean $IsPaymentExists
     */
    protected $IsPaymentExists = null;

    /**
     * @var PaymentsShortInformation $PaymentsShortInformation
     */
    protected $PaymentsShortInformation = null;

    /**
     * @var int $ErrorCode
     */
    protected $ErrorCode = null;

    /**
     * @param boolean $IsPaymentExists
     * @param int $ErrorCode
     */
    public function __construct($IsPaymentExists, $ErrorCode)
    {
      $this->IsPaymentExists = $IsPaymentExists;
      $this->ErrorCode = $ErrorCode;
    }

    /**
     * @return boolean
     */
    public function getIsPaymentExists()
    {
      return $this->IsPaymentExists;
    }

    /**
     * @param boolean $IsPaymentExists
     * @return \App\Client\Soap\PaymentInformationResult
     */
    public function setIsPaymentExists($IsPaymentExists)
    {
      $this->IsPaymentExists = $IsPaymentExists;
      return $this;
    }

    /**
     * @return PaymentsShortInformation
     */
    public function getPaymentsShortInformation()
    {
      return $this->PaymentsShortInformation;
    }

    /**
     * @param PaymentsShortInformation $PaymentsShortInformation
     * @return \App\Client\Soap\PaymentInformationResult
     */
    public function setPaymentsShortInformation($PaymentsShortInformation)
    {
      $this->PaymentsShortInformation = $PaymentsShortInformation;
      return $this;
    }

    /**
     * @return int
     */
    public function getErrorCode()
    {
      return $this->ErrorCode;
    }

    /**
     * @param int $ErrorCode
     * @return \App\Client\Soap\PaymentInformationResult
     */
    public function setErrorCode($ErrorCode)
    {
      $this->ErrorCode = $ErrorCode;
      return $this;
    }

}
