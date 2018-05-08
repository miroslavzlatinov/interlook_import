<?php

namespace App\Client\Soap;

class GetCities
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
     * @param int $countryKey
     * @param int $regionKey
     */
    public function __construct($countryKey, $regionKey)
    {
      $this->countryKey = $countryKey;
      $this->regionKey = $regionKey;
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
     * @return \App\Client\Soap\GetCities
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
     * @return \App\Client\Soap\GetCities
     */
    public function setRegionKey($regionKey)
    {
      $this->regionKey = $regionKey;
      return $this;
    }

}
