<?php

namespace App\Client\Soap;

class Service
{

    /**
     * @var int $ExternalID
     */
    protected $ExternalID = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @var int $NMen
     */
    protected $NMen = null;

    /**
     * @var ServiceClass $ServiceClass
     */
    protected $ServiceClass = null;

    /**
     * @var Partner $Partner
     */
    protected $Partner = null;

    /**
     * @var int $PartnerID
     */
    protected $PartnerID = null;

    /**
     * @var QuotaResultStatus $Quota
     */
    protected $Quota = null;

    /**
     * @var int $PacketKey
     */
    protected $PacketKey = null;

    /**
     * @var ArrayOfParameterPair $AdditionalParams
     */
    protected $AdditionalParams = null;

    /**
     * @var ArrayOfTourist $Tourists
     */
    protected $Tourists = null;

    /**
     * @var string $DetailNetto
     */
    protected $DetailNetto = null;

    /**
     * @var string $DetailBrutto
     */
    protected $DetailBrutto = null;

    /**
     * @var string $Notes
     */
    protected $Notes = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var int $StartDay
     */
    protected $StartDay = null;

    /**
     * @var int $Duration
     */
    protected $Duration = null;

    /**
     * @var string $RateBrutto
     */
    protected $RateBrutto = null;

    /**
     * @var float $Brutto
     */
    protected $Brutto = null;

    /**
     * @var string $RateNetto
     */
    protected $RateNetto = null;

    /**
     * @var float $Netto
     */
    protected $Netto = null;

    /**
     * @var int $ServiceClassID
     */
    protected $ServiceClassID = null;

