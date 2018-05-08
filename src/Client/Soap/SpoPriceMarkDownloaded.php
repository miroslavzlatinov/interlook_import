<?php

namespace App\Client\Soap;

class SpoPriceMarkDownloaded
{

    /**
     * @var string $guid
     */
    protected $guid = null;

    /**
     * @var int $spoKey
     */
    protected $spoKey = null;

    /**
     * @var int $variantOfCost
     */
    protected $variantOfCost = null;

    /**
     * @var int $svKey
     */
    protected $svKey = null;

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @param string $guid
     * @param int $spoKey
     * @param int $variantOfCost
     * @param int $svKey
     * @param int $code
     */
    public function __construct($guid, $spoKey, $variantOfCost, $svKey, $code)
    {
      $this->guid = $guid;
      $this->spoKey = $spoKey;
      $this->variantOfCost = $variantOfCost;
      $this->svKey = $svKey;
      $this->code = $code;
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
     * @return \App\Client\Soap\SpoPriceMarkDownloaded
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

    /**
     * @return int
     */
    public function getSpoKey()
    {
      return $this->spoKey;
    }

    /**
     * @param int $spoKey
     * @return \App\Client\Soap\SpoPriceMarkDownloaded
     */
    public function setSpoKey($spoKey)
    {
      $this->spoKey = $spoKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getVariantOfCost()
    {
      return $this->variantOfCost;
    }

    /**
     * @param int $variantOfCost
     * @return \App\Client\Soap\SpoPriceMarkDownloaded
     */
    public function setVariantOfCost($variantOfCost)
    {
      $this->variantOfCost = $variantOfCost;
      return $this;
    }

    /**
     * @return int
     */
    public function getSvKey()
    {
      return $this->svKey;
    }

    /**
     * @param int $svKey
     * @return \App\Client\Soap\SpoPriceMarkDownloaded
     */
    public function setSvKey($svKey)
    {
      $this->svKey = $svKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param int $code
     * @return \App\Client\Soap\SpoPriceMarkDownloaded
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

}
