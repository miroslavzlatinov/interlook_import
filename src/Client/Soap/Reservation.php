<?php

namespace App\Client\Soap;

class Reservation
{

    /**
     * @var float $agentDiscount
     */
    protected $agentDiscount = null;

    /**
     * @var Rate $Rate
     */
    protected $Rate = null;

    /**
     * @var ArrayOfTouristService $TouristServices
     */
    protected $TouristServices = null;

    /**
     * @var ArrayOfService $Services
     */
    protected $Services = null;

    /**
     * @var Flight $FlightIn
     */
    protected $FlightIn = null;

    /**
     * @var Flight $FlightOut
     */
    protected $FlightOut = null;

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var float $Netto
     */
    protected $Netto = null;

    /**
     * @var float $Brutto
     */
    protected $Brutto = null;

    /**
     * @var int $CountryID
     */
    protected $CountryID = null;

    /**
     * @var int $CityID
     */
    protected $CityID = null;

    /**
     * @var int $PartnerID
     */
    protected $PartnerID = null;

    /**
     * @var float $AgentDiscount
     */
    protected $AgentDiscount = null;

    /**
     * @var Status $Status
     */
    protected $Status = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var int $Duration
     */
    protected $Duration = null;

    /**
     * @var \DateTime $CreationDate
     */
    protected $CreationDate = null;

    /**
     * @var int $CreatorID
     */
    protected $CreatorID = null;

    /**
     * @var ArrayOfTourist $Tourists
     */
    protected $Tourists = null;

    /**
     * @var int $OwnerID
     */
    protected $OwnerID = null;

    /**
     * @var int $ExternalID
     */
    protected $ExternalID = null;

    /**
     * @var ArrayOfParameterPair $AdditionalParams
     */
    protected $AdditionalParams = null;

    /**
     * @var boolean $HasInvoices
     */
    protected $HasInvoices = null;

    /**
     * @param float $agentDiscount
     * @param int $ID
     * @param float $Netto
     * @param float $Brutto
     * @param int $CountryID
     * @param int $CityID
     * @param int $PartnerID
     * @param float $AgentDiscount
     * @param Status $Status
     * @param \DateTime $StartDate
     * @param \DateTime $EndDate
     * @param int $Duration
     * @param \DateTime $CreationDate
     * @param int $CreatorID
     * @param int $OwnerID
     * @param int $ExternalID
     * @param boolean $HasInvoices
     */
    public function __construct($agentDiscount, $ID, $Netto, $Brutto, $CountryID, $CityID, $PartnerID, $AgentDiscount, $Status, \DateTime $StartDate, \DateTime $EndDate, $Duration, \DateTime $CreationDate, $CreatorID, $OwnerID, $ExternalID, $HasInvoices)
    {
      $this->agentDiscount = $agentDiscount;
      $this->ID = $ID;
      $this->Netto = $Netto;
      $this->Brutto = $Brutto;
      $this->CountryID = $CountryID;
      $this->CityID = $CityID;
      $this->PartnerID = $PartnerID;
      $this->AgentDiscount = $AgentDiscount;
      $this->Status = $Status;
      $this->StartDate = $StartDate->format(\DateTime::ATOM);
      $this->EndDate = $EndDate->format(\DateTime::ATOM);
      $this->Duration = $Duration;
      $this->CreationDate = $CreationDate->format(\DateTime::ATOM);
      $this->CreatorID = $CreatorID;
      $this->OwnerID = $OwnerID;
      $this->ExternalID = $ExternalID;
      $this->HasInvoices = $HasInvoices;
    }

    /**
     * @return float
     */
    public function getAgentDiscount()
    {
      return $this->AgentDiscount;
    }

    /**
     * @param float $AgentDiscount
     * @return \App\Client\Soap\Reservation
     */
    public function setAgentDiscount($AgentDiscount)
    {
      $this->AgentDiscount = $AgentDiscount;
      return $this;
    }

    /**
     * @return Rate
     */
    public function getRate()
    {
      return $this->Rate;
    }

    /**
     * @param Rate $Rate
     * @return \App\Client\Soap\Reservation
     */
    public function setRate($Rate)
    {
      $this->Rate = $Rate;
      return $this;
    }

    /**
     * @return ArrayOfTouristService
     */
    public function getTouristServices()
    {
      return $this->TouristServices;
    }

