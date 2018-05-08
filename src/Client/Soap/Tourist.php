<?php

namespace App\Client\Soap;

class Tourist
{

    /**
     * @var Passport $LocalPassport
     */
    protected $LocalPassport = null;

    /**
     * @var Passport $ForeignPassport
     */
    protected $ForeignPassport = null;

    /**
     * @var ArrayOfParameterPair $AdditionalParams
     */
    protected $AdditionalParams = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var Sex $Sex
     */
    protected $Sex = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $SurName
     */
    protected $SurName = null;

    /**
     * @var \DateTime $BirthDate
     */
    protected $BirthDate = null;

    /**
     * @var string $FirstNameLat
     */
    protected $FirstNameLat = null;

    /**
     * @var string $LastNameLat
     */
    protected $LastNameLat = null;

    /**
     * @var string $SurNameLat
     */
    protected $SurNameLat = null;

    /**
     * @var AgeType $AgeType
     */
    protected $AgeType = null;

    /**
     * @var string $Citizen
     */
    protected $Citizen = null;

    /**
     * @var boolean $IsMain
     */
    protected $IsMain = null;

    /**
     * @var int $ExternalID
     */
    protected $ExternalID = null;

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @param string $Name
     * @param Sex $Sex
     * @param string $FirstName
     * @param string $LastName
     * @param string $SurName
     * @param \DateTime $BirthDate
     * @param string $FirstNameLat
     * @param string $LastNameLat
     * @param string $SurNameLat
     * @param AgeType $AgeType
     * @param string $Citizen
     * @param boolean $IsMain
     * @param int $ExternalID
     * @param int $ID
     */
    public function __construct($Name, $Sex, $FirstName, $LastName, $SurName, \DateTime $BirthDate, $FirstNameLat, $LastNameLat, $SurNameLat, $AgeType, $Citizen, $IsMain, $ExternalID, $ID)
    {
      $this->Name = $Name;
      $this->Sex = $Sex;
      $this->FirstName = $FirstName;
      $this->LastName = $LastName;
      $this->SurName = $SurName;
      $this->BirthDate = $BirthDate->format(\DateTime::ATOM);
      $this->FirstNameLat = $FirstNameLat;
      $this->LastNameLat = $LastNameLat;
      $this->SurNameLat = $SurNameLat;
      $this->AgeType = $AgeType;
      $this->Citizen = $Citizen;
      $this->IsMain = $IsMain;
      $this->ExternalID = $ExternalID;
      $this->ID = $ID;
    }

    /**
     * @return Passport
     */
    public function getLocalPassport()
    {
      return $this->LocalPassport;
    }

    /**
     * @param Passport $LocalPassport
     * @return \App\Client\Soap\Tourist
     */
    public function setLocalPassport($LocalPassport)
    {
      $this->LocalPassport = $LocalPassport;
      return $this;
    }

    /**
     * @return Passport
     */
    public function getForeignPassport()
    {
      return $this->ForeignPassport;
    }

    /**
     * @param Passport $ForeignPassport
     * @return \App\Client\Soap\Tourist
     */
    public function setForeignPassport($ForeignPassport)
    {
      $this->ForeignPassport = $ForeignPassport;
      return $this;
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
     * @return \App\Client\Soap\Tourist
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
     * @return \App\Client\Soap\Tourist
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return Sex
     */
    public function getSex()
    {
      return $this->Sex;
    }

    /**
     * @param Sex $Sex
     * @return \App\Client\Soap\Tourist
     */
    public function setSex($Sex)
    {
      $this->Sex = $Sex;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \App\Client\Soap\Tourist
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \App\Client\Soap\Tourist
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSurName()
    {
      return $this->SurName;
    }

    /**
     * @param string $SurName
     * @return \App\Client\Soap\Tourist
     */
    public function setSurName($SurName)
    {
      $this->SurName = $SurName;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBirthDate()
    {
      if ($this->BirthDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->BirthDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $BirthDate
     * @return \App\Client\Soap\Tourist
     */
    public function setBirthDate(\DateTime $BirthDate)
    {
      $this->BirthDate = $BirthDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstNameLat()
    {
      return $this->FirstNameLat;
    }

    /**
     * @param string $FirstNameLat
     * @return \App\Client\Soap\Tourist
     */
    public function setFirstNameLat($FirstNameLat)
    {
      $this->FirstNameLat = $FirstNameLat;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastNameLat()
    {
      return $this->LastNameLat;
    }

    /**
     * @param string $LastNameLat
     * @return \App\Client\Soap\Tourist
     */
    public function setLastNameLat($LastNameLat)
    {
      $this->LastNameLat = $LastNameLat;
      return $this;
    }

    /**
     * @return string
     */
    public function getSurNameLat()
    {
      return $this->SurNameLat;
    }

    /**
     * @param string $SurNameLat
     * @return \App\Client\Soap\Tourist
     */
    public function setSurNameLat($SurNameLat)
    {
      $this->SurNameLat = $SurNameLat;
      return $this;
    }

    /**
     * @return AgeType
     */
    public function getAgeType()
    {
      return $this->AgeType;
    }

    /**
     * @param AgeType $AgeType
     * @return \App\Client\Soap\Tourist
     */
    public function setAgeType($AgeType)
    {
      $this->AgeType = $AgeType;
      return $this;
    }

    /**
     * @return string
     */
    public function getCitizen()
    {
      return $this->Citizen;
    }

    /**
     * @param string $Citizen
     * @return \App\Client\Soap\Tourist
     */
    public function setCitizen($Citizen)
    {
      $this->Citizen = $Citizen;
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
     * @return \App\Client\Soap\Tourist
     */
    public function setIsMain($IsMain)
    {
      $this->IsMain = $IsMain;
      return $this;
    }

    /**
     * @return int
     */
    public function getExternalID()
    {
      return $this->ExternalID;
    }

    /**
     * @param int $ExternalID
     * @return \App\Client\Soap\Tourist
     */
    public function setExternalID($ExternalID)
    {
      $this->ExternalID = $ExternalID;
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
     * @return \App\Client\Soap\Tourist
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

}
