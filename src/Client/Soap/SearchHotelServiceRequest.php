<?php

namespace App\Client\Soap;

class SearchHotelServiceRequest
{

    /**
     * @var int $PageSize
     */
    protected $PageSize = null;

    /**
     * @var int $RowIndexFrom
     */
    protected $RowIndexFrom = null;

    /**
     * @var \DateTime $DateFrom
     */
    protected $DateFrom = null;

    /**
     * @var \DateTime $DateTo
     */
    protected $DateTo = null;

    /**
     * @var ArrayOfInt $RegionKeys
     */
    protected $RegionKeys = null;

    /**
     * @var ArrayOfInt $CityKeys
     */
    protected $CityKeys = null;

    /**
     * @var ArrayOfInt $HotelKeys
     */
    protected $HotelKeys = null;

    /**
     * @var ArrayOfInt $RoomDescriptionsKeys
     */
    protected $RoomDescriptionsKeys = null;

    /**
     * @var ArrayOfInt $PansionKeys
     */
    protected $PansionKeys = null;

    /**
     * @var ArrayOfInt $Ages
     */
    protected $Ages = null;

    /**
     * @var int $Pax
     */
    protected $Pax = null;

    /**
     * @var ArrayOfInt $Tariffs
     */
    protected $Tariffs = null;

    /**
     * @var string $CacheGuid
     */
    protected $CacheGuid = null;

    /**
     * @var int $ResultView
     */
    protected $ResultView = null;

    /**
     * @var int $Mode
     */
    protected $Mode = null;

    /**
     * @param int $PageSize
     * @param int $RowIndexFrom
     * @param \DateTime $DateFrom
     * @param \DateTime $DateTo
     * @param int $Pax
     * @param int $ResultView
     * @param int $Mode
     */
    public function __construct($PageSize, $RowIndexFrom, \DateTime $DateFrom, \DateTime $DateTo, $Pax, $ResultView, $Mode)
    {
      $this->PageSize = $PageSize;
      $this->RowIndexFrom = $RowIndexFrom;
      $this->DateFrom = $DateFrom->format(\DateTime::ATOM);
      $this->DateTo = $DateTo->format(\DateTime::ATOM);
      $this->Pax = $Pax;
      $this->ResultView = $ResultView;
      $this->Mode = $Mode;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
      return $this->PageSize;
    }

    /**
     * @param int $PageSize
     * @return App\Client\Soap\SearchHotelServiceRequest
     */
    public function setPageSize($PageSize)
    {
      $this->PageSize = $PageSize;
      return $this;
    }

    /**
     * @return int
     */
    public function getRowIndexFrom()
    {
      return $this->RowIndexFrom;
    }

    /**
     * @param int $RowIndexFrom
     * @return \Client\Soap\SearchHotelServiceRequest
     */
    public function setRowIndexFrom($RowIndexFrom)
    {
      $this->RowIndexFrom = $RowIndexFrom;
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
     * @return \Client\Soap\SearchHotelServiceRequest
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
     * @return \Client\Soap\SearchHotelServiceRequest
     */
    public function setDateTo(\DateTime $DateTo)
    {
      $this->DateTo = $DateTo->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getRegionKeys()
    {
      return $this->RegionKeys;
    }

    /**
     * @param ArrayOfInt $RegionKeys
     * @return \Client\Soap\SearchHotelServiceRequest
     */
    public function setRegionKeys($RegionKeys)
    {
      $this->RegionKeys = $RegionKeys;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getCityKeys()
    {
      return $this->CityKeys;
    }

    /**
     * @param ArrayOfInt $CityKeys
     * @return \Client\Soap\SearchHotelServiceRequest
     */
    public function setCityKeys($CityKeys)
    {
      $this->CityKeys = $CityKeys;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getHotelKeys()
    {
      return $this->HotelKeys;
    }

    /**
     * @param ArrayOfInt $HotelKeys
     * @return \Client\Soap\SearchHotelServiceRequest
     */
    public function setHotelKeys($HotelKeys)
    {
      $this->HotelKeys = $HotelKeys;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getRoomDescriptionsKeys()
    {
      return $this->RoomDescriptionsKeys;
    }

    /**
     * @param ArrayOfInt $RoomDescriptionsKeys
     * @return \Client\Soap\SearchHotelServiceRequest
     */
    public function setRoomDescriptionsKeys($RoomDescriptionsKeys)
    {
      $this->RoomDescriptionsKeys = $RoomDescriptionsKeys;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getPansionKeys()
    {
      return $this->PansionKeys;
    }

    /**
     * @param ArrayOfInt $PansionKeys
     * @return \Client\Soap\SearchHotelServiceRequest
     */
    public function setPansionKeys($PansionKeys)
    {
      $this->PansionKeys = $PansionKeys;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getAges()
    {
      return $this->Ages;
    }

    /**
     * @param ArrayOfInt $Ages
     * @return \Client\Soap\SearchHotelServiceRequest
     */
    public function setAges($Ages)
    {
      $this->Ages = $Ages;
      return $this;
    }

    /**
     * @return int
     */
    public function getPax()
    {
      return $this->Pax;
    }

    /**
     * @param int $Pax
     * @return \Client\Soap\SearchHotelServiceRequest
     */
    public function setPax($Pax)
    {
      $this->Pax = $Pax;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getTariffs()
    {
      return $this->Tariffs;
    }

    /**
     * @param ArrayOfInt $Tariffs
     * @return \Client\Soap\SearchHotelServiceRequest
     */
    public function setTariffs($Tariffs)
    {
      $this->Tariffs = $Tariffs;
      return $this;
    }

    /**
     * @return string
     */
    public function getCacheGuid()
    {
      return $this->CacheGuid;
    }

    /**
     * @param string $CacheGuid
     * @return \Client\Soap\SearchHotelServiceRequest
     */
    public function setCacheGuid($CacheGuid)
    {
      $this->CacheGuid = $CacheGuid;
      return $this;
    }

    /**
     * @return int
     */
    public function getResultView()
    {
      return $this->ResultView;
    }

    /**
     * @param int $ResultView
     * @return \Client\Soap\SearchHotelServiceRequest
     */
    public function setResultView($ResultView)
    {
      $this->ResultView = $ResultView;
      return $this;
    }

    /**
     * @return int
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param int $Mode
     * @return \Client\Soap\SearchHotelServiceRequest
     */
    public function setMode($Mode)
    {
      $this->Mode = $Mode;
      return $this;
    }

}
