<?php

namespace App\Client\Soap;

class QuoteHotel extends AllotmentHotel
{

    /**
     * @var int $RelizPeriod
     */
    protected $RelizPeriod = null;

    /**
     * @var QuoteObjectType $QuoteType
     */
    protected $QuoteType = null;

    /**
     * @var boolean $IsStopSale
     */
    protected $IsStopSale = null;

    /**
     * @param int $Code
     * @param \DateTime $StartDate
     * @param \DateTime $EndDate
     * @param \DateTime $Date
     * @param \DateTime $CreateDate
     * @param int $ID
     * @param string $Name
     * @param boolean $IsRemove
     * @param int $Total
     * @param int $Sold
     * @param int $Free
     * @param string $HotelName
     * @param string $RoomCategoryName
     * @param string $RoomTypeName
     * @param int $HotelKey
     * @param int $RoomTypeKey
     * @param int $RoomCategoryKey
     * @param int $RelizPeriod
     * @param QuoteObjectType $QuoteType
     * @param boolean $IsStopSale
     */
    public function __construct($Code, \DateTime $StartDate, \DateTime $EndDate, \DateTime $Date, \DateTime $CreateDate, $ID, $Name, $IsRemove, $Total, $Sold, $Free, $HotelName, $RoomCategoryName, $RoomTypeName, $HotelKey, $RoomTypeKey, $RoomCategoryKey, $RelizPeriod, $QuoteType, $IsStopSale)
    {
      parent::__construct($Code, $StartDate, $EndDate, $Date, $CreateDate, $ID, $Name, $IsRemove, $Total, $Sold, $Free, $HotelName, $RoomCategoryName, $RoomTypeName, $HotelKey, $RoomTypeKey, $RoomCategoryKey);
      $this->RelizPeriod = $RelizPeriod;
      $this->QuoteType = $QuoteType;
      $this->IsStopSale = $IsStopSale;
    }

    /**
     * @return int
     */
    public function getRelizPeriod()
    {
      return $this->RelizPeriod;
    }

    /**
     * @param int $RelizPeriod
     * @return \App\Client\Soap\QuoteHotel
     */
    public function setRelizPeriod($RelizPeriod)
    {
      $this->RelizPeriod = $RelizPeriod;
      return $this;
    }

    /**
     * @return QuoteObjectType
     */
    public function getQuoteType()
    {
      return $this->QuoteType;
    }

    /**
     * @param QuoteObjectType $QuoteType
     * @return \App\Client\Soap\QuoteHotel
     */
    public function setQuoteType($QuoteType)
    {
      $this->QuoteType = $QuoteType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsStopSale()
    {
      return $this->IsStopSale;
    }

    /**
     * @param boolean $IsStopSale
     * @return \App\Client\Soap\QuoteHotel
     */
    public function setIsStopSale($IsStopSale)
    {
      $this->IsStopSale = $IsStopSale;
      return $this;
    }

}
