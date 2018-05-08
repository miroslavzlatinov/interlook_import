<?php

namespace App\Client\Soap;

class GetRegions
{

    /**
     * @var int $countryKey
     */
    protected $countryKey = null;

    /**
     * @param int $countryKey
     */
    public function __construct($countryKey)
    {
      $this->countryKey = $countryKey;
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
     * @return \App\Client\Soap\GetRegions
     */
    public function setCountryKey($countryKey)
    {
      $this->countryKey = $countryKey;
      return $this;
    }

}
