<?php

namespace App\Client\Soap;

class StopSale
{

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var \DateTime $CreateDate
     */
    protected $CreateDate = null;

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var boolean $IsRemove
     */
    protected $IsRemove = null;

    /**
     * @param int $Code
     * @param \DateTime $StartDate
     * @param \DateTime $EndDate
     * @param \DateTime $Date
     * @param \DateTime $CreateDate
     * @param int $ID
     * @param string $Name
     * @param boolean $IsRemove
     */
    public function __construct($Code, \DateTime $StartDate, \DateTime $EndDate, \DateTime $Date, \DateTime $CreateDate, $ID, $Name, $IsRemove)
    {
      $this->Code = $Code;
      $this->StartDate = $StartDate->format(\DateTime::ATOM);
      $this->EndDate = $EndDate->format(\DateTime::ATOM);
      $this->Date = $Date->format(\DateTime::ATOM);
      $this->CreateDate = $CreateDate->format(\DateTime::ATOM);
      $this->ID = $ID;
      $this->Name = $Name;
      $this->IsRemove = $IsRemove;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param int $Code
     * @return \App\Client\Soap\StopSale
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->StartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartDate
     * @return \App\Client\Soap\StopSale
     */
    public function setStartDate(\DateTime $StartDate)
    {
      $this->StartDate = $StartDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->EndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndDate
     * @return \App\Client\Soap\StopSale
     */
    public function setEndDate(\DateTime $EndDate)
    {
      $this->EndDate = $EndDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
      if ($this->Date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date
     * @return \App\Client\Soap\StopSale
     */
    public function setDate(\DateTime $Date)
    {
      $this->Date = $Date->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreateDate()
    {
      if ($this->CreateDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreateDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreateDate
     * @return \App\Client\Soap\StopSale
     */
    public function setCreateDate(\DateTime $CreateDate)
    {
      $this->CreateDate = $CreateDate->format(\DateTime::ATOM);
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
     * @return \App\Client\Soap\StopSale
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
     * @return \App\Client\Soap\StopSale
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRemove()
    {
      return $this->IsRemove;
    }

    /**
     * @param boolean $IsRemove
     * @return \App\Client\Soap\StopSale
     */
    public function setIsRemove($IsRemove)
    {
      $this->IsRemove = $IsRemove;
      return $this;
    }

}
