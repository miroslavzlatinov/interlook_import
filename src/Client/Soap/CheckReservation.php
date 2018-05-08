<?php

namespace App\Client\Soap;

class CheckReservation
{

    /**
     * @var string $userToken
     */
    protected $userToken = null;

    /**
     * @var string $dgCode
     */
    protected $dgCode = null;

    /**
     * @var string $currencyIsoCode
     */
    protected $currencyIsoCode = null;

    /**
     * @param string $userToken
     * @param string $dgCode
     * @param string $currencyIsoCode
     */
    public function __construct($userToken, $dgCode, $currencyIsoCode)
    {
      $this->userToken = $userToken;
      $this->dgCode = $dgCode;
      $this->currencyIsoCode = $currencyIsoCode;
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
     * @return \App\Client\Soap\CheckReservation
     */
    public function setUserToken($userToken)
    {
      $this->userToken = $userToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getDgCode()
    {
      return $this->dgCode;
    }

    /**
     * @param string $dgCode
     * @return \App\Client\Soap\CheckReservation
     */
    public function setDgCode($dgCode)
    {
      $this->dgCode = $dgCode;
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
     * @return \App\Client\Soap\CheckReservation
     */
    public function setCurrencyIsoCode($currencyIsoCode)
    {
      $this->currencyIsoCode = $currencyIsoCode;
      return $this;
    }

}
