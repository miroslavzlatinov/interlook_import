<?php

namespace App\Client\Soap;

class SPOInfo
{

    /**
     * @var ArrayOfCOLinkService $COLinkServices
     */
    protected $COLinkServices = null;

    /**
     * @var ArrayOfXYRule $XYRules
     */
    protected $XYRules = null;

    /**
     * @var ArrayOfCOService $COServices
     */
    protected $COServices = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $PeriodBeforeCheckIn
     */
    protected $PeriodBeforeCheckIn = null;

    /**
     * @var \DateTime $SaleDateBegin
     */
    protected $SaleDateBegin = null;

    /**
     * @var \DateTime $SaleDateEnd
     */
    protected $SaleDateEnd = null;

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var \DateTime $CreateDate
     */
    protected $CreateDate = null;

    /**
     * @var \DateTime $UpdateDate
     */
    protected $UpdateDate = null;

    /**
     * @var int $SpoType
     */
    protected $SpoType = null;

    /**
     * @var int $SvKey
     */
    protected $SvKey = null;

    /**
     * @param int $Id
     * @param string $Name
     * @param int $PeriodBeforeCheckIn
     * @param \DateTime $SaleDateBegin
     * @param \DateTime $SaleDateEnd
     * @param string $Comment
     * @param \DateTime $CreateDate
     * @param \DateTime $UpdateDate
     * @param int $SpoType
     * @param int $SvKey
     */
    public function __construct($Id, $Name, $PeriodBeforeCheckIn, \DateTime $SaleDateBegin, \DateTime $SaleDateEnd, $Comment, \DateTime $CreateDate, \DateTime $UpdateDate, $SpoType, $SvKey)
    {
      $this->Id = $Id;
      $this->Name = $Name;
      $this->PeriodBeforeCheckIn = $PeriodBeforeCheckIn;
      $this->SaleDateBegin = $SaleDateBegin->format(\DateTime::ATOM);
      $this->SaleDateEnd = $SaleDateEnd->format(\DateTime::ATOM);
      $this->Comment = $Comment;
      $this->CreateDate = $CreateDate->format(\DateTime::ATOM);
      $this->UpdateDate = $UpdateDate->format(\DateTime::ATOM);
      $this->SpoType = $SpoType;
      $this->SvKey = $SvKey;
    }

    /**
     * @return ArrayOfCOLinkService
     */
    public function getCOLinkServices()
    {
      return $this->COLinkServices;
    }

    /**
     * @param ArrayOfCOLinkService $COLinkServices
     * @return \App\Client\Soap\SPOInfo
     */
    public function setCOLinkServices($COLinkServices)
    {
      $this->COLinkServices = $COLinkServices;
      return $this;
    }

    /**
     * @return ArrayOfXYRule
     */
    public function getXYRules()
    {
      return $this->XYRules;
    }

    /**
     * @param ArrayOfXYRule $XYRules
     * @return \App\Client\Soap\SPOInfo
     */
    public function setXYRules($XYRules)
    {
      $this->XYRules = $XYRules;
      return $this;
    }

    /**
     * @return ArrayOfCOService
     */
    public function getCOServices()
    {
      return $this->COServices;
    }

    /**
     * @param ArrayOfCOService $COServices
     * @return \App\Client\Soap\SPOInfo
     */
    public function setCOServices($COServices)
    {
      $this->COServices = $COServices;
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
     * @return \App\Client\Soap\SPOInfo
     */
    public function setId($Id)
    {
      $this->Id = $Id;
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
     * @return \App\Client\Soap\SPOInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getPeriodBeforeCheckIn()
    {
      return $this->PeriodBeforeCheckIn;
    }

    /**
     * @param int $PeriodBeforeCheckIn
     * @return \App\Client\Soap\SPOInfo
     */
    public function setPeriodBeforeCheckIn($PeriodBeforeCheckIn)
    {
      $this->PeriodBeforeCheckIn = $PeriodBeforeCheckIn;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSaleDateBegin()
    {
      if ($this->SaleDateBegin == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->SaleDateBegin);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $SaleDateBegin
     * @return \App\Client\Soap\SPOInfo
     */
    public function setSaleDateBegin(\DateTime $SaleDateBegin)
    {
      $this->SaleDateBegin = $SaleDateBegin->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSaleDateEnd()
    {
      if ($this->SaleDateEnd == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->SaleDateEnd);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $SaleDateEnd
     * @return \App\Client\Soap\SPOInfo
     */
    public function setSaleDateEnd(\DateTime $SaleDateEnd)
    {
      $this->SaleDateEnd = $SaleDateEnd->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
      return $this->Comment;
    }

    /**
     * @param string $Comment
     * @return \App\Client\Soap\SPOInfo
     */
    public function setComment($Comment)
    {
      $this->Comment = $Comment;
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
     * @return \App\Client\Soap\SPOInfo
     */
    public function setCreateDate(\DateTime $CreateDate)
    {
      $this->CreateDate = $CreateDate->format(\DateTime::ATOM);
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
     * @return \App\Client\Soap\SPOInfo
     */
    public function setUpdateDate(\DateTime $UpdateDate)
    {
      $this->UpdateDate = $UpdateDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getSpoType()
    {
      return $this->SpoType;
    }

    /**
     * @param int $SpoType
     * @return \App\Client\Soap\SPOInfo
     */
    public function setSpoType($SpoType)
    {
      $this->SpoType = $SpoType;
      return $this;
    }

    /**
     * @return int
     */
    public function getSvKey()
    {
      return $this->SvKey;
    }

    /**
     * @param int $SvKey
     * @return \App\Client\Soap\SPOInfo
     */
    public function setSvKey($SvKey)
    {
      $this->SvKey = $SvKey;
      return $this;
    }

}
