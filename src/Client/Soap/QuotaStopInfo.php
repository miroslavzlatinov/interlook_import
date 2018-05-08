<?php

namespace App\Client\Soap;

class QuotaStopInfo
{

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var int $SvKey
     */
    protected $SvKey = null;

    /**
     * @var string $CodeName
     */
    protected $CodeName = null;

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @var string $SubCode1Name
     */
    protected $SubCode1Name = null;

    /**
     * @var int $SubCode1
     */
    protected $SubCode1 = null;

    /**
     * @var int $SubCode2
     */
    protected $SubCode2 = null;

    /**
     * @var string $SubCode3Name
     */
    protected $SubCode3Name = null;

    /**
     * @var int $SubCode3
     */
    protected $SubCode3 = null;

    /**
     * @var int $RoomDescriptionID
     */
    protected $RoomDescriptionID = null;

    /**
     * @var string $RoomDescriptionName
     */
    protected $RoomDescriptionName = null;

    /**
     * @var int $Place
     */
    protected $Place = null;

    /**
     * @var boolean $IsStop
     */
    protected $IsStop = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var \DateTime $UpdateDate
     */
    protected $UpdateDate = null;

    /**
     * @param int $ID
     * @param int $SvKey
     * @param string $CodeName
     * @param int $Code
     * @param string $SubCode1Name
     * @param int $SubCode1
     * @param int $SubCode2
     * @param string $SubCode3Name
     * @param int $SubCode3
     * @param int $RoomDescriptionID
     * @param string $RoomDescriptionName
     * @param int $Place
     * @param boolean $IsStop
     * @param \DateTime $Date
     * @param \DateTime $UpdateDate
     */
    public function __construct($ID, $SvKey, $CodeName, $Code, $SubCode1Name, $SubCode1, $SubCode2, $SubCode3Name, $SubCode3, $RoomDescriptionID, $RoomDescriptionName, $Place, $IsStop, \DateTime $Date, \DateTime $UpdateDate)
    {
      $this->ID = $ID;
      $this->SvKey = $SvKey;
      $this->CodeName = $CodeName;
      $this->Code = $Code;
      $this->SubCode1Name = $SubCode1Name;
      $this->SubCode1 = $SubCode1;
      $this->SubCode2 = $SubCode2;
      $this->SubCode3Name = $SubCode3Name;
      $this->SubCode3 = $SubCode3;
      $this->RoomDescriptionID = $RoomDescriptionID;
      $this->RoomDescriptionName = $RoomDescriptionName;
      $this->Place = $Place;
      $this->IsStop = $IsStop;
      $this->Date = $Date->format(\DateTime::ATOM);
      $this->UpdateDate = $UpdateDate->format(\DateTime::ATOM);
    }

    /**
     * @return int
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param int $ID
     * @return \App\Client\Soap\QuotaStopInfo
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return int
     */
    public function getSvKey()
    {
      return $this->SvKey;
    }

    /**
     * @param int $SvKey
     * @return \App\Client\Soap\QuotaStopInfo
     */
    public function setSvKey($SvKey)
    {
      $this->SvKey = $SvKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodeName()
    {
      return $this->CodeName;
    }

    /**
     * @param string $CodeName
     * @return \App\Client\Soap\QuotaStopInfo
     */
    public function setCodeName($CodeName)
    {
      $this->CodeName = $CodeName;
      return $this;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param int $Code
     * @return \App\Client\Soap\QuotaStopInfo
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubCode1Name()
    {
      return $this->SubCode1Name;
    }

    /**
     * @param string $SubCode1Name
     * @return \App\Client\Soap\QuotaStopInfo
     */
    public function setSubCode1Name($SubCode1Name)
    {
      $this->SubCode1Name = $SubCode1Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getSubCode1()
    {
      return $this->SubCode1;
    }

    /**
     * @param int $SubCode1
     * @return \App\Client\Soap\QuotaStopInfo
     */
    public function setSubCode1($SubCode1)
    {
      $this->SubCode1 = $SubCode1;
      return $this;
    }

    /**
     * @return int
     */
    public function getSubCode2()
    {
      return $this->SubCode2;
    }

    /**
     * @param int $SubCode2
     * @return \App\Client\Soap\QuotaStopInfo
     */
    public function setSubCode2($SubCode2)
    {
      $this->SubCode2 = $SubCode2;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubCode3Name()
    {
      return $this->SubCode3Name;
    }

    /**
     * @param string $SubCode3Name
     * @return \App\Client\Soap\QuotaStopInfo
     */
    public function setSubCode3Name($SubCode3Name)
    {
      $this->SubCode3Name = $SubCode3Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getSubCode3()
    {
      return $this->SubCode3;
    }

    /**
     * @param int $SubCode3
     * @return \App\Client\Soap\QuotaStopInfo
     */
    public function setSubCode3($SubCode3)
    {
      $this->SubCode3 = $SubCode3;
      return $this;
    }

    /**
     * @return int
     */
    public function getRoomDescriptionID()
    {
      return $this->RoomDescriptionID;
    }

    /**
     * @param int $RoomDescriptionID
     * @return \App\Client\Soap\QuotaStopInfo
     */
    public function setRoomDescriptionID($RoomDescriptionID)
    {
      $this->RoomDescriptionID = $RoomDescriptionID;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoomDescriptionName()
    {
      return $this->RoomDescriptionName;
    }

    /**
     * @param string $RoomDescriptionName
     * @return \App\Client\Soap\QuotaStopInfo
     */
    public function setRoomDescriptionName($RoomDescriptionName)
    {
      $this->RoomDescriptionName = $RoomDescriptionName;
      return $this;
    }

    /**
     * @return int
     */
    public function getPlace()
    {
      return $this->Place;
    }

    /**
     * @param int $Place
     * @return \App\Client\Soap\QuotaStopInfo
     */
    public function setPlace($Place)
    {
      $this->Place = $Place;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsStop()
    {
      return $this->IsStop;
    }

    /**
     * @param boolean $IsStop
     * @return \App\Client\Soap\QuotaStopInfo
     */
    public function setIsStop($IsStop)
    {
      $this->IsStop = $IsStop;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
      if ($this->Date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date
     * @return \App\Client\Soap\QuotaStopInfo
     */
    public function setDate(\DateTime $Date)
    {
      $this->Date = $Date->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateDate()
    {
      if ($this->UpdateDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->UpdateDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $UpdateDate
     * @return \App\Client\Soap\QuotaStopInfo
     */
    public function setUpdateDate(\DateTime $UpdateDate)
    {
      $this->UpdateDate = $UpdateDate->format(\DateTime::ATOM);
      return $this;
    }

}
