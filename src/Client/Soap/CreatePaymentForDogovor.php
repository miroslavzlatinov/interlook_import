<?php

namespace App\Client\Soap;

class CreatePaymentForDogovor
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
     * @var float $payment
     */
    protected $payment = null;

    /**
     * @param string $guid
     * @param int $dgKey
     * @param float $payment
     */
    public function __construct($guid, $dgKey, $payment)
    {
      $this->guid = $guid;
      $this->dgKey = $dgKey;
      $this->payment = $payment;
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
     * @return \App\Client\Soap\CreatePaymentForDogovor
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
     * @return \App\Client\Soap\CreatePaymentForDogovor
     */
    public function setDgKey($dgKey)
    {
      $this->dgKey = $dgKey;
      return $this;
    }

    /**
     * @return float
     */
    public function getPayment()
    {
      return $this->payment;
    }

    /**
     * @param float $payment
     * @return \App\Client\Soap\CreatePaymentForDogovor
     */
    public function setPayment($payment)
    {
      $this->payment = $payment;
      return $this;
    }

}
