<?php

namespace App\Client\Soap;

class CostInfo
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $SvKey
     */
    protected $SvKey = null;

    /**
     * @var int $SpoId
     */
    protected $SpoId = null;

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @var int $AgeFrom
     */
    protected $AgeFrom = null;

    /**
     * @var int $AgeTo
     */
    protected $AgeTo = null;

    /**
     * @var \DateTime $CreateDate
     */
    protected $CreateDate = null;

    /**
     * @var \DateTime $CheckInDateBegin
     */
    protected $CheckInDateBegin = null;

    /**
     * @var \DateTime $CheckInDateEnd
     */
    protected $CheckInDateEnd = null;

    /**
     * @var \DateTime $CheckOutDateBegin
     */
    protected $CheckOutDateBegin = null;

    /**
     * @var \DateTime $CheckOutDateEnd
     */
    protected $CheckOutDateEnd = null;

    /**
     * @var \DateTime $DateBegin
     */
    protected $DateBegin = null;

    /**
     * @var \DateTime $DateEnd
     */
    protected $DateEnd = null;

    /**
     * @var \DateTime $UpdateDate
     */
    protected $UpdateDate = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @var string $Rate
     */
    protected $Rate = null;

    /**
     * @var int $SubCode1
     */
    protected $SubCode1 = null;

    /**
     * @var int $SubCode2
     */
    protected $SubCode2 = null;

    /**
     * @var int $SubCode3
     */
    protected $SubCode3 = null;

    /**
     * @var int $SubCode4
     */
    protected $SubCode4 = null;

    /**
     * @var int $TariffId
     */
    protected $TariffId = null;

    /**
     * @var int $Type
     */
    protected $Type = null;

    /**
     * @var string $Week
     */
    protected $Week = null;

    /**
     * @var int $CountryId
     */
    protected $CountryId = null;

    /**
     * @var int $CityFromId
     */
    protected $CityFromId = null;

    /**
     * @var int $CityToId
     */
    protected $CityToId = null;

    /**
     * @var int $TouroperatorId
     */
    protected $TouroperatorId = null;

    /**
     * @param int $Id
     * @param int $SvKey
     * @param int $SpoId
     * @param int $Code
     * @param int $AgeFrom
     * @param int $AgeTo
     * @param \DateTime $CreateDate
     * @param \DateTime $CheckInDateBegin
     * @param \DateTime $CheckInDateEnd
     * @param \DateTime $CheckOutDateBegin
     * @param \DateTime $CheckOutDateEnd
     * @param \DateTime $DateBegin
     * @param \DateTime $DateEnd
     * @param \DateTime $UpdateDate
     * @param float $Price
     * @param string $Rate
     * @param int $SubCode1
     * @param int $SubCode2
     * @param int $SubCode3
     * @param int $SubCode4
     * @param int $TariffId
     * @param int $Type
     * @param string $Week
     * @param int $CountryId
     * @param int $CityFromId
     * @param int $CityToId
     * @param int $TouroperatorId
     */
    public function __construct($Id, $SvKey, $SpoId, $Code, $AgeFrom, $AgeTo, \DateTime $CreateDate, \DateTime $CheckInDateBegin, \DateTime $CheckInDateEnd, \DateTime $CheckOutDateBegin, \DateTime $CheckOutDateEnd, \DateTime $DateBegin, \DateTime $DateEnd, \DateTime $UpdateDate, $Price, $Rate, $SubCode1, $SubCode2, $SubCode3, $SubCode4, $TariffId, $Type, $Week, $CountryId, $CityFromId, $CityToId, $TouroperatorId)
    {
      $this->Id = $Id;
      $this->SvKey = $SvKey;
      $this->SpoId = $SpoId;
      $this->Code = $Code;
      $this->AgeFrom = $AgeFrom;
      $this->AgeTo = $AgeTo;
      $this->CreateDate = $CreateDate->format(\DateTime::ATOM);
      $this->CheckInDateBegin = $CheckInDateBegin->format(\DateTime::ATOM);
      $this->CheckInDateEnd = $CheckInDateEnd->format(\DateTime::ATOM);
      $this->CheckOutDateBegin = $CheckOutDateBegin->format(\DateTime::ATOM);
      $this->CheckOutDateEnd = $CheckOutDateEnd->format(\DateTime::ATOM);
      $this->DateBegin = $DateBegin->format(\DateTime::ATOM);
      $this->DateEnd = $DateEnd->format(\DateTime::ATOM);
      $this->UpdateDate = $UpdateDate->format(\DateTime::ATOM);
      $this->Price = $Price;
      $this->Rate = $Rate;
      $this->SubCode1 = $SubCode1;
      $this->SubCode2 = $SubCode2;
      $this->SubCode3 = $SubCode3;
      $this->SubCode4 = $SubCode4;
      $this->TariffId = $TariffId;
      $this->Type = $Type;
      $this->Week = $Week;
      $this->CountryId = $CountryId;
      $this->CityFromId = $CityFromId;
      $this->CityToId = $CityToId;
      $this->TouroperatorId = $TouroperatorId;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return \App\Client\Soap\CostInfo
     */
    public function setId($Id)
    {
      $this->Id = $Id;
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
     * @return \App\Client\Soap\CostInfo
     */
    public function setSvKey($SvKey)
    {
      $this->SvKey = $SvKey;
      return $this;
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
     * @return \App\Client\Soap\CostInfo
     */
    public function setSpoId($SpoId)
    {
      $this->SpoId = $SpoId;
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
     * @return \App\Client\Soap\CostInfo
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return int
     */
    public function getAgeFrom()
    {
      return $this->AgeFrom;
    }

    /**
     * @param int $AgeFrom
     * @return \App\Client\Soap\CostInfo
     */
    public function setAgeFrom($AgeFrom)
    {
      $this->AgeFrom = $AgeFrom;
      return $this;
    }

    /**
     * @return int
     */
    public function getAgeTo()
    {
      return $this->AgeTo;
    }

    /**
     * @param int $AgeTo
     * @return \App\Client\Soap\CostInfo
     */
    public function setAgeTo($AgeTo)
    {
      $this->AgeTo = $AgeTo;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreateDate()
    {
      if ($this->CreateDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreateDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreateDate
     * @return \App\Client\Soap\CostInfo
     */
    public function setCreateDate(\DateTime $CreateDate)
    {
      $this->CreateDate = $CreateDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCheckInDateBegin()
    {
      if ($this->CheckInDateBegin == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CheckInDateBegin);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CheckInDateBegin
     * @return \App\Client\Soap\CostInfo
     */
    public function setCheckInDateBegin(\DateTime $CheckInDateBegin)
    {
      $this->CheckInDateBegin = $CheckInDateBegin->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCheckInDateEnd()
    {
      if ($this->CheckInDateEnd == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CheckInDateEnd);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CheckInDateEnd
     * @return \App\Client\Soap\CostInfo
     */
    public function setCheckInDateEnd(\DateTime $CheckInDateEnd)
    {
      $this->CheckInDateEnd = $CheckInDateEnd->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCheckOutDateBegin()
    {
      if ($this->CheckOutDateBegin == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CheckOutDateBegin);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CheckOutDateBegin
     * @return \App\Client\Soap\CostInfo
     */
    public function setCheckOutDateBegin(\DateTime $CheckOutDateBegin)
    {
      $this->CheckOutDateBegin = $CheckOutDateBegin->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCheckOutDateEnd()
    {
      if ($this->CheckOutDateEnd == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CheckOutDateEnd);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CheckOutDateEnd
     * @return \App\Client\Soap\CostInfo
     */
    public function setCheckOutDateEnd(\DateTime $CheckOutDateEnd)
    {
      $this->CheckOutDateEnd = $CheckOutDateEnd->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateBegin()
    {
      if ($this->DateBegin == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateBegin);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateBegin
     * @return \App\Client\Soap\CostInfo
     */
    public function setDateBegin(\DateTime $DateBegin)
    {
      $this->DateBegin = $DateBegin->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateEnd()
    {
      if ($this->DateEnd == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateEnd);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateEnd
     * @return \App\Client\Soap\CostInfo
     */
    public function setDateEnd(\DateTime $DateEnd)
    {
      $this->DateEnd = $DateEnd->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateDate()
    {
      if ($this->UpdateDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->UpdateDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $UpdateDate
     * @return \App\Client\Soap\CostInfo
     */
    public function setUpdateDate(\DateTime $UpdateDate)
    {
      $this->UpdateDate = $UpdateDate->format(\DateTime::ATOM);
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
     * @return \App\Client\Soap\CostInfo
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
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
     * @return \App\Client\Soap\CostInfo
     */
    public function setRate($Rate)
    {
      $this->Rate = $Rate;
      return $this;
    }

    /**
     * @return int
     */
    public function getSubCode1()
    {
      return $this->SubCode1;
    }

    /**
     * @param int $SubCode1
     * @return \App\Client\Soap\CostInfo
     */
    public function setSubCode1($SubCode1)
    {
      $this->SubCode1 = $SubCode1;
      return $this;
    }

    /**
     * @return int
     */
    public function getSubCode2()
    {
      return $this->SubCode2;
    }

    /**
     * @param int $SubCode2
     * @return \App\Client\Soap\CostInfo
     */
    public function setSubCode2($SubCode2)
    {
      $this->SubCode2 = $SubCode2;
      return $this;
    }

    /**
     * @return int
     */
    public function getSubCode3()
    {
      return $this->SubCode3;
    }

    /**
     * @param int $SubCode3
     * @return \App\Client\Soap\CostInfo
     */
    public function setSubCode3($SubCode3)
    {
      $this->SubCode3 = $SubCode3;
      return $this;
    }

    /**
     * @return int
     */
    public function getSubCode4()
    {
      return $this->SubCode4;
    }

    /**
     * @param int $SubCode4
     * @return \App\Client\Soap\CostInfo
     */
    public function setSubCode4($SubCode4)
    {
      $this->SubCode4 = $SubCode4;
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
     * @return \App\Client\Soap\CostInfo
     */
    public function setTariffId($TariffId)
    {
      $this->TariffId = $TariffId;
      return $this;
    }

    /**
     * @return int
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param int $Type
     * @return \App\Client\Soap\CostInfo
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getWeek()
    {
      return $this->Week;
    }

    /**
     * @param string $Week
     * @return \App\Client\Soap\CostInfo
     */
    public function setWeek($Week)
    {
      $this->Week = $Week;
      return $this;
    }

    /**
     * @return int
     */
    public function getCountryId()
    {
      return $this->CountryId;
    }

    /**
     * @param int $CountryId
     * @return \App\Client\Soap\CostInfo
     */
    public function setCountryId($CountryId)
    {
      $this->CountryId = $CountryId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCityFromId()
    {
      return $this->CityFromId;
    }

    /**
     * @param int $CityFromId
     * @return \App\Client\Soap\CostInfo
     */
    public function setCityFromId($CityFromId)
    {
      $this->CityFromId = $CityFromId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCityToId()
    {
      return $this->CityToId;
    }

    /**
     * @param int $CityToId
     * @return \App\Client\Soap\CostInfo
     */
    public function setCityToId($CityToId)
    {
      $this->CityToId = $CityToId;
      return $this;
    }

    /**
     * @return int
     */
    public function getTouroperatorId()
    {
      return $this->TouroperatorId;
    }

    /**
     * @param int $TouroperatorId
     * @return \App\Client\Soap\CostInfo
     */
    public function setTouroperatorId($TouroperatorId)
    {
      $this->TouroperatorId = $TouroperatorId;
      return $this;
    }

}
