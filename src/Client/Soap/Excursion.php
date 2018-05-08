<?php

namespace App\Client\Soap;

class Excursion extends Reference
{

    /**
     * @var int $CityID
     */
    protected $CityID = null;

    /**
     * @var int $RegionID
     */
    protected $RegionID = null;

    /**
     * @param int $ID
     * @param int $CityID
     * @param int $RegionID
     */
    public function __construct($ID, $CityID, $RegionID)
    {
      parent::__construct($ID);
      $this->CityID = $CityID;
      $this->RegionID = $RegionID;
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
     * @return \App\Client\Soap\Excursion
     */
    public function setCityID($CityID)
    {
      $this->CityID = $CityID;
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
     * @return \App\Client\Soap\Excursion
     */
    public function setRegionID($RegionID)
    {
      $this->RegionID = $RegionID;
      return $this;
    }

}
