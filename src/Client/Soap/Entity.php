<?php

namespace App\Client\Soap;

abstract class Entity
{

    /**
     * @var ArrayOfParameterPair $AdditionalParams
     */
    protected $AdditionalParams = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @param int $ID
     */
    public function __construct($ID)
    {
      $this->ID = $ID;
    }

    /**
     * @return ArrayOfParameterPair
     */
    public function getAdditionalParams()
    {
      return $this->AdditionalParams;
    }

    /**
     * @param ArrayOfParameterPair $AdditionalParams
     * @return \App\Client\Soap\Entity
     */
    public function setAdditionalParams($AdditionalParams)
    {
      $this->AdditionalParams = $AdditionalParams;
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
     * @return \App\Client\Soap\Entity
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
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
     * @return \App\Client\Soap\Entity
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

}
