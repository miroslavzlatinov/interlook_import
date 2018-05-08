<?php

namespace App\Client\Soap;

class InsuranceService extends Service
{

    /**
     * @var AdditionalDescription $Description1
     */
    protected $Description1 = null;

    /**
     * @var Insurance $Insurance
     */
    protected $Insurance = null;

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
     * @return AdditionalDescription
     */
    public function getDescription1()
    {
      return $this->Description1;
    }

    /**
     * @param AdditionalDescription $Description1
     * @return \App\Client\Soap\InsuranceService
     */
    public function setDescription1($Description1)
    {
      $this->Description1 = $Description1;
      return $this;
    }

    /**
     * @return Insurance
     */
    public function getInsurance()
    {
      return $this->Insurance;
    }

    /**
     * @param Insurance $Insurance
     * @return \App\Client\Soap\InsuranceService
     */
    public function setInsurance($Insurance)
    {
      $this->Insurance = $Insurance;
      return $this;
    }

}
