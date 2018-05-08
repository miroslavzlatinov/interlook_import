<?php

namespace App\Client\Soap;

class HotelQuotaStopInfo
{

    /**
     * @var int $HotelKey
     */
    protected $HotelKey = null;

    /**
     * @var \DateTime $UpdateDateQuota
     */
    protected $UpdateDateQuota = null;

    /**
     * @var \DateTime $UpdateDateStop
     */
    protected $UpdateDateStop = null;

    /**
     * @param int $HotelKey
     * @param \DateTime $UpdateDateQuota
     * @param \DateTime $UpdateDateStop
     */
    public function __construct($HotelKey, \DateTime $UpdateDateQuota, \DateTime $UpdateDateStop)
    {
      $this->HotelKey = $HotelKey;
      $this->UpdateDateQuota = $UpdateDateQuota->format(\DateTime::ATOM);
      $this->UpdateDateStop = $UpdateDateStop->format(\DateTime::ATOM);
    }

    /**
     * @return int
     */
    public function getHotelKey()
    {
      return $this->HotelKey;
    }

    /**
     * @param int $HotelKey
     * @return \App\Client\Soap\HotelQuotaStopInfo
     */
    public function setHotelKey($HotelKey)
    {
      $this->HotelKey = $HotelKey;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateDateQuota()
    {
      if ($this->UpdateDateQuota == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->UpdateDateQuota);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $UpdateDateQuota
     * @return \App\Client\Soap\HotelQuotaStopInfo
     */
    public function setUpdateDateQuota(\DateTime $UpdateDateQuota)
    {
      $this->UpdateDateQuota = $UpdateDateQuota->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateDateStop()
    {
      if ($this->UpdateDateStop == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->UpdateDateStop);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $UpdateDateStop
     * @return \App\Client\Soap\HotelQuotaStopInfo
     */
    public function setUpdateDateStop(\DateTime $UpdateDateStop)
    {
      $this->UpdateDateStop = $UpdateDateStop->format(\DateTime::ATOM);
      return $this;
    }

}
