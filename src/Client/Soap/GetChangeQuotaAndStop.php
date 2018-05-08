<?php

namespace App\Client\Soap;

class GetChangeQuotaAndStop
{

    /**
     * @var string $guid
     */
    protected $guid = null;

    /**
     * @var int $hotelKey
     */
    protected $hotelKey = null;

    /**
     * @var \DateTime $date
     */
    protected $date = null;

    /**
     * @var boolean $UseRoomDescription
     */
    protected $UseRoomDescription = null;

    /**
     * @var boolean $LoadQuota
     */
    protected $LoadQuota = null;

    /**
     * @var boolean $LoadStop
     */
    protected $LoadStop = null;

    /**
     * @param string $guid
     * @param int $hotelKey
     * @param \DateTime $date
     * @param boolean $UseRoomDescription
     * @param boolean $LoadQuota
     * @param boolean $LoadStop
     */
    public function __construct($guid, $hotelKey, \DateTime $date, $UseRoomDescription, $LoadQuota, $LoadStop)
    {
      $this->guid = $guid;
      $this->hotelKey = $hotelKey;
      $this->date = $date->format(\DateTime::ATOM);
      $this->UseRoomDescription = $UseRoomDescription;
      $this->LoadQuota = $LoadQuota;
      $this->LoadStop = $LoadStop;
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
     * @return \App\Client\Soap\GetChangeQuotaAndStop
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
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
     * @return \App\Client\Soap\GetChangeQuotaAndStop
     */
    public function setHotelKey($hotelKey)
    {
      $this->hotelKey = $hotelKey;
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
     * @return \App\Client\Soap\GetChangeQuotaAndStop
     */
    public function setDate(\DateTime $date)
    {
      $this->date = $date->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseRoomDescription()
    {
      return $this->UseRoomDescription;
    }

    /**
     * @param boolean $UseRoomDescription
     * @return \App\Client\Soap\GetChangeQuotaAndStop
     */
    public function setUseRoomDescription($UseRoomDescription)
    {
      $this->UseRoomDescription = $UseRoomDescription;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLoadQuota()
    {
      return $this->LoadQuota;
    }

    /**
     * @param boolean $LoadQuota
     * @return \App\Client\Soap\GetChangeQuotaAndStop
     */
    public function setLoadQuota($LoadQuota)
    {
      $this->LoadQuota = $LoadQuota;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLoadStop()
    {
      return $this->LoadStop;
    }

    /**
     * @param boolean $LoadStop
     * @return \App\Client\Soap\GetChangeQuotaAndStop
     */
    public function setLoadStop($LoadStop)
    {
      $this->LoadStop = $LoadStop;
      return $this;
    }

}
