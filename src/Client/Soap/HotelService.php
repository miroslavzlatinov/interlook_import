<?php

namespace App\Client\Soap;

class HotelService extends Service
{

    /**
     * @var Hotel $Hotel
     */
    protected $Hotel = null;

    /**
     * @var Room $Room
     */
    protected $Room = null;

    /**
     * @var int $RoomID
     */
    protected $RoomID = null;

    /**
     * @var Pansion $Pansion
     */
    protected $Pansion = null;

    /**
     * @var int $PansionID
     */
    protected $PansionID = null;

    /**
     * @param int $ExternalID
     * @param float $Price
     * @param int $NMen
     * @param int $PartnerID
     * @param QuotaResultStatus $Quota
     * @param int $PacketKey
     * @param \DateTime $StartDate
     * @param int $StartDay
     * @param int $Duration
     * @param float $Brutto
     * @param float $Netto
     * @param int $ServiceClassID
     * @param int $TouristCount
     * @param int $ID
     * @param int $RoomID
     * @param int $PansionID
     */
    public function __construct($ExternalID, $Price, $NMen, $PartnerID, $Quota, $PacketKey, \DateTime $StartDate, $StartDay, $Duration, $Brutto, $Netto, $ServiceClassID, $TouristCount, $ID, $RoomID, $PansionID)
    {
      parent::__construct($ExternalID, $Price, $NMen, $PartnerID, $Quota, $PacketKey, $StartDate, $StartDay, $Duration, $Brutto, $Netto, $ServiceClassID, $TouristCount, $ID);
      $this->RoomID = $RoomID;
      $this->PansionID = $PansionID;
    }

    /**
     * @return Hotel
     */
    public function getHotel()
    {
      return $this->Hotel;
    }

    /**
     * @param Hotel $Hotel
     * @return \App\Client\Soap\HotelService
     */
    public function setHotel($Hotel)
    {
      $this->Hotel = $Hotel;
      return $this;
    }

    /**
     * @return Room
     */
    public function getRoom()
    {
      return $this->Room;
    }

    /**
     * @param Room $Room
     * @return \App\Client\Soap\HotelService
     */
    public function setRoom($Room)
    {
      $this->Room = $Room;
      return $this;
    }

    /**
     * @return int
     */
    public function getRoomID()
    {
      return $this->RoomID;
    }

    /**
     * @param int $RoomID
     * @return \App\Client\Soap\HotelService
     */
    public function setRoomID($RoomID)
    {
      $this->RoomID = $RoomID;
      return $this;
    }

    /**
     * @return Pansion
     */
    public function getPansion()
    {
      return $this->Pansion;
    }

    /**
     * @param Pansion $Pansion
     * @return \App\Client\Soap\HotelService
     */
    public function setPansion($Pansion)
    {
      $this->Pansion = $Pansion;
      return $this;
    }

    /**
     * @return int
     */
    public function getPansionID()
    {
      return $this->PansionID;
    }

    /**
     * @param int $PansionID
     * @return \App\Client\Soap\HotelService
     */
    public function setPansionID($PansionID)
    {
      $this->PansionID = $PansionID;
      return $this;
    }

}
