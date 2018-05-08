<?php

namespace App\Client\Soap;

class GetRoomAccommodationsResponse
{

    /**
     * @var ArrayOfRoomAccomodation $GetRoomAccommodationsResult
     */
    protected $GetRoomAccommodationsResult = null;

    /**
     * @param ArrayOfRoomAccomodation $GetRoomAccommodationsResult
     */
    public function __construct($GetRoomAccommodationsResult)
    {
      $this->GetRoomAccommodationsResult = $GetRoomAccommodationsResult;
    }

    /**
     * @return ArrayOfRoomAccomodation
     */
    public function getGetRoomAccommodationsResult()
    {
      return $this->GetRoomAccommodationsResult;
    }

    /**
     * @param ArrayOfRoomAccomodation $GetRoomAccommodationsResult
     * @return \App\Client\Soap\GetRoomAccommodationsResponse
     */
    public function setGetRoomAccommodationsResult($GetRoomAccommodationsResult)
    {
      $this->GetRoomAccommodationsResult = $GetRoomAccommodationsResult;
      return $this;
    }

}
