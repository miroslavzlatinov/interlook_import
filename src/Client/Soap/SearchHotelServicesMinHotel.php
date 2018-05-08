<?php

namespace App\Client\Soap;

class SearchHotelServicesMinHotel
{

    /**
     * @var string $guid
     */
    protected $guid = null;

    /**
     * @var SearchHotelServiceRequest $request
     */
    protected $request = null;

    /**
     * @param string $guid
     * @param SearchHotelServiceRequest $request
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
     * @return \Client\Soap\SearchHotelServicesMinHotel
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

    /**
     * @return SearchHotelServiceRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param SearchHotelServiceRequest $request
     * @return \Client\Soap\SearchHotelServicesMinHotel
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
