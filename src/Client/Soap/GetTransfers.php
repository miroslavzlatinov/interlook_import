<?php

namespace App\Client\Soap;

class GetTransfers
{

    /**
     * @var int $countryKey
     */
    protected $countryKey = null;

    /**
     * @var int $regionKey
     */
    protected $regionKey = null;

    /**
     * @var int $cityKey
     */
    protected $cityKey = null;

    /**
     * @param int $countryKey
     * @param int $regionKey
     * @param int $cityKey
     */
    public function __construct($countryKey, $regionKey, $cityKey)
    {
      $this->countryKey = $countryKey;
      $this->regionKey = $regionKey;
      $this->cityKey = $cityKey;
    }

    /**
     * @return int
     */
    public function getCountryKey()
    {
      return $this->countryKey;
    }

    /**
     * @param int $countryKey
     * @return \App\Client\Soap\GetTransfers
     */
    public function setCountryKey($countryKey)
    {
      $this->countryKey = $countryKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getRegionKey()
    {
      return $this->regionKey;
    }

    /**
     * @param int $regionKey
     * @return \App\Client\Soap\GetTransfers
     */
    public function setRegionKey($regionKey)
    {
      $this->regionKey = $regionKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getCityKey()
    {
      return $this->cityKey;
    }

    /**
     * @param int $cityKey
     * @return \App\Client\Soap\GetTransfers
     */
    public function setCityKey($cityKey)
    {
      $this->cityKey = $cityKey;
      return $this;
    }

}
