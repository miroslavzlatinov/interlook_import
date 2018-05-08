<?php

namespace App\Client\Soap;

class TransferService extends Service
{

    /**
     * @var Transfer $Transfer
     */
    protected $Transfer = null;

    /**
     * @var Transport $Transport
     */
    protected $Transport = null;

    /**
     * @var int $PointToId
     */
    protected $PointToId = null;

    /**
     * @var int $CityKey
     */
    protected $CityKey = null;

    /**
     * @var string $PointToName
     */
    protected $PointToName = null;

    /**
     * @var int $PointFromId
     */
    protected $PointFromId = null;

    /**
     * @var string $PointFromName
     */
    protected $PointFromName = null;

    /**
     * @var Flight $Flight
     */
    protected $Flight = null;

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
     * @param int $PointToId
     * @param int $CityKey
     * @param int $PointFromId
     */
    public function __construct($ExternalID, $Price, $NMen, $PartnerID, $Quota, $PacketKey, \DateTime $StartDate, $StartDay, $Duration, $Brutto, $Netto, $ServiceClassID, $TouristCount, $ID, $PointToId, $CityKey, $PointFromId)
    {
      parent::__construct($ExternalID, $Price, $NMen, $PartnerID, $Quota, $PacketKey, $StartDate, $StartDay, $Duration, $Brutto, $Netto, $ServiceClassID, $TouristCount, $ID);
      $this->PointToId = $PointToId;
      $this->CityKey = $CityKey;
      $this->PointFromId = $PointFromId;
    }

    /**
     * @return Transfer
     */
    public function getTransfer()
    {
      return $this->Transfer;
    }

    /**
     * @param Transfer $Transfer
     * @return \App\Client\Soap\TransferService
     */
    public function setTransfer($Transfer)
    {
      $this->Transfer = $Transfer;
      return $this;
    }

    /**
     * @return Transport
     */
    public function getTransport()
    {
      return $this->Transport;
    }

    /**
     * @param Transport $Transport
     * @return \App\Client\Soap\TransferService
     */
    public function setTransport($Transport)
    {
      $this->Transport = $Transport;
      return $this;
    }

    /**
     * @return int
     */
    public function getPointToId()
    {
      return $this->PointToId;
    }

    /**
     * @param int $PointToId
     * @return \App\Client\Soap\TransferService
     */
    public function setPointToId($PointToId)
    {
      $this->PointToId = $PointToId;
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
     * @return \App\Client\Soap\TransferService
     */
    public function setCityKey($CityKey)
    {
      $this->CityKey = $CityKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getPointToName()
    {
      return $this->PointToName;
    }

    /**
     * @param string $PointToName
     * @return \App\Client\Soap\TransferService
     */
    public function setPointToName($PointToName)
    {
      $this->PointToName = $PointToName;
      return $this;
    }

    /**
     * @return int
     */
    public function getPointFromId()
    {
      return $this->PointFromId;
    }

    /**
     * @param int $PointFromId
     * @return \App\Client\Soap\TransferService
     */
    public function setPointFromId($PointFromId)
    {
      $this->PointFromId = $PointFromId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPointFromName()
    {
      return $this->PointFromName;
    }

    /**
     * @param string $PointFromName
     * @return \App\Client\Soap\TransferService
     */
    public function setPointFromName($PointFromName)
    {
      $this->PointFromName = $PointFromName;
      return $this;
    }

    /**
     * @return Flight
     */
    public function getFlight()
    {
      return $this->Flight;
    }

    /**
     * @param Flight $Flight
     * @return \App\Client\Soap\TransferService
     */
    public function setFlight($Flight)
    {
      $this->Flight = $Flight;
      return $this;
    }

}
