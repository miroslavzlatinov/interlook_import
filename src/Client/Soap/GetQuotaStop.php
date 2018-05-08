<?php

namespace App\Client\Soap;

class GetQuotaStop
{

    /**
     * @var string $guid
     */
    protected $guid = null;

    /**
     * @var \DateTime $date
     */
    protected $date = null;

    /**
     * @var int $hotelKey
     */
    protected $hotelKey = null;

    /**
     * @param string $guid
     * @param \DateTime $date
     * @param int $hotelKey
     */
    public function __construct($guid, \DateTime $date, $hotelKey)
    {
      $this->guid = $guid;
      $this->date = $date->format(\DateTime::ATOM);
      $this->hotelKey = $hotelKey;
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
     * @return \App\Client\Soap\GetQuotaStop
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
      if ($this->date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $date
     * @return \App\Client\Soap\GetQuotaStop
     */
    public function setDate(\DateTime $date)
    {
      $this->date = $date->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getHotelKey()
    {
      return $this->hotelKey;
    }

    /**
     * @param int $hotelKey
     * @return \App\Client\Soap\GetQuotaStop
     */
    public function setHotelKey($hotelKey)
    {
      $this->hotelKey = $hotelKey;
      return $this;
    }

}
