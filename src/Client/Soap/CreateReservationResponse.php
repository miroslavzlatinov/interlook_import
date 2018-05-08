<?php

namespace App\Client\Soap;

class CreateReservationResponse
{

    /**
     * @var Reservation $CreateReservationResult
     */
    protected $CreateReservationResult = null;

    /**
     * @param Reservation $CreateReservationResult
     */
    public function __construct($CreateReservationResult)
    {
      $this->CreateReservationResult = $CreateReservationResult;
    }

    /**
     * @return Reservation
     */
    public function getCreateReservationResult()
    {
      return $this->CreateReservationResult;
    }

    /**
     * @param Reservation $CreateReservationResult
     * @return \App\Client\Soap\CreateReservationResponse
     */
    public function setCreateReservationResult($CreateReservationResult)
    {
      $this->CreateReservationResult = $CreateReservationResult;
      return $this;
    }

}
