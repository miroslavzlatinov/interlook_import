<?php

namespace App\Client\Soap;

class SearchActualCostCalculationVariant
{

    /**
     * @var string $guid
     */
    protected $guid = null;

    /**
     * @var SearchActualCostCalculationVariantRequest $request
     */
    protected $request = null;

    /**
     * @param string $guid
     * @param SearchActualCostCalculationVariantRequest $request
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
     * @return \App\Client\Soap\SearchActualCostCalculationVariant
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

    /**
     * @return SearchActualCostCalculationVariantRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param SearchActualCostCalculationVariantRequest $request
     * @return \App\Client\Soap\SearchActualCostCalculationVariant
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
