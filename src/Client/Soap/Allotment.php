<?php

namespace App\Client\Soap;

class Allotment extends StopSale
{

    /**
     * @var int $Total
     */
    protected $Total = null;

    /**
     * @var int $Sold
     */
    protected $Sold = null;

    /**
     * @var int $Free
     */
    protected $Free = null;

    /**
     * @param int $Code
     * @param \DateTime $StartDate
     * @param \DateTime $EndDate
     * @param \DateTime $Date
     * @param \DateTime $CreateDate
     * @param int $ID
     * @param string $Name
     * @param boolean $IsRemove
     * @param int $Total
     * @param int $Sold
     * @param int $Free
     */
    public function __construct($Code, \DateTime $StartDate, \DateTime $EndDate, \DateTime $Date, \DateTime $CreateDate, $ID, $Name, $IsRemove, $Total, $Sold, $Free)
    {
      parent::__construct($Code, $StartDate, $EndDate, $Date, $CreateDate, $ID, $Name, $IsRemove);
      $this->Total = $Total;
      $this->Sold = $Sold;
      $this->Free = $Free;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
      return $this->Total;
    }

    /**
     * @param int $Total
     * @return \App\Client\Soap\Allotment
     */
    public function setTotal($Total)
    {
      $this->Total = $Total;
      return $this;
    }

    /**
     * @return int
     */
    public function getSold()
    {
      return $this->Sold;
    }

    /**
     * @param int $Sold
     * @return \App\Client\Soap\Allotment
     */
    public function setSold($Sold)
    {
      $this->Sold = $Sold;
      return $this;
    }

    /**
     * @return int
     */
    public function getFree()
    {
      return $this->Free;
    }

    /**
     * @param int $Free
     * @return \App\Client\Soap\Allotment
     */
    public function setFree($Free)
    {
      $this->Free = $Free;
      return $this;
    }

}
