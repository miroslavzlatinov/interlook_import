<?php

namespace App\Client\Soap;

class City extends Reference
{

    /**
     * @var Country $Country
     */
    protected $Country = null;

    /**
     * @var int $CountryID
     */
    protected $CountryID = null;

    /**
     * @var int $RegionID
     */
    protected $RegionID = null;

    /**
     * @param int $ID
     * @param int $CountryID
     * @param int $RegionID
     */
    public function __construct($ID, $CountryID, $RegionID)
    {
      parent::__construct($ID);
      $this->CountryID = $CountryID;
      $this->RegionID = $RegionID;
    }

    /**
     * @return Country
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param Country $Country
     * @return \App\Client\Soap\City
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return int
     */
    public function getCountryID()
    {
      return $this->CountryID;
    }

    /**
     * @param int $CountryID
     * @return \App\Client\Soap\City
     */
    public function setCountryID($CountryID)
    {
      $this->CountryID = $CountryID;
      return $this;
    }

    /**
     * @return int
     */
    public function getRegionID()
    {
      return $this->RegionID;
    }

    /**
     * @param int $RegionID
     * @return \App\Client\Soap\City
     */
    public function setRegionID($RegionID)
    {
      $this->RegionID = $RegionID;
      return $this;
    }

}
