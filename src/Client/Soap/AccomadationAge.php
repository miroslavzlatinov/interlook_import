<?php

namespace App\Client\Soap;

class AccomadationAge
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $AgeFrom
     */
    protected $AgeFrom = null;

    /**
     * @var int $AgeTo
     */
    protected $AgeTo = null;

    /**
     * @var int $CountMen
     */
    protected $CountMen = null;

    /**
     * @var boolean $IsMain
     */
    protected $IsMain = null;

    /**
     * @var \DateTime $UpdateDate
     */
    protected $UpdateDate = null;

    /**
     * @param int $Id
     * @param int $AgeFrom
     * @param int $AgeTo
     * @param int $CountMen
     * @param boolean $IsMain
     * @param \DateTime $UpdateDate
     */
    public function __construct($Id, $AgeFrom, $AgeTo, $CountMen, $IsMain, \DateTime $UpdateDate)
    {
      $this->Id = $Id;
      $this->AgeFrom = $AgeFrom;
      $this->AgeTo = $AgeTo;
      $this->CountMen = $CountMen;
      $this->IsMain = $IsMain;
      $this->UpdateDate = $UpdateDate->format(\DateTime::ATOM);
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
     * @return \App\Client\Soap\AccomadationAge
     */
    public function setId($Id)
    {
      $this->Id = $Id;
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
     * @return \App\Client\Soap\AccomadationAge
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
     * @return \App\Client\Soap\AccomadationAge
     */
    public function setAgeTo($AgeTo)
    {
      $this->AgeTo = $AgeTo;
      return $this;
    }

    /**
     * @return int
     */
    public function getCountMen()
    {
      return $this->CountMen;
    }

    /**
     * @param int $CountMen
     * @return \App\Client\Soap\AccomadationAge
     */
    public function setCountMen($CountMen)
    {
      $this->CountMen = $CountMen;
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
     * @return \App\Client\Soap\AccomadationAge
     */
    public function setIsMain($IsMain)
    {
      $this->IsMain = $IsMain;
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
     * @return \App\Client\Soap\AccomadationAge
     */
    public function setUpdateDate(\DateTime $UpdateDate)
    {
      $this->UpdateDate = $UpdateDate->format(\DateTime::ATOM);
      return $this;
    }

}
