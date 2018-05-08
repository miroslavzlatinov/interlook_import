<?php

namespace App\Client\Soap;

class HotelLinkTypeEx
{

    /**
     * @var int $HotelId
     */
    protected $HotelId = null;

    /**
     * @var int $ExtraServiceLinkType
     */
    protected $ExtraServiceLinkType = null;

    /**
     * @param int $HotelId
     * @param int $ExtraServiceLinkType
     */
    public function __construct($HotelId, $ExtraServiceLinkType)
    {
      $this->HotelId = $HotelId;
      $this->ExtraServiceLinkType = $ExtraServiceLinkType;
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
     * @return \App\Client\Soap\HotelLinkTypeEx
     */
    public function setHotelId($HotelId)
    {
      $this->HotelId = $HotelId;
      return $this;
    }

    /**
     * @return int
     */
    public function getExtraServiceLinkType()
    {
      return $this->ExtraServiceLinkType;
    }

    /**
     * @param int $ExtraServiceLinkType
     * @return \App\Client\Soap\HotelLinkTypeEx
     */
    public function setExtraServiceLinkType($ExtraServiceLinkType)
    {
      $this->ExtraServiceLinkType = $ExtraServiceLinkType;
      return $this;
    }

}
