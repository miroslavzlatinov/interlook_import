<?php

namespace App\Client\Soap;

class XYRule
{

    /**
     * @var int $ExcludeBy
     */
    protected $ExcludeBy = null;

    /**
     * @var string $Sign
     */
    protected $Sign = null;

    /**
     * @var int $XFrom
     */
    protected $XFrom = null;

    /**
     * @var int $XTo
     */
    protected $XTo = null;

    /**
     * @var int $Y
     */
    protected $Y = null;

    /**
     * @param int $ExcludeBy
     * @param string $Sign
     * @param int $XFrom
     * @param int $XTo
     * @param int $Y
     */
    public function __construct($ExcludeBy, $Sign, $XFrom, $XTo, $Y)
    {
      $this->ExcludeBy = $ExcludeBy;
      $this->Sign = $Sign;
      $this->XFrom = $XFrom;
      $this->XTo = $XTo;
      $this->Y = $Y;
    }

    /**
     * @return int
     */
    public function getExcludeBy()
    {
      return $this->ExcludeBy;
    }

    /**
     * @param int $ExcludeBy
     * @return \App\Client\Soap\XYRule
     */
    public function setExcludeBy($ExcludeBy)
    {
      $this->ExcludeBy = $ExcludeBy;
      return $this;
    }

    /**
     * @return string
     */
    public function getSign()
    {
      return $this->Sign;
    }

    /**
     * @param string $Sign
     * @return \App\Client\Soap\XYRule
     */
    public function setSign($Sign)
    {
      $this->Sign = $Sign;
      return $this;
    }

    /**
     * @return int
     */
    public function getXFrom()
    {
      return $this->XFrom;
    }

    /**
     * @param int $XFrom
     * @return \App\Client\Soap\XYRule
     */
    public function setXFrom($XFrom)
    {
      $this->XFrom = $XFrom;
      return $this;
    }

    /**
     * @return int
     */
    public function getXTo()
    {
      return $this->XTo;
    }

    /**
     * @param int $XTo
     * @return \App\Client\Soap\XYRule
     */
    public function setXTo($XTo)
    {
      $this->XTo = $XTo;
      return $this;
    }

    /**
     * @return int
     */
    public function getY()
    {
      return $this->Y;
    }

    /**
     * @param int $Y
     * @return \App\Client\Soap\XYRule
     */
    public function setY($Y)
    {
      $this->Y = $Y;
      return $this;
    }

}
