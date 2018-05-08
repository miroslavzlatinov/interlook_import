<?php

namespace App\Client\Soap;

class GetRoomCategoriesResponse
{

    /**
     * @var ArrayOfRoomCategory $GetRoomCategoriesResult
     */
    protected $GetRoomCategoriesResult = null;

    /**
     * @param ArrayOfRoomCategory $GetRoomCategoriesResult
     */
    public function __construct($GetRoomCategoriesResult)
    {
      $this->GetRoomCategoriesResult = $GetRoomCategoriesResult;
    }

    /**
     * @return ArrayOfRoomCategory
     */
    public function getGetRoomCategoriesResult()
    {
      return $this->GetRoomCategoriesResult;
    }

    /**
     * @param ArrayOfRoomCategory $GetRoomCategoriesResult
     * @return \App\Client\Soap\GetRoomCategoriesResponse
     */
    public function setGetRoomCategoriesResult($GetRoomCategoriesResult)
    {
      $this->GetRoomCategoriesResult = $GetRoomCategoriesResult;
      return $this;
    }

}
