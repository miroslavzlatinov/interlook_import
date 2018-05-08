<?php

namespace App\Client\Soap;

class CreateReservation
{

    /**
     * @var string $guid
     */
    protected $guid = null;

    /**
     * @var Reservation $reserv
     */
    protected $reserv = null;

    /**
     * @param string $guid
     * @param Reservation $reserv
     */
    public function __construct($guid, $reserv)
    {
      $this->guid = $guid;
      $this->reserv = $reserv;
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
     * @return \App\Client\Soap\CreateReservation
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

    /**
     * @return Reservation
     */
    public function getReserv()
    {
      return $this->reserv;
    }

    /**
     * @param Reservation $reserv
     * @return \App\Client\Soap\CreateReservation
     */
    public function setReserv($reserv)
    {
      $this->reserv = $reserv;
      return $this;
    }

}
