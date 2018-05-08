<?php

namespace App\Client\Soap;

class AmountSum
{

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var string $RateCode
     */
    protected $RateCode = null;

    /**
     * @var float $NationalCurrencyPrice
     */
    protected $NationalCurrencyPrice = null;

    /**
     * @var string $NationalRateCode
     */
    protected $NationalRateCode = null;

    /**
     * @var float $CustomCurrencyPrice
     */
    protected $CustomCurrencyPrice = null;

    /**
     * @var string $CustomRateCode
     */
    protected $CustomRateCode = null;

    /**
     * @var int $ErrorCode
     */
    protected $ErrorCode = null;

    /**
     * @var int $FilialKey
     */
    protected $FilialKey = null;

    /**
     * @var \DateTime $BeginTourDate
     */
    protected $BeginTourDate = null;

    /**
     * @var \DateTime $EndTourDate
     */
    protected $EndTourDate = null;

    /**
     * @param float $Amount
     * @param float $NationalCurrencyPrice
     * @param float $CustomCurrencyPrice
     * @param int $ErrorCode
     * @param int $FilialKey
     * @param \DateTime $BeginTourDate
     * @param \DateTime $EndTourDate
     */
    public function __construct($Amount, $NationalCurrencyPrice, $CustomCurrencyPrice, $ErrorCode, $FilialKey, \DateTime $BeginTourDate, \DateTime $EndTourDate)
    {
      $this->Amount = $Amount;
      $this->NationalCurrencyPrice = $NationalCurrencyPrice;
      $this->CustomCurrencyPrice = $CustomCurrencyPrice;
      $this->ErrorCode = $ErrorCode;
      $this->FilialKey = $FilialKey;
      $this->BeginTourDate = $BeginTourDate->format(\DateTime::ATOM);
      $this->EndTourDate = $EndTourDate->format(\DateTime::ATOM);
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return \App\Client\Soap\AmountSum
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getRateCode()
    {
      return $this->RateCode;
    }

    /**
     * @param string $RateCode
     * @return \App\Client\Soap\AmountSum
     */
    public function setRateCode($RateCode)
    {
      $this->RateCode = $RateCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getNationalCurrencyPrice()
    {
      return $this->NationalCurrencyPrice;
    }

    /**
     * @param float $NationalCurrencyPrice
     * @return \App\Client\Soap\AmountSum
     */
    public function setNationalCurrencyPrice($NationalCurrencyPrice)
    {
      $this->NationalCurrencyPrice = $NationalCurrencyPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getNationalRateCode()
    {
      return $this->NationalRateCode;
    }

    /**
     * @param string $NationalRateCode
     * @return \App\Client\Soap\AmountSum
     */
    public function setNationalRateCode($NationalRateCode)
    {
      $this->NationalRateCode = $NationalRateCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getCustomCurrencyPrice()
    {
      return $this->CustomCurrencyPrice;
    }

    /**
     * @param float $CustomCurrencyPrice
     * @return \App\Client\Soap\AmountSum
     */
    public function setCustomCurrencyPrice($CustomCurrencyPrice)
    {
      $this->CustomCurrencyPrice = $CustomCurrencyPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomRateCode()
    {
      return $this->CustomRateCode;
    }

    /**
     * @param string $CustomRateCode
     * @return \App\Client\Soap\AmountSum
     */
    public function setCustomRateCode($CustomRateCode)
    {
      $this->CustomRateCode = $CustomRateCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getErrorCode()
    {
      return $this->ErrorCode;
    }

    /**
     * @param int $ErrorCode
     * @return \App\Client\Soap\AmountSum
     */
    public function setErrorCode($ErrorCode)
    {
      $this->ErrorCode = $ErrorCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getFilialKey()
    {
      return $this->FilialKey;
    }

    /**
     * @param int $FilialKey
     * @return \App\Client\Soap\AmountSum
     */
    public function setFilialKey($FilialKey)
    {
      $this->FilialKey = $FilialKey;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBeginTourDate()
    {
      if ($this->BeginTourDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->BeginTourDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $BeginTourDate
     * @return \App\Client\Soap\AmountSum
     */
    public function setBeginTourDate(\DateTime $BeginTourDate)
    {
      $this->BeginTourDate = $BeginTourDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndTourDate()
    {
      if ($this->EndTourDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndTourDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndTourDate
     * @return \App\Client\Soap\AmountSum
     */
    public function setEndTourDate(\DateTime $EndTourDate)
    {
      $this->EndTourDate = $EndTourDate->format(\DateTime::ATOM);
      return $this;
    }

}
