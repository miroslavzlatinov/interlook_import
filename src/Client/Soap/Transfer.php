<?php

namespace App\Client\Soap;

class Transfer extends Reference
{

    /**
     * @var string $PlaceFrom
     */
    protected $PlaceFrom = null;

    /**
     * @var string $PlaceTo
     */
    protected $PlaceTo = null;

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
     * @return string
     */
    public function getPlaceFrom()
    {
      return $this->PlaceFrom;
    }

    /**
     * @param string $PlaceFrom
     * @return \App\Client\Soap\Transfer
     */
    public function setPlaceFrom($PlaceFrom)
    {
      $this->PlaceFrom = $PlaceFrom;
      return $this;
    }

    /**
     * @return string
     */
    public function getPlaceTo()
    {
      return $this->PlaceTo;
    }

    /**
     * @param string $PlaceTo
     * @return \App\Client\Soap\Transfer
     */
    public function setPlaceTo($PlaceTo)
    {
      $this->PlaceTo = $PlaceTo;
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
     * @return \App\Client\Soap\Transfer
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
     * @return \App\Client\Soap\Transfer
     */
    public function setRegionID($RegionID)
    {
      $this->RegionID = $RegionID;
      return $this;
    }

}
