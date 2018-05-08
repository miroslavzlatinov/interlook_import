<?php

namespace App\Client\Soap;

class FlightService extends Service
{

    /**
     * @var Tariff $Tariff
     */
    protected $Tariff = null;

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
     */
    public function __construct($ExternalID, $Price, $NMen, $PartnerID, $Quota, $PacketKey, \DateTime $StartDate, $StartDay, $Duration, $Brutto, $Netto, $ServiceClassID, $TouristCount, $ID)
    {
      parent::__construct($ExternalID, $Price, $NMen, $PartnerID, $Quota, $PacketKey, $StartDate, $StartDay, $Duration, $Brutto, $Netto, $ServiceClassID, $TouristCount, $ID);
    }

    /**
     * @return Tariff
     */
    public function getTariff()
    {
      return $this->Tariff;
    }

    /**
     * @param Tariff $Tariff
     * @return \App\Client\Soap\FlightService
     */
    public function setTariff($Tariff)
    {
      $this->Tariff = $Tariff;
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
     * @return \App\Client\Soap\FlightService
     */
    public function setFlight($Flight)
    {
      $this->Flight = $Flight;
      return $this;
    }

}
