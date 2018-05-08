<?php

namespace App\Client\Soap;

class CalculateSingleCost
{

    /**
     * @var string $guid
     */
    protected $guid = null;

    /**
     * @var int $svKey
     */
    protected $svKey = null;

    /**
     * @var int $countryKey
     */
    protected $countryKey = null;

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var int $subcode1
     */
    protected $subcode1 = null;

    /**
     * @var int $subcode2
     */
    protected $subcode2 = null;

    /**
     * @var int $subcode3
     */
    protected $subcode3 = null;

    /**
     * @var int $subcode4
     */
    protected $subcode4 = null;

    /**
     * @var int $tourOperatorGroupKey
     */
    protected $tourOperatorGroupKey = null;

    /**
     * @var int $tourOperatorKey
     */
    protected $tourOperatorKey = null;

    /**
     * @var int $mrKey
     */
    protected $mrKey = null;

    /**
     * @var int $filialKey
     */
    protected $filialKey = null;

    /**
     * @var int $tafiffKey
     */
    protected $tafiffKey = null;

    /**
     * @var int $pax
     */
    protected $pax = null;

    /**
     * @var ArrayOfInt $ages
     */
    protected $ages = null;

    /**
     * @var \DateTime $checkInDate
     */
    protected $checkInDate = null;

    /**
     * @var \DateTime $checkOutDate
     */
    protected $checkOutDate = null;

    /**
     * @var int $cityKey
     */
    protected $cityKey = null;

    /**
     * @var int $cityKeyTo
     */
    protected $cityKeyTo = null;

    /**
     * @var string $rate
     */
    protected $rate = null;

    /**
     * @var boolean $pricePerRoom
     */
    protected $pricePerRoom = null;

    /**
     * @var boolean $onlyPublished
     */
    protected $onlyPublished = null;

    /**
     * @var int $serviceProviderKey
     */
    protected $serviceProviderKey = null;

    /**
     * @param string $guid
     * @param int $svKey
     * @param int $countryKey
     * @param int $code
     * @param int $subcode1
     * @param int $subcode2
     * @param int $subcode3
     * @param int $subcode4
     * @param int $tourOperatorGroupKey
     * @param int $tourOperatorKey
     * @param int $mrKey
     * @param int $filialKey
     * @param int $tafiffKey
     * @param int $pax
     * @param ArrayOfInt $ages
     * @param \DateTime $checkInDate
     * @param \DateTime $checkOutDate
     * @param int $cityKey
     * @param int $cityKeyTo
     * @param string $rate
     * @param boolean $pricePerRoom
     * @param boolean $onlyPublished
     * @param int $serviceProviderKey
     */
    public function __construct($guid, $svKey, $countryKey, $code, $subcode1, $subcode2, $subcode3, $subcode4, $tourOperatorGroupKey, $tourOperatorKey, $mrKey, $filialKey, $tafiffKey, $pax, $ages, \DateTime $checkInDate, \DateTime $checkOutDate, $cityKey, $cityKeyTo, $rate, $pricePerRoom, $onlyPublished, $serviceProviderKey)
    {
      $this->guid = $guid;
      $this->svKey = $svKey;
      $this->countryKey = $countryKey;
      $this->code = $code;
      $this->subcode1 = $subcode1;
      $this->subcode2 = $subcode2;
      $this->subcode3 = $subcode3;
      $this->subcode4 = $subcode4;
      $this->tourOperatorGroupKey = $tourOperatorGroupKey;
      $this->tourOperatorKey = $tourOperatorKey;
      $this->mrKey = $mrKey;
      $this->filialKey = $filialKey;
      $this->tafiffKey = $tafiffKey;
      $this->pax = $pax;
      $this->ages = $ages;
      $this->checkInDate = $checkInDate->format(\DateTime::ATOM);
      $this->checkOutDate = $checkOutDate->format(\DateTime::ATOM);
      $this->cityKey = $cityKey;
      $this->cityKeyTo = $cityKeyTo;
      $this->rate = $rate;
      $this->pricePerRoom = $pricePerRoom;
      $this->onlyPublished = $onlyPublished;
      $this->serviceProviderKey = $serviceProviderKey;
    }

    /**
     * @return string
     */
    public function getGuid()
    {
      return $this->guid;
    }

    /**
     * @param string $guid
     * @return \App\Client\Soap\CalculateSingleCost
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

    /**
     * @return int
     */
    public function getSvKey()
    {
      return $this->svKey;
    }

