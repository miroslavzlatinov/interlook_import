<?php

namespace App\Client\Soap;

class COService
{

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @var int $CostCount
     */
    protected $CostCount = null;

    /**
     * @var \DateTime $CostLastUpdate
     */
    protected $CostLastUpdate = null;

    /**
     * @param int $Code
     * @param int $CostCount
     * @param \DateTime $CostLastUpdate
     */
    public function __construct($Code, $CostCount, \DateTime $CostLastUpdate)
    {
      $this->Code = $Code;
      $this->CostCount = $CostCount;
      $this->CostLastUpdate = $CostLastUpdate->format(\DateTime::ATOM);
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
     * @return \App\Client\Soap\COService
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return int
     */
    public function getCostCount()
    {
      return $this->CostCount;
    }

    /**
     * @param int $CostCount
     * @return \App\Client\Soap\COService
     */
    public function setCostCount($CostCount)
    {
      $this->CostCount = $CostCount;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCostLastUpdate()
    {
      if ($this->CostLastUpdate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CostLastUpdate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CostLastUpdate
     * @return \App\Client\Soap\COService
     */
    public function setCostLastUpdate(\DateTime $CostLastUpdate)
    {
      $this->CostLastUpdate = $CostLastUpdate->format(\DateTime::ATOM);
      return $this;
    }

}
