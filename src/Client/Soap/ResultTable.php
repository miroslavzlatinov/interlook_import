<?php

namespace App\Client\Soap;

class ResultTable
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $any
     */
    public function __construct($any)
    {
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \App\Client\Soap\ResultTable
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
