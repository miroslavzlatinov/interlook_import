<?php

namespace App\Client\Soap;

class GetReservation
{

    /**
     * @var string $guid
     */
    protected $guid = null;

    /**
     * @var int $dgKey
     */
    protected $dgKey = null;

    /**
     * @param string $guid
     * @param int $dgKey
     */
    public function __construct($guid, $dgKey)
    {
      $this->guid = $guid;
      $this->dgKey = $dgKey;
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
     * @return \App\Client\Soap\GetReservation
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

    /**
     * @return int
     */
    public function getDgKey()
    {
      return $this->dgKey;
    }

    /**
     * @param int $dgKey
     * @return \App\Client\Soap\GetReservation
     */
    public function setDgKey($dgKey)
    {
      $this->dgKey = $dgKey;
      return $this;
    }

}
