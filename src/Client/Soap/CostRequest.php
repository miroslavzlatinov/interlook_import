<?php

namespace App\Client\Soap;

class CostRequest
{

    /**
     * @var int $SpoId
     */
    protected $SpoId = null;

    /**
     * @var int $TariffId
     */
    protected $TariffId = null;

    /**
     * @var int $SvKey
     */
    protected $SvKey = null;

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @var int $PriceType
     */
    protected $PriceType = null;

    /**
     * @var boolean $DownloadOnlyActualCosts
     */
    protected $DownloadOnlyActualCosts = null;

    /**
     * @var boolean $DownloadUpdateCostsFromDate
     */
    protected $DownloadUpdateCostsFromDate = null;

    /**
     * @var \DateTime $CostsUpdateDateBegin
     */
    protected $CostsUpdateDateBegin = null;

    /**
     * @param int $SpoId
     * @param int $TariffId
     * @param int $SvKey
     * @param int $Code
     * @param int $PriceType
     * @param boolean $DownloadOnlyActualCosts
     * @param boolean $DownloadUpdateCostsFromDate
     * @param \DateTime $CostsUpdateDateBegin
     */
    public function __construct($SpoId, $TariffId, $SvKey, $Code, $PriceType, $DownloadOnlyActualCosts, $DownloadUpdateCostsFromDate, \DateTime $CostsUpdateDateBegin)
    {
      $this->SpoId = $SpoId;
      $this->TariffId = $TariffId;
      $this->SvKey = $SvKey;
      $this->Code = $Code;
      $this->PriceType = $PriceType;
      $this->DownloadOnlyActualCosts = $DownloadOnlyActualCosts;
      $this->DownloadUpdateCostsFromDate = $DownloadUpdateCostsFromDate;
      $this->CostsUpdateDateBegin = $CostsUpdateDateBegin->format(\DateTime::ATOM);
    }

    /**
     * @return int
     */
    public function getSpoId()
    {
      return $this->SpoId;
    }

    /**
     * @param int $SpoId
     * @return \App\Client\Soap\CostRequest
     */
    public function setSpoId($SpoId)
    {
      $this->SpoId = $SpoId;
      return $this;
    }

    /**
     * @return int
     */
    public function getTariffId()
    {
      return $this->TariffId;
    }

    /**
     * @param int $TariffId
     * @return \App\Client\Soap\CostRequest
     */
    public function setTariffId($TariffId)
    {
      $this->TariffId = $TariffId;
      return $this;
    }

    /**
     * @return int
     */
    public function getSvKey()
    {
      return $this->SvKey;
    }

    /**
     * @param int $SvKey
     * @return \App\Client\Soap\CostRequest
     */
    public function setSvKey($SvKey)
    {
      $this->SvKey = $SvKey;
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
     * @return \App\Client\Soap\CostRequest
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return int
     */
    public function getPriceType()
    {
      return $this->PriceType;
    }

    /**
     * @param int $PriceType
     * @return \App\Client\Soap\CostRequest
     */
    public function setPriceType($PriceType)
    {
      $this->PriceType = $PriceType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDownloadOnlyActualCosts()
    {
      return $this->DownloadOnlyActualCosts;
    }

    /**
     * @param boolean $DownloadOnlyActualCosts
     * @return \App\Client\Soap\CostRequest
     */
    public function setDownloadOnlyActualCosts($DownloadOnlyActualCosts)
    {
      $this->DownloadOnlyActualCosts = $DownloadOnlyActualCosts;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDownloadUpdateCostsFromDate()
    {
      return $this->DownloadUpdateCostsFromDate;
    }

    /**
     * @param boolean $DownloadUpdateCostsFromDate
     * @return \App\Client\Soap\CostRequest
     */
    public function setDownloadUpdateCostsFromDate($DownloadUpdateCostsFromDate)
    {
      $this->DownloadUpdateCostsFromDate = $DownloadUpdateCostsFromDate;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCostsUpdateDateBegin()
    {
      if ($this->CostsUpdateDateBegin == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CostsUpdateDateBegin);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CostsUpdateDateBegin
     * @return \App\Client\Soap\CostRequest
     */
    public function setCostsUpdateDateBegin(\DateTime $CostsUpdateDateBegin)
    {
      $this->CostsUpdateDateBegin = $CostsUpdateDateBegin->format(\DateTime::ATOM);
      return $this;
    }

}
