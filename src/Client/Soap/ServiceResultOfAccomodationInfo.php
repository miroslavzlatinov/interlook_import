<?php

namespace App\Client\Soap;

class ServiceResultOfAccomodationInfo
{

    /**
     * @var ArrayOfAccomodationInfo $Data
     */
    protected $Data = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var string $Error
     */
    protected $Error = null;

    /**
     * @param string $Message
     * @param string $Error
     */
    public function __construct($Message, $Error)
    {
      $this->Message = $Message;
      $this->Error = $Error;
    }

    /**
     * @return ArrayOfAccomodationInfo
     */
    public function getData()
    {
      return $this->Data;
    }

    /**
     * @param ArrayOfAccomodationInfo $Data
     * @return \App\Client\Soap\ServiceResultOfAccomodationInfo
     */
    public function setData($Data)
    {
      $this->Data = $Data;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return \App\Client\Soap\ServiceResultOfAccomodationInfo
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return string
     */
    public function getError()
    {
      return $this->Error;
    }

    /**
     * @param string $Error
     * @return \App\Client\Soap\ServiceResultOfAccomodationInfo
     */
    public function setError($Error)
    {
      $this->Error = $Error;
      return $this;
    }

}
