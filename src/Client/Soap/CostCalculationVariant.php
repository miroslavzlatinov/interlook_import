<?php

namespace App\Client\Soap;

class CostCalculationVariant
{

    /**
     * @var int $RoomAccommodationId
     */
    protected $RoomAccommodationId = null;

    /**
     * @var int $RoomTypeId
     */
    protected $RoomTypeId = null;

    /**
     * @var int $RoomCategoryId
     */
    protected $RoomCategoryId = null;

    /**
     * @var int $PansionId
     */
    protected $PansionId = null;

    /**
     * @var string $RoomAccommodationName
     */
    protected $RoomAccommodationName = null;

    /**
     * @var string $RoomTypeName
     */
    protected $RoomTypeName = null;

    /**
     * @var string $RoomCategoryName
     */
    protected $RoomCategoryName = null;

    /**
     * @var string $PansionName
     */
    protected $PansionName = null;

    /**
     * @var int $CountAdult
     */
    protected $CountAdult = null;

    /**
     * @var int $CountChildren
     */
    protected $CountChildren = null;

    /**
     * @var int $Quota
     */
    protected $Quota = null;

    /**
     * @param int $RoomAccommodationId
     * @param int $RoomTypeId
     * @param int $RoomCategoryId
     * @param int $PansionId
     * @param int $CountAdult
     * @param int $CountChildren
     * @param int $Quota
     */
    public function __construct($RoomAccommodationId, $RoomTypeId, $RoomCategoryId, $PansionId, $CountAdult, $CountChildren, $Quota)
    {
      $this->RoomAccommodationId = $RoomAccommodationId;
      $this->RoomTypeId = $RoomTypeId;
      $this->RoomCategoryId = $RoomCategoryId;
      $this->PansionId = $PansionId;
      $this->CountAdult = $CountAdult;
      $this->CountChildren = $CountChildren;
      $this->Quota = $Quota;
    }

    /**
     * @return int
     */
    public function getRoomAccommodationId()
    {
      return $this->RoomAccommodationId;
    }

    /**
     * @param int $RoomAccommodationId
     * @return \App\Client\Soap\CostCalculationVariant
     */
    public function setRoomAccommodationId($RoomAccommodationId)
    {
      $this->RoomAccommodationId = $RoomAccommodationId;
      return $this;
    }

    /**
     * @return int
     */
    public function getRoomTypeId()
    {
      return $this->RoomTypeId;
    }

    /**
     * @param int $RoomTypeId
     * @return \App\Client\Soap\CostCalculationVariant
     */
    public function setRoomTypeId($RoomTypeId)
    {
      $this->RoomTypeId = $RoomTypeId;
      return $this;
    }

    /**
     * @return int
     */
    public function getRoomCategoryId()
    {
      return $this->RoomCategoryId;
    }

    /**
     * @param int $RoomCategoryId
     * @return \App\Client\Soap\CostCalculationVariant
     */
    public function setRoomCategoryId($RoomCategoryId)
    {
      $this->RoomCategoryId = $RoomCategoryId;
      return $this;
    }

    /**
     * @return int
     */
    public function getPansionId()
    {
      return $this->PansionId;
    }

    /**
     * @param int $PansionId
     * @return \App\Client\Soap\CostCalculationVariant
     */
    public function setPansionId($PansionId)
    {
      $this->PansionId = $PansionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoomAccommodationName()
    {
      return $this->RoomAccommodationName;
    }

    /**
     * @param string $RoomAccommodationName
     * @return \App\Client\Soap\CostCalculationVariant
     */
    public function setRoomAccommodationName($RoomAccommodationName)
    {
      $this->RoomAccommodationName = $RoomAccommodationName;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoomTypeName()
    {
      return $this->RoomTypeName;
    }

    /**
     * @param string $RoomTypeName
     * @return \App\Client\Soap\CostCalculationVariant
     */
    public function setRoomTypeName($RoomTypeName)
    {
      $this->RoomTypeName = $RoomTypeName;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoomCategoryName()
    {
      return $this->RoomCategoryName;
    }

    /**
     * @param string $RoomCategoryName
     * @return \App\Client\Soap\CostCalculationVariant
     */
    public function setRoomCategoryName($RoomCategoryName)
    {
      $this->RoomCategoryName = $RoomCategoryName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPansionName()
    {
      return $this->PansionName;
    }

    /**
     * @param string $PansionName
     * @return \App\Client\Soap\CostCalculationVariant
     */
    public function setPansionName($PansionName)
    {
      $this->PansionName = $PansionName;
      return $this;
    }

    /**
     * @return int
     */
    public function getCountAdult()
    {
      return $this->CountAdult;
    }

    /**
     * @param int $CountAdult
     * @return \App\Client\Soap\CostCalculationVariant
     */
    public function setCountAdult($CountAdult)
    {
      $this->CountAdult = $CountAdult;
      return $this;
    }

    /**
     * @return int
     */
    public function getCountChildren()
    {
      return $this->CountChildren;
    }

    /**
     * @param int $CountChildren
     * @return \App\Client\Soap\CostCalculationVariant
     */
    public function setCountChildren($CountChildren)
    {
      $this->CountChildren = $CountChildren;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuota()
    {
      return $this->Quota;
    }

    /**
     * @param int $Quota
     * @return \App\Client\Soap\CostCalculationVariant
     */
    public function setQuota($Quota)
    {
      $this->Quota = $Quota;
      return $this;
    }

}
