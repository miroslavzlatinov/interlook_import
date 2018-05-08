<?php

namespace App\Client\Soap;

class Passport
{

    /**
     * @var string $IssuedBy
     */
    protected $IssuedBy = null;

    /**
     * @var string $Serie
     */
    protected $Serie = null;

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var \DateTime $IssueDate
     */
    protected $IssueDate = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @param string $IssuedBy
     * @param string $Serie
     * @param string $Number
     * @param \DateTime $IssueDate
     * @param \DateTime $EndDate
     */
    public function __construct($IssuedBy, $Serie, $Number, \DateTime $IssueDate, \DateTime $EndDate)
    {
      $this->IssuedBy = $IssuedBy;
      $this->Serie = $Serie;
      $this->Number = $Number;
      $this->IssueDate = $IssueDate->format(\DateTime::ATOM);
      $this->EndDate = $EndDate->format(\DateTime::ATOM);
    }

    /**
     * @return string
     */
    public function getIssuedBy()
    {
      return $this->IssuedBy;
    }

    /**
     * @param string $IssuedBy
     * @return \App\Client\Soap\Passport
     */
    public function setIssuedBy($IssuedBy)
    {
      $this->IssuedBy = $IssuedBy;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerie()
    {
      return $this->Serie;
    }

    /**
     * @param string $Serie
     * @return \App\Client\Soap\Passport
     */
    public function setSerie($Serie)
    {
      $this->Serie = $Serie;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \App\Client\Soap\Passport
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getIssueDate()
    {
      if ($this->IssueDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->IssueDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $IssueDate
     * @return \App\Client\Soap\Passport
     */
    public function setIssueDate(\DateTime $IssueDate)
    {
      $this->IssueDate = $IssueDate->format(\DateTime::ATOM);
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
     * @return \App\Client\Soap\Passport
     */
    public function setEndDate(\DateTime $EndDate)
    {
      $this->EndDate = $EndDate->format(\DateTime::ATOM);
      return $this;
    }

}
