<?php

namespace App\Client\Soap;

class Hotel extends Reference
{

    /**
     * @var HotelCategory $HotelCategory
     */
    protected $HotelCategory = null;

    /**
     * @var City $City
     */
    protected $City = null;

    /**
     * @var int $RegionID
     */
    protected $RegionID = null;

    /**
     * @var PriceType $PriceType
     */
    protected $PriceType = null;

    /**
     * @var int $CountCosts
     */
    protected $CountCosts = null;

    /**
     * @var int $CityID
     */
    protected $CityID = null;

    /**
     * @var int $HotelCategoryID
     */
    protected $HotelCategoryID = null;

    /**
     * @param int $ID
     * @param int $RegionID
     * @param PriceType $PriceType
     * @param int $CountCosts
     * @param int $CityID
     * @param int $HotelCategoryID
     */
    public function __construct($ID, $RegionID, $PriceType, $CountCosts, $CityID, $HotelCategoryID)
    {
      parent::__construct($ID);
      $this->RegionID = $RegionID;
      $this->PriceType = $PriceType;
      $this->CountCosts = $CountCosts;
      $this->CityID = $CityID;
      $this->HotelCategoryID = $HotelCategoryID;
    }

    /**
     * @return HotelCategory
     */
    public function getHotelCategory()
    {
      return $this->HotelCategory;
    }

    /**
     * @param HotelCategory $HotelCategory
     * @return \App\Client\Soap\Hotel
     */
    public function setHotelCategory($HotelCategory)
    {
      $this->HotelCategory = $HotelCategory;
      return $this;
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
     * @return \App\Client\Soap\Hotel
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
     * @return \App\Client\Soap\Hotel
     */
    public function setRegionID($RegionID)
    {
      $this->RegionID = $RegionID;
      return $this;
    }

    /**
     * @return PriceType
     */
    public function getPriceType()
    {
      return $this->PriceType;
    }

    /**
     * @param PriceType $PriceType
     * @return \App\Client\Soap\Hotel
     */
    public function setPriceType($PriceType)
    {
      $this->PriceType = $PriceType;
      return $this;
    }

    /**
     * @return int
     */
    public function getCountCosts()
    {
      return $this->CountCosts;
    }

    /**
     * @param int $CountCosts
     * @return \App\Client\Soap\Hotel
     */
    public function setCountCosts($CountCosts)
    {
      $this->CountCosts = $CountCosts;
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
     * @return \App\Client\Soap\Hotel
     */
    public function setCityID($CityID)
    {
      $this->CityID = $CityID;
      return $this;
    }

    /**
     * @return int
     */
    public function getHotelCategoryID()
    {
      return $this->HotelCategoryID;
    }

    /**
     * @param int $HotelCategoryID
     * @return \App\Client\Soap\Hotel
     */
    public function setHotelCategoryID($HotelCategoryID)
    {
      $this->HotelCategoryID = $HotelCategoryID;
      return $this;
    }

}
