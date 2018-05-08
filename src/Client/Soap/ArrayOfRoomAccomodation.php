<?php

namespace App\Client\Soap;

class ArrayOfRoomAccomodation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RoomAccomodation[] $RoomAccomodation
     */
    protected $RoomAccomodation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RoomAccomodation[]
     */
    public function getRoomAccomodation()
    {
      return $this->RoomAccomodation;
    }

    /**
     * @param RoomAccomodation[] $RoomAccomodation
     * @return \App\Client\Soap\ArrayOfRoomAccomodation
     */
    public function setRoomAccomodation(array $RoomAccomodation = null)
    {
      $this->RoomAccomodation = $RoomAccomodation;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->RoomAccomodation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RoomAccomodation
     */
    public function offsetGet($offset)
    {
      return $this->RoomAccomodation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RoomAccomodation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RoomAccomodation[] = $value;
      } else {
        $this->RoomAccomodation[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->RoomAccomodation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RoomAccomodation Return the current element
     */
    public function current()
    {
      return current($this->RoomAccomodation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RoomAccomodation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RoomAccomodation);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->RoomAccomodation);
    }

    /**
     * Countable implementation
     *
     * @return RoomAccomodation Return count of elements
     */
    public function count()
    {
      return count($this->RoomAccomodation);
    }

}
