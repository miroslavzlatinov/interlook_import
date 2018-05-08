<?php

namespace App\Client\Soap;

class CreatePaymentForDogovorResponse
{

    /**
     * @var string $CreatePaymentForDogovorResult
     */
    protected $CreatePaymentForDogovorResult = null;

    /**
     * @var int $orderId
     */
    protected $orderId = null;

    /**
     * @param string $CreatePaymentForDogovorResult
     * @param int $orderId
     */
    public function __construct($CreatePaymentForDogovorResult, $orderId)
    {
      $this->CreatePaymentForDogovorResult = $CreatePaymentForDogovorResult;
      $this->orderId = $orderId;
    }

    /**
     * @return string
     */
    public function getCreatePaymentForDogovorResult()
    {
      return $this->CreatePaymentForDogovorResult;
    }

    /**
     * @param string $CreatePaymentForDogovorResult
     * @return \App\Client\Soap\CreatePaymentForDogovorResponse
     */
    public function setCreatePaymentForDogovorResult($CreatePaymentForDogovorResult)
    {
      $this->CreatePaymentForDogovorResult = $CreatePaymentForDogovorResult;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
      return $this->orderId;
    }

    /**
     * @param int $orderId
     * @return \App\Client\Soap\CreatePaymentForDogovorResponse
     */
    public function setOrderId($orderId)
    {
      $this->orderId = $orderId;
      return $this;
    }

}
