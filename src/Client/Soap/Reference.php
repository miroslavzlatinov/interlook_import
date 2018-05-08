<?php

namespace App\Client\Soap;

abstract class Reference extends Entity
{

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $NameLat
     */
    protected $NameLat = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $CodeLat
     */
    protected $CodeLat = null;

    /**
     * @var string $Unicode
     */
    protected $Unicode = null;

    /**
     * @param int $ID
     */
    public function __construct($ID)
    {
      parent::__construct($ID);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \App\Client\Soap\Reference
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getNameLat()
    {
      return $this->NameLat;
    }

    /**
     * @param string $NameLat
     * @return \App\Client\Soap\Reference
     */
    public function setNameLat($NameLat)
    {
      $this->NameLat = $NameLat;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \App\Client\Soap\Reference
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodeLat()
    {
      return $this->CodeLat;
    }

    /**
     * @param string $CodeLat
     * @return \App\Client\Soap\Reference
     */
    public function setCodeLat($CodeLat)
    {
      $this->CodeLat = $CodeLat;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnicode()
    {
      return $this->Unicode;
    }

    /**
     * @param string $Unicode
     * @return \App\Client\Soap\Reference
     */
    public function setUnicode($Unicode)
    {
      $this->Unicode = $Unicode;
      return $this;
    }

}
