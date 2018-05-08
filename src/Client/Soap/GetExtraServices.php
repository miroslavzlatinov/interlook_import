<?php

namespace App\Client\Soap;

class GetExtraServices
{

    /**
     * @var string $guid
     */
    protected $guid = null;

    /**
     * @var ExtraServiceRequest $request
     */
    protected $request = null;

    /**
     * @param string $guid
     * @param ExtraServiceRequest $request
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
     * @return \App\Client\Soap\GetExtraServices
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

    /**
     * @return ExtraServiceRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param ExtraServiceRequest $request
     * @return \App\Client\Soap\GetExtraServices
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
