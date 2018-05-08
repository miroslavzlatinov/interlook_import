<?php

namespace App\Client\Soap;

class Room
{

    /**
     * @var RoomType $RoomType
     */
    protected $RoomType = null;

    /**
     * @var int $RoomTypeID
     */
    protected $RoomTypeID = null;

    /**
     * @var RoomCategory $RoomCategory
     */
    protected $RoomCategory = null;

    /**
     * @var int $RoomCategoryID
     */
    protected $RoomCategoryID = null;

    /**
     * @var RoomAccomodation $RoomAccomodation
     */
    protected $RoomAccomodation = null;

    /**
     * @var int $RoomAccomodationID
     */
    protected $RoomAccomodationID = null;

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @param int $RoomTypeID
     * @param int $RoomCategoryID
     * @param int $RoomAccomodationID
     * @param int $ID
     */
    public function __construct($RoomTypeID, $RoomCategoryID, $RoomAccomodationID, $ID)
    {
      $this->RoomTypeID = $RoomTypeID;
      $this->RoomCategoryID = $RoomCategoryID;
      $this->RoomAccomodationID = $RoomAccomodationID;
      $this->ID = $ID;
    }

    /**
     * @return RoomType
     */
    public function getRoomType()
    {
      return $this->RoomType;
    }

    /**
     * @param RoomType $RoomType
     * @return \App\Client\Soap\Room
     */
    public function setRoomType($RoomType)
    {
      $this->RoomType = $RoomType;
      return $this;
    }

    /**
     * @return int
     */
    public function getRoomTypeID()
    {
      return $this->RoomTypeID;
    }

    /**
     * @param int $RoomTypeID
     * @return \App\Client\Soap\Room
     */
    public function setRoomTypeID($RoomTypeID)
    {
      $this->RoomTypeID = $RoomTypeID;
      return $this;
    }

    /**
     * @return RoomCategory
     */
    public function getRoomCategory()
    {
      return $this->RoomCategory;
    }

    /**
     * @param RoomCategory $RoomCategory
     * @return \App\Client\Soap\Room
     */
    public function setRoomCategory($RoomCategory)
    {
      $this->RoomCategory = $RoomCategory;
      return $this;
    }

    /**
     * @return int
     */
    public function getRoomCategoryID()
    {
      return $this->RoomCategoryID;
    }

    /**
     * @param int $RoomCategoryID
     * @return \App\Client\Soap\Room
     */
    public function setRoomCategoryID($RoomCategoryID)
    {
      $this->RoomCategoryID = $RoomCategoryID;
      return $this;
    }

    /**
     * @return RoomAccomodation
     */
    public function getRoomAccomodation()
    {
      return $this->RoomAccomodation;
    }

    /**
     * @param RoomAccomodation $RoomAccomodation
     * @return \App\Client\Soap\Room
     */
    public function setRoomAccomodation($RoomAccomodation)
    {
      $this->RoomAccomodation = $RoomAccomodation;
      return $this;
    }

    /**
     * @return int
     */
    public function getRoomAccomodationID()
    {
      return $this->RoomAccomodationID;
    }

    /**
     * @param int $RoomAccomodationID
     * @return \App\Client\Soap\Room
     */
    public function setRoomAccomodationID($RoomAccomodationID)
    {
      $this->RoomAccomodationID = $RoomAccomodationID;
      return $this;
    }

    /**
     * @return int
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param int $ID
     * @return \App\Client\Soap\Room
     */
    public function setID($ID)
    {
      $this->ID = $ID;
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
     * @return \App\Client\Soap\Room
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
