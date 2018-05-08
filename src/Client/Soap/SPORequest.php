<?php

namespace App\Client\Soap;

class SPORequest
{

    /**
     * @var int $SvKey
     */
    protected $SvKey = null;

    /**
     * @var \DateTime $PublicationDateBegin
     */
    protected $PublicationDateBegin = null;

    /**
     * @var \DateTime $PublicationDateEnd
     */
    protected $PublicationDateEnd = null;

    /**
     * @param int $SvKey
     * @param \DateTime $PublicationDateBegin
     * @param \DateTime $PublicationDateEnd
     */
    public function __construct($SvKey, \DateTime $PublicationDateBegin, \DateTime $PublicationDateEnd)
    {
      $this->SvKey = $SvKey;
      $this->PublicationDateBegin = $PublicationDateBegin->format(\DateTime::ATOM);
      $this->PublicationDateEnd = $PublicationDateEnd->format(\DateTime::ATOM);
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
     * @return \App\Client\Soap\SPORequest
     */
    public function setSvKey($SvKey)
    {
      $this->SvKey = $SvKey;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPublicationDateBegin()
    {
      if ($this->PublicationDateBegin == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PublicationDateBegin);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PublicationDateBegin
     * @return \App\Client\Soap\SPORequest
     */
    public function setPublicationDateBegin(\DateTime $PublicationDateBegin)
    {
      $this->PublicationDateBegin = $PublicationDateBegin->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPublicationDateEnd()
    {
      if ($this->PublicationDateEnd == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PublicationDateEnd);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PublicationDateEnd
     * @return \App\Client\Soap\SPORequest
     */
    public function setPublicationDateEnd(\DateTime $PublicationDateEnd)
    {
      $this->PublicationDateEnd = $PublicationDateEnd->format(\DateTime::ATOM);
      return $this;
    }

}
