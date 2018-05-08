<?php

namespace App\Client\Soap;

class ArrayOfCity implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var City[] $City
     */
    protected $City = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return City[]
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param City[] $City
     * @return \App\Client\Soap\ArrayOfCity
     */
    public function setCity(array $City = null)
    {
      $this->City = $City;
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
      return isset($this->City[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return City
     */
    public function offsetGet($offset)
    {
      return $this->City[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param City $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->City[] = $value;
      } else {
        $this->City[$offset] = $value;
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
      unset($this->City[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return City Return the current element
     */
    public function current()
    {
      return current($this->City);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->City);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->City);
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
      reset($this->City);
    }

    /**
     * Countable implementation
     *
     * @return City Return count of elements
     */
    public function count()
    {
      return count($this->City);
    }

}
