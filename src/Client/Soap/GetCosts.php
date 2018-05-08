<?php

namespace App\Client\Soap;

class GetCosts
{

    /**
     * @var string $guid
     */
    protected $guid = null;

    /**
     * @var CostRequest $request
     */
    protected $request = null;

    /**
     * @param string $guid
     * @param CostRequest $request
     */
    public function __construct($guid, $request)
    {
      $this->guid = $guid;
      $this->request = $request;
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
     * @return \App\Client\Soap\GetCosts
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

    /**
     * @return CostRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param CostRequest $request
     * @return \App\Client\Soap\GetCosts
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
