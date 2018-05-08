<?php

namespace App\Client\Soap;

class SearchActualCostCalculationVariantRequest
{

    /**
     * @var int $HotelId
     */
    protected $HotelId = null;

    /**
     * @var \DateTime $DateFrom
     */
    protected $DateFrom = null;

    /**
     * @var \DateTime $DateTo
     */
    protected $DateTo = null;

    /**
     * @var boolean $ValidateQuota
     */
    protected $ValidateQuota = null;

    /**
     * @var boolean $CheckAdHot
     */
    protected $CheckAdHot = null;

    /**
     * @var string $Rate
     */
    protected $Rate = null;

    /**
     * @param int $HotelId
     * @param \DateTime $DateFrom
     * @param \DateTime $DateTo
     * @param boolean $ValidateQuota
     * @param boolean $CheckAdHot
     * @param string $Rate
     */
    public function __construct($HotelId, \DateTime $DateFrom, \DateTime $DateTo, $ValidateQuota, $CheckAdHot, $Rate)
    {
      $this->HotelId = $HotelId;
      $this->DateFrom = $DateFrom->format(\DateTime::ATOM);
      $this->DateTo = $DateTo->format(\DateTime::ATOM);
      $this->ValidateQuota = $ValidateQuota;
      $this->CheckAdHot = $CheckAdHot;
      $this->Rate = $Rate;
    }

    /**
     * @return int
     */
    public function getHotelId()
    {
      return $this->HotelId;
    }

    /**
     * @param int $HotelId
     * @return \App\Client\Soap\SearchActualCostCalculationVariantRequest
     */
    public function setHotelId($HotelId)
    {
      $this->HotelId = $HotelId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateFrom()
    {
      if ($this->DateFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateFrom
     * @return \App\Client\Soap\SearchActualCostCalculationVariantRequest
     */
    public function setDateFrom(\DateTime $DateFrom)
    {
      $this->DateFrom = $DateFrom->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateTo()
    {
      if ($this->DateTo == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateTo);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateTo
     * @return \App\Client\Soap\SearchActualCostCalculationVariantRequest
     */
    public function setDateTo(\DateTime $DateTo)
    {
      $this->DateTo = $DateTo->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getValidateQuota()
    {
      return $this->ValidateQuota;
    }

    /**
     * @param boolean $ValidateQuota
     * @return \App\Client\Soap\SearchActualCostCalculationVariantRequest
     */
    public function setValidateQuota($ValidateQuota)
    {
      $this->ValidateQuota = $ValidateQuota;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCheckAdHot()
    {
      return $this->CheckAdHot;
    }

    /**
     * @param boolean $CheckAdHot
     * @return \App\Client\Soap\SearchActualCostCalculationVariantRequest
     */
    public function setCheckAdHot($CheckAdHot)
    {
      $this->CheckAdHot = $CheckAdHot;
      return $this;
    }

    /**
     * @return string
     */
    public function getRate()
    {
      return $this->Rate;
    }

    /**
     * @param string $Rate
     * @return \App\Client\Soap\SearchActualCostCalculationVariantRequest
     */
    public function setRate($Rate)
    {
      $this->Rate = $Rate;
      return $this;
    }

}
