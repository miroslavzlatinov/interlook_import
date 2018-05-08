<?php

namespace App\Client\Soap;

class ExtraServiceInfo
{

    /**
     * @var ArrayOfInt $CountryList
     */
    protected $CountryList = null;

    /**
     * @var ArrayOfInt $CityList
     */
    protected $CityList = null;

    /**
     * @var ArrayOfInt $HotelList
     */
    protected $HotelList = null;

    /**
     * @var ArrayOfInt $RoomTypeList
     */
    protected $RoomTypeList = null;

    /**
     * @var ArrayOfInt $RoomCategoryList
     */
    protected $RoomCategoryList = null;

    /**
     * @var ArrayOfInt $AccommodationList
     */
    protected $AccommodationList = null;

    /**
     * @var ArrayOfHotelLinkTypeEx $HotelLinkTypeList
     */
    protected $HotelLinkTypeList = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var int $ServiceClassId
     */
    protected $ServiceClassId = null;

    /**
     * @var boolean $IsWeb
     */
    protected $IsWeb = null;

    /**
     * @var int $DurationType
     */
    protected $DurationType = null;

    /**
     * @var \DateTime $UpdateDate
     */
    protected $UpdateDate = null;

    /**
     * @var boolean $IsPartnerLikeHotel
     */
    protected $IsPartnerLikeHotel = null;

    /**
     * @var int $LinkType
     */
    protected $LinkType = null;

    /**
     * @var boolean $IsAddHot
     */
    protected $IsAddHot = null;

    /**
     * @param int $Id
     * @param string $Name
     * @param string $Description
     * @param int $ServiceClassId
     * @param boolean $IsWeb
     * @param int $DurationType
     * @param \DateTime $UpdateDate
     * @param boolean $IsPartnerLikeHotel
     * @param int $LinkType
     * @param boolean $IsAddHot
     */
    public function __construct($Id, $Name, $Description, $ServiceClassId, $IsWeb, $DurationType, \DateTime $UpdateDate, $IsPartnerLikeHotel, $LinkType, $IsAddHot)
    {
      $this->Id = $Id;
      $this->Name = $Name;
      $this->Description = $Description;
      $this->ServiceClassId = $ServiceClassId;
      $this->IsWeb = $IsWeb;
      $this->DurationType = $DurationType;
      $this->UpdateDate = $UpdateDate->format(\DateTime::ATOM);
      $this->IsPartnerLikeHotel = $IsPartnerLikeHotel;
      $this->LinkType = $LinkType;
      $this->IsAddHot = $IsAddHot;
    }

    /**
     * @return ArrayOfInt
     */
    public function getCountryList()
    {
      return $this->CountryList;
    }

    /**
     * @param ArrayOfInt $CountryList
     * @return \App\Client\Soap\ExtraServiceInfo
     */
    public function setCountryList($CountryList)
    {
      $this->CountryList = $CountryList;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getCityList()
    {
      return $this->CityList;
    }

    /**
     * @param ArrayOfInt $CityList
     * @return \App\Client\Soap\ExtraServiceInfo
     */
    public function setCityList($CityList)
    {
      $this->CityList = $CityList;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getHotelList()
    {
      return $this->HotelList;
    }

    /**
     * @param ArrayOfInt $HotelList
     * @return \App\Client\Soap\ExtraServiceInfo
     */
    public function setHotelList($HotelList)
    {
      $this->HotelList = $HotelList;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getRoomTypeList()
    {
      return $this->RoomTypeList;
    }

    /**
     * @param ArrayOfInt $RoomTypeList
     * @return \App\Client\Soap\ExtraServiceInfo
     */
    public function setRoomTypeList($RoomTypeList)
    {
      $this->RoomTypeList = $RoomTypeList;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getRoomCategoryList()
    {
      return $this->RoomCategoryList;
    }

    /**
     * @param ArrayOfInt $RoomCategoryList
     * @return \App\Client\Soap\ExtraServiceInfo
     */
    public function setRoomCategoryList($RoomCategoryList)
    {
      $this->RoomCategoryList = $RoomCategoryList;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getAccommodationList()
    {
      return $this->AccommodationList;
    }

    /**
     * @param ArrayOfInt $AccommodationList
     * @return \App\Client\Soap\ExtraServiceInfo
     */
    public function setAccommodationList($AccommodationList)
    {
      $this->AccommodationList = $AccommodationList;
      return $this;
    }

    /**
     * @return ArrayOfHotelLinkTypeEx
     */
    public function getHotelLinkTypeList()
    {
      return $this->HotelLinkTypeList;
    }

    /**
     * @param ArrayOfHotelLinkTypeEx $HotelLinkTypeList
     * @return \App\Client\Soap\ExtraServiceInfo
     */
    public function setHotelLinkTypeList($HotelLinkTypeList)
    {
      $this->HotelLinkTypeList = $HotelLinkTypeList;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return \App\Client\Soap\ExtraServiceInfo
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \App\Client\Soap\ExtraServiceInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \App\Client\Soap\ExtraServiceInfo
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return int
     */
    public function getServiceClassId()
    {
      return $this->ServiceClassId;
    }

    /**
     * @param int $ServiceClassId
     * @return \App\Client\Soap\ExtraServiceInfo
     */
    public function setServiceClassId($ServiceClassId)
    {
      $this->ServiceClassId = $ServiceClassId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsWeb()
    {
      return $this->IsWeb;
    }

    /**
     * @param boolean $IsWeb
     * @return \App\Client\Soap\ExtraServiceInfo
     */
    public function setIsWeb($IsWeb)
    {
      $this->IsWeb = $IsWeb;
      return $this;
    }

    /**
     * @return int
     */
    public function getDurationType()
    {
      return $this->DurationType;
    }

    /**
     * @param int $DurationType
     * @return \App\Client\Soap\ExtraServiceInfo
     */
    public function setDurationType($DurationType)
    {
      $this->DurationType = $DurationType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateDate()
    {
      if ($this->UpdateDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->UpdateDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $UpdateDate
     * @return \App\Client\Soap\ExtraServiceInfo
     */
    public function setUpdateDate(\DateTime $UpdateDate)
    {
      $this->UpdateDate = $UpdateDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPartnerLikeHotel()
    {
      return $this->IsPartnerLikeHotel;
    }

    /**
     * @param boolean $IsPartnerLikeHotel
     * @return \App\Client\Soap\ExtraServiceInfo
     */
    public function setIsPartnerLikeHotel($IsPartnerLikeHotel)
    {
      $this->IsPartnerLikeHotel = $IsPartnerLikeHotel;
      return $this;
    }

    /**
     * @return int
     */
    public function getLinkType()
    {
      return $this->LinkType;
    }

    /**
     * @param int $LinkType
     * @return \App\Client\Soap\ExtraServiceInfo
     */
    public function setLinkType($LinkType)
    {
      $this->LinkType = $LinkType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAddHot()
    {
      return $this->IsAddHot;
    }

    /**
     * @param boolean $IsAddHot
     * @return \App\Client\Soap\ExtraServiceInfo
     */
    public function setIsAddHot($IsAddHot)
    {
      $this->IsAddHot = $IsAddHot;
      return $this;
    }

}
