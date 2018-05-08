<?php

namespace App\Client\Soap;

class ArrayOfAirport implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Airport[] $Airport
     */
    protected $Airport = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Airport[]
     */
    public function getAirport()
    {
      return $this->Airport;
    }

    /**
     * @param Airport[] $Airport
     * @return \App\Client\Soap\ArrayOfAirport
     */
    public function setAirport(array $Airport = null)
    {
      $this->Airport = $Airport;
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
      return isset($this->Airport[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Airport
     */
    public function offsetGet($offset)
    {
      return $this->Airport[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Airport $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Airport[] = $value;
      } else {
        $this->Airport[$offset] = $value;
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
      unset($this->Airport[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Airport Return the current element
     */
    public function current()
    {
      return current($this->Airport);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Airport);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Airport);
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
      reset($this->Airport);
    }

    /**
     * Countable implementation
     *
     * @return Airport Return count of elements
     */
    public function count()
    {
      return count($this->Airport);
    }

}
