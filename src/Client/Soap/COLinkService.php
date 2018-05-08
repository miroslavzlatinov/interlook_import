<?php

namespace App\Client\Soap;

class COLinkService
{

    /**
     * @var int $SvKey
     */
    protected $SvKey = null;

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var int $DurationMin
     */
    protected $DurationMin = null;

    /**
     * @var int $DurationMax
     */
    protected $DurationMax = null;

    /**
     * @var boolean $IsDisable
     */
    protected $IsDisable = null;

    /**
     * @var \DateTime $DisableDate
     */
    protected $DisableDate = null;

    /**
     * @param int $SvKey
     * @param int $Code
     * @param string $Comment
     * @param int $DurationMin
     * @param int $DurationMax
     * @param boolean $IsDisable
     * @param \DateTime $DisableDate
     */
    public function __construct($SvKey, $Code, $Comment, $DurationMin, $DurationMax, $IsDisable, \DateTime $DisableDate)
    {
      $this->SvKey = $SvKey;
      $this->Code = $Code;
      $this->Comment = $Comment;
      $this->DurationMin = $DurationMin;
      $this->DurationMax = $DurationMax;
      $this->IsDisable = $IsDisable;
      $this->DisableDate = $DisableDate->format(\DateTime::ATOM);
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
     * @return \App\Client\Soap\COLinkService
     */
    public function setSvKey($SvKey)
    {
      $this->SvKey = $SvKey;
      return $this;
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
     * @return \App\Client\Soap\COLinkService
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
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
     * @return \App\Client\Soap\COLinkService
     */
    public function setComment($Comment)
    {
      $this->Comment = $Comment;
      return $this;
    }

    /**
     * @return int
     */
    public function getDurationMin()
    {
      return $this->DurationMin;
    }

    /**
     * @param int $DurationMin
     * @return \App\Client\Soap\COLinkService
     */
    public function setDurationMin($DurationMin)
    {
      $this->DurationMin = $DurationMin;
      return $this;
    }

    /**
     * @return int
     */
    public function getDurationMax()
    {
      return $this->DurationMax;
    }

    /**
     * @param int $DurationMax
     * @return \App\Client\Soap\COLinkService
     */
    public function setDurationMax($DurationMax)
    {
      $this->DurationMax = $DurationMax;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDisable()
    {
      return $this->IsDisable;
    }

    /**
     * @param boolean $IsDisable
     * @return \App\Client\Soap\COLinkService
     */
    public function setIsDisable($IsDisable)
    {
      $this->IsDisable = $IsDisable;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDisableDate()
    {
      if ($this->DisableDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DisableDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DisableDate
     * @return \App\Client\Soap\COLinkService
     */
    public function setDisableDate(\DateTime $DisableDate)
    {
      $this->DisableDate = $DisableDate->format(\DateTime::ATOM);
      return $this;
    }

}
