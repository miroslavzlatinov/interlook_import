<?php

namespace App\Client\Soap;

class Region extends Reference
{

    /**
     * @var Country $Country
     */
    protected $Country = null;

    /**
     * @var int $CountryID
     */
    protected $CountryID = null;

    /**
     * @param int $ID
     * @param int $CountryID
     */
    public function __construct($ID, $CountryID)
    {
      parent::__construct($ID);
      $this->CountryID = $CountryID;
    }

    /**
     * @return Country
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param Country $Country
     * @return \App\Client\Soap\Region
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
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
     * @return \App\Client\Soap\Region
     */
    public function setCountryID($CountryID)
    {
      $this->CountryID = $CountryID;
      return $this;
    }

}
