<?php

namespace App\Client\Soap;

class ServiceList extends Reference
{

    /**
     * @var int $ServiceClaseID
     */
    protected $ServiceClaseID = null;

    /**
     * @var int $CountryID
     */
    protected $CountryID = null;

    /**
     * @param int $ID
     * @param int $ServiceClaseID
     * @param int $CountryID
     */
    public function __construct($ID, $ServiceClaseID, $CountryID)
    {
      parent::__construct($ID);
      $this->ServiceClaseID = $ServiceClaseID;
      $this->CountryID = $CountryID;
    }

    /**
     * @return int
     */
    public function getServiceClaseID()
    {
      return $this->ServiceClaseID;
    }

    /**
     * @param int $ServiceClaseID
     * @return \App\Client\Soap\ServiceList
     */
    public function setServiceClaseID($ServiceClaseID)
    {
      $this->ServiceClaseID = $ServiceClaseID;
      return $this;
    }

    /**
     * @return int
     */
    public function getCountryID()
    {
      return $this->CountryID;
    }

    /**
     * @param int $CountryID
     * @return \App\Client\Soap\ServiceList
     */
    public function setCountryID($CountryID)
    {
      $this->CountryID = $CountryID;
      return $this;
    }

}
