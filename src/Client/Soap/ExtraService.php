<?php

namespace App\Client\Soap;

class ExtraService extends Service
{

    /**
     * @var int $CityKey
     */
    protected $CityKey = null;

    /**
     * @var boolean $IsPackage
     */
    protected $IsPackage = null;

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @var boolean $HasDuration
     */
    protected $HasDuration = null;

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
     * @param boolean $IsPackage
     * @param int $Code
     * @param boolean $HasDuration
     */
    public function __construct($ExternalID, $Price, $NMen, $PartnerID, $Quota, $PacketKey, \DateTime $StartDate, $StartDay, $Duration, $Brutto, $Netto, $ServiceClassID, $TouristCount, $ID, $CityKey, $IsPackage, $Code, $HasDuration)
    {
      parent::__construct($ExternalID, $Price, $NMen, $PartnerID, $Quota, $PacketKey, $StartDate, $StartDay, $Duration, $Brutto, $Netto, $ServiceClassID, $TouristCount, $ID);
      $this->CityKey = $CityKey;
      $this->IsPackage = $IsPackage;
      $this->Code = $Code;
      $this->HasDuration = $HasDuration;
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
     * @return \App\Client\Soap\ExtraService
     */
    public function setCityKey($CityKey)
    {
      $this->CityKey = $CityKey;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPackage()
    {
      return $this->IsPackage;
    }

    /**
     * @param boolean $IsPackage
     * @return \App\Client\Soap\ExtraService
     */
    public function setIsPackage($IsPackage)
    {
      $this->IsPackage = $IsPackage;
      return $this;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param int $Code
     * @return \App\Client\Soap\ExtraService
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasDuration()
    {
      return $this->HasDuration;
    }

    /**
     * @param boolean $HasDuration
     * @return \App\Client\Soap\ExtraService
     */
    public function setHasDuration($HasDuration)
    {
      $this->HasDuration = $HasDuration;
      return $this;
    }




}
