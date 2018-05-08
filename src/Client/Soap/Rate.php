<?php

namespace App\Client\Soap;

class Rate extends Reference
{

    /**
     * @var boolean $IsMain
     */
    protected $IsMain = null;

    /**
     * @var boolean $IsNational
     */
    protected $IsNational = null;

    /**
     * @param int $ID
     * @param boolean $IsMain
     * @param boolean $IsNational
     */
    public function __construct($ID, $IsMain, $IsNational)
    {
      parent::__construct($ID);
      $this->IsMain = $IsMain;
      $this->IsNational = $IsNational;
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
     * @return \App\Client\Soap\Rate
     */
    public function setIsMain($IsMain)
    {
      $this->IsMain = $IsMain;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsNational()
    {
      return $this->IsNational;
    }

    /**
     * @param boolean $IsNational
     * @return \App\Client\Soap\Rate
     */
    public function setIsNational($IsNational)
    {
      $this->IsNational = $IsNational;
      return $this;
    }

}
