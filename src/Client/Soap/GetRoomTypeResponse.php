<?php

namespace App\Client\Soap;

class GetRoomTypeResponse
{

    /**
     * @var ArrayOfRoomType $GetRoomTypeResult
     */
    protected $GetRoomTypeResult = null;

    /**
     * @param ArrayOfRoomType $GetRoomTypeResult
     */
    public function __construct($GetRoomTypeResult)
    {
      $this->GetRoomTypeResult = $GetRoomTypeResult;
    }

    /**
     * @return ArrayOfRoomType
     */
    public function getGetRoomTypeResult()
    {
      return $this->GetRoomTypeResult;
    }

    /**
     * @param ArrayOfRoomType $GetRoomTypeResult
     * @return \App\Client\Soap\GetRoomTypeResponse
     */
    public function setGetRoomTypeResult($GetRoomTypeResult)
    {
      $this->GetRoomTypeResult = $GetRoomTypeResult;
      return $this;
    }

}
