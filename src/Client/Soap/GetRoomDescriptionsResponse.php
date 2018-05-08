<?php

namespace App\Client\Soap;

class GetRoomDescriptionsResponse
{

    /**
     * @var ArrayOfAdditionalDescription $GetRoomDescriptionsResult
     */
    protected $GetRoomDescriptionsResult = null;

    /**
     * @param ArrayOfAdditionalDescription $GetRoomDescriptionsResult
     */
    public function __construct($GetRoomDescriptionsResult)
    {
      $this->GetRoomDescriptionsResult = $GetRoomDescriptionsResult;
    }

    /**
     * @return ArrayOfAdditionalDescription
     */
    public function getGetRoomDescriptionsResult()
    {
      return $this->GetRoomDescriptionsResult;
    }

    /**
     * @param ArrayOfAdditionalDescription $GetRoomDescriptionsResult
     * @return \App\Client\Soap\GetRoomDescriptionsResponse
     */
    public function setGetRoomDescriptionsResult($GetRoomDescriptionsResult)
    {
      $this->GetRoomDescriptionsResult = $GetRoomDescriptionsResult;
      return $this;
    }

}
