<?php

namespace App\Client\Soap;

class CalculateSingleCostResponse
{

    /**
     * @var CostCalculateResult $CalculateSingleCostResult
     */
    protected $CalculateSingleCostResult = null;

    /**
     * @param CostCalculateResult $CalculateSingleCostResult
     */
    public function __construct($CalculateSingleCostResult)
    {
      $this->CalculateSingleCostResult = $CalculateSingleCostResult;
    }

    /**
     * @return CostCalculateResult
     */
    public function getCalculateSingleCostResult()
    {
      return $this->CalculateSingleCostResult;
    }

    /**
     * @param CostCalculateResult $CalculateSingleCostResult
     * @return \App\Client\Soap\CalculateSingleCostResponse
     */
    public function setCalculateSingleCostResult($CalculateSingleCostResult)
    {
      $this->CalculateSingleCostResult = $CalculateSingleCostResult;
      return $this;
    }

}
