<?php

namespace App\Client\Soap;

class Country extends Reference
{

    /**
     * @var boolean $IsIncoming
     */
    protected $IsIncoming = null;

    /**
     * @param int $ID
     * @param boolean $IsIncoming
     */
    public function __construct($ID, $IsIncoming)
    {
      parent::__construct($ID);
      $this->IsIncoming = $IsIncoming;
    }

    /**
     * @return boolean
     */
    public function getIsIncoming()
    {
      return $this->IsIncoming;
    }

    /**
     * @param boolean $IsIncoming
     * @return \App\Client\Soap\Country
     */
    public function setIsIncoming($IsIncoming)
    {
      $this->IsIncoming = $IsIncoming;
      return $this;
    }

}
