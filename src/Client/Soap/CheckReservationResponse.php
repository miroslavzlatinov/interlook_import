<?php

namespace App\Client\Soap;

class CheckReservationResponse
{

    /**
     * @var AmountSum $CheckReservationResult
     */
    protected $CheckReservationResult = null;

    /**
     * @param AmountSum $CheckReservationResult
     */
    public function __construct($CheckReservationResult)
    {
      $this->CheckReservationResult = $CheckReservationResult;
    }

    /**
     * @return AmountSum
     */
    public function getCheckReservationResult()
    {
      return $this->CheckReservationResult;
    }

    /**
     * @param AmountSum $CheckReservationResult
     * @return \App\Client\Soap\CheckReservationResponse
     */
    public function setCheckReservationResult($CheckReservationResult)
    {
      $this->CheckReservationResult = $CheckReservationResult;
      return $this;
    }

}
