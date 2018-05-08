<?php

namespace App\Client\Soap;

class RoomCategory extends Reference
{

    /**
     * @var int $MainPlaces
     */
    protected $MainPlaces = null;

    /**
     * @var int $ExtraPlaces
     */
    protected $ExtraPlaces = null;

    /**
     * @var boolean $IsMain
     */
    protected $IsMain = null;

    /**
     * @param int $ID
     * @param int $MainPlaces
     * @param int $ExtraPlaces
     * @param boolean $IsMain
     */
    public function __construct($ID, $MainPlaces, $ExtraPlaces, $IsMain)
    {
      parent::__construct($ID);
      $this->MainPlaces = $MainPlaces;
      $this->ExtraPlaces = $ExtraPlaces;
      $this->IsMain = $IsMain;
    }

    /**
     * @return int
     */
    public function getMainPlaces()
    {
      return $this->MainPlaces;
    }

    /**
     * @param int $MainPlaces
     * @return \App\Client\Soap\RoomCategory
     */
    public function setMainPlaces($MainPlaces)
    {
      $this->MainPlaces = $MainPlaces;
      return $this;
    }

    /**
     * @return int
     */
    public function getExtraPlaces()
    {
      return $this->ExtraPlaces;
    }

    /**
     * @param int $ExtraPlaces
     * @return \App\Client\Soap\RoomCategory
     */
    public function setExtraPlaces($ExtraPlaces)
    {
      $this->ExtraPlaces = $ExtraPlaces;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsMain()
    {
      return $this->IsMain;
    }

    /**
     * @param boolean $IsMain
     * @return \App\Client\Soap\RoomCategory
     */
    public function setIsMain($IsMain)
    {
      $this->IsMain = $IsMain;
      return $this;
    }

}
