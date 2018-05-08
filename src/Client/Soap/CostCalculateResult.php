<?php

namespace App\Client\Soap;

class CostCalculateResult
{

    /**
     * @var float $Brutto
     */
    protected $Brutto = null;

    /**
     * @var int $ProviderKey
     */
    protected $ProviderKey = null;

    /**
     * @var boolean $IsCalcBrutto
     */
    protected $IsCalcBrutto = null;

    /**
     * @param float $Brutto
     * @param int $ProviderKey
     * @param boolean $IsCalcBrutto
     */
    public function __construct($Brutto, $ProviderKey, $IsCalcBrutto)
    {
      $this->Brutto = $Brutto;
      $this->ProviderKey = $ProviderKey;
      $this->IsCalcBrutto = $IsCalcBrutto;
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
     * @return \App\Client\Soap\CostCalculateResult
     */
    public function setBrutto($Brutto)
    {
      $this->Brutto = $Brutto;
      return $this;
    }

    /**
     * @return int
     */
    public function getProviderKey()
    {
      return $this->ProviderKey;
    }

    /**
     * @param int $ProviderKey
     * @return \App\Client\Soap\CostCalculateResult
     */
    public function setProviderKey($ProviderKey)
    {
      $this->ProviderKey = $ProviderKey;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCalcBrutto()
    {
      return $this->IsCalcBrutto;
    }

    /**
     * @param boolean $IsCalcBrutto
     * @return \App\Client\Soap\CostCalculateResult
     */
    public function setIsCalcBrutto($IsCalcBrutto)
    {
      $this->IsCalcBrutto = $IsCalcBrutto;
      return $this;
    }

}
