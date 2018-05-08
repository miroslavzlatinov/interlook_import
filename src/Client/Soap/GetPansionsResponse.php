<?php

namespace App\Client\Soap;

class GetPansionsResponse
{

    /**
     * @var ArrayOfPansion $GetPansionsResult
     */
    protected $GetPansionsResult = null;

    /**
     * @param ArrayOfPansion $GetPansionsResult
     */
    public function __construct($GetPansionsResult)
    {
      $this->GetPansionsResult = $GetPansionsResult;
    }

    /**
     * @return ArrayOfPansion
     */
    public function getGetPansionsResult()
    {
      return $this->GetPansionsResult;
    }

    /**
     * @param ArrayOfPansion $GetPansionsResult
     * @return \App\Client\Soap\GetPansionsResponse
     */
    public function setGetPansionsResult($GetPansionsResult)
    {
      $this->GetPansionsResult = $GetPansionsResult;
      return $this;
    }

}
