<?php

namespace App\Client\Soap;

class SpoPriceMarkDownloadedResponse
{

    /**
     * @var boolean $SpoPriceMarkDownloadedResult
     */
    protected $SpoPriceMarkDownloadedResult = null;

    /**
     * @param boolean $SpoPriceMarkDownloadedResult
     */
    public function __construct($SpoPriceMarkDownloadedResult)
    {
      $this->SpoPriceMarkDownloadedResult = $SpoPriceMarkDownloadedResult;
    }

    /**
     * @return boolean
     */
    public function getSpoPriceMarkDownloadedResult()
    {
      return $this->SpoPriceMarkDownloadedResult;
    }

    /**
     * @param boolean $SpoPriceMarkDownloadedResult
     * @return \App\Client\Soap\SpoPriceMarkDownloadedResponse
     */
    public function setSpoPriceMarkDownloadedResult($SpoPriceMarkDownloadedResult)
    {
      $this->SpoPriceMarkDownloadedResult = $SpoPriceMarkDownloadedResult;
      return $this;
    }

}