    /**
     * @param int $svKey
     * @return \App\Client\Soap\CalculateSingleCost
     */
    public function setSvKey($svKey)
    {
      $this->svKey = $svKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getCountryKey()
    {
      return $this->countryKey;
    }

    /**
     * @param int $countryKey
     * @return \App\Client\Soap\CalculateSingleCost
     */
    public function setCountryKey($countryKey)
    {
      $this->countryKey = $countryKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param int $code
     * @return \App\Client\Soap\CalculateSingleCost
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return int
     */
    public function getSubcode1()
    {
      return $this->subcode1;
    }

    /**
     * @param int $subcode1
     * @return \App\Client\Soap\CalculateSingleCost
     */
    public function setSubcode1($subcode1)
    {
      $this->subcode1 = $subcode1;
      return $this;
    }

    /**
     * @return int
     */
    public function getSubcode2()
    {
      return $this->subcode2;
    }

    /**
     * @param int $subcode2
     * @return \App\Client\Soap\CalculateSingleCost
     */
    public function setSubcode2($subcode2)
    {
      $this->subcode2 = $subcode2;
      return $this;
    }

    /**
     * @return int
     */
    public function getSubcode3()
    {
      return $this->subcode3;
    }

    /**
     * @param int $subcode3
     * @return \App\Client\Soap\CalculateSingleCost
     */
    public function setSubcode3($subcode3)
    {
      $this->subcode3 = $subcode3;
      return $this;
    }

    /**
     * @return int
     */
    public function getSubcode4()
    {
      return $this->subcode4;
    }

    /**
     * @param int $subcode4
     * @return \App\Client\Soap\CalculateSingleCost
     */
    public function setSubcode4($subcode4)
    {
      $this->subcode4 = $subcode4;
      return $this;
    }

    /**
     * @return int
     */
    public function getTourOperatorGroupKey()
    {
      return $this->tourOperatorGroupKey;
    }

    /**
     * @param int $tourOperatorGroupKey
     * @return \App\Client\Soap\CalculateSingleCost
     */
    public function setTourOperatorGroupKey($tourOperatorGroupKey)
    {
      $this->tourOperatorGroupKey = $tourOperatorGroupKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getTourOperatorKey()
    {
      return $this->tourOperatorKey;
    }

    /**
     * @param int $tourOperatorKey
     * @return \App\Client\Soap\CalculateSingleCost
     */
    public function setTourOperatorKey($tourOperatorKey)
    {
      $this->tourOperatorKey = $tourOperatorKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getMrKey()
    {
      return $this->mrKey;
    }

    /**
     * @param int $mrKey
     * @return \App\Client\Soap\CalculateSingleCost
     */
    public function setMrKey($mrKey)
    {
      $this->mrKey = $mrKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getFilialKey()
    {
      return $this->filialKey;
    }

    /**
     * @param int $filialKey
     * @return \App\Client\Soap\CalculateSingleCost
     */
    public function setFilialKey($filialKey)
    {
      $this->filialKey = $filialKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getTafiffKey()
    {
      return $this->tafiffKey;
    }

    /**
     * @param int $tafiffKey
     * @return \App\Client\Soap\CalculateSingleCost
     */
    public function setTafiffKey($tafiffKey)
    {
      $this->tafiffKey = $tafiffKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getPax()
    {
      return $this->pax;
    }

    /**
     * @param int $pax
     * @return \App\Client\Soap\CalculateSingleCost
     */
    public function setPax($pax)
    {
      $this->pax = $pax;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getAges()
    {
      return $this->ages;
    }

    /**
     * @param ArrayOfInt $ages
     * @return \App\Client\Soap\CalculateSingleCost
     */
    public function setAges($ages)
    {
      $this->ages = $ages;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCheckInDate()
    {
      if ($this->checkInDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->checkInDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $checkInDate
     * @return \App\Client\Soap\CalculateSingleCost
     */
    public function setCheckInDate(\DateTime $checkInDate)
    {
      $this->checkInDate = $checkInDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCheckOutDate()
    {
      if ($this->checkOutDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->checkOutDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $checkOutDate
     * @return \App\Client\Soap\CalculateSingleCost
     */
    public function setCheckOutDate(\DateTime $checkOutDate)
    {
      $this->checkOutDate = $checkOutDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getCityKey()
    {
      return $this->cityKey;
    }

    /**
     * @param int $cityKey
     * @return \App\Client\Soap\CalculateSingleCost
     */
    public function setCityKey($cityKey)
    {
      $this->cityKey = $cityKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getCityKeyTo()
    {
      return $this->cityKeyTo;
    }

    /**
     * @param int $cityKeyTo
     * @return \App\Client\Soap\CalculateSingleCost
     */
    public function setCityKeyTo($cityKeyTo)
    {
      $this->cityKeyTo = $cityKeyTo;
      return $this;
    }

    /**
     * @return string
     */
    public function getRate()
    {
      return $this->rate;
    }

    /**
     * @param string $rate
     * @return \App\Client\Soap\CalculateSingleCost
     */
    public function setRate($rate)
    {
      $this->rate = $rate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPricePerRoom()
    {
      return $this->pricePerRoom;
    }

    /**
     * @param boolean $pricePerRoom
     * @return \App\Client\Soap\CalculateSingleCost
     */
    public function setPricePerRoom($pricePerRoom)
    {
      $this->pricePerRoom = $pricePerRoom;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOnlyPublished()
    {
      return $this->onlyPublished;
    }

    /**
     * @param boolean $onlyPublished
     * @return \App\Client\Soap\CalculateSingleCost
     */
    public function setOnlyPublished($onlyPublished)
    {
      $this->onlyPublished = $onlyPublished;
      return $this;
    }

    /**
     * @return int
     */
    public function getServiceProviderKey()
    {
      return $this->serviceProviderKey;
    }

    /**
     * @param int $serviceProviderKey
     * @return \App\Client\Soap\CalculateSingleCost
     */
    public function setServiceProviderKey($serviceProviderKey)
    {
      $this->serviceProviderKey = $serviceProviderKey;
      return $this;
    }

}