    /**
     * @param ArrayOfTouristService $TouristServices
     * @return \App\Client\Soap\Reservation
     */
    public function setTouristServices($TouristServices)
    {
      $this->TouristServices = $TouristServices;
      return $this;
    }

    /**
     * @return ArrayOfService
     */
    public function getServices()
    {
      return $this->Services;
    }

    /**
     * @param ArrayOfService $Services
     * @return \App\Client\Soap\Reservation
     */
    public function setServices($Services)
    {
      $this->Services = $Services;
      return $this;
    }

    /**
     * @return Flight
     */
    public function getFlightIn()
    {
      return $this->FlightIn;
    }

    /**
     * @param Flight $FlightIn
     * @return \App\Client\Soap\Reservation
     */
    public function setFlightIn($FlightIn)
    {
      $this->FlightIn = $FlightIn;
      return $this;
    }

    /**
     * @return Flight
     */
    public function getFlightOut()
    {
      return $this->FlightOut;
    }

    /**
     * @param Flight $FlightOut
     * @return \App\Client\Soap\Reservation
     */
    public function setFlightOut($FlightOut)
    {
      $this->FlightOut = $FlightOut;
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
     * @return \App\Client\Soap\Reservation
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
     * @return \App\Client\Soap\Reservation
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \App\Client\Soap\Reservation
     */
    public function setNetto($Netto)
    {
      $this->Netto = $Netto;
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
     * @return \App\Client\Soap\Reservation
     */
    public function setBrutto($Brutto)
    {
      $this->Brutto = $Brutto;
      return $this;
    }

    /**
     * @return int
     */
    public function getCountryID()
    {
      return $this->CountryID;
    }

    /**
     * @param int $CountryID
     * @return \App\Client\Soap\Reservation
     */
    public function setCountryID($CountryID)
    {
      $this->CountryID = $CountryID;
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
     * @return \App\Client\Soap\Reservation
     */
    public function setCityID($CityID)
    {
      $this->CityID = $CityID;
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
     * @return \App\Client\Soap\Reservation
     */
    public function setPartnerID($PartnerID)
    {
      $this->PartnerID = $PartnerID;
      return $this;
    }

    /**
     * @return Status
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param Status $Status
     * @return \App\Client\Soap\Reservation
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return \App\Client\Soap\Reservation
     */
    public function setStartDate(\DateTime $StartDate)
    {
      $this->StartDate = $StartDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->EndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndDate
     * @return \App\Client\Soap\Reservation
     */
    public function setEndDate(\DateTime $EndDate)
    {
      $this->EndDate = $EndDate->format(\DateTime::ATOM);
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
     * @return \App\Client\Soap\Reservation
     */
    public function setDuration($Duration)
    {
      $this->Duration = $Duration;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate()
    {
      if ($this->CreationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreationDate
     * @return \App\Client\Soap\Reservation
     */
    public function setCreationDate(\DateTime $CreationDate)
    {
      $this->CreationDate = $CreationDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getCreatorID()
    {
      return $this->CreatorID;
    }

    /**
     * @param int $CreatorID
     * @return \App\Client\Soap\Reservation
     */
    public function setCreatorID($CreatorID)
    {
      $this->CreatorID = $CreatorID;
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
     * @return \App\Client\Soap\Reservation
     */
    public function setTourists($Tourists)
    {
      $this->Tourists = $Tourists;
      return $this;
    }

    /**
     * @return int
     */
    public function getOwnerID()
    {
      return $this->OwnerID;
    }

    /**
     * @param int $OwnerID
     * @return \App\Client\Soap\Reservation
     */
    public function setOwnerID($OwnerID)
    {
      $this->OwnerID = $OwnerID;
      return $this;
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
     * @return \App\Client\Soap\Reservation
     */
    public function setExternalID($ExternalID)
    {
      $this->ExternalID = $ExternalID;
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
     * @return \App\Client\Soap\Reservation
     */
    public function setAdditionalParams($AdditionalParams)
    {
      $this->AdditionalParams = $AdditionalParams;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasInvoices()
    {
      return $this->HasInvoices;
    }

    /**
     * @param boolean $HasInvoices
     * @return \App\Client\Soap\Reservation
     */
    public function setHasInvoices($HasInvoices)
    {
      $this->HasInvoices = $HasInvoices;
      return $this;
    }

}
