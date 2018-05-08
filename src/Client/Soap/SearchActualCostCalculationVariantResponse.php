<?php

namespace App\Client\Soap;

class SearchActualCostCalculationVariantResponse
{

    /**
     * @var ServiceResultOfCostCalculationVariant $SearchActualCostCalculationVariantResult
     */
    protected $SearchActualCostCalculationVariantResult = null;

    /**
     * @param ServiceResultOfCostCalculationVariant $SearchActualCostCalculationVariantResult
     */
    public function __construct($SearchActualCostCalculationVariantResult)
    {
      $this->SearchActualCostCalculationVariantResult = $SearchActualCostCalculationVariantResult;
    }

    /**
     * @return ServiceResultOfCostCalculationVariant
     */
    public function getSearchActualCostCalculationVariantResult()
    {
      return $this->SearchActualCostCalculationVariantResult;
    }

    /**
     * @param ServiceResultOfCostCalculationVariant $SearchActualCostCalculationVariantResult
     * @return \App\Client\Soap\SearchActualCostCalculationVariantResponse
     */
    public function setSearchActualCostCalculationVariantResult($SearchActualCostCalculationVariantResult)
    {
      $this->SearchActualCostCalculationVariantResult = $SearchActualCostCalculationVariantResult;
      return $this;
    }

}
