<?php

namespace App\Client\Soap;

class RoomType extends Reference
{

    /**
     * @var int $Places
     */
    protected $Places = null;

    /**
     * @var int $ExPlaces
     */
    protected $ExPlaces = null;

    /**
     * @var int $PrintOrder
     */
    protected $PrintOrder = null;

    /**
     * @param int $ID
     * @param int $Places
     * @param int $ExPlaces
     * @param int $PrintOrder
     */
    public function __construct($ID, $Places, $ExPlaces, $PrintOrder)
    {
      parent::__construct($ID);
      $this->Places = $Places;
      $this->ExPlaces = $ExPlaces;
      $this->PrintOrder = $PrintOrder;
    }

    /**
     * @return int
     */
    public function getPlaces()
    {
      return $this->Places;
    }

    /**
     * @param int $Places
     * @return \App\Client\Soap\RoomType
     */
    public function setPlaces($Places)
    {
      $this->Places = $Places;
      return $this;
    }

    /**
     * @return int
     */
    public function getExPlaces()
    {
      return $this->ExPlaces;
    }

    /**
     * @param int $ExPlaces
     * @return \App\Client\Soap\RoomType
     */
    public function setExPlaces($ExPlaces)
    {
      $this->ExPlaces = $ExPlaces;
      return $this;
    }

    /**
     * @return int
     */
    public function getPrintOrder()
    {
      return $this->PrintOrder;
    }

    /**
     * @param int $PrintOrder
     * @return \App\Client\Soap\RoomType
     */
    public function setPrintOrder($PrintOrder)
    {
      $this->PrintOrder = $PrintOrder;
      return $this;
    }

}