    /**
     * @var int $TouristCount
     */
    protected $TouristCount = null;

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var StatusService $Status
     */
    protected $Status = null;

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
      $this->ExternalID = $ExternalID;
      $this->Price = $Price;
      $this->NMen = $NMen;
      $this->PartnerID = $PartnerID;
      $this->Quota = $Quota;
      $this->PacketKey = $PacketKey;
      $this->StartDate = $StartDate->format(\DateTime::ATOM);
      $this->StartDay = $StartDay;
      $this->Duration = $Duration;
      $this->Brutto = $Brutto;
      $this->Netto = $Netto;
      $this->ServiceClassID = $ServiceClassID;
      $this->TouristCount = $TouristCount;
      $this->ID = $ID;
    }

    /**
     * @return int
     */
    public function getExternalID()
    {
      return $this->ExternalID;
    }

    /**
     * @param int $ExternalID
     * @return \App\Client\Soap\Service
     */
    public function setExternalID($ExternalID)
    {
      $this->ExternalID = $ExternalID;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param float $Price
     * @return \App\Client\Soap\Service
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return int
     */
    public function getNMen()
    {
      return $this->NMen;
    }

    /**
     * @param int $NMen
     * @return \App\Client\Soap\Service
     */
    public function setNMen($NMen)
    {
      $this->NMen = $NMen;
      return $this;
    }

    /**
     * @return ServiceClass
     */
    public function getServiceClass()
    {
      return $this->ServiceClass;
    }

    /**
     * @param ServiceClass $ServiceClass
     * @return \App\Client\Soap\Service
     */
    public function setServiceClass($ServiceClass)
    {
      $this->ServiceClass = $ServiceClass;
      return $this;
    }

    /**
     * @return Partner
     */
    public function getPartner()
    {
      return $this->Partner;
    }

    /**
     * @param Partner $Partner
     * @return \App\Client\Soap\Service
     */
    public function setPartner($Partner)
    {
      $this->Partner = $Partner;
      return $this;
    }

    /**
     * @return int
     */
    public function getPartnerID()
    {
      return $this->PartnerID;
    }

    /**
     * @param int $PartnerID
     * @return \App\Client\Soap\Service
     */
    public function setPartnerID($PartnerID)
    {
      $this->PartnerID = $PartnerID;
      return $this;
    }

    /**
     * @return QuotaResultStatus
     */
    public function getQuota()
    {
      return $this->Quota;
    }

    /**
     * @param QuotaResultStatus $Quota
     * @return \App\Client\Soap\Service
     */
    public function setQuota($Quota)
    {
      $this->Quota = $Quota;
      return $this;
    }

    /**
     * @return int
     */
    public function getPacketKey()
    {
      return $this->PacketKey;
    }

    /**
     * @param int $PacketKey
     * @return \App\Client\Soap\Service
     */
    public function setPacketKey($PacketKey)
    {
      $this->PacketKey = $PacketKey;
      return $this;
    }

    /**
     * @return ArrayOfParameterPair
     */
    public function getAdditionalParams()
    {
      return $this->AdditionalParams;
    }

    /**
     * @param ArrayOfParameterPair $AdditionalParams
     * @return \App\Client\Soap\Service
     */
    public function setAdditionalParams($AdditionalParams)
    {
      $this->AdditionalParams = $AdditionalParams;
      return $this;
    }

    /**
     * @return ArrayOfTourist
     */
    public function getTourists()
    {
      return $this->Tourists;
    }

    /**
     * @param ArrayOfTourist $Tourists
     * @return \App\Client\Soap\Service
     */
    public function setTourists($Tourists)
    {
      $this->Tourists = $Tourists;
      return $this;
    }

    /**
     * @return string
     */
    public function getDetailNetto()
    {
      return $this->DetailNetto;
    }

    /**
     * @param string $DetailNetto
     * @return \App\Client\Soap\Service
     */
    public function setDetailNetto($DetailNetto)
    {
      $this->DetailNetto = $DetailNetto;
      return $this;
    }

    /**
     * @return string
     */
    public function getDetailBrutto()
    {
      return $this->DetailBrutto;
    }

    /**
     * @param string $DetailBrutto
     * @return \App\Client\Soap\Service
     */
    public function setDetailBrutto($DetailBrutto)
    {
      $this->DetailBrutto = $DetailBrutto;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
      return $this->Notes;
    }

    /**
     * @param string $Notes
     * @return \App\Client\Soap\Service
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
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
     * @return \App\Client\Soap\Service
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->StartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartDate
     * @return \App\Client\Soap\Service
     */
    public function setStartDate(\DateTime $StartDate)
    {
      $this->StartDate = $StartDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getStartDay()
    {
      return $this->StartDay;
    }

    /**
     * @param int $StartDay
     * @return \App\Client\Soap\Service
     */
    public function setStartDay($StartDay)
    {
      $this->StartDay = $StartDay;
      return $this;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
      return $this->Duration;
    }

    /**
     * @param int $Duration
     * @return \App\Client\Soap\Service
     */
    public function setDuration($Duration)
    {
      $this->Duration = $Duration;
      return $this;
    }

    /**
     * @return string
     */
    public function getRateBrutto()
    {
      return $this->RateBrutto;
    }

    /**
     * @param string $RateBrutto
     * @return \App\Client\Soap\Service
     */
    public function setRateBrutto($RateBrutto)
    {
      $this->RateBrutto = $RateBrutto;
      return $this;
    }

    /**
     * @return float
     */
    public function getBrutto()
    {
      return $this->Brutto;
    }

    /**
     * @param float $Brutto
     * @return \App\Client\Soap\Service
     */
    public function setBrutto($Brutto)
    {
      $this->Brutto = $Brutto;
      return $this;
    }

    /**
     * @return string
     */
    public function getRateNetto()
    {
      return $this->RateNetto;
    }

    /**
     * @param string $RateNetto
     * @return \App\Client\Soap\Service
     */
    public function setRateNetto($RateNetto)
    {
      $this->RateNetto = $RateNetto;
      return $this;
    }

    /**
     * @return float
     */
    public function getNetto()
    {
      return $this->Netto;
    }

    /**
     * @param float $Netto
     * @return \App\Client\Soap\Service
     */
    public function setNetto($Netto)
    {
      $this->Netto = $Netto;
      return $this;
    }

    /**
     * @return int
     */
    public function getServiceClassID()
    {
      return $this->ServiceClassID;
    }

    /**
     * @param int $ServiceClassID
     * @return \App\Client\Soap\Service
     */
    public function setServiceClassID($ServiceClassID)
    {
      $this->ServiceClassID = $ServiceClassID;
      return $this;
    }

    /**
     * @return int
     */
    public function getTouristCount()
    {
      return $this->TouristCount;
    }

    /**
     * @param int $TouristCount
     * @return \App\Client\Soap\Service
     */
    public function setTouristCount($TouristCount)
    {
      $this->TouristCount = $TouristCount;
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
     * @return \App\Client\Soap\Service
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return StatusService
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param StatusService $Status
     * @return \App\Client\Soap\Service
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
