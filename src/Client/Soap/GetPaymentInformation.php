<?php

namespace App\Client\Soap;

class GetPaymentInformation
{

    /**
     * @var string $userToken
     */
    protected $userToken = null;

    /**
     * @var string $reservationCode
     */
    protected $reservationCode = null;

    /**
     * @var string $externalPaymentId
     */
    protected $externalPaymentId = null;

    /**
     * @param string $userToken
     * @param string $reservationCode
     * @param string $externalPaymentId
     */
    public function __construct($userToken, $reservationCode, $externalPaymentId)
    {
      $this->userToken = $userToken;
      $this->reservationCode = $reservationCode;
      $this->externalPaymentId = $externalPaymentId;
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
     * @return \App\Client\Soap\GetPaymentInformation
     */
    public function setUserToken($userToken)
    {
      $this->userToken = $userToken;
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
     * @return \App\Client\Soap\GetPaymentInformation
     */
    public function setReservationCode($reservationCode)
    {
      $this->reservationCode = $reservationCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalPaymentId()
    {
      return $this->externalPaymentId;
    }

    /**
     * @param string $externalPaymentId
     * @return \App\Client\Soap\GetPaymentInformation
     */
    public function setExternalPaymentId($externalPaymentId)
    {
      $this->externalPaymentId = $externalPaymentId;
      return $this;
    }

}
