<?php

namespace App\Client\Soap;

class AllotmentHotel extends Allotment
{

    /**
     * @var string $HotelName
     */
    protected $HotelName = null;

    /**
     * @var string $RoomCategoryName
     */
    protected $RoomCategoryName = null;

    /**
     * @var string $RoomTypeName
     */
    protected $RoomTypeName = null;

    /**
     * @var int $HotelKey
     */
    protected $HotelKey = null;

    /**
     * @var int $RoomTypeKey
     */
    protected $RoomTypeKey = null;

    /**
     * @var int $RoomCategoryKey
     */
    protected $RoomCategoryKey = null;

    /**
     * @param int $Code
     * @param \DateTime $StartDate
     * @param \DateTime $EndDate
     * @param \DateTime $Date
     * @param \DateTime $CreateDate
     * @param int $ID
     * @param string $Name
     * @param boolean $IsRemove
     * @param int $Total
     * @param int $Sold
     * @param int $Free
     * @param string $HotelName
     * @param string $RoomCategoryName
     * @param string $RoomTypeName
     * @param int $HotelKey
     * @param int $RoomTypeKey
     * @param int $RoomCategoryKey
     */
    public function __construct($Code, \DateTime $StartDate, \DateTime $EndDate, \DateTime $Date, \DateTime $CreateDate, $ID, $Name, $IsRemove, $Total, $Sold, $Free, $HotelName, $RoomCategoryName, $RoomTypeName, $HotelKey, $RoomTypeKey, $RoomCategoryKey)
    {
      parent::__construct($Code, $StartDate, $EndDate, $Date, $CreateDate, $ID, $Name, $IsRemove, $Total, $Sold, $Free);
      $this->HotelName = $HotelName;
      $this->RoomCategoryName = $RoomCategoryName;
      $this->RoomTypeName = $RoomTypeName;
      $this->HotelKey = $HotelKey;
      $this->RoomTypeKey = $RoomTypeKey;
      $this->RoomCategoryKey = $RoomCategoryKey;
    }

    /**
     * @return string
     */
    public function getHotelName()
    {
      return $this->HotelName;
    }

    /**
     * @param string $HotelName
     * @return \App\Client\Soap\AllotmentHotel
     */
    public function setHotelName($HotelName)
    {
      $this->HotelName = $HotelName;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoomCategoryName()
    {
      return $this->RoomCategoryName;
    }

    /**
     * @param string $RoomCategoryName
     * @return \App\Client\Soap\AllotmentHotel
     */
    public function setRoomCategoryName($RoomCategoryName)
    {
      $this->RoomCategoryName = $RoomCategoryName;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoomTypeName()
    {
      return $this->RoomTypeName;
    }

    /**
     * @param string $RoomTypeName
     * @return \App\Client\Soap\AllotmentHotel
     */
    public function setRoomTypeName($RoomTypeName)
    {
      $this->RoomTypeName = $RoomTypeName;
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
     * @return \App\Client\Soap\AllotmentHotel
     */
    public function setHotelKey($HotelKey)
    {
      $this->HotelKey = $HotelKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getRoomTypeKey()
    {
      return $this->RoomTypeKey;
    }

    /**
     * @param int $RoomTypeKey
     * @return \App\Client\Soap\AllotmentHotel
     */
    public function setRoomTypeKey($RoomTypeKey)
    {
      $this->RoomTypeKey = $RoomTypeKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getRoomCategoryKey()
    {
      return $this->RoomCategoryKey;
    }

    /**
     * @param int $RoomCategoryKey
     * @return \App\Client\Soap\AllotmentHotel
     */
    public function setRoomCategoryKey($RoomCategoryKey)
    {
      $this->RoomCategoryKey = $RoomCategoryKey;
      return $this;
    }

}
