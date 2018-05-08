<?php

namespace App\Client\Soap;

class CancelReservationResponse
{

    /**
     * @var string $CancelReservationResult
     */
    protected $CancelReservationResult = null;

    /**
     * @param string $CancelReservationResult
     */
    public function __construct($CancelReservationResult)
    {
      $this->CancelReservationResult = $CancelReservationResult;
    }

    /**
     * @return string
     */
    public function getCancelReservationResult()
    {
      return $this->CancelReservationResult;
    }

    /**
     * @param string $CancelReservationResult
     * @return \App\Client\Soap\CancelReservationResponse
     */
    public function setCancelReservationResult($CancelReservationResult)
    {
      $this->CancelReservationResult = $CancelReservationResult;
      return $this;
    }

}
