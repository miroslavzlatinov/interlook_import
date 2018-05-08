<?php

namespace App\Client\Soap;

class GetExcursionsResponse
{

    /**
     * @var ArrayOfExcursion $GetExcursionsResult
     */
    protected $GetExcursionsResult = null;

    /**
     * @param ArrayOfExcursion $GetExcursionsResult
     */
    public function __construct($GetExcursionsResult)
    {
      $this->GetExcursionsResult = $GetExcursionsResult;
    }

    /**
     * @return ArrayOfExcursion
     */
    public function getGetExcursionsResult()
    {
      return $this->GetExcursionsResult;
    }

    /**
     * @param ArrayOfExcursion $GetExcursionsResult
     * @return \App\Client\Soap\GetExcursionsResponse
     */
    public function setGetExcursionsResult($GetExcursionsResult)
    {
      $this->GetExcursionsResult = $GetExcursionsResult;
      return $this;
    }

}
