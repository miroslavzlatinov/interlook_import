<?php

namespace App\Client\Soap;

class PaymentsShortInformation
{

    /**
     * @var int $InternalPaymentId
     */
    protected $InternalPaymentId = null;

    /**
     * @var string $DogovorCode
     */
    protected $DogovorCode = null;

    /**
     * @var float $PaymentSum
     */
    protected $PaymentSum = null;

    /**
     * @var float $PaymentNationalSum
     */
    protected $PaymentNationalSum = null;

    /**
     * @var string $PaymentRateISOCode
     */
    protected $PaymentRateISOCode = null;

    /**
     * @var \DateTime $CreateDate
     */
    protected $CreateDate = null;

    /**
     * @param int $InternalPaymentId
     * @param float $PaymentSum
     * @param float $PaymentNationalSum
     * @param \DateTime $CreateDate
     */
    public function __construct($InternalPaymentId, $PaymentSum, $PaymentNationalSum, \DateTime $CreateDate)
    {
      $this->InternalPaymentId = $InternalPaymentId;
      $this->PaymentSum = $PaymentSum;
      $this->PaymentNationalSum = $PaymentNationalSum;
      $this->CreateDate = $CreateDate->format(\DateTime::ATOM);
    }

    /**
     * @return int
     */
    public function getInternalPaymentId()
    {
      return $this->InternalPaymentId;
    }

    /**
     * @param int $InternalPaymentId
     * @return \App\Client\Soap\PaymentsShortInformation
     */
    public function setInternalPaymentId($InternalPaymentId)
    {
      $this->InternalPaymentId = $InternalPaymentId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDogovorCode()
    {
      return $this->DogovorCode;
    }

    /**
     * @param string $DogovorCode
     * @return \App\Client\Soap\PaymentsShortInformation
     */
    public function setDogovorCode($DogovorCode)
    {
      $this->DogovorCode = $DogovorCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getPaymentSum()
    {
      return $this->PaymentSum;
    }

    /**
     * @param float $PaymentSum
     * @return \App\Client\Soap\PaymentsShortInformation
     */
    public function setPaymentSum($PaymentSum)
    {
      $this->PaymentSum = $PaymentSum;
      return $this;
    }

    /**
     * @return float
     */
    public function getPaymentNationalSum()
    {
      return $this->PaymentNationalSum;
    }

    /**
     * @param float $PaymentNationalSum
     * @return \App\Client\Soap\PaymentsShortInformation
     */
    public function setPaymentNationalSum($PaymentNationalSum)
    {
      $this->PaymentNationalSum = $PaymentNationalSum;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentRateISOCode()
    {
      return $this->PaymentRateISOCode;
    }

    /**
     * @param string $PaymentRateISOCode
     * @return \App\Client\Soap\PaymentsShortInformation
     */
    public function setPaymentRateISOCode($PaymentRateISOCode)
    {
      $this->PaymentRateISOCode = $PaymentRateISOCode;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreateDate()
    {
      if ($this->CreateDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreateDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreateDate
     * @return \App\Client\Soap\PaymentsShortInformation
     */
    public function setCreateDate(\DateTime $CreateDate)
    {
      $this->CreateDate = $CreateDate->format(\DateTime::ATOM);
      return $this;
    }

}
