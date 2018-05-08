<?php

namespace App\Client\Soap;

class Airport extends Reference
{

    /**
     * @var City $City
     */
    protected $City = null;

    /**
     * @var int $RegionID
     */
    protected $RegionID = null;

    /**
     * @var int $CityID
     */
    protected $CityID = null;

    /**
     * @param int $ID
     * @param int $RegionID
     * @param int $CityID
     */
    public function __construct($ID, $RegionID, $CityID)
    {
      parent::__construct($ID);
      $this->RegionID = $RegionID;
      $this->CityID = $CityID;
    }

    /**
     * @return City
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param City $City
     * @return \App\Client\Soap\Airport
     */
    public function setCity($City)
    {
      $this->City = $City;
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
     * @return \App\Client\Soap\Airport
     */
    public function setRegionID($RegionID)
    {
      $this->RegionID = $RegionID;
      return $this;
    }

    /**
     * @return int
     */
    public function getCityID()
    {
      return $this->CityID;
    }

    /**
     * @param int $CityID
     * @return \App\Client\Soap\Airport
     */
    public function setCityID($CityID)
    {
      $this->CityID = $CityID;
      return $this;
    }

}
