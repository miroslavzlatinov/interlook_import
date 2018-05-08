<?php

namespace App\Client\Soap;

class GetReservationResponse
{

    /**
     * @var Reservation $GetReservationResult
     */
    protected $GetReservationResult = null;

    /**
     * @param Reservation $GetReservationResult
     */
    public function __construct($GetReservationResult)
    {
      $this->GetReservationResult = $GetReservationResult;
    }

    /**
     * @return Reservation
     */
    public function getGetReservationResult()
    {
      return $this->GetReservationResult;
    }

    /**
     * @param Reservation $GetReservationResult
     * @return \App\Client\Soap\GetReservationResponse
     */
    public function setGetReservationResult($GetReservationResult)
    {
      $this->GetReservationResult = $GetReservationResult;
      return $this;
    }

}
