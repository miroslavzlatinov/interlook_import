<?php

namespace App\Client\Soap;

class Flight
{

    /**
     * @var City $CityFrom
     */
    protected $CityFrom = null;

    /**
     * @var City $CityTo
     */
    protected $CityTo = null;

    /**
     * @var Airport $AirportFrom
     */
    protected $AirportFrom = null;

    /**
     * @var Airport $AirportTo
     */
    protected $AirportTo = null;

    /**
     * @var AirLine $AirLine
     */
    protected $AirLine = null;

    /**
     * @var \DateTime $TimeFrom
     */
    protected $TimeFrom = null;

    /**
     * @var \DateTime $TimeTo
     */
    protected $TimeTo = null;

    /**
     * @var \DateTime $DateFrom
     */
    protected $DateFrom = null;

    /**
     * @var \DateTime $DateTo
     */
    protected $DateTo = null;

    /**
     * @var boolean $IsArrival
     */
    protected $IsArrival = null;

    /**
     * @var AvailabilityType $Available
     */
    protected $Available = null;

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @param \DateTime $TimeFrom
     * @param \DateTime $TimeTo
     * @param \DateTime $DateFrom
     * @param \DateTime $DateTo
     * @param boolean $IsArrival
     * @param AvailabilityType $Available
     * @param int $ID
     */
    public function __construct(\DateTime $TimeFrom, \DateTime $TimeTo, \DateTime $DateFrom, \DateTime $DateTo, $IsArrival, $Available, $ID)
    {
      $this->TimeFrom = $TimeFrom->format(\DateTime::ATOM);
      $this->TimeTo = $TimeTo->format(\DateTime::ATOM);
      $this->DateFrom = $DateFrom->format(\DateTime::ATOM);
      $this->DateTo = $DateTo->format(\DateTime::ATOM);
      $this->IsArrival = $IsArrival;
      $this->Available = $Available;
      $this->ID = $ID;
    }

    /**
     * @return City
     */
    public function getCityFrom()
    {
      return $this->CityFrom;
    }

    /**
     * @param City $CityFrom
     * @return \App\Client\Soap\Flight
     */
    public function setCityFrom($CityFrom)
    {
      $this->CityFrom = $CityFrom;
      return $this;
    }

    /**
     * @return City
     */
    public function getCityTo()
    {
      return $this->CityTo;
    }

    /**
     * @param City $CityTo
     * @return \App\Client\Soap\Flight
     */
    public function setCityTo($CityTo)
    {
      $this->CityTo = $CityTo;
      return $this;
    }

    /**
     * @return Airport
     */
    public function getAirportFrom()
    {
      return $this->AirportFrom;
    }

    /**
     * @param Airport $AirportFrom
     * @return \App\Client\Soap\Flight
     */
    public function setAirportFrom($AirportFrom)
    {
      $this->AirportFrom = $AirportFrom;
      return $this;
    }

    /**
     * @return Airport
     */
    public function getAirportTo()
    {
      return $this->AirportTo;
    }

    /**
     * @param Airport $AirportTo
     * @return \App\Client\Soap\Flight
     */
    public function setAirportTo($AirportTo)
    {
      $this->AirportTo = $AirportTo;
      return $this;
    }

    /**
     * @return AirLine
     */
    public function getAirLine()
    {
      return $this->AirLine;
    }

    /**
     * @param AirLine $AirLine
     * @return \App\Client\Soap\Flight
     */
    public function setAirLine($AirLine)
    {
      $this->AirLine = $AirLine;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimeFrom()
    {
      if ($this->TimeFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TimeFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TimeFrom
     * @return \App\Client\Soap\Flight
     */
    public function setTimeFrom(\DateTime $TimeFrom)
    {
      $this->TimeFrom = $TimeFrom->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimeTo()
    {
      if ($this->TimeTo == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TimeTo);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TimeTo
     * @return \App\Client\Soap\Flight
     */
    public function setTimeTo(\DateTime $TimeTo)
    {
      $this->TimeTo = $TimeTo->format(\DateTime::ATOM);
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
     * @return \App\Client\Soap\Flight
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
     * @return \App\Client\Soap\Flight
     */
    public function setDateTo(\DateTime $DateTo)
    {
      $this->DateTo = $DateTo->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsArrival()
    {
      return $this->IsArrival;
    }

    /**
     * @param boolean $IsArrival
     * @return \App\Client\Soap\Flight
     */
    public function setIsArrival($IsArrival)
    {
      $this->IsArrival = $IsArrival;
      return $this;
    }

    /**
     * @return AvailabilityType
     */
    public function getAvailable()
    {
      return $this->Available;
    }

    /**
     * @param AvailabilityType $Available
     * @return \App\Client\Soap\Flight
     */
    public function setAvailable($Available)
    {
      $this->Available = $Available;
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
     * @return \App\Client\Soap\Flight
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
     * @return \App\Client\Soap\Flight
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \App\Client\Soap\Flight
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

}
