<?php

namespace App\Client\Soap;

class ExtraServiceRequest
{

    /**
     * @var int $ServiceClassKey
     */
    protected $ServiceClassKey = null;

    /**
     * @var int $CountryKey
     */
    protected $CountryKey = null;

    /**
     * @var int $CityKey
     */
    protected $CityKey = null;

    /**
     * @var int $HotelKey
     */
    protected $HotelKey = null;

    /**
     * @var int $TypeKey
     */
    protected $TypeKey = null;

    /**
     * @param int $ServiceClassKey
     * @param int $CountryKey
     * @param int $CityKey
     * @param int $HotelKey
     * @param int $TypeKey
     */
    public function __construct($ServiceClassKey, $CountryKey, $CityKey, $HotelKey, $TypeKey)
    {
      $this->ServiceClassKey = $ServiceClassKey;
      $this->CountryKey = $CountryKey;
      $this->CityKey = $CityKey;
      $this->HotelKey = $HotelKey;
      $this->TypeKey = $TypeKey;
    }

    /**
     * @return int
     */
    public function getServiceClassKey()
    {
      return $this->ServiceClassKey;
    }

    /**
     * @param int $ServiceClassKey
     * @return \App\Client\Soap\ExtraServiceRequest
     */
    public function setServiceClassKey($ServiceClassKey)
    {
      $this->ServiceClassKey = $ServiceClassKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getCountryKey()
    {
      return $this->CountryKey;
    }

    /**
     * @param int $CountryKey
     * @return \App\Client\Soap\ExtraServiceRequest
     */
    public function setCountryKey($CountryKey)
    {
      $this->CountryKey = $CountryKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getCityKey()
    {
      return $this->CityKey;
    }

    /**
     * @param int $CityKey
     * @return \App\Client\Soap\ExtraServiceRequest
     */
    public function setCityKey($CityKey)
    {
      $this->CityKey = $CityKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getHotelKey()
    {
      return $this->HotelKey;
    }

    /**
     * @param int $HotelKey
     * @return \App\Client\Soap\ExtraServiceRequest
     */
    public function setHotelKey($HotelKey)
    {
      $this->HotelKey = $HotelKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getTypeKey()
    {
      return $this->TypeKey;
    }

    /**
     * @param int $TypeKey
     * @return \App\Client\Soap\ExtraServiceRequest
     */
    public function setTypeKey($TypeKey)
    {
      $this->TypeKey = $TypeKey;
      return $this;
    }

}
