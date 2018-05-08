<?php

namespace App\Client\Soap;

class GetSpoList
{

    /**
     * @var string $guid
     */
    protected $guid = null;

    /**
     * @var SPORequest $request
     */
    protected $request = null;

    /**
     * @param string $guid
     * @param SPORequest $request
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
     * @return \App\Client\Soap\GetSpoList
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

    /**
     * @return SPORequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param SPORequest $request
     * @return \App\Client\Soap\GetSpoList
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
