<?php

namespace App\Client\Soap;

class CreatePayment
{

    /**
     * @var string $userToken
     */
    protected $userToken = null;

    /**
     * @var \DateTime $date
     */
    protected $date = null;

    /**
     * @var float $sum
     */
    protected $sum = null;

    /**
     * @var string $currencyIsoCode
     */
    protected $currencyIsoCode = null;

    /**
     * @var string $reservationCode
     */
    protected $reservationCode = null;

    /**
     * @var string $paymentId
     */
    protected $paymentId = null;

    /**
     * @param string $userToken
     * @param \DateTime $date
     * @param float $sum
     * @param string $currencyIsoCode
     * @param string $reservationCode
     * @param string $paymentId
     */
    public function __construct($userToken, \DateTime $date, $sum, $currencyIsoCode, $reservationCode, $paymentId)
    {
      $this->userToken = $userToken;
      $this->date = $date->format(\DateTime::ATOM);
      $this->sum = $sum;
      $this->currencyIsoCode = $currencyIsoCode;
      $this->reservationCode = $reservationCode;
      $this->paymentId = $paymentId;
    }

    /**
     * @return string
     */
    public function getUserToken()
    {
      return $this->userToken;
    }

    /**
     * @param string $userToken
     * @return \App\Client\Soap\CreatePayment
     */
    public function setUserToken($userToken)
    {
      $this->userToken = $userToken;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
      if ($this->date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $date
     * @return \App\Client\Soap\CreatePayment
     */
    public function setDate(\DateTime $date)
    {
      $this->date = $date->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return float
     */
    public function getSum()
    {
      return $this->sum;
    }

    /**
     * @param float $sum
     * @return \App\Client\Soap\CreatePayment
     */
    public function setSum($sum)
    {
      $this->sum = $sum;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyIsoCode()
    {
      return $this->currencyIsoCode;
    }

    /**
     * @param string $currencyIsoCode
     * @return \App\Client\Soap\CreatePayment
     */
    public function setCurrencyIsoCode($currencyIsoCode)
    {
      $this->currencyIsoCode = $currencyIsoCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getReservationCode()
    {
      return $this->reservationCode;
    }

    /**
     * @param string $reservationCode
     * @return \App\Client\Soap\CreatePayment
     */
    public function setReservationCode($reservationCode)
    {
      $this->reservationCode = $reservationCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentId()
    {
      return $this->paymentId;
    }

    /**
     * @param string $paymentId
     * @return \App\Client\Soap\CreatePayment
     */
    public function setPaymentId($paymentId)
    {
      $this->paymentId = $paymentId;
      return $this;
    }

}
