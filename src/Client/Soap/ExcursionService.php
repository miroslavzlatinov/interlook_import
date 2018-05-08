<?php

namespace App\Client\Soap;

class ExcursionService extends Service
{

    /**
     * @var int $CityKey
     */
    protected $CityKey = null;

    /**
     * @var Excursion $Excursion
     */
    protected $Excursion = null;

    /**
     * @var Transport $Transport
     */
    protected $Transport = null;

    /**
     * @var int $ExcursionID
     */
    protected $ExcursionID = null;

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
     * @param int $CityKey
     * @param int $ExcursionID
     */
    public function __construct($ExternalID, $Price, $NMen, $PartnerID, $Quota, $PacketKey, \DateTime $StartDate, $StartDay, $Duration, $Brutto, $Netto, $ServiceClassID, $TouristCount, $ID, $CityKey, $ExcursionID)
    {
      parent::__construct($ExternalID, $Price, $NMen, $PartnerID, $Quota, $PacketKey, $StartDate, $StartDay, $Duration, $Brutto, $Netto, $ServiceClassID, $TouristCount, $ID);
      $this->CityKey = $CityKey;
      $this->ExcursionID = $ExcursionID;
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
     * @return \App\Client\Soap\ExcursionService
     */
    public function setCityKey($CityKey)
    {
      $this->CityKey = $CityKey;
      return $this;
    }

    /**
     * @return Excursion
     */
    public function getExcursion()
    {
      return $this->Excursion;
    }

    /**
     * @param Excursion $Excursion
     * @return \App\Client\Soap\ExcursionService
     */
    public function setExcursion($Excursion)
    {
      $this->Excursion = $Excursion;
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
     * @return \App\Client\Soap\ExcursionService
     */
    public function setTransport($Transport)
    {
      $this->Transport = $Transport;
      return $this;
    }

    /**
     * @return int
     */
    public function getExcursionID()
    {
      return $this->ExcursionID;
    }

    /**
     * @param int $ExcursionID
     * @return \App\Client\Soap\ExcursionService
     */
    public function setExcursionID($ExcursionID)
    {
      $this->ExcursionID = $ExcursionID;
      return $this;
    }

}
