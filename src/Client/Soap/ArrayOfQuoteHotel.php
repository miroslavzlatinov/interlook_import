<?php

namespace App\Client\Soap;

class ArrayOfQuoteHotel implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var QuoteHotel[] $QuoteHotel
     */
    protected $QuoteHotel = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return QuoteHotel[]
     */
    public function getQuoteHotel()
    {
      return $this->QuoteHotel;
    }

    /**
     * @param QuoteHotel[] $QuoteHotel
     * @return \App\Client\Soap\ArrayOfQuoteHotel
     */
    public function setQuoteHotel(array $QuoteHotel = null)
    {
      $this->QuoteHotel = $QuoteHotel;
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
      return isset($this->QuoteHotel[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return QuoteHotel
     */
    public function offsetGet($offset)
    {
      return $this->QuoteHotel[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param QuoteHotel $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->QuoteHotel[] = $value;
      } else {
        $this->QuoteHotel[$offset] = $value;
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
      unset($this->QuoteHotel[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return QuoteHotel Return the current element
     */
    public function current()
    {
      return current($this->QuoteHotel);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->QuoteHotel);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->QuoteHotel);
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
      reset($this->QuoteHotel);
    }

    /**
     * Countable implementation
     *
     * @return QuoteHotel Return count of elements
     */
    public function count()
    {
      return count($this->QuoteHotel);
    }

}
