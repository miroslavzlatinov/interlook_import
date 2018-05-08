<?php

namespace App\Client\Soap;

class ParameterPair
{

    /**
     * @var anyType $Value
     */
    protected $Value = null;

    /**
     * @var string $Key
     */
    protected $Key = null;

    /**
     * @param string $Key
     */
    public function __construct($Key)
    {
      $this->Key = $Key;
    }

    /**
     * @return anyType
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param anyType $Value
     * @return \App\Client\Soap\ParameterPair
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return string
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param string $Key
     * @return \App\Client\Soap\ParameterPair
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
