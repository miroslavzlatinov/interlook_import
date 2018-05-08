<?php

namespace App\Client\Soap;

class ArrayOfTourist implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Tourist[] $Tourist
     */
    protected $Tourist = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Tourist[]
     */
    public function getTourist()
    {
      return $this->Tourist;
    }

    /**
     * @param Tourist[] $Tourist
     * @return \App\Client\Soap\ArrayOfTourist
     */
    public function setTourist(array $Tourist = null)
    {
      $this->Tourist = $Tourist;
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
      return isset($this->Tourist[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Tourist
     */
    public function offsetGet($offset)
    {
      return $this->Tourist[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Tourist $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Tourist[] = $value;
      } else {
        $this->Tourist[$offset] = $value;
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
      unset($this->Tourist[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Tourist Return the current element
     */
    public function current()
    {
      return current($this->Tourist);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Tourist);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Tourist);
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
      reset($this->Tourist);
    }

    /**
     * Countable implementation
     *
     * @return Tourist Return count of elements
     */
    public function count()
    {
      return count($this->Tourist);
    }

}
