<?php

namespace App\Client\Soap;

class Partner extends Reference
{

    /**
     * @var int $PartnersGroupID
     */
    protected $PartnersGroupID = null;

    /**
     * @var string $FullName
     */
    protected $FullName = null;

    /**
     * @var string $Fax
     */
    protected $Fax = null;

    /**
     * @var string $Address
     */
    protected $Address = null;

    /**
     * @var string $Zip
     */
    protected $Zip = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var string $Phones
     */
    protected $Phones = null;

    /**
     * @param int $ID
     * @param int $PartnersGroupID
     */
    public function __construct($ID, $PartnersGroupID)
    {
      parent::__construct($ID);
      $this->PartnersGroupID = $PartnersGroupID;
    }

    /**
     * @return int
     */
    public function getPartnersGroupID()
    {
      return $this->PartnersGroupID;
    }

    /**
     * @param int $PartnersGroupID
     * @return \App\Client\Soap\Partner
     */
    public function setPartnersGroupID($PartnersGroupID)
    {
      $this->PartnersGroupID = $PartnersGroupID;
      return $this;
    }

    /**
     * @return string
     */
    public function getFullName()
    {
      return $this->FullName;
    }

    /**
     * @param string $FullName
     * @return \App\Client\Soap\Partner
     */
    public function setFullName($FullName)
    {
      $this->FullName = $FullName;
      return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
      return $this->Fax;
    }

    /**
     * @param string $Fax
     * @return \App\Client\Soap\Partner
     */
    public function setFax($Fax)
    {
      $this->Fax = $Fax;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param string $Address
     * @return \App\Client\Soap\Partner
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return string
     */
    public function getZip()
    {
      return $this->Zip;
    }

    /**
     * @param string $Zip
     * @return \App\Client\Soap\Partner
     */
    public function setZip($Zip)
    {
      $this->Zip = $Zip;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \App\Client\Soap\Partner
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhones()
    {
      return $this->Phones;
    }

    /**
     * @param string $Phones
     * @return \App\Client\Soap\Partner
     */
    public function setPhones($Phones)
    {
      $this->Phones = $Phones;
      return $this;
    }

}
