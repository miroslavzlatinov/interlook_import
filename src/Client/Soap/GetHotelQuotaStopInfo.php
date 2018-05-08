<?php

namespace App\Client\Soap;

class GetHotelQuotaStopInfo
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
     * @param string $guid
     * @param \DateTime $date
     */
    public function __construct($guid, \DateTime $date)
    {
      $this->guid = $guid;
      $this->date = $date->format(\DateTime::ATOM);
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
     * @return \App\Client\Soap\GetHotelQuotaStopInfo
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
     * @return \App\Client\Soap\GetHotelQuotaStopInfo
     */
    public function setDate(\DateTime $date)
    {
      $this->date = $date->format(\DateTime::ATOM);
      return $this;
    }

}
