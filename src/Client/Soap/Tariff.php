<?php

namespace App\Client\Soap;

class Tariff extends Reference
{

    /**
     * @var int $SVKey
     */
    protected $SVKey = null;

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var \DateTime $CreateDate
     */
    protected $CreateDate = null;

    /**
     * @param int $ID
     * @param int $SVKey
     * @param \DateTime $CreateDate
     */
    public function __construct($ID, $SVKey, \DateTime $CreateDate)
    {
      parent::__construct($ID);
      $this->SVKey = $SVKey;
      $this->CreateDate = $CreateDate->format(\DateTime::ATOM);
    }

    /**
     * @return int
     */
    public function getSVKey()
    {
      return $this->SVKey;
    }

    /**
     * @param int $SVKey
     * @return \App\Client\Soap\Tariff
     */
    public function setSVKey($SVKey)
    {
      $this->SVKey = $SVKey;
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
     * @return \App\Client\Soap\Tariff
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
     * @return \App\Client\Soap\Tariff
     */
    public function setCreateDate(\DateTime $CreateDate)
    {
      $this->CreateDate = $CreateDate->format(\DateTime::ATOM);
      return $this;
    }

}
