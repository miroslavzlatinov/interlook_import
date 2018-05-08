<?php

namespace App\Client\Soap;

class CheckConnectResponse
{

    /**
     * @var boolean $CheckConnectResult
     */
    protected $CheckConnectResult = null;

    /**
     * @param boolean $CheckConnectResult
     */
    public function __construct($CheckConnectResult)
    {
      $this->CheckConnectResult = $CheckConnectResult;
    }

    /**
     * @return boolean
     */
    public function getCheckConnectResult()
    {
      return $this->CheckConnectResult;
    }

    /**
     * @param boolean $CheckConnectResult
     * @return \App\Client\Soap\CheckConnectResponse
     */
    public function setCheckConnectResult($CheckConnectResult)
    {
      $this->CheckConnectResult = $CheckConnectResult;
      return $this;
    }

}
