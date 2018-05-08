<?php

namespace App\Client\Soap;

class VisaService extends Service
{

    /**
     * @var Visa $Visa
     */
    protected $Visa = null;

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
     * @return Visa
     */
    public function getVisa()
    {
      return $this->Visa;
    }

    /**
     * @param Visa $Visa
     * @return \App\Client\Soap\VisaService
     */
    public function setVisa($Visa)
    {
      $this->Visa = $Visa;
      return $this;
    }

}
