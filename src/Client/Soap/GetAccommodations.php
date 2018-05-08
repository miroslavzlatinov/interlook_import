<?php

namespace App\Client\Soap;

class GetAccommodations
{

    /**
     * @var string $guid
     */
    protected $guid = null;

    /**
     * @param string $guid
     */
    public function __construct($guid)
    {
      $this->guid = $guid;
    }

    /**
     * @return string
     */
    public function getGuid()
    {
      return $this->guid;
    }

    /**
     * @param string $guid
     * @return \App\Client\Soap\GetAccommodations
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

}
