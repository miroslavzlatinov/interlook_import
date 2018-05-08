<?php

namespace App\Client\Soap;

class AccomodationInfo
{

    /**
     * @var ArrayOfAccomadationAge $ChildrenAgesList
     */
    protected $ChildrenAgesList = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var boolean $IsPerRoom
     */
    protected $IsPerRoom = null;

    /**
     * @var string $NameUnicode
     */
    protected $NameUnicode = null;

    /**
     * @var int $CountAdultMain
     */
    protected $CountAdultMain = null;

    /**
     * @var int $CountChildMain
     */
    protected $CountChildMain = null;

    /**
     * @var int $CountAdultExtra
     */
    protected $CountAdultExtra = null;

    /**
     * @var int $CountChildExtra
     */
    protected $CountChildExtra = null;

    /**
     * @var string $ChildrenAges
     */
    protected $ChildrenAges = null;

    /**
     * @var boolean $IsWeb
     */
    protected $IsWeb = null;

    /**
     * @var boolean $IsPackage
     */
    protected $IsPackage = null;

    /**
     * @var \DateTime $UpdateDate
     */
    protected $UpdateDate = null;

    /**
     * @param int $Id
     * @param string $Code
     * @param string $Name
     * @param boolean $IsPerRoom
     * @param string $NameUnicode
     * @param int $CountAdultMain
     * @param int $CountChildMain
     * @param int $CountAdultExtra
     * @param int $CountChildExtra
     * @param string $ChildrenAges
     * @param boolean $IsWeb
     * @param boolean $IsPackage
     * @param \DateTime $UpdateDate
     */
    public function __construct($Id, $Code, $Name, $IsPerRoom, $NameUnicode, $CountAdultMain, $CountChildMain, $CountAdultExtra, $CountChildExtra, $ChildrenAges, $IsWeb, $IsPackage, \DateTime $UpdateDate)
    {
      $this->Id = $Id;
      $this->Code = $Code;
      $this->Name = $Name;
      $this->IsPerRoom = $IsPerRoom;
      $this->NameUnicode = $NameUnicode;
      $this->CountAdultMain = $CountAdultMain;
      $this->CountChildMain = $CountChildMain;
      $this->CountAdultExtra = $CountAdultExtra;
      $this->CountChildExtra = $CountChildExtra;
      $this->ChildrenAges = $ChildrenAges;
      $this->IsWeb = $IsWeb;
      $this->IsPackage = $IsPackage;
      $this->UpdateDate = $UpdateDate->format(\DateTime::ATOM);
    }

    /**
     * @return ArrayOfAccomadationAge
     */
    public function getChildrenAgesList()
    {
      return $this->ChildrenAgesList;
    }

    /**
     * @param ArrayOfAccomadationAge $ChildrenAgesList
     * @return \App\Client\Soap\AccomodationInfo
     */
    public function setChildrenAgesList($ChildrenAgesList)
    {
      $this->ChildrenAgesList = $ChildrenAgesList;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return \App\Client\Soap\AccomodationInfo
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \App\Client\Soap\AccomodationInfo
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
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
     * @return \App\Client\Soap\AccomodationInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPerRoom()
    {
      return $this->IsPerRoom;
    }

    /**
     * @param boolean $IsPerRoom
     * @return \App\Client\Soap\AccomodationInfo
     */
    public function setIsPerRoom($IsPerRoom)
    {
      $this->IsPerRoom = $IsPerRoom;
      return $this;
    }

    /**
     * @return string
     */
    public function getNameUnicode()
    {
      return $this->NameUnicode;
    }

    /**
     * @param string $NameUnicode
     * @return \App\Client\Soap\AccomodationInfo
     */
    public function setNameUnicode($NameUnicode)
    {
      $this->NameUnicode = $NameUnicode;
      return $this;
    }

    /**
     * @return int
     */
    public function getCountAdultMain()
    {
      return $this->CountAdultMain;
    }

    /**
     * @param int $CountAdultMain
     * @return \App\Client\Soap\AccomodationInfo
     */
    public function setCountAdultMain($CountAdultMain)
    {
      $this->CountAdultMain = $CountAdultMain;
      return $this;
    }

    /**
     * @return int
     */
    public function getCountChildMain()
    {
      return $this->CountChildMain;
    }

    /**
     * @param int $CountChildMain
     * @return \App\Client\Soap\AccomodationInfo
     */
    public function setCountChildMain($CountChildMain)
    {
      $this->CountChildMain = $CountChildMain;
      return $this;
    }

    /**
     * @return int
     */
    public function getCountAdultExtra()
    {
      return $this->CountAdultExtra;
    }

    /**
     * @param int $CountAdultExtra
     * @return \App\Client\Soap\AccomodationInfo
     */
    public function setCountAdultExtra($CountAdultExtra)
    {
      $this->CountAdultExtra = $CountAdultExtra;
      return $this;
    }

    /**
     * @return int
     */
    public function getCountChildExtra()
    {
      return $this->CountChildExtra;
    }

    /**
     * @param int $CountChildExtra
     * @return \App\Client\Soap\AccomodationInfo
     */
    public function setCountChildExtra($CountChildExtra)
    {
      $this->CountChildExtra = $CountChildExtra;
      return $this;
    }

    /**
     * @return string
     */
    public function getChildrenAges()
    {
      return $this->ChildrenAges;
    }

    /**
     * @param string $ChildrenAges
     * @return \App\Client\Soap\AccomodationInfo
     */
    public function setChildrenAges($ChildrenAges)
    {
      $this->ChildrenAges = $ChildrenAges;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsWeb()
    {
      return $this->IsWeb;
    }

    /**
     * @param boolean $IsWeb
     * @return \App\Client\Soap\AccomodationInfo
     */
    public function setIsWeb($IsWeb)
    {
      $this->IsWeb = $IsWeb;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPackage()
    {
      return $this->IsPackage;
    }

    /**
     * @param boolean $IsPackage
     * @return \App\Client\Soap\AccomodationInfo
     */
    public function setIsPackage($IsPackage)
    {
      $this->IsPackage = $IsPackage;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateDate()
    {
      if ($this->UpdateDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->UpdateDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $UpdateDate
     * @return \App\Client\Soap\AccomodationInfo
     */
    public function setUpdateDate(\DateTime $UpdateDate)
    {
      $this->UpdateDate = $UpdateDate->format(\DateTime::ATOM);
      return $this;
    }

}
