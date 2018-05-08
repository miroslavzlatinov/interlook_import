<?php

namespace App\Client\Soap;

class RoomAccomodation extends Reference
{

    /**
     * @var boolean $PerRoom
     */
    protected $PerRoom = null;

    /**
     * @var int $AdultMainPalces
     */
    protected $AdultMainPalces = null;

    /**
     * @var int $ChildMainPalces
     */
    protected $ChildMainPalces = null;

    /**
     * @var int $AdultExtraPalces
     */
    protected $AdultExtraPalces = null;

    /**
     * @var int $ChildExtraPalces
     */
    protected $ChildExtraPalces = null;

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
     * @var int $AgeFrom
     */
    protected $AgeFrom = null;

    /**
     * @var int $AgeTo
     */
    protected $AgeTo = null;

    /**
     * @var int $Age2From
     */
    protected $Age2From = null;

    /**
     * @var int $Age2To
     */
    protected $Age2To = null;

    /**
     * @param int $ID
     * @param boolean $PerRoom
     * @param int $AdultMainPalces
     * @param int $ChildMainPalces
     * @param int $AdultExtraPalces
     * @param int $ChildExtraPalces
     * @param int $MainPlaces
     * @param int $ExtraPlaces
     * @param boolean $IsMain
     * @param int $AgeFrom
     * @param int $AgeTo
     * @param int $Age2From
     * @param int $Age2To
     */
    public function __construct($ID, $PerRoom, $AdultMainPalces, $ChildMainPalces, $AdultExtraPalces, $ChildExtraPalces, $MainPlaces, $ExtraPlaces, $IsMain, $AgeFrom, $AgeTo, $Age2From, $Age2To)
    {
      parent::__construct($ID);
      $this->PerRoom = $PerRoom;
      $this->AdultMainPalces = $AdultMainPalces;
      $this->ChildMainPalces = $ChildMainPalces;
      $this->AdultExtraPalces = $AdultExtraPalces;
      $this->ChildExtraPalces = $ChildExtraPalces;
      $this->MainPlaces = $MainPlaces;
      $this->ExtraPlaces = $ExtraPlaces;
      $this->IsMain = $IsMain;
      $this->AgeFrom = $AgeFrom;
      $this->AgeTo = $AgeTo;
      $this->Age2From = $Age2From;
      $this->Age2To = $Age2To;
    }

    /**
     * @return boolean
     */
    public function getPerRoom()
    {
      return $this->PerRoom;
    }

    /**
     * @param boolean $PerRoom
     * @return \App\Client\Soap\RoomAccomodation
     */
    public function setPerRoom($PerRoom)
    {
      $this->PerRoom = $PerRoom;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdultMainPalces()
    {
      return $this->AdultMainPalces;
    }

    /**
     * @param int $AdultMainPalces
     * @return \App\Client\Soap\RoomAccomodation
     */
    public function setAdultMainPalces($AdultMainPalces)
    {
      $this->AdultMainPalces = $AdultMainPalces;
      return $this;
    }

    /**
     * @return int
     */
    public function getChildMainPalces()
    {
      return $this->ChildMainPalces;
    }

    /**
     * @param int $ChildMainPalces
     * @return \App\Client\Soap\RoomAccomodation
     */
    public function setChildMainPalces($ChildMainPalces)
    {
      $this->ChildMainPalces = $ChildMainPalces;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdultExtraPalces()
    {
      return $this->AdultExtraPalces;
    }

    /**
     * @param int $AdultExtraPalces
     * @return \App\Client\Soap\RoomAccomodation
     */
    public function setAdultExtraPalces($AdultExtraPalces)
    {
      $this->AdultExtraPalces = $AdultExtraPalces;
      return $this;
    }

    /**
     * @return int
     */
    public function getChildExtraPalces()
    {
      return $this->ChildExtraPalces;
    }

    /**
     * @param int $ChildExtraPalces
     * @return \App\Client\Soap\RoomAccomodation
     */
    public function setChildExtraPalces($ChildExtraPalces)
    {
      $this->ChildExtraPalces = $ChildExtraPalces;
      return $this;
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
     * @return \App\Client\Soap\RoomAccomodation
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
     * @return \App\Client\Soap\RoomAccomodation
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
     * @return \App\Client\Soap\RoomAccomodation
     */
    public function setIsMain($IsMain)
    {
      $this->IsMain = $IsMain;
      return $this;
    }

    /**
     * @return int
     */
    public function getAgeFrom()
    {
      return $this->AgeFrom;
    }

    /**
     * @param int $AgeFrom
     * @return \App\Client\Soap\RoomAccomodation
     */
    public function setAgeFrom($AgeFrom)
    {
      $this->AgeFrom = $AgeFrom;
      return $this;
    }

    /**
     * @return int
     */
    public function getAgeTo()
    {
      return $this->AgeTo;
    }

    /**
     * @param int $AgeTo
     * @return \App\Client\Soap\RoomAccomodation
     */
    public function setAgeTo($AgeTo)
    {
      $this->AgeTo = $AgeTo;
      return $this;
    }

    /**
     * @return int
     */
    public function getAge2From()
    {
      return $this->Age2From;
    }

    /**
     * @param int $Age2From
     * @return \App\Client\Soap\RoomAccomodation
     */
    public function setAge2From($Age2From)
    {
      $this->Age2From = $Age2From;
      return $this;
    }

    /**
     * @return int
     */
    public function getAge2To()
    {
      return $this->Age2To;
    }

    /**
     * @param int $Age2To
     * @return \App\Client\Soap\RoomAccomodation
     */
    public function setAge2To($Age2To)
    {
      $this->Age2To = $Age2To;
      return $this;
    }

}
