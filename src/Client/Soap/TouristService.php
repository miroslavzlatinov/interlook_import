<?php

namespace App\Client\Soap;

class TouristService
{

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $TouristID
     */
    protected $TouristID = null;

    /**
     * @var int $ServiceID
     */
    protected $ServiceID = null;

    /**
     * @param int $ID
     * @param int $TouristID
     * @param int $ServiceID
     */
    public function __construct($ID, $TouristID, $ServiceID)
    {
      $this->ID = $ID;
      $this->TouristID = $TouristID;
      $this->ServiceID = $ServiceID;
    }

    /**
     * @return int
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param int $ID
     * @return \App\Client\Soap\TouristService
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \App\Client\Soap\TouristService
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getTouristID()
    {
      return $this->TouristID;
    }

    /**
     * @param int $TouristID
     * @return \App\Client\Soap\TouristService
     */
    public function setTouristID($TouristID)
    {
      $this->TouristID = $TouristID;
      return $this;
    }

    /**
     * @return int
     */
    public function getServiceID()
    {
      return $this->ServiceID;
    }

    /**
     * @param int $ServiceID
     * @return \App\Client\Soap\TouristService
     */
    public function setServiceID($ServiceID)
    {
      $this->ServiceID = $ServiceID;
      return $this;
    }

}
