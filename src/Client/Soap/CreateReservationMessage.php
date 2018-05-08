<?php

namespace App\Client\Soap;

class CreateReservationMessage
{

    /**
     * @var string $guid
     */
    protected $guid = null;

    /**
     * @var int $dgKey
     */
    protected $dgKey = null;

    /**
     * @var string $message
     */
    protected $message = null;

    /**
     * @var string $senderName
     */
    protected $senderName = null;

    /**
     * @param string $guid
     * @param int $dgKey
     * @param string $message
     * @param string $senderName
     */
    public function __construct($guid, $dgKey, $message, $senderName)
    {
      $this->guid = $guid;
      $this->dgKey = $dgKey;
      $this->message = $message;
      $this->senderName = $senderName;
    }

    /**
     * @return string
     */
    public function getGuid()
    {
      return $this->guid;
    }

    /**
     * @param string $guid
     * @return \App\Client\Soap\CreateReservationMessage
     */
    public function setGuid($guid)
    {
      $this->guid = $guid;
      return $this;
    }

    /**
     * @return int
     */
    public function getDgKey()
    {
      return $this->dgKey;
    }

    /**
     * @param int $dgKey
     * @return \App\Client\Soap\CreateReservationMessage
     */
    public function setDgKey($dgKey)
    {
      $this->dgKey = $dgKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param string $message
     * @return \App\Client\Soap\CreateReservationMessage
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenderName()
    {
      return $this->senderName;
    }

    /**
     * @param string $senderName
     * @return \App\Client\Soap\CreateReservationMessage
     */
    public function setSenderName($senderName)
    {
      $this->senderName = $senderName;
      return $this;
    }

}
