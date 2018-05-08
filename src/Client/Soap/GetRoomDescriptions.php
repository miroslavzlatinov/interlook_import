<?php

namespace App\Client\Soap;

class GetRoomDescriptions
{

    /**
     * @var int $roomTypeId
     */
    protected $roomTypeId = null;

    /**
     * @var int $roomCategoryId
     */
    protected $roomCategoryId = null;

    /**
     * @param int $roomTypeId
     * @param int $roomCategoryId
     */
    public function __construct($roomTypeId, $roomCategoryId)
    {
      $this->roomTypeId = $roomTypeId;
      $this->roomCategoryId = $roomCategoryId;
    }

    /**
     * @return int
     */
    public function getRoomTypeId()
    {
      return $this->roomTypeId;
    }

    /**
     * @param int $roomTypeId
     * @return \App\Client\Soap\GetRoomDescriptions
     */
    public function setRoomTypeId($roomTypeId)
    {
      $this->roomTypeId = $roomTypeId;
      return $this;
    }

    /**
     * @return int
     */
    public function getRoomCategoryId()
    {
      return $this->roomCategoryId;
    }

    /**
     * @param int $roomCategoryId
     * @return \App\Client\Soap\GetRoomDescriptions
     */
    public function setRoomCategoryId($roomCategoryId)
    {
      $this->roomCategoryId = $roomCategoryId;
      return $this;
    }

}
