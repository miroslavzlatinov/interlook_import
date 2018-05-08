<?php

namespace App\Client\Soap;

class CancelReservation
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
     * @var int $annulReasonID
     */
    protected $annulReasonID = null;

    /**
     * @var string $note
     */
    protected $note = null;

    /**
     * @param string $guid
     * @param int $dgKey
     * @param int $annulReasonID
     * @param string $note
     */
    public function __construct($guid, $dgKey, $annulReasonID, $note)
    {
      $this->guid = $guid;
      $this->dgKey = $dgKey;
      $this->annulReasonID = $annulReasonID;
      $this->note = $note;
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
     * @return \App\Client\Soap\CancelReservation
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
     * @return \App\Client\Soap\CancelReservation
     */
    public function setDgKey($dgKey)
    {
      $this->dgKey = $dgKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getAnnulReasonID()
    {
      return $this->annulReasonID;
    }

    /**
     * @param int $annulReasonID
     * @return \App\Client\Soap\CancelReservation
     */
    public function setAnnulReasonID($annulReasonID)
    {
      $this->annulReasonID = $annulReasonID;
      return $this;
    }

    /**
     * @return string
     */
    public function getNote()
    {
      return $this->note;
    }

    /**
     * @param string $note
     * @return \App\Client\Soap\CancelReservation
     */
    public function setNote($note)
    {
      $this->note = $note;
      return $this;
    }

}
