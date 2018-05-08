<?php

namespace App\Client\Soap;

class ArrayOfHotelLinkTypeEx implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var HotelLinkTypeEx[] $HotelLinkTypeEx
     */
    protected $HotelLinkTypeEx = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return HotelLinkTypeEx[]
     */
    public function getHotelLinkTypeEx()
    {
      return $this->HotelLinkTypeEx;
    }

    /**
     * @param HotelLinkTypeEx[] $HotelLinkTypeEx
     * @return \App\Client\Soap\ArrayOfHotelLinkTypeEx
     */
    public function setHotelLinkTypeEx(array $HotelLinkTypeEx = null)
    {
      $this->HotelLinkTypeEx = $HotelLinkTypeEx;
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
      return isset($this->HotelLinkTypeEx[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return HotelLinkTypeEx
     */
    public function offsetGet($offset)
    {
      return $this->HotelLinkTypeEx[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param HotelLinkTypeEx $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->HotelLinkTypeEx[] = $value;
      } else {
        $this->HotelLinkTypeEx[$offset] = $value;
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
      unset($this->HotelLinkTypeEx[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return HotelLinkTypeEx Return the current element
     */
    public function current()
    {
      return current($this->HotelLinkTypeEx);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->HotelLinkTypeEx);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->HotelLinkTypeEx);
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
      reset($this->HotelLinkTypeEx);
    }

    /**
     * Countable implementation
     *
     * @return HotelLinkTypeEx Return count of elements
     */
    public function count()
    {
      return count($this->HotelLinkTypeEx);
    }

}
